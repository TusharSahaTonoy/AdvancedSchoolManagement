<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notice;

class NoticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function all_notice()
    {
        return view('notice.all_notice');
    }

    public function add_notice_form()
    {
        admin_check();

        return view('notice.add_notice');
    }

    public function add_notice(Request $r)
    {
        admin_check();

        request()->validate([
            'title' => 'required|max:190',
            'file' => 'required|mimes:doc,docx,pdf,xls|max:2048'
        ]);

        $ext = $r->file('file')->getClientOriginalExtension();
        $file = 'n'.time().'.'.$ext;

        Notice::create([
            'title' => $r->title, 
            'class' => $r->class, 
            'file' => $file, 
            'status' => '1',
            'added_by'=> auth()->user()->user_id
        ]);

        $r->file('file')->storeAs('public/notice',$file);
        
        // return 'success';
        return redirect('/notice/all')->with('success','Notice added');
    }
}
