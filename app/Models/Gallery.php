<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galerija';

    protected $fillable = [
        'malaslika',
        'velikaslika',
        'idgalerije',
        'opis'
    ];
}
