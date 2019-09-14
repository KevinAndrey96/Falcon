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
	public function edit($id)
	{

	    $questions = Questions::find($id);
        return view('questions.edit', compact('questions'));
	    //return view('questions.edit',['questions'=>$questions]);
	}
	public function update(Request $request, $id)
	{  
		//dd($request);
	    $request->validate([
        'title'=>'required',
        'area'=> 'required',
        'question' => 'required',
        'answer' => 'required'
      ]);

      $question = Questions::find($id);
      $question->title = $request->get('title');
      $question->area = $request->get('area');
      $question->question = $request->get('question');
      $question->answer = $request->get('answer');
      $question->optionA = $request->get('optionA');
      $question->optionB = $request->get('optionB');
      $question->optionC = $request->get('optionC');
      $question->optionD = $request->get('optionD');
      $question->optionE = $request->get('optionE');
      $question->save();

      return redirect('/questions')->with('success', 'Pregunta actualizada con éxito');
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
	public function destroy($id)
	{
		$questions = Questions::find($id);
	    $questions->delete();

	     return redirect('/questions')->with('success', 'Registro eliminado con éxito');
	}
}
