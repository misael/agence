<?php

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
Route::get('buscar_datos/{desde}/{hasta}/{consultores}', 'ConsultorController@buscar_datos');
Route::get('pizza/{desde}/{hasta}/{consultores}', 'ConsultorController@pizza');
Route::get('barra/{desde}/{hasta}/{consultores}', 'ConsultorController@barra');
Route::get('/consultor', 'ConsultorController@listar');

