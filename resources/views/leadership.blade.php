@extends('layouts.app')
@section('banner_image', 'https://res.cloudinary.com/morshudlhgmo/image/upload/v1683466964/Zumera/chicago_j15z09.jpg')
@section('caption_title', 'A TEAM OF EXPERIENCED EXPERTS WITH EYES
FOR LUXURY & COMFORT')
@section('contents')
<div class="breadcrumb-wrap">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">The Best</li>
                <li class="breadcrumb-item active" aria-current="page">
                    Leadership
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <h3 class="title text-center">ZUMERA EXECUTIVE LEADERSHIP</h3>
</div>
<section class="section-teams">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="individual-1"></div>
                <a href="{{route('leadership-details')}}">
                    <div class="content">
                        <h5 class="i-title">Lucky Erherha</h5>
                        <p class="i-sub-title">CEO & MANAGING DIRECTOR</p>
                        <div class="icon">
                            <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <div class="individual-2"></div>
                <div class="content">
                    <h5 class="i-title">Chidera thomas</h5>
                    <p class="i-sub-title">EXECUTIVE DIRECTOR</p>
                    <div class="icon">
                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="individual-3"></div>
                <div class="content">
                    <h5 class="i-title">JAKE EBUKA</h5>
                    <p class="i-sub-title">CHIEF FINANCIAL DIRECTOR</p>
                    <div class="icon">
                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="individual-4"></div>
                <div class="content">
                    <h5 class="i-title">OSAS TOBY</h5>
                    <p class="i-sub-title">HEAD, MARKETING DIRECTOR</p>
                    <div class="icon">
                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="individual-5"></div>
                <div class="content">
                    <h5 class="i-title">CHIGO TAFFY</h5>
                    <p class="i-sub-title">EXECUTIVE DIRECTOR</p>
                    <div class="icon">
                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="individual-6"></div>
                <div class="content">
                    <h5 class="i-title">ALIYAH JAMALDEEN</h5>
                    <p class="i-sub-title">CHIEF FINACIAL DIRECTOR</p>
                    <div class="icon">
                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="individual-7"></div>
                <div class="content">
                    <h5 class="i-title">Lucky Erherha</h5>
                    <p class="i-sub-title">CHIEF PROJECT MANAGER</p>
                    <div class="icon">
                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="individual-8"></div>
                <div class="content">
                    <h5 class="i-title">jon bellion</h5>
                    <p class="i-sub-title">HEAD, INTERNATIONAL INVESTMENT</p>
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
@endsection
