@extends('layouts.app')
@section('banner_image', 'assets/img/section/slider-1.jpeg')
@section('caption_title', 'BEST SERVICES IN EVERY OF OUR AREAS
OF EXPERTISE')

@section('contents')
<div class="breadcrumb-wrap">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Our Services
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="container">
    <h3 class="title">OUR SERVICES</h3>
    <p class="text">
      Zumera Property is a world-class real estate company that is committed
      to building revolutionary structures and infrastructures, that open up
      communities to opportunities; offer the highest possible standard, and
      give the best possible value to Nigerians. By applying the concept of
      innovative thinking to all we do, we are able to create distinction and
      a unique advantage. Our specialization include Property Development,
      Investment and Management.
    </p>
  </div>

  <section class="section-prop-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5 my-height" style="height: 337px">
          <div class="frame"></div>
          <div class="img-bg"></div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="content">
            <h3 class="title">PROPERTY DEVELOPMENT</h3>
            <p class="text">
              Unlike a lot of developers, we do property development
              differently. Our commitment is not just in building world-class
              structures for the sake of building, but erecting exceptional
              structures that can compete with some of the best in world, with
              a focus on value creation for investors, communities where our
              project is located, and value for all stakeholders. Value
              creation is at the centre of what we do as an organization.
              <br />
              Our current projects include The Zumera Tower, The Elite
              Residences, Queen Idia Residence and Zumera Elite Lands.
            </p>
            {{-- <button class="learn-more mt-5">Learn more</button> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-prop-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5 my-height d-block d-sm-none">
            <div class="img-bg"></div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="content">
            <h3 class="title">PROPERTY INVESTMENT</h3>
            <p class="text">
              Our Property Investment service is hinged on the concept of
              creating wealth together because real estate provides the
              highest returns, the greatest values and the least risk ever.
              Our property investment service caters to the needs of savvy and
              long or short term investors, who understand the numerous
              opportunities of real estate investment and are willing to
              either invest in owning a property, or invest for a short-term
              period of 1 to 2 years and earn up to 60% ROI.
            </p>
            {{-- <button class="learn-more mt-5 mb-5">Learn more</button> --}}
          </div>
        </div>
        <div class="col-md-6 col-lg-5 my-height d-none d-sm-block">
          <div class="img-bg"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-prop-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5 my-height" style="height: 337px">
          <div class="frame"></div>
          <div class="img-bg"></div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="content">
            <h3 class="title">PROPERTY MANAGEMENT</h3>
            <p class="text">
              One of the areas in which we excel is in Property Management,
              and this is fundamentally because we operate a mantra that a
              property is as good as the quality of maintenance and management
              it is constantly exposed to. For us at Zumera, our commitment to
              quality management is second to none. We have put together some
              of the best professionals in building management to oversee all
              of our projects and also extend to other structures that need
              professional management.
            </p>
            {{-- <button class="learn-more mt-5">Learn more</button> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
