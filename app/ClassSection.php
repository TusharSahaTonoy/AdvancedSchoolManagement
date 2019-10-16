<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSection extends Model
{
    //protected $table = 'students';
    
    protected $fillable = [
        'section', 'class',
    ];
}
