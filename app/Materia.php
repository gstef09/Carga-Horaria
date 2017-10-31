<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable =[
        'codigo_materia',
        'materia',
        'semestre',
        'creditos',
        'tipo_materia',
    ];

    protected $hidden = ['created_at','updated_at']; 
    
    public function tipoMateria(){
       
        return str_replace("_"," ",$this->tipo_materia);
    }
}

