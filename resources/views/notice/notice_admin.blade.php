@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900 text-center">Notice List</h3>
          <div style="overflow-x:auto;">  
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0">
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
                    <td><a href="{{ asset('storage/notice/'.$notice->file) }}" class="btn btn-sm btn-info" download="{{$notice->title}}.{{explode('.', $notice->file)[1]}}">Download</a></td>
                    <td>{{$notice->class}}</td>
                    <td>{{$notice->user->user_name}}({{$notice->added_by}})</td>
                    <td>
                      @if ($notice->status)
                        Approved
                      @elseif($notice->status==2)
                        Pending
                      @else
                        Rejected
                      @endif
                      &nbsp; <button class="modal_btn btn btn-info" name="{{$notice->id}}">Change</button>
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

<!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <form action="{{url('notice/change-status')}}" method="post">
          @csrf
          <div class="modal-body">
            <div class="row text-center">
              <div class="form-group col-12">
                <button type="submit" name="status[1]" value="1" class="btn btn-success">Approve</button>
                <button type="submit" name="status[2]" value="2" class="btn btn-warning">Pending</button>
                <button type="submit" name="status[0]" value="0" class="btn btn-danger">Reject</button>
                <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script>
  window.addEventListener('load', function load() {

    $('.dataTables_wrapper').addClass("overflow-auto");

      $(".modal_btn").click(function(){
        var id = $(this).attr('name');
        
        $("#modal").modal('show');

        $(".modal-body [type='submit']").attr('name','status['+id+']');
        // get the current row
        // var currentRow=$(this).closest("tr"); 

        // $("#class").val(currentRow.find("td:eq(0)").text());
        // $("#section").val(currentRow.find("td:eq(1)").text()); 
        // $("#subject_id").val(currentRow.find("td:eq(2)").text()); 
        // $("#subject_name").val(currentRow.find("td:eq(3)").text());

      });
    });
  </script>
@endsection