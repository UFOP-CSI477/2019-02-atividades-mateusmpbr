<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\Aluno;
use App\Professor;
use Session;

class ProjetoController extends Controller
{
    public function listarProjetos(){

        $projetos = Projeto::join('alunos','projetos.aluno_id','=','alunos.id')
                        ->orderBy('ano','desc')
                        ->orderBy('semestre','desc')
                        ->orderBy('alunos.nome','asc')
                        ->get();

        return view('geral.listar_projetos',compact('projetos'));
    }

    public function telaProjeto(){
        $alunos = Aluno::orderBy('nome')->get();
        $professores = Professor::orderBy('nome')->get();

        return view('administrador.criar_projeto',compact('alunos','professores'));
    }

    public function criarProjeto(Request $request){
        $projeto = new Projeto;
        
        $projeto->aluno_id = $request->aluno;
        $projeto->professor_id = $request->professor;
        $projeto->titulo = $request->titulo;
        $projeto->ano = $request->ano;
        $projeto->semestre = $request->semestre;

        $projeto->save();

        Session::flash('menssagem','Projeto cadastrado com sucesso.');
        Session::flash('classe-alerta', 'alert-success');

        return redirect('geral/projetos');
    }
}
