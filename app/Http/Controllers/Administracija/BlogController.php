<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Blog\Blog;
use App\Models\Administracija\Blog\BlogRel;
use App\Models\Administracija\Blog\BlogText;
use App\Models\Administracija\Estates\Estate;
use App\Models\Administracija\Sifarnici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller{
    public function index(){
        $posts = Blog::with('categoryRel');
        $posts = Filter::filter($posts);

        $filters = [
            'id' => '#',
            'header' => 'Naslov posta',
            'categoryRel.name' => 'Kategorija',
            'short_desc' => 'Kratki opis'
        ];

        return view('administracija.pages.blog.index', compact('posts', 'filters'));
    }
    public function newPost(){
        $category = Sifarnici::where('type', 'blog_category')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite kategoriju', '0');

        return view('administracija.pages.blog.new-post', compact('category'));
    }
    public function saveNewPost(Request $request){
        $request->request->add(['user_id' => Crypt::decryptString(Session::get('ID'))]);

        try{
            $post = Blog::create(
                $request->except(['_token', 'photo-input'])
            );
        }catch (\Exception $e){dd($e);}

        return redirect()->route('admin.blog.index');
    }
    public function previewPost($id){
        $post = Blog::where('id', $id)->first();
        $category = Sifarnici::where('type', 'blog_category')->orderBy('name')->get()->pluck('name', 'value')->prepend('Odaberite kategoriju', '0');

        return view('administracija.pages.blog.new-post', compact('category', 'post'));
    }
    public function updateNewPost(Request $request){
        try{
            $post = Blog::where('id', $request->id)->update(
                $request->except(['_token', 'photo-input', 'id'])
            );
        }catch (\Exception $e){dd($e);}

        return redirect()->route('admin.blog.index');
    }



    /*********************************************** BLOG DETAILS *****************************************************/
    public function blogDetails($id){
        $post = Blog::where('id', $id)->first();

        return view('administracija.pages.blog.blog-details', compact('post'));
    }

    // Blog tekst
    public function newText($id){
        $post = Blog::where('id', $id)->first();

        return view('administracija.pages.blog.details.text', compact('post'));
    }
    public function insertBlogText(Request $request){
        try{
            $text = BlogText::create(
                $request->except('_token')
            );

            $rel = BlogRel::create([
                'blog_id' => $request->blog_id,
                'element_id' => $text->id,
                'what' => 'text_part'
            ]);
        }catch (\Exception $e){}

        return redirect()->route('admin.blog.blog-details', ['id' => $request->blog_id]);
    }

    // Blog image
    public function newImage($id){

    }
}
