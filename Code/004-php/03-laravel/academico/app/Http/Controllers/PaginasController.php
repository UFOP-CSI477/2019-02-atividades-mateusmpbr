<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller{
    public function welcome(){
        return view('welcome');
    }

    public function index(){
        return view('principal');
    }

    public function listar(){
       $lista = ["Ana","Brigida","Hugo","João","Pedro","Ricardo"];
       
       return view('lista', compact('lista'));
    }
}