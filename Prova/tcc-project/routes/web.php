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
Route::post('/geral/index','ProfessorController@buscarPorArea');
Route::get('/geral/projetos','ProjetoController@listarProjetos');
Route::get('/administrador/login','UserController@login');

Route::group(['middleware' => ['auth']],function(){
    Route::get('/administrador/index','AlunoController@listarAlunos');
    Route::get('/administrador/professores','ProfessorController@listarProfessores');
    Route::get('/administrador/projeto','ProjetoController@telaProjeto');
    Route::post('/administrador/projeto','ProjetoController@criarProjeto');
    Route::get('/administrador/logout','UserController@logout');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
