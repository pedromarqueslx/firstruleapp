@extends('layouts.menu')
@section('content')

    <h1>Pedido de Disponibilidade</h1>
    <?php
    $infraestruturas_id = DB::table('infraestruturas')->max('id');
    ?>
    <script>
        function getMunicipioId() {
            //Get the select Municipio value
            var maxId = '<?php echo ++$infraestruturas_id ?>';
            var municipioId = document.getElementById("municipio_id");
            document.getElementById("referencia_orait").value = 'PD' + new Date().getFullYear() + municipioId.value.toUpperCase().substring(0,3) + maxId;
        }
    </script>

    <!-- Report errors -->
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <p class="small">{{$error}}</p>
    @endforeach
    @endif

    <div class="card">
        <div class="card-block px-3 py-4">

        <form method="post" action="{{route('infraestruturas.store')}}" enctype="multipart/form-data">

            <input type="hidden" class="form-control" name="referencia_orait" id="referencia_orait" value="" placeholder="">
            <input type="hidden" class="form-control" name="user_name" id="user_name" value="{{auth()->user()->name}}" placeholder="">
            <input type="hidden" class="form-control" name="user_contribuinte" id="user_contribuinte" value="{{auth()->user()->contribuinte}}" placeholder="">
            <input type="hidden" class="form-control" name="user_morada" id="user_morada" value="{{auth()->user()->morada}}" placeholder="">
            <input type="hidden" class="form-control" name="user_telefone" id="user_telefone" value="{{auth()->user()->telefone}}" placeholder="">
            <input type="hidden" class="form-control" name="user_email" id="user_email" value="{{auth()->user()->email}}" placeholder="">

            <div class="row mb-2">
                <div class="col-md-3 mb-3 required">
                    <label for="referencia_operador">Referência Operador</label>
                    <input type="text" class="form-control" name="referencia_operador" id="referencia_operador" value="" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-3 mb-3 required">
                    <label for="municipio_id">Município</label>
                    <select onclick="getMunicipioId()" class="form-control" name="municipio_id" id="municipio_id" required="">
                        <option disabled selected value>Selecione Município</option>
                        @foreach($concessoes as $concessoe)
                            <option value="{{$concessoe->nome}}">{{$concessoe->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="municipio_cartas">Número de cartas</label>
                    <input type="text" class="form-control" name="municipio_cartas" id="municipio_cartas" value="">
                </div>
            </div>

            <h2 class="mt-3">Responsável do Operador</h2>

            <div class="row mb-2">
                <div class="col-md-3 mb-3 text-truncate">
                    <label for="responsavel_operador">Nome do Responsável</label>
                    <input type="text" class="form-control" name="responsavel_operador" id="responsavel_operador" value="{{auth()->user()->nome_responsavel_operador}}">
                </div>
                <div class="col-md-3 mb-3 text-truncate">
                    <label for="email_responsavel_operador">E-mail do Responsável</label>
                    <input class="form-control" name="email_responsavel_operador" id="email_responsavel_operador" value="{{auth()->user()->email_responsavel_operador}}">
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="telefone_responsavel_operador">Telefone do Responsável</label>
                    <input type="text" class="form-control" name="telefone_responsavel_operador" id="telefone_responsavel_operador" value="{{auth()->user()->telefone_responsavel_operador}}">
                </div>
            </div>

            <h3 class="mt-3">Documentos em Anexo <span class="small">(.pdf, .doc, .png, .jpeg)</span></h3>

            <div class="row mb-2">
                <label for="file"></label>
                <input type="file" class="form-control-file" name="anexo" id="anexo">
            </div>

            <h2 class="mt-3">Disponibilidade de Infraestruturas</h2>

            <div class="row mb-2">
                <div class="col-md-1 mb-3 ml-md-2 p-md-2 text-truncate required">
                    <label for="cvp_entrada" class="text-nowrap">CVP Entrada</label>
                    <input type="text" class="form-control" name="cvp_entrada" id="cvp_entrada" value="" required="">
                    <div class="invalid-feedback">
                        ...
                    </div>
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_entrada_ponto_entrada" class="text-nowrap">P. Entrada</label>
                    <input class="form-control" name="cvp_entrada_ponto_entrada" id="cvp_entrada_ponto_entrada">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_entrada_ponto_ligacao" class="text-nowrap">P. Ligação</label>
                    <input type="text" class="form-control" name="cvp_entrada_ponto_ligacao" id="cvp_entrada_ponto_ligacao">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_entrada_folga" class="text-nowrap">Folga</label>
                    <input type="text" class="form-control" name="cvp_entrada_folga" id="cvp_entrada_folga" placeholder="(mts)">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida" class="text-nowrap">CVP Saída</label>
                    <input type="text" class="form-control" name="cvp_saida" id="cvp_saida">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida_ponto_entrada" class="text-nowrap">P. Entrada</label>
                    <input type="text" class="form-control" name="cvp_saida_ponto_entrada" id="cvp_saida_ponto_entrada">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida_ponto_ligacao" class="text-nowrap">P. Ligação</label>
                    <input type="text" class="form-control" name="cvp_saida_ponto_ligacao" id="cvp_saida_ponto_ligacao">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="cvp_saida_folga" class="text-nowrap">Folga</label>
                    <input type="text" class="form-control" name="cvp_saida_folga" id="cvp_saida_folga" placeholder="(mts)">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="tipo_tubo_ponto_entrada" class="text-nowrap">Tipo Tubo no PE</label>
                    <input type="text" class="form-control" name="tipo_tubo_ponto_entrada" id="tipo_tubo_ponto_entrada">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="tipo_cabo" class="text-nowrap">Tipo de Cabo</label>
                    <input type="text" class="form-control" name="tipo_cabo" id="tipo_cabo">
                </div>
                <div class="col-md-1 mb-3 p-md-2 text-truncate">
                    <label for="seccao_cabo" class="text-nowrap">Secção Cabo</label>
                    <input type="text" class="form-control" name="seccao_cabo" id="seccao_cabo" placeholder="(cm2)">
                </div>
            </div>

            <h2 class="mt-3">Tipo de cabo em conduta</h2>

            <div class="row mb-2">
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cabo_identificacao">Identificação</label>
                    <input type="text" class="form-control" name="cabo_identificacao" id="cabo_identificacao">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cabo_designacao_cabos">Designação dos Cabos</label>
                    <input type="text" class="form-control" name="cabo_designacao_cabos" id="cabo_designacao_cabos">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cabo_capacidade">Capacidade</label>
                    <input type="text" class="form-control" name="cabo_capacidade" id="cabo_capacidade">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cabo_peso">Peso</label>
                    <input type="text" class="form-control" name="cabo_peso" id="cabo_peso">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cabo_diametro">Diâmetro</label>
                    <input type="text" class="form-control" name="cabo_diametro" id="cabo_diametro">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cabo_seccao">Secção</label>
                    <input type="text" class="form-control" name="cabo_seccao" id="cabo_seccao">
                    <div class="invalid-feedback">
                        ....
                    </div>
                </div>
            </div>

            <h2 class="mt-3">Tipo de equipamento em CVP</h2>

            <div class="row mb-2">
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cvp_identificacao_equipamento">Identificação do Equipamento</label>
                    <input type="text" class="form-control" name="cvp_identificacao_equipamento" id="cvp_identificacao_equipamento">
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cvp_cabo_ligacao">Cabo de ligação</label>
                    <input type="text" class="form-control" name="cvp_cabo_ligacao" id="cvp_cabo_ligacao">
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cvp_tipo_equipamento">Tipo de equipamento</label>
                    <input type="text" class="form-control" name="cvp_tipo_equipamento" id="cvp_tipo_equipamento" placeholder="Junta, TAP, PL, Folga">
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cvp_dimensoes">Dimensões</label>
                    <input type="text" class="form-control" name="cvp_dimensoes" id="cvp_dimensoes">
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cvp_peso">Peso</label>
                    <input type="text" class="form-control" name="cvp_peso" id="cvp_peso">
                </div>
                <div class="col-md-2 mb-3 text-truncate">
                    <label for="cvp">CVP</label>
                    <input type="text" class="form-control" name="cvp" id="cvp">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6 mb-3">
                    <label for="observacoes">Observações</label>
                    <textarea rows="4" cols="50" class="form-control" name="observacoes" id="observacoes"></textarea>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="created_at">Data de Pedido</label>
                    <input type="text" class="form-control" name="created_at" id="created_at" required="" placeholder="{{ date('Y-m-d') }}" readonly>
                </div>
            </div>

            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input type="submit" name="submit" value="Submeter Pedido Disponibilidade" class="btn btn-success mx-auto d-block">

        </form>

        </div>
    </div>

@stop
@section('footer')
@stop
