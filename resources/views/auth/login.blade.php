@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-2 mb-2">
        <div class="col mb-3 mx-auto">
            <img src="{{url('/firstrule-logo.svg')}}" alt="FirstRule" class="mx-auto d-block text-center mt-5 mb-3"/>
            <h1 class="text-center">{{ __('auth.Login title') }}</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mt-2 mb-2">
                            <label for="email">{{ __('auth.E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mt-3 mb-2">
                        <label for="password">{{ __('auth.Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('auth.Remember Me') }}
                            </label>
                        </div>

                        <button type="submit" class="btn btn-success mx-auto d-block">
                            {{ __('auth.Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="small" href="{{ route('password.request') }}">
                                {{ __('auth.Forgot Your Password?') }}
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center ml-4">
            <p class="small">{{ __('auth.Register Create Account') }}</p>
            <a href="{{ route('register') }}" class="btn btn-primary">{{ __('auth.Register') }}</a>
        </div>
    </div>
</div>
@endsection
