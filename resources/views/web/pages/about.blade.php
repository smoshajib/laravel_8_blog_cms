@extends('web.layouts.master')


@section('after_nav')
<div class="jumbotron jumbotron-about text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">About Us</h1>
    <p class="text-white">Home - About us</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<section class="section-about py-3 py-md-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
          <h2 class="heading-main mb-4">About airshipt</h2>
          <p>
            Airshipt is an open platform that allows shoppers or shippers to
            shop and send goods from anywhere in the world and have it
            delivered to them by a traveler who is already heading that way.
            Powered by peer-to-peer technology and AI, this is the new way of
            booking air tickets, traveling, shopping, and shipping where
            international shipping is made easy, fast and affordable while
            rewarding travelers for carrying products and parcels.
          </p>
        </div>
        <div class="col-md-6">
          <a href="#" class="about__video-link">
            <img
              src="{{asset('frontend')}}/assets/About/188433492_2687463748212994_4345649974138857625_n.jpg"
              class="img-fluid"
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
  </section>
  <section class="section-ceo-message">
    <div class="row align-items-center">
      <div class="col-md-5 col-lg-6">
        <img
          src="{{asset('frontend')}}/assets/About/Rectangle 1401.jpg"
          class="img-fluid ceo-img"
          alt=""
        />
      </div>
      <div class="col-md-7 col-lg-6 p-3">
        <h2 class="heading-main mb-3">Message from CEO</h2>
        <img
          src="{{asset('frontend')}}/assets/About/quote.png"
          class="ceo-message-quote-img my-3"
          alt=""
        />
        <p>
          We are customer obsessed and strive to make international small
          package shipping and shopping easy and affordable while rewarding
          travelers – allowing an efficient flow of information in the age of
          peer-to-peer connectivity.
        </p>
        <small class="font-weight-bold d-block">Rayan Rahman </small>
        <small>CEO, Airshipt </small>
      </div>
    </div>
  </section>
  <section class="section-about-desc py-3 py-md-5">
    <div class="container">
      <div class="row my-4 my-lg-0">
        <div class="col-md-6">
          <h2 class="heading-main mb-3">Mission</h2>
          <p>
            Simplify international small package shipping and help people;
            connect, communicate & share products and ultimately information -
            more efficiently and easily while providing exemplary customer
            service.
          </p>
        </div>
        <div class="col-md-6">
          <h2 class="heading-main mb-3">Vision</h2>
          <p>
            Be the leading international shipping brand for small package
            shipping and make shopping, shipping, and traveling more
            efficient.
          </p>
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
