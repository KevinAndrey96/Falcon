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
                    <h1>Bienvenido, {{ auth()->user()->name }}</h1>
                    <hr>
                    <p>Admin</p>
                        <a href="{{ url('/questions') }}" class="btn btn-primary form-control">Cuestionarios</a><br><br>
                        <a href="#" class="btn btn-primary form-control">Calificaciones</a><br><br>
                        <a href="#" class="btn btn-primary form-control">Estadisticas</a><br><br>
                    <p>User</p>
                        <a href="{{ url('/cuestionarios') }}" class="btn btn-primary form-control">Cuestionarios</a><br><br>
                        <a href="#" class="btn btn-primary form-control">Calificaciones</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
