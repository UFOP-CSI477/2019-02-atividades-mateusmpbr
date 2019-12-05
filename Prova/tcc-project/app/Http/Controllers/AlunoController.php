<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use Session;

class AlunoController extends Controller
{
    public function index(){
        return view('geral.index');
    }

    public function listarProjetos(){
        return view('geral.listar_projetos');
    }

    public function buscarPorArea(Request $request){
        $area = $request->area;

        $professores = Professor::where('area','like',"%$area%")->get();

        return view('/geral/index',compact('professores'));
    }
}
