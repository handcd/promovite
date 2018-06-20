<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    public function colores(){
    	return $this->hasMany(colores::class);
    }
}
