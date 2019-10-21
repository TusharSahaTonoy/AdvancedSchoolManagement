@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-12 col-sm-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
							<h3 class="c-grey-900 text-center">User Profile</h3>
							<hr>
							<br>
							<h4 class="c-grey-900">User info</h4>
							<hr>
							<div class="form-group"><label>Teacher name</label> 
								<input type="text" name="name" class="form-control" placeholder="Full name" required>
							</div>
							<div class="form-group"><label>User Id</label> 
								<input type="text" name="user_id" class="form-control" required>
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
											<div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
											<input type="text" class="form-control bdc-grey-200 start-date" name="join_date" data-date-format="yyyy-mm-dd" readonly="true" placeholder="choose date" required>
										</div>
									</div>
							</div>

							<div class="form-group"><label>Teacher Image</label> 
								<input type="file" name="teacher_image" class="form-control" accept="image/x-png, image/jpeg" required>
							</div>
		
				</div>
		</div>
	</div>



@endsection