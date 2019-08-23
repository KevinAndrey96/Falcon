<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class QuestionsController extends Controller
{
    public function create()
	{
	    return view('questions.create');
	}
	public function store(Request $request)
	{
	    // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
	    //$questions = new Questions; 
	 
	    // Recibo todos los datos del formulario de la vista 'crear.blade.php'
	    /*$questions->title = $request->title;
	    $questions->area = $request->area;
	    $questions->answer = $request->answer;
	    $questions->optionA = $request->optionA;
	    $questions->optionB = $request->optionB;
	    $questions->optionC = $request->optionC;
	    $questions->optionD = $request->optionD;
	    $questions->optionE = $request->optionE;
	    */
	    // Almacenos la imagen en la carpeta publica especifica, esto lo veremos más adelante 
	    //$questions->img = $request->file('img')->store('/');
	 
	    // Inserto todos los datos en mi tabla 'questions' 
	    //$questions->save();
	 
	    // Hago una redirección a la vista principal con un mensaje 
	    //return redirect('home')->with('message','Guardado Satisfactoriamente!');

	    $request->validate([
	        'title'=>'required',
	        'area'=> 'required',
	        'question'=> 'required',
	        'answer' => 'required',
	        'optionA' => 'required'
	      ]);
	      $questions = new Questions([
	        'title' => $request->get('title'),
	        'area'=> $request->get('area'),
	        'question'=> $request->get('question'),
	        'answer'=> $request->get('answer'),
	        'optionA'=> $request->get('optionA'),
	        'optionB'=> $request->get('optionB'),
	        'optionC'=> $request->get('optionC'),
	        'optionD'=> $request->get('optionD'),
	        'optionE'=> $request->get('optionE')
	      ]);
	      $questions->save();
	      return redirect('/questions')->with('success', 'Guardado con éxito');
	}
	public function index()
	{
	    $questions = Questions::all();
	    return view('questions.index', compact('questions')); 
	}
	public function actualizar($id)
	{
	    $questions = Questions::find($id);
	    return view('questions.actualizar',['questions'=>$questions]);
	}
	public function update(ItemUpdateRequest $request, $id)
	{        
	    // Recibo todos los datos desde el formulario Actualizar
	    $questions = Questions::find($id);
	    $questions->title = $request->title;
	    $questions->area = $request->area;
	    $questions->answer = $request->answer;
	    $questions->optionA = $request->optionA;
	    $questions->optionB = $request->optionB;
	    $questions->optionC = $request->optionC;
	    $questions->optionD = $request->optionD;
	    $questions->optionE = $request->optionE;
	 
	    
	    // Actualizo los datos en la tabla 'jugos'
	    $jugos->save();
	 
	    // Muestro un mensaje y redirecciono a la vista principal 
	    Session::flash('message', 'Editado Satisfactoriamente !');
	    return Redirect::to('questions');
	}
	public function eliminar($id)
	{
	    // Indicamos el 'id' del registro que se va Eliminar
	    $questions = Questions::find($id);
	 
	    // Elimino el registro de la tabla 'jugos' 
	    Questions::destroy($id);
	        
	    // Muestro un mensaje y redirecciono a la vista principal 
	    Session::flash('message', 'Eliminado Satisfactoriamente !');
	    return Redirect::to('questions');
	}
	public function show($id)
	{
	    //
	}
}
