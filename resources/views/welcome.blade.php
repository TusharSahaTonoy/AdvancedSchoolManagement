@extends('layouts.main')

@section('content')
<h3 class="c-grey-900 mT-10 mB-30 text-center">School Name</h3>
<hr>
<div class="row">
	<div class="col-md-12">

		<div class="card img-fluid">
			<img class="card-img-top" src="{{asset('images/school.jpg')}}" alt="Company Image" style="width:100%">
		</div>
	</div>
</div>
<br>
<br>
{{-- <div class="row">
	<div class="col-md-12 c-grey-900">
		<h1>Getting Stated steps</h1>
		<hr>
		<br>
		<h3>Step 1: Add Section or Add Subject </h3>
		<p>Start the project by adding some section or subject</p>
		<h4>Add subject</h4>
		<p>Click the < from the </p>
	</div>
</div> --}}
{{-- 
<div class="row">
	<div class="col-10">
		<canvas id="my_chart"></canvas>
	</div>
</div>


<script>
window.addEventListener('load',function load(){
	let myChart = document.getElementById('my_chart').getContext('2d');

	let mass_pop_chart = new Chart(myChart, {
		type : 'bar',
		data : {
			labels: ['Barisal','Chittagong','Dhaka','Khulna','Mymensingh','Rajshahi'],
			datasets:[{
				label: 'Aria',
				data : [
					13225,
					33908,
					20593,
					22284,
					10584,
					18153
				],
				backgroundColor : 'skyblue'
			},
			{
				label: 'Population',
				data : [
					83252,
					33102,
					12593,
					52284,
					30584,
					12153
				],
				backgroundColor : 'blue'
			}]
		},
		options : {}
	});
});
</script> --}}

@endsection