@extends('layouts.app')
@section('content')

    <div class="card Recent-Users">
        <div class="card-header">
            <h1>Intervenções em Infraestruturas de Telecomunicações</h1>
        </div>
        <div class="card-block px-0 py-3">

            <ul>
                @foreach($infraestruturas as $infraestrutura)

                    <li><a href="{{route('infraestruturas.show', $infraestrutura->id)}}">{{$infraestrutura->referencia_orait}}</a></li>

                @endforeach
            </ul>

        </div>
    </div>

@stop
@section('footer')
@stop
