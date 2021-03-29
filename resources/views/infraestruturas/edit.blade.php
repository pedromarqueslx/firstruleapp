@extends('layouts.menu')
@section('content')

    <h1>EDIT Pedido de Disponibilidade</h1>
    <p>{{$infraestruturas->referencia_orait}}</p>

    <div class="card">
        <div class="card-block px-3 py-4">
            {{--infraestruturas/{{$infraestruturas->id}}--}}
            <form method="post" action="{{route('infraestruturas.update', $infraestruturas->id)}}" enctype="multipart/form-data">
            {{--@method('PATCH')--}}
            <div class="row">
                <div class="col-md-3 mb-3 required">
                    <input type="hidden" class="form-control" name="referencia_orait" id="referencia_orait" value="PD{{ now()->year }}XXX0000" placeholder="">
                    <input type="hidden" class="form-control" name="user_name" id="user_name" value="{{auth()->user()->name}}" placeholder="">
                    <input type="hidden" class="form-control" name="user_contribuinte" id="user_contribuinte" value="{{auth()->user()->contribuinte}}" placeholder="">
                    <input type="hidden" class="form-control" name="user_morada" id="user_morada" value="{{auth()->user()->morada}}" placeholder="">
                    <input type="hidden" class="form-control" name="user_telefone" id="user_telefone" value="{{auth()->user()->telefone}}" placeholder="">
                    <input type="hidden" class="form-control" name="user_email" id="user_email" value="{{auth()->user()->email}}" placeholder="">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 mb-3 required">
                    <label for="referencia_operador">Referência Operador</label>
                    <input type="text" class="form-control" name="referencia_operador" id="referencia_operador" value="{{$infraestruturas->referencia_operador}}" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="municipio_id">Município</label>
                    <input class="form-control" name="municipio_id" id="municipio_id" value="{{$infraestruturas->municipio_id}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="municipio_cartas">Número das cartas</label>
                    <input type="text" class="form-control" name="municipio_cartas" id="municipio_cartas" value="{{$infraestruturas->municipio_cartas}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <h2>Responsável do Operador</h2>

            <div class="row mb-5">
                <div class="col-md-3 mb-3">
                    <label for="responsavel_operador">Nome do Responsável do Operador</label>
                    <input type="text" class="form-control" name="responsavel_operador" id="responsavel_operador" value="{{$infraestruturas->responsavel_operador}}" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="email_responsavel_operador">E-mail do Responsável do Operador</label>
                    <input class="form-control" name="email_responsavel_operador" id="email_responsavel_operador" value="{{$infraestruturas->email_responsavel_operador}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="telefone_responsavel_operador">Telefone do Responsável do Operador</label>
                    <input type="text" class="form-control" name="telefone_responsavel_operador" id="telefone_responsavel_operador" value="{{$infraestruturas->telefone_responsavel_operador}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <h3>Documentos em Anexo (PDF e KMZ)</h3>
                <p><a href="{{$infraestruturas->anexo}}" target="_blank">anexo</a></p>
            <div class="row mb-5">
                <label for="file"></label>
                <input type="file" class="form-control-file" name="anexo" id="anexo">
            </div>

            <h2>Disponibilidade de Infraestruturas</h2>

            <div class="row mb-5">
                <div class="col-md-1 mb-3 required">
                    <label for="cvp_entrada">CVP Entrada</label>
                    <input type="text" class="form-control" name="cvp_entrada" id="cvp_entrada" value="{{$infraestruturas->cvp_entrada}}" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="cvp_entrada_ponto_entrada">P. Entrada</label>
                    <input class="form-control" name="cvp_entrada_ponto_entrada" id="cvp_entrada_ponto_entrada" value="{{$infraestruturas->cvp_entrada_ponto_entrada}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="cvp_entrada_ponto_ligacao">P. Ligação</label>
                    <input type="text" class="form-control" name="cvp_entrada_ponto_ligacao" id="cvp_entrada_ponto_ligacao" value="{{$infraestruturas->cvp_entrada_ponto_ligacao}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="cvp_entrada_folga">Folga</label>
                    <input type="text" class="form-control" name="cvp_entrada_folga" id="cvp_entrada_folga" value="{{$infraestruturas->cvp_entrada_folga}}" required="" placeholder="mts">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="cvp_saida">CVP Saída</label>
                    <input type="text" class="form-control" name="cvp_saida" id="cvp_saida" value="{{$infraestruturas->cvp_saida}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="cvp_saida_ponto_entrada">P. Entrada</label>
                    <input type="text" class="form-control" name="cvp_saida_ponto_entrada" id="cvp_saida_ponto_entrada" value="{{$infraestruturas->cvp_saida_ponto_entrada}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="cvp_saida_ponto_ligacao">P. Ligação</label>
                    <input type="text" class="form-control" name="cvp_saida_ponto_ligacao" id="cvp_saida_ponto_ligacao" value="{{$infraestruturas->cvp_saida_ponto_ligacao}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="cvp_saida_folga">Folga</label>
                    <input type="text" class="form-control" name="cvp_saida_folga" id="cvp_saida_folga" value="{{$infraestruturas->cvp_saida_folga}}" required="" placeholder="(mts)">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="tipo_tubo_ponto_entrada">Tipo Tubo no PE</label>
                    <input type="text" class="form-control" name="tipo_tubo_ponto_entrada" id="tipo_tubo_ponto_entrada" value="{{$infraestruturas->tipo_tubo_ponto_entrada}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="tipo_cabo">Tipo de Cabo</label>
                    <input type="text" class="form-control" name="tipo_cabo" id="tipo_cabo" value="{{$infraestruturas->tipo_cabo}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="seccao_cabo">Secção Cabo</label>
                    <input type="text" class="form-control" name="seccao_cabo" id="seccao_cabo" value="{{$infraestruturas->seccao_cabo}}" required="" placeholder="(cm2)">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <h2>Tipo de cabo em conduta</h2>

            <div class="row mb-5">
                <div class="col-md-2 mb-3">
                    <label for="cabo_identificacao">Identificação</label>
                    <input type="text" class="form-control" name="cabo_identificacao" id="cabo_identificacao" value="{{$infraestruturas->cabo_identificacao}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cabo_designacao_cabos">Designação dos Cabos</label>
                    <input type="text" class="form-control" name="cabo_designacao_cabos" id="cabo_designacao_cabos" value="{{$infraestruturas->cabo_designacao_cabos}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cabo_capacidade">Capacidade</label>
                    <input type="text" class="form-control" name="cabo_capacidade" id="cabo_capacidade" value="{{$infraestruturas->cabo_capacidade}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cabo_peso">Peso</label>
                    <input type="text" class="form-control" name="cabo_peso" id="cabo_peso" value="{{$infraestruturas->cabo_peso}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cabo_diametro">Diâmetro</label>
                    <input type="text" class="form-control" name="cabo_diametro" id="cabo_diametro" value="{{$infraestruturas->cabo_diametro}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cabo_seccao">Secção</label>
                    <input type="text" class="form-control" name="cabo_seccao" id="cabo_seccao" value="{{$infraestruturas->cabo_seccao}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <h2>Tipo de equipamento em CVP</h2>

            <div class="row mb-5">
                <div class="col-md-2 mb-3">
                    <label for="cvp_identificacao_equipamento">Identificação do Equipamento</label>
                    <input type="text" class="form-control" name="cvp_identificacao_equipamento" id="cvp_identificacao_equipamento" value="{{$infraestruturas->cvp_identificacao_equipamento}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cvp_cabo_ligacao">Cabo de ligação</label>
                    <input type="text" class="form-control" name="cvp_cabo_ligacao" id="cvp_cabo_ligacao" value="{{$infraestruturas->cvp_cabo_ligacao}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cvp_tipo_equipamento">Tipo de equipamento</label>
                    <input type="text" class="form-control" name="cvp_tipo_equipamento" id="cvp_tipo_equipamento" value="{{$infraestruturas->cvp_tipo_equipamento}}" required="" placeholder="Junta, TAP, PL, Folga">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cvp_dimensoes">Dimensões</label>
                    <input type="text" class="form-control" name="cvp_dimensoes" id="cvp_dimensoes" value="{{$infraestruturas->cvp_dimensoes}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cvp_peso">Peso</label>
                    <input type="text" class="form-control" name="cvp_peso" id="cvp_peso" value="{{$infraestruturas->cvp_peso}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="cvp">CVP</label>
                    <input type="text" class="form-control" name="cvp" id="cvp" value="{{$infraestruturas->cvp}}" required="">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 mb-3">
                    <label for="observacoes">Observações</label>
                    <textarea rows="4" cols="50" class="form-control" name="observacoes" id="observacoes" required="">{{$infraestruturas->observacoes}}</textarea>
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="created_at">Data de Pedido de Disponibilidade</label>
                    <input type="text" class="form-control" name="created_at" id="created_at" value="{{$infraestruturas->created_at}}" required="" readonly>
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

                <input name="_method" type="hidden" value="PATCH"/>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="submit"  name="submit" value="Submeter Pedido de Disponibilidade" class="btn btn-success mx-auto d-block">

            </form>

{{--            <form method="post" action="/infraestruturas/{{$infraestruturas->id}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="delete" value="Apagar pedido" class="btn btn-primary mx-auto d-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            </form>--}}

        </div>
    </div>

@stop
@section('footer')
@stop
