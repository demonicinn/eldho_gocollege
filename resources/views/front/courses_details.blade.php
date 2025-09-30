@extends('layouts.app')
@section('content')
<!-- Banner Inner Area -->
<section class="banner-inner-area pt-60 pt-md-100 pb-30 pb-md-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-inner__content text-center">
                    <div class="mb-3">
                        <span class="fs-14 fw-600 text-font bor radius6 px-3 py-1 d-inline-block secondary-color sub-bg">FULLY ONLINE</span>
                    </div>
                    <h1 class="title-font fs-1 fs-md-1">{{ $course->title }}</h1>
                    <ul class="breadcrumbs mt-3 mt-md-4 d-flex justify-content-center list-unstyled mb-0">
                        <li><a href="{{ route('home') }}" class="text-font text-decoration-none">Home</a></li>
                        <li><i class="fas fa-angle-right mx-2"></i></li>
                        <li><a href="{{ route('courses') }}" class="text-font text-decoration-none">Courses</a></li>
                        <li><i class="fas fa-angle-right mx-2"></i></li>
                        <li class="primary-color text-font">{{ categoriesValue($course->category) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Overview Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 order-1 order-lg-1">
                <div class="courses-details__item-left">
                    <!-- Hero Image -->
                    <div class="image mb-4 mb-md-5">
                        <img src="{{ $course->image_path }}" alt="Accounting & Payroll Administration" class="w-100 radius12">
                    </div>

                    <div class="section-header mb-4 mb-md-5">
                        <h2 class="title-font fw-700 fs-3 fs-md-2">{{ $course->sub_title }}</h2>
                        <p class="mt-3 mt-md-4 fs-6 fs-md-5 text-font">
                            {!! $course->description !!}
                        </p>
                        
                        <!-- Partner Colleges Info -->
                        <div class="mt-4 mt-md-5 p-3 p-md-4 sub-bg radius12">
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-md-4">
                                    <h5 class="title-font fw-500 mb-2 fs-6">Available at Multiple Colleges</h5>
                                    <p class="text-font fs-6 mb-0">This program is offered by 15+ accredited partner colleges across Canada</p>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h5 class="title-font fw-500 mb-2 fs-6">Financial Aid Available</h5>
                                    <p class="text-font fs-6 mb-0">Government funding, scholarships, and payment plans available through our partner institutions</p>
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <a href="#" class="btn-one text-decoration-none">Check My Funding Eligibility</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($course->key_points)
                    <!-- Program Stats -->
                    <div class="row g-3 mb-4 mb-md-5 bor radius12 p-3 p-md-4">
                        @foreach($course->key_points as $key_points)
                        <div class="col-6 col-md-3 text-center">
                            <h2 class="primary-color title-font fw-700 fs-2">{{ $key_points->title1 }}</h2>
                            <p class="text-font fw-600 mb-1 fs-6">{{ $key_points->title2 }}</p>
                            @if(@$key_points->title3)
                            <span class="fs-12 text-font">{{ $key_points->title3 }}</span>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    @endif



                    @if($course->program)
                    @php
                    $countProgram = count($course->program);
                    @endphp
                    <!-- Why Choose Section -->
                    <div class="mb-4 mb-md-5">
                        <h3 class="title-font fw-700 mb-4 fs-4">Why Choose This Program?</h3>
                        <div class="row g-3 g-md-4">
                            @foreach($course->program as $i => $program)
                            <div class="col-12 {{ $i+1 == $countProgram ? '' : 'col-md-6' }}">
                                <div class="about__info">
                                    <div class="icon bg__1 radius12">
                                        <i class="fas fa-{{ $program->icon }} primary-color fs-5"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title-font fw-500 mb-2 fs-6">{{ $program->title }}</h5>
                                        <p class="text-font fs-6">{{ $program->description }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif


                    @if($course->learn)
                    <!-- Curriculum Section -->
                    <div class="mb-4 mb-md-5">
                        <h3 class="title-font fw-700 mb-4 fs-4">What You'll Learn</h3>
                        <p class="mb-4 text-font fs-6">Our structured modules cover everything you need to succeed in accounting and payroll careers:</p>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered bor radius12">
                                <thead>
                                    <tr>
                                        <th class="title-font fw-700 p-3">Module</th>
                                        <th class="title-font fw-700 p-3">Focus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($course->learn as $learn)
                                    <tr>
                                        <td class="text-font fw-500 p-3">{{ $learn->title }}</td>
                                        <td class="text-font p-3">{{ $learn->value }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="mt-4 p-3 p-md-4 sub-bg radius12">
                            <p class="text-font fs-6 fw-600 mb-0">Total: 720 hours | Duration: 36 weeks</p>
                        </div> -->
                    </div>
                    @endif


                    @if($course->jobTitle || $course->workEnvironments)
                    <!-- Career Outcomes -->
                    <div class="mb-4 mb-md-5">
                        <h3 class="title-font fw-700 mb-4 fs-4">Career Outcomes</h3>
                        <p class="mb-4 text-font fs-6">Graduates are career-ready for positions such as:</p>
                        
                        <div class="row g-3 g-md-4">
                            @if($course->jobTitle)
                            <div class="col-12 col-md-6">
                                <div class="p-3 p-md-4 bor radius12">
                                    <h5 class="title-font fw-500 mb-3 fs-6">Job Titles</h5>
                                    <ul class="list-unstyled">
                                        @foreach($course->jobTitle as $jobTitle)
                                        <li class="mb-3 text-font"><i class="fas fa-check primary-color me-3"></i>{{ $jobTitle->title }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif

                            @if($course->workEnvironments)
                            <div class="col-12 col-md-6">
                                <div class="p-3 p-md-4 bor radius12">
                                    <h5 class="title-font fw-500 mb-3 fs-6">Work Environments</h5>
                                    <ul class="list-unstyled">
                                        @foreach($course->workEnvironments as $workEnvironments)
                                        <li class="mb-3 text-font"><i class="fas fa-{{ $workEnvironments->icon }} primary-color me-3"></i>{{ $workEnvironments->title }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif


                    <!-- Unique Features -->
                    <div class="testimonial mb-4 mb-md-5">
                        <p class="text-font fs-6 fw-500">Unlike standard online bookkeeping courses, we combine self-paced learning for flexibility, on-campus learning coaches for one-on-one support, resume building & job prep built into your program, and latest software tools so you graduate with hands-on experience.</p>
                    </div>

                    <!-- Admissions Requirements -->
                    <div class="mb-4 mb-md-5">
                        <h3 class="title-font fw-700 mb-4 fs-4">Admissions Requirements</h3>
                        <div class="p-3 p-md-4 bor radius12">
                            <ul class="list-unstyled">
                                <li class="mb-3 text-font fs-6"><i class="fas fa-graduation-cap primary-color me-3"></i>Grade 12 diploma or equivalent (GED)</li>
                                <li class="mb-3 text-font fs-6"><i class="fas fa-calendar primary-color me-3"></i>Minimum 18 years of age</li>
                                <li class="mb-0 text-font fs-6"><i class="fas fa-language primary-color me-3"></i>English language proficiency</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Sidebar -->
            <div class="col-12 col-lg-4 order-2 order-lg-2 mt-4 mt-lg-0 mb-4">
                <div class="courses-details__item-right">
                    @if($course->data)
                    <div class="item bor radius12 p-3 p-md-4">
                        <h3 class="title-font fw-700 fs-5">Program Information</h3>
                        {{--
                        <!-- <ul class="list-unstyled">
                            @foreach($course->data as $data)
                            @php
                            $dValue = str_replace(';', '<br/>', $data->value);
                            @endphp
                            <li class="bor-bottom py-3">
                                <p class="text-font mb-0 d-flex justify-content-between"><strong>{{ $data->title }}:</strong> <span>{!! $dValue !!}</span></p>
                            </li>
                            @endforeach
                        </ul> -->
                        --}}

                        <table class="details table table-responsive snippets-table">
                            <tbody>
                                @foreach($course->data as $data)
                                @php
                                $dValue = str_replace(';', '<br/>', $data->value);
                                @endphp
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{!! $dValue !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="#" class="btn-one text-decoration-none w-100 text-center">Compare Colleges & Get Info</a>
                    </div>
                    @endif

                    <div class="item bor radius12 mt-4 p-3 p-md-4">
                        <h3 class="title-font fw-700 fs-5">Get Started Today</h3>
                        <p class="text-font fs-6">We'll help you find the right college and secure financial aid for this program.</p>
                        <p class="text-font fs-6 fw-500">Compare colleges, tuition costs, and available funding options in your area.</p>
                        <a href="#" class="btn-one text-decoration-none w-100 text-center">Find Colleges & Financial Aid</a>
                        <div class="bor-top pt-4">
                            <p class="text-font mb-2"><strong>Call:</strong> <a href="tel:1-800-XXX-XXXX" class="primary-color text-decoration-none">1-800-XXX-XXXX</a></p>
                            <p class="text-font mb-0"><strong>Email:</strong> <a href="mailto:info@gocollege.ca" class="primary-color text-decoration-none">info@gocollege.ca</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 primary-bg">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-12 col-lg-8">
                <h2 class="text-white title-font fw-700 mb-3 fs-3 fs-md-2">Ready to Compare Colleges & Find Financial Aid?</h2>
                <p class="text-white mb-0 fs-6 fs-md-5 text-font">Connect with multiple accredited colleges offering this program and explore funding options available to you.</p>
            </div>
            <div class="col-12 col-lg-4">
                <div class="text-center text-lg-end">
                    <button type="button" class="btn-one-light">Schedule My Call</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('script')

@endsection