<?php

namespace App\Models\Administracija\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogRel extends Model{
    protected $table = 'blog_rel';
    protected $guarded = ['id'];

    public function text(){
        return $this->hasOne(BlogText::class, 'id', 'element_id');
    }
    public function imagRel(){
        return $this->hasOne(BlogImage::class, 'id', 'element_id');
    }
}
