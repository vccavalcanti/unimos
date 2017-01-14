@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="jumbotron text-center">
                    <h1>Olá, {{ Auth::user()->name }}</h1>
                    <p class="lead">
                       Bem vindo ao Sistema Unimos
                    </p>
                    <p>
                        <a href="#" class="btn btn-primary btn-lg">Iniciar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
