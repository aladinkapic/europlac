<?php

namespace App\Http\Controllers\Administracija;

use App\Http\Controllers\Controller;
use App\Models\Administracija\Blog\Blog;
use App\Models\Administracija\Blog\BlogImage;
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
        $post = Blog::where('id', $id)
            ->with('posts.text')
            ->with('posts.imagRel')
            ->with('categoryRel')
            ->first();

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
    public function editText($id){
        $text = BlogText::where('id', $id)->first();
        $post = Blog::where('id', $text->blog_id)->first();

        return view('administracija.pages.blog.details.text', compact('post', 'text'));
    }
    public function updateBlogText(Request $request){
        try{
            $text = BlogText::where('id', $request->id)->update(
                $request->except(['_token', 'id'])
            );
        }catch (\Exception $e){}

        return redirect()->route('admin.blog.blog-details', ['id' => $request->blog_id]);
    }
    public function deleteBlogText($id){
        $text = BlogText::where('id', $id)->first();
        $blog_id = $text->blog_id;

        $rel = BlogRel::where('blog_id', $blog_id)->where('element_id', $id)->delete();
        $text->delete();

        return redirect()->route('admin.blog.blog-details', ['id' => $blog_id]);
    }

    // Blog image
    public function newImage($id){
        $post = Blog::where('id', $id)->first();

        return view('administracija.pages.blog.details.image', compact('post'));
    }
    public function insertBlogImage(Request $request){
        try{
            $image = BlogImage::create(
                $request->except(['_token', 'photo-input'])
            );

            $rel = BlogRel::create([
                'blog_id' => $request->blog_id,
                'element_id' => $image->id,
                'what' => 'image_part'
            ]);
        }catch (\Exception $e){}

        return redirect()->route('admin.blog.blog-details', ['id' => $request->blog_id]);
    }
    public function editImage($id){
        $post  = Blog::where('id', $id)->first();
        $image = BlogImage::where('id', $id)->first();

        return view('administracija.pages.blog.details.image', compact('post','image'));
    }
    public function updateBlogImage(Request $request){
        try{
            $image = BlogImage::where('id', $request->id)->update([
                'image' => $request->image
            ]);

            $rel = BlogRel::where('element_id', $request->id)->where('what', 'image_part')->first();
        }catch (\Exception $e){}
        $rel = BlogRel::where('element_id', $request->id)->where('what', 'image_part')->first();

        return redirect()->route('admin.blog.blog-details', ['id' => $rel->blog_id]);
    }
    public function deleteBlogImage($id){
        $image = BlogImage::where('id', $id)->first();
        $rel = BlogRel::where('element_id', $image->id)->where('what', 'image_part')->first();
        $blog_id = $rel->blog_id;

        $rel->delete();
        $image->delete();

        return redirect()->route('admin.blog.blog-details', ['id' => $blog_id]);
    }


    public function blogTextDelete($post, $id){
        try{
            $rel  = BlogRel::where('blog_id', $post)->where('element_id', $id)->where('what', 'text_part')->delete();
            $text = BlogText::where('id', $id)->delete();
        }catch (\Exception $e){}
        return back();
    }
    public function blogImageDelete($post, $id){
        try{
            $rel   = BlogRel::where('blog_id', $post)->where('element_id', $id)->where('what', 'image_part')->delete();
            $image = BlogImage::where('id', $id)->first();
            try{
                unlink("images/blog/all-images/".$image->image); // First, delete image
            }catch (\Exception $e){}
            $image = BlogImage::where('id', $id)->delete();
        }catch (\Exception $e){}
        return back();
    }

    public function delete($id){
        $post = Blog::where('id', $id)
            ->with('posts.text')
            ->with('posts.imagRel')
            ->with('categoryRel')
            ->first();

        foreach($post->posts as $elem){
            if($elem->what == 'text_part'){
                $this->blogTextDelete($id, $elem->text->id);
            }else if($elem->what == 'image_part'){
                $this->blogImageDelete($id, $elem->imagRel->id);
            }
        }

        try{
            unlink("images/blog/".$post->image); // First, delete image
            $post->delete();
        }catch (\Exception $e){}
        return redirect()->route('admin.blog.index');
    }
}
