<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    protected $fillable = [
        'class', 'section', 'subject_id', 'teacher_id'
    ];

    public function subject()
    {
        return $this->belongsTo('App\ClassSubject', 'subject_id', 'subject_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id','user_id');
    }
}
