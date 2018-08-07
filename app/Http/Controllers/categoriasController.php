<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulos;
use App\colores;

use Illuminate\Support\Facades\DB;

class categoriasController extends Controller
{
    //Escritura
    public function indexForEscrituraWinideas(){
        //Título de la página
        $titulo = 'Escritura';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $escritura = DB::table('articulos')->where('categoria','ESCRITURA Y MÁS')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.escritura',compact('escritura','titulo'));
    }
    //Bolsas, maletas y textiles
    public function indexForBolsasWinideas(){
    	//Título de la página
        $titulo = 'Bolsas, maletas y textiles';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $bolsas = DB::table('articulos')->where('categoria','BOLSAS, MALETAS Y TEXTILES')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
    	return view('categories.bolsas_maletas_textiles',compact('bolsas','titulo'));
    }
    //Oficina
    public function indexForOficinaWinideas(){
        //Título de la página
        $titulo = 'Oficina';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $oficina = DB::table('articulos')->where('categoria','OFICINA')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.oficina',compact('oficina','titulo'));
    }

    //Kids
    public function indexForKidsWinideas(){
        //Título de la página
        $titulo = 'Kids';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $kids = DB::table('articulos')->where('categoria','KIDS')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.kids',compact('kids','titulo'));
    }
    //Tecnologia
    public function indexForTecnologiaWinideas(){
        //Título de la página
        $titulo = 'Tecnología';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $tecnologia = DB::table('articulos')->where('categoria','TECNOLOGÍA')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.tecnologias',compact('tecnologia','titulo'));
    }
    //Llaveros, linternas y herramientas
    public function indexForLinternasWinideas(){
       //Título de la página
        $titulo = 'Llaveros, linternas y herramientas';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $linternas = DB::table('articulos')->where('categoria','LLAVEROS, LINTERNAS Y HERRAMIE')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.llaveros_linternas_herramientas',compact('linternas','titulo'));
    }
    //Salud y belleza
    public function indexForSaludWinideas(){
        //Título de la página
        $titulo = 'Salud y belleza';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $salud = DB::table('articulos')->where('categoria','SALUD Y BELLEZA')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.salud_belleza',compact('salud','titulo'));
    }
    //Tazas, termos y cilindros
    public function indexForTazasWinideas(){
        //Título de la página
        $titulo = 'Tazas, termos y cilindros';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $tazas = DB::table('articulos')->where('categoria','TAZAS, TERMOS y CILINDROS')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.tazas_termos_cilindros',compact('tazas','titulo'));
    }
    //Hogar y estilo de vida
    public function indexForHogarWinideas(){
        //Título de la página
        $titulo = 'Hogar y estilo de vida';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $hogar = DB::table('articulos')->where('categoria','HOGAR Y ESTILO DE VIDA')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.hogar',compact('hogar', 'titulo'));
    }
    //Sublimacion
    public function indexForSublimacionWinideas(){
        //Título de la página
        $titulo = 'Sublimación';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $sublimacion = DB::table('articulos')->where('categoria','SUBLIMACIÓN')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.sublimacion',compact('sublimacion', 'titulo'));
    }
    //Viaje y recreación
    public function indexForViajeWinideas(){
        //Título de la página
        $titulo = 'Viaje y recreación';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $viaje = DB::table('articulos')->where('categoria','VIAJE Y RECREACIÓN')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get(); 
        //Retorno de variables a vista
        return view('categories.viaje_recreacion',compact('viaje', 'titulo'));
    }
}
