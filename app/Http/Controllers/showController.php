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
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();  

        return view('show.escritura',compact('colores', 'articulo'));
    }
    public function showBolsas($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        
        return view('show.bolsas_maletas_textiles',compact('colores', 'articulo'));
    }
    public function showOficina($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
       $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.oficina',compact('colores', 'articulo'));
    }
    public function showKids($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.kids',compact('colores', 'articulo'));
    }
    public function showTecnologia($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.tecnologia',compact('colores', 'articulo'));
    }
    public function showLlaveros($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
       $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.llaveros_linternas_herramientas',compact('colores', 'articulo'));
    }
    public function showSalud($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.salud_belleza',compact('colores', 'articulo'));
    }
    public function showTazas($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.tazas-termos-cilindros',compact('colores', 'articulo'));
    }
    public function showHogar($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        return view('show.hogar',compact('colores', 'articulo'));
    }
    public function showSublimacion($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.sublimacion',compact('colores', 'articulo'));
    }
    public function showViaje($id){ 
        //encuentra el item al que se le dio click          
        $item = Articulos::find($id);
        //Selecciona los colores para el articulo
        $colores = DB::table('colores')->select(DB::raw('color'))->where('modelo',$item->modelo)->distinct()->get();
        //primer color
        //Obtiene el primer registro y color de cada modelo
       $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->where('colores.modelo',$item->modelo)->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $articulo = $item->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->first();
        //return $articulo;
        return view('show.viaje-recreacion',compact('colores', 'articulo'));
    }
}
