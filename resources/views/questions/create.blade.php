@extends('layouts.app')
<!--<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-3">
			
		</div>
	</div>
	
</div>-->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Pregunta</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('questions.store') }}">
                    	@csrf
						<div class="form-group">
					<label for="title" class="negrita">Título:</label> 
						<div>
							<input class="form-control" placeholder="Nombre del cuestionario" required="required" name="title" type="text" id="title"> 
						</div>
					</div>
				 
					<div class="form-group">
						<label for="area" class="negrita">Area:</label> 
						<div>
							<input class="form-control" placeholder="Area de conocimiento" required="required" name="area" type="text" id="area"> 
						</div>
					</div>
					<div class="form-group">
						<label for="question" class="negrita">Pregunta:</label> 
						<div>
							<input class="form-control" placeholder="Pregunta" required="required" name="question" type="text" id="question"> 
						</div>
					</div>
				 
					<div class="form-group">
						<label for="stock" class="negrita">Respuesta:</label> 
						<div>
							<select class="form-control" required="required" name="answer" id="answer">
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="area" class="negrita">Opción A</label> 
						<div>
							<input class="form-control" placeholder="Opción A" name="optionA" type="text" id="optionA"> 
						</div>
					</div>
					<div class="form-group">
						<label for="optionB" class="negrita">Opción B</label> 
						<div>
							<input class="form-control" placeholder="Opción B" name="optionB" type="text" id="optionB"> 
						</div>
					</div>
					<div class="form-group">
						<label for="optionC" class="negrita">Opción C</label> 
						<div>
							<input class="form-control" placeholder="Opción C" name="optionC" type="text" id="optionC"> 
						</div>
					</div>
					<div class="form-group">
						<label for="optionD" class="negrita">Opción D</label> 
						<div>
							<input class="form-control" placeholder="Opción D" name="optionD" type="text" id="optionD"> 
						</div>
					</div>
					<div class="form-group">
						<label for="optionE" class="negrita">Opción E</label> 
						<div>
							<input class="form-control" placeholder="Opción E" name="optionE" type="text" id="optionE"> 
						</div>
					</div>

						<button type="submit" class="btn btn-info">Guardar</button>
						<a href="{{ route('home') }}" class="btn btn-warning">Cancelar</a>

					</form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
