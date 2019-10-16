<!doctype html>
<html>

<head>
  @include('layouts.head')
	  
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>

  <div>
		{{-- sidebar --}}
		@include('layouts.sidebar')

    <div class="page-container">
			{{-- topbar --}}
			@include('layouts.topbar')
			
      <main class="main-content bgc-grey-100">

          @include('layouts.message')

				<div class="container-fluid">
					@yield('content')
				</div>
      </main>
      {{-- footer --}}
      <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2017 Designed by Colorlib. All rights reserved.</span>
      </footer>

    </div>
  </div>
  @include('layouts.scripts')
</body>

</html>