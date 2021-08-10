<nav class="navbar navbar-expand-lg navbar-light" id="mainNavbar">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('frontend')}}/assets/home/Group 2301.png" alt="" class="img-fluid" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            {{-- <a class="nav-link" href="{{ route('site', ['tracking']) }}">Tracking</a> --}}
            <a class="nav-link" href="{{ route('site',['tracking']) }}">Tracking</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="{{ route('site',['location']) }}">Location</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="{{ route('site',['about']) }}">About US</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="{{ route('site',['service']) }}">Service</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="{{ route('site',['faq']) }}">FAQ</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="{{ route('site',['help']) }}">Help</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="{{ route('site',['offers']) }}">Offers</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="{{ route('site',['store']) }}">Shop store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
