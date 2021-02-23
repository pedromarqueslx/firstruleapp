@extends('layouts.app')



@section('content')

    <form method="post" action="/infraestruturas">

        <input type="text" name="referencia_orait" placeholder="referencia_orait">
        <input type="text" name="user_id" value="1">

        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="submit" name="submit">

    </form>

@stop



@section('footer')

@stop
