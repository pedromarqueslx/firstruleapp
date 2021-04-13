<?php

namespace App\Http\Controllers;

use App\Models\Infraestrutura;
use App\Models\Concessoe;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $concessoes = Concessoe::all();
        return view('infraestruturas.create', ['concessoes' => $concessoes]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {
        $inputs = request()->validate([
            'referencia_orait'   =>'required|max:40',
            'user_name' => '',
            'user_contribuinte' => '',
            'user_morada' => '',
            'user_telefone' => '',
            'user_email' => '',

            'referencia_operador'=>'required|max:40',
            'municipio_id'       =>'required|max:40',
            'municipio_cartas'   =>'',

            'responsavel_operador' => '',
            'email_responsavel_operador' =>  '',
            'telefone_responsavel_operador' =>  '',

            'anexo'              =>'mimes:pdf,doc,png,jpeg',

            'cvp_entrada'        =>'required|max:50',
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
            'data_resposta_cadastro' =>  ''

        ]);

        if(request('anexo')){
            $inputs['anexo'] = request('anexo')->store('images');
        }

        auth()->user()->infraestruturas()->create($inputs);

        session()->flash('message', $inputs['referencia_orait'] . ' - Pedido criado com sucesso');

        return redirect()->route('infraestruturas.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Infraestrutura $infraestruturas)
    {

        return view('infraestruturas.edit', ['infraestruturas' => $infraestruturas]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Infraestrutura $infraestruturas)
    {
        $inputs = request()->validate([
            'referencia_orait' =>'required|max:40',

            'user_name' => '',
            'user_contribuinte' => '',
            'user_morada' => '',
            'user_telefone' => '',
            'user_email' => '',

            'referencia_operador'=>'required|max:40',
            'municipio_id'       =>'required|max:40',
            'municipio_cartas'   =>'required|max:20',

            'responsavel_operador' => '',
            'telefone_responsavel_operador' =>  '',
            'email_responsavel_operador' =>  '',

            'anexo'              =>'',

            'cvp_entrada'        =>'required|max:50',
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

            //'metragem',
            //'quantidade_equipamentos' =>  '',
            //'quantidade_pontos_entrada' =>  '',
            //'observacoes_resposta' =>  '',
            //'resposta' =>  '',
            //'data_resposta_licenciamento' =>  '',
            //'data_pedido_acesso' =>  '',
            //'data_resposta_acesso' =>  '',
            //'data_pedido_cadastro' =>  '',
            //'data_resposta_cadastro' =>  '',

        ]);

        if(request('anexo')){
            $inputs['anexo'] = request('anexo')->store('images');
            $infraestruturas->anexo = $inputs['anexo'];
        }

        $infraestruturas->referencia_orait = $inputs['referencia_orait'];
        $infraestruturas->user_name = $inputs['user_name'];
        $infraestruturas->user_contribuinte = $inputs['user_contribuinte'];
        $infraestruturas->user_morada = $inputs['user_morada'];
        $infraestruturas->user_telefone = $inputs['user_telefone'];
        $infraestruturas->user_email = $inputs['user_email'];

        $infraestruturas->referencia_operador = $inputs['referencia_operador'];
        $infraestruturas->municipio_id = $inputs['municipio_id'];
        $infraestruturas->municipio_cartas = $inputs['municipio_cartas'];

        $infraestruturas->responsavel_operador = $inputs['responsavel_operador'];
        $infraestruturas->email_responsavel_operador = $inputs['email_responsavel_operador'];
        $infraestruturas->telefone_responsavel_operador = $inputs['telefone_responsavel_operador'];

        $infraestruturas->cvp_entrada = $inputs['cvp_entrada'];
        $infraestruturas->cvp_entrada_ponto_entrada = $inputs['cvp_entrada_ponto_entrada'];
        $infraestruturas->cvp_entrada_ponto_ligacao = $inputs['cvp_entrada_ponto_ligacao'];
        $infraestruturas->cvp_entrada_folga = $inputs['cvp_entrada_folga'];
        $infraestruturas->cvp_saida = $inputs['cvp_saida'];
        $infraestruturas->cvp_saida_ponto_entrada = $inputs['cvp_saida_ponto_entrada'];
        $infraestruturas->cvp_saida_ponto_ligacao = $inputs['cvp_saida_ponto_ligacao'];
        $infraestruturas->cvp_saida_folga = $inputs['cvp_saida_folga'];
        $infraestruturas->tipo_tubo_ponto_entrada = $inputs['tipo_tubo_ponto_entrada'];
        $infraestruturas->tipo_cabo = $inputs['tipo_cabo'];
        $infraestruturas->seccao_cabo = $inputs['seccao_cabo'];

        $infraestruturas->cabo_identificacao = $inputs['cabo_identificacao'];
        $infraestruturas->cabo_designacao_cabos = $inputs['cabo_designacao_cabos'];
        $infraestruturas->cabo_capacidade = $inputs['cabo_capacidade'];
        $infraestruturas->cabo_peso = $inputs['cabo_peso'];
        $infraestruturas->cabo_diametro = $inputs['cabo_diametro'];
        $infraestruturas->cabo_seccao = $inputs['cabo_seccao'];

        $infraestruturas->cvp_identificacao_equipamento = $inputs['cvp_identificacao_equipamento'];
        $infraestruturas->cvp_cabo_ligacao = $inputs['cvp_cabo_ligacao'];
        $infraestruturas->cvp_tipo_equipamento = $inputs['cvp_tipo_equipamento'];
        $infraestruturas->cvp_dimensoes = $inputs['cvp_dimensoes'];
        $infraestruturas->cvp_peso = $inputs['cvp_peso'];
        $infraestruturas->cvp = $inputs['cvp'];
        $infraestruturas->observacoes = $inputs['observacoes'];

        //$infraestruturas->metragem = $inputs['metragem'];
        //$infraestruturas->quantidade_equipamentos = $inputs['quantidade_equipamentos'];
        //$infraestruturas->quantidade_pontos_entrada = $inputs['quantidade_pontos_entrada'];
        //$infraestruturas->observacoes_resposta = $inputs['observacoes_resposta'];
        //$infraestruturas->resposta = $inputs['resposta'];
        //$infraestruturas->data_resposta_licenciamento = $inputs['data_resposta_licenciamento'];
        //$infraestruturas->data_pedido_acesso = $inputs['data_pedido_acesso'];
        //$infraestruturas->data_resposta_acesso = $inputs['data_resposta_acesso'];
        //$infraestruturas->data_pedido_cadastro = $inputs['data_pedido_cadastro'];
        //$infraestruturas->data_resposta_cadastro = $inputs['data_resposta_cadastro'];

        $this->authorize('update', $infraestruturas);

        $infraestruturas->update();

        session()->flash('message', $inputs['referencia_orait'] . ' - Atualizado com sucesso');

        return redirect()->route('infraestruturas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infraestrutura $infraestruturas)
    {

        $infraestruturas->delete();

        session()->flash('message', 'Registo apagado');

        return redirect('/infraestruturas');

    }
}



