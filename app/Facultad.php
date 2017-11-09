<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = "facultades";
    protected $fillable = ['nombre'];
    protected $hidden = ['created_at', 'updated_at'];

    public function carreras(){
        return $this->hasMany('App\Carrera');
    }
    public function doecente(){
        return $this->hasMany('App\Doecente');
    }
    public function facultad(){
        return $this->belongsTo('App\Cursos');
    }
}
