@extends('layouts.app')
@section('banner_image', 'https://res.cloudinary.com/morshudlhgmo/image/upload/v1683472274/Zumera/inv_tf8xhd.jpg')
@section('caption_title', 'BEST SERVICES IN EVERY OF OUR AREAS
OF EXPERTISE')

@section('contents')
    <div class="breadcrumb-wrap">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Invest in Zumera</li>
            </ol>
            </nav>
        </div>
    </div>
    <!-- Vodie -->
    <section class="Vodie">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h4>
                        What are the reasons to consider investing in luxury real estate with Zumera Property?
                    </h4>
                    <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" title="Dummy Video For YouTube API Test" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
<!-- Vodie -->

<!-- Icon -->
    <section class="Icon">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ion">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683410650/Zumera/icons_c2fmid.png" draggable="false" alt="">
                        <h4>Premium finishes and amenities</h4>
                        <p>
                            High-end finishes, top-of-the-line appliances,
                            smart home technology, and luxurious amenities.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ion">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683410650/Zumera/iconn_s4s0of.png" draggable="false" alt="">
                        <h4>Unique design and architecture</h4>
                        <p>
                            custom-built homes, stunning views, and sprawling estates with ample outdoor space.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ion">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683410919/Zumera/p_czmdox.png" draggable="false" alt="">
                        <h4>Exceptional location</h4>
                        <p>
                            proximity to the beach, waterfront, golf courses, or private access to nature reserves.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ion">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683410919/Zumera/pp_nwoqug.png" draggable="false" alt="">
                        <h4>Elite customer service</h4>
                        <p>
                            A dedicated team of real estate professionals, and access to exclusive listings that are not available to the general public.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ion">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683410920/Zumera/ppp_ivpwp5.png" draggable="false" alt="">
                        <h4>Comprehensive marketing</h4>
                        <p>
                            Print and digital advertising, social media campaigns, targeted email marketing, and high-quality photography of the properties.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ion">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683410920/Zumera/pppp_yag86t.png" draggable="false" alt="">
                        <h4>Strong potential for appreciation</h4>
                        <p>
                            Luxury real estate typically holds its value well and can appreciate over time, making it a solid long-term investment.
                        </p>
                    </div>
                </div>
                <button>REGISTER YOUR INTEREST</button>
            </div>
        </div>
    </section>
<!-- Icon Ends  -->
@endsection
