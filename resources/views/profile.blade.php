@extends('todos')



@section('content')


     @foreach($todos as $toDo)

{{  $toDo->ToDO }}
 <br>
@endforeach




@stop