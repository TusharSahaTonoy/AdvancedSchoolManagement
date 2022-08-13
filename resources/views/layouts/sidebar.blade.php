<div class="sidebar">
    <div class="sidebar-inner">
      <div class="sidebar-logo">
        <div class="peers ai-c fxw-nw">
          <div class="peer peer-greed"><a class="sidebar-link td-n" href="{{url('/')}}">
              <div class="peers ai-c fxw-nw">
                <div class="peer">
                  <div class="logo"><img class="bdrs-50p w-4r h-3r" src="{{asset("images/logo_black.png")}}" alt="Logo"></div>
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
        @else
        
        @endauth
        <li class="nav-item dropdown"><a class="sidebar-link" href="{{url('notice-board')}}">
          <span class="icon-holder"><i class="far fa-clipboard" style="font-size: 28px;"></i> </span>
          <span class="title">Notice</span></a>
        </li>
      </ul>
    </div>
  </div>