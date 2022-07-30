<?php

namespace App\Http\Livewire;

use PDOException;
use Livewire\Livewire;
use App\Models\BigTask;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class ShowBigTasks extends Component
{
    public function changeStatus($bigTaskId,$statusValue)
    {
        if($statusValue==0){
            BigTask::where('id',$bigTaskId)->update(['status'=>1]);
            alert('کار به اتمام رسید','','success')->showConfirmButton('تایید','#198754');
            return redirect()->route('log-work.work.start.index');
        }
        elseif($statusValue==1){
            BigTask::where('id',$bigTaskId)->update(['status'=>0]);
            alert('کار مجددا ادامه داده میشود.','','success')->showConfirmButton('تایید','#198754');
            return redirect()->route('log-work.work.start.index');
        }
    }
    public function render()
    {
        return view('livewire.show-big-tasks', [
            'bigTasks' => BigTask::get(),
        ]);
    }
}
