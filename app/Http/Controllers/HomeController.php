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
    public function index(Request $request)
    {

        //$request->session()->put(['Pedro Marques'=>'Administrator']);
        //session(['Miguel Marques'=>'Subscriber']);
        //return $request->session()->all();
        //return session('Miguel Marques');
        //$request->session()->forget('Pedro Marques');
        //$request->session()->flush();
        //return $request->session()->all();
        //$request->session()->flash('message','Okidoki');
        //return $request->session()->get('message');

        $infraestruturas = Infraestrutura::all();
        return view('home', ['infraestruturas' => $infraestruturas]);

    }
}
