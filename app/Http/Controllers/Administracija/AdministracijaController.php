<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Sifarnici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

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
    public function singleKeywordPreview($id){
        $sifarnik = Sifarnici::where('id', $id)->first();

        return view('administracija.pages.rest.uredite-sifarnik', compact('sifarnik'));
    }
    public function deleteKeyword($id){
        try{
            $sifarnik = Sifarnici::where('id', $id)->first();
            $key = $sifarnik->type;
            $sifarnik->delete();
        }catch (\Exception $e){}

        return redirect()->route('single-keyword', ['key' => $key]);
    }
    public function updateKeyword(Request $request){
        try{
            $sifarnik = Sifarnici::where('id', $request->id)->first()->update([
                'name' => $request->name
            ]);
        }catch (\Exception $e){}

        return back();
    }

    /*********************************************** ALL ESTATES ******************************************************/

    public function allEstates(){
        $estates = Estate::with('gradRel')
        ->with('drzavaRel');

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
    public function addEstate(){
        $daNe         = Sifarnici::where('type', 'da_ne')->get()->pluck('name', 'value');
        $grad         = Sifarnici::where('type', 'grad')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite grad', '0');
        $drzava       = Sifarnici::where('type', 'drzava')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite državu', '0');
        $svrha        = Sifarnici::where('type', 'svrha')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite svrhu', '0');
        $vrsta        = Sifarnici::where('type', 'vrsta')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite vrstu', '0');
        $br_soba      = Sifarnici::where('type', 'broj_soba')->get()->pluck('name', 'value')->prepend('Odaberite broj soba', '0');
        $br_kupatila  = Sifarnici::where('type', 'broj_kupatila')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite broj kupatila', '0');
        $stanje       = Sifarnici::where('type', 'stanje')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite stanje', '0');
        $valuta       = Sifarnici::where('type', 'valuta')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite valutu', '0');

        return view('administracija.pages.estates.add-estate', compact('daNe', 'grad', 'drzava', 'svrha', 'vrsta', 'br_soba', 'br_kupatila','stanje', 'valuta'));
    }
    public function saveEstate(Request $request){
        $request->request->add(['user_id' => Crypt::decryptString(Session::get('ID'))]);

        try{
            $estate = Estate::create(
                $request->except(['_token', 'photo-input'])
            );
        }catch (\Exception $e){}

        return back();
    }
    public function previewEstate($id, $what){
        $estate = Estate::where('id', $id)->first();
        if($what == true) $preview = $what;
        else $preview = null;

        $daNe         = Sifarnici::where('type', 'da_ne')->get()->pluck('name', 'value');
        $grad         = Sifarnici::where('type', 'grad')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite grad', '0');
        $drzava       = Sifarnici::where('type', 'drzava')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite državu', '0');
        $svrha        = Sifarnici::where('type', 'svrha')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite svrhu', '0');
        $vrsta        = Sifarnici::where('type', 'vrsta')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite vrstu', '0');
        $br_soba      = Sifarnici::where('type', 'broj_soba')->get()->pluck('name', 'value')->prepend('Odaberite broj soba', '0');
        $br_kupatila  = Sifarnici::where('type', 'broj_kupatila')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite broj kupatila', '0');
        $stanje       = Sifarnici::where('type', 'stanje')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite stanje', '0');
        $valuta       = Sifarnici::where('type', 'valuta')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite valutu', '0');

        return view('administracija.pages.estates.preview-estate', compact('daNe', 'grad', 'drzava', 'svrha', 'vrsta', 'br_soba', 'br_kupatila','stanje', 'estate', 'preview', 'valuta'));
    }

    public function updateEstate(Request $request){
        try{
            $estate = Estate::where('id', $request->id)->update(
                $request->except(['_token', 'id', 'photo-input'])
            );
        }catch (\Exception $e){}
        return redirect()->route('admin.preview-estate', ['id' => $request->id, 'what' => true]);
    }

    public function deleteEstate($id){
        try{
            $estate = Estate::where('id', $id)->delete();
        }catch (\Exception $e){}

        return redirect()->route('admin.all-estates');
    }
}
