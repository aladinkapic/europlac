<?php

namespace App\Http\Controllers;

use App\Models\Administracija\Sifarnici;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $estateFilters = array(
        'grad' => array(),
        'drzava' => array(),
        'svrha' => array(),
        'vrsta' => array(),
        'stanje' => array(),
        'broj_kupatila' => array(),
        'broj_soba' => array()
    );

    public function __construct(){
        // Grad
        array_push($this->estateFilters['grad'], Sifarnici::where('type', 'grad')->orderBy('name')->get()->pluck('name', 'value'));
        // Država
        array_push($this->estateFilters['drzava'], Sifarnici::where('type', 'drzava')->orderBy('name')->get()->pluck('name', 'value'));
        // Svrha prodaje
        array_push($this->estateFilters['svrha'], Sifarnici::where('type', 'svrha')->orderBy('name')->get()->pluck('name', 'value'));
        // Vrsta
        array_push($this->estateFilters['vrsta'], Sifarnici::where('type', 'vrsta')->orderBy('name')->get()->pluck('name', 'value'));
        // stanje
        array_push($this->estateFilters['stanje'], Sifarnici::where('type', 'stanje')->orderBy('name')->get()->pluck('name', 'value'));
        // Broj soba
        array_push($this->estateFilters['broj_soba'], Sifarnici::where('type', 'broj_soba')->get()->pluck('name', 'value'));
        // Broj kupatila
        array_push($this->estateFilters['broj_kupatila'], Sifarnici::where('type', 'broj_kupatila')->get()->pluck('name', 'value'));



    }
}
