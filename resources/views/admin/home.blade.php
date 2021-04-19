@extends('layouts.menu')
@section('content')

    <h1>{{ __('Infraestruturas de Telecomunicações') }}</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                {{--table-striped display--}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0px">
                    <thead>
                    <tr>
                        <th>Ref.ORAIT</th>
                        <th>Ref. Oper.</th>
                        <th>Pedido</th>
                        <th>Resp.</th>
                        <th>Operador</th>
                        <th>Requerente</th>
                        <th>Acesso</th>
                        <th>Acesso Resp.</th>
                        <th>Instalação</th>
                        <th>Cadastro</th>
                        <th>Município</th>
                        <th>Estado</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Ref.ORAIT</th>
                        <th>Ref. Oper.</th>
                        <th>Pedido</th>
                        <th>Resp.</th>
                        <th>Operador</th>
                        <th>Requerente</th>
                        <th>Acesso</th>
                        <th>Acesso Resp.</th>
                        <th>Instalação</th>
                        <th>Cadastro</th>
                        <th>Município</th>
                        <th>Estado</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($infraestruturas as $infraestrutura)
                        <tr>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->referencia_orait}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->referencia_operador}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->created_at}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->user_name}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->responsavel_operador}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->resposta}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_pedido_acesso}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_resposta_acesso}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_pedido_cadastro}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->data_resposta_cadastro}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->municipio_id}}</a></td>
                            <td><a href="{{route('admin.infraestruturas.edit', $infraestrutura->id)}}">{{$infraestrutura->municipio_id}}</a></td>
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
    <script src="{{asset('/assets/datatables/dataTables.buttons.js')}}"></script>
    <script src="{{asset('/assets/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('/assets/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('/assets/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('/assets/datatables/buttons.html5.js')}}"></script>
    <script src="{{asset('/assets/datatables/buttons.print.js')}}"></script>
    <script src="{{asset('/assets/js/demo/datatables-demo.js')}}"></script>
@endsection

@section('footer')
@endsection
