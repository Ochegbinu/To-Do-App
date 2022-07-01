<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tasks = Task::all();
      return view('task')->with('tasks', $tasks);
      
    }
    public function seeTask()
    {
        return view('all_task');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $task = new Task();
        $task->task = $request->task;
        $task->task = $request->task;

        $task->save();

        return redirect()->route('task')->with('status', 'you have succesfully added a task');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        return view('update')->with('task', $task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();
        
        return redirect()->back();
    }

    public function save(Request $request, $id)
    {
        $task = Task::find($id);

        $task->task = $request->task;

        $task->save();
        
        return redirect()->route('task');
    }

    public function completed($id)
    {
        $task = Task::findOrFail($id);

        $task->update([
            'completed' => 1,
        ]);

        // $task->completed = 1;

        // $task->save();

        return redirect()->back();

    }
}
