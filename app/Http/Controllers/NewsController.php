<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Administracija\Filter;
use App\Models\Administracija\Blog\Blog;
use Illuminate\Http\Request;

class NewsController extends Controller{
    public function index(){
        $filters = $this->estateFilters;

        $posts = Blog::with('categoryRel');
        $posts = Filter::filter($posts);

        return view('pages.news.index', compact('filters', 'posts'));
    }
    public function preview($id){
        $filters = $this->estateFilters;
        $post = Blog::where('id', $id)
            ->with('posts.text')
            ->with('posts.imagRel')
            ->with('categoryRel')
            ->first();

        return view('pages.news.preview', compact('filters', 'post'));
    }
}
