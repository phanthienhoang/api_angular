<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return response()->json($task);
    }

    public function add(Request $request)
    {
        $attribute = $request->all();
        $task = Task::create($attribute);
        return $task;
    }

    public function detail($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return $task;
    }
}
