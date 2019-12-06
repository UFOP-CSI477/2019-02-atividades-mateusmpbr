<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function index(){
        return view('geral.index');
    }

    public function listarAlunos(){

        $alunos = Aluno::orderBy('curso','asc')
                        ->orderBy('nome','asc')
                        ->get();

        return view('administrador.index',compact('alunos'));
    }
}
