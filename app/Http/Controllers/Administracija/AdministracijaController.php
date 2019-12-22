<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Sifarnici;
use Illuminate\Http\Request;

class AdministracijaController extends Controller{
    public function index(){
        return view('administracija.pages.index');
    }

    /************************************************ KEYWORDS ********************************************************/
    public function allKeywords(){
        $sifarnici = Sifarnici::where('id', '>', 0);
        $sifarnici = Filter::filter($sifarnici);

        $filters = [
            'id' => '#',
            'value' => 'Vrijednost',
            'name' => 'Naziv'
        ];

        return view('administracija.pages.rest.sifarnici', compact('sifarnici', 'filters'));
    }


    /*********************************************** ALL ESTATES ******************************************************/

    public function addEstate(){
        return view('administracija.pages.estates.add-estate');
    }
}
