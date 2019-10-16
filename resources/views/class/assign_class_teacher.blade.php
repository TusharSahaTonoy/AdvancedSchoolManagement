@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-12" style="background-color: #00bcd4; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
					<div class="mT-30">
							<h3 class="c-grey-900">Assign teacher in class {{$class}}</h3>
							<hr>
						<form action="{{url('class-teachers/assign-class-teacher')}}" method="POST" >
							@csrf
							<input type="hidden" name="class" value="{{$class}}">
							@foreach ($sections as $section)
							<div class="row">
									<label class="col-2 text-right">Section: {{$section->section}}</label>
									<label class="col-form-label col-3 text-right">Teacher</label>

									@php
											$class_teacher = App\ClassTeacher::where([
												'class' => $class,
												'section' => $section->section
											])->first();
									@endphp

									<select class="form-control col-5" name="teacher_ids[]">
										@isset($class_teacher)
										<option value="{{$class_teacher->teacher_id}}">{{$class_teacher->teacher->name}}</option>
										<option value="" disabled>  -------------------  </option>	
										<option value="">None</option>
										@else
											<option value="">Select Teacher</option>
										@endisset
										
										@foreach ($all_teacher as $teacher)
											<option value="{{$teacher->user_id}}">{{$teacher->name}}</option>
										@endforeach
									</select>
								</div>
								<hr>
								<input type="hidden" name="sections[]" value="{{$section->section}}">
							@endforeach
							
              <div class="row justify-content-center">
								<button type="submit" class="form-group btn btn-primary col-2">Add Section</button>
							</div>
            </form>
					</div>
			</div>
		</div>
	</div>

@endsection