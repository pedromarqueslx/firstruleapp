@extends('layouts.menu')
@section('content')

<h1>{{$user->name }}</h1>

<div class="card">
    <div class="card-block px-3 py-4">

        <form method="post" action="">

            <div class="row mb-4">
                <div class="col-md-3 mb-3 required">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" required="">
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="email">E-mail</label>
                    <input class="form-control" name="email" id="email" value="{{$user->email}}" required="">

                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="password">Criar senha</label>
                    <input type="password" class="form-control" name="password" id="password" required="">
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="">Confirmar senha</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                </div>
            </div>

            <h2>Perfil do Operador</h2>

            <div class="row mb-4">
                <div class="col-md-3 mb-3 required">
                    <label for="morada">Morada do Operador</label>
                    <input type="text" class="form-control" name="morada" id="morada" required="" value="{{$user->morada}}">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="contribuinte">N.o Contribuinte do Operador</label>
                    <input class="form-control" name="contribuinte" id="contribuinte" required="" value="{{$user->contribuinte}}">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="telefone">Telefone do Operador</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" required="" value="{{$user->telefone}}">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <h2>Responsável do Operador</h2>

            <div class="row mb-5">
                <div class="col-md-3 mb-3">
                    <label for="nome_responsavel_operador">Nome do Responsável do Operador</label>
                    <input type="text" class="form-control" name="nome_responsavel_operador" id="nome_responsavel_operador" value="{{$user->nome_responsavel_operador}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="email_responsavel_operador">E-mail do Responsável do Operador</label>
                    <input type="text" class="form-control" name="email_responsavel_operador" id="email_responsavel_operador" value="{{$user->email_responsavel_operador}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="telefone_responsavel_operador">Telefone do Responsável do Operador</label>
                    <input type="text" class="form-control" name="telefone_responsavel_operador" id="telefone_responsavel_operador" value="{{$user->telefone_responsavel_operador}}">
                </div>
            </div>

            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input type="submit" name="submit" value="Guardar" class="btn btn-success mx-auto d-block">
            <p class="mx-auto small">Autorizo o envio de notificações com alertas sobre os prazos legais em vigor, para acessibilidade a infraestruturas de telecomunicações.*</p>
            <!--
            <input name="_method" type="hidden" value="PUT"/>
            -->
        </form>
        {{--
        <form method="post" action="/infraestruturas/{{$infraestruturas->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="delete" value="Apagar pedido" class="btn btn-primary mx-auto d-block">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        </form>
        --}}

    </div>
</div>

@endsection

@section('footer')
@stop
