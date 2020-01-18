<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller{
    public function myProfile(){
        $user = User::where('id', Crypt::decryptString(Session::get('ID')))->first();

        return view('administracija.pages.users.my-profile', compact('user'));
    }

    public function update(Request $request){
        try{
            $user = User::where('id', Crypt::decryptString(Session::get('ID')))->update(
                $request->except(['_token', 'photo-input'])
            );
        }catch (\Exception $e){dd($e);}
        return back();
    }
}
