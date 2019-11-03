<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\User;
use App\Teacher;

use App\Attendance;
use App\SubjectMarks;
use App\StudentSchoolInfo;

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
        if(!is_admin_principal())
        {
            return redirect('/')->with('error','You do not have that privilege');
        }
        return view('teacher.list_teacher');
    }
    
    public function add_teacher_form()
    {
        if(!is_admin_principal())
        {
            return redirect('/')->with('error','You do not have that privilege');
        }
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
            'teacher_image'=> 'required|image|max:5000',
        ]);
        
        if(User::where('user_id','T-'.$r->user_id)->count() != 0)
        {
            return redirect()->back()->with('error','User id: '.$r->user_id.' is already taken')->withInput();
        }

        if($r->role == 'principal')
        {
            $principal =  User::where('role','principal')->first();

            if(isset($principal))
                return redirect()->back()->with('error','A principal is already added.')->withInput();
        }

        $ext = $r->file('teacher_image')->getClientOriginalExtension();
        $teacher_img = 't'.time().'.'.$ext;

        $user = User::create([
            'user_id' => 'T-' . $r->user_id,
            'user_name' => $r->name,
            'password' => \Illuminate\Support\Facades\Hash::make("123456"),
            'type' => 'teacher',
            'role' => $r->role,
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

    //edit teacher 
    public function edit_teacher_form($id)
    {   
        if(!is_admin_principal() && auth()->user()->user_id != $id)
        {
            return redirect('/')->with('error','You do not have that privilege');
        }

        $teacher = Teacher::where('user_id',$id)->first();

        if(!isset($teacher))
        {
            return redirect('/')->with('error','Teacher not found');
        }
        
        Session::put('user_id', $id);

        if(is_admin_principal())
        {
            return view('teacher.edit_teacher_admin',compact('teacher'));
        }

        return view('teacher.edit_teacher',compact('teacher'));
    }

    public function edit_teacher(Request $r)
    {
        return $r;
        if(is_admin_principal)
        {
            return auth()->user()->role;
            $user = User::where('user_id',Session::get('user_id'))->first();
            $user->role = $r->role;
            $user->save();
        }
        if(is_teacher)
        {
            return auth()->user()->type;
            request()->validate([
                'name' => 'required|string|max:190',
                'join_date' => 'required|date',
                'phone'=> 'required|regex:/(01)[0-9]{9}/',
            ]);
            
            $user = User::where('user_id',Session::get('user_id'))->first();
            $user->name = $r->name;
            $user->phone = $r->phone;

        }

        return $teacher;
    }
    

    public function delete_teacher(Request $r)
    {
        if(!is_admin())
        {
            return 2;
        }

        $mark = SubjectMarks::where('teacher_id',$r->teacher_id)->first(); 
        if(isset($mark))
        {
            return '0';
        }

        $attendence = Attendance::where('teacher_id',$r->teacher_id)->first(); 
        if(isset($attendence))
        {
            return '0';
        }

        $guide_teachers = StudentSchoolInfo::where('guide_teacher',$r->teacher_id)->get();
        if(isset($guide_teachers))
        {
            foreach ($guide_teachers as $key => $student) {
                $student->guide_teacher = null;
                $student->save();
            }
        }

        $teacher = Teacher::where('user_id',$r->teacher_id)->first();
        // $teacher->delete();  

        $user = User::where('user_id',$r->teacher_id)->first();
        // $user->delete();
        return '1';
    }
}
