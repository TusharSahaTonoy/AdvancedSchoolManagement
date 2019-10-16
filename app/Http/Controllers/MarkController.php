<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SubjectTeacher;
use App\ClassSubject;
use App\StudentSchoolInfo;
use App\SubjectMarks;

class MarkController extends Controller
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


    public function all_subjects()
    {
        // admin
        if(auth()->user()->type == "admin")
        {
            $subjects = SubjectTeacher::all();
            // return $subjects;
            return view('mark.all_subjects',compact('subjects'));
        }

        // teacher
        if(auth()->user()->type == "teacher")
        {
            $subjects = SubjectTeacher::where('teacher_id',auth()->user()->user_id)->get();
            // return $subjects;

            return view('mark.all_subjects',compact('subjects'));
        }

        
    }

    public function student_list($subject)
    {
        // return $subject;
        if(auth()->user()->type != 'teacher')
            return redirect('/')->with('error','You are not signed in as a teacher');   
        
        
        
        list($class,$section,$subject_id) = explode(',',$subject);

        $students = StudentSchoolInfo::where([
            'class' =>$class,
            'section' =>$section
        ])->get();
        
        // $stu_marks = [];
        foreach ($students as $index => $student) {
            $stu_marks[] = SubjectMarks::firstOrCreate([
                'class' =>$class,
                'subject_id' =>$subject_id,
                'teacher_id' =>auth()->user()->user_id,
                'student_id' => $student->student_id
            ]);
        }
        // return $stu_marks;
        
        return view('mark.student_list_mark',compact('stu_marks','class','section','subject_id'));
        // return $students;
    }

    public function store_marks(Request $r)
    {
        if(auth()->user()->type != 'teacher')
            return redirect('/')->with('error','You are not signed in as a teacher');   

        // return $r;
        
        foreach($r->student_ids as $index => $student_id)
        {
            SubjectMarks::where([
                'class' => $r->class ,
                'subject_id' => $r->subject_id,
                'student_id' =>$student_id ,
            ])->update([
                'quiz1'=> $r->quiz1[$student_id]?? 0, 
                'quiz2'=> $r->quiz2[$student_id] ?? 0, 
                'mid' => $r->mid[$student_id] ?? 0, 
                'final'=> $r->final[$student_id]?? 0
            ]);
        }

        return redirect()->back()->with('success','Marks Saved');
        
    }

    public function student_mark_report()
    {
        
        return view('mark.student_mark_report');
    }
}
