<?php

namespace App\Http\Controllers;

use App\Models\Administracija\Homepage\Slider;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $filters = $this->estateFilters;
        $slider  = Slider::get();

        return view('pages.home', compact('filters', 'slider'));
    }

    public function signIn(){
        return view('layout.includes/sign-in');
    }
    public function signMeIn(Request $request){
        try{
            $user = User::where('email', $request->email)->where('password', $request->password)->firstOrFail();
            Session::put('ID', Crypt::encryptString($user->id));
            return redirect()->route('admin');
        }catch (\Exception $e){
            return back();
        }
    }
    public function logout(){
        Session::forget('ID');  // Korisnik je izlogovan u potpunosti
        return redirect()->route('home');
    }
}
