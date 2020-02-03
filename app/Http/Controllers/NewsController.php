<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Administracija\Filter;
use App\Models\Administracija\Blog\Blog;
use App\Models\Administracija\Estates\Estate;
use Illuminate\Http\Request;

class NewsController extends Controller{
    public function index(){
        $filters = $this->estateFilters;

        $posts = Blog::with('categoryRel');
        $posts = Filter::filter($posts);
        $blog = Blog::take(3)->get();
        $footerEstate = $this->footerEstate;

        return view('pages.news.index', compact('filters', 'posts', 'blog', 'footerEstate'));
    }
    public function preview($id){
        $filters = $this->estateFilters;
        $post = Blog::where('id', $id)
            ->with('posts.text')
            ->with('posts.imagRel')
            ->with('categoryRel')
            ->first();

        $blog = Blog::take(3)->get();
        $footerEstate = $this->footerEstate;

        return view('pages.news.preview', compact('filters', 'post', 'blog', 'footerEstate'));
    }
}
