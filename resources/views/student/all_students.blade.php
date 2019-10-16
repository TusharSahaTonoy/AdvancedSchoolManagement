@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
					<div class="mT-30">
						<h3 class="c-grey-900">All Student List <a href="{{url('student/add')}}" class="btn btn-info">Add Student</a></h3>

            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Roll</th>
                  <th>Guide Teacher</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\StudentSchoolInfo::all() as $student)
                  <tr>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->student->name}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->section}}</td>
                    <td>{{$student->roll}}</td>
                    <td>{{$student->teacher->name}} ({{$student->guide_teacher}})</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            
					</div>
			</div>
		</div>
	</div>

@endsection