<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BigTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'description',
        'group_id',
        'group_creator_id',
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
