@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumera.png')

@section('contents')
<div class="breadcrumb-wrap">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">News</li>
                <li class="breadcrumb-item active" aria-current="page">
                    Event
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Divider -->
    <section class="Divider">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="plus text-center">
                        <h4>
                            ZUMERA PROPERTY EVENTS
                        </h4>
                        <p>
                            LEARN MOREABOUT OUR CURRENT AND PREVIOUS EVENTS
                        </p>
                    </div>

                </div>
                <div class="col-lg-2"></div>
                <hr>
            </div>
        </div>
    </section>
<!-- Divider Ends -->
    <section class="Tower">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contune">
                        <h4>
                            ZUMERA BUSINESS CONFERENCE
                        </h4>
                        <p class="btn btn-success">Coming Soon</p>
                        <p>
                            This conference is designed to provide a platform for sharing ideas, exploring new trends and technologies, and discussing the challenges facing businesses today. You will have the opportunity to attend keynote speeches, panel discussions, and interactive sessions that will provide you with actionable strategies and practical advice to help you grow your business.
                        </p>
                        <h4 class="mt-3">
                            <button>READ MORE</button>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="clearing">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684402579/Zumera/bussiness_vioe9t.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 80px;">
                    <div class="clearing">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684403157/Zumera/women_pjbc9b.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 mt-5">
                    <div class="contune mt-5">
                        <h4>
                        WOMEN IN REAL ESTATE
                        </h4>
                        <p class="btn btn-info">Aug 02, 2023</p>
                        <p>
                            This conference is designed to provide a platform for sharing ideas, exploring new trends and technologies, and discussing the challenges facing businesses today. You will have the opportunity to attend keynote speeches, panel discussions, and interactive sessions that will provide you with actionable strategies and practical advice to help you grow your business.
                        </p>
                        <h4 class="mt-3">
                            <button>READ MORE</button>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-5 mt-5">
                    <div class="contune mt-5">
                        <h4>
                        PROPERTY AND AI INCLUSION
                        </h4>
                        <p class="btn btn-success">Coming soon</p>
                        <p>
                            This conference is designed to provide a platform for sharing ideas, exploring new trends and technologies, and discussing the challenges facing businesses today. You will have the opportunity to attend keynote speeches, panel discussions, and interactive sessions that will provide you with actionable strategies and practical advice to help you grow your business.
                        </p>
                        <h4 class="mt-3">
                            <button>READ MORE</button>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 80px;">
                    <div class="clearing">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684403326/Zumera/wonn_dqqxkq.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 80px;">
                    <div class="clearing">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684403492/Zumera/inves_gddcfe.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 mt-5">
                    <div class="contune mt-5">
                        <h4>
                        INVESTMENT OPPORTUNITY
WALK THROUGH CONFERENCE
                        </h4>
                        <p class="btn btn-success">Coming soon</p>
                        <p>
                            This conference is designed to provide a platform for sharing ideas, exploring new trends and technologies, and discussing the challenges facing businesses today. You will have the opportunity to attend keynote speeches, panel discussions, and interactive sessions that will provide you with actionable strategies and practical advice to help you grow your business.
                        </p>
                        <h4 class="mt-3">
                            <button>READ MORE</button>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Tower  Ends-->
@endsection
