@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumeraa.png')

@section('contents')
    <!-- Zumaria -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
            </ol>
            </nav>
        </div>
    </div>
   <!--FAQ Page-->
   <main class="faqPage">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Have questions? We are here to help.</h2>
                </div>
                <div class="col-lg-10">
                    <div class="faq-box">
                        <details>
                            <summary>How can I increase the value of my property before selling it?</summary>
                            <div class="faq-content">
                                <p>Start by determining your budget, getting pre-approved for a mortgage,
hiring a real estate agent, and searching for properties</p>
                            </div>
                        </details>
                        <details>
                            <summary>What is the process of buying a home and what steps should I take?</summary>
                            <div class="faq-content">
                                <p>Start by determining your budget, getting pre-approved for a mortgage,
hiring a real estate agent, and searching for properties</p>
                            </div>
                        </details>
                        <details>
                            <summary>What factors should I consider when determining my budget for a property?</summary>
                            <div class="faq-content">
                                <p>Consider your income, expenses, debts, credit score, and down payment amount to
determine your budget.</p>
                            </div>
                        </details>
                        <details>
                            <summary>How can I find a reliable real estate agent to assist me in buying a property?</summary>
                            <div class="faq-content">
                                <p>Ask for recommendations, research agencies, read reviews, and interview multiple
agents to find a reliable one. Zumera is the most relaible option.</p>
                            </div>
                        </details>
                        <details>
                            <summary>How do I start the process of buying a property?</summary>
                            <div class="faq-content">
                                <p>Start by determining your budget, getting pre-approved for a mortgage,
hiring a real estate agent, and searching for properties</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
