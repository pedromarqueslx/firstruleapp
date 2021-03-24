@extends('layouts.menu')
@section('content')

    <h1>Municípios</h1>
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
                        <th>nome</th>
                        <th>email</th>
                        <th>contribuinte</th>
                        <th>telefone</th>
                        <th>morada</th>
                        <th>responsavel</th>
                        <th>responsavel_telefone</th>
                        <th>responsavel_email</th>
                        <th>observacoes</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>user_id</th>
                        <th>nome</th>
                        <th>email</th>
                        <th>contribuinte</th>
                        <th>telefone</th>
                        <th>morada</th>
                        <th>responsavel</th>
                        <th>responsavel_telefone</th>
                        <th>responsavel_email</th>
                        <th>observacoes</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($municipios as $municipio)
                        <tr>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->id}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->user_id}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->nome}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->email}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->contribuinte}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->telefone}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->morada}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->responsavel}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->responsavel_telefone}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->responsavel_email}}</a></td>
                            <td><a href="{{route('municipios.edit', $municipio->id)}}">{{$municipio->observacoes}}</a></td>
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
