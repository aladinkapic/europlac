<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Administracija\Filter;
use App\Models\Administracija\Blog\Blog;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Sifarnici;
use Illuminate\Http\Request;

class NewsController extends Controller{
    public function index(){
        $filters = $this->estateFilters;

        $posts = Blog::with('categoryRel');
        $posts = Filter::filter($posts);
        $blog = Blog::take(3)->get();
        $footerEstate = $this->footerEstate;
        $categories = Sifarnici::where('type', 'blog_category')->get();
        isset($_GET['page']) ? $current_page = $_GET['page']: $current_page = 1;

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $actual_link = substr($actual_link, 0, -1);

        return view('pages.news.index', compact('filters', 'posts', 'blog', 'footerEstate', 'categories', 'current_page', 'actual_link'));
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
