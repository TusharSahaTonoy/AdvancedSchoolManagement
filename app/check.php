<?php

function admin_check()
{
  if(auth()->user()->type!='admin')
  {
    return redirect('/')->with('error','You do not have that privilege');
  }
}

// $is_admin_principal_var = (in_array(auth()->user()->role,['admin','principal'])) ? 1 : 0; 
function is_admin_principal()
{
  return (in_array(auth()->user()->role,['admin','principal'])) ? 1 : 0;
}

function is_admin_teacher()
{
  return (in_array(auth()->user()->type,['admin','teacher'])) ? 1 : 0;
}

function is_teacher()
{
  return (auth()->user()->type=='teacher')? 1: 0;
}

function is_student()
{
  return (auth()->user()->type =='student')? 1:0;
}