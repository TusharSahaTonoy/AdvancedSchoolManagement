@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20 c-grey-900">
        <div class="mT-30">
          <h3 class="text-center">All Class Details</h3>

          <div class="card">
            <h5 class="card-header">Class Result</h5>
            <div class="card-body">
              @foreach (range(1,8) as $class)
                <div class="row">
                  <label class="col-2" for="">Class : {{$class}} </label>
                  <a href="{{url('result/class/'.$class)}}" class="col-2 btn btn-info btn-sm">Show Result</a>
                </div>
                <br>
              @endforeach
            </div>
          </div>
          
          <br>

          <div class="card">
            <h5 class="card-header">Student Result</h5>
            <div class="card-body">
              <h5 class="card-title">See one student result</h5>
              <form action="{{url('result/student')}}">
                <p class="card-text">Student ID: <input type="text" name="student_id" class="form-control-sm">
                </p>
                <button type="submit" class="btn btn-info">Show Result</button>
              </form>
              
            </div>
          </div>
          
          <br>

        </div>
      </div>
    </div>
  </div>
@endsection