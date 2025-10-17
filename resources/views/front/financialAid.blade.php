@extends('layouts.app')
@section('content')


<!-- Banner area start here -->
<section class="banner-inner-area sub-bg bg-image" data-background="assets/images/bg/banner-inner-bg.png">
    <div class="container">
        <div class="banner-inner__content">
            <h1>
                Financial Aid & Support
            </h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><i class="fa-regular fa-angle-right"></i></li>
                <li>Financial Aid</li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner area end here -->


<!-- Quick Contact -->
<section class="pt-40 pb-20 primary-bg">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-4 mb-20">
                <i class="fa-solid fa-phone fa-2x mb-10 text-white"></i>
                <h5 class="text-white">Call Us</h5>
                <a href="tel:437-422-8353" class="text-white">437-422-8353</a>
            </div>
            <div class="col-md-4 mb-20">
                <i class="fa-solid fa-envelope fa-2x mb-10 text-white"></i>
                <h5 class="text-white">Email Us</h5>
                <a href="mailto:info@gocollege.ca" class="text-white">info@gocollege.ca</a>
            </div>
            <div class="col-md-4 mb-20">
                <i class="fa-solid fa-clock fa-2x mb-10 text-white"></i>
                <h5 class="text-white">Office Hours</h5>
                <p class="text-white mb-0">Monday - Friday: 9 AM - 5 PM</p>
            </div>
        </div>
    </div>
</section>

<!-- Intro Section -->
<section class="pt-60 pb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h5 class="text-uppercase mb-15 sm-font">Your Education, Your Future</h5>
                <h2 class="mb-20">Making Education Accessible</h2>
                <p>At GoCollege, we believe financial barriers shouldn't stop you from pursuing your career goals. We guide you through government funding options like OSAP and Better Jobs Ontario, helping you understand what you may qualify for and how to apply.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tabbed Financial Aid Section -->
