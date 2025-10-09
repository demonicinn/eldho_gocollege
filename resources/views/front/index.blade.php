@extends('layouts.app')
@section('content')

<!-- Banner area start here -->
<section class="banner-area pt-190 pb-190 sub-bg bg-image"
    data-background="assets/images/bg/banner-shadow.png">
    
    <div class="container">
        <div class="banner__content">
            {{--<h5 class="mb-10 primary-color text-capitalize wow fadeInUp" data-wow-delay="00ms"
                data-wow-duration="1500ms">ONLINE LARNING COURSE</h5>--}}
            <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <!-- Simplifying College Admissions With Full Funding Options -->
                Simplifying College Admissions & Funding Options
            </h1>
            <p class="mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Get free admission guidance to top Ontario career colleges and secure the best financial aid options.</p>
            <a href="{{ route('scheduleCall') }}" class="btn-one mt-50">Check My Eligibility<i class="fa-light fa-arrow-right-long"></i></a>
        </div>
    </div>
    <div class="banner__hero">
        <div class="banner__info" data-depth="0.03">
            <img src="assets/images/icon/banner-hero-icon.png" alt="icon">
            <div>
                <h5 class="fs-28"><span class="count secondary-color">100</span>+</h5>
                <span class="fs-14">Admissions</span>
            </div>
        </div>
        <div class="banner__info info2" data-depth="0.03">
            <img src="assets/images/icon/banner-hero-icon2.png" alt="icon">
            <div>
                <h5 class="fs-28"><span class="count secondary-color">25</span>+</h5>
                <span class="fs-14">Courses</span>
            </div>
        </div>
        <img src="assets/images/banner/hero.png" alt="image">
    </div>
</section>
<!-- Banner area end here -->

<!-- Brand area start here -->
<div class="brand-area pt-60 pb-60 bor-bottom">
    <div class="container">
        <div class="swiper brand__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-image1.png" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-image2.png" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-image3.png" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-image4.png" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-image5.png" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-image6.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end here -->


<!-- How it works area start here -->
<section class="topic-area pb-120 pt-120 sub-bg">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">HOW IT WORKS</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Your Path to <span>College Success</span></h2>
            <p class="mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Three simple steps to secure your college admission with maximum funding
            </p>
        </div>

        <!-- Step 1: Find Your Flexible College -->
        <div class="row g-4 align-items-center mb-60">
            <div class="col-xl-5 col-lg-5 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="d-flex justify-content-center">
                    <div class="shadow rounded-3 p-4 bg-white" style="max-width: 350px;">
                        <img src="https://res.cloudinary.com/dy4lolmvf/image/upload/v1759803525/Gemini_Generated_Image_bleaurbleaurblea_btvhze.png" 
                             alt="Find Your Flexible College" 
                             class="img-fluid rounded-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h5 class="primary-color mb-15">STEP 1</h5>
                    <h3 class="mb-20">Find Your Flexible College</h3>
                    <p class="mb-0">
                        We take the time to understand your goals and find the accredited career college with courses that offer the flexibility to fit your current schedule.
                    </p>
                </div>
            </div>
        </div>

        <!-- Step 2: Secure Maximum Student Aid -->
        <div class="row g-4 align-items-center mb-60">
            <div class="col-xl-5 col-lg-5 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="d-flex justify-content-center">
                    <div class="shadow rounded-3 p-4 bg-white" style="max-width: 350px;">
                        <img src="https://res.cloudinary.com/dy4lolmvf/image/upload/v1759803525/Gemini_Generated_Image_ldvxwkldvxwkldvx_tsv3om.png" 
                             alt="Secure Maximum Student Aid" 
                             class="img-fluid rounded-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h5 class="primary-color mb-15">STEP 2</h5>
                    <h3 class="mb-20">Secure Maximum Student Aid</h3>
                    <p class="mb-0">
                        Our experts walk you through the entire financial aid process—from OSAP to Better Jobs Ontario—to ensure you maximize every dollar you qualify for. This is our focus.
                    </p>
                </div>
            </div>
        </div>

        <!-- Step 3: Your Education, Free Support -->
        <div class="row g-4 align-items-center mb-40">
            <div class="col-xl-5 col-lg-5 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="d-flex justify-content-center">
                    <div class="shadow rounded-3 p-4 bg-white" style="max-width: 350px;">
                        <img src="https://res.cloudinary.com/dy4lolmvf/image/upload/v1759803525/Gemini_Generated_Image_dwx46odwx46odwx4_qmr0xx.png" 
                             alt="Your Education, Free Support" 
                             class="img-fluid rounded-2">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h5 class="primary-color mb-15">STEP 3</h5>
                    <h3 class="mb-20">Your Education, Free Support</h3>
                    <p class="mb-0">
                        Our services are 100% free for students. We partner only with top, accredited Canadian career colleges like Academy of Learning and CIMT College to ensure quality.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- How it works area end here -->

