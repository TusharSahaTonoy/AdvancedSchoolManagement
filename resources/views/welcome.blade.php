@extends('layouts.main')

@section('content')
<h4 class="c-grey-900 mT-10 mB-30">Home</h4>
<div class="row">
	<div class="col-md-12">
		<div class="bgc-white bd bdrs-3 p-20 mB-20">
				


                <h6 class="c-grey-900">Home title</h6>
                <div class="mT-30">
                  @auth
										you are logged in
										<br>
										ID : {{ Auth::user()->user_id }}
										<br>
										Name : {{ Auth::user()->user_name }}
									
									@else
										you are not logged in
                	@endauth
                </div>
		</div>
	</div>
</div>

@endsection