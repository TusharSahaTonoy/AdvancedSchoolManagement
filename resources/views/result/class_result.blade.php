@extends('layouts.main')

@section('content')
	<div class="row justify-content-center" style="background-color: #00bcd4;">
    <div class="col-12">
      <div class="bgc-white bdrs-3 p-20 mB-20 c-grey-900">
        <h3 class="text-center">All Student Results Class: {{$class}} </h3>
        <hr>
        <div class="table-responsive">
          <table id="mytable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Roll(ID)</th>
                <th>Name</th>
                <th>Section</th>
                @foreach ($subjects as $subject)
                  <th>{{$subject->subject_name}} </th>
                @endforeach
                {{-- <th>Action</th> --}}
              </tr>
            </thead>
            <tbody>
              
              @if(count($students))
                @foreach ($students as $index => $student)
                <tr>
                  <td>{{$student->roll}} ({{$student->student_id}})</td>
                  <td>{{$student->student->name}}</td>
                  <td>{{$student->section}}</td>
                  @foreach ($subjects as $key => $subject)
                    @if (isset($all_marks[$index][$key]))
                      <td>{{$all_marks[$index][$key]}}</td>
                    @else
                    <td>Not Evaluated Yet</td>         
                    @endif
                  @endforeach
                  {{-- <td><a href="{{url('result/pdf/'.$student->student_id)}}" class="btn btn-sm btn-danger" target="_blank">PDF</a></td> --}}
                </tr>
                @endforeach

              @else
              <tr>
                <strong>No Data found</strong>
              </tr>
                  
              @endif
            </tbody>
          </table>
        </div >
      </div>
    </div>
  </div>
@endsection