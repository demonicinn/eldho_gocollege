@extends('layouts.app')
@section('content')

<!-- Banner area start here -->
<section class="banner-inner-area sub-bg bg-image" data-background="assets/images/bg/banner-inner-bg.png">
    <div class="container">
        <div class="banner-inner__content">
            <h1>
                About Us
            </h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><i class="fa-regular fa-angle-right"></i></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner area end here -->




@include('components.about')

@include('components.testimonials')


<!-- Discount area start here -->
<section class="discout-two-area pt-120 pb-120 primary-bg">
    <div class="container">
        <div class="col-xl-5">
            <div class="discout-two__item">
                <h2 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Ready To Find Your Perfect Program?</h2>
                <a href="{{ route('scheduleCall') }}" class="btn-one-light mt-30 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">Start Your Free Consultation<i class="fa-light fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
    <div class="discout-two__image image">
        <img src="assets/images/offer/offer-hero.png" alt="image">
    </div>
</section>
<!-- Discount area end here -->

@endsection