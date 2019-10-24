<div class="sidebar">
    <div class="sidebar-inner">
      <div class="sidebar-logo">
        <div class="peers ai-c fxw-nw">
          <div class="peer peer-greed"><a class="sidebar-link td-n" href="{{url('/')}}">
              <div class="peers ai-c fxw-nw">
                <div class="peer">
                  <div class="logo"><img class="bdrs-50p w-4r h-3r" src="{{asset("images/logo_black.PNG")}}" alt="Logo"></div>
                </div>
                <div class="peer peer-greed">
                  <h5 class="lh-1 mB-0 logo-text">Alphabet Smart IT</h5>
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
        
        @auth
          @if (Auth::user()->type == 'admin')
            @include('admin.sidebar_admin')
          @elseif(Auth::user()->type == 'teacher')
            @include('teacher.sidebar_teacher')
          @elseif(Auth::user()->type == 'student'|| Auth::user()->type == 'parents')
            @include('student.sidebar_student')
          @endif
        @endauth
        
        

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