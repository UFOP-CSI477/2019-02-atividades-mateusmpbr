<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaAdministradorController extends Controller
{
    public function index(){
        return view('area_administrador');
    }
}
