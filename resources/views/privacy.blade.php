@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumeraa.png')

@section('contents')
<!-- Zumaria -->
<div class="breadcrumb-wrap">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
            </ol>
        </nav>
    </div>
</div>
<!--FAQ Page-->
<main class="faqPage">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3>Privacy Policy</h3>
                <p class="mb-4">
                    At Zumera Property, we are committed to protecting the privacy and security of your
                    personal information. This Privacy Policy outlines how we collect, use, disclose, and
                    store the information we receive from our clients, users, and visitors. By accessing
                    our website or using our services, you agree to the terms of this policy.
                </p>
            </div>
            <div class="col-lg-10">
                <div class="faq-box">
                    <details>
                        <summary>Information We Collect:</summary>
                        <div class="faq-content">
                            <p>a. Personal Information: We may collect personal information, such as your name, email address, phone number, and mailing address, when you provide it voluntarily or when it is necessary for the provision of our services.
                                b. Usage Information: We may collect information about how you use our website and services, including your IP address, device information, browser type, pages visited, and referring/exit pages.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Information Sharing:</summary>
                        <div class="faq-content">
                            <p>a. We may share your personal information with trusted third parties who assist us in providing our services, such as payment processors and service providers.
                                b. We may disclose your information if required by law or to protect our rights, property, or safety, or the rights, property, or safety of others.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Data Security:</summary>
                        <div class="faq-content">
                            <p>a. We implement industry-standard security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction.
                                b. However, please note that no method of transmission or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Cookies and Tracking Technologies:</summary>
                        <div class="faq-content">
                            <p>a. We use cookies and similar tracking technologies to enhance your experience on our website and collect information about how you interact with our services.
                                b. You can adjust your browser settings to refuse cookies, but please note that some features of our website may not function properly as a result.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Changes to the Privacy Policy:</summary>
                        <div class="faq-content">
                            <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with a revised "Last Updated" date. We encourage you to review the Privacy Policy periodically.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
