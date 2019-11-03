<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder"><i class="fas fa-chess-king" style="font-size: 28px;"></i></span>
    <span class="title">Admin</span> <span class="arrow"><i class="fas fa-angle-right" style="font-size: 15px;"></i></span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown"><a href="{{url('admin/all')}}"><span>Admin List</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('user/all')}}"><span>All Users</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('admin/add')}}"><span>Add Admin</span></a></li>  
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder"><i class="fas fa-chess-queen" style="font-size: 27px;"></i> </span>
    <span class="title">Teacher</span> <span class="arrow"><i class="fas fa-angle-right" style="font-size: 15px;"></i></span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown"><a href="{{url('teacher/list')}}"><span>All Teachers</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('teacher/add')}}"><span>Add Teacher</span></a></li>
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder"><i class="fas fa-chess-pawn" style="font-size : 33 px;"></i> </span>
    <span class="title">Student</span> <span class="arrow"><i class="fas fa-angle-right" style="font-size: 15px;"></i></span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown"><a href="{{url('student/all')}}"><span>All Students</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('student/add')}}"><span>Add Student</span></a></li>
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder"><i class="fas fa-chess-board" style="font-size: 25px;"></i> </span>
    <span class="title">Class</span> <span class="arrow"><i class="fas fa-angle-right" style="font-size: 15px;"></i></span>
  </a>
  <ul class="dropdown-menu">
    {{-- <li class="nav-item dropdown"><a href="{{url('class/all-classes')}}"><span>Classes Details</span></a></li> --}}
    <li class="nav-item dropdown"><a href="{{url('class/add-section')}}"><span>Add Section</span></a></li>

    <li class="nav-item dropdown"><a href="{{url('class/add-subject')}}"><span>Add Subject</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('class/add-section')}}"><span>Assign Class Teacher</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('class/assign-subject-teacher')}}"><span>Assign Subject Teacher</span></a></li>
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder"><i class="far fa-check-square" style="font-size: 30px;"></i> </span>
    <span class="title">Attendance</span> <span class="arrow"><i class="fas fa-angle-right" style="font-size: 15px;"></i></span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown"><a href="{{url('attendance')}}"><span>All Classes</span></a></li>
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder"><i class="far fa-file-alt" style="font-size: 30px"></i> </span>
    <span class="title">Mark</span> <span class="arrow"><i class="fas fa-angle-right" style="font-size: 15px;"></i></span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown"><a href="{{url('mark/all-subjects')}}"><span>Give Mark</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('mark/all-subjects')}}"><span>Class Marks Report</span></a></li>
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder"><i class="far fa-clipboard" style="font-size: 28px;"></i></span>
    <span class="title">Notice</span> <span class="arrow"><i class="fas fa-angle-right" style="font-size: 15px;"></i></span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown"><a href="{{url('notice/all')}}"><span>Notice List</span></a></li>
    <li class="nav-item dropdown"><a href="{{url('notice/add')}}"><span>Add Notice</span></a></li>  
  </ul>
</li>

<li class="nav-item dropdown"><a class="sidebar-link" href="{{url('result')}}">
  <span class="icon-holder"><i class="fas fa-chart-pie" style="font-size:30px"></i> </span>
  <span class="title">Result</span></a>
</li>