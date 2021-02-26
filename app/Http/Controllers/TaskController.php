<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('welcome', ['tasks' => $tasks]);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }

    public function create()
    {
        $task = new Task();
        $task->task = request('task');
        $task->save();
        return redirect('/');
    }
}
