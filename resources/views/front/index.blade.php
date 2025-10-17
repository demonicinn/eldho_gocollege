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
            <p class="mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Get free admission guidance to top Ontario career colleges and understand your financial aid options.</p>
            <a href="{{ route('scheduleCall') }}" class="btn-one mt-50">Check My Eligibility<i class="fa-light fa-arrow-right-long"></i></a>
        </div>
    </div>
    <div class="banner__hero">
        <div class="banner__info" data-depth="0.03">
            <img src="assets/images/icon/banner-hero-icon.png" alt="icon">
            <div>
                <h5 class="fs-28"><span class="count secondary-color">250</span>+</h5>
                <span class="fs-14">Admissions</span>
            </div>
        </div>
        <div class="banner__info info2" data-depth="0.03">
            <img src="assets/images/icon/banner-hero-icon2.png" alt="icon">
            <div>
                <h5 class="fs-28"><span class="count secondary-color">100</span>+</h5>
                <span class="fs-14">Courses</span>
            </div>
        </div>
        <img src="assets/images/banner/hero.png" alt="image">
    </div>
</section>
<!-- Banner area end here -->


<!-- How it works area start here -->
<section class="topic-area pb-120 pt-120">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Free Expert Guidance: Find The Right Career College Program & Understand Your Government Funding Options.</h2>
            <p class="mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Our experts guide you in choosing the best program based on your preferences and understand how  the funding support works.
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
                    <h5 class="primary-color mb-15">Step 1</h5>
                    <h3 class="mb-20">Free Consultation</h3>
                    <p class="mb-0">
                        We talk about your career goals, schedule needs (online, part-time, full-time), and what matters most to you. This helps us understand the right fit for your situation.
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
                    <h3 class="mb-20">Program & Funding Opportunities Available</h3>
                    <p class="mb-0">
                        We recommend the best career college programs based on your preferences. Then we assess funding option you qualify for -OSAP, Better Jobs Ontario, Second Career, and more -so you get funding support so you can focus on your studies.
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
                    <h3 class="mb-20">Admission & Enrollment Support</h3>
                    <p class="mb-0">
                        We guide you through your applications, coordinate with the college on your behalf, and advise you on securing your funding. We stay with you every step until you're enrolled and ready to start.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- How it works area end here -->



@if(count($courses) > 0)
<!-- Courses area start here -->
<section class="courses-area pt-120 sub-bg">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We Match You With The Right Career College Program</h2>
            <p>From technology and healthcare to business and skilled trades—we guide you to the perfect program from</br> 100+ options across Ontario's accredited career colleges.</p>
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

<!-- Topic area start here -->
<section class="topic-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h2>Every Career Path. Every Goal. We've Got You Covered.</h2>
            <p>Whatever field interests you, we'll connect you with accredited programs that match your schedule, budget, and career goals <br/>and help you to understand the funding options available.</p>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="topic__item item-one">
                    <div class="topic__icon">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <div class="topic__content">
                        <h4><a href="{{ route('courses') }}?filter=accounting">Accounting</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="topic__item item-two">
                    <div class="topic__icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div class="topic__content">
                        <h4><a href="{{ route('courses') }}?filter=business">Business</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="topic__item item-three">
                    <div class="topic__icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="topic__content">
                        <h4><a href="{{ route('courses') }}?filter=healthcare">Healthcare</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="topic__item item-four">
                    <div class="topic__icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div class="topic__content">
                        <h4><a href="{{ route('courses') }}?filter=it">Information Technology</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="topic__item item-five">
                    <div class="topic__icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div class="topic__content">
                        <h4><a href="{{ route('courses') }}?filter=healthcare">Personal Support Worker</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="topic__item item-six">
                    <div class="topic__icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div class="topic__content">
                        <h4><a href="{{ route('courses') }}">And Many More...</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-100 row sub-bg-two" style="border-radius: 16px;">
            <div class="col-12">
                <div class="text-center p-5">
                    <h3 class="mb-20">Ready To Find Your Perfect Program?</h3>
                    <p class="mb-30">Book a free consultation. We'll discuss your goals, show you all your program options, and guide you through available funding options.</p>
                    <a href="{{ route('scheduleCall') }}" class="btn-one">Start Your Free Consultation <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Topic area end here -->




@include('components.about')


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
