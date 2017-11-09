<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=['descripcion'];
    protected $hidden = ['created_at', 'update_at'];  
    
    public function facultad(){
        return $this->belongsTo('App\Facultad');
    }
}