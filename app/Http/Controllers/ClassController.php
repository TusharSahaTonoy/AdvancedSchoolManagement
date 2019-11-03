<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teacher;

use App\ClassSection;
use App\ClassTeacher;
use App\ClassSubject;
use App\SubjectTeacher;
use App\StudentSchoolInfo;

class ClassController extends Controller
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

    // all classes
    public function all_classes()
    {
        $classes = ClassSubject::select('class')->groupBy('class')->get();

        foreach ($classes as $index => $class) {
            $total_subjects_arr[$class->class] = ClassSubject::where('class',$class->class)->count();

            $total_sections_arr[$class->class] = ClassSection::where('class',$class->class)->count();

            $total_student_arr[$class->class] = StudentSchoolInfo::where('class',$class->class)->count();
        }

        // return $total_student_arr;

        return view('class.all_classes', compact('classes','total_subjects_arr','total_sections_arr','total_student_arr'));
    }
    
    public function add_class_section_form()
    {
        return view('class.add_class_section');
    }

    public function add_class_section(Request $r)
    {
        // return $r;

        request()->validate([
            'section' => 'required',
        ]);

        $found = ClassSection::where([
            'section' => $r->section, 
            'class'=> $r->class,
        ])->first();

        if(!empty($found))
        {
            return redirect()->back()->with('error','Section Already exist');
        }

        ClassSection::create([
            'section' => $r->section, 
            'class'=> $r->class,
        ]);

        return redirect()->back()->with('success','Section Added successfully');
        
    }

    public function assign_class_teacher_form($class)
    {

        // return $class;
        // return 
        $all_teacher = Teacher::all();
        $sections = ClassSection::select('section')->where('class',$class)->get();

        return view('class.assign_class_teacher',compact('all_teacher','sections','class'));
    }

    public function assign_class_teacher(Request $r)
    {
        // return $r;

        foreach($r->teacher_ids as $index => $teacher_id)
        {
            // return $r->class. ' ' . $r->sections[$index] . ' ' . $teacher_id;
            ClassTeacher::updateOrCreate([
                'class' => $r->class,
                'section' => $r->sections[$index],
            ],
            [
                'teacher_id' => $teacher_id,
            ]);
        }
        return redirect()->back();
    }

    // add subject, Subject list
    public function add_class_subject_form()
    {
        return view('class.add_class_subject');
    }

    public function add_class_subject(Request $r)
    {
        // return $r;
        request()->validate([
            'class' => 'required',
        ]);

        $section = ClassSection::where('class',$r->class)->first();

        if(empty($section))
        {
            return redirect()->back()->with('error','The class '.$r->class.' have not any section(s). Please add a section first. Go to "Class -> Add Section" from the manu.');
        }

        $subject = ClassSubject::where([
            'subject_id'=> $r->subject_id,
        ])->first();

        if(!empty($subject))
        {
            return redirect()->back()->with('error','Subject is already added.');
        }

        ClassSubject::create([
            'subject_id'=> $r->subject_id,
            'subject_name'=> $r->subject_name,
            'subject_mark'=> $r->subject_mark,
            'class'=> $r->class,
        ]);
    
        return redirect()->back()->with('success','Subject is added.');
        
    }

    public function assign_subject_teacher_form()
    {
        // SELECT class from class_subjects GROUP by class_subjects.class
        
        // SELECT section from class_sections WHERE class = '1'

        // SELECT subject_id from class_subjects WHERE class = '1'

        return view('class.assign_subject_teacher');
    }

    public function assign_subject_teacher(Request $r)
    {
        // return $r;
        // return view('teacher.assign_subject_teacher');

        request()->validate([
            'class' => 'required',
            'section' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
        ]);

        SubjectTeacher::updateOrCreate([
            "class" => $r->class,
            "section" => $r->section,
            "subject_id" => $r->subject_id,
        ],
        [
            "teacher_id" => $r->teacher_id
        ]);

        return redirect()->back()->with('success','Teacher is assigned.');
        
    }

    //all section ajax
    public function get_sections_ajax(Request $r)
    {
        // return $r->_class;
        return ClassSection::select('section')->where('class',$r->_class)->get();
    }
}
