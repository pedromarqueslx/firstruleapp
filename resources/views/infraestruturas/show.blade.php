@extends('layouts.app')



@section('content')

    <h1><a href="{{route('infraestruturas.edit', $infraestruturas->id)}}">{{$infraestruturas->referencia_orait}}</a></h1>


@stop



@section('footer')

@stop
