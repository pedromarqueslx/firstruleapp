<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tipo_entidade' => ['required', 'string', 'min:8'],
            'sector_atividade' => ['required', 'string', 'min:8'],
            'codigo_certidao' => ['required', 'string'],
            'morada' => ['required', 'string', 'max:255'],
            'codigo_postal' => ['required', 'string', 'max:255'],
            'contribuinte' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'string', 'max:255'],
            'pais' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            //'password' => Hash::make($data['password']),
            'password' => $data['password'],
            'tipo_entidade' => $data['tipo_entidade'],
            'sector_atividade' => $data['sector_atividade'],
            'codigo_certidao' => $data['codigo_certidao'],
            'morada' => $data['morada'],
            'codigo_postal' => $data['codigo_postal'],
            'contribuinte' => $data['contribuinte'],
            'telefone' => $data['telefone'],
            'nome_responsavel_operador' => $data['nome_responsavel_operador'],
            'email_responsavel_operador' => $data['email_responsavel_operador'],
            'telefone_responsavel_operador' => $data['telefone_responsavel_operador'],
            'pais' => $data['pais'],
            'anexos' => $data['anexos'],
        ]);
    }
}
