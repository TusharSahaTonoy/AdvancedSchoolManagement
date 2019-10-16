@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
    <div class="col-12" style="background-color: wheat; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
            <h3 class="c-grey-900">All Classes</h3>
          <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Class</th>
                <th>Sections</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($classes as $item)
                <tr>
                  <td>{{$item->class}}</td>
                  <td>{{$item->section}}</td>
                  <td><a class="btn btn-sm btn-info" href="{{url('attendance',$item->class.','.$item->section)}}">Take Attendance</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
  
  @endsection