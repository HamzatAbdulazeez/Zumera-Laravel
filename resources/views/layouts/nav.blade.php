<body onload="loadfunc()">
    <div id="loading" class="desktop"></div>
    <div id="loadingMobile" class="mobile"></div>
    <div class="contact d-none d-md-block">
        <div class="container">
            <div class="text-end">
                <ul>
                    <li><a href="javascript:void(0);">(+234) 9030 000 000</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Join our tribe</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="zumeraNav">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-transparent">
          <div class="container-fluid">
            <a class="navbar-brand" href="/">
              <img src="assets/img/section/logo.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarNav"
            >
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="{{route('philosophy')}}"
                    aria-expanded="false"
                  >
                    The Best
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="{{route('philosophy')}}">our philosophy</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('leadership')}}">LEADERSHIP</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('invest')}}">INVEST IN ZUMERA</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('tribe')}}">ZUMERA TRIBE</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('faq')}}">FAQS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('csr')}}">CSR</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('contact')}}">CONTACT US</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="{{route('properties')}}"
                    aria-expanded="false"
                  >
                    Our Projects
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="{{route('tower')}}">The Zumera Tower</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">The Elites</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">queen idia residence</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">the elite land</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="{{route('services')}}"
                    aria-expanded="false"
                  >
                    Our Services
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="{{route('properties')}}">Property Investment</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('properties')}}">Property Development</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('properties')}}">Property Management</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="{{route('blog')}}"
                    aria-expanded="false"
                  >
                    News
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="{{route('blog')}}">Blog</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('event')}}">Event</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('realtor')}}"
                    >Become a realtor</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="slideshow-container">
      <div class="mySlides active">
        <!-- <div class="numbertext">1 / 3</div> -->
        <img src="@yield('banner_image')" >
        <div class="caption-body">
          <h3 class="caption-title">@yield('caption_title')</h3>
          @yield('caption_text')
        </div>
      </div>

      <!-- <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="assets/img/section/slider-2.jpeg" />
        <div class="caption-body">
          <h3 class="caption-title">ZUMERA TOWER</h3>
          <p class="caption-text">
            Eko Hotel meets Trancorp Hilton - a 7-in-1 Luxurious Masterpiece in
            the centre of Benin City.
          </p>
        </div>
      </div> -->
      @yield('caption_dot')
    </div>
