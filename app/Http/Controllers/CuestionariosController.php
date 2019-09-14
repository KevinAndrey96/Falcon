<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CuestionariosController extends Controller
{
    public function index()
	{
		$cuestionarios = DB::table('questions')->groupBy('questions.title')->get();
	    return view('cuestionarios.index', compact('cuestionarios')); 
	}
}
