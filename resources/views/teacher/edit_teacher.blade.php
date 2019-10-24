@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12" style="background-color: #00bcd4; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
						
					<div class="mT-30">
							<h3 class="c-grey-900">Add Teacher</h3>

						<form action="{{url('teacher/add')}}" method="POST" enctype="multipart/form-data" >
								@csrf

							<div class="form-group"><label>Teacher name</label> 
								<input type="text" name="name" class="form-control" placeholder="Full name" required>
							</div>
							<div class="form-group"><label>User Id</label> 
								<input type="text" name="user_id" class="form-control" required>
							</div>
							
							<div class="form-group"><label>Role</label> 
								<select class="form-control" name="role" required>
									<option value="">Select Teacher Role</option>
									<option value="subject teacher">Subject Teacher</option>
									<option value="principal">Principal</option>
									<option value="co-ordinaton">Co-ordinaton</option>
								</select>
							</div>

							<div class="form-group"><label>Subject name</label> 
								<input type="text" name="subject" class="form-control" placeholder="">
							</div>

							<div class="form-group"><label>Phone</label> 
								<input type="text" name="phone" class="form-control" placeholder="Insert only 11 digit phone number" minlength="11" maxlength="11" required>
							</div>
				

							<div class="form-group"><label>Join Date</label> 
								<div class="timepicker-input input-icon form-group">
										<div class="input-group">
											<div class="input-group-addon bgc-white bd bdwR-0"><i class="far fa-calendar-alt" style=" font-size:30px;"></i></div>
											<input type="text" class="form-control bdc-grey-200 start-date" name="join_date" data-date-format="yyyy-mm-dd" readonly="true" placeholder="choose date" required>
										</div>
									</div>
							</div>

							<div class="form-group"><label>Teacher Image</label> 
								<input type="file" name="teacher_image" class="form-control" accept="image/x-png, image/jpeg" required>
							</div>
					
							<button type="submit" class="btn btn-info">Register Teacher</button>

						</form>
					</div>
			</div>
		</div>
	</div>

@endsection