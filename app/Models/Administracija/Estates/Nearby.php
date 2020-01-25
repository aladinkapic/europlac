<?php

namespace App\Models\Administracija\Estates;

use App\Models\Administracija\Sifarnici;
use Illuminate\Database\Eloquent\Model;

class Nearby extends Model{
    protected $table = 'estates_nearby';
    protected $guarded = ['id'];

    public function gradRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'category')->where('type', 'nearby');
    }
    public function categoryRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'category')->where('type', 'nearby');
    }
}
