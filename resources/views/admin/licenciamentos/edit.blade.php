@extends('layouts.menu')
@section('content')

    <h1>Dados de Licenciamento</h1>

    <div class="card">
        <div class="card-block px-3 py-4">

            <form method="post" action="{{route('admin.licenciamentos.update', $licenciamentos->id)}}" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-3 mb-3 required">
                    <input type="text" name="user_id" class="form-control" value="{{$licenciamentos->user_id}}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-2 mb-3 required">
                    <label for="municipio">Município</label>
                    <input type="text" class="form-control" name="municipio" id="municipio" value="{{$licenciamentos->municipio}}" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-2 mb-3 required">
                    <label for="referencia_orait">Referencia Orait</label>
                    <input class="form-control" name="referencia_orait" id="referencia_orait" value="{{$licenciamentos->referencia_orait}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3 required">
                    <label for="data_inicio_trabalhos">Data Início Trabalhos</label>
                    <input type="text" class="form-control" name="data_inicio_trabalhos" id="data_inicio_trabalhos" value="{{$licenciamentos->data_inicio_trabalhos}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="data_fim_trabalhos">Data Fim Trabalhos</label>
                    <input type="text" class="form-control" name="data_fim_trabalhos" id="data_fim_trabalhos" value="{{$licenciamentos->data_fim_trabalhos}}">
                </div>
            </div>

            <h3>Documentos em Anexo (PDF e KMZ)</h3>
            <div class="row mb-5">
                <label for="anexos"></label>
                <input type="file" class="form-control-file" name="anexos" id="anexos" />
            </div>

            <h2>A preencher pela First Rule</h2>

            <div class="row mb-5">
                <div class="col-md-3 mb-3">
                    <label for="data_envio_licenciamento_municipio">Data Envio licenciamento Município</label>
                    <input type="text" class="form-control" name="data_envio_licenciamento_municipio" id="data_envio_licenciamento_municipio" value="{{$licenciamentos->data_envio_licenciamento_municipio}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="referencia_licenciamento_munipicio">Ref. licenciamento Município</label>
                    <input class="form-control" name="referencia_licenciamento_munipicio" id="referencia_licenciamento_munipicio" value="{{$licenciamentos->referencia_licenciamento_munipicio}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="data_autorizacao_municipio">Data Autorizacao Município</label>
                    <input type="text" class="form-control" name="data_autorizacao_municipio" id="data_autorizacao_municipio" value="{{$licenciamentos->data_autorizacao_municipio}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="data_envio_autorizacao_operador">Data Envio Autorizacao Operador</label>
                    <input type="text" class="form-control" name="data_envio_autorizacao_operador" id="data_envio_autorizacao_operador" value="{{$licenciamentos->data_envio_autorizacao_operador}}">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 mb-3">
                    <label for="observacoes">Observações</label>
                    <textarea rows="4" cols="50" class="form-control" name="observacoes" id="observacoes" value="">{{$licenciamentos->observacoes}}</textarea>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="data">Data de Pedido</label>
                    <input type="text" class="form-control" name="data" id="data" value="{{$licenciamentos->data}}" required="" readonly>
                </div>
            </div>


                <input name="_method" type="hidden" value="PATCH"/>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="submit"  name="submit" value="Guardar Dados de Licenciamento" class="btn btn-success mx-auto d-block">

            </form>

            <form method="post" action="/admin/licenciamentos/{{$licenciamentos->id}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="delete" value="Apagar" class="btn btn-primary mx-auto d-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            </form>

        </div>
    </div>

@stop
@section('footer')
@stop
