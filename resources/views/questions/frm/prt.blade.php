@if ( !empty ( $questions->id) )
 
	<div class="form-group">
		<label for="title" class="negrita">Título:</label> 
		<div>
			<input class="form-control" placeholder="Nombre del cuestionario" required="required" name="title" type="text" id="title" value="{{ $questions->title }}"> 
		</div>
	</div>
 
	<div class="form-group">
		<label for="area" class="negrita">Area:</label> 
		<div>
			<input class="form-control" placeholder="Area de conocimiento" required="required" name="area" type="text" id="area" value="{{ $questions->area }}"> 
		</div>
	</div>
 
	<div class="form-group">
		<label for="stock" class="negrita">Respuesta:</label> 
		<div>
			<select class="form-control" required="required" name="answer" id="answer">
				<option value="{{ $questions->anser }}" selected>{{ $questions->anser }}</option>
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
			<input class="form-control" placeholder="Opción A" name="optionA" type="text" id="optionA" value="{{ $questions->optionA }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="optionB" class="negrita">Opción B</label> 
		<div>
			<input class="form-control" placeholder="Opción B" name="optionB" type="text" id="optionB" value="{{ $questions->optionB }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="optionC" class="negrita">Opción C</label> 
		<div>
			<input class="form-control" placeholder="Opción C" name="optionC" type="text" id="optionC" value="{{ $questions->optionC }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="optionD" class="negrita">Opción D</label> 
		<div>
			<input class="form-control" placeholder="Opción D" name="optionD" type="text" id="optionD" value="{{ $questions->optionD }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="optionE" class="negrita">Opción E</label> 
		<div>
			<input class="form-control" placeholder="Opción E" name="optionE" type="text" id="optionE" value="{{ $questions->optionE }}"> 
		</div>
	</div>
 
 
@else
   
 
@endif
 
