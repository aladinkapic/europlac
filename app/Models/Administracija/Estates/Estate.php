<?php

namespace App\Models\Administracija\Estates;

use App\Models\Administracija\Sifarnici;
use App\User;
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
    public function svrhaRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'svrha')->where('type', 'svrha');
    }
    public function vrstaRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'vrsta')->where('type', 'vrsta');
    }
    public function stanjeRel(){
        return $this->hasOne(Sifarnici::class, 'value', 'stanje')->where('type', 'stanje');
    }

    // Nearby
    public function nearby(){
        return $this->hasMany(Nearby::class, 'estate_id', 'id');
    }
    public function nearby_education(){
        return $this->hasMany(Nearby::class, 'estate_id', 'id')->where('category', 1);
    }
    public function nearby_transport(){
        return $this->hasMany(Nearby::class, 'estate_id', 'id')->where('category', 2);
    }
    public function nearby_clubs(){
        return $this->hasMany(Nearby::class, 'estate_id', 'id')->where('category', 3);
    }
    public function nearby_parks(){
        return $this->hasMany(Nearby::class, 'estate_id', 'id')->where('category', 4);
    }
    public function nearby_shops(){
        return $this->hasMany(Nearby::class, 'estate_id', 'id')->where('category', 5);
    }

    // Users
    public function userRel(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
