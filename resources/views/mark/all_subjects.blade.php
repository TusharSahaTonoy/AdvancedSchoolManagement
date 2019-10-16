@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900 text-center">Give Marks To The Student</h3>
          <table id="mytable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Class</th>
                <th>Section</th>
                <th>Subject</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($subjects as $subject)
                <tr>
                  <td>{{$subject->class}}</td>
                  <td>{{$subject->section}}</td>
                  <td>{{$subject->subject->subject_name}}</td>
                  <td>
                    @if(Auth::user()->type == 'teacher')
                    <a class="btn btn-sm btn-info" href="{{url('mark/'.$subject->class.','.$subject->section.','.$subject->subject_id.'/student-list')}}">Give Marks</a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
  window.addEventListener('load', function load() {

    $('#mytable').dataTable({
      paging: false
    });  

  });
  </script>
@endsection