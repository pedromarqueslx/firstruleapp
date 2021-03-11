@extends('layouts.menu')


@section('content')

    <h1>Contato</h1>

   @if (count($people))

       <ul>

           @foreach($people as $person)

               <li>{{$person}}</li>

           @endforeach

       </ul>

   @endif
@stop



@section('footer')

@stop
