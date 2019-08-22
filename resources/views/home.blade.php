@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Bienvenido, {{ auth()->user()->name }}</h1>
                    <hr>
                    <a href="#" class="btn btn-primary form-control">Cuestionarios</a><br><br>
                    <a href="#" class="btn btn-primary form-control">Usuarios</a><br><br>
                    <a href="#" class="btn btn-primary form-control">Estadisticas</a><br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
