@extends('web.layouts.master')

@section('title')
Location Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-location text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Location</h1>
    <p class="text-white">Home - Location</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}


<main class="section-location-main">
    <div class="container">
      <div class="row justify-content-between location-heading">
        <div class="col-sm-6 col-md-4">
          <p class="location-text">
            <a href="#" class="text-gray-dark">Locate your nearest store</a>
            <img src="" alt="" />
          </p>
        </div>
        <div class="col-sm-4">
          <div class="form-group select-customize">
            <select name="" class="form-control px-3" id="">
              <option value="" class="ml-3">
                <i class="fa fa-filter"></i>Filter Country
              </option>
              <option value="">Dhaka</option>
              <option value="">USA</option>
              <option value="">India</option>
            </select>
          </div>
        </div>
      </div>
      <!-- USA Area  -->
      <div class="location-area py-3">
        <h3
          class="
            help-heading help-heading--border
            text-gray-dark
            mb-4 mb-md-5
            pb-1 pb-md-2
          "
        >
          USA
        </h3>

        <div class="row">
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">New York</h3>
                  <p class="text-gray-light location-store">Window store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    California, USA
                  </h3>
                  <p class="text-gray-light location-store">Marbola store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    Florida, USA
                  </h3>
                  <p class="text-gray-light location-store">Marbola store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">Texas, USA</h3>
                  <p class="text-gray-light location-store">Marbola store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- India Area  -->
      <div class="location-area py-3">
        <h3
          class="
            help-heading help-heading--border
            text-gray-dark
            mb-4 mb-md-5
            pb-1 pb-md-2
          "
        >
          India
        </h3>

        <div class="row">
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    New Delhi, India
                  </h3>
                  <p class="text-gray-light location-store">Window store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    West Bengal, USA
                  </h3>
                  <p class="text-gray-light location-store">Marbola store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    Tamil Nadu, USA
                  </h3>
                  <p class="text-gray-light location-store">Marbola store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    Punjab, USA
                  </h3>
                  <p class="text-gray-light location-store">Marbola store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bangladesh Area  -->
      <div class="location-area py-3">
        <h3
          class="
            help-heading help-heading--border
            text-gray-dark
            mb-4 mb-md-5
            pb-1 pb-md-2
          "
        >
          Bangladesh
        </h3>

        <div class="row">
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    Dhaka, Bangladesh
                  </h3>
                  <p class="text-gray-light location-store">Window store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="location-area__text bg-light py-4 px-3">
              <div class="row">
                <div class="col-1 col-md-2 col-lg-1 mb-2 mb-sm-0">
                  <img
                    src="{{asset('frontend')}}/assets/Others icon/address icon.png"
                    class="location-icon"
                    alt=""
                  />
                </div>
                <div class="col-11 col-md-10 col-lg-11">
                  <h3 class="help-heading text-gray-dark mb-3">
                    Chottogram, USA
                  </h3>
                  <p class="text-gray-light location-store">Marbola store</p>
                  <p class="text-gray-light-2">
                    2369 Lauren Drive, Beloit, WI, Wisconsin, USA
                  </p>
                  <p class="text-gray-light-2">
                    Phone: <span class="text-gray-light">608-365-7693</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
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
