<?php

namespace App\Http\Livewire;

use PDOException;
use Livewire\Livewire;
use App\Models\BigTask;
use Livewire\Component;
use App\Http\Livewire\ChangeStatus;
use App\View\Components\AlertMessage;

class ShowBigTasks extends Component
{
    public function changeStatus($bigTaskId,$statusValue)
    {
        if($statusValue==0){
            BigTask::where('id',$bigTaskId)->update(['status'=>1]);
        }
        elseif($statusValue==1){
            BigTask::where('id',$bigTaskId)->update(['status'=>0]);
        }
    }
    public function render()
    {
        return view('livewire.show-big-tasks', [
            'bigTasks' => BigTask::get(),
        ]);
    }
}
