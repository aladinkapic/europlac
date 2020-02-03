<?php

namespace App\Http\Controllers;

use App\Models\Administracija\Estates\Estate;
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
    public $footerEstate = null;
    private $months = array('JAN', 'FEB', 'MAR', 'APR', 'MAJ', 'JUN', 'JUL', 'AUG', 'SEP', 'OKT', 'NOV', 'DEC');
    private $weekDays = array('NED', 'PON', 'UTO', 'SRI', 'ČET', 'PET', 'SUB');
    private $weekDaysFull = array('Nedjelja', 'Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak', 'Subota');
    public $times = array("08:00", "08:30", "09:00","09:30","10:00","10:30","11:30","12:00","12:30","13:00","13:30","14:00","14:30","15:00","15:30","16:00","16:30");

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


        $this->footerEstate = Estate::where('izdvojeno', 2)->inRandomOrder()
            ->with('gradRel')
            ->with('drzavaRel')
            ->with('valutaRel')
            ->with('brojSlika')
            ->with('userRel')
            ->first();
    }

    public static function getShortMonth($month){
        return (new self)->months[(int)$month - 1];
    }
    public static function getWeekDay($day){
        return (new self)->weekDays[(int)$day];
    }
    public static function getFullWeekDay($day){
        return (new self)->weekDaysFull[(int)$day];
    }
}
