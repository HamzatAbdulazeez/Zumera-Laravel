@extends('layouts.app')
@section('banner_image', 'assets/img/section/slider-1.jpeg')

@section('contents')
<div class="breadcrumb-wrap">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Our Properties</li>
          <li class="breadcrumb-item active" aria-current="page">
            Zumera Tower
          </li>
        </ol>
      </nav>
    </div>
  </div>
<section class="Tower">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="contune">
                    <h4>
                        ZUMERA TOWER
                    </h4>
                    <p>
                        We provide you adequate assistance to develop your property with extensive property development expertise. Our team is available to provide services from the purchase of land to the development of facilities and buildings to meet customers’ requirements. Our activities consist of conceptualization, design, and implementation of various development plans. The developments we conceive are driven by the desire to improve the quality of people’s living,  working and recreational environments. We build for those who wish to make a difference.
                    </p>
                    <h4 class="mt-5">
                        LOCATION
                    </h4>
                    <p class="kilo">
                        Kilometer, 10 Benin Sapele Rd, local 300102, Benin City
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="clear">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683380883/Zumera/office_urlsp1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683380883/Zumera/office_urlsp1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683380883/Zumera/office_urlsp1.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tower  Ends-->

<!-- Last -->
<section class="last">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="class">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683385782/Zumera/ba_ufahdm.png" draggable="false" alt="">
                    <h4>
                        THE ZUMRA PARKING
                    </h4>
                    <p>
                        Each office is alocatted 10 parking spaces,with an additional wash space
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="class">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683385782/Zumera/bbc_boowbf.png" draggable="false" alt="">
                    <h4>
                        THE EXECUTIVE LOUNGE
                    </h4>
                    <p>
                        Each office is alocatted 10 parking spaces,with an additional wash space
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="class">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683385782/Zumera/bbbb_yziw6y.png" draggable="false" alt="">
                    <h4>
                        EVENT SPACES
                    </h4>
                    <p>
                        Each office is alocatted 10 parking spaces,with an additional wash space
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Last  Ends-->

<!-- Third -->
<section class="Third">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-center">
                    EXTERIOR
                </h4>
                <div id="carouselExamplee" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683387011/Zumera/ll_x2zwtj.png" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683387011/Zumera/ll_x2zwtj.png" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683387011/Zumera/ll_x2zwtj.png" class="d-block w-100">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamplee" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExamplee" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p>
                    Each office is alocatted 10 parking spaces, Each office is allocated 10 parking spaces, with an additional wash space with an additional wash space
                </p>
            </div>
            <div class="col-lg-6">
                <h4 class="text-center">
                    INTERIOR
                </h4>
                <div id="carouselExampleee" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683387013/Zumera/llll_m7m7y5.png" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683387013/Zumera/llll_m7m7y5.png" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683387013/Zumera/llll_m7m7y5.png" class="d-block w-100">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleee" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleee" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p>
                    Each office is alocatted 10 parking spaces, Each office is allocated 10 parking spaces, with an additional wash space with an additional wash space
                </p>
            </div>
           <div class="right mb-4"><button>REGISTER YOUR INTEREST</button></div>
        </div>
    </div>
</section>
<!-- Third Ends -->
@endsection
