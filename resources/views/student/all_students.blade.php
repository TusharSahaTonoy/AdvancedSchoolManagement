@extends('layouts.main')

@section('content')

  {{-- <div class="row">
    <form action="{{url('student/delete')}}" method="POST">
      @csrf
      <label for="">Id: </label>
      <input type="text" name="student_id">
      <input type="submit">
    </form>
  </div> --}}
  <br>
	<div class="row justify-content-center">
			<div class="col-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
					<div class="mT-30">
            <h3 class="c-grey-900">All Student List @if (Auth::user()->role =='admin') <a href="{{url('student/add')}}" class="btn btn-info">Add Student</a> @endif</h3>
            <hr>
            <br>
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
                  @if (Auth::user()->role =='admin'|| Auth::user()->role =='principal')
                    <th>Action</th>
                  @endif
                  
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
                    @if (Auth::user()->role =='admin'|| Auth::user()->role =='principal')
                      <td>
                        <a href="{{url('student/view/'.$student->student_id)}}" class="btn btn-sm btn-primary">All Details</a>
                        <button class="btn btn-sm btn-danger btn_delete" name="{{$student->student_id}}">Delete</button>
                      </td>
                    @endif
                    
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

      var table, tr, td, i, txtValue;

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

    let delete_btns = document.querySelectorAll('.btn_delete');

    for (var i = 0; i < delete_btns.length; i++) {
      delete_btns[i].addEventListener('click', function(event) {
          
        if (confirm("Sure! You want to delete.")) {
          // let student_id = this.getAttribute('name');
          let data = { student_id : this.getAttribute('name') };

          var row = this.closest('tr');
          
          fetch( "{{url('student/delete')}}" , {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json;charset=utf-8',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
          })
          .then(function(res){
            // console.log(res.status);
            return res.json();
          })
          .then(function(data){
            if(data=="1")
            {
              alert('Delete Success');
              row.remove(); 
            }
            else if(data=="0")
            {
              alert('Can not be deleted. Have marks records. Contact Admin');
            }
            // console.log( data );
          });
        }
        

      });
    }

    // let response = await fetch(url);

    // if (response.ok) { // if HTTP-status is 200-299
    //   // get the response body (the method explained below)
    //   let json = await response.json();
    // } else {
    //   alert("HTTP-Error: " + response.status);
    // }
    

  </script>

@endsection