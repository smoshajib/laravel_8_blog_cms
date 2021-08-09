@extends('web.layouts.master')


@section('title')
Blog Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-single text-center text-white">
    <h1 class="display-5 font-weight-bold mb-3">
      Lorem ipsum dolor sit amet.
    </h1>
    <p class="text-white">Home - Blog - Lorem ipsum dolor sit amet.</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<section class="section-blog-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <main>
            <img
              src="{{asset('frontend')}}/assets/Blog/Image5.jpg"
              alt=""
              class="img-fluid single-main-img mb-3"
            />
            <div class="single-content">
              <div class="single-meta">
                <small class="mr-3"
                  ><i class="fa fa-calendar mr-2 text-primary"></i>September
                  2021</small
                >
                <small class="mr-3"
                  ><i class="fa fa-user mr-2 text-primary"></i>Sara doe</small
                >
                <small class="mr-3"
                  ><i class="fa fa-comment mr-2 text-primary"></i>(06)</small
                >
              </div>
              <p class="my-3 single-paragraph">
                Extremely painful. Nor again is there anyone who loves or
                pursues or desires to obtain pain of itself, because it is
                pain, but because occasionally circumstances occur in which
                toil and pain can procure him some great pleasure. To take a
                trivial example, which of us ever
              </p>
              <h4 class="heading-single text-subheading font-weight-bold">
                But I must explain to you how all this mistaken
              </h4>
              <p class="single-paragraph">
                Idea of denouncing pleasure and praising pain was born and I
                will give you a complete account of the system, and expound
                the actual teachings of the great explorer of the truth, the
                master-builder of human happiness. No one rejects, dislikes,
                or avoids pleasure itself, because it is pleasure, but because
                those who do not know how to pursue pleasure rationally
                encounter consequences that are extremely painful. Nor again
                is there anyone who loves or pursues or desires to obtain pain
                of itself, because it is pain, but because occasionally
                circumstances occur in which toil and pain can procure him
                some great pleasure. To take a trivial example
              </p>
              <div class="row single-inner-img">
                <div class="col-6 col-sm-5">
                  <img
                    src="{{asset('frontend')}}/assets/Blog/blog details/Image two.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="col-6 col-sm-7">
                  <img
                    src="{{asset('frontend')}}/assets/Blog/blog details/Image.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <h4
                class="heading-single text-subheading font-weight-bold mt-3"
              >
                But I must explain to you how all this mistaken
              </h4>
              <p class="single-paragraph">
                Idea of denouncing pleasure and praising pain was born and I
                will give you a complete account of the system, and expound
                the actual teachings of the great explorer of the truth, the
                master-builder of human happiness. No one rejects, dislikes,
                or avoids pleasure itself, because it is pleasure, but because
                those who do not know how to pursue pleasure rationally
                encounter consequences that are extremely painful. Nor again
                is there anyone who loves or pursues or desires to obtain pain
                of itself, because it is pain, but because occasionally
                circumstances occur in which toil and pain can procure him
                some great pleasure. To take a trivial example
              </p>

              <div class="row single-inner-img mb-3 d-none d-sm-flex">
                <div class="col-sm-3">
                  <img
                    src="{{asset('frontend')}}/assets/Blog/blog details/Image three.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="col-sm-5">
                  <img
                    src="{{asset('frontend')}}/assets/Blog/blog details/Image.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="col-sm-4">
                  <img
                    src="{{asset('frontend')}}/assets/Blog/blog details/img.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <p class="my- 3 single-paragraph">
                Idea of denouncing pleasure and praising pain was born and I
                will give you a complete account of the system, and expound
                the actual teachings of the great explorer of the truth, the
                master-builder of human happiness. No one rejects, dislikes,
                or avoids pleasure itself, because it is pleasure, but because
                those who do not know how to pursue pleasure rationally
                encounter consequences that are extremely painful.
              </p>
              <p class="single-paragraph">
                Idea of denouncing pleasure and praising pain was born and I
                will give you a complete account of the system, and expound
                the actual teachings of the great explorer of the truth, the
                master-builder of human happiness. No one rejects, dislikes,
                or avoids pleasure itself, because it is pleasure, but because
                those who do not know how to pursue pleasure rationally
                encounter consequences that are extremely painful.
              </p>
            </div>
            <div class="share-posts mt-3 mt-md-4">
              <div
                class="
                  d-flex
                  justify-content-between
                  w-50
                  py-2
                  align-items-center
                  mx-auto
                "
              >
                <p class="font-weight-bold text-gray-dark mb-0">
                  Share this post
                </p>
                <div class="share-icons">
                  <a href="" class="text-white bg-primary text-center"
                    ><i class="fa fa-facebook"></i
                  ></a>
                  <a href="" class="text-white bg-gray text-center"
                    ><i class="fa fa-linkedin"></i
                  ></a>
                  <a href="" class="text-white bg-gray text-center"
                    ><i class="fa fa-twitter"></i
                  ></a>
                  <a href="" class="text-white bg-gray text-center"
                    ><i class="fa fa-telegram"></i
                  ></a>
                  <a href="" class="text-white bg-gray text-center"
                    ><i class="fa fa-plus"></i
                  ></a>
                </div>
              </div>
            </div>
          </main>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
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
