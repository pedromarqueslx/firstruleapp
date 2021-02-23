@extends('layouts.app')


@section('content')


    <form method="post" action="/posts">

        <input type="text" name="referencia_orait" placeholder="referencia_orait">

        <input type="submit" name="submit">

    </form>



@section('footer')

@stop
