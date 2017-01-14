@include('layouts.partials.header')
        <!-- navbar -->
@include('layouts.partials.navbar')

        <!-- content -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <?php
                $selected_unidade = Request::get('unidadeEnsino_id');
                //$listGroups = listGroups(Auth::user()->id);
                //$unidadesEnsino = App\UnidadeEnsino::all()
                $unidadesEnsino =  App\User::find(Auth::user()->id)->UnidadeEnsino;
                ?>
                <a href="{{ route('espaco.index') }}" class="list-group-item {{ empty($selected_unidade) ? 'active' : '' }}">Todas as Unidades de Ensino <span class="badge">{{ $unidadesEnsino->count() }}</span></a>

                @foreach ($unidadesEnsino as $unidadeEnsino)
                    <a href="{{ route('espaco.index', ['unidadeEnsino_id' => $unidadeEnsino->id]) }}" class="list-group-item {{ $selected_unidade == $unidadeEnsino->id ? 'active' : '' }}">{{ $unidadeEnsino->nome_fantasia }} <span class="badge">{{ $unidadeEnsino->espaco->count() }}</span></a>
                @endforeach

            </div>
        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.partials.footer')
