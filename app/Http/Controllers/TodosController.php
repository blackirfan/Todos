<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){


        $todos = ToDo::all(); 

        // return $todos;
        return view('todos')->with('todos', $todos); 
    }



    public function home(){


        return view('home');
    }


    public function store(Request $request){

       
        $todo = new Todo;


        $todo->ToDO = $request->todo;
        $todo->save();



        return redirect()->back();



    }

    public function delete($id){


        $todo =  ToDO::find($id);
        $todo->delete();


        return redirect()->back();







    }
    
    public function update($id){

        $todo =  ToDO::find($id);

        return view('update')->with('todo',$todo);

    }




    public function save(Request $request,  $id){


        $todo =  ToDO::find($id);

        $todo->ToDO = $request->todo;
        $todo->update();


        return redirect()->route('todos');

    }



    public function completed($id)
    {

        
        $todo =  ToDO::find($id);
        $todo->completed = 1;

        $todo->save();


        return redirect()->back();

    }

}
 