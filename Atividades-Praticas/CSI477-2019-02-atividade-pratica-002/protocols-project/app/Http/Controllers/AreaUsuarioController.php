<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaUsuarioController extends Controller
{
    public function index(){
        return view('area_usuario');
    }
}
