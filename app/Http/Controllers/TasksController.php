<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
	/**
     * Display a listing of tasks with form for adding new task.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$tasks = Task::orderBy('created_at', 'asc')->paginate(5);
    	
    	return view('tasks.index', compact('tasks'));
    }

    /**
     * Store a newly created task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
			'name' => 'required|max:255'
		]);

		$task = new Task;
		$task->name = $request->name;
		$task->save();

		return redirect('/');
    }

    /**
     * Remove the specified task from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
    	$task->delete();

    	return redirect('/');
    }

    /**
     * Update the specified task in storage. For this case, just toggle task's done status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->done = !$task->done;
        $task->save();

        return redirect('/');
    }
}
