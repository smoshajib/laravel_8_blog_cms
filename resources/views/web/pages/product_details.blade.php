@extends('web.layouts.master')

@section('title')
Details Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-product-details text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Airshipt Mug</h1>
    <p class="text-white">Home - Shop store - Airshipt Mug</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}


<main class="py-3 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 mb-3 mb-md-0">
            <img
              src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
              alt=""
              class="img-fluid w-100 mb-3 mb-md-4"
            />
            <!-- Variation products  -->
            <div class="row">
              <div class="col-6 col-md-4">
                <img
                  src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
                  alt=""
                  class="img-fluid w-100"
                />
              </div>
              <div class="col-6 col-md-4">
                <img
                  src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
                  alt=""
                  class="img-fluid w-100"
                />
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <h3
              class="
                text-subheading
                font-weight-bold
                text-gray-dark
                mb-2 mb-md-4
              "
            >
              Airshipt mug
            </h3>
            <h3
              class="
                text-subheading
                font-weight-bold
                text-gray-dark
                mb-2 mb-md-4
                text-primary
              "
            >
              $15
            </h3>
            <p class="text-size product-description">
              But I must explain to you how all this mistaken idea of denouncing
              pleasure and praising pain was born and I will give you a complete
              account of the system, and expo the actual teachings of the great
              explorer of the truth, the master-builder of human happiness.
            </p>
            <!-- quantity section  -->
            <div class="row my-2 my-md-3 ml-1 ml-md-0">
              <div
                class="
                  col-md-4
                  bg-light
                  mr-3
                  d-flex
                  justify-content-between
                  align-items-center
                  py-3
                  mb-3 mb-md-0
                "
              >
                <div>Quality</div>
                <div>
                  <a
                    href="javascript:void(0)"
                    class="mr-1 text-gray-dark"
                    onclick="handleProductQuantity('product-big', 'dec')"
                    ><i class="fa fa-caret-left"></i></a
                  ><span id="product-big">1</span
                  ><a
                    href="javascript:void(0)"
                    class="ml-1 text-gray-dark"
                    onclick="handleProductQuantity('product-big', 'inc')"
                    ><i class="fa fa-caret-right"></i
                  ></a>
                </div>
              </div>
              <div class="col-md-7 col-lg-5">
                <a href="#" class="product-link d-block">
                  <div class="row">
                    <div class="col-3 bg-dark text-white p-3">
                      <img
                        src="{{asset('frontend')}}/assets/book/Shop/shop white.svg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div
                      class="
                        col-8
                        text-white
                        bg-primary
                        text-center
                        product-link__text
                      "
                    >
                      Add to cart
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- Size and Color  -->
            <div class="row py-3 align-items-center product-size-color">
              <div
                class="
                  col-6 col-sm-12 col-md-3
                  d-flex
                  align-items-center
                  pt-3 pt-sm-0
                  mb-3 mb-md-0
                "
              >
                <p
                  class="
                    text-gray-dark
                    font-weight-bold
                    mb-0
                    mr-sm-2
                    px-2 px-md-1 px-lg-2
                  "
                >
                  Color
                </p>
                <a
                  href="#"
                  class="
                    btn btn-sm btn-primary
                    mr-1 mr-md-2
                    px-2 px-md-1 px-lg-2
                  "
                  >Red</a
                >
                <a
                  href="#"
                  class="btn btn-sm btn-outline-dark px-2 px-md-1 px-lg-2"
                  >White</a
                >
              </div>
              <div
                class="
                  col-6 col-sm-12 col-md-3
                  offset-md-3
                  d-flex
                  align-items-center
                "
              >
                <p
                  class="
                    text-gray-dark
                    font-weight-bold
                    mb-0
                    mr-sm-2
                    px-2 px-md-1 px-lg-2
                  "
                >
                  Size
                </p>
                <a
                  href="#"
                  class="btn btn-sm btn-outline-dark mr-1 px-2 px-md-1 px-lg-2"
                  >XL</a
                >
                <a
                  href="#"
                  class="btn btn-sm btn-outline-dark mr-1 px-2 px-md-1 px-lg-2"
                  >XXL</a
                >
                <a
                  href="#"
                  class="btn btn-sm btn-outline-dark px-2 px-md-1 px-lg-2"
                  >L</a
                >
              </div>
            </div>
            <!-- Social media  -->
            <div class="product-details-social mt-2 mt-md-3 ml-2">
              <a href="#" class="text-primary mr-2 mr-md-3"
                ><i class="fa fa-facebook"></i
              ></a>
              <a href="#" class="text-primary mr-2 mr-md-3"
                ><i class="fa fa-twitter"></i
              ></a>
              <a href="#" class="text-primary mr-2 mr-md-3"
                ><i class="fa fa-pinterest"></i
              ></a>
              <a href="#" class="text-primary mr-2 mr-md-3"
                ><i class="fa fa-telegram"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- Section description product -->
        <section class="section-product-description my-5">
          <ul class="nav nav-pills mb-3" id="product-desc-tab" role="tablist">
            <li class="nav-item mr-3">
              <a
                class="bg-light text-gray-dark px-4 px-md-5 nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#pills-home"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >Description</a
              >
            </li>
            <li class="nav-item">
              <a
                class="bg-light text-gray-dark px-4 px-md-5 nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#pills-profile"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >Additional Info</a
              >
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
            >
              <h3 class="help-heading my-3 my-md-4">Description</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Debitis commodi adipisci dolore, fuga veniam libero non beatae
                nesciunt, laborum deleniti tempore placeat ratione? Rem, ratione
                architecto nobis culpa dolor debitis.
              </p>
            </div>
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
              <h3 class="help-heading my-3 my-md-4">Additional information</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Debitis commodi adipisci dolore, fuga veniam libero non beatae
                nesciunt, laborum deleniti tempore placeat ratione? Rem, ratione
                architecto nobis culpa dolor debitis.
              </p>
            </div>
          </div>
        </section>
      </div>
      <!-- Related products  -->
      <div class="container my-3 my-md-5">
        <h3 class="help-heading mb-3 mb-md-4">Related Products</h3>
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-5 mb-md-4">
            <img
              src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
              class="img-fluid w-100"
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
          <div class="col-sm-6 col-lg-3 mb-5 mb-md-4">
            <img
              src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
              class="img-fluid w-100"
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
          <div class="col-sm-6 col-lg-3 mb-5 mb-md-4">
            <img
              src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
              class="img-fluid w-100"
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
          <div class="col-sm-6 col-lg-3 mb-5 mb-md-4">
            <img
              src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
              class="img-fluid w-100"
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
    </main>

{{-- link section --}}
   @include('web.layouts.sections.link')
   {{-- link section --}}
@endsection


@section('style')
@endsection

@section('script')

@endsection
