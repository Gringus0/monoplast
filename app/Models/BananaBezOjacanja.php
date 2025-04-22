<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BananaBezOjacanja extends Model
{
    // grupa 1
    protected $table = 'grupa1';

    protected $fillable = [
        'velicina',
        'boja1',
        'boja2',
        'boja3',
        'boja4',
        'boja5',
    ];
}
