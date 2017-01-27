@include('layouts.partials.header')
        <!-- navbar -->
@include('layouts.partials.navbar')
<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Professor</strong>
        </div>
        <!-- a rota a ser chamada qndo o form for submetido -->
        @if(empty($professor->id))
            {!! Form::open(['route' => 'professor.store', 'files' => true]) !!}
        @else
            {!! Form::model($professor, ['files' => true, 'route' => ['professor.update',$professor->id], 'method' => 'PATCH']) !!}
        @endif
        <div class="panel-body">
            <div class="form-horizontal">
                <div class="row">
                    <div class="col-md-8">
                        @if (session('message'))
                            <div class='alert alert-success'>
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (count($errors))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="cpf" class="control-label col-md-3">CPF</label>
                            <div class="col-md-8">
                                <!-- 3 parametros : nome do campo da tabela, valor default e atributos html, a classe eh referente ao bootstrap para estilizar -->
                                {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rg" class="control-label col-md-3">RG</label>
                            <div class="col-md-8">
                                {!! Form::text('rg', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pis" class="control-label col-md-3">PIS</label>
                            <div class="col-md-8">
                                {!! Form::text('pis', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="descricao" class="control-label col-md-3">Qualificações</label>
                                <div class="col-md-8">
                                    {!! Form::textarea('descricao', null, ['class' => 'form-control' ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sexo" class="control-label col-md-3">Sexo</label>
                                <div class="col-md-8">
                                    {!! Form::select('sexo',['m' => 'masculino','f' => 'feminino' ], null, ['class' => 'form-control', ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dob" class="control-label col-md-3">Data de nascimento</label>
                                <div class="col-md-8">
                                    {!! Form::date('dob',!empty($professor->dob) ? $professor->dob : null, ['class' => 'form-control' ]) !!}
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="telefone" class="control-label col-md-3">Telefone</label>
                            <div class="col-md-8">
                                {!! Form::text('telefone', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rua" class="control-label col-md-3">Rua</label>
                            <div class="col-md-8">
                                {!! Form::text('rua', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="numero" class="control-label col-md-3">Numero</label>
                            <div class="col-md-8">
                                {!! Form::text('numero', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cep" class="control-label col-md-3">CEP</label>
                            <div class="col-md-8">
                                {!! Form::text('cep', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="complemento" class="control-label col-md-3">Complemento</label>
                            <div class="col-md-8">
                                {!! Form::text('complemento', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bairro" class="control-label col-md-3">Bairro</label>
                            <div class="col-md-8">
                                {!! Form::text('bairro', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="uf_id" class="control-label col-md-3">Estado</label>
                            <div class="col-md-5">
                                <!--1 - field name , lista de unidades de ensino, 3 valor selecionado pluck = list, 4 atributo html adicional -->
                                {!! Form::select('uf_id', App\uf::pluck('sigla', 'id'), null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cidade" class="control-label col-md-3">Cidade</label>
                            <div class="col-md-8">
                                {!! Form::text('cidade', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="control-label col-md-3">Perfil de professor Ativo</label>
                            <div class="col-md-8">
                                {!! Form::checkbox('ativo',1,Auth::user()->hasRole('professor') ? 'checked' : null, ['class' => 'iCheck-item', 'disabled' => 'true' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::hidden('user_id', Auth::user()->id , ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <button type="submit" class="btn btn-primary">{{ !empty($professor->id) ? "Atualizar" : "Salvar"}}</button>
                            @if( !empty($professor->id))
                                <a href="#" class="btn btn-primary"> Competencias  <i class="glyphicon glyphicon-eye-open"></i> </a>
                            @endif
                            @if( !empty($professor->id) && !Auth::user()->hasRole('professor'))
                                <a href="#" class="btn btn-primary"> Solicitar ativação   <i class="glyphicon glyphicon-thumbs-up"></i> </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@section('form-script')
@endsection

@include('layouts.partials.footer')