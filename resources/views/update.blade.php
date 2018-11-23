@extends('imu')


@section('content')

    
<div class="row">

     <div class="col-lg-6 col-lg-offset-3">

         <form action="{{ route('toDO.save',['id' => $todo->id]) }}" method="post">



         {{ csrf_field()  }}
         <input type="text" class="from-control input lg" name="todo" value="{{$todo->ToDO}}" placeholder="create a new todo">

         <!-- <input type="submit" value="Submit"> -->
         
         
         </form>

 
     </div>

<br>


@stop