@extends('web.layouts.master')

@section('title')
Tracting Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-tracking text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Tracking</h1>
    <p class="text-white">Home - Tracking</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<!-- Tracking section  -->
<section class="section-track-input">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
          <form class="form-inline">
            <input
              class="form-control py-2 w-65"
              placeholder="Enter your tracking number"
            />
            <button class="btn btn-primary py-2 w-35" type="submit">
              Track
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="section-tracking-list py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 col-lg-3 mb-2 mb-md-0">
          <h2 class="tracking-list-title font-weight-bold">
            Tracking ID#: 81782992
          </h2>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0">
          <h2 class="tracking-list-title-name font-weight-bold">
            <img
              src="{{asset('frontend')}}/assets/Tracking/Ellipse 7.jpg"
              class="img-fluid mr-2"
              alt=""
            />
            Traveler: Adam willium mark
          </h2>
        </div>
      </div>
      <div class="row align-items-center my-3 mygrid">
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-gray-dark
          "
        >
          <div class="well">May 24, 2021</div>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0 py-3 text-gray-light">
          <div class="well">Parcel ordered at Airshipt</div>
        </div>
      </div>
      <div class="row align-items-center my-3 mygrid">
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-gray-dark
          "
        >
          <div class="well">Hune 15, 2021</div>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0 py-3 text-gray-light">
          <div class="well">Parcel dopped off at Airshipt store/agent</div>
        </div>
      </div>
      <div class="row align-items-center my-3 mygrid">
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-gray-dark
          "
        >
          <div class="well">May 24, 2021</div>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0 py-3 text-gray-light">
          <div class="well">Parcel scanned by Airshipt</div>
        </div>
      </div>
      <div class="row align-items-center my-3 mygrid">
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-gray-dark
          "
        >
          <div class="well">May 24, 2021</div>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0 py-3 text-gray-light">
          <div class="well">Parcel accepted by traveler</div>
        </div>
      </div>
      <div class="row align-items-center my-3 mygrid">
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-gray-dark
          "
        >
          <div class="well">May 24, 2021</div>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0 py-3 text-gray-light">
          <div class="well">Parcel on transit with traveler</div>
        </div>
      </div>
      <div class="row align-items-center my-3 mygrid">
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-gray-dark
          "
        >
          <div class="well">May 24, 2021</div>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0 py-3 text-gray-light">
          <div class="well">
            Parcel dropped off at Airshipt store by traveler
          </div>
        </div>
      </div>
      <div class="row align-items-center my-3 mygrid">
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-gray-dark
          "
        >
          <div class="well">May 24, 2021</div>
        </div>
        <div class="col-md-8 col-lg-9 mb-3 mb-md-0 py-3 text-gray-light">
          <div class="well">Parcel on transit with Airshipt employee</div>
        </div>
      </div>
      <div
        class="row align-items-center my-3 mygrid mygrid-success text-white"
      >
        <div
          class="
            col-md-4 col-lg-3
            mb-2 mb-md-0
            py-3
            text-left text-lg-center text-white
          "
        >
          <div class="well">May 24, 2021</div>
        </div>
        <div
          class="
            col-md-8 col-lg-9
            mb-3 mb-md-0
            py-3
            d-flex
            justify-content-between
            align-items-center
          "
        >
          <div class="well">Parcel delivered</div>
          <i class="fa fa-check check-success p-1"></i>
        </div>
      </div>
    </div>
  </section>
  <section class="section-tracking-download my-5">
    <p class="text-center text-primary text-size font-weight-bold">
      Download our app to see real time tracking of your parcel
    </p>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
          <form class="form-inline">
            <input
              class="form-control w-100 py-2"
              id="telephone-track"
              placeholder="Enter your phone number"
            />
            <button class="btn btn-primary w-35 py-2" type="submit">
              Get App Link
            </button>
          </form>
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
