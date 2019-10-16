<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSchoolInfo extends Model
{
    protected $table = 'student_school_infos';

    protected $fillable = [
        'class', 'section', 'roll', 'guide_teacher', 'year', 'student_id'
    ];

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'user_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'guide_teacher','user_id');
    }
}
