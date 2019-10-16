<div class="sidebar">
    <div class="sidebar-inner">
      <div class="sidebar-logo">
        <div class="peers ai-c fxw-nw">
          <div class="peer peer-greed"><a class="sidebar-link td-n" href="index.html">
              <div class="peers ai-c fxw-nw">
                <div class="peer">
                  <div class="logo"><img src="{{asset("images/logo.png")}}" alt=""></div>
                </div>
                <div class="peer peer-greed">
                  <h5 class="lh-1 mB-0 logo-text">Company limited</h5>
                </div>
              </div>
            </a></div>
          <div class="peer">
            <div class="mobile-toggle sidebar-toggle"><a href="javascript:void(0);" class="td-n"><i class="ti-arrow-circle-left"></i></a>
            </div>
          </div>
        </div>
      </div>
      <ul class="sidebar-menu scrollable pos-r">

        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
            <span class="title">Admin</span> <span class="arrow"><i class="ti-angle-right"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown"><a href="{{url('admin/all')}}"><span>Admin List</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('user/all')}}"><span>All Users</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('admin/add')}}"><span>Add Admin</span></a></li>  
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
            <span class="title">Teacher</span> <span class="arrow"><i class="ti-angle-right"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown"><a href="{{url('teacher/list')}}"><span>All Teachers</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('teacher/add')}}"><span>Add Teacher</span></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
            <span class="title">Student</span> <span class="arrow"><i class="ti-angle-right"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown"><a href="{{url('student/all')}}"><span>All Students</span></a></li>
            <li class="nav-item dropdown"><a href="{{-- {{url('dev/add')}} --}}"><span>All Parents</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('student/add')}}"><span>Add Student</span></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
            <span class="title">Class</span> <span class="arrow"><i class="ti-angle-right"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown"><a href="{{url('class/all-classes')}}"><span>Classes Details</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('class/add-section')}}"><span>Add Section</span></a></li>

            <li class="nav-item dropdown"><a href="{{url('class/add-subject')}}"><span>Add Subject</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('class/add-section')}}"><span>Assign Class Teacher</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('class/assign-subject-teacher')}}"><span>Assign Subject Teacher</span></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
            <span class="title">Attendance</span> <span class="arrow"><i class="ti-angle-right"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown"><a href="{{url('attendance')}}"><span>All Classes</span></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
            <span class="title">Mark</span> <span class="arrow"><i class="ti-angle-right"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown"><a href="{{url('mark/all-subjects')}}"><span>Give Mark</span></a></li>
            <li class="nav-item dropdown"><a href="{{url('mark/all-subjects')}}"><span>Class Marks Report</span></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown"><a class="sidebar-link" href="{{url('result')}}">
          <span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span>
          <span class="title">Result</span></a>
        </li>
        {{-- single --}}
        {{-- <li class="nav-item mT-30 actived"><a class="sidebar-link" href="index.html">
          <span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span>
          <span class="title">Users</span></a>
        </li> --}}

        {{-- multiple --}}
        {{-- <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);">
          <span
              class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
              <span class="title">Multiple
              Levels</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span></a></li>
            <li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span> <span class="arrow"><i
                    class="ti-angle-right"></i></span></a>
              <ul class="dropdown-menu">
                <li><a href="javascript:void(0);">Menu Item</a></li>
                <li><a href="javascript:void(0);">Menu Item</a></li>
              </ul>
            </li>
          </ul>
        </li> --}}
      </ul>
    </div>
  </div>