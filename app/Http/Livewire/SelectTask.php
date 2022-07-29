<?php

namespace App\Http\Livewire;

use App\Models\BigTask;
use Livewire\Component;

class SelectTask extends Component
{

    public $tasks=array();
    public function getTasks(){
        $this->tasks=BigTask::where(['status'=>0])->get();
    }
    public function render()
    {
        return view('livewire.select-task', [
            'tasks' => $this->tasks,
        ]);
    }
}
