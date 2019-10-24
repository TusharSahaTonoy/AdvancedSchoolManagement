<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SubjectMarks;
use App\ClassSubject;
use App\StudentSchoolInfo;
use App\Attendance;

class ResultController extends Controller
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

    public function result()
    {
        if(auth()->user()->type == 'admin')
        {
            return view('result.result');
        }
        else if(auth()->user()->type == 'student')
        {
            $student_id = auth()->user()->user_id;
        }
        else if(auth()->user()->type == 'parents')
        {
            $student_id = substr(auth()->user()->user_id, 2);
        }
        else 
        {
            return redirect('/')->with('error','Your are not eligible for this operation');
        }
        /* ------------------ Student Result --------------- */
        $student = StudentSchoolInfo::where('student_id',$student_id)->first();
        
        $class = StudentSchoolInfo::select('class')->where([
            'student_id' => $student_id,
            'year' => date('Y')
            ])->pluck('class')->first();

        $subjects = ClassSubject::where('class',$class)->get();
        $attendance = (object) [
            'total' => Attendance::where([
                'student_id'=>$student_id,
                'class' => $class,
            ])->count(),

            'present' => Attendance::where([
                'student_id'=>$student_id,
                'class' => $class,
                'status' => 1
            ])->count()
        ];        

        $marks = SubjectMarks::where('student_id',$student_id)->get();


        return view('result.student_result',compact('student','attendance','marks'));

    }

    public function class_result($class)
    {
        $subjects = ClassSubject::where('class',$class)->get();

        $students = StudentSchoolInfo::where('class',$class)->get();
        
        // $mark = SubjectMarks::where('student_id','1910000')->get();
        // return ($mark[0]->quiz1 + $mark[0]->quiz2 + $mark[0]->mid + $mark[0]->final).' ('.$mark[0]->quiz1.'+'.$mark[0]->quiz2.'+'.$mark[0]->mid.'+'.$mark[0]->final.')';
        $all_marks = [];
        foreach ($students as $stu) {
            $marks = SubjectMarks::where('student_id', $stu->student_id)->get();
            $temp =[];
            foreach ($marks as $subject) {
                $temp[] = '('.$subject->quiz1.'+'.$subject->quiz2.')/2+'.$subject->mid.'+'.$subject->final.'='.(($subject->quiz1 + $subject->quiz2)/2 + $subject->mid + $subject->final);
            }
            $all_marks[] = $temp;
        }

        // return $all_marks;

        return view('result.class_result',compact('class','subjects','students','all_marks'));
    }

    public function student_result(Request $r)
    {
        // return 'id: '.$r->student_id;

        if(auth()->user()->type == 'admin')
        {
            if(!isset($r->student_id))
            {
                return redirect()->back()->with('error','Please input a Student in the box');
            }
            $student_id = $r->student_id;
        }
        else if(auth()->user()->type == 'student')
        {
            $student_id = auth()->user()->user_id;
        }
        else if(auth()->user()->type == 'parents')
        {
            $student_id = substr(auth()->user()->user_id, 2);
        }
        else 
        {
            return redirect('/')->with('error','Your are not eligible for this operation');
        }

        return $student_id;

        return view('result.student_result');
    }
}
