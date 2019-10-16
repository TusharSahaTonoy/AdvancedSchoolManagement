<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if($request->user()->type == 'admin') {
                return $next($request);
            } else {
                return redirect('/')->with('error','You do not have that privilege');
            }
        });
    }
    
    public function admin_list()
    {
        return view('admin.list_admin');
    }

    public function user_list()
    {
        return view('user.all_user');
    }

    public function add_admin_form()
    {
        return view('admin.add_admin');
    }

    public function add_admin(Request $r)
    {
        // return $r;

        request()->validate([
            'user_id' => 'required|string|unique:users',
            'password' => 'required|string|min:6|max:10',
            'name' => 'required|string|max:190'
        ]);

        User::create([
            'user_id' => $r->user_id,
            'user_name' => $r->name,
            'password' => \Illuminate\Support\Facades\Hash::make($r->password),
            'type' => 'admin',
            'role' => 'admin',
            'added_by' => auth()->user()->user_id
        ]);


        return redirect('/');
    }
}
