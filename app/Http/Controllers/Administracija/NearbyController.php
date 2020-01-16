<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Estates\Nearby;
use App\Models\Administracija\Sifarnici;
use Illuminate\Http\Request;

class NearbyController extends Controller{
    public function previewAll($id){
        $estate = Estate::where('id', $id)->first();

        $nearby = Nearby::where('estate_id', $id)->with('gradRel');
        $nearby = Filter::filter($nearby);

        $filters = [
            'id' => '#',
            'category' => 'Kategorija',
            'name'     => 'Naziv',
            'distance' => 'Udaljenost',
            'stars'    => 'Broj zvjezdica'
        ];
        return view('administracija.pages.estates.nearby.all', compact('nearby', 'filters', 'estate'));
    }

    public function insertNew($id){
        $estate   = Estate::where('id', $id)->first();
        $category = Sifarnici::where('type', 'nearby')->get()->pluck('name', 'value')->prepend('Odaberite kategoriju', '0');

        return view('administracija.pages.estates.nearby.insert-new', compact('estate', 'category'));
    }
    public function save(Request $request){
        if($request->category == 1){ // Education
            $request->request->add(['icon' => 'fas fa-graduation-cap']);
        }else if($request->category == 2){
            $request->request->add(['icon' => 'fas fa-bus']);
        }else if($request->category == 3){
            $request->request->add(['icon' => 'fas fa-cocktail']);
        }else if($request->category == 4){
            $request->request->add(['icon' => 'fas fa-landmark']);
        }else if($request->category == 5){
            $request->request->add(['icon' => 'fas fa-shopping-basket']);
        }

        try{
            $nearby = Nearby::create(
                $request->except(['_token'])
            );

            return redirect()->route('admin.preview-nearby', ['id' => $request->estate_id]);
        }catch (\Exception $e){dd($e);}
    }
}
