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
                    <form method="store" action="{{ route('questions.store') }}">
						@include('questions.frm.prt')
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
