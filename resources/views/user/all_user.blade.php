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
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach (App\User::all() as $index => $admin)
                    <tr>
                      <td>{{++$index}}</td>
                      <td>{{$admin->user_id}}</td>
                      <td>{{$admin->user_name}}</td>
                      <td>{{$admin->type}}</td>
                      <td>{{$admin->role}}</td>
                      <td>{{$admin->added_by}}</td>
                    </tr>    
                  @endforeach
                  
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection