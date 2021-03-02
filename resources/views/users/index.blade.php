@extends('layouts.app')
@section('content')

    <div class="card Recent-Users">
        <div class="card-header">
            <h1>Intervenções em Infraestruturas de Telecomunicações</h1>
        </div>
        <div class="card-block px-0 py-3">

            <ul>
                @foreach($users as $user)

                    <li><a href="{{route('users.show', $user->id)}}">{{$user->id}}</a></li>

                @endforeach
            </ul>

        </div>
    </div>

@stop
@section('footer')
@stop
