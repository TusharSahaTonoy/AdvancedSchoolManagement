<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //protected $table = 'students';

    protected $fillable = [
        'name', 'gender', 'religion', 'dob', 'admission_date', 'present_address', 'permanent_address', 'image', 'user_id'
    ];

    public function school()
    {
        return $this->hasOne('App\StudentSchoolInfo','student_id' , 'user_id');
    }

    public function parents()
    {
        return $this->hasOne('App\Parents','student_id' , 'user_id');
    }
}
