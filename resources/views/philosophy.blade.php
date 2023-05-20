@extends('layouts.app')
@section('banner_image', 'https://res.cloudinary.com/morshudlhgmo/image/upload/v1683471733/Zumera/tree_tmd0g2.jpg')
@section('caption_title', 'NIGERIA’S NUMBER ONE LUXURY PROPERTY
DEVELOPER')

@section('contents')
<div class="breadcrumb-wrap">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Our Philosophy</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="section-story">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <h3 class="title">OUR STORY</h3>
          <p class="text">
            Zumera, a truly Nigerian brand with a global outlook and
            privileged exposure to first-class developments, and extraordinary
            lifestyle across the world, was founded with a passion to create
            exceptional structures and infrastructures, that open-up African
            communities to insurmountable opportunities, and transform the
            lives of the people.
          </p>
          <p class="text">
            Every great business solution starts with a question. Ours was
            simple, how can we transform communities in Nigeria, to make them
            appealing to businesses and people, and in return create
            opportunities that can improve the lives of the people?
          </p>
          <p class="text">
            We noticed too many young and industrious Nigerians are moving
            away from their cities, seeking for greener pastures in either
            Lagos or Abuja, while a few others are have travelled abroad.
            Intrigued by the exceptional successes of Nigerians abroad when
            provided with basic infrastructures, and the enormous natural
            resources of Nigeria as a country, we began to ask WHY?
          </p>
          <p class="text">
            It turns out that there was a simple solution – build innovative
            structures and architectures that can create opportunities for
            communities and the people that live in them. Dubai was just a
            desert land until someone decided to transform it into a
            destination city through infrastructural development.
          </p>
        </div>
        <div class="col-sm-12 col-lg-6 left-story">
          <div class="story-frame"></div>
          <div class="carousel"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-story-philo">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-lg-6 col-xl-5 image">
          <div class="row">
            <div class="col-6 col-md-6">
              <img
                class="mb-1"
                src="assets/img/section/story-phi-1.png"
                alt=""
              />
              <img
                class="mt-1"
                src="assets/img/section/story-phi-2.png"
                alt=""
              />
            </div>
            <div class="col-6 col-md-6">
              <img
                class="mb-1"
                src="assets/img/section/story-phi-3.png"
                alt=""
              />
              <img
                class="mt-1"
                src="assets/img/section/story-phi-4.png"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6-col-xl-7">
          <div class="content">
            <p class="text">
              We started Zumera because we believe that great cities are made
              by world class structures and infrastructures, and Nigeria has
              sufficient human and natural resources to become a world-class
              nation, one city at a time.
            </p>
            <h4 class="sub-title">Vision:</h4>
            <p class="text">
              To build an inspired and sustainable future for African
              communities, starting with Nigeria
            </p>
            <h4 class="sub-title">Mission:</h4>
            <p class="text">
              We strive to offer the highest possible standard, the most
              innovative solution, and the best value to Nigerians, one
              community, and one project at a time.
            </p>
            <h4 class="sub-title">CORE VALUES</h4>
            <div class="core-icon text-center">
              <div class="row">
                <div class="col-4 col-md-4 col-lg-3">
                  <p>
                    <img src="assets/img/icons/z-icon-inno.png" />
                  </p>
                  <p class="type">INNOVATION</p>
                </div>
                <div class="col-4 col-md-4 col-lg-3">
                  <p>
                    <img src="assets/img/icons/z-icon-trust.png" />
                  </p>
                  <p class="type">TRUST</p>
                </div>
                <div class="col-4 col-md-4 col-lg-3">
                  <p>
                    <img src="assets/img/icons/z-icon-trans.png" />
                  </p>
                  <p class="type">TRANSFORMATION</p>
                </div>
                <div class="col-2 d-block d-sm-block d-md-block d-lg-none">
                </div>
                <div class="col-4 col-md-4 col-lg-3">
                  <p>
                    <img src="assets/img/icons/z-icon-people.png" />
                  </p>
                  <p class="type">PEOPLE</p>
                </div>
                <div class="col-4 col-md-4 col-lg-3">
                  <p>
                    <img src="assets/img/icons/z-icon-comm.png" />
                  </p>
                  <p class="type">COMMUNITY</p>
                </div>
                <div class="col-2 d-block d-sm-block d-md-block d-lg-none">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-attention">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="frame-1"></div>
          <div class="img-1"></div>
          <div class="atten-content">
            <h5 class="atten-title">100% ATTENTION TO DETAILS</h5>
            <p class="atten-text">
              Each office is alocatted 10 parking spaces, with an additional
              wash space
            </p>
          </div>
        </div>
        <div class="col new">
          <div class="frame-2"></div>
          <div class="img-2"></div>
          <div class="atten-content-2">
            <h5 class="atten-title">BLISSFUL SPACE & ENVIRONMENT</h5>
            <p class="atten-text">
              Each office is alocatted 10 parking spaces, with an additional
              wash space
            </p>
          </div>
        </div>
        <div class="col">
          <div class="frame-3"></div>
          <div class="img-3"></div>
          <div class="atten-content-3">
            <h5 class="atten-title">UNIQUE FINISHING TO STANDARD</h5>
            <p class="atten-text">
              Each office is alocatted 10 parking spaces, with an additional
              wash space
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
