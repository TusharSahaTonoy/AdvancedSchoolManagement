<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassTeacher extends Model
{
    protected $fillable = [
        'class', 'section', 'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id','user_id');
    }
}
