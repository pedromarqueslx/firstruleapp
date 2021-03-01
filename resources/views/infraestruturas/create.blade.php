@extends('layouts.app')
@section('content')

    <div class="card Recent-Users">
        <div class="card-header">
            <h1>Pedido de Disponibilidade</h1>
        </div>
        <div class="card-block px-0 py-3">

            <form method="post" action="/infraestruturas">












                <input type="text" name="referencia_orait" placeholder="referencia_orait">
                <input type="text" name="user_id" value="1">

                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="submit" name="submit" value="Submeter Pedido Disponibilidade" class="btn btn-primary">

            </form>

        </div>
    </div>

@stop
@section('footer')
@stop
