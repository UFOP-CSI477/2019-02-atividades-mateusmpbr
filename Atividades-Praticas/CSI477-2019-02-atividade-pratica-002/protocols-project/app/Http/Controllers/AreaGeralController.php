<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Subject;

class AreaGeralController extends Controller
{
    public function index(){
        $subjects = Subject::orderBy('name')->get();
        return view('geral.index', compact('subjects'));
    }
}
