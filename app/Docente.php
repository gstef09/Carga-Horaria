<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = [
        'abreviatura',
        'nombres',
        'apellidos',
        'identificacion',
        'tipo_identificacion',
        'email_personal',
        'email_institucional',
        'celular',
        'telefono',
        'nacionalidad',
        'residencia',
        'direccion',
        'tipo_contrato',
        'estado',
    ];

    public function nombreCompleto()
    {
        return $this->nombres .' '. $this->apellidos;
    }
}
