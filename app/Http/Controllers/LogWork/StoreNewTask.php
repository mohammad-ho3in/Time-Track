<?php

namespace App\Http\Controllers\LogWork;

use App\Models\BigTask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Task;

class StoreNewTask extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:5|string',
            'tags' => 'required|min:5|string',
            'description' => 'required|max:255|min:5|string',
        ]);
        $newTask=Task::create($request->all());
        $addLog=Log::create(['task_id'=>$newTask->id, 'task_big_task_id'=>$request->big_task_id]);
        if($newTask and $addLog)
            return Redirect()->route('log-work.work.start.index');
    }
}
