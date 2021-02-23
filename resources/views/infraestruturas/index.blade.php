@extends('layouts.app')



@section('content')

    <h1>Index</h1>

    <ul>
        @foreach($infraestruturas as $infraestrutura)

            <li><a href="{{route('infraestruturas.show', $infraestrutura->id)}}">{{$infraestrutura->referencia_orait}}</a></li>

        @endforeach
    </ul>

@stop



@section('footer')

@stop
