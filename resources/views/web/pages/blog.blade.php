@extends('web.layouts.master')


@section('title')
Blog Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-service text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">BLOG</h1>
    <p>Home - Blog</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<section class="section-blog-container">
    <div class="container">
      <!-- Main divider  -->
      <div class="row">
        <div class="col-lg-8 mb-3 mb-lg-4">
          <main>
            <!-- Blog row -->
            <div class="row align-items-center mb-3 mb-md-4">
              <div class="col-md-6 align-self-start">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Image 1.jpg"
                  alt=""
                  class="img-fluid h-100 mb-3 mb-md-0"
                />
              </div>
              <div class="col-md-6">
                <h3 class="heading-blog text-gray-dark font-weight-bold">
                  Lorem ipsum dolor sit, amet consectetur adipisicing.
                </h3>
                <small class="text-gray-light">
                  By<span class="text-gray-dark mx-1">ADMIN</span>
                  <img src="{{asset('frontend')}}/assets/Blog/time.png" class="blog-meta-icon" />
                  December 30, 2021
                  <i class="fa fa-comment text-primary ml-1"></i> 3
                  comments</small
                >
                <p class="text-small pt-2">
                  It is a paradisematic country, in which roasted parts of
                  sentences fly into your mouth. Even the all-powerful
                  Pointing has roasted parts of sentences fly into your mouth
                </p>
                <a href="{{ route('site',['single_blog']) }}" class="btn btn-primary px-3">Read more</a>
              </div>
            </div>
            <!-- Blog row -->
            <div class="row align-items-center mb-3 mb-md-4">
              <div class="col-md-6 align-self-start">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Image2.jpg"
                  alt=""
                  class="img-fluid h-100 mb-3 mb-md-0"
                />
              </div>
              <div class="col-md-6">
                <h3 class="heading-blog text-gray-dark font-weight-bold">
                  Lorem ipsum dolor sit, amet consectetur adipisicing.
                </h3>
                <small class="text-gray-light">
                  By<span class="text-gray-dark mx-1">ADMIN</span>
                  <img src="{{asset('frontend')}}/assets/Blog/time.png" class="blog-meta-icon" />
                  December 30, 2021
                  <i class="fa fa-comment text-primary ml-1"></i> 3
                  comments</small
                >
                <p class="text-small pt-2">
                  It is a paradisematic country, in which roasted parts of
                  sentences fly into your mouth. Even the all-powerful
                  Pointing has roasted parts of sentences fly into your mouth
                </p>
                <a href="#" class="btn btn-primary px-3">Read more</a>
              </div>
            </div>
            <!-- Blog row -->
            <div class="row align-items-center mb-3 mb-md-4">
              <div class="col-md-6 align-self-start">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Image3.jpg"
                  alt=""
                  class="img-fluid h-100 mb-3 mb-md-0"
                />
              </div>
              <div class="col-md-6">
                <h3 class="heading-blog text-gray-dark font-weight-bold">
                  Lorem ipsum dolor sit, amet consectetur adipisicing.
                </h3>
                <small class="text-gray-light">
                  By<span class="text-gray-dark mx-1">ADMIN</span>
                  <img src="{{asset('frontend')}}/assets/Blog/time.png" class="blog-meta-icon" />
                  December 30, 2021
                  <i class="fa fa-comment text-primary ml-1"></i> 3
                  comments</small
                >
                <p class="text-small pt-2">
                  It is a paradisematic country, in which roasted parts of
                  sentences fly into your mouth. Even the all-powerful
                  Pointing has roasted parts of sentences fly into your mouth
                </p>
                <a href="#" class="btn btn-primary px-3">Read more</a>
              </div>
            </div>
            <!-- Blog row -->
            <div class="row align-items-center mb-3 mb-md-4">
              <div class="col-md-6 align-self-start">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Image4.jpg"
                  alt=""
                  class="img-fluid h-100 mb-3 mb-md-0"
                />
              </div>
              <div class="col-md-6">
                <h3 class="heading-blog text-gray-dark font-weight-bold">
                  Lorem ipsum dolor sit, amet consectetur adipisicing.
                </h3>
                <small class="text-gray-light">
                  By<span class="text-gray-dark mx-1">ADMIN</span>
                  <img src="{{asset('frontend')}}/assets/Blog/time.png" class="blog-meta-icon" />
                  December 30, 2021
                  <i class="fa fa-comment text-primary ml-1"></i> 3
                  comments</small
                >
                <p class="text-small pt-2">
                  It is a paradisematic country, in which roasted parts of
                  sentences fly into your mouth. Even the all-powerful
                  Pointing has roasted parts of sentences fly into your mouth
                </p>
                <a href="#" class="btn btn-primary px-3">Read more</a>
              </div>
            </div>
            <!-- Pagination  -->
            <div class="pagination-blog pt-3 pt-md-5">
              <div class="container">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a
                        class="page-link font-weight-bold text-gray-dark"
                        href="#"
                        >1</a
                      >
                    </li>
                    <li class="page-item active mx-sm-2">
                      <a
                        class="page-link font-weight-bold text-gray-dark"
                        href="#"
                        >2</a
                      >
                    </li>
                    <li class="page-item mx-sm-2">
                      <a
                        class="page-link font-weight-bold text-gray-dark"
                        href="#"
                        >3</a
                      >
                    </li>
                    <span class="mx-4 text-gray-dark">...</span>
                    <li class="page-item mx-sm-2">
                      <a
                        class="page-link font-weight-bold text-gray-dark"
                        href="#"
                        >6</a
                      >
                    </li>
                    <li class="page-item mx-sm-2">
                      <a
                        class="page-link font-weight-bold text-gray-dark"
                        href="#"
                        >7</a
                      >
                    </li>
                    <li class="page-item mx-sm-2">
                      <a
                        class="page-link font-weight-bold text-gray-dark"
                        href="#"
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
        </div>
        <div class="col-lg-4">
          <div>
            <!-- Sidcebar  -->
            <div class="subscribe bg-light py-4 px-3">
              <p class="text-small text-gray-dark">
                Subscribe to our mailing list to receives daily updates direct
                to your inbox!
              </p>
              <form class="form-inline">
                <input
                  class="form-control w-65 mb-3 mb-sm-0"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-primary w-35" type="submit">
                  Sign up
                </button>
              </form>
              <p class="text-small py-2 text-gray-dark">
                *we hate spam as much as you do
              </p>
            </div>
          </div>
          <div class="miss-out-section py-5">
            <h3
              class="
                sidebar-title
                w-75
                text-gray-dark
                font-weight-bold
                mb-2 mb-md-3
              "
            >
              Dont't miss out
            </h3>
            <!-- sidebar row -->
            <div class="row align-items-center py-3">
              <div class="col-5">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Rectangle1.jpg"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-7">
                <h5 class="text-gray-dark font-weight-bold miss-blog-heading">
                  Maecenas tempus, tellus eget entum rhoncus, sem quam
                  sempquam nunc, blandit vel
                </h5>
                <small class="text-gray-light-2">2 day ago</small>
              </div>
            </div>
            <!-- sidebar row -->
            <div class="row align-items-center py-3">
              <div class="col-5">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Rectangle2.jpg"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-7">
                <h5 class="text-gray-dark font-weight-bold miss-blog-heading">
                  Maecenas tempus, tellus eget entum rhoncus, sem quam
                  sempquam nunc, blandit vel
                </h5>
                <small class="text-gray-light-2">2 day ago</small>
              </div>
            </div>
            <!-- sidebar row -->
            <div class="row align-items-center py-3">
              <div class="col-5">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Rectangle 3.jpg"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-7">
                <h5 class="text-gray-dark font-weight-bold miss-blog-heading">
                  Maecenas tempus, tellus eget entum rhoncus, sem quam
                  sempquam nunc, blandit vel
                </h5>
                <small class="text-gray-light-2">2 day ago</small>
              </div>
            </div>
            <!-- sidebar row -->
            <div class="row align-items-center py-3">
              <div class="col-5">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Rectangle 4.jpg"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-7">
                <h5 class="text-gray-dark font-weight-bold miss-blog-heading">
                  Maecenas tempus, tellus eget entum rhoncus, sem quam
                  sempquam nunc, blandit vel
                </h5>
                <small class="text-gray-light-2">2 day ago</small>
              </div>
            </div>
            <!-- sidebar row -->
            <div class="row align-items-center py-3">
              <div class="col-5">
                <img
                  src="{{asset('frontend')}}/assets/Blog/Rectangle Copy 2.jpg"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-7">
                <h5 class="text-gray-dark font-weight-bold miss-blog-heading">
                  Maecenas tempus, tellus eget entum rhoncus, sem quam
                  sempquam nunc, blandit vel
                </h5>
                <small class="text-gray-light-2">2 day ago</small>
              </div>
            </div>
          </div>
          <div class="section-instagram-gallery py-5 d-none d-sm-block">
            <h3
              class="
                sidebar-title
                w-75
                text-gray-dark
                font-weight-bold
                mb-2 mb-md-3
              "
            >
              Instagram Gallery
            </h3>
            <div class="row">
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image2.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image 1.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image3.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image4.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image5.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image 1.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image2.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4">
                <img src="{{asset('frontend')}}/assets/Blog/Image3.jpg" class="img-fluid" alt="" />
              </div>
              <div class="col-4 instagram-gallery-more bg-light">
                <img src="{{asset('frontend')}}/assets/Blog/Image4.jpg" class="img-fluid" alt="" />
                <div class="instagram-gallery-text text-white">+35</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   {{-- link section --}}
   @include('web.layouts.sections.link')
   {{-- link section --}}
@endsection


@section('style')
@endsection

@section('script')
@endsection
