
@extends('layouts.menu')
@section('content')

    <h1>Operadores</h1>

    @if(session('user-deleted'))
        <div class="alert alert-success">{{session('user-deleted')}}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Verificado</th>
                        <th>Nº Contr.</th>
                        <th>Tel.</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Verificado</th>
                        <th>Nº Contr.</th>
                        <th>Tel.</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{route('user.profile.show', $user->id)}}">{{$user->name}}</a></td>
                            <td><a href="{{route('user.profile.show', $user->id)}}">{{$user->email}}</a></td>
                            <td><a href="{{route('user.profile.show', $user->id)}}">{{$user->email_verified_at}}</a></td>
                            <td><a href="{{route('user.profile.show', $user->id)}}">{{$user->contribuinte}}</a></td>
                            <td><a href="{{route('user.profile.show', $user->id)}}">{{$user->telefone}}</a></td>
                            <td>
                                <form method="post" class="text-center" action="{{route('users.destroy', $user->id)}}">
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

@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('/assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('/assets/js/demo/datatables-demo.js')}}"></script>
@endsection


@section('footer')
@stop
