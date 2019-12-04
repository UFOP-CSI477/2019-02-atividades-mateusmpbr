<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class AreaUsuarioController extends Controller
{
    public function login(){
        return view('usuario.login');
    }

    public function register(){
        return view ('usuario.register');
    }

    public function index(){
        $requests = \App\Request::orderBy('date')->get();
        $subjects = Subject::orderBy('name')->get();
        return view('usuario.index',compact('requests','subjects'));
    }

    public function criarRequerimento(){
        $subjects = Subject::orderBy('name')->get();
        return view('usuario.criar_requerimento',compact('subjects'));
    }

    public function inserirRequerimento(Request $request){
        $requestObj = new \App\Request;
        $requestObj->user_id = auth()->user()->id;
        $requestObj->subject_id = $request->tipo;
        $requestObj->description = $request->descricao;
        $requestObj->date = $request->data;

        $requestObj->save();

        return redirect('usuario/index');
    }

    public function editarRequerimento(Request $request){
        $requestObj = \App\Request::findOrFail($request->id);
        $requestObj->subject_id = $request->tipo;
        $requestObj->description = $request->descricao;
        $requestObj->date = $request->data;

        $requestObj->save();

        return redirect('usuario/index');
    }

    public function excluirRequerimento(Request $request){
        $requestObj = \App\Request::findOrFail($request->id);
        $requestObj->delete();

        return redirect('usuario/index'); 
    }
}
