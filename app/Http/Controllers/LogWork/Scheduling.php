<?php

namespace App\Http\Controllers\LogWork;

use Carbon\Carbon;
use App\Models\Log;
use App\Http\Controllers\Controller;

class Scheduling extends Controller
{

    private $timeNow;
    private $end=false;
    private $start=false;
    public function __construct()
    {
        $this->timeNow=Carbon::now()->format('Y-m-d H:i');
    }

    public function start($taskID)
    {
        $start=Log::where(['task_id'=>$taskID, 'end_time'=>NULL])->first();
        if($start){
            if($start->start_time!=NULL)
                return redirect()->back()->with('starting','تسک در حال انجام است. شروع مجدد امکان پذیر نیست.');
            else{
                Log::where('task_id',$taskID)->where('start_time',NULL)->update(['start_time'=>$this->timeNow]);
                $this->start=true;
                return redirect()->back()->with('started','تسک شروع شد.');
            }

        }else{
            $this->start=false;
        }
        if($this->start==false)
            return redirect()->back()->with('starting','تسک به اتمام رسیده است نمیتوان آن را شروع کرد');
    }

    
    public function stop($taskID)
    {
        $log=Log::where('task_id', $taskID)->where('end_time',NULL)->first();
        if($log){
            if($log->start_time==NULL){
                return redirect()->back()->with('updating','تسک هنوز شروع نشده است.');
            }
            else{
                $log->end_time = $this->timeNow;
                $log->count_time = gmdate('i:s',Carbon::parse($log->start_time)->diffInMinutes($log->end_time));
                $log->save();
                $this->end=true;
                return redirect()->back()->with('updated','تسک متوقف شد.');
            }
        }
        else
            $this->end=true;
        if($this->end==true)
            return redirect()->back()->with('updating','تسک قبلا به پایان رسیده است.');
    }

}
