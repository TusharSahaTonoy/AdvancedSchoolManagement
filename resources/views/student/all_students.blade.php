@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
					<div class="mT-30">
            <h3 class="c-grey-900">All Student List <a href="{{url('student/add')}}" class="btn btn-info">Add Student</a></h3>
            <div>
              <label for="">Select Class:</label> 
              <select id="class_name" onchange="table_filter(this)">
                <option value="">Select A Class</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>

            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Roll</th>
                  <th>Guide Teacher</th>
                  <th>Action</th>
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
                    <td>
                      @isset($student->guide_teacher)
                      {{$student->teacher->name}} ({{$student->guide_teacher}})      
                      @endisset
                    </td>
                    <td>
                      <a href="{{url('student/view/'.$student->student_id)}}" class="btn btn-sm btn-primary">All Details</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
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

    function table_filter(e) {

      var _class = e.options[e.selectedIndex].value;

      var filter, table, tr, td, i, txtValue;
      // filter = input.value.toUpperCase();
      table = document.getElementById("dataTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(_class) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
  </script>

@endsection