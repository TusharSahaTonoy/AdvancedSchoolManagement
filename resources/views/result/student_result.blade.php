@extends('layouts.main')

@section('content')
	<div class="row justify-content-center" style="background-color: #00bcd4;">
    <div class="col-12">
      <div class="bgc-white bdrs-3 p-20 mB-20 c-grey-900">
        <h3 class="text-center">Your Current Result</h3>
        <hr>
        <div class="row">
          <label class="col-2">ID : {{$student->student_id}}</label>
          <label class="col-2">Name : {{$student->student->name}}</label>
          <label class="col-1">Class : {{$student->class}}</label>
          <label class="col-1">Section : {{$student->section}}</label>
          <label class="col-2">Roll : {{$student->roll}}</label>
          <label class="col-2">Attendance : {{$attendance->present}}/{{$attendance->total}}</label>
        </div>
        <div class="table-responsive">
            <table id="mytable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Subjects</th>
                  <th>Quiz 1</th>
                  <th>Mid</th>
                  <th>Quiz 2</th>
                  <th>Final</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($marks as $mark)
                <tr>
                  <td>{{$mark->subject->subject_name}}</td>
                  <td>{{$mark->quiz1}}</td>
                  <td>{{$mark->mid}}</td>
                  <td>{{$mark->quiz2}}</td>
                  <td>{{$mark->final}}</td>
                  <td>{{$mark->quiz1+
                  $mark->mid+
                  $mark->quiz2+
                  $mark->final}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div >
      </div>
    </div>
  </div>
@endsection