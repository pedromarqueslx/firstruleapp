@extends('layouts.menu')
@section('content')

    <h1>Perfil de Operador</h1>
    <p class="small">Os dados registados serão utilizados na simplificação de pedidos de disponibilidade e de acessibilidade às infraestruturas de telecomunicações.</p>
    <p>{{$users->id}}</p>

    <div class="card">
        <div class="card-block px-3 py-4">

            <form method="post" action="/users/{{$users->id}}">

                <div class="row mb-4">
                    <div class="col-md-3 mb-3 required">
                        <label for="name">Nome do Operador</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$users->name}}" required="">
                        <div class="invalid-feedback">
                            ...
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="email">E-mail</label>
                        <input class="form-control" name="email" id="email" value="{{$users->email}}" required="">
                        <div class="invalid-feedback">
                            ....
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="password">Criar senha</label>
                        <input type="text" class="form-control" name="password" id="password" value="{{$users->password}}" required="">
                        <div class="invalid-feedback">
                            ....
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="">Confirmar senha</label>
                        <input type="text" class="form-control" name="" id="" value="">
                        <div class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>

                <h2>Perfil do Operador</h2>

                <div class="row mb-4">
                    <div class="col-md-3 mb-3 required">
                        <label for="morada">Morada do Operador</label>
                        <input type="text" class="form-control" name="morada" id="morada" value="{{$users->morada}}" required="">
                        <div class="invalid-feedback">
                            ...
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="contribuinte">N.o Contribuinte do Operador</label>
                        <input class="form-control" name="contribuinte" id="contribuinte" value="{{$users->contribuinte}}" required="">
                        <div class="invalid-feedback">
                            ....
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="telefone">Telefone do Operador</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" value="{{$users->telefone}}" required="">
                        <div class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>

                <h2>Responsável do Operador</h2>

                <div class="row mb-5">
                    <div class="col-md-3 mb-3">
                        <label for="nome_responsavel_operador">Nome do Responsável do Operador</label>
                        <input type="text" class="form-control" name="nome_responsavel_operador" id="nome_responsavel_operador" value="{{$users->nome_responsavel_operador}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="email_responsavel_operador">E-mail do Responsável do Operador</label>
                        <input type="text" class="form-control" name="email_responsavel_operador" id="email_responsavel_operador" value="{{$users->email_responsavel_operador}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="telefone_responsavel_operador">Telefone do Responsável do Operador</label>
                        <input type="text" class="form-control" name="telefone_responsavel_operador" id="telefone_responsavel_operador" value="{{$users->telefone_responsavel_operador}}">
                    </div>
                </div>

                <input name="_method" type="hidden" value="PUT"/>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="submit"  name="submit" value="Guardar Dados de Operador" class="btn btn-success mx-auto d-block">

            </form>

            <form method="post" action="/users/{{$users->id}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="delete" value="Apagar" class="btn btn-primary mx-auto d-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            </form>

        </div>
    </div>

@stop
@section('footer')
@stop
