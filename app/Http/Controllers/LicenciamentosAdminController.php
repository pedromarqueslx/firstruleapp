<?php

namespace App\Http\Controllers;

use App\Models\Licenciamento;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;


class LicenciamentosAdminController extends Controller
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
        //$licenciamentos = auth()->user()->licenciamentos;
        //return view('licenciamentos.index', compact('licenciamentos'));
        return view('admin.licenciamentos.index', ['licenciamentos' => $licenciamentos]);

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
            'user_id'=>'required|max:50',
            'municipio'=>'required',
            'referencia_orait'=>'required|max:50',
            'data_inicio_trabalhos'=>'required',
            'data_fim_trabalhos'=>'required',
            'anexos'=>'file',
            'data_envio_licenciamento_municipio'=>'',
            'referencia_licenciamento_munipicio'=>'',
            'data_autorizacao_municipio'=>'',
            'data_envio_autorizacao_operador'=>'',
            'observacoes'=>'',
            'data'=>''
        ]);

        Licenciamento::create($request->all());

        session()->flash('message', 'Licenciamento criado com sucesso');

        return  redirect('/admin/licenciamentos');

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
    public function edit(Licenciamento $licenciamentos)
    {

        //$licenciamentos = Licenciamento::findOrFail($id);
        return view('admin.licenciamentos.edit', ['licenciamentos' => $licenciamentos]);

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
        return redirect('/admin/licenciamentos');

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
