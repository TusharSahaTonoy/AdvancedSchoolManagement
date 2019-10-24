<div class="header navbar">
    <div class="header-container">
      {{-- left ul --}}
      <ul class="nav-left">
        <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
        </li>
        {{-- search --}}
        <li class="search-box">
          <a class="search-toggle no-pdd-right" href="javascript:void(0);">
            <i class="search-icon ti-search pdd-right-10"></i>
            <i class="search-icon-close ti-close pdd-right-10"></i>
          </a>
        </li>
        <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>
      </ul>
      
      <ul class="nav-right">

        {{-- notifications --}}
        {{-- <li class="notifications dropdown"><span class="counter bgc-red">3</span> <a href=""
            class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
          <ul class="dropdown-menu">
            <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span
                class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
            <li>
              <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                    <div class="peer mR-15"><img class="w-3r bdrs-50p"
                        src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                    <div class="peer peer-greed"><span><span class="fw-500">John Doe</span> <span
                          class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
                      <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                    </div>
                  </a></li>
                <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                    <div class="peer mR-15"><img class="w-3r bdrs-50p"
                        src="https://randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                    <div class="peer peer-greed"><span><span class="fw-500">Moo Doe</span> <span
                          class="c-grey-600">liked your <span class="text-dark">cover image</span></span></span>
                      <p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
                    </div>
                  </a></li>
                <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                    <div class="peer mR-15"><img class="w-3r bdrs-50p"
                        src="https://randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                    <div class="peer peer-greed"><span><span class="fw-500">Lee Doe</span> <span
                          class="c-grey-600">commented on your <span class="text-dark">video</span></span></span>
                      <p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
                    </div>
                  </a></li>
              </ul>
            </li>
            <li class="pX-20 pY-15 ta-c bdT"><span><a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All
                  Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
          </ul>
        </li> --}}
      
        {{--   <li>
          <a href="" class="peers fxw-nw ai-c lh-1">
            <div class="peer mR-10"><i class="fas fa-book" style="font-size: 30px; color:deepskyblue"></i></div>
            <div class="peer"><span class="fsz-sm c-grey-900">User Guide</span></div>
          </a>
        </li> --}}

        @auth
          <li class="dropdown"><a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1"
            data-toggle="dropdown">
            <div class="peer mR-10"><img class="w-2r bdrs-50p" src="{{asset('images/user.png')}}"
                alt=""></div>
            <div class="peer"><span class="fsz-sm c-grey-900 text-uppercase">{{Auth::user()->type}}</span></div>
          </a>
          <ul class="dropdown-menu fsz-md">
            <li><a href="javascript:void(0);" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class=" mR-10"></i>
              <span>{{Auth::user()->user_name}}</span></a>
            </li>
            <li role="separator" class="divider"></li>

            <li><a href="{{url('/profile')}}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="far fa-user mR-10"></i>
              <span>Profile</span></a></li>
            <li><a id="btn_change_pass" href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="fas fa-key mR-10"></i>
              <span>Change Password</span></a></li>
            {{-- 
            <li><a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i>
                <span>Messages</span></a></li>
            <li role="separator" class="divider"></li> --}}
            <li role="separator" class="divider"></li>
            <li>
              <a href="javascript:void(0);" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mR-10"></i>
                <span>Logout</span>
              </a>
            </li>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </ul>
        </li>
        @else    
          <li>
            <a id="sidebar-toggle" href="{{url('login')}}" class="peers fxw-nw ai-c lh-1">
              <div class="peer mR-10"><i class="text-info fas fa-sign-in-alt" style="font-size: 30px; color:deepskyblue"></i></div>
              <div class="peer"><span class="fsz-sm c-grey-900">Login</span></div>
            </a>
          </li>
        @endauth
        
        
      </ul>
    </div>
  </div>

  {{-- change password --}}
  @include('user.change_pass')