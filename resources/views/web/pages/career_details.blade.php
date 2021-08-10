@extends('web.layouts.master')


@section('title')
Career Details Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-job-details text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Job Details</h1>
    <p class="text-white">Home - Career - Job details</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<<main class="py-3 py-md-5">
  <div class="container">
    <div class="row career-box">
      <div class="col">
        <div
          class="
            career-box__header
            d-md-flex
            justify-content-between
            align-items-center
            my-3 my-md-5
          "
        >
          <h3 class="text-gray-dark font-weight-bold">SALES JOB</h3>
          <h3 class="text-gray-dark font-weight-bold">
            Employment status
            <span class="text-gray-light-1 font-weight-bold"
              >Full Time</span
            >
          </h3>
          <h3 class="text-gray-dark">
            Posted : <span class="text-gray-light-1">2 Days ago</span>
          </h3>
        </div>
        <h3 class="help-heading font-weight-bold my-3 my-lg-4">
          Job Details
        </h3>
        <p class="">
          But I must explain to you how all this mistaken idea of denouncing
          pleasure and praising pain was born and I will give you a complete
          account of the system, and expo the actual teachings of the great
          explorer of the truth, the master-builder of human happiness. No
          one rejects, dislikes, or avoids pleasure itself, because it is
          pleasure because those who do not know how to pursue pleasure
          rationally encounter consequences that are extremely painful. Nor
          again is there anyone who loves or pursues or desires to obtain
          pain of itself, because it is pain, but because occasionally
          circumstances occur in which toil and pain can procure him some
          great pleasure. To take example, which of us ever undertakes
          laborious physical exercise, except to obtain some advantage from
          it? But who has any right to ﬁnd fault with a man who chooses to
          pleasure that has no annoying consequences, or one who avoids a
          pain that produces no resultant pleasure? On the other hand, we
          denounce with righteous indignation and dislike men who are so
          beguiled and demoralized by the charms of pleasure of the moment,
          so blinded by desire, that they cannot foresee the pain and
          trouble that are bou ensue; and equal blame belongs to those who
          fail in their duty through weakness of will, which is the same as
          saying through shrinking from toil and pain.
        </p>
        <p>
          But I must explain to you how all this mistaken idea of denouncing
          pleasure and praising pain was born and I will give you a complete
          account of the system, and expound the actual teachings of the
          great explorer of the truth, the master-builder of human
          happiness. No one rejects, dislikes, or avoids pleasure itself,
          because it is pleasure, but because those who do not know how to
          pursue pleasure rationally encounter
        </p>
        <!--  requirements  -->

        <h3 class="help-heading font-weight-bold my-3 my-lg-4">
          Requirements
        </h3>
        <p>
          <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        </p>
        <p>
          <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        </p>
        <p>
          <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        </p>
        <!-- Educational requirements  -->

        <h3 class="help-heading font-weight-bold my-3 my-lg-4">
          Educational Requirements
        </h3>
        <p>
          <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        </p>
        <p>
          <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        </p>
        <p>
          <i class="fa fa-angle-right mr-2"></i>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        </p>
        <!-- Experience requirements  -->
        <h3 class="help-heading font-weight-bold my-3 my-lg-4">
          Experience Requirements
        </h3>
        <p>
          But I must explain to you how all this mistaken idea of denouncing
          pleasure and praising pain was born and I will give you a complete
          account of the system, and expound the actual teachings of the
          great explorer of the truth, the master-builder of human
          happiness. No one rejects, dislikes, or avoids pleasure itself,
          because it is pleasure, but because those who do not know how to
          pursue pleasure rationally encounter
        </p>
        <div class="career-deadline text-center text-primary py-3 py-md-5">
          <h3 class="font-weight-bold help-heading mb-3 mb-md-4">
            Application Deadline : 7 Jul 2021
          </h3>
          <a href="#" class="btn btn-primary px-3">Apply now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Container  -->
</main>

   {{-- link section --}}
   @include('web.layouts.sections.link')
   {{-- link section --}}
@endsection


@section('style')
@endsection

@section('script')
@endsection
