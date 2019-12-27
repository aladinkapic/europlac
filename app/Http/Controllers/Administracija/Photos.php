<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Photos extends Controller{
    public function saveEstateIcon(Request $request){
        if($request->has('photo-input')){
            $file = $request->file('photo-input');
            $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            echo $name = md5($file->getClientOriginalName().time()).'.'.$ext;

            $file->move("images/estates/", $name);
        }
    }
}
