<!-- Testimonial area start here -->
<section class="testimonial-ten-area sub-bg-two pt-120 pb-180">
    <div class="testimonial-two__wrp">
        <div class="row g-5">
            <div class="col-xxl-4">
                <div class="section-header">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">TESTIMONIALS</h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Testimonials from
                        Our <span>Students <img src="assets/images/shape/header-shape.png" alt="shape"></span>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Aonsectetur
                        adipiscing elit Aenean scelerisque augue <br> vitae consequat Juisque eget
                        congue.
                    </p>
                    <div class="d-flex align-items-center gap-3 mt-30 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms"><button class="arry-prev testimonial-two__arry-prev"><i
                                class="fa-light fa-arrow-left-long"></i></button>
                        <button class="arry-next testimonial-two__arry-next active"><i
                                class="fa-light fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="swiper testimonial-two__slider shadow radius8">
                    <div class="swiper-wrapper">
                        
                        @foreach(testimonials() as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-two__item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="image">
                                        <img src="{{ $testimonial->image_path }}"
                                            alt="image">
                                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0V18L9 9V0H0ZM15 0V18L24 9V0H15Z" fill="#2EB97E" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h4>{{ $testimonial->name }}</h4>
                                    </div>
                                </div>
                                <p class="mt-40 mb-30">{{ $testimonial->testimonial }}</p>
                                <div class="star">
                                    @for($i=1; $i<=5; $i++)
                                    <i class="fa-sharp fa-solid fa-star {{ ($i > $testimonial->rating) ? 'disabled' : '' }}"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial area end here -->


{{--
<!-- Testimonial area start here -->
<!-- <section class="testimonial-ten-area sub-bg-two pt-120 pb-120">
    <div class="container">
        <div class="testimonial-ten__wrp">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="swiper testimonial__slider-image">
                        <div class="swiper-wrapper">
                            
                            @foreach(testimonials() as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial__image image">
                                    <img src="{{ $testimonial->image_path }}" alt="image">
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__right-item pl-40">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                Testimonials
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">What’s Clients Say
                            </h2>
                        </div>
                        <div class="swiper testimonial__slider wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="swiper-wrapper">
                                
                                @foreach(testimonials() as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial__item">
                                        <p class="fw-500 fs-18">{{ $testimonial->testimonial }}</p>
                                        <div
                                            class="d-flex align-items-center justify-content-between gap-4 mt-30">
                                            <div>
                                                <h4>{{ $testimonial->name }}</h4>
                                                <div class="star mt-1">
                                                    @for($i=1; $i<=5; $i++)
                                                    <i class="fa-sharp fa-solid fa-star {{ ($i > $testimonial->rating) ? 'disabled' : '' }}"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dot testimonial__dot"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Testimonial area end here -->
--}}