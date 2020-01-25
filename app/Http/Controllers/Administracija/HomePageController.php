<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Homepage\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller{

    /************************************************* SLIDER *********************************************************/

    public function sliderPreview(){
        $slides = Slider::get();
        return view('administracija.pages.homepage.slider.slider-preview', compact('slides'));
    }
    public function sliderAdd(){
        return view('administracija.pages.homepage.slider.new-slider');
    }
    public function saveSlider(Request $request){
        try{
            $slider = Slider::create(
                $request->except(['_token', 'photo-input'])
            );
        }catch (\Exception $e){}

        return redirect()->route('admin.homepage.slider-preview');
    }
    public function sliderEdit($id){
        $slider = Slider::where('id', $id)->first();
        return view('administracija.pages.homepage.slider.new-slider', compact('slider'));
    }
    public function updateSlider(Request $request){
        try{
            $slider = Slider::where('id', $request->id)->update(
                $request->except(['_token', 'photo-input', 'id'])
            );
        }catch (\Exception $e){}

        return redirect()->route('admin.homepage.slider-preview');
    }


    /*************************************************** ESTATES ******************************************************/
    public function allEstates(){
        $estates = Estate::with('gradRel')
            ->with('drzavaRel')->where('prikaz_na_naslovnoj', 2);

        $estates = Filter::filter($estates);

        $filters = [
            'id' => '#',
            'naziv' => 'Naziv',
            'adresa' => 'Adresa',
            'gradRel.name' => 'Grad',
            'drzavaRel.name' => 'Država',
            'svrhaRel.name' => 'Svrha',
            'vrstaRel.name' => 'Vrsta',
            'stanjeRel.name' => 'Stanje'
        ];
        return view('administracija.pages.estates.all-estates', compact('estates', 'filters'));
    }
}
