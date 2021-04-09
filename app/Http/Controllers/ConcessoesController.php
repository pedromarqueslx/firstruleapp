<?php

namespace App\Http\Controllers;

use App\Models\Concessoe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;


class ConcessoesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concessoes = Concessoe::all();

        return view('concessoes.index', compact('concessoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('concessoes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nome'=>'required|max:50',
            'email'=>'required',
            'contribuinte'=>'required|max:50',
            'telefone'=>'required',
            'morada'=>'required'
        ]);

        Concessoe::create($request->all());

        session()->flash('message', 'Concessão criada com sucesso');

        return  redirect('/concessoes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $concessoes = Concessoe::findOrFail($id);

        return view('concessoes.show', compact('concessoes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $concessoes = Concessoe::findOrFail($id);

        return view('concessoes.edit', compact('concessoes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $concessoes = Concessoe::findOrFail($id);

        $concessoes->update($request->all());

        return redirect('/concessoes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $concessoes = Concessoe::findOrFail($id);

        $concessoes->delete();

        return redirect('/concessoes');

    }
}
