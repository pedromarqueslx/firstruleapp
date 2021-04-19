<?php

namespace App\Http\Controllers;

use App\Models\Infraestrutura;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //$infraestruturas = Infraestrutura::all();
        //$infraestruturas = auth()->user()->infraestruturas->where('resposta', '=', 'Pendente');
        $infraestruturas = auth()->user()->infraestruturas;

        if(auth()->user()->userHasRole('Admin')){
            return view('admin.home', ['infraestruturas' => $infraestruturas]);
        }
        //dd($infraestruturas);
        return view('home', ['infraestruturas' => $infraestruturas]);

    }
/*
    public function show(Infraestrutura $infraestrutura){

        return view('infraestruturas', ['infraestrutura' => $infraestrutura]);

    }*/
}
