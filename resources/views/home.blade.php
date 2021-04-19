@extends('layouts.menu')
@section('content')

    <h1>{{ __('Infraestruturas de Telecomunicações') }}</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Ref.ORAIT</th>
                        <th>Ref. Oper.</th>
                        <th>Pedido</th>
                        <th>Operador</th>
                        <th>Requerente</th>
                        <th>Resp.</th>
                        <th>Acesso</th>
                        <th>Acesso Resp.</th>
                        <th>Instalação</th>
                        <th>Cadastro</th>
                        <th>Dossier</th>
                        <th>Município</th>
                        <th>Estado</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Ref.ORAIT</th>
                        <th>Ref. Oper.</th>
                        <th>Pedido</th>
                        <th>Operador</th>
                        <th>Requerente</th>
                        <th>Resp.</th>
                        <th>Acesso</th>
                        <th>Acesso Resp.</th>
                        <th>Instalação</th>
                        <th>Cadastro</th>
                        <th>Dossier</th>
                        <th>Município</th>
                        <th>Estado</th>
                    </tr>
                    </tfoot>
                    <tbody>
                     @foreach($infraestruturas as $infraestrutura)
                     <tr>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->referencia_orait}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->referencia_operador}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->created_at}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->created_at}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->nome_operador}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->responsavel_operador}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->resposta}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_pedido_acesso}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_resposta_acesso}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->referencia_orait}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_pedido_cadastro}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_resposta_cadastro}}</a></td>
                         <td><a href="{{route('infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->municipio_id}}</a></td>
                     </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('/assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/js/demo/datatables-demo.js')}}"></script>
@endsection

@section('footer')
@endsection
