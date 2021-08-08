<nav class="navbar navbar-expand-lg navbar-light" id="mainNavbar">
    <div class="container">
      <a class="navbar-brand" href="#">
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
            <a class="nav-link" href="{{ route('site', ['tracking']) }}">Tracking</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="location.html">Location</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="about.html">About US</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="service.html">Service</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="faq.html">FAQ</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="help.html">Help</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="offers.html">Offers</a>
          </li>
          <li class="nav-item ml-lg-3">
            <a class="nav-link" href="store.html">Shop store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
