<?php

function admin_check()
{
  if(auth()->user()->type!='admin')
  {
    return redirect('/')->with('error','You do not have that privilege');
  }
}

function is_admin_principal()
{
  if(in_array(auth()->user()->role,['admin','principal']))
  {
    return 1;
  }
  return 0;
}

function is_teacher()
{
  if(auth()->user()->type=='teacher')
  {
    return 1;
  }
  return 0;
}

function is_student()
{
  if(auth()->user()->type =='student')
  {
    return 1;
  }
  return 0;
}