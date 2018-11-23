@extends('imu')


@section('content')

    
<div class="row">

     <div class="col-lg-6 col-lg-offset-3">

         <form action="create/todo" method="post">



         {{ csrf_field()  }}
         <input type="text" class="from-control input lg" name="todo" placeholder="create a new todo">

         <!-- <input type="submit" value="Submit"> -->
         
         
         </form>

 
     </div>

<br>


 @foreach($todos as $toDo)

{{  $toDo->ToDO }} 

<a href="{{ route('toDO.delete',['id'=> $toDo->id])}}" class="btn btn-danger">X</a>

 <a href="{{ route('toDO.update',['id'=> $toDo->id]) }}" class="btn btn-danger">update</a>

 
 @if(!$toDo->completed)


<a href="{{ route('todos.completed', ['id'=> $toDo->id]) }}" class="btn btn-xs btn-success"> Mark as completed</a>

@else 

<div>Complete</div>



@endif 

 <hr>
@endforeach

@stop



