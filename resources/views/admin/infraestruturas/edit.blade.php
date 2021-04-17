@extends('layouts.menu')
@section('content')

    <form method="post" action="{{route('admin.infraestruturas.update', $infraestruturas->id)}}" enctype="multipart/form-data">

    @if(auth()->user()->userHasRole('Admin'))

    <h1>Resposta ao Pedido de Disponibilidade</h1>
    <p class="small">Ref. {{$infraestruturas->referencia_orait}}</p>

    <div class="card">
        <div class="card-block px-3 py-4">

            <div class="row mb-2">
                <div class="col-md-3 mb-3 text-truncate required">
                    <label for="metragem">Metragem das condutas</label>
                    <input type="text" class="form-control" name="metragem" id="metragem" value="{{$infraestruturas->metragem}}" required>
                </div>
                <div class="col-md-3 mb-3 text-truncate">
                    <label for="quantidade_equipamentos">Quantidade de equipamentos ou folgas</label>
                    <input class="form-control" name="quantidade_equipamentos" id="quantidade_equipamentos" value="{{$infraestruturas->quantidade_equipamentos}}">
                </div>
                <div class="col-md-3 mb-3 text-truncate">
                    <label for="quantidade_pontos_entrada">Quantidade de pontos de entrada</label>
                    <input type="text" class="form-control" name="quantidade_pontos_entrada" id="quantidade_pontos_entrada" value="{{$infraestruturas->quantidade_pontos_entrada}}">
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="data_resposta_pedido_disponibilidade">Data de resposta</label>
                    <input type="text" class="form-control" name="data_resposta_pedido_disponibilidade" id="data_resposta_pedido_disponibilidade" value="{{ date('Y-m-d') }}" readonly>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6 mb-3 text-truncate">
                    <label for="observacoes_resposta">Observações</label>
                    <textarea rows="4" cols="50" class="form-control" name="observacoes_resposta" id="observacoes_resposta">{{$infraestruturas->observacoes_resposta}}</textarea>
                </div>
                <div class="col-md-3 mb-3 text-truncate required">
                    <label for="resposta">Disponibilidade ao solicitado pelo Operador</label>
                    <select class="form-control" name="resposta" id="resposta" required="">
                        <option disabled selected value="{{$infraestruturas->resposta}}">{{$infraestruturas->resposta}}</option>
                        <option value="Pendente">Pendente</option>
                        <option value="Aprovado">Aprovado</option>
                        <option value="Negado">Negado</option>
                    </select>
                </div>
            </div>

            <h2 class="mt-3">Disponibilidade de Infraestruturas</h2>

            <div class="row mb-2">
                <div class="col-md-1 mb-3 ml-md-2 p-md-2 text-truncate required">
                    <label for="cvp_entrada" class="text-nowrap">CVP Entrada</label>
                    <input type="text" class="form-control" name="cvp_entrada" id="cvp_entrada" value="{{$infraestruturas->cvp_entrada}}" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_entrada_ponto_entrada" class="text-nowrap">P. Entrada</label>
                    <input class="form-control" name="cvp_entrada_ponto_entrada" id="cvp_entrada_ponto_entrada" value="{{$infraestruturas->cvp_entrada_ponto_entrada}}">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_entrada_ponto_ligacao" class="text-nowrap">P. Ligação</label>
                    <input type="text" class="form-control" name="cvp_entrada_ponto_ligacao" id="cvp_entrada_ponto_ligacao" value="{{$infraestruturas->cvp_entrada_ponto_ligacao}}">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_entrada_folga" class="text-nowrap">Folga</label>
                    <input type="text" class="form-control" name="cvp_entrada_folga" id="cvp_entrada_folga" value="{{$infraestruturas->cvp_entrada_folga}}" placeholder="mts">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida" class="text-nowrap">CVP Saída</label>
                    <input type="text" class="form-control" name="cvp_saida" id="cvp_saida" value="{{$infraestruturas->cvp_saida}}">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida_ponto_entrada" class="text-nowrap">P. Entrada</label>
                    <input type="text" class="form-control" name="cvp_saida_ponto_entrada" id="cvp_saida_ponto_entrada" value="{{$infraestruturas->cvp_saida_ponto_entrada}}">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida_ponto_ligacao" class="text-nowrap">P. Ligação</label>
                    <input type="text" class="form-control" name="cvp_saida_ponto_ligacao" id="cvp_saida_ponto_ligacao" value="{{$infraestruturas->cvp_saida_ponto_ligacao}}">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida_folga" class="text-nowrap">Folga</label>
                    <input type="text" class="form-control" name="cvp_saida_folga" id="cvp_saida_folga" value="{{$infraestruturas->cvp_saida_folga}}" placeholder="(mts)">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="tipo_tubo_ponto_entrada" class="text-nowrap">Tipo Tubo no PE</label>
                    <input type="text" class="form-control" name="tipo_tubo_ponto_entrada" id="tipo_tubo_ponto_entrada" value="{{$infraestruturas->tipo_tubo_ponto_entrada}}">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="tipo_cabo" class="text-nowrap">Tipo de Cabo</label>
                    <input type="text" class="form-control" name="tipo_cabo" id="tipo_cabo" value="{{$infraestruturas->tipo_cabo}}">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="seccao_cabo" class="text-nowrap">Secção Cabo</label>
                    <input type="text" class="form-control" name="seccao_cabo" id="seccao_cabo" value="{{$infraestruturas->seccao_cabo}}" placeholder="(cm2)">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 mb-3 required">
                    <label for="resposta_disponibilidade">Resposta de Disponibilidade</label>
                    <select class="form-control" name="resposta_disponibilidade" id="resposta_disponibilidade" required="">
                        <option disabled selected value="{{$infraestruturas->resposta_disponibilidade}}">{{$infraestruturas->resposta_disponibilidade}}</option>
                        <option value="Pendente">Pendente</option>
                        <option value="Aprovado">Aprovado</option>
                        <option value="Negado">Negado</option>
                    </select>
                </div>
            </div>

            <input type="submit"  name="submit" value="Submeter Resposta de Disponibilidade" class="btn btn-success mx-auto d-block">

        </div>
    </div>

    @endif

    <div class="card-block px-3 py-4">

        <h1>Pedido de Disponibilidade</h1>
        <p class="small">Ref. {{$infraestruturas->referencia_orait}}</p>

        <input type="hidden" class="form-control" name="referencia_orait" id="referencia_orait" value="{{$infraestruturas->referencia_orait}}">
        <input type="hidden" class="form-control" name="user_name" id="user_name" value="{{auth()->user()->name}}">
        <input type="hidden" class="form-control" name="user_contribuinte" id="user_contribuinte" value="{{auth()->user()->contribuinte}}">
        <input type="hidden" class="form-control" name="user_morada" id="user_morada" value="{{auth()->user()->morada}}">
        <input type="hidden" class="form-control" name="user_telefone" id="user_telefone" value="{{auth()->user()->telefone}}">
        <input type="hidden" class="form-control" name="user_email" id="user_email" value="{{auth()->user()->email}}">

        <div class="row mb-2">
            <div class="col-md-3 mb-3 required">
                <label for="referencia_operador">Referência Operador</label>
                <input type="text" class="form-control" name="referencia_operador" id="referencia_operador" value="{{$infraestruturas->referencia_operador}}" readonly>
            </div>
            <div class="col-md-3 mb-3 required">
                <label for="municipio_id">Município</label>
                <input class="form-control" name="municipio_id" id="municipio_id" value="{{$infraestruturas->municipio_id}}" readonly>
            </div>
            <div class="col-md-2 mb-3">
                <label for="municipio_cartas">Número das cartas</label>
                <input type="text" class="form-control" name="municipio_cartas" id="municipio_cartas" value="{{$infraestruturas->municipio_cartas}}" required="">
            </div>
        </div>

        <h2 class="mt-3">Responsável do Operador</h2>

        <div class="row mb-2">
            <div class="col-md-3 mb-3 text-truncate">
                <label for="responsavel_operador">Nome do Responsável</label>
                <input type="text" class="form-control" name="responsavel_operador" id="responsavel_operador" value="{{$infraestruturas->responsavel_operador}}" required="">
            </div>
            <div class="col-md-3 mb-3 text-truncate">
                <label for="email_responsavel_operador">E-mail do Responsável</label>
                <input class="form-control" name="email_responsavel_operador" id="email_responsavel_operador" value="{{$infraestruturas->email_responsavel_operador}}" required="">
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="telefone_responsavel_operador">Telefone do Responsável</label>
                <input type="text" class="form-control" name="telefone_responsavel_operador" id="telefone_responsavel_operador" value="{{$infraestruturas->telefone_responsavel_operador}}" required="">
            </div>
        </div>

        <h3 class="mt-3">Documentos em Anexo<span class="small">(.pdf, .doc, .png, .jpeg)</span></h3>

        <p class="small"><a href="{{$infraestruturas->anexo}}" target="_blank"><span class="pcoded-micon"><i class="feather icon-file-minus"></i></span> Anexo</a></p>

        <h2 class="mt-3">Disponibilidade de Infraestruturas</h2>

        <div class="row mb-2">
            <div class="col-md-1 mb-3 ml-md-2 p-md-2 text-truncate required">
                <label for="cvp_entrada" class="text-nowrap">CVP Entrada</label>
                <input type="text" class="form-control" name="cvp_entrada" id="cvp_entrada" value="{{$infraestruturas->cvp_entrada}}" required="">
                <div class="invalid-feedback">
                    ...
                </div>
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="cvp_entrada_ponto_entrada" class="text-nowrap">P. Entrada</label>
                <input class="form-control" name="cvp_entrada_ponto_entrada" id="cvp_entrada_ponto_entrada" value="{{$infraestruturas->cvp_entrada_ponto_entrada}}">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="cvp_entrada_ponto_ligacao" class="text-nowrap">P. Ligação</label>
                <input type="text" class="form-control" name="cvp_entrada_ponto_ligacao" id="cvp_entrada_ponto_ligacao" value="{{$infraestruturas->cvp_entrada_ponto_ligacao}}">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="cvp_entrada_folga" class="text-nowrap">Folga</label>
                <input type="text" class="form-control" name="cvp_entrada_folga" id="cvp_entrada_folga" value="{{$infraestruturas->cvp_entrada_folga}}" placeholder="mts">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="cvp_saida" class="text-nowrap">CVP Saída</label>
                <input type="text" class="form-control" name="cvp_saida" id="cvp_saida" value="{{$infraestruturas->cvp_saida}}">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="cvp_saida_ponto_entrada" class="text-nowrap">P. Entrada</label>
                <input type="text" class="form-control" name="cvp_saida_ponto_entrada" id="cvp_saida_ponto_entrada" value="{{$infraestruturas->cvp_saida_ponto_entrada}}">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="cvp_saida_ponto_ligacao" class="text-nowrap">P. Ligação</label>
                <input type="text" class="form-control" name="cvp_saida_ponto_ligacao" id="cvp_saida_ponto_ligacao" value="{{$infraestruturas->cvp_saida_ponto_ligacao}}">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="cvp_saida_folga" class="text-nowrap">Folga</label>
                <input type="text" class="form-control" name="cvp_saida_folga" id="cvp_saida_folga" value="{{$infraestruturas->cvp_saida_folga}}" placeholder="(mts)">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="tipo_tubo_ponto_entrada" class="text-nowrap">Tipo Tubo no PE</label>
                <input type="text" class="form-control" name="tipo_tubo_ponto_entrada" id="tipo_tubo_ponto_entrada" value="{{$infraestruturas->tipo_tubo_ponto_entrada}}">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="tipo_cabo" class="text-nowrap">Tipo de Cabo</label>
                <input type="text" class="form-control" name="tipo_cabo" id="tipo_cabo" value="{{$infraestruturas->tipo_cabo}}">
            </div>
            <div class="col-md-1 mb-3 p-md-2 text-truncate">
                <label for="seccao_cabo" class="text-nowrap">Secção Cabo</label>
                <input type="text" class="form-control" name="seccao_cabo" id="seccao_cabo" value="{{$infraestruturas->seccao_cabo}}" placeholder="(cm2)">
            </div>
        </div>

        <h2 class="mt-3">Tipo de cabo em conduta</h2>

        <div class="row mb-2">
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cabo_identificacao">Identificação</label>
                <input type="text" class="form-control" name="cabo_identificacao" id="cabo_identificacao" value="{{$infraestruturas->cabo_identificacao}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cabo_designacao_cabos">Designação dos Cabos</label>
                <input type="text" class="form-control" name="cabo_designacao_cabos" id="cabo_designacao_cabos" value="{{$infraestruturas->cabo_designacao_cabos}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cabo_capacidade">Capacidade</label>
                <input type="text" class="form-control" name="cabo_capacidade" id="cabo_capacidade" value="{{$infraestruturas->cabo_capacidade}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cabo_peso">Peso</label>
                <input type="text" class="form-control" name="cabo_peso" id="cabo_peso" value="{{$infraestruturas->cabo_peso}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cabo_diametro">Diâmetro</label>
                <input type="text" class="form-control" name="cabo_diametro" id="cabo_diametro" value="{{$infraestruturas->cabo_diametro}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cabo_seccao">Secção</label>
                <input type="text" class="form-control" name="cabo_seccao" id="cabo_seccao" value="{{$infraestruturas->cabo_seccao}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
        </div>

        <h2 class="mt-3">Tipo de equipamento em CVP</h2>

        <div class="row mb-2">
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cvp_identificacao_equipamento">Identificação do Equipamento</label>
                <input type="text" class="form-control" name="cvp_identificacao_equipamento" id="cvp_identificacao_equipamento" value="{{$infraestruturas->cvp_identificacao_equipamento}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cvp_cabo_ligacao">Cabo de ligação</label>
                <input type="text" class="form-control" name="cvp_cabo_ligacao" id="cvp_cabo_ligacao" value="{{$infraestruturas->cvp_cabo_ligacao}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cvp_tipo_equipamento">Tipo de equipamento</label>
                <input type="text" class="form-control" name="cvp_tipo_equipamento" id="cvp_tipo_equipamento" value="{{$infraestruturas->cvp_tipo_equipamento}}" placeholder="Junta, TAP, PL, Folga">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cvp_dimensoes">Dimensões</label>
                <input type="text" class="form-control" name="cvp_dimensoes" id="cvp_dimensoes" value="{{$infraestruturas->cvp_dimensoes}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cvp_peso">Peso</label>
                <input type="text" class="form-control" name="cvp_peso" id="cvp_peso" value="{{$infraestruturas->cvp_peso}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
            <div class="col-md-2 mb-3 text-truncate">
                <label for="cvp">CVP</label>
                <input type="text" class="form-control" name="cvp" id="cvp" value="{{$infraestruturas->cvp}}">
                <div class="invalid-feedback">
                    ....
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6 mb-3">
                <label for="observacoes">Observações</label>
                <textarea rows="4" cols="50" class="form-control" name="observacoes" id="observacoes" >{{$infraestruturas->observacoes}}</textarea>
            </div>
            <div class="col-md-2 mb-3">
                <label for="created_at">Data de Pedido</label>
                <input type="text" class="form-control" name="created_at" id="created_at" value="{{$infraestruturas->created_at}}" required="" readonly>
            </div>
        </div>

        <input name="_method" type="hidden" value="PATCH"/>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

    </div>

    </form>

    <form method="post" action="/infraestruturas/{{$infraestruturas->id}}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="delete" value="Apagar pedido" class="btn btn-primary mx-auto d-block">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    </form>

@stop
@section('footer')
@stop
