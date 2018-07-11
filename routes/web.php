<?php

//Rutas para el inicio
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('inicio');
});
Route::get('/inicio', function() {
    return view('inicio');
});
Auth::routes();
//Todas las rutas de las categorias:(
Route::get('/escritura','categoriasController@indexForEscrituraWinideas');
Route::get('/bolsas-maletas-textiles','categoriasController@indexForBolsasWinideas');
Route::get('/hogar','categoriasController@indexForHogarWinideas');
Route::get('/kids','categoriasController@indexForKidsWinideas');
Route::get('/llaveros-linternas-herramientas','categoriasController@indexForLinternasWinideas');
Route::get('/oficina','categoriasController@indexForOficinaWinideas');
Route::get('/salud-belleza','categoriasController@indexForSaludWinideas');
Route::get('/sublimacion','categoriasController@indexForSublimacionWinideas');
Route::get('/tazas-termos-cilindros','categoriasController@indexForTazasWinideas');
Route::get('/tecnologia','categoriasController@indexForTecnologiaWinideas');
Route::get('/viaje-recreacion','categoriasController@indexForViajeWinideas');
//Route::get('/untitled','categoriasController@indexForEscrituraWinideas');
//Rutas para mostrar articulos
Route::get('/escritura/{id}', 'showController@showEscritura');
