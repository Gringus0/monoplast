<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlankoOjacanaIFalt extends Model
{
    // grupa 6
    protected $table = 'grupa6';

    protected $fillable = [
        'velicina',
        'boja1'
    ];

    public $timestamps = false;
}
