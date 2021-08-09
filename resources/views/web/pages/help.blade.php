@extends('web.layouts.master')

@section('title')
Help Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-help text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Help</h1>
    <p class="text-white">Home - Help</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}


<main class="section-help py-2 py-md-5">
    <div class="container">
      <h3 class="help-heading text-center text-gray-dark mb-3">
        We are customer obsessed and strive to provide the highest customer
        service and satisfaction.
      </h3>
      <div class="row help-box text-center py-3 py-md-4">
        <div class="col-md-6 col-lg-3 help-box-column mb-4 mb-lg-0">
          <div class="help-box-inner pt-4 pb-3">
            <img
              src="{{asset('frontend')}}/assets/help/Page-1.png"
              class="mb-3 d-inline-block"
              alt=""
            />
            <h5 class="help-secondary-heading text-gray-dark mb-3">Phone</h5>
            <p class="text-gray-light">+1 222 333344</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 help-box-column mb-4 mb-lg-0">
          <div class="help-box-inner pt-4 pb-3">
            <img
              src="{{asset('frontend')}}/assets/help/WA.png"
              class="mb-3 d-inline-block"
              alt=""
            />
            <h5 class="help-secondary-heading text-gray-dark mb-3">
              Whatsapp
            </h5>
            <p class="text-gray-light">+1 222 333344</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 help-box-column mb-4 mb-lg-0">
          <div class="help-box-inner pt-4 pb-3">
            <img
              src="{{asset('frontend')}}/assets/help/Messenger_4_.png"
              class="mb-3 d-inline-block"
              alt=""
            />
            <h5 class="help-secondary-heading text-gray-dark mb-3">
              Messenger
            </h5>
            <p class="text-gray-light">@airshipt</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 help-box-column mb-4 mb-lg-0">
          <div class="help-box-inner pt-4 pb-3">
            <img
              src="{{asset('frontend')}}/assets/help/iconfinder_103176_mail_email_icon.png"
              class="mb-3 d-inline-block"
              alt=""
            />
            <h5 class="help-secondary-heading text-gray-dark mb-3">Email</h5>
            <p class="text-gray-light">info@airshipt.com</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  {{-- testimonial section --}}
  @include('web.layouts.sections.testimonial')
  {{-- testimonial section --}}

   {{-- link section --}}
   @include('web.layouts.sections.link')
   {{-- link section --}}
@endsection


@section('style')
@endsection

@section('script')
@endsection