<!-- About area start here -->
<section class="about-area pt-120 pb-120">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">ABOUT COLLEGE PATHWAYS</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Your Pathway to Higher Education - <span>Free Admission Guidance</span></h2>
            <p class="mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                We specialize in helping Ontario students access career college education through OSAP funding and government financial aid.
            </p>
        </div>

        <div class="row g-4 mb-60">
            <!-- Stats Card 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="fanfact__item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="fanfact__icon bg1">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h2><span class="count">100</span>+</h2>
                    <span>Successful Admissions</span>
                </div>
            </div>

            <!-- Stats Card 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="fanfact__item wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="fanfact__icon bg2">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h2><span class="count">25</span>+</h2>
                    <span>Available Courses</span>
                </div>
            </div>

            <!-- Stats Card 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="fanfact__item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="fanfact__icon bg3">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <h2><span class="count">5</span>+</h2>
                    <span>Years Experience</span>
                </div>
            </div>

            <!-- Stats Card 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="fanfact__item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="fanfact__icon bg4">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <h2><span class="count">100</span>%</h2>
                    <span>Free Service</span>
                </div>
            </div>
        </div>

        <!-- Main Content with Image -->
        <div class="row g-4 align-items-center">
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="position-relative">
                    <img src="https://res.cloudinary.com/dy4lolmvf/image/upload/v1759423400/gocollege_srve18.webp" 
                         alt="About College Pathways" 
                         class="img-fluid rounded-3 shadow">
                </div>
            </div>

            <div class="col-xl-7">
                <div class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <!-- Feature Card 1 -->
                    <div class="about__info mb-30">
                        <div class="icon bg__1">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                        </div>
                        <div>
                            <h4>Funding Specialists</h4>
                            <p class="mt-10">Expert guidance through OSAP, Better Jobs Ontario, and other government financial aid programs to maximize your funding.</p>
                        </div>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="about__info mb-30">
                        <div class="icon bg__2">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <div>
                            <h4>College Partnerships</h4>
                            <p class="mt-10">Direct connections with accredited career colleges like Academy of Learning and CIMT College across Ontario.</p>
                        </div>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="about__info mb-30">
                        <div class="icon bg__3">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <div>
                            <h4>Personalized Support</h4>
                            <p class="mt-10">One-on-one guidance from application to admission, ensuring you find the perfect program that fits your schedule and goals.</p>
                        </div>
                    </div>

                    <a href="https://gocollege.ca/about-us" class="btn-one mt-20">Learn More About Us<i class="fa-light fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area end here -->



@if(count($courses) > 0)
<!-- Courses area start here -->
<section class="courses-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">POPULAR COURSES</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Explore Our <span>Popular Courses</h2>
        </div>
        <div class="row g-4">
            
            @foreach($courses as $scourse)
            @include('components.course', ['acourse'=>$scourse])
            @endforeach

        </div>
    </div>
</section>
<!-- Courses area end here -->
@endif



@include('components.testimonials')


