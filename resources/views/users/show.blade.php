@extends('layouts.menu')
@section('content')

    <h1>Operadores</h1>

    <div class="card Recent-Users">
        <div class="card-block px-0 py-3">

        <h1><a href="{{route('users.edit', $users->id)}}">{{$users->id}}</a></h1>

        </div>
    </div>

@stop
@section('footer')
@stop
