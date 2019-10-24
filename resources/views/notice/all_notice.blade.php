@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900 text-center">Notice List</h3>
          <div style="overflow-x:auto;">  
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Count</th>
                  <th>Title</th>
                  <th>File</th>
                  <th>For Class</th>
                  <th>Added By</th>
                  <th>status</th>
                  <th>Posted At</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach (App\Notice::orderBy('created_at')->get() as $index => $notice)
                  <tr>
                    <td>{{++$index}}</td>
                    <td>{{$notice->title}}</td>
                    {{-- <td><img class="bdrs-50p w-4r h-4r" alt="notice Image" src="{{ asset('storage/notice/'.$notice->image) }}"></td> --}}
                    <td>{{$notice->file}}</td>
                    <td>{{$notice->class}}</td>
                    <td>{{$notice->user->user_id}}({{$notice->added_by}})</td>
                    <td>
                      @if ($notice->status)
                        Approved
                      @elseif($notice->status==2)
                        Pending
                      @else
                        Rejected
                      @endif
                      &nbsp; <a href="" class="btn btn-info">Change </a>
                    </td>
                    <td>
                        {{$notice->created_at}}
                    </td>
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