<?php

//Rutas para el inicio
Route::get('/','categoriasController@index');

Route::get('/index','categoriasController@index');

//Ruta para pestaña "nosotros"
Route::get('/nosotros','categoriasController@nosotros');
//Rutas de autenticación
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

//Rutas para mostrar articulos
Route::get('/escritura/{id}', 'showController@showEscritura');
Route::get('/bolsas_maletas_textiles/{id}', 'showController@showBolsas');
Route::get('/oficina/{id}', 'showController@showOficina');
Route::get('/kids/{id}', 'showController@showKids');
Route::get('/tecnologia/{id}', 'showController@showTecnologia');
Route::get('/llaveros-linternas-herramientas/{id}', 'showController@showLlaveros');
Route::get('/salud-belleza/{id}', 'showController@showSalud');
Route::get('/tazas-termos-cilindros/{id}', 'showController@showTazas');
Route::get('/hogar/{id}', 'showController@showHogar');
Route::get('/sublimacion/{id}', 'showController@showSublimacion');
Route::get('/viaje-recreacion/{id}', 'showController@showViaje');