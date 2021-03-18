@extends('layouts.app')
@extends('layouts.menu')
@section('content')

    <h1>{{ __('auth.Register Title') }}</h1>
    <p class="small">{{ __('auth.Register Text') }}</p>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-3 mb-3 required">
                        <label for="name">{{ __('auth.Register Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="email">{{ __('auth.Register E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="password">{{ __('auth.Register Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="password-confirm">{{ __('auth.Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                </div>

                <h2>{{ __('auth.Operator') }}</h2>

                <div class="row mb-4">
                    <div class="col-md-3 mb-3 required">
                        <label for="morada">{{ __('auth.Operator Address') }}</label>
                        <input id="morada" type="text" class="form-control @error('morada') is-invalid @enderror" name="morada" value="{{ old('morada') }}" required autocomplete="morada">
                        @error('morada')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="contribuinte">{{ __('auth.Operator Vat') }}</label>
                        <input id="contribuinte" type="text" class="form-control @error('contribuinte') is-invalid @enderror" name="contribuinte" value="{{ old('contribuinte') }}" required autocomplete="contribuinte">
                        @error('contribuinte')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3 required">
                        <label for="telefone">{{ __('auth.Operator Phone') }}</label>
                        <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">
                        @error('telefone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <h2>{{ __('auth.Resp Operator') }}</h2>

                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <label for="nome_responsavel_operador">{{ __('auth.Resp Operator Name') }}</label>
                        <input id="nome_responsavel_operador" type="text" class="form-control" name="nome_responsavel_operador" value="{{ old('nome_responsavel_operador') }}" >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="email_responsavel_operador">{{ __('auth.Resp Operator Email') }}</label>
                        <input id="email_responsavel_operador" type="text" class="form-control" name="email_responsavel_operador" value="{{ old('email_responsavel_operador') }}" >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="telefone_responsavel_operador">{{ __('auth.Resp Operator Phone') }}</label>
                        <input id="telefone_responsavel_operador" type="text" class="form-control" name="telefone_responsavel_operador" value="{{ old('telefone_responsavel_operador') }}" >
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success mx-auto">
                            {{ __('auth.Register') }}
                        </button>
                        <p class="text-center small">Autorizo o envio de notificações com alertas sobre os prazos legais em vigor, para acessibilidade a infraestruturas de telecomunicações.</p>
                    </div>
                </div>

            </form>

            <div class="row mt-2">
                <div class="col text-center">
                    <p class="text-center small">Já tenho uma conta:</p>
                    <a href="{{ route('login') }}" class="btn btn-primary mx-auto" role="button">{{ __('auth.Login') }}</a>
                </div>
            </div>

        </div>
    </div>
@endsection
