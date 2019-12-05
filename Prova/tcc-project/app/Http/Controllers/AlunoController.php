<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use App\Projeto;
use Session;

class AlunoController extends Controller
{
    public function index(){
        return view('geral.index');
    }

    public function listarProjetos(){

        $projetos = Projeto::join('alunos','projetos.aluno_id','=','alunos.id')
                        ->orderBy('ano','desc')
                        ->orderBy('semestre','desc')
                        ->orderBy('alunos.nome','asc')
                        ->get();

        return view('geral.listar_projetos',compact('projetos'));
    }

    public function buscarPorArea(Request $request){
        $area = $request->area;

        $professores = Professor::where('area','like',"%$area%")->get();

        return view('/geral/index',compact('professores'));
    }
}
