@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
						
					<div class="mT-30">
							<h3 class="c-grey-900 text-center">Add Student</h3>
							<hr>

						<form action="{{url('student/add')}}" method="POST" enctype="multipart/form-data">
							@csrf

							{{-- student parents info --}}
							<h5 class="c-grey-900">Student School Info</h5>
							<br>
							<div class="row">
								<div class="form-group col-6"><label>Student Class</label>
									<select id="class" name="class" class="form-control" required>
										<option value="">select class</option>
											@foreach ( range(1,8) as $class)
												<option value="{{$class}}">{{$class}}</option>
											@endforeach
									</select>
								</div>

								<div class="form-group col-6"><label>Section</label> 
									<select id="section" class="form-control" name="section" required>
										<option value="">Select A Section</option>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-4"><label>Roll</label> 
									<input type="text" name="roll" class="form-control" required>
								</div>
								<div class="form-group col-8"><label>Guide Teacher</label> 
									<select  name="guide_teacher" class="form-control" required>
										<option value="">Select Teacher</option>
										@foreach (App\Teacher::all() as $teacher)
											<option value="{{$teacher->user_id}}">{{ $teacher->name }}</option>
										@endforeach
									</select>
								</div>
							</div>

							{{-- student basic info --}}
							<h5 class="c-grey-900">Student Basic Info</h5>
							<br>
							<div class="form-group"><label>Student name</label> 
								<input type="text" name="name" class="form-control" placeholder="Full name" required>
							</div>
							<div class="form-group"><label>Gender</label>
								<select name="gender" class="form-control" required>
									<option value="">Select Student Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="form-group"><label>Relegion</label> 
								<select name="religion" class="form-control" required>
									<option value="">Select Relegion</option>
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
											<input type="text" class="form-control bdc-grey-200 start-date" name="dob" data-date-format="yyyy-mm-dd" readonly="true" placeholder="choose date" required >
										</div>
									</div>
							</div>

							<div class="form-group"><label>Admission Date</label> 
								<div class="timepicker-input input-icon form-group">
									<div class="input-group">
										<div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
										<input type="text" class="form-control bdc-grey-200 start-date" name="admission_date" data-date-format="yyyy-mm-dd" readonly="true" placeholder="choose date" required >
									</div>
								</div>
							</div>
							
							<div class="form-group"><label>Present Address</label> 
								<input type="text" name="present_address" class="form-control" placeholder="" maxlength="190" required>
							</div>

							<div class="form-group"><label>Permanent Address</label> 
								<input type="text" name="permanent_address" class="form-control" placeholder="" maxlength="190" required>
							</div>

							<div class="form-group"><label>Student Image </label> 
								<input type="file" name="student_image" class="form-control" accept="image/x-png, image/jpeg" required>
							</div>

							{{-- student parents info --}}
							<h5 class="c-grey-900">Student Parents Info</h5>
							<br>
							<div class="form-group"><label>Student father name</label> 
								<input type="text" name="father_name" class="form-control" placeholder="Full name" required>
							</div>
							
							<div class="form-group"><label>Father Occupation</label> 
								<input type="text" name="father_occu" class="form-control" required>
							</div>

							<div class="form-group"><label>Father Mobile no.</label> 
								<input type="text" name="father_mobile" class="form-control" required>
							</div>

							<div class="form-group"><label>Father Image</label> 
								<input type="file" name="father_image" class="form-control" accept="image/x-png, image/jpeg" required>
							</div>

							<div class="form-group"><label>Mother name</label> 
								<input type="text" name="mother_name" class="form-control" required>
							</div>

							<div class="form-group"><label>Mother Occupation</label> 
								<input type="text" name="mother_occu" class="form-control" required>
							</div>

							<div class="form-group"><label>Mother Mobile</label> 
								<input type="text" name="mother_mobile" class="form-control" required>
							</div>

							<div class="form-group"><label>Mother Image</label> 
								<input type="file" name="mother_image" class="form-control" accept="image/x-png, image/jpeg" required>
							</div>

							
							<button type="submit" class="btn btn-primary">Register Teacher</button>

						</form>
					</div>
			</div>
		</div>
	</div>

	<script>
	window.addEventListener('load', function load() {
		$("#section").attr('disabled','disabled');
    $("#class").change(function () {
			var _class = $(this).val();

			$.ajax({
				url: '{{url("class/get-sections-ajax")}}',
				data: {_class:_class},
				success: function(data){
					let _html='<option value="" >Select A Section</option>';
					jQuery.each(data,function(){
						_html += '<option value="' + this.section + '">' + this.section+ '</option>';
					});
					// console.log(_html);
					$("#section").html(_html);
					$("#section").removeAttr('disabled');
				},
				error: function(msg){
					console.log(msg);
				}
			});
    });
	});
	</script>


@endsection