@extends('layouts.menu')
@section('content')


    <h1>Pedidos de Disponibilidade</h1>
{{--
    <p><a href="{{route('infraestruturas.edit', $infraestruturas->id)}}">{{$infraestruturas->referencia_orait}}</a></p>
--}}

    <div class="card Recent-Users">
        <div class="card-block px-0 py-3">

            <ul>
                @foreach($infraestruturas as $infraestrutura)

                    <p><a href="{{route('disponibilidades.show', $infraestrutura->id)}}">{{$infraestrutura->referencia_orait}}</a></p>

                @endforeach
            </ul>

        </div>
    </div>

@stop
@section('footer')
@stop
