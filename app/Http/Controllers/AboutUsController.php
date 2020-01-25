<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller{
    public function index(){
        $filters = $this->estateFilters;

        return view('pages.about-us.index', compact('filters'));
    }
}
