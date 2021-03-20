{{--@extends('layouts.app')--}}
@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @foreach($infraestruturas as $infraestrutura)
                    {{--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}--}}
                        <p>{{$infraestrutura->referencia_orait}} - {{$infraestrutura->created_at->diffForHumans()}} - {{$infraestrutura->data_resposta_licenciamento}}</p>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
