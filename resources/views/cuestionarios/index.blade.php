@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falcon Aviación</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Por favor seleccione el cuestionario a diligenciar</h1>
                    <hr>
                        
                    @foreach($cuestionarios as $cuestionario) 
                                
                                    <a href="{{ url('/questions') }}" class="btn btn-primary form-control">{{$cueestionario->title}}</a>
                                
                            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
