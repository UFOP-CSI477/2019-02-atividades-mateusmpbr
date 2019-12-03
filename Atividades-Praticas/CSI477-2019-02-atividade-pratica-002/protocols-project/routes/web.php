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

Route::get('/','AreaGeralController@index')->name('geral.index');
Route::get('/usuario/login','AreaUsuarioController@login')->name('usuario.login');
Route::get('/usuario/register','AreaUsuarioController@register')->name('usuario.register');
Route::get('/administrador/login','AreaAdministradorController@login')->name('administrador.login');

Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
