<?php

namespace App\Http\Livewire;

use App\Models\Log;
use App\Models\Task;
use Livewire\Component;

class ShowLog extends Component
{
    //stop=not started || start= started || end= stop and end task
    public $taskStatus;
    public function render()
    {
        $logs=Task::join('logs','tasks.id','=','logs.task_id')->select('title','count_time','tasks.description','tasks.id','start_time','end_time')->get();
        if($logs[0]['end_time']!=null)
            $this->taskStatus='end';
        elseif($logs[0]['start_time']!=null)
            $this->taskStatus='start';
        else
            $this->taskStatus='stop';
        return view('livewire.show-log',[
            'logs' => $logs,
        ]);
    }
}
