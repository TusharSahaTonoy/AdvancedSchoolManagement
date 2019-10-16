@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
    <div class="col-12" style="background-color: wheat; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          
          <h3 class="c-grey-900 col-5">All Classes  </h3>
          <hr>

          <form action="{{url('attendance/store')}}" method="POST">
            @csrf
            <input type="hidden" name="class" value="{{$class}}">
            <input type="hidden" name="section" value="{{$section}}">
            <div class="row justify-content-center">
              Date:<input type="text" name="att_date" class="bdc-grey-200 start-date" data-date-format="yyyy-mm-dd" readonly="true" placeholder="choose date" required>
            </div>
            
          
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Student Name (Roll)</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                
                  @foreach ($students as $student)
                  <tr>
                    <td>{{$student->student->name}} ({{$student->roll}})</td>
                    <td><input type="radio" id="{{$student->student_id}}" name="stu_att[{{$student->student_id}}]" value="1">Present</td>
                    <td><input type="radio" id="{{$student->student_id}}" name="stu_att[{{$student->student_id}}]" value="0" checked>Absent</td>  
                  </tr>    
                  @endforeach
                </form>
                
              </tbody>
            </table>
            
            <div class="row justify-content-center">
              <input type="submit" class="btn btn-success btn-lg">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  @endsection