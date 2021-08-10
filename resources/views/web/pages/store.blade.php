@extends('web.layouts.master')

@section('title')
Shop Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-store text-center text-white">
  <h1 class="display-4 font-weight-bold mb-3">Shop Store</h1>
  <p class="text-white">Home - Shop Store</p>
</div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}


<main>
  <section class="section-store">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
         <a href="{{ route('site',['product_details']) }}">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
        </a>
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <!-- Single store case  -->
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2 mb-md-4">
          <img
            src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
            class="img-fluid"
            alt=""
          />
          <div
            class="
              text-gray-dark
              heading-blog
              font-weight-bold
              d-flex
              justify-content-between
              py-2 py-md-3
            "
          >
            <p class="text-gray-dark heading-blog font-weight-bold mb-0">
              Airshift Mug
            </p>
            <p class="text-gray-dark font-weight-bold mb-0">$59</p>
          </div>
          <div class="text-center mt-2">
            <a href="#" class="btn btn-primary px-3"
              ><i class="fa fa-shopping-cart"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

{{-- link section --}}
   @include('web.layouts.sections.link')
   {{-- link section --}}
@endsection


@section('style')
@endsection

@section('script')
@endsection
