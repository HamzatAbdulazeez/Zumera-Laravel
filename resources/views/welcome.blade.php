@extends('layouts.app')
@section('banner_image', 'assets/img/section/slider-1.jpeg')
@section('caption_title', 'ZUMERA TOWER')
@section('caption_text')
    <p class="caption-text">
        Eko Hotel meets Trancorp Hilton - a 7-in-1 Luxurious Masterpiece in
        the centre of Benin City.
    </p>
@endsection
@section('caption_dot')
<div class="caption-dot">
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
@endsection

@section('contents')
<section class="section-intro container">
    <div class="row">
      <div class="col-md-5 col-lg-6 col-xl-5 sec-frame">
        <div class="frame"></div>
        <div class="img"></div>
      </div>
      <div class="col-md-7 col-lg-6 col-xl-7">
        <div class="content">
          <h3 class="title">
            WELCOME TO ZUMERA – AFRICA’S MOST INNOVATIVE & RELIABLE REAL
            ESTATE FIRM FROM BENIN CITY, NIGERIA
          </h3>
          <p class="text">
            Zumera Property is an innovative real estate and construction
            company with a vision to build sustainable world-class structures
            that open-up communities to opportunities and create new
            experiences that transform the lives of the people
          </p>
          <div class="mt-5">
            <a href="{{route('philosophy')}}" class="button learn-more">Learn more</a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="section-project">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-lg-6 col-xl-5">
          <div class="intro">
            <h3 class="title">OUR PROJECTS</h3>
            <p class="text">
              Our projects are an extension of our brand, and therefore
              reflect our passion for innovative designs, unparalleled
              excellence and a commitment to people and community
              transformation, through infrastructural development and value
              creation. We at Zumera are devoted to setting exceptional
              standards in Benin City, through our projects.
            </p>
            <div class="mt-5">
                <a href="{{route('philosophy')}}" class="button learn-more mt-5">SEE ALL PROPERTIES</a>
            </div>

          </div>
        </div>
        <div class="col-md-7 col-lg-6 col-xl-7">
          <div class="sec-proj-wrap">
            <div class="row">
              <div class="col">
                <div class="sec-proj">
                  <img src="assets/img/section/sec-prog-img-1.png" />
                  <h3 class="title mt-2">ZUMERA TOWER</h3>
                  <p class="text">
                    The Zumera Tower, a 7-in-1 luxurious Masterpiece in the
                    centre of Benin City that will offer an unparalleled
                    retail variety, combined with world-class hospitality,
                    entertainment and enchanting leisure attractions. The
                    first of its kind in Benin City.
                  </p>
                  <a href="{{route('tower')}}">Read more >></a>
                </div>
              </div>
              <div class="col">
                <div class="sec-proj">
                  <img src="assets/img/section/sec-proj-img-2.png" />
                  <h3 class="title mt-2">THE ELITE RESIDENCE</h3>
                  <p class="text">
                    Our proposed luxury 4 Pedroom Premium Villas and
                    Penthouses that will shape the standard for residential
                    building in Benin City. This well-finished residential
                    property will blur the lines between design and technology
                    with features and facilities that sets standards.
                  </p>
                  <a href="#">Read more >></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-philo">
    <div class="container">
      <div class="philo">
        <div class="row">
          <div class="col-md-4 philo-left">
            <div class="img-bg"></div>
          </div>
          <div class="col-md-8">
            <div class="content">
              <h3 class="title mt-2">OUR PHILOSOPHY</h3>
              <h4 class="sub-title">Vision:</h4>
              <p class="text">
                To build an inspired and sustainable future for African
                communities, starting with Nigeria
              </p>
              <h4 class="sub-title">Mission:</h4>
              <p class="text">
                We strive to offer the highest possible standard, the most
                innovative solution, and the best value to Nigerians, one
                community, and one project at a time.
              </p>
              <h4 class="sub-title">CORE VALUES</h4>
              <div class="core-icon text-center">
                <div class="row">
                    <div class="col-4 col-md-4 col-lg-2">
                      <p>
                        <img src="assets/img/icons/z-icon-inno.png" />
                      </p>
                      <p class="type">Innovation</p>
                    </div>
                    <div class="col-4 col-md-4 col-lg-2">
                      <p>
                        <img src="assets/img/icons/z-icon-trust.png" />
                      </p>
                      <p class="type">Trust</p>
                    </div>
                    <div class="col-4 col-md-4 col-lg-2">
                      <p>
                        <img src="assets/img/icons/z-icon-trans.png" />
                      </p>
                      <p class="type">Transformation</p>
                    </div>
                    <div class="col-2 d-block d-sm-block d-md-block d-lg-none">
                    </div>
                    <div class="col-4 col-md-4 col-lg-2">
                      <p>
                        <img src="assets/img/icons/z-icon-people.png" />
                      </p>
                      <p class="type">people</p>
                    </div>
                    <div class="col-4 col-md-4 col-lg-2">
                      <p>
                        <img src="assets/img/icons/z-icon-comm.png" />
                      </p>
                      <p class="type">community</p>
                    </div>
                    <div class="col-2 d-block d-sm-block d-md-block d-lg-none">
                    </div>
                </div>
              </div>
              {{-- <a href="{{route('philosophy')}}" class="button learn-more">Learn more</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-blog pb-5 mb-5">
    <div class="container">
      <h3 class="title">ZUMERA PROPERTIES LATEST NEWS</h3>
      <h5 class="subtitle">READ MORE ABOUT OUR LATEST ACTIVITIES</h5>
      <div class="blogs mt-5">
        <div class="row">
          <div class="col-sm-6 col-lg-6 col-xl-4 blog">
            <img src="assets/img/blog/blog-img-1.png" />
            <div class="blog-contents">
              <h3 class="blog-title">
                Zumera’s visits the slums of Lagos in Abule Egba and Mafoluku
              </h3>
              <p class="blog-content">
                Zumera stands for "Better", and for us to provide a better
                tomorrow for the vital few who understand the power of luxury.
              </p>
              <a href="{{route('view-blog')}}">Read more >></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6 col-xl-4 blog">
            <img src="assets/img/blog/blog-img-2.png" />
            <div class="blog-contents">
              <h3 class="blog-title">
                Zumera’s visits the slums of Lagos in Abule Egba and Mafoluku
              </h3>
              <p class="blog-content">
                Zumera stands for "Better", and for us to provide a better
                tomorrow for the vital few who understand the power of luxury.
              </p>
              <a href="{{route('view-blog')}}">Read more >></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6 col-xl-4 blog">
            <img src="assets/img/blog/blog-img-3.png" />
            <div class="blog-contents">
              <h3 class="blog-title">
                Zumera’s visits the slums of Lagos in Abule Egba and Mafoluku
              </h3>
              <p class="blog-content">
                Zumera stands for "Better", and for us to provide a better
                tomorrow for the vital few who understand the power of luxury.
              </p>
              <a href="{{route('view-blog')}}">Read more >></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
