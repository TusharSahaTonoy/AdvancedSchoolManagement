<!doctype html>
<html>

<head>
  @include('layouts.head')
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script>window.addEventListener('load', function load() {
      const loader = document.getElementById('loader');
      setTimeout(function () {
        loader.classList.add('fadeOut');
      }, 300);
    });</script>
    
  <div class="peers ai-s fxw-nw h-100vh">
    <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv"
      style="background-image:url({{asset('images/company.png')}})">
      <div class="pos-a centerXY">
        <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px"><img class="pos-a centerXY"
            src="{{asset('images/logo.png')}}" alt=""></div>
      </div>
    </div>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
      <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
      @if (count($errors)>0)
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-inner--text"><strong>Error!</strong> {{ $error }} </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endforeach
        @endif

      <form action="{{url('login')}}" method="post">
        @csrf
        <div class="form-group"><label class="text-normal text-dark">User ID</label> <input type="text"
            class="form-control" name="user_id" value="admin"></div>
        <div class="form-group"><label class="text-normal text-dark">Password</label> <input type="password"
            class="form-control" name="password" value="123456"></div>
        <div class="form-group">
          <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
              <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" name="remember" class="peer"> <label class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Remember Me</span></label></div>
            </div>
            <div class="peer"><button type="submit" class="btn btn-primary">Login</button></div>
          </div>
        </div>
      </form>
    </div>
  </div>
	@include('layouts.scripts')
</body>

</html>