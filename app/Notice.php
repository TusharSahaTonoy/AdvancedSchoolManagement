<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = ['title', 'class', 'file','status', 'added_by'];

    public function user()
    {
        return $this->belongsTo('App\User', 'added_by', 'user_id');
    }
}


