<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BananaOjacanaIliFleksibilna extends Model
{
    // grupa2
    protected $table = 'grupa2';

    protected $fillable = [
        'velicina',
        'boja1',
        'boja2',
        'boja3',
        'boja4',
        'boja5',
    ];
}
