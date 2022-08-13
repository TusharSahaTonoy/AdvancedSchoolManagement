<?php

function admin_check()
{
  if(auth()->user()->type!='admin')
  {
    return redirect('/')->with('error','You do not have that privilege');
  }
}

function is_admin()
{
  return (auth()->user()->type=='admin')? 1: 0;
}

function is_admin_principal()
{
  return (in_array(auth()->user()->role,['admin','principal'])) ? 1 : 0;
}

function is_principal()
{
  return (auth()->user()->type=='principal')? 1: 0;
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