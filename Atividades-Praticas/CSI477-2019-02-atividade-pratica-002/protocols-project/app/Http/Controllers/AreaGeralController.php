<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AreaGeralController extends Controller
{
    public function index(){
        $subjects = DB::table('subjects')->orderBy('name')->get();
        return view('geral.index', compact('subjects'));
    }
}
