<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BananaOjacanaIliFleksibilnaIFalt extends Model
{
    // grupa 3
    protected $table = 'grupa3';

    protected $fillable = [
        'velicina',
        'boja1',
        'boja2',
        'boja3',
        'boja4',
        'boja5',
    ];

    public $timestamps = false;
}
