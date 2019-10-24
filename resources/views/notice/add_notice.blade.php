@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12" style="background-color: #00bcd4; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
						
					<div class="mT-30">
							<h3 class="c-grey-900 text-center">Add A Notice</h3>
              <hr>
						<form action="{{url('notice/add')}}" method="POST" enctype="multipart/form-data" >
								@csrf

							<div class="form-group"><label>Title</label> 
								<input type="text" name="title" class="form-control" placeholder="Full name" maxlength="190" required>
							</div>
							
							<div class="form-group"><label>Class</label> 
								<select class="form-control" name="class">
                  <option value="everyone">For Everyone</option> 
                  @foreach (range(1,8) as $class)
                      <option value="{{$class}}">{{$class}}</option>
                  @endforeach
								</select>
							</div>

							<div class="form-group"><label>Upload file</label> 
								<input type="file" name="file" class="form-control" accept="application/vnd.ms-excel,.pdf,.doc,.docx" required>
							</div>
					
							<button type="submit" class="btn btn-info">Add Notice</button>

						</form>
					</div>
			</div>
		</div>
	</div>

@endsection