<section class="pt-40 pb-100">
    <div class="container">
        <!-- Tab Navigation -->
        <div class="classic-tabs">
            <ul class="nav nav-tabs justify-content-center border-0" id="financialAidTabs">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#bursaries">Bursaries</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#atw">Abilities to Work</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tcet">TCET Loans</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bjo">Better Jobs Ontario</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#second-career">Second Career</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#osap">OSAP</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#other">Other Options</button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="financialAidTabContent">
            
            <!-- Bursaries Tab -->
            <div class="tab-pane fade show active" id="bursaries">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">College Bursaries Available</h2>
                        <p>Our partner career colleges offer bursaries for eligible students. Bursaries are <strong>grants that don't need to be repaid</strong> - they reduce your tuition cost directly.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-circle-info mr-10"></i> Important Information</h5>
                            <ul class="mb-0 pl-20">
                                <li>Bursary amounts vary by student eligibility</li>
                                <li>Students may combine multiple bursaries</li>
                                <li>Available on select vocational programs</li>
                                <li>Eligibility determined by the college</li>
                                <li>Not available to international students</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Bursary Types Through Partner Colleges:</h4>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> New Immigrant Bursary</h5>
                            <p><strong>Eligibility:</strong> Recent immigrants to Canada<br>
                            <strong>Documents Typically Needed:</strong> Landing papers or PR card with entry date</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> Back to School Bursary</h5>
                            <p><strong>Eligibility:</strong> Been away from school for several years<br>
                            <strong>Documents Typically Needed:</strong> Proof of last education completion date</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> Life Experience Bursary</h5>
                            <p><strong>Eligibility:</strong> Based on previous education or work experience<br>
                            <strong>Documents Typically Needed:</strong> Transcripts, diplomas, certifications, reference letters</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> In-Need Bursary</h5>
                            <p><strong>Eligibility:</strong> Based on family income and financial circumstances<br>
                            <strong>Documents Typically Needed:</strong> Proof of income (Notice of Assessment, pay stubs)</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> Refugee Bursary</h5>
                            <p><strong>Eligibility:</strong> Valid refugee status in Canada<br>
                            <strong>Documents Typically Needed:</strong> Refugee status documentation</p>
                        </div>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How We Help You Apply:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Free Consultation with GoCollege:</strong> Call 437-422-8353 or email info@gocollege.ca</li>
                                <li class="mb-15"><strong>Program Selection:</strong> We help you choose the right program and college</li>
                                <li class="mb-15"><strong>Document Preparation:</strong> We guide you on required documents</li>
                                <li class="mb-15"><strong>College Application:</strong> We coordinate your application with the college</li>
                                <li><strong>Bursary Assessment:</strong> The college reviews your bursary eligibility during the admissions process</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Timeline:</strong> Bursary decisions are made by the college during their admissions review. We recommend starting your application well in advance of your intended start date.</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=500&fit=crop" alt="Students" class="radius12 w-100 mb-20 bor">
                        
                        <div class="contact-sidebar shadow">
                            <h5 class="mb-20">Quick Contact</h5>
                            <p class="mb-25">Schedule your FREE consultation to discuss bursary options</p>
                            <a href="{{ route('scheduleCall') }}" class="btn-one w-100 text-center mb-15">Schedule A Call</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Abilities to Work Tab -->
            <div class="tab-pane fade" id="atw">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">Abilities to Work Partnership</h2>
                        <p>Government funding available (grant - no repayment required) if you have a self-diagnosed disability including mental health challenges, cognitive, learning, physical disabilities, and more.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-money-bill-wave mr-10"></i> Funding Details</h5>
                            <ul class="mb-0 pl-20">
                                <li>May cover tuition, books, uniforms, First Aid & CPR</li>
                                <li>This is a <strong>grant</strong> - you do NOT repay this funding</li>
                                <li>Funding amount determined by the program based on eligibility</li>
                                <li>Eligibility assessed by Abilities to Work coordinators</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">General Eligibility Requirements:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Age requirements apply</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Canadian Citizen or Permanent Resident</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Legally entitled to work in Canada</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Ready and willing to work in competitive employment</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Self-diagnosed disability (mental health, cognitive, physical, learning, etc.)</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Flexible for campus location, class times, and days</li>
                        </ul>

                        <h4 class="mb-15 mt-30">Eligible Program Examples:</h4>
                        <p>Short courses or groups of courses within specific time periods including:</p>
                        <ul>
                            <li>Home Support Worker</li>
                            <li>Dental Office Administration</li>
                            <li>Food Service Worker</li>
                            <li>Bookkeeping</li>
                            <li>Business and Human Resources</li>
                            <li>Microsoft Office Suite</li>
                            <li>IT Support Technician</li>
                            <li>Various trades programs</li>
                        </ul>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How We Help You Apply:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Contact GoCollege:</strong> Call 437-422-8353 or email info@gocollege.ca</li>
                                <li class="mb-15"><strong>Career Guidance Session:</strong> We help you choose your program</li>
                                <li class="mb-15"><strong>Coordinator Connection:</strong> We'll connect you with an Abilities to Work coordinator</li>
                                <li class="mb-15"><strong>Program Assessment:</strong> The coordinator assesses your eligibility and determines funding</li>
                                <li><strong>Enrollment:</strong> Once approved by the program, you can start your training</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Processing Time:</strong> Processing time varies. Contact us to learn more about timelines.</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=500&fit=crop" alt="Partnership" class="radius12 w-100 mb-20 bor">
                        
                        <div class="bor p-3 radius8 sub-bg shadow">
                            <h5 class="mb-20">Need Help?</h5>
                            <h6 class="mb-15">Education Counselor</h6>
                            <p class="mb-25">Call for FREE consultation about Abilities to Work funding</p>
                            <p class="mb-10"><i class="fa-solid fa-phone mr-10 primary-color"></i> <a href="tel:437-422-8353" class="primary-hover fw-600">437-422-8353</a></p>
                            <p class="mb-0"><i class="fa-solid fa-envelope mr-10 primary-color"></i> <a href="mailto:info@gocollege.ca" class="primary-hover">info@gocollege.ca</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TCET Loans Tab -->
            <div class="tab-pane fade" id="tcet">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">TCET Student Loans for Internationally Trained Professionals</h2>
                        <p class="mb-20">Access loans through The Centre for Education and Training (TCET) and Meridian Credit Union. These loans help internationally trained individuals get their Canadian career started.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-exclamation-triangle mr-10"></i> Important: This is a LOAN</h5>
                            <ul class="mb-0 pl-20">
                                <li>This funding <strong>MUST be repaid</strong> with interest</li>
                                <li>Interest rates and terms set by lender</li>
                                <li>Funded by Government of Canada's Foreign Credential Recognition Program</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">General Eligibility Requirements:</h4>
                        <ol class="pl-20">
                            <li class="mb-10">Permanent Resident, Canadian Citizen, or Convention Refugee legally permitted to work in Canada</li>
                            <li class="mb-10">Education and work experience obtained outside Canada</li>
                            <li class="mb-10">Seeking credential recognition or alternative career training</li>
                            <li class="mb-10">Demonstrated financial need</li>
                            <li class="mb-10">Must reside in eligible regions</li>
                        </ol>

                        <h4 class="mb-20 mt-30">What the Loan May Cover:</h4>
                        <ul class="pl-20">
                            <li class="mb-10">Tuition Fees</li>
                            <li class="mb-10">Travel Expenses</li>
                            <li class="mb-10">Books and course materials</li>
                            <li class="mb-10">Living Expenses</li>
                            <li class="mb-10">Uniform Cost</li>
                            <li class="mb-10">Qualification Assessment and Exam Fees</li>
                        </ul>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How We Help You Apply:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Meet with GoCollege Advisor:</strong> Choose your program (Call 437-422-8353)</li>
                                <li class="mb-15"><strong>TCET Connection:</strong> We'll help connect you with a TCET Counsellor</li>
                                <li class="mb-15"><strong>Loan Application:</strong> Work with TCET to complete application</li>
                                <li class="mb-15"><strong>Required Documentation:</strong> Gather all necessary documents as requested by TCET</li>
                                <li class="mb-15"><strong>Assessment:</strong> TCET and Meridian Credit Union review your application</li>
                                <li><strong>Loan Approval:</strong> Funds issued upon approval by the lender</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Timeline:</strong> Apply well in advance of your program start date. Processing time varies.</p>
                        </div>

                        <div class="info-box mt-20">
                            <h5 class="mb-10">More Information</h5>
                            <p class="mb-0">Visit <a href="http://www.tcet.com/FCRloans" target="_blank" class="primary-hover">www.tcet.com/FCRloans</a> or call GoCollege at 437-422-8353</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=400&h=500&fit=crop" alt="Financial planning" class="radius12 w-100 mb-20 bor">
                        
                        <div class="bor p-3 radius8 shadow">
                            <h5 class="mb-4">About TCET Loans</h5>
                            <div class="mb-4">
                                <h6 class="mb-1">Type:</h6>
                                <p class="mb-0">Student Loan (must be repaid)</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1">For:</h6>
                                <p class="mb-0">Internationally trained professionals</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1">Provider:</h6>
                                <p class="mb-0">TCET & Meridian Credit Union</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Better Jobs Ontario Tab -->
            <div class="tab-pane fade" id="bjo">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">Better Jobs Ontario</h2>
                        <p>Ontario government cost-sharing grant program for laid-off workers. This is a grant that does not need to be repaid.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-money-bill-wave mr-10"></i> Funding Details</h5>
                            <ul class="mb-0 pl-20">
                                <li>Funding amounts vary based on eligibility and program</li>
                                <li>May cover tuition, books, transportation, living expenses</li>
                                <li>This is a <strong>grant</strong> - you do NOT repay this funding</li>
                                <li>You may be required to contribute towards training</li>
                                <li>Administered by Ministry of Colleges and Universities (MCU)</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Who May Be Eligible?</h4>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-check primary-color mr-10"></i> Recently Laid Off</h5>
                            <p>May qualify even if you've received Employment Insurance (EI)</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-check primary-color mr-10"></i> Skills Training</h5>
                            <p>For training programs in various durations depending on EI eligibility status</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-check primary-color mr-10"></i> Academic Upgrading</h5>
                            <p>May be available if needed as a prerequisite</p>
                        </div>

                        <h4 class="mb-15 mt-30">Eligible Program Examples:</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="sm-font">
                                    <li>Accounting Administration</li>
                                    <li>Advanced Aesthetics</li>
                                    <li>Artificial Intelligence</li>
                                    <li>Business Administration</li>
                                    <li>Business Management</li>
                                    <li>Community Service Worker</li>
                                    <li>Data Analytics</li>
                                    <li>Data Science</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="sm-font">
                                    <li>Dental Office Administration</li>
                                    <li>Early Childhood Assistant</li>
                                    <li>Food Service Worker</li>
                                    <li>Home Support Worker</li>
                                    <li>Medical Office Administration</li>
                                    <li>Network Administration</li>
                                    <li>Personal Support Worker</li>
                                    <li>...and many more!</li>
                                </ul>
                            </div>
                        </div>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How We Help You Apply:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Confirm Eligibility:</strong> Check if you meet program requirements</li>
                                <li class="mb-15"><strong>Contact Service Canada or Employment Ontario:</strong> Start your application with them</li>
                                <li class="mb-15"><strong>Career Guidance at GoCollege:</strong> Call 437-422-8353 or email info@gocollege.ca</li>
                                <li class="mb-15"><strong>Choose Your Program:</strong> We help you select the right training</li>
                                <li class="mb-15"><strong>Submit to MCU:</strong> Complete application through Service Canada</li>
                                <li><strong>Approval & Enrollment:</strong> Once approved by the program, you can enroll</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Timeline:</strong> Apply as soon as possible. Processing time varies. Start your program only after receiving approval.</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=400&h=500&fit=crop" alt="Training" class="radius12 w-100 mb-20 bor">

                        <div class="contact-sidebar mt-20">
                            <h5 class="mb-15">Get Started</h5>
                            <p class="mb-25">Schedule your FREE consultation to discuss your options</p>
                            <a href="{{ route('scheduleCall') }}" class="btn-one w-100 text-center mb-15">Schedule A Call</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Career Tab -->
            <div class="tab-pane fade" id="second-career">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">Second Career Program (EI & WSIB)</h2>
                        <p>Financial assistance for laid-off workers to retrain for in-demand occupations. Funded through Employment Insurance (EI) and Workplace Safety and Insurance Board (WSIB).</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-money-bill-wave mr-10"></i> Funding Details</h5>
                            <ul class="mb-0 pl-20">
                                <li>Funding amounts determined by the program</li>
                                <li>May include tuition, books, transportation</li>
                                <li>This is typically a <strong>grant</strong> - no repayment required</li>
                                <li>For training programs of various durations</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">General Eligibility Requirements:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Currently receiving EI benefits OR recently laid off</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> On WSIB benefits and unable to return to previous occupation</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Unemployed or facing job loss</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Requires skills training to find employment</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Must be legally entitled to work in Canada</li>
                        </ul>

                        <h4 class="mb-15 mt-30">Eligible Programs:</h4>
                        <p>Training that leads to employment in an in-demand occupation. Contact us to confirm your program may qualify.</p>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How We Help You Apply:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Contact Service Canada or WSIB:</strong> Discuss your eligibility for Second Career funding</li>
                                <li class="mb-15"><strong>Career Assessment:</strong> Work with Employment Ontario to develop your plan</li>
                                <li class="mb-15"><strong>Contact GoCollege:</strong> Call 437-422-8353 for program information</li>
                                <li class="mb-15"><strong>Program Selection:</strong> We help you choose a training program that matches your goals</li>
                                <li class="mb-15"><strong>Submit Application:</strong> Through Service Canada or WSIB with program details</li>
                                <li><strong>Approval & Start:</strong> Begin training once funding is approved</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Timeline:</strong> Apply early - processing can take several weeks. Do not start training before receiving approval.</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="bor p-3 radius8 sub-bg shadow">
                            <h5 class="mb-20">Need Help?</h5>
                            <p class="mb-20">Our team can guide you through the Second Career application process</p>
                            <p class="mb-10"><i class="fa-solid fa-phone mr-10 primary-color"></i> <a href="tel:437-422-8353" class="primary-hover fw-600">437-422-8353</a></p>
                            <p class="mb-0"><i class="fa-solid fa-envelope mr-10 primary-color"></i> <a href="mailto:info@gocollege.ca" class="primary-hover">info@gocollege.ca</a></p>
                        </div>

                        <div class="bor p-3 radius8 mt-20 shadow">
                            <h5 class="mb-20">External Resources</h5>
                            <p class="mb-15">
                                <a href="https://www.ontario.ca/page/second-career" target="_blank" class="primary-hover"><i class="fa-solid fa-external-link mr-10"></i>Ontario Second Career Program</a>
                            </p>
                            <p class="mb-0">
                                <a href="https://www.canada.ca/en/services/benefits/ei.html" target="_blank" class="primary-hover"><i class="fa-solid fa-external-link mr-10"></i>Service Canada - EI Benefits</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OSAP Tab -->
            <div class="tab-pane fade" id="osap">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">OSAP - Ontario Student Assistance Program</h2>
                        <p>Provincial and federal financial assistance combining grants (you keep) and loans (you repay) based on your financial need.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-exclamation-triangle mr-10"></i> OSAP Includes Loans</h5>
                            <ul class="mb-0 pl-20">
                                <li><strong>Grants:</strong> Money you DON'T repay</li>
                                <li><strong>Loans:</strong> Money you MUST repay with interest after graduation</li>
                                <li>Provincial and federal loan terms vary</li>
                                <li>Repayment typically starts after leaving school</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">General Eligibility Requirements:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Canadian citizen, permanent resident, or protected person</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Ontario resident</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Enrolled in an approved program at an eligible institution</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Demonstrate financial need</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Maintain satisfactory academic progress</li>
                        </ul>

                        <h4 class="mb-15 mt-30">What OSAP May Cover:</h4>
                        <ul>
                            <li>Tuition and fees</li>
                            <li>Books and supplies</li>
                            <li>Living expenses</li>
                            <li>Transportation</li>
                            <li>Childcare (if applicable)</li>
                        </ul>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How to Apply for OSAP:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Create OSAP Account:</strong> Visit <a href="https://www.ontario.ca/osap" target="_blank" class="primary-hover">ontario.ca/osap</a></li>
                                <li class="mb-15"><strong>Complete Information Module:</strong> First-time applicants must complete online module</li>
                                <li class="mb-15"><strong>Gather Documents:</strong> SIN, income information, banking details</li>
                                <li class="mb-15"><strong>Apply Early:</strong> Applications typically open before study period begins</li>
                                <li class="mb-15"><strong>Submit Application:</strong> Complete and submit online</li>
                                <li class="mb-15"><strong>Upload Documents:</strong> Provide any requested supporting documents</li>
                                <li class="mb-15"><strong>School Confirmation:</strong> The college confirms your enrollment</li>
                                <li><strong>Receive Funding:</strong> Funds typically arrive after term starts</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-10"><strong><i class="fa-solid fa-clock mr-10"></i>Important Notes:</strong></p>
                            <ul class="mb-0 pl-40">
                                <li>Apply well before your study period begins</li>
                                <li>Submit documents within required timeframes</li>
                                <li>Reapply each academic year - funding is not automatic</li>
                            </ul>
                        </div>

                        <div class="info-box mt-20">
                            <h5 class="mb-10">How GoCollege Helps</h5>
                            <ul class="mb-0 pl-20">
                                <li>We guide you through the OSAP application process</li>
                                <li>Help you understand what documents you need</li>
                                <li>Answer questions about the application</li>
                                <li>Contact us if you need guidance: 437-422-8353</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=500&fit=crop" alt="OSAP" class="radius12 w-100 mb-20 bor">
                        
                        <div class="bor p-3 radius8">
                            <h5 class="mb-15">OSAP Resources</h5>
                            <p class="sm-font mb-10"><a href="https://www.ontario.ca/page/osap-ontario-student-assistance-program" target="_blank" class="primary-hover"><i class="fa-solid fa-external-link mr-10"></i>Apply for OSAP</a></p>
                            <p class="sm-font mb-10"><a href="https://www.ontario.ca/page/osap-ontario-student-assistance-program#section-5" target="_blank" class="primary-hover"><i class="fa-solid fa-calculator mr-10"></i>OSAP Aid Estimator</a></p>
                            <p class="sm-font mb-0"><a href="https://www.csnpe-nslsc.canada.ca/en/home" target="_blank" class="primary-hover"><i class="fa-solid fa-building-columns mr-10"></i>National Student Loans Service Centre</a></p>
                        </div>

                        <div class="bor p-3 radius8 mt-20 sub-bg">
                            <h5 class="mb-15">Need Help with OSAP?</h5>
                            <p class="sm-font mb-10">Contact our Education Counselors</p>
                            <p class="sm-font mb-0"><i class="fa-solid fa-phone mr-10"></i> 437-422-8353</p>
                            <p class="sm-font mb-0"><i class="fa-solid fa-envelope mr-10"></i> info@gocollege.ca</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Options Tab -->
            <div class="tab-pane fade" id="other">
                <div class="text-center mb-40">
                    <h2>Additional Funding Options</h2>
                    <p class="mt-15">More ways to finance your education</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="bg-white p-3 radius12 h-100 bor">
                            <div class="text-center mb-20">
                                <i class="fa-solid fa-calendar-days fa-3x"></i>
                            </div>
                            <h4 class="text-center mb-15">Payment Plans</h4>
                            <p class="text-center sm-font">Our partner colleges may offer payment plans. Options and terms vary by institution.</p>
                            <div class="text-center mt-20">
                                <p class="sm-font mb-0"><strong>Contact:</strong> 437-422-8353</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="bg-white p-3 radius12 h-100 bor">
                            <div class="text-center mb-20">
                                <i class="fa-solid fa-piggy-bank fa-3x"></i>
                            </div>
                            <h4 class="text-center mb-15">Lifelong Learning Plan</h4>
                            <p class="text-center sm-font">Withdraw from your RRSP for education under government program rules.</p>
                            <div class="text-center mt-20">
                                <a href="https://www.canada.ca/en/revenue-agency/services/tax/individuals/topics/rrsps-related-plans/lifelong-learning-plan.html" target="_blank" class="sm-font primary-hover">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="bg-white p-3 radius12 h-100 bor">
                            <div class="text-center mb-20">
                                <i class="fa-solid fa-building-columns fa-3x"></i>
                            </div>
                            <h4 class="text-center mb-15">Student Line of Credit</h4>
                            <p class="text-center sm-font">Major banks offer lines of credit for post-secondary education.</p>
                            <p class="text-center sm-font"><strong>Note:</strong> This is a loan that must be repaid with interest.</p>
                            <div class="text-center mt-20">
                                <p class="sm-font mb-0">Visit your bank or credit union</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="bg-white p-3 radius12 h-100 bor">
                            <div class="text-center mb-20">
                                <i class="fa-solid fa-baby fa-3x"></i>
                            </div>
                            <h4 class="text-center mb-15">RESP Funds</h4>
                            <p class="text-center sm-font">Use Registered Education Savings Plan if you're a named beneficiary.</p>
                            <p class="text-center sm-font"><strong>Contact:</strong> Financial institution holding your RESP</p>
                            <div class="text-center mt-20">
                                <a href="https://www.canada.ca/en/services/benefits/education/education-savings.html" target="_blank" class="sm-font primary-hover">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="bg-white p-3 radius12 h-100 bor">
                            <div class="text-center mb-20">
                                <i class="fa-solid fa-briefcase fa-3x"></i>
                            </div>
                            <h4 class="text-center mb-15">Employer/Union Programs</h4>
                            <p class="text-center sm-font">Check if your employer or union offers tuition assistance or education benefits.</p>
                            <div class="text-center mt-20">
                                <p class="sm-font mb-0">Contact your HR department</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="bg-white p-3 radius12 h-100 bor">
                            <div class="text-center mb-20">
                                <i class="fa-solid fa-file-invoice fa-3x"></i>
                            </div>
                            <h4 class="text-center mb-15">Tax Receipts</h4>
                            <p class="text-center sm-font">Official tax receipts may be issued at year-end for tuition tax credits.</p>
                            <div class="text-center mt-20">
                                <p class="sm-font mb-0">437-422-8353</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Education Counseling Office Info -->
