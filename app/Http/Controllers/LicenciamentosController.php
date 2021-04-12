<?php

namespace App\Http\Controllers;

use App\Models\Licenciamento;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;


class LicenciamentosController extends Controller
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
        $licenciamentos = Licenciamento::all();

        return view('licenciamentos.index', compact('licenciamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('licenciamentos.create');

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

        Licenciamento::create($request->all());

        return  redirect('/licenciamentos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $licenciamentos = Licenciamento::findOrFail($id);

        return view('licenciamentos.show', compact('licenciamentos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $licenciamentos = Licenciamento::findOrFail($id);

        return view('licenciamentos.edit', compact('licenciamentos'));

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

        $licenciamentos = Licenciamento::findOrFail($id);

        $licenciamentos->update($request->all());

        return redirect('/licenciamentos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $licenciamentos = Licenciamento::findOrFail($id);

        $licenciamentos->delete();

        return redirect('/licenciamentos');

    }
}
