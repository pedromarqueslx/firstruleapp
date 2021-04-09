@extends('layouts.menu')
@section('content')

    <h1>Concessões</h1>
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
                        <th>responsavel</th>
                        <th>responsavel_telefone</th>
                        <th>responsavel_email</th>
                        <th></th>
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
                        <th>responsavel</th>
                        <th>responsavel_telefone</th>
                        <th>responsavel_email</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($concessoes as $concessao)
                        <tr>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->id}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->user_id}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->nome}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->email}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->contribuinte}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->telefone}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->responsavel}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->responsavel_telefone}}</a></td>
                            <td><a href="{{route('concessoes.edit', $concessao->id)}}">{{$concessao->responsavel_email}}</a></td>
                            <td>
                                <form method="post" class="text-center" action="{{route('concessoes.destroy', $concessao->id)}}">
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
