@extends('layouts.menu')
@section('content')

    <h1>Operadores</h1>

    <div class="card Recent-Users">
        <div class="card-block px-0 py-3">

            <ul>
                @foreach($users as $user)

                    <li><a href="{{route('users.show', $user->id)}}">{{$user->id}}</a></li>

                @endforeach
            </ul>

        </div>
    </div>

@endsection
@section('footer')
@stop
