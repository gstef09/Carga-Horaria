<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $fillable = ['nombre'];
    protected $hidden = ['created_at', 'updated_at'];

    public function carreras(){
        return $this->hasMany('App\Carrera');
    }
}