<section class="pt-60 pb-60 sub-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
                <h2 class="mb-20">Need Help? Contact Our Education Counselors</h2>
                <p>Our Education Counselors are here to help you navigate your funding options and understand the application process.</p>
                
                <h5 class="mt-30 mb-15">How We Help:</h5>
                <ul>
                    <li class="mb-10">FREE Career guidance and program selection</li>
                    <li class="mb-10">Guidance on bursary and funding programs</li>
                    <li class="mb-10">Help understanding application requirements</li>
                    <li class="mb-10">Coordination with colleges and funding programs</li>
                    <li class="mb-10">Support throughout the admissions process</li>
                </ul>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="bg-white p-4 radius12 bor shadow">
                    <h4 class="mb-30">Contact Information</h4>
                    
                    <div class="mb-25">
                        <h6 class="mb-10">Phone:</h6>
                        <p class="mb-0 fs-18"><a href="tel:437-422-8353" class="primary-hover fw-600">437-422-8353</a></p>
                    </div>
                    
                    <div class="mb-25">
                        <h6 class="mb-10">Email:</h6>
                        <p class="mb-5"><a href="mailto:info@gocollege.ca" class="primary-hover">info@gocollege.ca</a></p>
                    </div>
                    
                    <div class="mb-30">
                        <h6 class="mb-10">Office Hours:</h6>
                        <p class="mb-5">Monday - Friday: 9:00 AM - 5:00 PM</p>
                        <p class="mb-0 sm-font">(Appointments recommended)</p>
                    </div>

                    <a href="{{ route('scheduleCall') }}" class="btn-one w-100 text-center">Schedule FREE Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="pt-60 pb-60 primary-bg">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-12">
                <h2 class="text-white mb-15">Ready to Start Your Journey?</h2>
                <p class="text-white mb-30">Don't let finances hold you back. We'll guide you through your funding options.</p>
                <a href="{{ route('scheduleCall') }}" class="btn-one-light mb-10">Schedule A Call</a>
            </div>
        </div>
    </div>
</section>
@endsection