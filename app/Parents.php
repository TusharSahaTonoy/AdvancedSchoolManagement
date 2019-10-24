<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    //protected $table = 'students';

    protected $fillable = [
        'father_name', 'father_occu', 'father_mobile', 'father_image', 'mother_name', 'mother_occu', 'mother_mobile', 'mother_image', 'user_id', 'student_id',
    ];

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'user_id');
    }
}
