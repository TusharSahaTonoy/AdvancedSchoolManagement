@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12" style="background-color: #00bcd4; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
						
					<div class="mT-30">
            <h3 class="c-grey-900 text-center">Edit Teacher</h3>
            <hr>
						<form action="{{url('teacher/edit-role')}}" method="POST" enctype="multipart/form-data" >
								@csrf

							<div class="form-group"><label>Teacher name</label> 
								<input type="text" name="name" value="{{$teacher->name}}" class="form-control" placeholder="Full name" disabled>
							</div>
							<div class="form-group"><label>User Id</label> 
								<input type="text" name="user_id"  value="{{$teacher->user_id}}" class="form-control" disabled>
							</div>
							
							<div class="form-group"><label>Role</label> 
								<select class="form-control text-capitalize" name="role" required >
                  <option value="{{$teacher->user->role}}">{{$teacher->user->role}}</option>
                  <option value="" disabled>----------------</option>
									<option value="subject teacher">Subject Teacher</option>
									<option value="principal">Principal</option>
									<option value="co-ordinaton">Co-ordinaton</option>
								</select>
							</div>

							<div class="form-group"><label>Subject name</label> 
								<input type="text" name="subject" value="{{$teacher->subject}}" class="form-control" placeholder="">
							</div>

							<div class="form-group"><label>Phone</label> 
								<input type="text" name="phone" value="{{$teacher->phone}}" class="form-control" placeholder="Insert only 11 digit phone number" minlength="11" maxlength="11" disabled>
							</div>
				

							<div class="form-group"><label>Join Date</label> 
								<div class="timepicker-input input-icon form-group">
										<div class="input-group">
											<div class="input-group-addon bgc-white bd bdwR-0"><i class="far fa-calendar-alt" style=" font-size:30px;"></i></div>
											<input type="text" class="form-control bdc-grey-200 start-date" name="join_date" value="{{$teacher->join_date}}" data-date-format="yyyy-mm-dd" readonly="true" placeholder="choose date" required>
										</div>
									</div>
							</div>

							<div class="form-group"><label>Teacher Image</label> 
                {{-- <input type="file" name="teacher_image" class="form-control" accept="image/x-png,image/jpeg" > --}}
                <img src="{{asset('storage/teacher/'.$teacher->image)}}" alt="teacher Image" style="width:250px; heigth:260px;">
							</div>
					
							<button type="submit" class="btn btn-info">Save Changes</button>

						</form>
					</div>
			</div>
		</div>
	</div>

@endsection