<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'korpa';

    protected $fillable = [
        'vrsta_kese',
        'materijal',
        'sirina',
        'visina',
        'boja_rucke',
        'boja_kese',
        'vrsta_stampe',
        'kolicina',
        'fajl1',
        'informacije',
        'broj_porudzbine',
        'sesija_kupca',
        'ime',
        'mail',
        'telefon',
        'firma',
        'datum'
    ];
}
