<?php

namespace App\Models\Administracija\Blog;

use App\Models\Administracija\Sifarnici;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model{
    protected $table = 'blog';
    protected $guarded = ['id'];

    public function categoryRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'category')->where('type', 'blog_category');
    }
}
