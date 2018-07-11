<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulos;
use App\colores;

use Illuminate\Support\Facades\DB;

class showController extends Controller
{
   public function showEscritura($id){ 
   		//encuentra el item al que se le dio click  		
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.escritura',compact('colores', 'articulo'));
    }
    
}
