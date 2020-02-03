<?php

namespace App\Models\Old;

use Illuminate\Database\Eloquent\Model;

class EstateOld extends Model{
    protected $connection = 'mysql2';
    protected $guarded = ['id'];
    protected $table = 'nekretnina';

    public function slike(){
        return $this->hasMany(ImagesOld::class, 'idpost', 'id');
    }

}
