@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900 text-center">All Class Details</h3>
          <table id="mytable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Class</th>
                <th>Total Subject</th>
                <th>Total Section</th>
                <th>Total Students</th>
                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($classes as $index => $class)
              <tr>
                <td>{{$class->class}}</td>
                <td>{{$total_subjects_arr[$class->class]}}</td>
                <td>{{$total_sections_arr[$class->class]}}</td>
                <td>{{$total_student_arr[$class->class]}}</td>
                <td>View Details</td>                
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