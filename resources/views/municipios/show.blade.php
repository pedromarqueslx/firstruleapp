@extends('layouts.menu')
@section('content')

    <h1>Município</h1>

    <div class="card Recent-Users">
        <div class="card-block px-0 py-3">

            <h1><a href="{{route('municipios.edit', $municipios->id)}}">{{$municipios->nome}}</a></h1>

        </div>
    </div>

@stop
@section('footer')
@stop
