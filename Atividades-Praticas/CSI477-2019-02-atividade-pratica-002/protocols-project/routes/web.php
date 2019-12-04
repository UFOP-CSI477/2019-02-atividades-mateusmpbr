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

Route::group(['middleware' => ['auth']],function(){
    
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/administrador/index','AreaAdministradorController@index')->name('administrador.index');
    });

    Route::get('/usuario/index','AreaUsuarioController@index')->name('usuario.index');
    Route::get('/usuario/requerimento/criar','AreaUsuarioController@criarRequerimento')->name('usuario.criar_requerimento');  

});

Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
