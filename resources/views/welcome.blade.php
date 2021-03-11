<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FirstRule</title>
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h1 {
            font-size: 1.2rem;
            line-height: 1.4em;
            letter-spacing: .02rem;
            color: #2699FB;
            font-weight: 400;
        }

        h2 {
            font-size: 1rem;
            line-height: 1.4em;
            letter-spacing: .02rem;
            color: #2699FB;
            font-weight: 400;
        }

        h3 {
            font-size: 0.85rem;
            line-height: 1.3em;
            letter-spacing: .01rem;
            color: #2699FB;
            font-weight: 400;
        }

        h4 {
            font-size: 0.8rem;
            line-height: 1.4em;
            letter-spacing: .02rem;
            color: #2699FB;
            font-weight: 700;
        }

        h5 {
            font-size: 0.75rem;
            line-height: 1.1em;
            letter-spacing: .02rem;
            color: #2699FB;
            font-weight: 700;
        }

        h6 {
            font-size: 0.6rem;
            line-height: 1.1em;
            letter-spacing: .02rem;
            color: #2699FB;
            font-weight: 700;
        }

        p {
            font-size: 1rem;
            line-height: 1.55em;
            letter-spacing: .01rem;
            color: #2699FB;
            font-weight: 400;
        }

        label {
            font-size: 0.65rem;
            line-height: 1.55em;
            letter-spacing: .01rem;
            color: #2699FB;
            font-weight: 400;
        }

        .form-control {
            font-size: 0.65rem;
            line-height: 1.55em;
            letter-spacing: .01rem;
            color: #2699FB !important;
            font-weight: 400;
            border: 1px solid #BCE0FD;
            background-color: #F1F9FF;
        }

        body {
            background-color: #F4F7FA;
        }
    </style>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
no
<div class="container-fluid">

    <div class="row mt-5 mb-4">
        <div class="col mb-3 mx-auto">
        <img src="{{url('/firstrule-logo.svg')}}" alt="FirstRule" class="mx-auto d-block text-center mt-5 mb-3"/>
        <h1 class="text-center">Gestão de Infraestruturas de Redes de Telecomunicações</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3 mx-auto">
            <div class="card">
                <div class="card-body">

                    <form method="" action="/infraestruturas">

                    <div class="mt-2 mb-2">
                    <label for="email">Nome de utilizador ou endereço de email</label>
                    <input type="text" class="form-control" name="email" id="email" value="" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                    </div>

                    <div class="mt-2 mb-2">
                    <label for="password">Senha</label>
                    <input type="text" class="form-control" name="password" id="password" value="" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                    </div>

                    <div class="mt-4 mb-4">
                    {{--<input type="hidden" name="_method" value="PUT"/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>--}}
                    <input type="submit" name="submit" value="Iniciar Sessão" class="btn btn-success mx-auto d-block">
                    </div>

                    </form>
                    <p><a href="">Esqueceu-se da senha?</a></p>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>Pretendo criar uma conta:</p>
                <input type="submit" name="submit" value="Criar Conta" class="btn btn-primary">
            </div>
        </div>
    </div>

{{--    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif--}}

</div>

