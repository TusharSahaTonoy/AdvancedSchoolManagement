<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //protected $table = 'students';

    protected $fillable = [
        'name', 'subject', 'phone', 'image', 'join_date', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}
