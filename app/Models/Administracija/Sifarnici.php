<?php

namespace App\Models\Administracija;

use Illuminate\Database\Eloquent\Model;

class Sifarnici extends Model{
    protected $table = '__sifarnici';
    protected $guarded = ['id'];

    protected $keywords = [
        'svrha' => 'Svrha',
        'vrsta' => 'Vrsta nekretnine',
        'broj_soba' => 'Broj soba',
        'broj_kupatila' => 'Broj kupatila',
        'drzava' => 'Država',
        'grad' => 'Grad',
        'stanje' => 'Stanje',
        'da_ne' => 'Da / Ne',
        'status' => 'Status',
        'nearby' => 'Objekti u blizini',
        'valuta' => 'Valuta',
        'blog_category' => 'Kategorije blog-a'
    ];

    public static function getKeywords(){ return (new self())->keywords; }
}
