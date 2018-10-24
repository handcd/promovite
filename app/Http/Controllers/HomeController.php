<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulos;
use App\Colores;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }
    public function search($search){
        $search = urldecode($search);
        $colors = Colores::select(DB::raw('modelo, max(color) as color'))->groupBy('modelo');
        $articulo = Articulos::select()
                    ->where('articulos.modelo', 'LIKE', '%'.$search.'%')
                    ->joinSub($colors,'colors',function ($join){
                        $join->on('articulos.modelo','=','colors.modelo');
                    })
                    ->orWhere('articulos.subcategoria', 'LIKE', '%'.$search.'%')->get();

        
        if (count($articulo) == 0){
            return View('search')
            ->with('message', 'No hay resultados que mostrar :( Trata buscando el artículo sin el prefijo. EJ. PW-A2305 -> A2305')
            ->with('search', $search)
            ->with('titulo','Búsqueda');
        } else{
            return View('search')
            ->with('articulo', $articulo)
            ->with('search', $search)
            ->with('titulo','Búsqueda');
        }
    }
}
