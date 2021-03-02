@extends('layouts.app')
@section('content')

    <div class="card Recent-Users">
        <div class="card-header">
            <h1>Intervenções em Infraestruturas de Telecomunicações</h1>
        </div>
        <div class="card-block px-0 py-3">

        <h1><a href="{{route('users.edit', $users->id)}}">{{$users->id}}</a></h1>

        </div>
    </div>

@stop
@section('footer')
@stop
