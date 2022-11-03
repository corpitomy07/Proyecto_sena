<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return view('prueba');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas cargos 
// version 7
Route::get('api/cargos/index', 'CargosController@index');
Route::get('api/cargos/getSelect', 'CargosController@getSelect');
Route::post('api/cargos/guardar', 'CargosController@store');
Route::put('api/cargos/actualizar', 'CargosController@update');
Route::delete('api/cargos/eliminar', 'CargosController@destroy');
// version 8

//Route::post('/api/cargos/guardar',[CargosController::class, 'store']);
//Route::post('/api/cargos/actualizar',[CargosController::class, 'update']);
//Route::post('/api/cargos/eliminar',[CargosController::class, 'destroy']);

//rutas de personas


//rutas 
