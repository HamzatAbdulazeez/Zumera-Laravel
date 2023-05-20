@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumeraa.png')

@section('contents')
<!-- Zumaria -->

<!-- Form Realtor Ends-->

<!-- Addiction Form -->
<section class="Addiction">
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="bacc">
                    <div class="images">
                        <img src="assets/img/section/logo.png" alt="" />
                        <h6>
                            Becoming a Realtor with
                            Zumera Property: Join Our Team of
                            Real Estate Professionals!
                        </h6>
                        <p>
                            Copyright@2023 Zumera Properties
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <form>
                    <h2>
                        Become a Realtor
                    </h2>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="">Name:</label>
                            <input type="text" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="">Phone number:</label>
                            <input type="tel" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="">Email:</label>
                            <input type="tel" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="">Location:</label>
                            <select name="" id="">
                                <option value="#">Select your location</option>
                                <option value="Select your location">Select your location 1</option>
                                <option value="Select your location">Select your location 2</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="">Additional Information <small>(Optional)</small> </label>
                            <textarea name="" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="col-md-12 mb-4">
                            <a href="">
                                <button type="submit">SUBMIT</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
