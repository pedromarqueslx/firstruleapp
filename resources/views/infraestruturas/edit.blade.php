@extends('layouts.app')



@section('content')

    <h1>Edit</h1>

    <form method="post" action="/infraestruturas/{{$infraestruturas->id}}">

        <input type="text" name="referencia_orait" placeholder="referencia_orait" value="{{$infraestruturas->referencia_orait}}">
        <input type="text" name="user_id" value="{{$infraestruturas->user_id}}">

        <input name="_method" type="hidden" value="PUT"/>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="submit" name="submit" value="update">

    </form>

    <form method="post" action="/infraestruturas/{{$infraestruturas->id}}">

        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="delete" value="delete">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

    </form>

@stop



@section('footer')

@stop
