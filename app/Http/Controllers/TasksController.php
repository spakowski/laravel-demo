<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{

    public function index()
    {
      $tasks = Task::all();
        //$tasks = DB::table('tasks')->get();
        //return $tasks;
        return view ('tasks.all', compact('tasks'));
    }

    public function show(Task $task){

      //$task = Task::find($id);
      //return $tasks;
      return view ('tasks.show', compact('task'));
    }
}
