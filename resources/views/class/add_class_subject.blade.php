@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
					<div class="mT-30">
						<h3 class="c-grey-900">Add A Subject In Class</h3>

						<form action="{{url('class/add-subject')}}" method="POST" >
							@csrf
              <div class="row">
                <div class="form-group col-md-3 col-sm-12"><label>Class</label> 
                  <select name="class" class="form-control" required>
                    <option value="">choose a class</option>
                    @foreach (range(1,8) as $class)
                        <option value="{{$class}}">{{$class}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-3 col-sm-12"><label>Subject Code</label>
                  <input type="text" name="subject_id" class="form-control" placeholder="" required>
                </div>
                <div class="form-group col-md-3 col-sm-12"><label>Subject Name</label>
                  <input type="text" name="subject_name" class="form-control" placeholder="" required>
                </div>
                <div class="form-group col-md-3 col-sm-12"><label>Subject Total Mark</label>
                  <input type="number" name="subject_mark" class="form-control" placeholder="" required max="100" min="1">
                </div>
                
              </div>
              <br>
              <div class="row justify-content-center">
                <button type="submit" class="form-group btn btn-primary ol-md-2 col-sm-3">Add Subject</button>
              </div>
            </form>
            <br>
            <br>
            <h2 class="c-grey-900 text-center">Class Subject list</h2>
            <hr>
            
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Class</th>
                  <th>Total Subjects</th>
                  <th>All Subjects</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\ClassSubject::select('class')->groupBy('class')->get() as $class)
                  <tr>
                    <td>{{$class->class}}</td>
                    <td>{{App\ClassSubject::where('class',$class->class)->count()}}</td>
                    <td>
                      @foreach (App\ClassSubject::where('class',$class->class)->get() as $subject)
                          {{$subject->subject_name}}<br>
                      @endforeach
                    </td>
                    <td>Edit</td>
                  </tr>

                @endforeach
              </tbody>
            </table>

					</div>
			</div>
		</div>
	</div>

@endsection