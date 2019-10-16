<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    // protected $table = 'students';

    protected $fillable =[
        'class','section','status','student_id','teacher_id','date'
    ];
}
