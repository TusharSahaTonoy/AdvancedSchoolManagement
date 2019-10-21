<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Teacher;
use App\Student;
use App\Parents;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = User::where('user_id',auth()->user()->user_id)->first();
        return view('user.profile',compact('user'));
    }

    public function change_password()
    {
        # code...
    }
}
