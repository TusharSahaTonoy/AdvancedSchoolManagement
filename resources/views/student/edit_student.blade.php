@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
						
					<div class="mT-30">
							<h3 class="c-grey-900 text-center">Edit Student</h3>
							<hr>

						<form id="student_form" action="{{url('student/edit')}}" method="POST" enctype="multipart/form-data">
							@csrf

							{{-- student basic info --}}
							<h5 class="c-grey-900">Student Basic Info</h5>
							<br>
							<div class="form-group"><label>Student name</label> 
								<input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="Full name" required>
							</div>
							<div class="form-group"><label>Gender</label>
								<select name="gender" class="form-control" required>
                  <option value="{{$student->gender}}">{{$student->gender}}</option>
                  <option value="" disabled>-----------------------</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="form-group"><label>Relegion</label> 
								<select name="religion" class="form-control" required>
                  <option value="{{$student->religion}}">{{$student->religion}}</option>
                  <option value="" disabled>-----------------------</option>
									<option value="Islam">Islam</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Christian">Christian</option>
								</select>
							</div>


							<div class="form-group"><label>Date of birth</label> 
								<div class="timepicker-input input-icon form-group">
										<div class="input-group">
											<div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
											<input type="text" class="form-control bdc-grey-200 start-date" name="dob" value="{{$student->dob}}" data-date-format="yyyy-mm-dd" placeholder="choose date" required readonly="true" > 
										</div>
									</div>
							</div>
							
							<div class="form-group"><label>Present Address</label> 
								<input type="text" name="present_address" value="{{$student->present_address}}" class="form-control" placeholder="" maxlength="190" required>
							</div>

							<div class="form-group"><label>Permanent Address</label> 
								<input type="text" name="permanent_address" value="{{$student->permanent_address}}" class="form-control" placeholder="" maxlength="190" required>
							</div>

							{{-- student parents info --}}
							<br>
							<h5 class="c-grey-900">Student Parents Info</h5>
							
							<div class="form-group"><label>Student father name</label> 
								<input type="text" name="father_name" value="{{$student->parents->father_name}}" class="form-control" placeholder="Full name" required>
							</div>
							
							<div class="form-group"><label>Father Occupation</label> 
								<input type="text" name="father_occu" value="{{$student->parents->father_occu}}" class="form-control" required>
							</div>

							<div class="form-group"><label>Mother name</label> 
								<input type="text" name="mother_name" value="{{$student->parents->mother_name}}" class="form-control" required>
							</div>

							<div class="form-group"><label>Mother Occupation</label> 
								<input type="text" name="mother_occu" value="{{$student->parents->mother_occu}}" class="form-control" required>
							</div>
							
							<button id="btn_submit" class="btn btn-primary">Register Student</button>

						</form>
					</div>
			</div>
		</div>
	</div>

@endsection