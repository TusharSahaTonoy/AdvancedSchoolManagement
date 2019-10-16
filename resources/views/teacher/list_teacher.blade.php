@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900">Add A section in class</h3>

          <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Phone</th>
                <th>Join Date</th>
                <th>Role</th>
                <th>Added By</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach (App\Teacher::all() as $index => $teacher)
                <tr>
                  <td>{{++$index}}</td>
                  <td>{{$teacher->user_id}}</td>
                  <td>{{$teacher->name}}</td>
                  <td>{{$teacher->subject}}</td>
                  <td>{{$teacher->phone}}</td>
                  <td>{{$teacher->join_date}}</td>
                  <td class="text-capitalize">{{$teacher->user->role}}</td>
                  <td class="text-capitalize">{{$teacher->user->added_by}}</td>
                </tr>    
              @endforeach
              
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
@endsection