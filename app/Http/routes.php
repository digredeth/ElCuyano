<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'welcomeController@index');
Route::get('/principal','principalController@index');
Route::get('/principal/stock','articuloController@stock');

/*RESTful Controllers*/
Route::resource('principal/articulos','articuloController');
Route::resource('principal/proveedores','proveedorsController');
Route::resource('principal/movimientos','movimientoController');

