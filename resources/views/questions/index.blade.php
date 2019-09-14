@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Falcon Aviación</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
<!-- Latest compiled and minified Locales -->
<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/locale/bootstrap-table-zh-CN.min.js"></script>
<!--===============================================================================================-->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
					<script src="js/pagination.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table id="Tabla" data-toggle="table" data-pagination="true">
						<thead>
							<tr class="table100-head">
								<th class="column1">Cuestionario</th>
								<th class="column2">Area</th>
								<th class="column3">Pregunta</th>
								<th class="column3">Acción</th>
							</tr>
						</thead>
						<tbody>
							 @foreach($questions as $question) 
								<tr>
									<td class="column1">{{$question->title}}</td>
									<td class="column2">{{$question->area}}</td>
									<td class="column3">{{$question->question}}</td>
									<td class="column3">
										<div class="row">
											<a href="{{ route('questions.edit',$question->id)}}" class="btn btn-primary">Editar</a> 
											<form action="{{ route('questions.destroy', $question->id)}}" method="post">
						                  @csrf
						                  @method('DELETE')
						                  <button class="btn btn-danger" type="submit">Borrar</button>
						                </form>
						            	</div>
						            </td>
								</tr>
							@endforeach
								
						</tbody>
					</table>
					
					
<script type="text/javascript">
    $(document).ready(function(){
        $('#Tabla').bootstrapTable({
  pagination: true
});
    });
    
</script>
					<br>
					<a class="btn btn-info" href="questions/create">Agregar</a>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
@endsection