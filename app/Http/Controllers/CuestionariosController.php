<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Questions;
use DB;

class CuestionariosController extends Controller
{
    public function index()
	{
		$cuestionarios=Questions::select('title', DB::raw('COUNT(title) as count'))
            ->groupBy('title')
            ->get();
		//$cuestionarios = DB::table('questions')->groupBy('questions.title')->get();
	    return view('cuestionarios.index', compact('cuestionarios')); 
	}
}
