<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\ClassSection;
use App\ClassTeacher;
use App\StudentSchoolInfo;
use App\Attendance;

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if(in_array($request->user()->type, ['admin','teacher'])) {
                return $next($request);
            } else {
                return redirect('/')->with('error','You do not have that privilege');
            }
        });
    }

    public function all_attendance_classes()
    {
        if(auth()->user()->type =='admin')
            $classes = ClassTeacher::all();
        else if(auth()->user()->type =='teacher')
            $classes = ClassTeacher::where('teacher_id',auth()->user()->user_id)->get();

        // return $classes;

        return view('attendance.all_classes',compact('classes'));
    }

    public function take_attendance_form($argu)
    {
        // return $argu;

        list($class,$section) = explode(",", $argu);

        $students = StudentSchoolInfo::where([
            'class' => $class,
            'section' =>$section
        ])->get();

        // return $students;
        return view('attendance.student_list_attendence',compact('students','class','section'));
    }

    public function store_attendence(Request $r)
    {
        request()->validate([
            'att_date' => 'required|date',
        ]);
        // return $r;

        $taken = Attendance::where([
            'class'=>$r->class,
            'section'=>$r->section,
            'teacher_id'=> auth()->user()->user_id,
            'date'=>$r->att_date
        ])->first();

        if(isset($taken))
            return redirect()->back()->with('error','A attendence is already taken at the same date');

        foreach($r->stu_att as $id => $status)
        {
            Attendance::create([
                'class'=>$r->class,
                'section'=>$r->section,
                'status'=>$status,
                'student_id'=>$id,
                'teacher_id'=> auth()->user()->user_id,
                'date'=>$r->att_date
            ]);    
        }
        
        return redirect('/attendance')->with('success','Attendance taken');
    }

}
