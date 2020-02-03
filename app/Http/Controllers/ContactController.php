<?php

namespace App\Http\Controllers;

use App\Models\Administracija\Blog\Blog;
use Illuminate\Http\Request;

class ContactController extends Controller{
    public function index(){
        $filters = $this->estateFilters;
        $blog = Blog::take(3)->get();
        $footerEstate = $this->footerEstate;

        return view('pages.contact-us.index', compact('filters', 'blog', 'footerEstate'));
    }
}
