<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BananaBezOjacanjaIFalt extends Model
{
    // grupa 4
    protected $table = 'grupa4';

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
