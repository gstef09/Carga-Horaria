<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = ['nombre'];
    protected $hidden = ['created_at', 'updated_at'];

    public function facultad(){
        return $this->belongsTo('App\Facultad');
    }
}
