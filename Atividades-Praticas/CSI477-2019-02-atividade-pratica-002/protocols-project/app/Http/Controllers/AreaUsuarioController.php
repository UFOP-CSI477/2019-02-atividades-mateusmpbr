<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaUsuarioController extends Controller
{
    public function login(){
        return view('usuario.login');
    }

    public function register(){
        return view ('usuario.register');
    }
}
