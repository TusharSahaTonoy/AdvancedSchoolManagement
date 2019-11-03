
@php
  $student = App\Student::where('user_id',Auth::user()->user_id)->first();
@endphp

<div class="row justify-content-center">
  <div class="col-md-8 col-sm-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        
      <h3 class="c-grey-900 text-center">Other Information</h3>
      <hr>

      {{-- student parents info --}}
      <h5 class="c-grey-900">Student School Info</h5>
      <br>
      <div class="row">
        <div class="form-group col-6"><label>Student Class</label>
          <select id="class" name="class" class="form-control" disabled>
            <option value="{{$student->school->class}}">{{$student->school->class}}</option>
          </select>
        </div>

        <div class="form-group col-6"><label>Section</label> 
          <select id="section" class="form-control" name="section" disabled>
            <option value="{{$student->school->section}}">{{$student->school->section}}</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-4"><label>Roll</label> 
          <input type="text" name="roll" value="{{$student->school->roll}}" class="form-control" disabled>
        </div>
        <div class="form-group col-8"><label>Guide Teacher</label> 
          <select  name="guide_teacher" class="form-control" disabled>
            <option value="{{$student->school->guide_teacher}}">{{$student->school->guide_teacher}}</option>
          </select>
        </div>
      </div>

      {{-- student basic info --}}
      <h5 class="c-grey-900">Student Basic Info</h5>
      <br>
      <div class="form-group"><label>Student name</label> 
        <input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="Full name" disabled>
      </div>
      <div class="form-group"><label>Gender</label>
        <select name="gender" class="form-control" disabled>
          <option value="{{$student->gender}}">{{$student->gender}}</option>
        </select>
      </div>
      <div class="form-group"><label>Relegion</label> 
        <select name="religion" class="form-control" disabled>
          <option value="{{$student->religion}}">{{$student->religion}}</option>
        </select>
      </div>


      <div class="form-group"><label>Date of birth</label> 
        <div class="timepicker-input input-icon form-group">
          <div class="input-group">
            <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
            <input type="text" class="form-control bdc-grey-200 start-date" name="dob" value="{{$student->dob}}" data-date-format="yyyy-mm-dd" placeholder="choose date" disabled  > 
          </div>
        </div>
      </div>

      <div class="form-group"><label>Admission Date</label> 
        <div class="timepicker-input input-icon form-group">
          <div class="input-group">
            <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
            <input type="text" class="form-control bdc-grey-200 start-date" name="admission_date" value="{{$student->admission_date}}" data-date-format="yyyy-mm-dd" placeholder="choose date" disabled >
          </div>
        </div>
      </div>
      
      <div class="form-group"><label>Present Address</label> 
        <input type="text" name="present_address" value="{{$student->present_address}}" class="form-control" placeholder="" maxlength="190" disabled>
      </div>

      <div class="form-group"><label>Permanent Address</label> 
        <input type="text" name="permanent_address" value="{{$student->permanent_address}}" class="form-control" placeholder="" maxlength="190" disabled>
      </div>

      <div class="form-group"><label>Student Image </label> 
        <img src="{{asset('storage/student/'.$student->image)}}" alt="Image" style="width:250px; heigth:260px;">
      </div>

      {{-- student parents info --}}
      <br>
      <h5 class="c-grey-900">Student Parents Info</h5>
      
      <div class="form-group"><label>Student father name</label> 
        <input type="text" name="father_name" value="{{$student->parents->father_name}}" class="form-control" placeholder="Full name" disabled>
      </div>
      
      <div class="form-group"><label>Father Occupation</label> 
        <input type="text" name="father_occu" value="{{$student->parents->father_occu}}" class="form-control" disabled>
      </div>

      <div class="form-group"><label>Father Mobile no.</label> 
        <input type="text" name="father_mobile" value="{{$student->parents->father_mobile}}" class="form-control" minlength="11" maxlength="11" placeholder="input 11 degit of phone" disabled>
      </div>

      <div class="form-group"><label>Father Image</label> 
        <img src="{{asset('storage/father/'.$student->parents->father_image)}}" alt="Image" style="width:250px; heigth:260px;">
      </div>

      <div class="form-group"><label>Mother name</label> 
        <input type="text" name="mother_name" value="{{$student->parents->mother_name}}" class="form-control" disabled>
      </div>

      <div class="form-group"><label>Mother Occupation</label> 
        <input type="text" name="mother_occu" value="{{$student->parents->mother_occu}}" class="form-control" disabled>
      </div>

      <div class="form-group"><label>Mother Mobile</label> 
        <input type="text" name="mother_mobile" value="{{$student->parents->mother_mobile}}" class="form-control" minlength="11" maxlength="11" placeholder="input 11 degit of phone" disabled>
      </div>

      <div class="form-group"><label>Mother Image</label> 
        <img src="{{asset('storage/mother/'.$student->parents->mother_image)}}" alt="Image" style="width:250px; heigth:260px;">
      </div>
  
    </div>
  </div>
</div>
