<?php

namespace App\Models\Administracija\Estates;

use App\Models\Administracija\Sifarnici;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model{
    protected $table = 'estates';
    protected $guarded = ['id'];

    public function gradRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'grad')->where('type', 'grad');
    }
    public function drzavaRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'drzava')->where('type', 'drzava');
    }
}
