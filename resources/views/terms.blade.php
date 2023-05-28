@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumeraa.png')

@section('contents')
<!-- Zumaria -->
<div class="breadcrumb-wrap">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
            </ol>
        </nav>
    </div>
</div>
<!--FAQ Page-->
<main class="faqPage">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3>TERMS & CONDITIONS</h3>
                <p class="mb-4">
                These terms and conditions ("Agreement") govern your use of the services provided
by Zumera Property for all real estate transactions, including buying, selling,
renting, leasing, or managing properties. By accessing or using  our services,
you agree to be bound by these terms and conditions.
If you do not agree with any part of this Agreement, you must refrain from using our services.
                </p>
            </div>
            <div class="col-lg-10">
                <div class="faq-box">
                <details>
                        <summary>Services</summary>
                        <div class="faq-content">
                            <p> a. The Company offers a range of real estate services, including property listings, property management, property valuations, and real estate advisory services.
b. The Company may update or modify the services provided from time to time without prior notice.</p>
                        </div>
                    </details>
                    <details>
                        <summary>User Responsibilities</summary>
                        <div class="faq-content">
                            <p>a. You are solely responsible for any content you provide, including property information, images, and any other data.
b. You must ensure that all the information you provide is accurate, complete, and up to date.

c. You agree not to engage in any fraudulent, misleading, or illegal activities while using our services.
d. You are responsible for maintaining the confidentiality of your account credentials and restricting access to your account.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Property Listings</summary>
                        <div class="faq-content">
                            <p>a. Property listings provided by the Company are for informational purposes only and do not constitute an offer or guarantee of availability or suitability.
b. The Company does not verify the accuracy or completeness of the property listings and is not responsible for any errors or omissions in the information provided.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Fees and Payments</summary>
                        <div class="faq-content">
                            <p>a. The Company may charge fees for certain services, such as listing properties or property management. The applicable fees will be clearly communicated to you before using such services.
b. You agree to pay all fees and charges associated with the services as per the payment terms provided by the Company.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Intellectual Property</summary>
                        <div class="faq-content">
                            <p>a. All content provided by the Company, including logos, trademarks, text, graphics, images, and software, is the property of the Company and protected by intellectual property laws.b. You may not use, reproduce, modify, distribute, or display any of the Company's intellectual property without prior written consent.</p>
                        </div>
                    </details>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection
