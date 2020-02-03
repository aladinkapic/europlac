<?php

namespace App\Models\Old;

use Illuminate\Database\Eloquent\Model;

class ImagesOld extends Model{
    protected $connection = 'mysql2';
    protected $guarded = ['id'];
    protected $table = 'slike';
}
