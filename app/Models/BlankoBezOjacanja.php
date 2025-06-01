<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlankoBezOjacanja extends Model
{
    // grupa 5
    protected $table = 'grupa5';

    protected $fillable = [
        'velicina',
        'boja1'
    ];

    public $timestamps = false;
}
