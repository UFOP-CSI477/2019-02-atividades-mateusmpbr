<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
    public function buscarPorArea(Request $request){
        $area = $request->area;

        $professores = Professor::where('area','like',"%$area%")
                            ->orderBy('area', 'asc')
                            ->orderBy('nome', 'asc')
                            ->get();

        return view('geral.index',compact('professores'));
    }

    public function listarProfessores(){

        $professores = Professor::orderBy('area', 'asc')
                            ->orderBy('nome', 'asc')
                            ->get();

        return view('administrador.listar_professores',compact('professores'));
    }
}
