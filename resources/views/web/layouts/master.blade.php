<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('frontend')}}/css/intlTelInput.min.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css" />
    <title>@yield('title',"Airshipt")</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNavbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{asset('frontend')}}/assets/home/Group 2301.png" alt="" class="img-fluid" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="tracking.html">Tracking</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link" href="location.html">Location</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link" href="about.html">About US</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link" href="service.html">Service</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link" href="help.html">Help</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link" href="offers.html">Offers</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link" href="store.html">Shop store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="section-slides">
      <div class="mySlides">
        <div class="container">
          <div class="row slide-content">
            <div class="col-md-2 d-none d-md-block d-none d-md-block">
              <div
                class="
                  slide-controls
                  d-flex
                  flex-column
                  justify-content-between
                  h-100
                "
              >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(1)"
                  class="slide-control-link active"
                  ><img
                    src="{{asset('frontend')}}/assets/book/book/book red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/book/book white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Book</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(2)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Ship</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(3)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Shop</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(4)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Travel & Earn</span></a
                >
              </div>
            </div>
            <div class="col-md-9 col-lg-6 slide-text p-sm-3 p-md-4 p-lg-4">
              <h2 class="heading-main mb-3 mb-2 mb-lg-3">
                Book your air ticket
              </h2>
              <p class="d-none d-sm-block">
                Purchase air tickets at the lowest prices
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />We make booking your next getaway easy and affordable
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Lowest air fares guaranteed
              </p>
              <a
                href="#"
                class="
                  btn btn-primary
                  slider-btn
                  text-white
                  px-3
                  py-2
                  mb-2
                  my-lg-2
                "
                >Sign up to book ticket</a
              >
              <a href="#" class="d-block text-gray-dark"
                >Learn more about booking ticket with Airshipt</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="mySlides">
        <div class="container">
          <div class="row slide-content">
            <div class="col-md-2 d-none d-md-block">
              <div
                class="
                  slide-controls
                  d-flex
                  flex-column
                  justify-content-between
                  h-100
                "
              >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(1)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/book/book red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/book/book white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Book</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(2)"
                  class="slide-control-link active"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Ship</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(3)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Shop</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(4)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Travel & Earn</span></a
                >
              </div>
            </div>
            <div class="col-md-9 col-lg-6 slide-text p-sm-3 p-md-4 p-lg-4">
              <h2 class="heading-main mb-3 mb-2 mb-lg-3">
                Ship products, parcels and documents worldwide at the best
                prices.
              </h2>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Pack what you want to ship in an Airshipt Flat rate envelope
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Pay and drop at our store or agent
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />A traveler will accept to carry your envelope
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Your receiver receives the envelope at their doorstep
              </p>
              <a
                href="#"
                class="
                  btn btn-primary
                  slider-btn
                  text-white
                  px-3
                  py-2
                  mb-2
                  btn-slide-sm
                "
                >Sign up to ship product<span class="d-none d-sm-block"
                  >, parcels and documents</span
                ></a
              >
              <a href="#" class="d-block text-gray-dark"
                >Learn more about booking ticket with Airshipt</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="mySlides">
        <div class="container">
          <div class="row slide-content">
            <div class="col-md-2 d-none d-md-block">
              <div
                class="
                  slide-controls
                  d-flex
                  flex-column
                  justify-content-between
                  h-100
                "
              >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(1)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/book/book red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/book/book white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Book</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(2)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Ship</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(3)"
                  class="slide-control-link active"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Shop</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(4)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Travel & Earn</span></a
                >
              </div>
            </div>
            <div class="col-md-9 col-lg-6 slide-text p-sm-3 p-md-4 p-lg-4">
              <h2 class="heading-main mb-3 mb-2 mb-lg-3">
                Order products from any international website and receive them
                at your doorstep, paying low shipping prices.
              </h2>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Paste the URL of your desired product
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />A traveler heading your way will accept to carry the product
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Pay for the product and carrying fee(s)
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Receive the product at your doorstep
              </p>
              <a
                href="#"
                class="
                  btn btn-primary
                  slider-btn
                  text-white
                  px-3
                  py-2
                  mb-2
                  my-lg-2
                "
                >Sign up to shop products</a
              >
              <a href="#" class="d-block text-gray-dark"
                >Learn more about shop products with Airshipt
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="mySlides">
        <div class="container">
          <div class="row slide-content">
            <div class="col-md-2 d-none d-md-block">
              <div
                class="
                  slide-controls
                  d-flex
                  flex-column
                  justify-content-between
                  h-100
                "
              >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(1)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/book/book red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/book/book white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Book</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(2)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Ship/ship white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Ship</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(3)"
                  class="slide-control-link"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Shop/shop white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Shop</span></a
                >
                <a
                  href="javascript:void(0)"
                  onclick="currentSlide(4)"
                  class="slide-control-link active"
                  ><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel red.svg"
                    class="slide-red-link"
                    alt=""
                  /><img
                    src="{{asset('frontend')}}/assets/book/Travel/travel white.svg"
                    class="slide-white-link"
                    alt=""
                  />
                  <span class="d-block text-gray-dark">Travel & Earn</span></a
                >
              </div>
            </div>
            <div class="col-md-9 col-lg-6 slide-text p-sm-3 p-md-4 p-lg-4">
              <h2 class="heading-main mb-3 mb-lg-3">
                Earn money carrying products, parcels and documents in the
                direction you are heading.
              </h2>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />You can choose to carry envelope or product or both
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Carry envelope? You visit our store and select envelope(s) you
                want to carry
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Pay for the product and carrying fee(s)
              </p>
              <p class="d-none d-sm-block">
                <img
                  src="{{asset('frontend')}}/assets/home/iconfinder_619543_add_done_good_ok_tick_icon_512px.png"
                  alt=""
                />Get paid for carrying
              </p>
              <a
                href="#"
                class="
                  btn btn-primary
                  slider-btn
                  text-white
                  px-3
                  py-2
                  mb-2
                  my-lg-2
                "
                >Sign up to travel and earn money</a
              >
              <a href="#" class="d-block text-gray-dark"
                >Learn more about shop products with Airshipt
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-download-app py-3 py-md-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 my-3">
            <div
              class="
                row
                justify-content-sm-between
                align-items-center
                download-area
              "
            >
              <div class="col-sm-4 mb-2 mb-sm-0 download-text ml-1 ml-sm-0">
                Download the airshipt app
              </div>
              <div class="col-6 col-sm-4">
                <a href="#">
                  <img
                    src="{{asset('frontend')}}/assets/home/Group 2234.jpg"
                    class="img-fluid download-img"
                    alt=""
                  />
                </a>
              </div>
              <div class="col-6 col-sm-4">
                <a href="#">
                  <img
                    src="{{asset('frontend')}}/assets/home/Group 2235.jpg"
                    class="img-fluid download-img"
                    alt=""
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 my-3 donwload-form">
            <form class="form-inline">
              <input
                class="form-control mb-3 mb-sm-0 py-2"
                type="tel"
                id="telephone"
                aria-label="Search"
              />
              <button class="btn btn-primary w-35 py-2" type="submit">
                Get App Link
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="section-about py-3 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <h2 class="heading-main mb-3">About airshipt</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
              voluptatum minima provident saepe et, doloremque tenetur
              reiciendis iste aliquam atque omnis, deleniti pariatur officiis
              iure enim magnam velit beatae. Tempora! Lorem ipsum dolor sit amet
            </p>
            <a href="#" class="btn btn-primary px-4">Learn more</a>
          </div>
          <div class="col-md-6">
            <a href="#" class="about__video-link">
              <img
                src="{{asset('frontend')}}/assets/home/pexels-pavel-danilyuk-.jpg"
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
    <section class="section-works py-3 py-md-5">
      <div class="container">
        <div class="row text-center py-3">
          <div class="col-md-6 offset-md-3">
            <h2 class="heading-main">How airshipt works</h2>
            <p class="py-3 lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Architecto recusandae quis
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-md-2">
            <div
              class="nav flex-column nav-pills mb-3 mb-sm-0"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
            >
              <a
                class="nav-link work-tab-link mb-1 py-2 text-gray-dark active"
                id="v-pills-home-tab"
                data-toggle="pill"
                href="#v-pills-home"
                role="tab"
                aria-controls="v-pills-home"
                aria-selected="true"
                ><img
                  src="{{asset('frontend')}}/assets/book/book/book red.svg"
                  class="work-link-red mr-2"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/book/book white.svg"
                  class="work-link-white mr-2"
                  alt=""
                />Book</a
              >
              <a
                class="nav-link work-tab-link mb-1 py-2 text-gray-dark"
                id="v-pills-profile-tab"
                data-toggle="pill"
                href="#v-pills-profile"
                role="tab"
                aria-controls="v-pills-profile"
                aria-selected="false"
                ><img
                  src="{{asset('frontend')}}/assets/book/Ship/ship red.svg"
                  class="work-link-red mr-2"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/Ship/ship white.svg"
                  class="work-link-white mr-2"
                  alt=""
                />
                Ship</a
              >
              <a
                class="nav-link work-tab-link mb-1 py-2 text-gray-dark"
                id="v-pills-messages-tab"
                data-toggle="pill"
                href="#v-pills-messages"
                role="tab"
                aria-controls="v-pills-messages"
                aria-selected="false"
                ><img
                  src="{{asset('frontend')}}/assets/book/Shop/shop.svg"
                  class="work-link-red mr-2"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/Shop/shop white.svg"
                  class="work-link-white mr-2"
                  alt=""
                />
                Shop</a
              >
              <a
                class="nav-link work-tab-link mb-1 py-2 text-gray-dark"
                id="v-pills-settings-tab"
                data-toggle="pill"
                href="#v-pills-settings"
                role="tab"
                aria-controls="v-pills-settings"
                aria-selected="false"
                ><img
                  src="{{asset('frontend')}}/assets/book/Travel/travel red.svg"
                  class="work-link-red mr-2"
                  alt=""
                />
                <img
                  src="{{asset('frontend')}}/assets/book/Travel/travel white.svg"
                  class="work-link-white mr-2"
                  alt=""
                />
                Travel</a
              >
            </div>
          </div>
          <div class="col-sm-9 col-md-10">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="tab-content" id="v-pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="v-pills-home"
                    role="tabpanel"
                    aria-labelledby="v-pills-home-tab"
                  >
                    <h3 class="mb-4 works-subheading works-subheading">
                      Book your ticket
                    </h3>
                    <p>Purchase air tickets at the lowest prices.</p>
                    <ul class="work-lists">
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                    </ul>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-profile"
                    role="tabpanel"
                    aria-labelledby="v-pills-profile-tab"
                  >
                    <h3 class="mb-4 works-subheading works-subheading">
                      Book your ticket
                    </h3>
                    <p>Purchase air tickets at the lowest prices.</p>
                    <ul class="work-lists">
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                    </ul>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-messages"
                    role="tabpanel"
                    aria-labelledby="v-pills-messages-tab"
                  >
                    <h3 class="mb-4 works-subheading works-subheading">
                      Book your ticket
                    </h3>
                    <p>Purchase air tickets at the lowest prices.</p>
                    <ul class="work-lists">
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                    </ul>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-settings"
                    role="tabpanel"
                    aria-labelledby="v-pills-settings-tab"
                  >
                    <h3 class="mb-4 works-subheading">Book your ticket</h3>
                    <p>Purchase air tickets at the lowest prices.</p>
                    <ul class="work-lists">
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                      <li>
                        <i class="fa fa-check mr-1 mr-md-2 mb-2"></i> Purchase
                        air ticket at lowest price
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-none d-md-block">
                <a href="#" class="about__video-link">
                  <img
                    src="{{asset('frontend')}}/assets/home/pexels-pavel-danilyuk-.jpg"
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
        </div>
      </div>
    </section>
    <section class="section-testimonial py-3 py-md-5">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="py-4 text-center heading-main">
              What people say about us
            </h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4 px-4 py-3">
            <img src="{{asset('frontend')}}/assets/home/Google__G__Logo.svg.jpg" alt="" />
            <div class="testimonial__ratings my-3">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <blockquote class="blockquote text-size text-gray-light">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid
              est non asperiores ad ex. Hic architecto pariatur vero
            </blockquote>
            <h5 class="d-inline-block">Ahmad Ullah</h5>
            <p>Shopper</p>
          </div>
          <div class="col-md-4 px-4 py-3">
            <img src="{{asset('frontend')}}/assets/home/Google__G__Logo.svg.jpg" alt="" />
            <div class="testimonial__ratings my-3">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <blockquote class="blockquote text-size text-gray-light">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid
              est non asperiores ad ex. Hic architecto pariatur vero
            </blockquote>
            <h5 class="d-inline-block">Ahmad Ullah</h5>
            <p>Shopper</p>
          </div>
          <div class="col-md-4 px-4 py-3">
            <img src="{{asset('frontend')}}/assets/home/Google__G__Logo.svg.jpg" alt="" />
            <div class="testimonial__ratings my-3">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <blockquote class="blockquote text-size text-gray-light">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid
              est non asperiores ad ex. Hic architecto pariatur vero
            </blockquote>
            <h5 class="d-inline-block">Ahmad Ullah</h5>
            <p>Shopper</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-quick-links py-3 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h3>Quick Links</h3>
            <ul class="nav justify-content-center quick-links">
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Career</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Private Policy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer bg-primary text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col">@2021 airshipt</div>
          <div class="col text-right footer-social">
            <a href="#" class="ml-3 text-white"
              ><i class="fa fa-facebook"></i
            ></a>
            <a href="#" class="ml-3 text-white"
              ><i class="fa fa-linkedin"></i
            ></a>
            <a href="#" class="ml-3 text-white"
              ><i class="fa fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('frontend')}}/js/intlTelInput.min.js"></script>
    <script src="{{asset('frontend')}}/js/main.js"></script>
    <script src="{{asset('frontend')}}/./js/slide.js"></script>
  </body>
</html>
