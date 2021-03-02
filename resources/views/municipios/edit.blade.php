@extends('layouts.app')
@section('content')

    <h1>Dados de Município</h1>

    <div class="card">
        <div class="card-block px-3 py-4">

            <form method="post" action="/municipios/{{$municipios->id}}">

            <div class="row">
                <div class="col-md-3 mb-3 required">
                    <input type="text" name="user_id" class="form-control" value="{{$municipios->user_id}}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-2 mb-3 required">
                    <label for="nome">Nome do Município</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{$municipios->nome}}" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-2 mb-3 required">
                    <label for="email">E-mail</label>
                    <input class="form-control" name="email" id="email" value="{{$municipios->email}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3 required">
                    <label for="contribuinte">N.o Contribuinte</label>
                    <input type="text" class="form-control" name="contribuinte" id="contribuinte" value="{{$municipios->contribuinte}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{$municipios->telefone}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="morada">Morada</label>
                    <input type="text" class="form-control" name="morada" id="morada" value="{{$municipios->morada}}">
                </div>
            </div>

            <h2>Responsável do Operador</h2>

            <div class="row mb-5">
                <div class="col-md-3 mb-3">
                    <label for="responsavel">Responsável</label>
                    <input type="text" class="form-control" name="responsavel" id="responsavel" value="{{$municipios->responsavel}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="responsavel_telefone">Telemóvel do Responsável</label>
                    <input class="form-control" name="responsavel_telefone" id="responsavel_telefone" value="{{$municipios->responsavel_telefone}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="responsavel_email">E-mail do Responsável</label>
                    <input type="text" class="form-control" name="responsavel_email" id="responsavel_email" value="{{$municipios->responsavel_email}}">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 mb-3">
                    <label for="observacoes">Observações</label>
                    <textarea rows="4" cols="50" class="form-control" name="observacoes" id="observacoes" value="">{{$municipios->observacoes}}</textarea>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="created_at">Data</label>
                    <input type="text" class="form-control" name="created_at" id="created_at" value="{{$municipios->created_at}}" required="" readonly>
                </div>
            </div>

            <input name="_method" type="hidden" value="PUT"/>
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input type="submit"  name="submit" value="Guardar Dados de Município" class="btn btn-success mx-auto d-block">

            </form>

            <form method="post" action="/municipios/{{$municipios->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="delete" value="Apagar" class="btn btn-primary mx-auto d-block">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            </form>

        </div>
    </div>

@stop
@section('footer')
@stop
