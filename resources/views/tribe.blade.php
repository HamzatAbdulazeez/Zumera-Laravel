@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumeraa.png')

@section('contents')
<!-- Zumaria -->
<div class="breadcrumb-wrap">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Join Our Tribe</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Tribe Satrt -->
<section class="Tribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="code">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684401004/Zumera/zum_kxg80t.png" draggable="false" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="all">
                    <h4>
                        THE ZUMERA TRIBE
                    </h4>
                    <p>
                        We are people who challenge the norm: the TRIBE of pacesetters. We transcend barriers through curiosity to be the groundbreakers in all sectors.

                        We are the trailblazers of innovation. By exerting critical thinking, we evolve and maintain a global mindset; constantly looking for new ways to ignite change.

                        We are innovators, transformers and leaders. This is our culture—setting standards and revolutionizing the status quo.
                    </p>
                    <a href="#">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684401386/Zumera/mdi_linkedin_p4obgz.png" draggable="false" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tribe  Ends-->

<!-- Position -->
 <!-- Propety -->
 <section class="Propety" style="background-color: #F1F1F1; padding:100px 0px 100px 0">
        <div class="container">
          <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
                <h4>OPEN POSITIONS</h4>
            </div>
          </div>
          <div class="col-lg-12 mt-5"></div>
            <div class="col-lg-4">
              <div class="control">
                <img
                  src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684401879/Zumera/ff_o3ymol.png"
                  draggable="false"
                  alt=""
                />
                <div class="cloat">
                  <h4>BUSINESS DEVELOPER</h4>
                  <p>
                  We are looking for a passionate Business development Guru, with experience in...
                  </p>
                  <a href="">
                    <div class="alrighy">READ MORE »</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="control">
                <img
                  src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684401878/Zumera/fff_zm6lea.png"
                  draggable="false"
                  alt=""
                />
                <div class="cloat">
                  <h4>VIDEO EDITOR</h4>
                  <p>
                  We are looking for a passionate Business development Guru, with experience in...
                  </p>
                  <a href="">
                    <div class="alrighy">READ MORE »</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="control">
                <img
                  src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684401878/Zumera/f_ondljk.png"
                  draggable="false"
                  alt=""
                />
                <div class="cloat">
                  <h4>ACCOUNTANT</h4>
                  <p>
                  We are looking for a passionate Business development Guru, with experience in...
                  </p>
                  <a href="">
                    <div class="alrighy">READ MORE »</div>
                  </a>
                </div>
              </div>
            </div>
            <button>SEE MORE OPENINGS</button>
          </div>
        </div>
      </section>
      <!-- Propety Ends -->
@endsection
