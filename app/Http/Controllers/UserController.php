<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(User $user){

        return view('admin.users.profile', ['user'=>$user]);
    }

    public function index()
    {

        $users = User::all();

        return view('admin.users.index', ['users'=>$users]);

    }

    public function update(User $user){

        $inputs = request()->validate([
            'name'=>'required|string|min:6|max:255',
            'email'=>'required|email|max:255',
            'tipo_entidade'=>'required|string|max:255',
            'sector_atividade'=>'required|string|max:255',
            'codigo_certidao'=>'required|string|max:255',
            'morada'=>'required|string|max:255',
            'codigo_postal'=>'required|string|max:255',
            'contribuinte'=>'required|string|max:255',
            'telefone'=>'required|string|max:255',
            'pais'=>'required|string|max:255',
            'anexos'=>'file',
            //'password' => 'min:6|max:255|confirmed'
        ]);

        if(request('anexos')){

            $inputs['anexos'] = request('anexos')->store('images');
            //dd(request('password'));
        }

        $user->update($inputs);

        return back();

    }

    public function destroy(User $user){

        $user->delete();

        session()->flash('user-deleted', 'Dados do operador apagados');

        return back();

    }

}
