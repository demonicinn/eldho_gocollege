<!-- Testimonial area start here -->
<section class="testimonial-ten-area sub-bg-two pt-120 pb-120">
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
</section>
<!-- Testimonial area end here -->