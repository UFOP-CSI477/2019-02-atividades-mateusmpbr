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
        $requests = \App\Request::all();
        return view('usuario.index',compact('requests'));
    }

    public function criarRequerimento(){
        $subjects = Subject::orderBy('name')->get();
        return view('usuario.criar_requerimento',compact('subjects'));
    }
}
