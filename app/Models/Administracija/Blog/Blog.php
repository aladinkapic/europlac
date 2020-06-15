<?php

namespace App\Models\Administracija\Blog;

use App\Models\Administracija\Sifarnici;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model{
    protected $table = 'blog';
    protected $guarded = ['id'];

    public function categoryRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'category')->where('type', 'blog_category');
    }
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function posts(){
        return $this->hasMany(BlogRel::class, 'blog_id', 'id');
    }

    public function date(){
        return Carbon::parse($this->created_at)->format('d.m.Y');
    }
    public function time(){
        return Carbon::parse($this->created_at)->format('h:i');
    }
}
