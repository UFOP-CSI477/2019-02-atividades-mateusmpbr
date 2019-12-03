<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaAdministradorController extends Controller
{
    public function login(){
        return view('administrador.login');
    }

    public function index(){
        return view('administrador.index');
    }

}
