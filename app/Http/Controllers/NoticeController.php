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
        if(is_admin_principal())
        {
            return view('notice.notice_admin');
        }

        return view('notice.notice_public');
    }

    public function add_notice_form()
    {
        is_admin_principal();

        return view('notice.add_notice');
    }

    public function add_notice(Request $r)
    {
        is_admin_principal();

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
            'status' => '2',
            'added_by'=> auth()->user()->user_id
        ]);

        $r->file('file')->storeAs('public/notice',$file);
        
        // return 'success';
        return redirect('/notice/all')->with('success','Notice added');
    }

    public function change_status_notice(Request $r)
    {
        is_admin_principal();
        request()->validate([
            'status' => 'required|array|max:1'
        ]);
        foreach ($r->status as $id => $status);

        $notice = Notice::find($id);

        if(!isset($notice))
        {
            return redirect()->back()->with('error','jódete');
        }
            
        $notice->status =$status;
        $notice->save();
        
        return redirect()->back()->with('success','Status Changed');
    }
}
