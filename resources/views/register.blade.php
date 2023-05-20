@extends('layouts.half')
@section('banner_image', 'assets/img/section/Zumeraa.png')

@section('contents')
<!-- Zumaria -->

<!-- Form Realtor -->
<section class="Realtor">
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="images">
                    <img src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1684504161/Zumera/register_ejepeq.png" draggable="false">
                </div>
            </div>
            <div class="col-lg-5">
                <form>
                    <h2>
                        Register your interest
                    </h2>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="">Name:</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="">Phone number:</label>
                            <input type="tel" placeholder="Enter your phone number" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="">Email:</label>
                            <input type="tel" placeholder="Enter your Phone number" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="">Interest:</label>
                            <select name="" id="">
                                <option value="#">Select project</option>
                                <option value="Select project">Select project 1</option>
                                <option value="Select project">Select project 2</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-4">
                            <a href="">
                                <button type="submit">SUBMIT</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<!-- Form Realtor Ends-->
@endsection
