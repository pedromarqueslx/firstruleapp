@extends('layouts.menu')
@section('content')

    <h1>Edit Role</h1>

    @if(session()->has('role-updated'))
        <div class="alert alert-success">
            {{session('role-updated')}}
        </div>
    @endif

    <form method="post" action="{{route('roles.update', $role->id)}}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$role->name}}">
        </div>

        <input type="submit" name="submit" value="Guardar" class="btn btn-success mx-auto d-block">
    </form>

    <div class="row">
        <div class="col-9">
            @if($permissions->isNotEmpty())
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table">
                    <thead>
                    <tr>
                        <th>Option</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Option</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td><input type="checkbox"
                                       @foreach($role->permissions as $role_permission)
                                       @if($permission->slug == $permission->slug)
                                       checked
                                        @endif
                                        @endforeach
                                ></td>
                            <td>{{$permission->id}}</td>
                            <td><a href="{{route('role.edit', $permission->id)}}">{{$permission->name}}</a></td>
                            <td>{{$permission->slug}}</td>
                            <td>
                                <form method="post" action="{{route('role.permission.attach', $role)}}">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="permission" value="{{$permission->id}}">
                                    <button class="btn btn-primary" @if($role->permissions->contains($permission)) disabled @endif>Conceder</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{route('role.permission.detach', $role)}}">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="permission" value="{{$permission->id}}">
                                    <button class="btn btn-primary" @if(!$role->permissions->contains($permission)) disabled @endif>Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>

@endsection
@section('footer')
@stop
