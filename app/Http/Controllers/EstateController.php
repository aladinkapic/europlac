<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Administracija\Filter;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\FilesRelationships;
use Illuminate\Http\Request;

class EstateController extends Controller{
    public function index(){
        $estates = Estate::with('gradRel')
            ->with('drzavaRel');

        $estates = Filter::filter($estates);
        $filters = $this->estateFilters;

//        dd($estates->total()); // Number of pages

        return view('pages.real-estates.index', compact('estates', 'filters'));
    }

    public function preview($id){
        $estate = Estate::where('id', $id)->with('gradRel')
            ->with('drzavaRel')->first();
        $images = FilesRelationships::where('property_id', $estate->id)->where('model', 'Models/Estate')->with('file')->get();
        $files  = FilesRelationships::where('property_id', $estate->id)->where('model', 'Models/Estate/Files')->with('file')->get();
        $filters = $this->estateFilters;

        return view('pages.real-estates.preview', compact('estate', 'images', 'filters', 'files'));
    }
}
