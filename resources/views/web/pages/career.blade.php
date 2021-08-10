@extends('web.layouts.master')


@section('title')
Carrer Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-career text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Career</h1>
    <p class="text-white">Home - Career</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<main class="py-3 py-md-5">
    <!-- Job menu tab  -->
    <div class="container">
      <div class="row">
        <div class="col">
          <ul
            class="nav nav-pills mb-3 tab-horizontal"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link py-3 text-gray-dark font-weight-bold active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#all-jobs"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                All</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link py-3 text-gray-dark font-weight-bold"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#technical-jobs"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                Technical</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link py-3 text-gray-dark font-weight-bold"
                id="pills-contact-tab"
                data-toggle="pill"
                href="#marketing-jobs"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Marketing</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link py-3 text-gray-dark font-weight-bold"
                id="pills-travel-tab"
                data-toggle="pill"
                href="#sale-jobs"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Sales</a
              >
            </li>
          </ul>
        </div>
      </div>
      <!-- Content job  -->
      <div class="tab-content bg-white h-75 my-3" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="all-jobs"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
        >
          <!-- Single row  -->
          <div class="row bg-light career-box mb-3 mb-md-4">
            <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
              <img src="{{asset('frontend')}}/assets/Career/1.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-md-7 col-lg-8 p-2 pr-md-3">
              <div
                class="
                  career-box__header
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <h3
                  class="
                    text-gray-dark
                    font-weight-bold
                    pl-3 pl-md-0
                    mr-2 mr-lg-4
                  "
                >
                  UI UX DESIGNER
                </h3>
                <h3 class="text-gray-dark d-none d-lg-block mr-auto">
                  Posted : <span class="text-gray-light">2 Days ago</span>
                </h3>
                <a href="{{ route('page',['career_details']) }}" class="btn btn-primary px-3 mr-3">Apply Now</a>
              </div>
              <h3 class="my-3 pl-3 pl-md-0">
                <strong class="text-gray-dark">Job type:</strong>
                <span> Full Time</span>
              </h3>
              <h3 class="mb-3 pl-3 pl-md-0">Requirements:</h3>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est
              </p>
              <a
                href="#"
                class="
                  career-box__btn
                  text-gray-dark
                  font-weight-bold
                  pl-3 pl-md-0
                "
                >View details</a
              >
            </div>
          </div>
          <div class="row bg-light career-box mb-3 mb-md-4">
            <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
              <img src="{{asset('frontend')}}/assets/Career/1.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-md-7 col-lg-8 p-2 pr-md-3">
              <div
                class="
                  career-box__header
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <h3
                  class="
                    text-gray-dark
                    font-weight-bold
                    pl-3 pl-md-0
                    mr-2 mr-lg-4
                  "
                >
                  WEB DESIGNER
                </h3>
                <h3 class="text-gray-dark d-none d-lg-block mr-auto">
                  Posted : <span class="text-gray-light">2 Days ago</span>
                </h3>
                <a href="#" class="btn btn-primary px-3 mr-3">Apply Now</a>
              </div>
              <h3 class="my-3 pl-3 pl-md-0">
                <strong class="text-gray-dark">Job type:</strong>
                <span> Full Time</span>
              </h3>
              <h3 class="mb-3 pl-3 pl-md-0">Requirements:</h3>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est
              </p>
              <a
                href="#"
                class="
                  career-box__btn
                  text-gray-dark
                  font-weight-bold
                  pl-3 pl-md-0
                "
                >View details</a
              >
            </div>
          </div>
          <div class="row bg-light career-box mb-3 mb-md-4">
            <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
              <img src="{{asset('frontend')}}/assets/Career/1.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-md-7 col-lg-8 p-2 pr-md-3">
              <div
                class="
                  career-box__header
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <h3
                  class="
                    text-gray-dark
                    font-weight-bold
                    pl-3 pl-md-0
                    mr-2 mr-lg-4
                  "
                >
                  VIDEO EDITOR
                </h3>
                <h3 class="text-gray-dark d-none d-lg-block mr-auto">
                  Posted : <span class="text-gray-light">2 Days ago</span>
                </h3>
                <a href="#" class="btn btn-primary px-3 mr-3">Apply Now</a>
              </div>
              <h3 class="my-3 pl-3 pl-md-0">
                <strong class="text-gray-dark">Job type:</strong>
                <span> Full Time</span>
              </h3>
              <h3 class="mb-3 pl-3 pl-md-0">Requirements:</h3>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est
              </p>
              <a
                href="#"
                class="
                  career-box__btn
                  text-gray-dark
                  font-weight-bold
                  pl-3 pl-md-0
                "
                >View details</a
              >
            </div>
          </div>
        </div>
        <!-- Technical job content  -->
        <div
          class="tab-pane fade"
          id="technical-jobs"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <div class="row bg-light career-box mb-3 mb-md-4">
            <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
              <img src="{{asset('frontend')}}/assets/Career/1.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-md-7 col-lg-8 p-2 pr-md-3">
              <div
                class="
                  career-box__header
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <h3
                  class="
                    text-gray-dark
                    font-weight-bold
                    pl-3 pl-md-0
                    mr-2 mr-lg-4
                  "
                >
                  UI UX DESIGNER
                </h3>
                <h3 class="text-gray-dark d-none d-lg-block mr-auto">
                  Posted : <span class="text-gray-light">2 Days ago</span>
                </h3>
                <a href="#" class="btn btn-primary px-3 mr-3">Apply Now</a>
              </div>
              <h3 class="my-3 pl-3 pl-md-0">
                <strong class="text-gray-dark">Job type:</strong>
                <span> Full Time</span>
              </h3>
              <h3 class="mb-3 pl-3 pl-md-0">Requirements:</h3>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est
              </p>
              <a
                href="#"
                class="
                  career-box__btn
                  text-gray-dark
                  font-weight-bold
                  pl-3 pl-md-0
                "
                >View details</a
              >
            </div>
          </div>
        </div>
        <!-- Marketing job content  -->
        <div
          class="tab-pane fade"
          id="marketing-jobs"
          role="tabpanel"
          aria-labelledby="pills-contact-tab"
        >
          <div class="row bg-light career-box mb-3 mb-md-4">
            <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
              <img src="{{asset('frontend')}}/assets/Career/1.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-md-7 col-lg-8 p-2 pr-md-3">
              <div
                class="
                  career-box__header
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <h3
                  class="
                    text-gray-dark
                    font-weight-bold
                    pl-3 pl-md-0
                    mr-2 mr-lg-4
                  "
                >
                  Marketing
                </h3>
                <h3 class="text-gray-dark d-none d-lg-block mr-auto">
                  Posted : <span class="text-gray-light">2 Days ago</span>
                </h3>
                <a href="#" class="btn btn-primary px-3 mr-3">Apply Now</a>
              </div>
              <h3 class="my-3 pl-3 pl-md-0">
                <strong class="text-gray-dark">Job type:</strong>
                <span> Full Time</span>
              </h3>
              <h3 class="mb-3 pl-3 pl-md-0">Requirements:</h3>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est
              </p>
              <a
                href="#"
                class="
                  career-box__btn
                  text-gray-dark
                  font-weight-bold
                  pl-3 pl-md-0
                "
                >View details</a
              >
            </div>
          </div>
        </div>
        <!-- Sale job content  -->
        <div
          class="tab-pane fade"
          id="sale-jobs"
          role="tabpanel"
          aria-labelledby="pills-travel-tab"
        >
          <div class="row bg-light career-box mb-3 mb-md-4">
            <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
              <img src="{{asset('frontend')}}/assets/Career/1.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-md-7 col-lg-8 p-2 pr-md-3">
              <div
                class="
                  career-box__header
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <h3
                  class="
                    text-gray-dark
                    font-weight-bold
                    pl-3 pl-md-0
                    mr-2 mr-lg-4
                  "
                >
                  Sales job
                </h3>
                <h3 class="text-gray-dark d-none d-lg-block mr-auto">
                  Posted : <span class="text-gray-light">2 Days ago</span>
                </h3>
                <a href="#" class="btn btn-primary px-3 mr-3">Apply Now</a>
              </div>
              <h3 class="my-3 pl-3 pl-md-0">
                <strong class="text-gray-dark">Job type:</strong>
                <span> Full Time</span>
              </h3>
              <h3 class="mb-3 pl-3 pl-md-0">Requirements:</h3>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam
              </p>
              <p class="pl-3 pl-md-0">
                <i class="fa fa-angle-right mr-2"></i>et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est
              </p>
              <a
                href="#"
                class="
                  career-box__btn
                  text-gray-dark
                  font-weight-bold
                  pl-3 pl-md-0
                "
                >View details</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pagination  -->
    <div class="pagination-blog pt-3 pt-md-5">
      <div class="container">
        <nav aria-label="Page navigation example">
          <ul class="pagination offset-md-4">
            <li class="page-item">
              <a class="page-link font-weight-bold text-gray-dark" href="#"
                >1</a
              >
            </li>
            <li class="page-item active mx-sm-2">
              <a class="page-link font-weight-bold text-gray-dark" href="#"
                >2</a
              >
            </li>
            <li class="page-item mx-sm-2">
              <a class="page-link font-weight-bold text-gray-dark" href="#"
                >3</a
              >
            </li>
            <span class="mx-4 text-gray-dark">...</span>
            <li class="page-item mx-sm-2">
              <a class="page-link font-weight-bold text-gray-dark" href="#"
                >6</a
              >
            </li>
            <li class="page-item mx-sm-2">
              <a class="page-link font-weight-bold text-gray-dark" href="#"
                >7</a
              >
            </li>
            <li class="page-item mx-sm-2">
              <a class="page-link font-weight-bold text-gray-dark" href="#"
                >8</a
              >
            </li>
            <li class="page-item mx-sm-2">
              <a
                class="page-link font-weight-bold text-gray-dark"
                href="#"
                aria-label="Next"
              >
                <img src="{{asset('frontend')}}/assets/Blog/angle-right.jpg" alt="" />
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </main>

   {{-- link section --}}
   @include('web.layouts.sections.link')
   {{-- link section --}}
@endsection


@section('style')
@endsection

@section('script')
@endsection
