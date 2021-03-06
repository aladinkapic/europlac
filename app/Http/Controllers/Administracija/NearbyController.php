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


    public function preview($id){
        $category = Sifarnici::where('type', 'nearby')->get()->pluck('name', 'value')->prepend('Odaberite kategoriju', '0');
        $nearby   = Nearby::where('id', $id)->first();
        $estate   = Estate::where('id', $nearby->estate_id)->first();

        return view('administracija.pages.estates.nearby.preview', compact('estate', 'category', 'nearby'));
    }

    public function update(Request $request){
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
            $nearby = Nearby::where('id', $request->id)->update(
                $request->except(['_token', 'estate_id', 'id'])
            );

            return redirect()->route('admin.preview-nearby', ['id' => $request->estate_id]);
        }catch (\Exception $e){dd($e);}
    }

    public function deleteNearby($id, $estate){
        try{
            $nearby = Nearby::where('id', $id)->delete();
        }catch (\Exception $e){}

        return redirect()->route('admin.preview-nearby', ['id' => $estate]);
    }
}
