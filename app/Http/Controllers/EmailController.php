<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller{
    public function estate(Request $request){
        if($request->purpose == 0) $purpose = "Posjeta nekretnine";
        else $purpose = "Dodatne informacije";

        $data = array(
            'name'    => $request->name,
            'message' => $request->message,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'purpose' => $purpose,
            'id'      => $request->id
        );

        try{
            Mail::to('aladin.kapic@infodom.ba')->send(new SendMail($data));
            Mail::to($request->email)->send(new SendMail($data));

            return json_encode(array('code' => '0000', 'message' => 'Poruka je uspješno poslana !'));
        }catch (\Exception $e){
            return json_encode(array('code' => '0001', 'message' => 'Desila se greška. Provjerite unesene podatke te pokušajte ponovo!'));
        }
    }


    public function contact(Request $request){
        $purpose = "Upit sa aplikacije";

        $data = array(
            'name'    => $request->name,
            'message' => $request->message,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'purpose' => $purpose
        );

        try{
            Mail::to('aladin.kapic@infodom.ba')->send(new SendMail($data));
            Mail::to($request->email)->send(new SendMail($data));

            return json_encode(array('code' => '0000', 'message' => 'Poruka je uspješno poslana !'));
        }catch (\Exception $e){
            return json_encode(array('code' => '0001', 'message' => 'Desila se greška. Provjerite unesene podatke te pokušajte ponovo!'));
        }
    }
}
