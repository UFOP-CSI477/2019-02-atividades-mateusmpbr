<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\User;
use Session;

class AreaUsuarioController extends Controller
{
    public function login(){
        return view('usuario.login');
    }

    public function register(){
        return view ('usuario.register');
    }

    public function index(){
        $requests = \App\Request::where('user_id',auth()->user()->id)->orderBy('date')->get();
        $subjects = Subject::orderBy('name')->get();

        $qtdRequests = \App\Request::count();
        $valorTotal = \App\Request::join('subjects','requests.subject_id','=','subjects.id')->sum('price');

        return view('usuario.index',compact('requests','subjects','qtdRequests','valorTotal'));
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

        Session::flash('menssagem','Requerimento criado com sucesso.');
        Session::flash('classe-alerta', 'alert-success');

        return redirect('usuario/index');
    }

    public function editarRequerimento(Request $request){
        $requestObj = \App\Request::findOrFail($request->id);
        $requestObj->subject_id = $request->tipo;
        $requestObj->description = $request->descricao;
        $requestObj->date = $request->data;

        $requestObj->save();

        Session::flash('menssagem','Requerimento editado com sucesso.');
        Session::flash('classe-alerta', 'alert-success');

        return redirect('usuario/index');
    }

    public function excluirRequerimento(Request $request){
        $requestObj = \App\Request::findOrFail($request->id);
        $requestObj->delete();

        Session::flash('menssagem','Requerimento excluído com sucesso.');
        Session::flash('classe-alerta', 'alert-success');

        return redirect('usuario/index'); 
    }

    public function listarProtocolos(){
        $subjects = Subject::orderBy('name')->get();

        return view('usuario.listar_protocolos',compact('subjects'));
    }
}
