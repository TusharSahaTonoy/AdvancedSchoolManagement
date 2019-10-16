<div class="container-fluid align-items-center">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12">
      
    </div>
    
    <div class="col-lg-10 col-md-10 col-sm-12">
      {{-- success --}}
      @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <span class="alert-inner--text"><strong>Success!</strong> {{ Session::get('success') }}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

      @if(Session::has('successes'))
        @if (count(Session::get('successes'))>0)
          @foreach (Session::get('successes') as $mgs)
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--text"><strong>Success!</strong> {{ $mgs }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endforeach
        @endif
      @endif

      {{-- error --}}
      @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <span class="alert-inner--text"><strong>Error!</strong> {{ Session::get('error') }}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      @if(Session::has('_errors'))
        @if (count(Session::get('_errors'))>0)
          @foreach (Session::get('_errors') as $mgs)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-inner--text"><strong>Error!</strong> {{ $mgs }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endforeach
        @endif
      @endif

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

      {{-- info --}}
      @if(Session::has('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          <span class="alert-inner--text"><strong>Tip!</strong> {{ Session::get('info') }}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
    </div>
  </div>
</div>