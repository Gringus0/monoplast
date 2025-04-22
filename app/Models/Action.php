<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'akcija';

    protected $fillable = [
        'naslov',
        'visina_akcije',
        'tekst',
        'slika',
        'slika2'
    ];
}
