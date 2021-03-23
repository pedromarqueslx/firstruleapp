@extends('layouts.menu')
@section('content')

    <h1>Municípios</h1>

    <div class="card Recent-Users">
        <div class="card-block px-0 py-3">

            <ul>
                @foreach($municipios as $municipio)

                    <li><a href="{{route('municipios.show', $municipio->id)}}">{{$municipio->nome}}</a></li>

                @endforeach
            </ul>

        </div>
    </div>

@stop
@section('footer')
@stop
