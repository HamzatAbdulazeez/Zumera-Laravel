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
            <div class="col-lg-6">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/9xwazD5SyVg" title="Dummy Video For YouTube API Test" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="contune">
                    <h4>
                        ZUMERA TOWER
                    </h4>
                    <p>
                        We provide you adequate assistance to develop your property with extensive property development expertise. Our team is available to provide services from the purchase of land to the development of facilities and buildings to meet customers’ requirements. Our activities consist of conceptualization, design, and implementation of various development plans. The developments we conceive are driven by the desire to improve the quality of people’s living, working and recreational environments. We build for those who wish to make a difference.
                    </p>
                    <h4 class="mt-5">
                        LOCATION
                    </h4>
                    <p class="kilo">
                        Kilometer, 10 Benin Sapele Rd, local 300102, Benin City
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tower  Ends-->
<!-- Project -->
<section class="Project">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">
                    PROJECT OVERVIEW
                </h4>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="handle">
                    <div class="images">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685303950/Zumera/a_hxvyfx.png" draggable="false" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="handle">
                    <div class="images mb-3">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685303951/Zumera/b_zpaw8b.png" draggable="false" alt="">
                    </div>
                    <div class="images">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685303951/Zumera/c_wgl2xv.png" draggable="false" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="handle">
                    <div class="images mb-3">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685304354/Zumera/ll_chhovn.png" draggable="false" alt="">
                    </div>
                    <div class="images">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685303951/Zumera/e_ybfpiq.png" draggable="false" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-4">
                <div class="handle">
                    <div class="images mb-3">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685304255/Zumera/last_ndyagf.png" draggable="false" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="handle">
                    <div class="images mb-3">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685303952/Zumera/d_wdkpgr.png" draggable="false" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Project  Ends-->

<!-- Layer  Ends-->
<section class="Layer">
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="cover">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685304722/Zumera/layer_x9p59v.png" draggable="false" alt="">
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <h4>OUR EXQUISITE FACILITIES</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="coming">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685305184/Zumera/house_i8apu8.png" draggable="false" alt="">
                            <span>Premium Commercial Office Spaces</span>
                        </div>
                        <div class="coming">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685305184/Zumera/well_nplp7o.png" draggable="false" alt="">
                            <span>Well Secured with
                                the best technology</span>
                        </div>
                        <div class="coming">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685305183/Zumera/electricity_jaltka.png" draggable="false" alt="">
                            <span>24/7 Uniterrupted
                                Power Supply</span>
                        </div>

                        <button>Learn More</button>
                    </div>
                    <div class="col-sm-6">
                        <div class="coming">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685305183/Zumera/hotel_wmgivc.png" draggable="false" alt="">
                            <span>Luxury hotel
                                & Lodge space</span>
                        </div>
                        <div class="coming">
                            <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685305630/Zumera/uer_ryqpsw.png" draggable="false" alt="">
                            <span>Large Capacity
                                Auditorium</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<!-- Layer  Ends-->
<!-- Last -->
<section class="last" style="padding:0 0 100px 0 ;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
            <h4 class="text-center mb-4">KEY FEATURES</h4>
            </div>
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
<!-- <section class="Third">
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
</section> -->
<!-- Third Ends -->
@endsection
