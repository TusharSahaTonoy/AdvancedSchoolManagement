<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Parents;
use App\StudentSchoolInfo;
use App\ClassSection;
use App\Teacher;

use App\SubjectMarks;
use App\Attendance;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(function ($request, $next) {
        //     if(in_array($request->user()->role ,['admin','principal'])) {
        //         return $next($request);
        //     } else {
        //         return redirect('/')->with('error','You do not have that privilege');
        //     }
        // });
    }

    public function all_students()
    {
        return view('student.all_students');
    }
    public function add_student_form()
    {
        if(auth()->user()->role!='admin')
        {
            return redirect('/')->with('error','You do not have that privilege');
        }

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
        // return $r;
        if(auth()->user()->role!='admin')
        {
            return redirect('/')->with('error','You do not have that privilege');
        }

        $validator = \Illuminate\Support\Facades\Validator::make($r->all(), [
            'name' => 'required|string|max:190', 
            'gender' => 'required|string|max:10', 
            'religion' => 'required|string|max:10', 
            'dob' => 'required|date', 
            'admission_date' => 'required|date', 
            'present_address' => 'required|string|max:190', 
            'permanent_address' => 'required|string|max:190', 

            'class' => 'required',
            'section' => 'required',
            'roll' => 'required',
            'guide_teacher' => 'required',
            
            'father_name' => 'required|string|max:190', 
            'father_occu' => 'required|string|max:190',
            'mother_name' => 'required|string|max:190', 
            'mother_occu' => 'required|string|max:190',

            'father_mobile'=> 'required|regex:/(01)[0-9]{9}/',
            'mother_mobile'=> 'required|regex:/(01)[0-9]{9}/',

            'student_image'=> 'required|image|max:5000',
            'father_image'=> 'required|image|max:5000',
            'mother_image'=> 'required|image|max:5000'
        ]);

        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();
        
        $ext = $r->file('student_image')->getClientOriginalExtension();
        $student_img = 's'.time().'.'.$ext;

        $ext = $r->file('father_image')->getClientOriginalExtension();
        $father_img = 'f'.time().'.'.$ext;

        $ext = $r->file('mother_image')->getClientOriginalExtension();
        $mother_img = 'm'.time().'.'.$ext;

        // id calculation
        $last_id = Student::max('user_id') ?? date('y').str_pad(0, 5, "0", STR_PAD_LEFT) ;

        // return ++$last_id;

        $student = User::create([
            'user_id' =>  ++$last_id,
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
            'image' => $student_img,
            'user_id' => $student->user_id
        ]);
        $r->file('student_image')->storeAs('public/student',$student_img);


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
            'father_image' => $father_img, 
            'mother_name' => $r->mother_name, 
            'mother_occu' => $r->mother_occu, 
            'mother_mobile' => $r->mother_mobile, 
            'mother_image' =>$mother_img, 
            'user_id' => $parents->user_id, 
            'student_id' => $student->user_id,
        ]);
        $r->file('father_image')->storeAs('public/father',$father_img);
        $r->file('mother_image')->storeAs('public/mother',$mother_img);

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

    public function view_student($id)
    {
        // return 'STudent id: '.$id;

        if(!is_admin_principal() && auth()->user()->user_id!=$id)
        {
            return redirect('/')->with('error','You do not have that privilege');
        }

        $student = Student::where('user_id',$id)->first();

        return view('student.view_student',compact('student'));
    }

    public function edit_student_form()
    {
        if(!is_student())
        {
            return redirect('/')->with('error','You do not have that privilege');
        }

        $student = Student::where('user_id',auth()->user()->user_id)->first();
        return view('student.edit_student',compact('student'));
    }
    public function edit_student(Request $r)
    {
        if(!is_student())
        {
            return redirect('/')->with('error','You do not have that privilege');
        }

        request()->validate([
            'name' => 'required|string|max:190', 
            'gender' => 'required|string|max:10', 
            'religion' => 'required|string|max:10', 
            'dob' => 'required|date', 
            'present_address' => 'required|string|max:190', 
            'permanent_address' => 'required|string|max:190', 

            'father_name' => 'required|string|max:190', 
            'father_occu' => 'required|string|max:190',
            'mother_name' => 'required|string|max:190', 
            'mother_occu' => 'required|string|max:190',
        ]);
        
        User::where('user_id',auth()->user()->user_id)->first()->update([
            'user_name' => $r->name,
        ]);

        Student::where('user_id',auth()->user()->user_id)->first()->update([
            'name' => $r->name,
            'gender' => $r->gender,
            'religion' => $r->religion,
            'dob' => $r->dob,
            'present_address' => $r->present_address,
            'permanent_address' => $r->permanent_address,
        ]);

        Parents::where('user_id','p-'.auth()->user()->user_id)->first()->update([
            'father_name' => $r->father_name, 
            'father_occu' => $r->father_occu,  

            'mother_name' => $r->mother_name, 
            'mother_occu' => $r->mother_occu, 
        ]);


        return redirect()->back()->with('success','Infomation Upadated');
    }

    public function delete_student(Request $r)
    {
        // return $r->student_id;
        $status = 0;

        $marks = SubjectMarks::where('student_id',$r->student_id)->first();
        if(isset($marks))
        {
            return response()->json("0");
        }

        // $attendance ; StudentSchoolInfo; parents; parents user; student; student_user;

        // $attendance = Attendance::where('student_id',$r->student_id)->delete();

        // // parents , parents_user deleting
        // Parents::where('student_id',$r->student_id)->delete();
        // User::where('user_id','p-'.$r->student_id)->delete();

        // // deleting student school info
        // StudentSchoolInfo::where('student_id',$r->student_id)->delete();

        // // deleting student and user_student
        // Student::where('user_id',$r->student_id)->delete();
        // User::where('user_id',$r->student_id)->delete();

        return response()->json("1");
    }
}
