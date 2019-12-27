<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Sifarnici;
use Illuminate\Http\Request;

class AdministracijaController extends Controller{
    public function index(){
        return view('administracija.pages.index');
    }

    /************************************************ KEYWORDS ********************************************************/

    public function allKeywords(){
        $sifarnici = Sifarnici::getKeywords();
        return view('administracija.pages.rest.svi-sifarnici', compact('sifarnici'));
    }
    public function singleKeyword($key){
        $sifarnici = Sifarnici::where('type', $key);
        $sifarnici = Filter::filter($sifarnici);

        $filters = [
            'id' => '#',
            'name' => 'Naziv',
            'type' => 'Keyword',
            'value' => 'Vrijednost'
        ];

        return view('administracija.pages.rest.sifarnici', compact('sifarnici', 'filters', 'key'));
    }
    public function newKeyword($key){
        try{
            $sifarnik = Sifarnici::where('type', $key)->orderBy('value', 'desc')->firstOrFail();
            $value = ($sifarnik->value + 1);
        }catch (\Exception $e){
            $value = 1;
        }

        return view('administracija.pages.rest.novi-sifarnik', compact('key', 'value'));
    }
    public function saveKeyword(Request $request){
        try{
            $sifarnik = Sifarnici::create([
                'name' => $request->name,
                'value' => $request->value,
                'type' => $request->type
            ]);
        }catch (\Exception $e){}

        return redirect()->route('single-keyword', $request->type);
    }

    /*********************************************** ALL ESTATES ******************************************************/

    public function allEstates(){
        $estates = Estate::where('id', '>', 0);

        $estates = Filter::filter($estates);

        $filters = [
            'id' => '#',
            'naziv' => 'Naziv',
            'adresa' => 'Adresa',
            'value' => 'Grad'
        ];
        return view('administracija.pages.estates.all-estates', compact('estates', 'filters'));
    }
    public function addEstate(){
        $daNe         = Sifarnici::where('type', 'da_ne')->get()->pluck('name', 'value');
        $grad         = Sifarnici::where('type', 'grad')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite grad', '0');
        $drzava       = Sifarnici::where('type', 'drzava')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite državu', '0');
        $svrha        = Sifarnici::where('type', 'svrha')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite svrhu', '0');
        $vrsta        = Sifarnici::where('type', 'vrsta')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite vrstu', '0');
        $br_soba      = Sifarnici::where('type', 'broj_soba')->get()->pluck('name', 'value')->prepend('Odaberite broj soba', '0');
        $br_kupatila  = Sifarnici::where('type', 'broj_kupatila')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite broj kupatila', '0');
        $stanje       = Sifarnici::where('type', 'stanje')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite stanje', '0');

        return view('administracija.pages.estates.add-estate', compact('daNe', 'grad', 'drzava', 'svrha', 'vrsta', 'br_soba', 'br_kupatila','stanje'));
    }
    public function saveEstate(Request $request){
        try{
            $estate = Estate::create(
                $request->except(['_token'])
            );
        }catch (\Exception $e){}

        return back();
    }
}
