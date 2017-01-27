@extends('espacos.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <h4> Espaços </h4>
            </div>
            <div class="pull-right">
                <a href="{{ route("espaco.create") }}" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i>
                    Adicionar Espaço
                </a>
            </div>
        </div>
        <table class="table">

            @foreach($espacos as $espaco)
                <tr>
                    <td class="middle">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">{{ $espaco->nome }} </h4>
                                <address>
                                    <strong>{{ $espaco->descricao }}</strong><br>
                                    {{ $espaco->tipo_cobranca }}
                                </address>
                            </div>
                        </div>
                    </td>
                    <td width="100" class="middle">
                        <div>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['espaco.destroy', $espaco->id]]) !!}
                            <a href="{{ route("espaco.edit", ['id' => $espaco->id]) }}" class="btn btn-circle btn-default btn-xs" title="Edit">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <button onclick="return confirm('Tem certeza que deseja excluir?');" type="submit" class="btn btn-circle btn-danger btn-xs" title="Delete">
                                <i class="glyphicon glyphicon-remove"></i>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>

            @endforeach


        </table>
    </div>

    <div class="text-center pagination-links">
        <nav>
             {!! $espacos->appends( Request::query())->render() !!}
            <!-- {!!  $espacos->links() !!} -->
        </nav>
    </div>

@endsection