{{--

<!-- Topic area start here -->
<section class="topic-area pt-120 pb-120">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5>TOP CLASS COURSES</h5>
            <h2>Popular <span>Topics To Learn</span></h2>
        </div>
        <div class="row g-4">
            
            <!-- Development -->
            <div class="col-xl-4 col-md-6">
                <div class="topic-card">
                    <div class="topic-card-image">
                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=400&h=250&fit=crop" alt="Development">
                        <div class="topic-card-overlay"></div>
                    </div>
                    <div class="topic-card-body">
                        <h4><a href="course.html">Development</a></h4>
                        <span>Learn coding and programming skills</span>
                    </div>
                </div>
            </div>

            <!-- Data Science -->
            <div class="col-xl-4 col-md-6">
                <div class="topic-card">
                    <div class="topic-card-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop" alt="Data Science">
                        <div class="topic-card-overlay"></div>
                    </div>
                    <div class="topic-card-body">
                        <h4><a href="course.html">Data Science</a></h4>
                        <span>Master data analysis and AI</span>
                    </div>
                </div>
            </div>

            <!-- Arts & Design -->
            <div class="col-xl-4 col-md-6">
                <div class="topic-card">
                    <div class="topic-card-image">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=250&fit=crop" alt="Arts & Design">
                        <div class="topic-card-overlay"></div>
                    </div>
                    <div class="topic-card-body">
                        <h4><a href="course.html">Arts & Design</a></h4>
                        <span>Explore creative design solutions</span>
                    </div>
                </div>
            </div>

            <!-- Business & Finance -->
            <div class="col-xl-4 col-md-6">
                <div class="topic-card">
                    <div class="topic-card-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop" alt="Business & Finance">
                        <div class="topic-card-overlay"></div>
                    </div>
                    <div class="topic-card-body">
                        <h4><a href="course.html">Business & Finance</a></h4>
                        <span>Build business and financial skills</span>
                    </div>
                </div>
            </div>

            <!-- Computer Science -->
            <div class="col-xl-4 col-md-6">
                <div class="topic-card">
                    <div class="topic-card-image">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&h=250&fit=crop" alt="Computer Science">
                        <div class="topic-card-overlay"></div>
                    </div>
                    <div class="topic-card-body">
                        <h4><a href="course.html">Computer Science</a></h4>
                        <span>Study computing fundamentals</span>
                    </div>
                </div>
            </div>

            <!-- Sales Marketing -->
            <div class="col-xl-4 col-md-6">
                <div class="topic-card">
                    <div class="topic-card-image">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=400&h=250&fit=crop" alt="Sales Marketing">
                        <div class="topic-card-overlay"></div>
                    </div>
                    <div class="topic-card-body">
                        <h4><a href="course.html">Sales Marketing</a></h4>
                        <span>Master marketing strategies</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Topic area end here -->

--}}




<!-- FAQ area start here -->
<section class="faq-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">FREQUENTLY ASKED QUESTIONS</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Got Questions? <span>We Have Answers</span></h2>
            <p class="mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Find answers to common questions about our services, admissions process, and financial aid options
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="faqAccordion">
                    
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Is your service really 100% free for students?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Yes! Our services are completely free for students. We partner with accredited career colleges in Ontario, and our compensation comes from our partner institutions, not from you. You pay nothing for our guidance, counseling, or application support.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What types of financial aid can you help me access?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>We specialize in helping students access multiple funding sources including OSAP (Ontario Student Assistance Program), Better Jobs Ontario, Second Career funding, EI-funded training, and various scholarships and grants. Our experts will evaluate your situation and help you maximize every dollar you're eligible for.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How long does the application process take?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>The timeline varies depending on your situation and the program you're applying to. Typically, the entire process from initial consultation to admission can take 2-4 weeks. Financial aid applications may take additional time. We work efficiently to get you enrolled as quickly as possible while ensuring all paperwork is completed correctly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What colleges do you partner with?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>We partner with top accredited career colleges across Ontario, including Academy of Learning, CIMT College, and other reputable institutions. All our partner schools are registered with the Ministry of Colleges and Universities and meet strict quality standards. We'll help you find the best fit for your career goals.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do I need to have previous work experience or education?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Requirements vary by program. Many of our career college programs accept students with just a high school diploma or equivalent. Some programs may require specific prerequisites or work experience. During your free consultation, we'll assess your background and help you find programs that match your qualifications and career goals.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can I study part-time or online?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Yes! We understand that many students need flexible options. Our partner colleges offer full-time, part-time, online, and hybrid programs. We'll work with you to find a schedule that fits your current commitments, whether you're working, have family responsibilities, or need other accommodations.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What happens after I get admitted?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Once you're admitted, we continue to support you through the financial aid process, course registration, and orientation. We ensure you have all the resources and information you need to start your program successfully. Our team remains available to answer questions even after you begin your studies.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How do I get started?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Getting started is easy! Simply click the "Check My Eligibility" or "Get Started" button on our website to schedule a free consultation. We'll discuss your goals, assess your eligibility for financial aid, and help you find the right program. No obligation, no pressure—just helpful guidance from experienced education counselors.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- CTA after FAQ -->
                <div class="text-center mt-60 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <h4 class="mb-20">Still Have Questions?</h4>
                    <p class="mb-30">Our team is here to help. Schedule a free consultation to get personalized answers.</p>
                    <a href="{{ route('scheduleCall') }}" class="btn-one">Schedule Free Consultation<i class="fa-light fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ area end here -->


<!-- Trial area start here -->
<section class="trial-area pt-120 pb-120 primary-bg bg-image">
    <div class="container">
        <div class="trial__wrp">
            <h2 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Finished scrolling? Lets Calculate your Funding</h2>
            <a href="{{ route('scheduleCall') }}" class="btn-one-light wow fadeInUp" data-wow-delay="200ms"
                data-wow-duration="1500ms">Calculate Now<i class="fa-light fa-arrow-right-long"></i></a>
        </div>
    </div>
</section>
<!-- Trial area end here -->


@endsection
