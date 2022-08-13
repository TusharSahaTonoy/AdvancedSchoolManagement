@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900">Add A section in class</h3>
            <div class="table-responsive">
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Role</th>
                    <th>Added By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach (App\User::all() as $index => $user)
                    <tr>
                      <td>{{++$index}}</td>
                      <td>{{$user->user_id}}</td>
                      <td>{{$user->user_name}}</td>
                      <td>{{$user->type}}</td>
                      <td>{{$user->role}}</td>
                      <td>{{$user->added_by}}</td>
                      <td><button class="btn btn-danger btn-sm btn_reset" name="{{$user->user_id}}"><i class="fas fa-key"></i>
                        <span>Reset Password</span></button></td>
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

    let reset_btns = document.querySelectorAll('.btn_reset');

    for (var i = 0; i < reset_btns.length; i++) 
    {
      reset_btns[i].addEventListener('click',function() {
          
        if (confirm("Sure! You want to reset password.")) {
          
          let student_id = this.getAttribute('name');
          alert('Password resetting . . .');
          fetch("{{url('admin/user-passowrd-reset')}}/"+ student_id)
          .then(function(res){
            return res.text();
          })
          .then(function(data){
            if(data)
            {
              alert('Password reseted');
            }
            else
            {
              alert('Server error. Contact Admin');
            }
            // console.log( data );
          });

          
          
        }
        

      });
    }
    
  </script>
@endsection