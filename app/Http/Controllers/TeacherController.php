<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Teacher;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(function ($request, $next) {
        //     if($request->user()->type == 'admin') {
        //         return $next($request);
        //     } else {
        //         return redirect('/')->with('error','You do not have that privilege');
        //     }
        // });
    }

    public function teacher_list()
    {
        return view('teacher.list_teacher');
    }
    
    public function add_teacher_form()
    {
        return view('teacher.add_teacher');
    }

    public function add_teacher(Request $r)
    {
        // return $r;
        request()->validate([
            'user_id' => 'required|string',
            'name' => 'required|string|max:190',
            'join_date' => 'required|date',
            'phone'=> 'required|regex:/(01)[0-9]{9}/',
        ]);
        
        if(User::where('user_id','T-'.$r->user_id)->count() != 0)
        {
            return redirect()->back()->with('error','User id: '.$r->user_id.' is already taken')->withInput();
        }

        $ext = $r->file('teacher_image')->getClientOriginalExtension();
        $teacher_img = 't'.time().'.'.$ext;



        $user = User::create([
            'user_id' => 'T-' . $r->user_id,
            'user_name' => $r->name,
            'password' => \Illuminate\Support\Facades\Hash::make("123456"),
            'type' => 'teacher',
            'role' => 'subject teacher',
            'added_by' => auth()->user()->user_id
        ]);

        Teacher::create([
            'name' => $user->user_name,
            'subject' => $r->subject,
            'phone' => $r->phone,
            'image'=> $teacher_img,
            'join_date' =>$r->join_date,
            'user_id' => $user->user_id
        ]);
        $r->file('teacher_image')->storeAs('public/teacher',$teacher_img);

        return redirect('/teacher/list')->with('success','Teacher Added');
    }
}
