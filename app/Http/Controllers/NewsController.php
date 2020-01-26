<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller{
    public function index(){
        $filters = $this->estateFilters;

        return view('pages.news.index', compact('filters'));
    }
    public function preview($id){
        $filters = $this->estateFilters;

        return view('pages.news.preview', compact('filters'));
    }
}
