@extends('espacos.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Adicionar Espaço</strong>
        </div>
        <!-- a rota a ser chamada qndo o form for submetido -->
        {!! Form::open(['route' => 'espaco.store', 'files' => true]) !!}

        @include("espacos.form")

        {!! Form::close() !!}
    </div>

@endsection