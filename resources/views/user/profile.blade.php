@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-md-12 col-sm-12" style="background-color: #00bcd4; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
							<h3 class="c-grey-900 text-center">User Profile</h3>
							<hr>
							<br>
							<div class="row justify-content-center">
								
								<div class="card" style="width: 30rem;">
									{{-- @if (Auth::user()->type != 'admin')
										<img src="{{asset('')}}" class="card-img-top" alt="...">
									@endif --}}
									<div class="card-body">
										<ul class="list-group c-grey-900 text-capitalize">
											<li class="list-group-item">Name : {{Auth::user()->user_name}}</li>
											<li class="list-group-item">User ID : {{Auth::user()->user_id}}</li>
											<li class="list-group-item">Type : {{Auth::user()->type}}</li>
											<li class="list-group-item">Role : {{Auth::user()->role}}</li>
										</ul>
									</div>
								</div>
								
							</div>
							<div class="row">

							</div>
							
				</div>
		</div>
	</div>



@endsection