 <div class="panel-body">
            <div class="form-horizontal">
                <div class="row">
                    <div class="col-md-8">
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
                            <label for="nome" class="control-label col-md-3">Name</label>
                            <div class="col-md-8">
                                <!-- 3 parametros : nome do campo da tabela, valor default e atributos html, a classe eh referente ao bootstrap para estilizar -->
                                {!! Form::text('nome', null, ['class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descricao" class="control-label col-md-3">Descrição</label>
                            <div class="col-md-8">
                                {!! Form::textarea('descricao', null, ['class' => 'form-control', 'rows' => 2]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipo_cobranca" class="control-label col-md-3">Tipo cobrança</label>
                            <div class="col-md-8">
                                {!! Form::select('tipo_cobranca',['g' => 'gratuito','m' => 'mensal','h' => 'por hora', 'p' => 'porcentagem das aulas' ], null, ['class' => 'form-control', ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="valor" class="control-label col-md-3">valor</label>
                            <div class="col-md-8">
                                {!! Form::text('valor', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="unidadeEnsino_id" class="control-label col-md-3">Unidade de Ensino</label>
                            <div class="col-md-5">
                                <!--1 - field name , lista de unidades de ensino, 3 valor selecionado pluck = list, 4 atributo html adicional -->
                                {!! Form::select('unidadeEnsino_id', App\UnidadeEnsino::pluck('nome_fantasia', 'id'), null, ['class' => 'form-control']) !!}
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
                            <button type="submit" class="btn btn-primary">{{ ! empty($espaco->id) ? "Atualizar" : "Salvar"}}</button>
                            <a href="{{ route('espaco.store') }}" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>








@section('form-script')
@endsection