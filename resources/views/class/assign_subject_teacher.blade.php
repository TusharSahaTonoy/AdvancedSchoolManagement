@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: wheat; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900">Add A section in class</h3>
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Class</th>
                <th>Section</th>
                <th>Subject ID</th>
                <th>Subject Name</th>
                <th>Teacher</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach (App\ClassSubject::select('class')->groupBy('class')->get() as $class)

                @foreach (App\ClassSection::select('section')->where('class',$class->class)->get() as $section)
                  
                  @foreach (App\ClassSubject::where('class',$class->class)->get() as $subject)
                    <tr>
                      <td>{{$class->class}}</td>
                      <td>{{$section->section}}</td>
                      <td>{{$subject->subject_id}}</td>
                      <td>{{$subject->subject_name}}</td>
                      <td>
                        @php
                          $teacher =  App\SubjectTeacher::where([
                        'class' => $class->class,
                        'section'=> $section->section,
                        'subject_id'=>$subject->subject_id
                        ])->first();
                        @endphp
                        @isset($teacher)
                        {{$teacher->teacher->name}}
                        @endisset
                      </td>
                      <td><button class="btn btn-info btn-sm modal_btn">Assign</button></td>
                    </tr>
                  @endforeach
                @endforeach
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal_Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{url('class/assign-subject-teacher')}}" method="post">
        @csrf
        <div class="modal-body">
          <div class="row">
              <div class="form-group col-12">
                  <label for="">Class :</label>
                  <input type="text" id="class" name="class" style="outline: none;" readonly>
              </div>
              <div class="form-group col-12">
                  <label for="">Section :</label>
                  <input type="text" id="section" name="section" style="outline: none;" readonly>
              </div>
              <div class="form-group col-12">
                  <label for="">Subject ID :</label>
                  <input type="text" id="subject_id" name="subject_id" style="outline: none;" readonly>
              </div>
              <div class="form-group col-12">
                  <label for="">Subject Name :</label>
                  <input type="text" id="subject_name" name="subject_name" style="outline: none;" readonly>
              </div>
    
              <div class="form-group col-12">
                  <label for="">Teacher name :</label>
                  <select class="form-control" name="teacher_id" id="teacher_id" required>
                    <option value="">Select Teacher</option>
                    @foreach (App\Teacher::all() as $teacher)
                        <option value="{{$teacher->user_id}}">{{$teacher->name}}</option>
                    @endforeach
                  </select>
              </div>
            </div>
        </>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Assign Teacher</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <script>
  window.addEventListener('load', function load() {

      $('#example').dataTable({
        paging: false
      });
      $("#modal input").css("outline", "none");

      $(".modal_btn").click(function(){
        $("#modal").modal('show');

        // get the current row
        var currentRow=$(this).closest("tr"); 

        $("#class").val(currentRow.find("td:eq(0)").text());
        $("#section").val(currentRow.find("td:eq(1)").text()); 
        $("#subject_id").val(currentRow.find("td:eq(2)").text()); 
        $("#subject_name").val(currentRow.find("td:eq(3)").text());

      });
      
  });
  </script>
  
@endsection