@extends('layouts.main')

@section('content')
	<div class="row justify-content-center">
    <div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="mT-30">
          <h3 class="c-grey-900">All Users</h3>
          <input id="filter1" type="text" placeholder="search here">
          <table id="mytable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Added By</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach (App\User::where('type','admin')->get() as $admin)
                <tr>
                  <td>{{$admin->user_id}}</td>
                  <td>{{$admin->user_name}}</td>
                  <td>{{$admin->added_by}}</td>
                </tr>    
              @endforeach
              
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

  <script>
  window.addEventListener('load', function load() {

    $('#mytable').dataTable({
      paging: false
    });  
  
    // $('#filter1').change(function() { 
    //   console.log('THis is working');
    //     $("#mytable td.col1:contains('" + $(this).val() + "')").parent().show();
    //     $("#mytable td.col1:not(:contains('" + $(this).val() + "'))").parent().hide();
    // });

  });
</script>
@endsection