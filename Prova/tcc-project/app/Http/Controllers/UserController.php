<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function login(){
        return view('administrador.login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/administrador/login');
    }
}