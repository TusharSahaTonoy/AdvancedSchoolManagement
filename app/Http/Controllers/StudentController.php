<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Parents;
use App\StudentSchoolInfo;
use App\ClassSection;
use App\Teacher;

class StudentController extends Controller
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

    public function all_students()
    {
        return view('student.all_students');
    }
    public function add_student_form()
    {
        $has_section = ClassSection::first();
        $has_teacher = Teacher::first();

        if(!isset($has_section) && !isset($has_teacher))
        {
            return redirect('/')->with('error','Section or Teacher has not added yet. Please add Section and Teacher first');
        }

        return view('student.add_student');
    }

    public function add_student(Request $r)
    {
        return $r;

        request()->validate([
            'name' => 'required|string|mix:190', 
            'gender' => 'required|string|mix:10', 
            'religion' => 'required|string|mix:10', 
            'dob' => 'required|date', 
            'admission_date' => 'required|date', 
            'present_address' => 'required|string|mix:190', 
            'permanent_address' => 'required|string|mix:190', 

            'class' => 'required',
            'section' => 'required',
            'roll' => 'required',
            'guide_teacher' => 'required',
            'year' => 'required',
            
            'father_name' => 'required|string|mix:190', 
            'father_occu' => 'required|string|mix:190',
            'mother_name' => 'required|string|mix:190', 
            'mother_occu' => 'required|string|mix:190',

            'father_mobile'=> 'required|max:14|min:11|max:14',
            'mother_mobile'=> 'required|max:14|min:11|max:14',

            'student_image'=> 'required|image|max:5000',
            'father_image'=> 'required|image|max:5000',
            'mother_image'=> 'required|image|max:5000'
        ]);
        
        $ext = $request->file('student_image')->getClientOriginalExtension();
        $student_img = 's'.time().'.'.$ext;

        $ext = $request->file('father_image')->getClientOriginalExtension();
        $father_img = 'f'.time().'.'.$ext;

        $ext = $request->file('mother_image')->getClientOriginalExtension();
        $mother_img = 'm'.time().'.'.$ext;

        $count = Student::where('user_id','like', date('y').'%')->count();
        // return ++$count;

        $student = User::create([
            'user_id' =>  date('y').str_pad(++$count, 5, "0", STR_PAD_RIGHT),
            'user_name' => $r->name,
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'type' => 'student',
            'role' => 'none',
            'added_by' => auth()->user()->user_id
        ]);

        Student::create([
            'name' => $student->user_name,
            'gender' => $r->gender,
            'religion' => $r->religion,
            'dob' => $r->dob,
            'admission_date' => $r->admission_date,
            'present_address' => $r->present_address,
            'permanent_address' => $r->permanent_address,
            'image' => 'image',
            'user_id' => $student->user_id
        ]);


        $parents = User::create([
            'user_id' =>  'p-'.$student->user_id,
            'user_name' => 'Parents',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'type' => 'parents',
            'role' => 'none',
            'added_by' => auth()->user()->user_id
        ]);

        Parents::create([
            'father_name' => $r->father_name, 
            'father_occu' => $r->father_occu,  
            'father_mobile' => $r->father_mobile, 
            'father_image' => 'image', 
            'mother_name' => $r->mother_name, 
            'mother_occu' => $r->mother_occu, 
            'mother_mobile' => $r->mother_mobile, 
            'mother_image' =>'image', 
            'user_id' => $parents->user_id, 
            'student_id' => $student->user_id,
        ]);

        StudentSchoolInfo::create([
            'class' =>$r->class, 
            'section' =>$r->section, 
            'roll' =>$r->roll, 
            'guide_teacher' => $r->guide_teacher, 
            'year' =>date('Y',strtotime($r->admission_date)), 
            'student_id' => $student->user_id
        ]);


        return redirect('/student/all')->with('success','Student Added Successfully');
    }
}
