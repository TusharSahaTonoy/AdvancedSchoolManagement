<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model
{
    //protected $table = 'students';

    protected $fillable = [
        'subject_id', 'subject_name', 'subject_mark', 'class',
    ];
}
