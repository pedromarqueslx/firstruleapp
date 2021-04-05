
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
                        <th>ID</th>
                        <th>role_id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>email_verified_at</th>
                        <th>contribuinte</th>
                        <th>telefone</th>
                        <th>Apagar</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>role_id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>email_verified_at</th>
                        <th>contribuinte</th>
                        <th>telefone</th>
                        <th>Apagar</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->id}}</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->role_id}}</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->email}}</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->email_verified_at}}</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->contribuinte}}</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->telefone}}</a></td>
                            <td>
                                <form method="post" action="{{route('users.destroy', $user->id)}}">
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
