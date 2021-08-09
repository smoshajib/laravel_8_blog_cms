@extends('web.layouts.master')

@section('title')
FAQ Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-service text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">FAQ</h1>
    <p>Home - FAQ</p>
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
                class="nav-link text-gray-dark py-3 active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#pills-home"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                <img
                  src="{{'frontend'}}/assets/book/book/book red.svg"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{'frontend'}}/assets/book/book/book white.png"
                  class="tab-icon-white mr-1"
                  alt=""
                />
                Book</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link text-gray-dark py-3"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#pills-profile"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                ><img
                  src="{{'frontend'}}/assets/book/Ship/ship red.svg"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{'frontend'}}/assets/book/Ship/ship white.svg"
                  class="tab-icon-white mr-1"
                  alt=""
                />Ship</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link text-gray-dark py-3"
                id="pills-contact-tab"
                data-toggle="pill"
                href="#pills-contact"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                <img
                  src="{{'frontend'}}/assets/book/Shop/shop red.png"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{'frontend'}}/assets/book/Shop/shop white.svg"
                  class="tab-icon-white mr-1"
                  alt=""
                />Shop</a
              >
            </li>
            <li class="nav-item mb-2 mb-md-0">
              <a
                class="nav-link text-gray-dark py-3"
                id="pills-travel-tab"
                data-toggle="pill"
                href="#pills-travel"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                <img
                  src="{{'frontend'}}/assets/book/Travel/travel red.svg"
                  class="tab-icon-red mr-1"
                  alt=""
                />
                <img
                  src="{{'frontend'}}/assets/book/Travel/travel white.svg"
                  class="tab-icon-white mr-1"
                  alt=""
                />Travel</a
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
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link faq-link text-gray-dark"
                    data-toggle="collapse"
                    data-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Collapsible Group Item #1
                  </button>
                </h5>
              </div>

              <div
                id="collapseOne"
                class="collapse pl-5 py-4 bg-light show"
                aria-labelledby="headingOne"
                data-parent="#accordion"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Collapsible Group Item #2
                  </button>
                </h5>
              </div>
              <div
                id="collapseTwo"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingTwo"
                data-parent="#accordion"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Collapsible Group Item #3
                  </button>
                </h5>
              </div>
              <div
                id="collapseThree"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingThree"
                data-parent="#accordion"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="pills-profile"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <div id="accordion2">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link faq-link text-gray-dark"
                    data-toggle="collapse"
                    data-target="#collapseShipOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Collapsible Group Item #1
                  </button>
                </h5>
              </div>

              <div
                id="collapseShipOne"
                class="collapse pl-5 py-4 bg-light show"
                aria-labelledby="headingOne"
                data-parent="#accordion2"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseshipTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Collapsible Group Item #2
                  </button>
                </h5>
              </div>
              <div
                id="collapseshipTwo"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingTwo"
                data-parent="#accordion2"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseShipThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Collapsible Group Item #3
                  </button>
                </h5>
              </div>
              <div
                id="collapseShipThree"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingThree"
                data-parent="#accordion2"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="pills-contact"
          role="tabpanel"
          aria-labelledby="pills-contact-tab"
        >
          <div id="accordion3">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link faq-link text-gray-dark"
                    data-toggle="collapse"
                    data-target="#collapseShopOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Collapsible Group Item #1
                  </button>
                </h5>
              </div>

              <div
                id="collapseShopOne"
                class="collapse pl-5 py-4 bg-light show"
                aria-labelledby="headingOne"
                data-parent="#accordion3"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseshopTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Collapsible Group Item #2
                  </button>
                </h5>
              </div>
              <div
                id="collapseshopTwo"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingTwo"
                data-parent="#accordion3"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseShopThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Collapsible Group Item #3
                  </button>
                </h5>
              </div>
              <div
                id="collapseShopThree"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingThree"
                data-parent="#accordion3"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="pills-travel"
          role="tabpanel"
          aria-labelledby="pills-travel-tab"
        >
          <div id="accordion4">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link faq-link text-gray-dark"
                    data-toggle="collapse"
                    data-target="#collapseTravelOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Collapsible Group Item #1
                  </button>
                </h5>
              </div>

              <div
                id="collapseTravelOne"
                class="collapse pl-5 py-4 bg-light show"
                aria-labelledby="headingOne"
                data-parent="#accordion4"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseTravelTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Collapsible Group Item #2
                  </button>
                </h5>
              </div>
              <div
                id="collapseTravelTwo"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingTwo"
                data-parent="#accordion4"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed faq-link"
                    data-toggle="collapse"
                    data-target="#collapseTravelThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Collapsible Group Item #3
                  </button>
                </h5>
              </div>
              <div
                id="collapseTravelThree"
                class="collapse collapse pl-5 py-4 bg-light"
                aria-labelledby="headingThree"
                data-parent="#accordion4"
              >
                <div class="card-body faq-collapse text-gray-light-2">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life
                  accusamus terry richardson ad squid. 3 wolf moon officia
                  aute, non cupidatat skateboard dolor brunch. Food truck
                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee
                  nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                  Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them
                  accusamus labore sustainable VHS.
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
