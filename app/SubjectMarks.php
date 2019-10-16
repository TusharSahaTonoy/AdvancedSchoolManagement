<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectMarks extends Model
{
    //protected $table = 'students';

    protected $fillable = [
        'class', 'subject_id', 'teacher_id', 'student_id', 'quiz1', 'quiz2', 'mid', 'final'
    ];

    public function subject()
    {
        return $this->belongsTo('App\ClassSubject', 'subject_id', 'subject_id');
    }

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'user_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id','user_id');
    }
}
