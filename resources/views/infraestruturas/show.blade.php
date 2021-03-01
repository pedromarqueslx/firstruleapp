@extends('layouts.app')
@section('content')

    <div class="card Recent-Users">
        <div class="card-header">
            <h1>Intervenções em Infraestruturas de Telecomunicações</h1>
        </div>
        <div class="card-block px-0 py-3">

        <h1><a href="{{route('infraestruturas.edit', $infraestruturas->id)}}">{{$infraestruturas->referencia_orait}}</a></h1>

        </div>
    </div>

@stop
@section('footer')
@stop
