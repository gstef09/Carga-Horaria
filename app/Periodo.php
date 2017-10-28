<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = [
        'año',
        'periodo',
        'estado',
        'fecha_inicio',
        'fecha_final',
    ];
}
