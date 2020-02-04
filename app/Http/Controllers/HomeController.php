<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Administracija\Blog\Blog;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Homepage\Slider;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller{
    public function index(){
        $filters = $this->estateFilters;
        $slider  = Slider::get();

        // Numbers
        $number_of_estates = Estate::get()->count();
        $total_money = round((DB::table('estates')->sum('cijena') / 1000000 ) / 1.95, 1);

        $estates = Estate::where('prikaz_na_naslovnoj', 2)->inRandomOrder()->take(3)
            ->with('gradRel')
            ->with('drzavaRel')
            ->with('valutaRel')
            ->with('brojSlika')
            ->get();

        $blog = Blog::take(3)->get();
        $footerEstate = $this->footerEstate;

        return view('pages.home', compact('filters', 'slider', 'number_of_estates', 'total_money', 'estates', 'blog', 'footerEstate'));
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


    /*********************************************** CONTACT US *******************************************************/
    public function contactUs(){

    }
}
