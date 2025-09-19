@extends('layouts.app')
@section('content')

<!-- Banner area start here -->
<section class="banner-inner-area sub-bg bg-image" data-background="assets/images/bg/banner-inner-bg.png">
    <div class="container">
        <div class="banner-inner__content">
            <h1>
                Courses Details
            </h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><i class="fa-regular fa-angle-right"></i></li>
                <li>Courses Details</li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner area end here -->

<!-- Courses area start here -->
<section class="courses-details-two-area pt-120 pb-120">
    <div class="container">
        <div class="courses-details-two__item bor-bottom pb-30 mb-40">
            <div class="image mb-40 position-relative">
                <img src="{{ $course->image_path }}" alt="image">
            </div>
            <div class="d-flex justify-content-between flex-wrap gap-4">
                <div>
                    <h3 class="fs-30 mb-30">{{ $course->title }}</h3>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-8 order-2 order-lg-1">
                
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="overview" aria-labelledby="overview-content">
                        <div class="courses-details__item-left">
                            <div class="content mb-30">
                                {!! $course->description !!}
                            </div>
                        </div>


                        <div class="blog-details__form mt-60">
                            <h3 class="mb-30">Write a Review</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="name">Your Name*</label>
                                        <input id="name" class="bg-transparent bor" type="text"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="col-6">
                                        <label for="email">Your Email*</label>
                                        <input class="bg-transparent bor" id="email" type="email"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="text-area">
                                    <label for="massage">Write Message*</label>
                                    <textarea class="bg-transparent bor" id="massage"
                                        placeholder="Write Message"></textarea>
                                </div>
                                <div class="btn-two">
                                    <span class="btn-circle">
                                    </span>
                                    <a href="#" class="btn-one">Send Review <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </form>
                        </div>
                                
                    </div>
                    

                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="courses-details__item-right">
                    <div class="item">
                        <h3>Course includes:</h3>
                        <ul>
                            @foreach($course->data as $data)
                            <li>
                                <p><strong>{{ $data->title }}:</strong> <span>{{ $data->value }}</span></p>
                            </li>
                        	@endforeach
                            
                        </ul>
                        <a href="#0" class="btn-one">Get Details<i
                                class="fa-light fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses area end here -->



<!-- Courses area start here -->
<section class="courses-area pt-120 pb-120">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">POPULAR COURSES</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Explore Our <span>Popular Courses</h2>
        </div>

        <div class="row g-4">
            @foreach($suggestCourses as $scourse)
            @include('components.course', ['acourse'=>$scourse])
            @endforeach
        </div>
    </div>
</section>
<!-- Courses area end here -->

@endsection