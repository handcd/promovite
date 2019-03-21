<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulos;
use App\colores;


class categoriasController extends Controller
{
    public function search($search){
        $search = urldecode($search);
        $colors = Colores::select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        $articulo = Articulos::select()
                    ->where('articulos.modelo', 'LIKE', '%'.$search.'%')->distinct('modelo')
                    ->orWhere(DB::raw("CONCAT(articulos.catalogo,'-',articulos.modelo)"), 'like', '%'.$search.'%')
                    ->joinSub($colors,'colors',function ($join){
                        $join->on('articulos.modelo','=','colors.modelo');
                    })
                    ->orWhere('articulos.subcategoria', 'LIKE', '%'.$search.'%')
                    ->orWhere('articulos.catalogo','LIKE', '%'.$search.'%')->get();

        if (count($articulo) == 0){
            return View('search')
            ->with('message', 'Inténtalo de nuevo o consulta a tu agente de ventas')
            ->with('search', $search)
            ->with('titulo','Búsqueda');
        } else{
            return View('search')
            ->with('articulo', $articulo)
            ->with('search', $search)
            ->with('titulo','Búsqueda');
        }
    }
    //Nosotros
    public function Nosotros(){
        //Título de la página
        $titulo = 'Nosotros';
        return view('nosotros',compact('titulo'));
    }
    //Inicio
    public function index(){
        //Título de la página
        $titulo = 'Bienvenido';
        return view('inicio',compact('titulo'));
    }
    //Escritura
    public function indexForEscrituraWinideas(Request $request){
        //Título de la página
        $titulo = 'Escritura';
        //Obtiene el primer registro y color de cada modelo
        $colors = Colores::select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color '))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $escritura = Articulos::where('categoria','Escritura y mas')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria');
        //return $escritura;
        //Retorno de variables a vista
        return view('categories.escritura',compact('escritura','titulo'));
    }
    //Bolsas, maletas y textiles
    public function indexForBolsasWinideas(){
    	//Título de la página
        $titulo = 'Bolsas, maletas y textiles';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $bolsas = DB::table('articulos')->where('categoria','Bolsas, maletas y textiles')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
    	return view('categories.bolsas_maletas_textiles',compact('bolsas','titulo'));
    }
    //Oficina
    public function indexForOficinaWinideas(){
        //Título de la página
        $titulo = 'Oficina';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $oficina = DB::table('articulos')->where('categoria','Oficina')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.oficina',compact('oficina','titulo'));
    }

    //Kids
    public function indexForKidsWinideas(){
        //Título de la página
        $titulo = 'Kids';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $kids = DB::table('articulos')->where('categoria','Kids')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.kids',compact('kids','titulo'));
    }
    //Tecnologia
    public function indexForTecnologiaWinideas(){
        //Título de la página
        $titulo = 'Tecnología';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $tecnologia = DB::table('articulos')->where('categoria','tecnologia')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.tecnologias',compact('tecnologia','titulo'));
    }
    //Llaveros, linternas y herramientas
    public function indexForLinternasWinideas(){
       //Título de la página
        $titulo = 'Llaveros, linternas y herramientas';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $linternas = DB::table('articulos')->where('categoria','Llaveros, linternas y herramie')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.llaveros_linternas_herramientas',compact('linternas','titulo'));
    }
    //Salud y belleza
    public function indexForSaludWinideas(){
        //Título de la página
        $titulo = 'Salud y belleza';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $salud = DB::table('articulos')->where('categoria','Salud y belleza')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.salud_belleza',compact('salud','titulo'));
    }
    //Tazas, termos y cilindros
    public function indexForTazasWinideas(){
        //Título de la página
        $titulo = 'Tazas, termos y cilindros';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $tazas = DB::table('articulos')->where('categoria','Tazas, termos y cilindros')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.tazas_termos_cilindros',compact('tazas','titulo'));
    }
    //Hogar y estilo de vida
    public function indexForHogarWinideas(){
        //Título de la página
        $titulo = 'Hogar y estilo de vida';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $hogar = DB::table('articulos')->where('categoria','Hogar y estilo de vida')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.hogar',compact('hogar', 'titulo'));
    }
    //Sublimacion
    public function indexForSublimacionWinideas(){
        //Título de la página
        $titulo = 'Sublimación';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $sublimacion = DB::table('articulos')->where('categoria','sublimacion')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.sublimacion',compact('sublimacion', 'titulo'));
    }
    //Viaje y recreación
    public function indexForViajeWinideas(){
        //Título de la página
        $titulo = 'Viaje y recreación';
        //Obtiene el primer registro y color de cada modelo
        $colors = DB::table('colores')->select(DB::raw('modelo, max(color) as color, min(codigo_color) as codigo_color'))->groupBy('modelo');
        //Join para juntar un color, modelo e información
        $viaje = DB::table('articulos')->where('categoria','Viaje y recreacion')->joinSub($colors,'colors',function ($join){
            $join->on('articulos.modelo','=','colors.modelo');
        })->get()->sortBy('subcategoria'); 
        //Retorno de variables a vista
        return view('categories.viaje_recreacion',compact('viaje', 'titulo'));
    }
}
