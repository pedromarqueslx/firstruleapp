@extends('layouts.app')
@section('content')

    <h1>Perfil de Operador</h1>
    <p>{{$users->id}}</p>

    <div class="card">
        <div class="card-block px-3 py-4">

            <form method="post" action="/users/{{$users->id}}">

            <div class="row mb-3">
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

            <div class="row mb-5">
                <div class="col-md-3 mb-3 required">
                    <label for="responsavel_operador">Morada do Operador</label>
                    <input type="text" class="form-control" name="responsavel_operador" id="responsavel_operador" value="{{$users->responsavel_operador}}" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="email_responsavel_operador">N.o Contribuinte do Operador</label>
                    <input class="form-control" name="email_responsavel_operador" id="email_responsavel_operador" value="{{$users->email_responsavel_operador}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="telefone_responsavel_operador">Telefone do Operador</label>
                    <input type="text" class="form-control" name="telefone_responsavel_operador" id="telefone_responsavel_operador" value="{{$users->telefone_responsavel_operador}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <h2>Responsável do Operador</h2>

            <div class="row mb-5">
                <div class="col-md-2 mb-3">
                    <label for="cabo_identificacao">Nome do Responsável do Operador</label>
                    <input type="text" class="form-control" name="cabo_identificacao" id="cabo_identificacao" value="{{$users->cabo_identificacao}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cabo_designacao_cabos">E-mail do Responsável do Operador</label>
                    <input type="text" class="form-control" name="cabo_designacao_cabos" id="cabo_designacao_cabos" value="{{$users->cabo_designacao_cabos}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cabo_capacidade">Telefone do Responsável do Operador</label>
                    <input type="text" class="form-control" name="cabo_capacidade" id="cabo_capacidade" value="{{$users->cabo_capacidade}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

                <input name="_method" type="hidden" value="PUT"/>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="submit"  name="submit" value="Submeter Pedido de Disponibilidade" class="btn btn-success mx-auto d-block">

            </form>

            <form method="post" action="/users/{{$users->id}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="delete" value="Apagar pedido" class="btn btn-primary mx-auto d-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            </form>

        </div>
    </div>

@stop
@section('footer')
@stop
