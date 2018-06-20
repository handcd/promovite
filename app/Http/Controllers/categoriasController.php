<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulos;

use Illuminate\Support\Facades\DB;

class categoriasController extends Controller
{
    //Escritura
    public function indexForEscrituraWinideas(){
    	$itemsEscritura = Articulos::where('categoria','ESCRITURA Y MAS')->get();
    	return view('categories.escritura',compact('itemsEscritura'));
    }
    //Bolsas, maletas y textiles
    public function indexForBolsasWinideas(){
    	$itemsBolsas = Articulos::where('categoria','BOLSAS, MALETAS Y TEXTILES')->get();
    	return view('categories.bolsas_maletas_textiles',compact('itemsBolsas'));
    }
    //Oficina
    public function indexForOficinaWinideas(){
        $itemsOficina = Articulos::where('categoria','OFICINA')->get();
        return view('categories.oficina',compact('itemsOficina'));
    }

    //Kids
    public function indexForKidsWinideas(){
        $itemsKids = Articulos::where('categoria','KIDS')->get();
        return view('categories.kids',compact('itemsKids'));
    }
    //Tecnologia
    public function indexForTecnologiaWinideas(){
        $itemsTec = Articulos::where('categoria','TECNOLOGÍA')->get();
        return view('categories.tecnologias',compact('itemsTec'));
    }
    //Llaveros, linternas y herramientas
    public function indexForLinternasWinideas(){
        $itemsLinternas = Articulos::where('categoria','LLAVEROS, LINTERNAS Y HERRAMIE')->get();
        return view('categories.llaveros_linternas_herramientas',compact('itemsLinternas'));
    }
    //Salud y belleza
    public function indexForSaludWinideas(){
        $itemsSalud = Articulos::where('categoria','SALUD Y BELLEZA')->get();
        return view('categories.salud_belleza',compact('itemsSalud'));
    }
    //Tazas, termos y cilindros
    public function indexForTazasWinideas(){
        $itemsTazas = Articulos::where('categoria','TAZAS, TERMOS Y CILINDROS')->get();
        return view('categories.tazas_termos_cilindros',compact('itemsTazas'));
    }
    //Hogar y estilo de vida
    public function indexForHogarWinideas(){
        $itemsHogar = Articulos::where('categoria','HOGAR Y ESTILO DE VIDA')->get();
        return view('categories.hogar',compact('itemsHogar'));
    }
    //Sublimacion
    public function indexForSublimacionWinideas(){
        $itemsSublimacion = Articulos::where('categoria','SUBLIMACION')->get();
        return view('categories.sublimacion',compact('itemsSublimacion'));
    }
    //Viaje y recreación
    public function indexForViajeWinideas(){
        $itemsViaje = Articulos::where('categoria','VIAJE Y RECREACION')->get();
        return view('categories.viaje_recreacion',compact('itemsViaje'));
    }
    //Outlet
}
