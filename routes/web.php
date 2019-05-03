<?php
use Illuminate\Support\Facades\Input;
//Rutas para el inicio
Route::get('/','categoriasController@index');

Route::get('/index','categoriasController@index');

//Ruta para pestaña "nosotros"
Route::get('/nosotros','categoriasController@nosotros');
//Rutas de autenticación
//Auth::routes();
//Filtrooooooooo
Route::get('/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "/search/$search";
    return redirect($route);
});
Route::get("/search/{search}", "categoriasController@search");
Route::get("/search", "categoriasController@searchView");
//Todas las rutas de las categorias:(
Route::get('/Escritura y mas','categoriasController@indexForEscrituraWinideas');
Route::get('/Bolsas, maletas y textiles','categoriasController@indexForBolsasWinideas');
Route::get('/Hogar y estilo de vida','categoriasController@indexForHogarWinideas');
Route::get('/Kids','categoriasController@indexForKidsWinideas');
Route::get('/Llaveros, linternas y herramie','categoriasController@indexForLinternasWinideas');
Route::get('/Oficina','categoriasController@indexForOficinaWinideas');
Route::get('/Salud y belleza','categoriasController@indexForSaludWinideas');
Route::get('/Sublimacion','categoriasController@indexForSublimacionWinideas');
Route::get('/Tazas, termos y cilindros','categoriasController@indexForTazasWinideas');
Route::get('/Tecnologia','categoriasController@indexForTecnologiaWinideas');
Route::get('/Viaje y recreacion','categoriasController@indexForViajeWinideas');

Route::get('/prueba','categoriasController@prueba');

//Rutas para mostrar articulos
Route::get('/Escritura y mas/{id}', 'showController@showEscritura');
Route::get('/Bolsas, maletas y textiles/{id}', 'showController@showBolsas');
Route::get('/Oficina/{id}', 'showController@showOficina');
Route::get('/Kids/{id}', 'showController@showKids');
Route::get('/Tecnologia/{id}', 'showController@showTecnologia');
Route::get('/Llaveros, linternas y herramie/{id}', 'showController@showLlaveros');
Route::get('/Salud y belleza/{id}', 'showController@showSalud');
Route::get('/Tazas, termos y cilindros/{id}', 'showController@showTazas');
Route::get('/Hogar y estilo de vida/{id}', 'showController@showHogar');
Route::get('/Sublimacion/{id}', 'showController@showSublimacion');
Route::get('/Viaje y recreacion/{id}', 'showController@showViaje');