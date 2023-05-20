@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumera.png')

@section('contents')
    <!-- Zumaria -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Zumera</li>
            </ol>
            </nav>
        </div>
    </div>
  <!-- Contact Us -->
    <section class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>
                            CONTACT ZUMERA PROPERTY
                        </h2>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="social">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684393274/Zumera/phone_ccqdn7.png" draggable="false">
                        <p>
                        + 234 999 9999 000
                        </p>
                        <p>
                        + 234 999 9999 000
                        </p>
                        <p>
                        + 234 999 9999 000
                        </p>
                    </div>
                    <div class="sociall">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684393274/Zumera/mapp_ykgybo.png" draggable="false">
                        <p>
                        Kilometer, 10 Benin Sapele Rd, Local 300102, Benin City Nigeria
                        </p>
                    </div>
                    <div class="sociall">
                        <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684393274/Zumera/email_ekkogz.png" draggable="false">
                        <p>
                        Support@zumeragroup.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <map name="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.05895383483!2d5.493496943359385!3d6.230492999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040de8cf7b93197%3A0x7a86cdf5c56d956f!2sZumera%20Tower!5e0!3m2!1sen!2sng!4v1684393687336!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </map>
                </div>
            </div>
        </div>
    </section>
   <!-- Contact Us  Ends-->
@endsection
