@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900 text-center">Students Marks : 
            Class {{$class}}({{$section}})
            @php
              $subject = App\ClassSubject::select('subject_name')->where('subject_id',$subject_id)->first();
              echo $subject->subject_name;    
            @endphp
            </h3>
          <hr>

          <div class="row text-center">
            <div class="col-4">Student Name (Roll)</div>
            <div class="col-2">Quiz 1</div>
            <div class="col-2">Mid</div>
            <div class="col-2">Quiz 2</div>
            <div class="col-2">Final</div>
          </div>
          <hr>

          <form action="{{url('mark/store')}}" method="post">
            @csrf

            @foreach ($stu_marks as $stu_mark)
              <div class="row text-center">
                <div class="col-4">{{$stu_mark->student->name}} ({{$stu_mark->student->school->roll}})</div>
                <input class="col-2 form-control-sm" type="number" name="quiz1[{{$stu_mark->student_id}}]" value="{{$stu_mark->quiz1}}" placeholder="Quiz 1" min="0.00" max="10" step="0.01">
                
                <input class="col-2 form-control-sm" type="number" name="mid[{{$stu_mark->student_id}}]" value="{{$stu_mark->mid}}" placeholder="Mid" min="0.00" max="30" step="0.01">

                <input class="col-2 form-control-sm" type="number" name="quiz2[{{$stu_mark->student_id}}]" value="{{$stu_mark->quiz2}}" placeholder="Quiz 2" min="0.00" max="10" step="0.01">
                
                <input class="col-2 form-control-sm" type="number" name="final[{{$stu_mark->student_id}}]" value="{{$stu_mark->final}}" placeholder="Final" min="0.00" max="60" step="0.01">
              </div>  
              <hr>  
              <input type="hidden" name="student_ids[]" value="{{$stu_mark->student_id}}">
            @endforeach

            <input type="hidden" name="class" value="{{$class}}">
            <input type="hidden" name="subject_id" value="{{$subject_id}}">

            <div class="row justify-content-center">
              <button type="submit" class="btn btn-lg btn-info">Save Marks</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection