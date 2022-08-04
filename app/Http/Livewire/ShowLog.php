<?php

namespace App\Http\Livewire;

use App\Models\Log;
use App\Models\Task;
use Livewire\Component;

class ShowLog extends Component
{
    public function render()
    {
        $logs=Task::join('logs','tasks.id','=','logs.task_id')->select('title','count_time','tasks.description','tasks.id','start_time','end_time')->get();
        return view('livewire.show-log',['logs'=>$logs]);
    }
}
