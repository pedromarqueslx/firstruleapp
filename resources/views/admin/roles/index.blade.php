@extends('layouts.menu')
@section('content')

    <h1>Roles</h1>

    @if(session()->has('role-delete'))
        <div class="alert alert-success">
            {{session('role-delete')}}
        </div>
    @endif

    <div class="row">
        <div class="col-3">
            <form method="post" action="{{route('roles.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
                    <div>
                        @error('name')
                        <span class="small">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <input type="submit" name="submit" value="Guardar" class="btn btn-success mx-auto d-block">
            </form>
        </div>

        <div class="col-9">
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td><a href="{{route('role.edit', $role->id)}}">{{$role->name}}</a></td>
                            <td>{{$role->slug}}</td>
                            <td>
                                <form method="post" class="text-center" action="{{route('roles.destroy', $role->id)}}">
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

@section('footer')
@stop
