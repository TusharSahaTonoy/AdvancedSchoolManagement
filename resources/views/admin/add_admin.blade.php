@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
						
					<div class="mT-30">
							<h3 class="c-grey-900">Admin Registration</h3>

						<form action="{{url('admin/add')}}" method="POST" >
								@csrf

							<div class="form-group"><label>Admin name</label> 
								<input type="text" name="name" class="form-control" placeholder="Full name">
							</div>
				
							<div class="form-group"><label>Admin User ID</label> 
								<input type="text" name="user_id" class="form-control" placeholder="User Id">
							</div>
				
							<div class="form-group"><label>Password</label> 
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
				

							{{-- <div class="form-group"><label>Date of birth</label> 
								<div class="timepicker-input input-icon form-group">
										<div class="input-group">
											<div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
											<input type="text" class="form-control bdc-grey-200 start-date" name="dob" data-date-format="yyyy-mm-dd" readonly='true' placeholder="choose date" >
										</div>
									</div>
							</div> --}}
					
							<button type="submit" class="btn btn-primary">Register Admin</button>

						</form>
					</div>
			</div>
		</div>
	</div>



@endsection