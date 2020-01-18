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
        'vrsta' => array()
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



    }
}
