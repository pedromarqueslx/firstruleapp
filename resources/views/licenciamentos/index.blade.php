@extends('layouts.menu')
@section('content')


    <h1>Licenciamentos</h1>
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>user_id</th>
                        <th>Município</th>
                        <th>Data</th>
                        <th>Referência Orait</th>
                        <th>Data Início Trabalhos</th>
                        <th>Data Fim Trabalhos</th>
                        <th>Data Envio licenciamento Município</th>
                        <th>Ref. licenciamento Município</th>
                        <th>Data Autorizacao Município</th>
                        <th>Data Envio Autorizacao Operador</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>user_id</th>
                        <th>Município</th>
                        <th>Data</th>
                        <th>Referência Orait</th>
                        <th>Data Início Trabalhos</th>
                        <th>Data Fim Trabalhos</th>
                        <th>Data Envio licenciamento Município</th>
                        <th>Ref. licenciamento Município</th>
                        <th>Data Autorizacao Município</th>
                        <th>Data Envio Autorizacao Operador</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($licenciamentos as $licenciamento)
                        <tr>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->id}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->user_id}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->municipio}}</a></td>

                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->data}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->referencia_orait}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->data_inicio_trabalhos}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->data_fim_trabalhos}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->data_envio_licenciamento_municipio}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->referencia_licenciamento_munipicio}}</a></td>

                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->data_autorizacao_municipio}}</a></td>
                            <td><a href="{{route('licenciamentos.edit', $licenciamento->id)}}">{{$licenciamento->data_envio_autorizacao_operador}}</a></td>
                            <td>
                                <form method="post" class="text-center" action="{{route('licenciamentos.destroy', $licenciamento->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@stop

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('/assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('/assets/js/demo/datatables-demo.js')}}"></script>
@endsection

@section('footer')
@stop
