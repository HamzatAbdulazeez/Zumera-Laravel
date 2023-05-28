@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumera.png')

@section('contents')
<div class="breadcrumb-wrap">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"> >> The Best >> Leadership>></li>
                <li class="breadcrumb-item active" aria-current="page">
                Lucky Erherha
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Tribe Satrt -->
<section class="Tribe" style="padding: 10px 0 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="code">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1685302876/Zumera/ceo_x39e2j.png" draggable="false" alt="">
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="all">
                    <h4>
                    Lucky Erherha
                    </h4>
                    <h4>
                    CEO & MANAGING DIRECTOR
                    </h4>
                    <p>
                    Lucky Erherha is a prominent real estate CEO known for his exceptional leadership and entrepreneurial spirit in the industry. Born and raised in Nigeria, Lucky developed a keen interest in real estate from a young age and embarked on a journey to make a significant impact in the field.
                    </p>
                    <p>
                    With a strong educational background in business administration and a deep understanding of market dynamics, Lucky Erherha established his own real estate company, which quickly gained recognition for its innovative approaches and commitment to excellence. Under his astute guidance, the company experienced rapid growth and became a major player in the real estate sector.
                    </p>
                    <div class="icon">
                            <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tribe  Ends-->
@endsection
