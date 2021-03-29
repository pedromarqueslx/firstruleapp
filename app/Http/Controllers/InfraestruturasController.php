<?php

namespace App\Http\Controllers;

use App\Models\Infraestrutura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\In;

class InfraestruturasController extends Controller
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

        $infraestruturas = Infraestrutura::all();
        return view('infraestruturas.index', ['infraestruturas' => $infraestruturas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('infraestruturas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store()
    {

        //dd(request()->all());
        $inputs = request()->validate([
            'referencia_orait'   =>'required|max:40',
            'nome_operador' =>  '',
            'contribuinte_operador' =>  '',
            'morada_operador' =>  '',
            'telefone_operador' =>  '',
            'email_operador' =>  '',
            'telefone_responsavel_operador' =>  '',
            'email_responsavel_operador' =>  '',
            'cvp_entrada_ponto_entrada' =>  '',
            'cvp_entrada_ponto_ligacao' =>  '',
            'cvp_entrada_folga' =>  '',
            'cvp_saida' =>  '',
            'cvp_saida_ponto_entrada' =>  '',
            'cvp_saida_ponto_ligacao' =>  '',
            'cvp_saida_folga' =>  '',
            'tipo_tubo_ponto_entrada' =>  '',
            'tipo_cabo' =>  '',
            'seccao_cabo' =>  '',
            'cabo_identificacao' =>  '',
            'cabo_designacao_cabos' =>  '',
            'cabo_capacidade' =>  '',
            'cabo_peso' =>  '',
            'cabo_diametro' =>  '',
            'cabo_seccao' =>  '',
            'cvp_identificacao_equipamento' =>  '',
            'cvp_cabo_ligacao' =>  '',
            'cvp_tipo_equipamento' =>  '',
            'cvp_dimensoes' =>  '',
            'cvp_peso' =>  '',
            'cvp' =>  '',
            'observacoes' =>  '',
            'metragem',
            'quantidade_equipamentos' =>  '',
            'quantidade_pontos_entrada' =>  '',
            'observacoes_resposta' =>  '',
            'resposta' =>  '',
            'data_resposta_licenciamento' =>  '',
            'data_pedido_acesso' =>  '',
            'data_resposta_acesso' =>  '',
            'data_pedido_cadastro' =>  '',
            'data_resposta_cadastro' =>  '',
            'referencia_operador'=>'required|max:40',
            'municipio_id'       =>'required|max:40',
            'municipio_cartas'   =>'required|max:20',
            'anexo'              =>'mimes:pdf,png,jpeg',
            //'anexo'            =>'file',
            'cvp_entrada'        =>'required|max:50',
            'responsavel_operador' => '',
            'user_name' => '',
            'user_contribuinte' => '',
            'user_morada' => '',
            'user_telefone' => '',
            'user_email' => ''
        ]);

        // check if anexo exists
        /*
        if($file = request('anexo')){
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            //$inputs['anexo'] = request('anexo')->store('images');
            $inputs['anexo'] = $name;
        }
        */

        if(request('anexo')){
            $inputs['anexo'] = request('anexo')->store('images');
        }

        auth()->user()->infraestruturas()->create($inputs);
        //return back();

        session()->flash('message', $inputs['referencia_orait'] . ' - Pedido criado com sucesso');

        //Infraestrutura::create($inputs->all());
        return redirect()->route('infraestruturas.index');
        //dd($request->anexo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Infraestrutura $infraestruturas)
    {

        return view('infraestruturas.show', ['infraestruturas' => $infraestruturas]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
     public function edit(Infraestrutura $infraestruturas)
    {
        /*$this->validate($request,[
            'referencia_operador'=>'required|max:50',
            'municipio_id'=>'required',
            'municipio_cartas'=>'required|max:50',
            'cvp_entrada'=>'required'
        ]);*/

        //$infraestruturas = Infraestrutura::findOrFail($id);
        return view('infraestruturas.edit', ['infraestruturas' => $infraestruturas]);

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
        //
        //return $request->all();
        $infraestruturas = Infraestrutura::findOrFail($id);

        $infraestruturas->update($request->all());

        return redirect('/infraestruturas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $infraestruturas = Infraestrutura::findOrFail($id);

        $infraestruturas->delete();

        return redirect('/infraestruturas');

    }
}



