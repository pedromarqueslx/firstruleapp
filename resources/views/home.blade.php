{{--@extends('layouts.app')--}}
@extends('layouts.menu')
@section('content')

    <h1>{{ __('Intervenções em Infraestruturas de Telecomunicações') }}</h1>

    <div class="card Recent-Users">
        <div class="card-block px-3 py-3">
            @foreach($infraestruturas as $infraestrutura)
                {{--@if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{ __('You are logged in!') }}--}}
                <a href="{{route('disponibilidades',$infraestrutura->id)}}">
                    <p>{{$infraestrutura->referencia_orait}} - {{$infraestrutura->created_at->diffForHumans()}} - {{$infraestrutura->data_resposta_licenciamento}} - {{$infraestrutura->user->name}}</p>
                </a>

            @endforeach

        </div>

    </div>
@endsection
