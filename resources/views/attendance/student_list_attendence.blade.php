@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
    <div class="col-12" style="background-color: wheat; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          
          <h3 class="c-grey-900 col-5 text-center">Student list of Class: {{$class}}, Section: {{$section}}</h3>
          <hr>

          <form action="{{url('attendance/store')}}" method="POST">
            @csrf
            <input type="hidden" name="class" value="{{$class}}">
            <input type="hidden" name="section" value="{{$section}}">
            <div class="row justify-content-center">
              Date:<input type="text" name="att_date" class="bdc-grey-200 start-date" data-date-format="yyyy-mm-dd" readonly="true" placeholder="choose date" required>
            </div>
            
            <div class="table-responsive">  
              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Student Name (Roll)</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($students as $student)
                    <tr>
                      <td>{{$student->student->name}} ({{$student->roll}})</td>
                      <td><img class="bdrs-50p w-4r h-4r" alt="teacher Image" src="{{ asset('storage/student/'.$student->student->image) }}"></td>
                      <td>
                        <label><input type="radio" id="{{$student->student_id}}" name="stu_att[{{$student->student_id}}]" value="1">Present</label>
                      </td>
                      <td>
                        <label><input type="radio" id="{{$student->student_id}}" name="stu_att[{{$student->student_id}}]" value="0" checked>Absent</label>
                      </td>  
                    </tr>    
                    @endforeach
                  </form>
                  
                </tbody>
              </table>
            </div>
            <div class="row justify-content-center">
              <input id="btn_submit" type="submit" class="btn btn-success btn-lg"> <span id="date_span" class="text-danger">Please select a date</span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script>
  window.addEventListener('load', function load() {
    $('#btn_submit').attr('disabled','disabled');
    $('#date_span').show();

    $('input[name="att_date"]').change(function(){
      $('#date_span').hide();
      $('#btn_submit').removeAttr('disabled');
    });
  });
	</script>
  @endsection