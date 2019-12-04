<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Session;

class AreaAdministradorController extends Controller
{
    public function login(){
        return view('administrador.login');
    }

    public function index(){
        $subjects = Subject::orderBy('name')->get();

        return view('administrador.index',compact('subjects'));
    }

    public function criarProtocolo(){
        return view('administrador.criar_protocolo');
    }

    public function inserirProtocolo(Request $request){
        $subject = new Subject;
        $subject->name = $request->nome;
        $subject->price = $request->preco;

        $subject->save();

        Session::flash('menssagem','Protocolo criado com sucesso.');
        Session::flash('classe-alerta', 'alert-success');

        return redirect('administrador/index');
    }

    public function editarProtocolo(Request $request){
        $subject = Subject::findOrFail($request->id);
        $subject->name = $request->nome;
        $subject->price = $request->preco;

        $subject->save();

        Session::flash('menssagem','Protocolo editado com sucesso.');
        Session::flash('classe-alerta', 'alert-success');

        return redirect('administrador/index');
    }

    public function excluirProtocolo(Request $request){
        $subjects = Subject::join('requests','subjects.id','=','requests.subject_id')
        ->where('subjects.id',$request->id)->get();

        if($subjects->isEmpty()){
            $subjectObj = Subject::findOrFail($request->id);
            $subjectObj->delete();
            Session::flash('menssagem','Protocolo excluído com sucesso.');
            Session::flash('classe-alerta', 'alert-success');
        }else{
            Session::flash('menssagem','Não foi possível excluir o protocolo, pois há requerimentos associados a ele.');
            Session::flash('classe-alerta', 'alert-danger');
        }

        return redirect('administrador/index'); 
    }

}
