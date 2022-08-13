@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900 text-center">Teacher List</h3>
          <div style="overflow-x:auto;">  
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>User ID</th>
                  <th>image</th>
                  <th>Name</th>
                  <th>Subject</th>
                  <th>Phone</th>
                  <th>Join Date</th>
                  <th>Role</th>
                  @if (Auth::user()->role == 'admin' || Auth::user()->role == 'principal')
                    <th>Added By</th>
                    <th>Action</th>
                  @endif  
                </tr>
              </thead>
              <tbody>
                
                @foreach (App\Teacher::all() as $index => $teacher)
                  <tr>
                    <td>{{++$index}}</td>
                    <td>{{$teacher->user_id}}</td>
                    <td><img class="bdrs-50p w-4r h-4r" alt="teacher Image" src="{{ asset('storage/teacher/'.$teacher->image) }}"></td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->subject}}</td>
                    <td>{{$teacher->phone}}</td>
                    <td>{{$teacher->join_date}}</td>
                    <td class="text-capitalize">{{$teacher->user->role}}</td>
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'principal')
                      <td class="text-capitalize">{{$teacher->user->added_by}}</td>
                      <td><a href="{{url('teacher/edit-role/'.$teacher->user_id)}}" class="btn_edit btn btn-sm btn-warning">Edit Role</a>
                      <button name="{{$teacher->user_id}}" class="btn btn-sm btn-danger">Delete</button></td>    
                    @endif
                    
                  </tr>    
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  
  window.addEventListener('load',function load(){
    $(".btn_delete").click(function(){
      alert('Deleting....');
      var row = $(this).closest('tr');
      var user_id = $(this).attr('name');
        (async function () {
          var response = await axios.post("{{url('teacher/delete')}}", {
          teacher_id : user_id,
          completed: true
          });
          // alert(response.data);
          if(response.data)
          {
            alert('Teacher Deleted.');
            row.remove(); 
          }
          else if(!response.data)
          {
            alert('Teacher have records inserted. Can not be deleted now.');
          }
          else
          {
            alert('Something Wrong');
            console.log(response.data);
          }

        })()
      
    });

  });

  </script>
@endsection