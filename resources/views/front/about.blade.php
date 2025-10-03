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


<!-- About area start here -->
<section class="about-area about-inner-area pt-120 extra-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about__left-part">
                    <div class="about__image">
                        <img src="assets/images/about/about-image1.png" alt="image">
                        <img class="sm-image" src="assets/images/about/about-image2.png" alt="image">
                        <div class="count-info">
                            <h5 class="primary-color fs-28"><span class="count primary-color">25</span>+</h5>
                            <span class="fs-14">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="about__right-wrp">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">ABOUT US</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Learn & Grow
                            Your Skills From Anywhere
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Aonsectetur
                            adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget
                            congue
                            velit in cursus leo sodales the
                            turpis euismod quis sapien euismod quis sapien the.</p>
                    </div>
                    <div class="about__right-part mt-30 wow fadeInDown" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="about__info">
                            <div class="icon bg__1">
                                <img src="assets/images/icon/about-icon1.png" alt="icon">
                            </div>
                            <div>
                                <h4>Educator Support</h4>
                                <p class="mt-10">Elit Aenean scelerisque vitae consequat the.</p>
                            </div>
                        </div>
                        <div class="about__info">
                            <div class="icon bg__2">
                                <img src="assets/images/icon/about-icon2.png" alt="icon">
                            </div>
                            <div>
                                <h4>Flexible Classes</h4>
                                <p class="mt-10">Elit Aenean scelerisque vitae consequat the.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area end here -->


@include('components.testimonials')


<!-- Discount area start here -->
<section class="discout-two-area pt-120 pb-120 primary-bg">
    <div class="container">
        <div class="col-xl-5">
            <div class="discout-two__item">
                <h2 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">15% Offer
                    For All Categories Courses</h2>
                <a href="{{ route('scheduleCall') }}" class="btn-one-light mt-30 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">Join Courses<i class="fa-light fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
    <div class="discout-two__image image">
        <img src="assets/images/offer/offer-hero.png" alt="image">
    </div>
</section>
<!-- Discount area end here -->

@endsection