<?php

namespace App\Http\Controllers\Old;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Files;
use App\Models\Administracija\FilesRelationships;
use App\Models\Administracija\Sifarnici;
use App\Models\Old\EstateOld;
use Illuminate\Http\Request;

class OldController extends Controller{
    public function insertCity($city){
        $sifarnici = Sifarnici::where('type', 'grad')->orderBy('value', 'desc')->first();
        try{
            $sif = Sifarnici::where('type', 'grad')->where('name', $city)->firstOrFail();
            return $sif->value;
        }catch (\Exception $e){

            $sif = Sifarnici::create([
                'type'  => 'grad',
                'value' => ($sifarnici->value + 1),
                'name'  => $city
            ]);

            return ($sifarnici->value + 1);
        }
    }
    public function index(){
        $estates = EstateOld::with('slike')->get();

        dd("end !");
        foreach($estates as $estate){
            if($estate->svrha == 'Prodaja') $svrha = 1;
            else $svrha = 2;

            if($estate->nekretnina == 'Apartman') $vrsta = 1;
            else if($estate->nekretnina == 'Kuca' || $estate->nekretnina == 'Kuce') $vrsta = 2;
            else if($estate->nekretnina == 'Poslovni prostor') $vrsta = 3;
            else if($estate->nekretnina == 'Stan') $vrsta = 4;
            else if($estate->nekretnina == 'Vikendica') $vrsta = 5;
            else if($estate->nekretnina == 'Vila') $vrsta = 6;
            else if($estate->nekretnina == 'Zemljiste') $vrsta = 7;
            else $vrsta = 1;

            $grad = $this->insertCity($estate->lokacija);

            if($estate->valute == 'BAM') $valuta = 1;
            else $valuta = 2;

            if($estate->stanje == 'Useljivo') $stanje = 1;
            else if($estate->stanje == 'U izgradnji') $stanje = 2;
            else if($estate->stanje == 'Potrebno renoviranje') $stanje = 4;
            else if($estate->stanje == 'Poljoprivredna parcela') $stanje = 5;
            else $stanje = 3;

            if((int)$estate->povObjekta and (int)$estate->cijena){
                $poKvadratu = round((int)$estate->cijena / (int)$estate->povObjekta );
            }else $poKvadratu = 0;

//            $naziv = $estate->naziv[0];
//            for($i=1; $i<strlen($estate->naziv); $i++){
//                $naziv .= mb_strtolower([$i]);
//            }

            try{
                foreach($estate->slike as $slika){
                    $slika = $slika->ime;
                    break;
                }

                $est = Estate::create([
                    'naziv' => $estate->naziv,
                    'svrha' => $svrha,
                    'grad'  => $grad,
                    'drzava' => 1,
                    'vrsta' => $vrsta,
                    'broj_soba' => $estate->brojSoba,
                    'broj_kupatila' => $estate->brojkupatila,
                    'cijena' => $estate->cijena,
                    'cijena_po_kvadratu' => $poKvadratu,
                    'valuta' => $valuta,
                    'povrsina' => $estate->povObjekta,
                    'povrsina_zemljista' => $estate->povZemljista,
                    'stanje' => $stanje,
                    'photo' => $slika,

                    'voda' => ($estate->voda) ? 2 : 1,
                    'struja' => ($estate->struja) ? 2 : 1,
                    'garaza' => ($estate->garaza) ? 2 : 1,
                    'klima' => ($estate->klima) ? 2 : 1,
                    'plin' => ($estate->plin) ? 2 : 1,
                    'internet' => ($estate->internet) ? 2 : 1,
                    'kanalizacija' => ($estate->kanalizacija) ? 2 : 1,
                    'parking' => ($estate->parking) ? 2 : 1,
                    'ostava' => ($estate->ostava) ? 2 : 1,
                    'namjestaj' => ($estate->namjestaj) ? 2 : 1,
                    'kablovska' => ($estate->kablovska) ? 2 : 1,
                    'videonadzor' => ($estate->videonadzor) ? 2 : 1,
                    'opis' => $estate->opis,
                    'y_koordinata' => $estate->sirina,
                    'x_koordinata' => $estate->visina,
                    'user_id' => 2,
                    'broj_pregleda' => $estate->brojPregleda,
                    'video' => $estate->video,
                    'izdvojeno' => 1,


                    'jedan_sprat' => 1,
                    'dva_sprata' => 1,
                    'tri_sprata' => 1,
                    'vise_spratova' => 1,
                    'jezgro_grada' => 1,
                    'pogled_na_grad' => 1,
                    'pogled_na_more' => 1,
                    'u_blizini_rijeke' => 1,
                    'bazen' => 1,
                    'sauna' => 1,
                    'jacuzzi' => 1,
                    'kuhinja_sa_sankom' => 1
                ]);

                foreach($estate->slike as $slika){
                    try{
                        $file = Files::create([
                            'file_name' => $slika->ime,
                            'type' => 'JPG'
                        ]);
                        $fileRel = FilesRelationships::create([
                            'model' => 'Models/Estate',
                            'property_id' => $est->id,
                            'file_id' => $file->id
                        ]);
                    }catch (\Exception $e){}
                }
            }catch (\Exception $e){

            }

        }
    }

    /********* DELETE IMAGES *************/
    public function deleteImages(){

    }
}
