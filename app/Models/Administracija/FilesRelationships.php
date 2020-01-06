<?php

namespace App\Models\Administracija;

use Illuminate\Database\Eloquent\Model;

class FilesRelationships extends Model{
    protected $table = '__files_rel';
    protected $guarded = ['id'];

    public function file(){
        return $this->hasOne(Files::class, 'id', 'file_id');
    }
}
