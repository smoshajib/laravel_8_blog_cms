@extends('web.layouts.master')


@section('title')
Cart Page
@endsection

@section('after_nav')
<div class="jumbotron jumbotron-cart text-center text-white">
    <h1 class="display-4 font-weight-bold mb-3">Cart</h1>
    <p class="text-white">Home - Cart</p>
  </div>
@endsection

@section('body-content')

{{-- app section --}}
@include('web.layouts.sections.app')
{{-- app section --}}

<main class="py-3 py-md-5">
    <div class="container">
      <section class="section-cart-progress">
        <div class="row">
          <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
            <div class="cart__progress">
              <div class="cart__progress-bar bg-primary w-100"></div>
              <div
                class="
                  cart__progress-links
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
            <div
              class="
                cart__progress-text
                d-flex
                justify-content-between
                align-items-center
                text-center
                mt-3
              "
            >
              <a class="text-gray-dark" href="cart.html">Cart</a>
              <a class="text-gray-dark" href="checkout.html">Checkout</a>
              <a class="text-gray-dark" href="review.html">Review Order</a>
              <a class="text-gray-dark" href="finish.html">Finish</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section-shopping-list">
        <div class="row my-3 my-lg-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <h3
              class="help-heading pb-3 pb-md-4 font-weight-bold mb-3 mb-md-4"
            >
              Shopping Cart
            </h3>
            <div class="shopping-list__single mb-3">
              <div class="row align-items-center py-3">
                <div class="col-1 text-center text-gray-dark">
                  <a
                    href="#"
                    class="
                      shopping-list__close
                      d-inline-block
                      text-subheading
                      font-weight-bold
                    "
                    >X</a
                  >
                </div>
                <div class="col-4 col-md-2 mb-3 mb-md-0">
                  <img
                    src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div
                  class="
                    col-6 col-md-4
                    font-weight-bold
                    text-center
                    mb-3 mb-md-0
                  "
                >
                  Airshipt Mug ($59)
                </div>
                <!-- Quality reusable section  -->
                <div
                  class="
                    col-5 col-md-3
                    bg-light
                    d-flex
                    justify-content-between
                    py-3
                    ml-2 ml-sm-0
                  "
                >
                  <div>Quality</div>
                  <div>
                    <a
                      href="javascript:void(0)"
                      class="mr-1 text-gray-dark"
                      onclick="handleProductQuantity('product-1', 'dec')"
                      ><i class="fa fa-caret-left"></i></a
                    ><span id="product-1">1</span
                    ><a
                      href="javascript:void(0)"
                      class="ml-1 text-gray-dark"
                      onclick="handleProductQuantity('product-1', 'inc')"
                      ><i class="fa fa-caret-right"></i
                    ></a>
                  </div>
                </div>
                <div class="col-5 col-md-2 text-center text-lg-left">
                  $116
                </div>
              </div>
            </div>
            <div class="shopping-list__single mb-3">
              <div class="row align-items-center py-3">
                <div class="col-1 text-center text-gray-dark">
                  <a
                    href="#"
                    class="
                      shopping-list__close
                      d-inline-block
                      text-subheading
                      font-weight-bold
                    "
                    >X</a
                  >
                </div>
                <div class="col-4 col-md-2 mb-3 mb-md-0">
                  <img
                    src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div
                  class="
                    col-6 col-md-4
                    font-weight-bold
                    text-center
                    mb-3 mb-md-0
                  "
                >
                  Airshipt Mug ($59)
                </div>
                <!-- Quality reusable section  -->
                <div
                  class="
                    col-5 col-md-3
                    bg-light
                    d-flex
                    justify-content-between
                    py-3
                    ml-2 ml-sm-0
                  "
                >
                  <div>Quality</div>
                  <div>
                    <a
                      href="javascript:void(0)"
                      class="mr-1 text-gray-dark"
                      onclick="handleProductQuantity('product-2', 'dec')"
                      ><i class="fa fa-caret-left"></i></a
                    ><span id="product-2">1</span
                    ><a
                      href="javascript:void(0)"
                      class="ml-1 text-gray-dark"
                      onclick="handleProductQuantity('product-2', 'inc')"
                      ><i class="fa fa-caret-right"></i
                    ></a>
                  </div>
                </div>
                <div class="col-5 col-md-2 text-center text-lg-left">
                  $116
                </div>
              </div>
            </div>
            <div class="shopping-list__single mb-3">
              <div class="row align-items-center py-3">
                <div class="col-1 text-center text-gray-dark">
                  <a
                    href="#"
                    class="
                      shopping-list__close
                      d-inline-block
                      text-subheading
                      font-weight-bold
                    "
                    >X</a
                  >
                </div>
                <div class="col-4 col-md-2 mb-3 mb-md-0">
                  <img
                    src="{{asset('frontend')}}/assets/store/Rectangle - 1.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div
                  class="
                    col-6 col-md-4
                    font-weight-bold
                    text-center
                    mb-3 mb-md-0
                  "
                >
                  Airshipt Mug ($59)
                </div>
                <!-- Quality reusable section  -->
                <div
                  class="
                    col-5 col-md-3
                    bg-light
                    d-flex
                    justify-content-between
                    py-3
                    ml-2 ml-sm-0
                  "
                >
                  <div>Quality</div>
                  <div>
                    <a
                      href="javascript:void(0)"
                      class="mr-1 text-gray-dark"
                      onclick="handleProductQuantity('product-3', 'dec')"
                      ><i class="fa fa-caret-left"></i></a
                    ><span id="product-3">1</span
                    ><a
                      href="javascript:void(0)"
                      class="ml-1 text-gray-dark"
                      onclick="handleProductQuantity('product-3', 'inc')"
                      ><i class="fa fa-caret-right"></i
                    ></a>
                  </div>
                </div>
                <div class="col-5 col-md-2 text-center text-lg-left">
                  $116
                </div>
              </div>
            </div>
          </div>
          <!-- Shopping calculation  -->
          <div class="col-lg-4">
            <!-- Cart total  -->
            <h2
              class="help-heading font-weight-bold pb-3 pb-md-4 md-3 mb-md-4"
            >
              Cart
            </h2>
            <!-- single cart total item  -->
            <div
              class="
                d-flex
                justify-content-between
                align-items-center
                cart-total__single
                mb-3 mb-md-4
              "
            >
              <img src="{{asset('frontend')}}/assets/store/Rectangle - 1.png" class="mr-3" alt="" />
              <h3 class="text-size font-weight-bold text-gray-dark mr-auto">
                Airshipt Ship($58 * <span>2</span>)
              </h3>
              <div class="font-weight-bold">$116</div>
            </div>
            <!-- single cart total item  -->
            <div
              class="
                d-flex
                justify-content-between
                align-items-center
                cart-total__single
                mb-3 mb-md-4
              "
            >
              <img src="{{asset('frontend')}}/assets/store/Rectangle - 1.png" class="mr-3" alt="" />
              <h3 class="text-size font-weight-bold text-gray-dark mr-auto">
                Airshipt Ship($58 * <span>2</span>)
              </h3>
              <div class="font-weight-bold">$116</div>
            </div>
            <!-- single cart total item  -->
            <div
              class="
                d-flex
                justify-content-between
                align-items-center
                cart-total__single
                mb-3 mb-md-4
              "
            >
              <img src="{{asset('frontend')}}/assets/store/Rectangle - 1.png" class="mr-3" alt="" />
              <h3 class="text-size font-weight-bold text-gray-dark mr-auto">
                Airshipt Ship($58 * <span>2</span>)
              </h3>
              <div class="font-weight-bold">$116</div>
            </div>
            <div class="subtotal-section d-flex justify-content-between">
              <p class="text-size font-weight-bold text-gray-dark">
                Subtotal
              </p>
              <p class="text-size font-weight-bold text-gray-dark">$161</p>
            </div>
            <!-- Apply coupon button  -->
            <div>
              <a href="#" class="text-gray-dark text-uppercase"
                ><u>Apply Coupon</u></a
              >
            </div>
            <!-- Shipping to section  -->
            <div class="py-3 py-md-5 shipping-location">
              <h3
                class="
                  help-heading
                  font-weight-bold
                  mb-2 mb-md-4
                  text-uppercase
                "
              >
                Shipping to Bangladesh
              </h3>
              <div
                class="
                  border-bottom border-dark
                  d-flex
                  justify-content-between
                  pb-3 pb-md-4
                  mb-2 mb-md-3
                "
              >
                <p class="text-size font-weight-bold text-gray-dark">
                  Shipping(Flat Rate)
                </p>
                <p class="text-size font-weight-bold text-gray-dark">$161</p>
              </div>
              <!-- Total calculation  -->
              <div class="d-flex justify-content-between pb-3 pb-md-4">
                <p class="text-size font-weight-bold text-gray-dark">Total</p>
                <p class="font-weight-bold text-gray-dark text-subheading">
                  $201
                </p>
              </div>
              <!-- buttons cta cart  -->
              <div class="cta-cart">
                <div class="row">
                  <div class="col">
                    <a
                      href="#"
                      class="
                        btn btn-outline-primary
                        d-block
                        text-size
                        px-2
                        mb-lg-2 mb-xl-0
                      "
                      >Continue shipping</a
                    >
                  </div>
                  <div class="col">
                    <a href="#" class="btn btn-primary d-block text-size px-2"
                      >Proceed To Checkout</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
