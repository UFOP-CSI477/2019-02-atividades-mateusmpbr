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

Route::get('/','AreaGeralController@index')->name('area_geral.index');
Route::get('/areaUsuario','AreaUsuarioController@index')->name('area_usuario.index');
Route::get('/areaAdministrador','AreaAdministradorController@index')->name('area_administrador.index');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
