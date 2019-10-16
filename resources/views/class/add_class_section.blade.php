@extends('layouts.main')

@section('content')

	<div class="row justify-content-center">
			<div class="col-12" style="background-color: wheat; border-radius: 30px;">
				<div class="bgc-white bd bdrs-3 p-20 mB-20">
					<div class="mT-30">
						<h3 class="c-grey-900">Add A section in class</h3>

						<form action="{{url('class/add-section')}}" method="POST" >
							@csrf
              <div class="row">
                <div class="form-group col-5"><label>Class</label> 
                  <select name="class" class="form-control" required>
                    <option value="">choose a class</option>
                    @foreach (range(1,8) as $class)
                        <option value="{{$class}}">{{$class}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-5"><label>Section</label>
                  <input type="text" name="section" class="form-control" placeholder="" required>
                </div>
                <button type="submit" class="form-group btn btn-primary col-2">Add Section</button>
              </div>
            </form>
            <br>
            <br>
            <h2 class="c-grey-900 text-center">Class Section list</h2>
            <hr>
            
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Class</th>
                  <th>Sections(Teachers)</th>
                  <th>Total Sections</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\ClassSection::select('class')->groupBy('class')->get() as $class)
                  <tr>
                    <td>{{$class->class}}</td>
                    <td>
                      @foreach (App\ClassSection::select('section')->where('class',$class->class)->get() as $section)
                          {{$section->section}} 
                          @php
                            $teacher = App\ClassTeacher::where([
                            'class' =>$class->class,
                            'section' =>$section->section,
                            ])->first();
                          @endphp
                          @isset($teacher)
                            ({{$teacher->teacher->name}}),
                          @else
                            <span class="text-white bg-danger">(not set)</span>,
                          @endisset
                          <br>
                      @endforeach
                    </td>
                    <td>{{App\ClassSection::select('section')->where('class',$class->class)->count()}}</td>
                    <td> <a href="{{url('class/assign-class-teacher',$class->class)}}" class="btn btn-info">Assign Class Teacher</a></td>
                  </tr>

                @endforeach
              </tbody>
            </table>

					</div>
			</div>
		</div>
  </div>
  

@endsection