@extends('web.layouts.master')

@section('title')
Offers Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-offers text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Offers and Rewards</h1>
    <p class="text-white">Home - Offer and Rewards</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}


<main class="my-3 my-md-5">
    <section class="section-deals py-3">
      <h3
        class="
          help-heading
          text-gray-dark text-center
          mb-2 mb-md-4
          font-weight-bold
        "
      >
        Deals for Today
      </h3>
      <div class="container">
        <!-- Deal main row  -->
        <div class="row deal">
          <div class="col-md-6 col-lg-3 mb-2 mb-md-3 deal__box">
            <!-- Deal content  -->
            <div class="bg-light">
              <div class="row">
                <div class="col-6 bg-primary pt-3 pb-2">
                  <div class="deal__off text-center">
                    <span class="deal__percent">50</span>
                    <div class="d-inline-block text-white">
                      <span>%</span><span class="d-block">OFF</span>
                    </div>
                  </div>
                  <p class="deal__text text-small d-none d-sm-block">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                  </p>
                </div>
                <div class="col-6 pt-3 pb-2 text-center">
                  <p class="deal__promo text-gray-dark">Promo Code</p>
                  <a
                    href="#"
                    class="btn btn-outline-primary btn-sm mb-2 deal__btn"
                    >AIRSHIFTGIFT</a
                  >
                  <p class="deal__promo">
                    <small>Apply this code to get discoun</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-2 mb-md-3 deal__box">
            <!-- Deal content  -->
            <div class="bg-light">
              <div class="row">
                <div class="col-6 bg-blue pt-3 pb-2">
                  <div class="deal__off text-center">
                    <span class="deal__percent">50</span>
                    <div class="d-inline-block text-white">
                      <span>%</span><span class="d-block">OFF</span>
                    </div>
                  </div>
                  <p class="deal__text text-small d-none d-sm-block">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                  </p>
                </div>
                <div class="col-6 pt-3 pb-2 text-center">
                  <p class="deal__promo text-gray-dark">Promo Code</p>
                  <a
                    href="#"
                    class="btn btn-outline-primary btn-sm mb-2 deal__btn"
                    >AIRSHIFTGIFT</a
                  >
                  <p class="deal__promo">
                    <small>Apply this code to get discoun</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-2 mb-md-3 deal__box">
            <!-- Deal content  -->
            <div class="bg-light">
              <div class="row">
                <div class="col-6 bg-purple pt-3 pb-2">
                  <div class="deal__off text-center">
                    <span class="deal__percent">50</span>
                    <div class="d-inline-block text-white">
                      <span>%</span><span class="d-block">OFF</span>
                    </div>
                  </div>
                  <p class="deal__text text-small d-none d-sm-block">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                  </p>
                </div>
                <div class="col-6 pt-3 pb-2 text-center">
                  <p class="deal__promo text-gray-dark">Promo Code</p>
                  <a
                    href="#"
                    class="btn btn-outline-primary btn-sm mb-2 deal__btn"
                    >AIRSHIFTGIFT</a
                  >
                  <p class="deal__promo">
                    <small>Apply this code to get discoun</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-2 mb-md-3 deal__box">
            <!-- Deal content  -->
            <div class="bg-light">
              <div class="row">
                <div class="col-6 bg-chocolate pt-3 pb-2">
                  <div class="deal__off text-center">
                    <span class="deal__percent">50</span>
                    <div class="d-inline-block text-white">
                      <span>%</span><span class="d-block">OFF</span>
                    </div>
                  </div>
                  <p class="deal__text text-small d-none d-sm-block">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                  </p>
                </div>
                <div class="col-6 pt-3 pb-2 text-center">
                  <p class="deal__promo text-gray-dark">Promo Code</p>
                  <a
                    href="#"
                    class="btn btn-outline-primary btn-sm mb-2 deal__btn"
                    >AIRSHIFTGIFT</a
                  >
                  <p class="deal__promo">
                    <small>Apply this code to get discoun</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-rewards py-3 py-md-5 bg-light">
      <h3
        class="
          help-heading
          text-gray-dark text-center
          mb-2 mb-md-4
          font-weight-bold
        "
      >
        How rewards works
      </h3>
      <div class="container">
        <div class="row rewards">
          <div class="col-md-6 col-lg-3 rewards__box">
            <div class="rewards__box-white bg-white p-3">
              <div
                class="
                  bg-primary
                  text-white
                  d-flex
                  justify-content-center
                  align-items-center
                "
              >
                1
              </div>
              <h3 class="font-weight-bold my-3">Lipsum as it is sometimes</h3>
              <p class="text-gray-light">
                The passage is attributed to an unknown typesetter in the 15th
                century who is thought
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 rewards__box">
            <div class="rewards__box-white bg-white p-3">
              <div
                class="
                  bg-primary
                  text-white
                  d-flex
                  justify-content-center
                  align-items-center
                "
              >
                2
              </div>
              <h3 class="font-weight-bold my-3">Lipsum as it is sometimes</h3>
              <p class="text-gray-light">
                The passage is attributed to an unknown typesetter in the 15th
                century who is thought
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 rewards__box">
            <div class="rewards__box-white bg-white p-3">
              <div
                class="
                  bg-primary
                  text-white
                  d-flex
                  justify-content-center
                  align-items-center
                "
              >
                3
              </div>
              <h3 class="font-weight-bold my-3">Lipsum as it is sometimes</h3>
              <p class="text-gray-light">
                The passage is attributed to an unknown typesetter in the 15th
                century who is thought
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 rewards__box">
            <div class="rewards__box-white bg-white p-3">
              <div
                class="
                  bg-primary
                  text-white
                  d-flex
                  justify-content-center
                  align-items-center
                "
              >
                4
              </div>
              <h3 class="font-weight-bold my-3">Lipsum as it is sometimes</h3>
              <p class="text-gray-light">
                The passage is attributed to an unknown typesetter in the 15th
                century who is thought
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-rewards-faq py-3 py-md-5">
      <h3
        class="
          help-heading
          text-gray-dark text-center
          mb-2 mb-md-4
          font-weight-bold
        "
      >
        Rewards FAQ
      </h3>
      <div class="container">
        <!-- Accordion-offer rewards -->
        <div id="accordion-offer">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button
                  class="
                    btn btn-link
                    faq-link
                    text-gray-dark
                    d-flex
                    justify-content-between
                    w-100
                  "
                  data-toggle="collapse"
                  data-target="#collapseOfferOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  <div>Collapsible Group Item #1</div>
                  <div>
                    <img
                      class="collaspe-arrow-icon"
                      src="{{asset('frontend')}}/assets/FAQ/iconfinder_211690_up_arrow_icon.png"
                      alt=""
                    />
                  </div>
                </button>
              </h5>
            </div>

            <div
              id="collapseOfferOne"
              class="collapse pl-5 py-4 bg-light show"
              aria-labelledby="headingOne"
              data-parent="#accordion-offer"
            >
              <div class="card-body faq-collapse text-gray-light-2">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                aliqua put a bird on it squid single-origin coffee nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident.
                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer farm-to-table, raw denim aesthetic synth nesciunt you
                probably haven't heard of them accusamus labore sustainable
                VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button
                  class="
                    btn btn-link
                    faq-link
                    text-gray-dark
                    d-flex
                    justify-content-between
                    w-100
                  "
                  data-toggle="collapse"
                  data-target="#collapseOfferTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  <div>Collapsible Group Item #2</div>
                  <div>
                    <img
                      class="collaspe-arrow-icon"
                      src="{{asset('frontend')}}/assets/FAQ/iconfinder_211690_up_arrow_icon.png"
                      alt=""
                    />
                  </div>
                </button>
              </h5>
            </div>
            <div
              id="collapseOfferTwo"
              class="collapse collapse pl-5 py-4 bg-light"
              aria-labelledby="headingTwo"
              data-parent="#accordion-offer"
            >
              <div class="card-body faq-collapse text-gray-light-2">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                aliqua put a bird on it squid single-origin coffee nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident.
                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer farm-to-table, raw denim aesthetic synth nesciunt you
                probably haven't heard of them accusamus labore sustainable
                VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button
                  class="
                    btn btn-link
                    faq-link
                    text-gray-dark
                    d-flex
                    justify-content-between
                    w-100
                  "
                  data-toggle="collapse"
                  data-target="#collapseOfferThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  <div>Collapsible Group Item #3</div>
                  <div>
                    <img
                      class="collaspe-arrow-icon"
                      src="{{asset('frontend')}}/assets/FAQ/iconfinder_211690_up_arrow_icon.png"
                      alt=""
                    />
                  </div>
                </button>
              </h5>
            </div>
            <div
              id="collapseOfferThree"
              class="collapse collapse pl-5 py-4 bg-light"
              aria-labelledby="headingThree"
              data-parent="#accordion-offer"
            >
              <div class="card-body faq-collapse text-gray-light-2">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                aliqua put a bird on it squid single-origin coffee nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident.
                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer farm-to-table, raw denim aesthetic synth nesciunt you
                probably haven't heard of them accusamus labore sustainable
                VHS.
              </div>
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
