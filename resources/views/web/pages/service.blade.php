@extends('web.layouts.master')


@section('title')
Service Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-service text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Service</h1>
    <p>Home - Service</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<main class="section-service">
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
                class="nav-link py-3 text-gray-dark active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#pills-home"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                <img
                  src="{{asset('frontend')}}/assets/book/book/book red.svg"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/book/book white.png"
                  class="tab-icon-white mr-1"
                  alt=""
                />
                Book</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link py-3 text-gray-dark"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#pills-profile"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                <img
                  src="{{asset('frontend')}}/assets/book/Ship/ship red.svg"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/Ship/ship white.svg"
                  class="tab-icon-white mr-1"
                  alt=""
                />
                Ship</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link py-3 text-gray-dark"
                id="pills-contact-tab"
                data-toggle="pill"
                href="#pills-contact"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                <img
                  src="{{asset('frontend')}}/assets/book/Shop/shop red.png"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/Shop/shop white.svg"
                  class="tab-icon-white mr-1"
                  alt=""
                />
                Shop</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link py-3 text-gray-dark"
                id="pills-travel-tab"
                data-toggle="pill"
                href="#pills-travel"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                <img
                  src="{{asset('frontend')}}/assets/book/Travel/travel red.svg"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/Travel/travel white.svg"
                  class="tab-icon-white mr-1"
                  alt=""
                />
                Travel & Earn</a
              >
            </li>
          </ul>
        </div>
      </div>
      <!-- Content  -->
      <div class="tab-content bg-light h-75 my-3" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="pills-home"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
        >
          <div class="row">
            <div class="col-md-6 p-5">
              <img src="{{asset('frontend')}}/assets/book/book/book red.svg" class="mb-4" alt="" />
              <h2 class="heading-main mb-3">Book your air ticket</h2>
              <p class="mb-3">Purchase air ticket at the lowest price</p>

              <ul class="work-lists">
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> We make booking
                  your next getaway easy and affordable
                </li>
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> Lowest air fares
                  guaranteed
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <a href="#" class="about__video-link">
                <img
                  src="{{asset('frontend')}}/assets/home/pexels-pavel-danilyuk-.jpg"
                  class="img-fluid py-5"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/home/video.png"
                  class="about__video-icon"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="pills-profile"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <div class="row">
            <div class="col-md-6 p-5">
              <img src="{{asset('frontend')}}/assets/Services/Group 2.png" class="mb-4" alt="" />
              <h2 class="heading-main mb-3">Book your ship ticket</h2>
              <p class="mb-3">Purchase air ticket at the lowest price</p>

              <ul class="work-lists">
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> We make booking
                  your next getaway easy and affordable
                </li>
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> Lowest air fares
                  guaranteed
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <a href="#" class="about__video-link">
                <img
                  src="{{asset('frontend')}}/assets/home/pexels-pavel-danilyuk-.jpg"
                  class="img-fluid py-5"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/home/video.png"
                  class="about__video-icon"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="pills-contact"
          role="tabpanel"
          aria-labelledby="pills-contact-tab"
        >
          <div class="row">
            <div class="col-md-6 p-5">
              <img
                src="{{asset('frontend')}}/assets/Services/iconfinder_353439_basket_purse_shopping_cart_ecommerce_icon.png"
                class="mb-4"
                alt=""
              />
              <h2 class="heading-main mb-3">Book your shop ticket</h2>
              <p class="mb-3">Purchase air ticket at the lowest price</p>

              <ul class="work-lists">
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> We make booking
                  your next getaway easy and affordable
                </li>
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> Lowest air fares
                  guaranteed
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <a href="#" class="about__video-link">
                <img
                  src="{{asset('frontend')}}/assets/home/pexels-pavel-danilyuk-.jpg"
                  class="img-fluid py-5"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/home/video.png"
                  class="about__video-icon"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="pills-travel"
          role="tabpanel"
          aria-labelledby="pills-travel-tab"
        >
          <div class="row">
            <div class="col-md-6 p-5">
              <img src="{{asset('frontend')}}/assets/Services/Vector.png" class="mb-4" alt="" />
              <h2 class="heading-main mb-3">Book your travel ticket</h2>
              <p class="mb-3">Purchase air ticket at the lowest price</p>

              <ul class="work-lists">
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> We make booking
                  your next getaway easy and affordable
                </li>
                <li class="mb-3">
                  <i class="fa fa-check mr-1 mr-md-2"></i> Lowest air fares
                  guaranteed
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <a href="#" class="about__video-link">
                <img
                  src="{{asset('frontend')}}/assets/home/pexels-pavel-danilyuk-.jpg"
                  class="img-fluid py-5"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/home/video.png"
                  class="about__video-icon"
                  alt=""
                />
              </a>
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
