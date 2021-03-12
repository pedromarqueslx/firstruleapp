@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-2 mb-2">
        <div class="col mb-3 mx-auto">
            <img src="{{url('/firstrule-logo.svg')}}" alt="FirstRule" class="mx-auto d-block text-center mt-5 mb-3"/>
            <h1 class="text-center">{{ __('auth.Reset Password') }}</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mt-2 mb-5">
                            <label for="email">{{ __('auth.E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success mx-auto d-block ">
                            {{ __('auth.Send Password Reset Link') }}
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
