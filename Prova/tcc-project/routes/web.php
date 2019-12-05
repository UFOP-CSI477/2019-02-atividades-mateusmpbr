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

Route::get('/','GeralController@index');
Route::get('/geral/index','AlunoController@index');
Route::post('/geral/index','AlunoController@buscarPorArea');
Route::get('/geral/projetos','AlunoController@listarProjetos');
Route::get('/administrador/login','UserController@login');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
