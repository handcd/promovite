<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colores extends Model
{
    public function producto(){
    	return $this->belongsTo(productos::class);
    }
    public function Articulos(){
    	return $this->belongsTo(Articulos::class);
    }
    
}
