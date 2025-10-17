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
                <p>At GoCollege, we believe financial barriers shouldn't stop you from pursuing your career goals. We guide you through government funding options like OSAP and Better Jobs Ontario, helping you understand what you may qualify for and help you to apply.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tabbed Financial Aid Section -->
<section class="pt-40 pb-100">
    <div class="container">
        <!-- Tab Navigation -->
        <div class="classic-tabs">
            <ul class="nav nav-tabs justify-content-center border-0" id="financialAidTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="bursaries-tab" data-bs-toggle="tab" data-bs-target="#bursaries" type="button" role="tab">
                        Bursaries
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="atw-tab" data-bs-toggle="tab" data-bs-target="#atw" type="button" role="tab">
                        Abilities to Work
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tcet-tab" data-bs-toggle="tab" data-bs-target="#tcet" type="button" role="tab">
                        TCET Loans
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bjo-tab" data-bs-toggle="tab" data-bs-target="#bjo" type="button" role="tab">
                        Better Jobs Ontario
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="second-career-tab" data-bs-toggle="tab" data-bs-target="#second-career" type="button" role="tab">
                        Second Career
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="osap-tab" data-bs-toggle="tab" data-bs-target="#osap" type="button" role="tab">
                        OSAP
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab">
                        Other Options
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="financialAidTabContent">
            
            <!-- Bursaries Tab -->
            <div class="tab-pane fade show active" id="bursaries" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">College Bursaries: $50 - $1,500</h2>
                        <p>GoCollege offers generous bursaries for eligible students. Bursaries are <strong>grants you don't repay</strong> - they reduce your tuition cost directly.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-circle-info mr-10"></i> Important Information</h5>
                            <ul class="mb-0 pl-20">
                                <li>Bursaries range from $50 to $1,500 per student</li>
                                <li>Students may combine multiple bursaries</li>
                                <li>Available on vocational programs only</li>
                                <li>Not available to international students or agent-represented students</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Available Bursary Types:</h4>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> New Immigrant Bursary</h5>
                            <p><strong>Eligibility:</strong> Landed in Canada less than 2 years ago<br>
                            <strong>Documents Needed:</strong> Landing papers or PR card with entry date</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> Back to School Bursary</h5>
                            <p><strong>Eligibility:</strong> Been away from school for 5-15 years<br>
                            <strong>Documents Needed:</strong> Proof of last education completion date</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> Life Experience Bursary</h5>
                            <p><strong>Eligibility:</strong> Based on previous education or work experience<br>
                            <strong>Documents Needed:</strong> Transcripts, diplomas, certifications, reference letters</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> In-Need Bursary</h5>
                            <p><strong>Eligibility:</strong> Based on family income and financial circumstances<br>
                            <strong>Documents Needed:</strong> Proof of income (Notice of Assessment, pay stubs)</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-circle-check primary-color mr-10"></i> Refugee Bursary</h5>
                            <p><strong>Eligibility:</strong> Valid refugee status in Canada<br>
                            <strong>Documents Needed:</strong> Refugee status documentation</p>
                        </div>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How to Apply:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Book a FREE Campus Tour:</strong> Call 437-422-8353 or email info@gocollege.ca</li>
                                <li class="mb-15"><strong>Meet with Admissions Advisor:</strong> Choose your program and career path</li>
                                <li class="mb-15"><strong>Bring Required Documents:</strong> Transcripts, work experience letters, proof of income/status</li>
                                <li class="mb-15"><strong>Assessment:</strong> Your eligibility is assessed by the Admissions Advisor and/or Manager</li>
                                <li><strong>Decision:</strong> Bursary amount determined same-day during your visit</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Timeline:</strong> Bursaries are assessed during your admissions appointment. Schedule your visit at least 2 weeks before your intended program start date.</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=500&fit=crop" alt="Students" class="radius12 w-100 mb-20 bor">
                        
                        <div class="contact-sidebar shadow">
                            <h5 class="mb-20">Quick Contact</h5>
                            <p class="mb-25">Schedule your FREE consultation to discuss bursary eligibility</p>
                            <a href="{{ route('scheduleCall') }}" class="btn-one w-100 text-center mb-15">Schedule A Call</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Abilities to Work Tab -->
            <div class="tab-pane fade" id="atw" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">Abilities to Work Partnership</h2>
                        <p>Get up to <strong>$3,750 in funding</strong> (grant - no repayment required) if you have a self-diagnosed disability including mental health challenges, cognitive, learning, physical disabilities, and more.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-money-bill-wave mr-10"></i> Funding Details</h5>
                            <ul class="mb-0 pl-20">
                                <li>Maximum funding: $3,750</li>
                                <li>Covers: Tuition, books, uniforms, First Aid & CPR</li>
                                <li>This is a <strong>grant</strong> - you do NOT repay this funding</li>
                                <li>Funding determined by eligibility and program suitability</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Eligibility Requirements:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Ages 15 and older</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Canadian Citizen or Permanent Resident</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Legally entitled to work in Canada</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Ready and willing to work in competitive employment</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Have not received EI in past 3-5 years (Work Readiness Program)</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Self-diagnosed disability (mental health, cognitive, physical, learning, etc.)</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Flexible for campus location, class times, and days</li>
                        </ul>

                        <h4 class="mb-15 mt-30">Eligible Programs:</h4>
                        <p>Short courses or groups of courses within a 12-week period including:</p>
                        <ul>
                            <li>Home Support Worker (460 hrs / 19 weeks) - Certificate</li>
                            <li>Dental Office Administration (335 hrs / 14 wks) - Diploma</li>
                            <li>Food Service Worker (390 hrs / 14 wks) - Diploma</li>
                            <li>Bookkeeping (195 hours / 8 weeks) - Certificate</li>
                            <li>Business and Human Resources (195 hours / 8 weeks) - Certificate</li>
                            <li>Microsoft Office Suite (205 hours / 8 weeks) - Certificate</li>
                            <li>IT Support Technician (180 hrs / 7 weeks) - Certificate</li>
                            <li>Mississauga Trades School programs (39 hours) - Certificate</li>
                        </ul>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">Application Process:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Contact GoCollege:</strong> Call 437-422-8353 or email info@gocollege.ca</li>
                                <li class="mb-15"><strong>Career Guidance Session:</strong> Meet with Admissions Advisor to choose your program</li>
                                <li class="mb-15"><strong>Intake Appointment:</strong> We'll schedule you to meet with an Abilities to Work coordinator</li>
                                <li class="mb-15"><strong>Assessment:</strong> Your disability is assessed and funding determined (usually within days)</li>
                                <li><strong>Enrollment:</strong> Once approved, you can start your program</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Processing Time:</strong> Assessment and funding determination typically completed within a few days of your intake appointment.</p>
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
            <div class="tab-pane fade" id="tcet" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">TCET Student Loans for Internationally Trained Professionals</h2>
                        <p class="mb-20">Access loans from <strong>$1,500 to $15,000</strong> through The Centre for Education and Training (TCET) and Meridian Credit Union. These loans help internationally trained individuals get their Canadian career started.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-exclamation-triangle mr-10"></i> Important: This is a LOAN</h5>
                            <ul class="mb-0 pl-20">
                                <li>This funding <strong>MUST be repaid</strong> with interest</li>
                                <li>Interest Rate: Prime + 2%</li>
                                <li>Repayment terms: 1 to 4 years</li>
                                <li>Funded by Government of Canada's Foreign Credential Recognition Program</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Eligibility Requirements:</h4>
                        <ol class="pl-20">
                            <li class="mb-10">Permanent Resident, Canadian Citizen, or Convention Refugee legally permitted to work in Canada</li>
                            <li class="mb-10">Education and work experience obtained OUTSIDE Canada</li>
                            <li class="mb-10">Seeking credential recognition OR alternative career training</li>
                            <li class="mb-10">Demonstrated financial need and lack of access to comparable resources</li>
                            <li class="mb-10">Reside in Peel Region, Toronto, Halton Region, or Hamilton</li>
                        </ol>

                        <h4 class="mb-20 mt-30">What the Loan Covers:</h4>
                        <ul class="pl-20">
                            <li class="mb-10">Tuition Fees</li>
                            <li class="mb-10">Travel Expenses</li>
                            <li class="mb-10">Books and course materials</li>
                            <li class="mb-10">Living Expenses</li>
                            <li class="mb-10">Uniform Cost</li>
                            <li class="mb-10">Qualification Assessment and Exam Fees</li>
                        </ul>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">Application Steps:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Meet with GoCollege Admissions Advisor:</strong> Choose your program (Call 437-422-8353)</li>
                                <li class="mb-15"><strong>Connect with TCET Counsellor:</strong> We'll connect you within one week</li>
                                <li class="mb-15"><strong>Submit Loan Application:</strong> Work with TCET to complete application</li>
                                <li class="mb-15"><strong>Documentation Required:</strong>
                                    <ul class="mt-10">
                                        <li>Proof of residency in eligible region</li>
                                        <li>Foreign credentials/education documents</li>
                                        <li>Work experience letters</li>
                                        <li>Proof of immigration status</li>
                                        <li>Financial need documentation</li>
                                    </ul>
                                </li>
                                <li class="mb-15"><strong>Credit Assessment:</strong> No credit history required for eligible applicants*</li>
                                <li><strong>Loan Approval:</strong> Funds issued by Meridian Credit Union upon approval</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Timeline:</strong> Apply at least 4-6 weeks before your program start date. Processing time varies based on documentation completeness.</p>
                        </div>

                        <div class="info-box mt-20">
                            <h5 class="mb-10">More Information</h5>
                            <p class="mb-0">Visit <a href="http://www.tcet.com/FCRloans" target="_blank" class="primary-hover">www.tcet.com/FCRloans</a> or call GoCollege at 437-422-8353</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=400&h=500&fit=crop" alt="Financial planning" class="radius12 w-100 mb-20 bor">
                        
                        <div class="bor p-3 radius8 shadow">
                            <h5 class="mb-4">Loan Features</h5>
                            <div class="mb-4">
                                <h6 class="mb-1">Amount:</h6>
                                <p class="mb-0">$1,500 - $15,000</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1">Interest:</h6>
                                <p class="mb-0">Prime + 2%</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1">Repayment:</h6>
                                <p class="mb-0">1-4 years</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1">Fees:</h6>
                                <p class="mb-0">No hidden fees</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Better Jobs Ontario Tab -->
            <div class="tab-pane fade" id="bjo" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">Better Jobs Ontario</h2>
                        <p>Ontario government cost-sharing <strong>grant up to $28,000</strong> for laid-off workers. Plus, receive a <strong>FREE LAPTOP</strong> when you enroll at College!</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-money-bill-wave mr-10"></i> Funding Details</h5>
                            <ul class="mb-0 pl-20">
                                <li>Maximum funding: Up to $28,000 for up to 2 years</li>
                                <li>Covers: Tuition, books, transportation, living expenses</li>
                                <li>This is a <strong>grant</strong> - you do NOT repay this funding</li>
                                <li>You may be required to contribute towards training</li>
                                <li>Administered by Ministry of Colleges and Universities (MCU)</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Who is Eligible?</h4>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-check primary-color mr-10"></i> Laid Off After 2004</h5>
                            <p>You may qualify even if you've received Employment Insurance (EI)</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-check primary-color mr-10"></i> Training Duration</h5>
                            <p><strong>EI-eligible:</strong> 6 months to 2 years of skills training<br>
                            <strong>Non-EI-eligible:</strong> Up to 2 years of skills training for NOC skill level B or C occupations</p>
                        </div>
                        
                        <div class="mb-20">
                            <h5><i class="fa-solid fa-check primary-color mr-10"></i> Academic Upgrading</h5>
                            <p>Up to 1 year available if needed as a prerequisite</p>
                        </div>

                        <h4 class="mb-15 mt-30">Eligible Programs (Examples):</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="sm-font">
                                    <li>Accounting Administration</li>
                                    <li>Advanced Aesthetics</li>
                                    <li>Artificial Intelligence</li>
                                    <li>Business Administration</li>
                                    <li>Business Management</li>
                                    <li>Cabinetry and Furniture Technician</li>
                                    <li>Community Service Worker</li>
                                    <li>Data Analytics</li>
                                    <li>Data Science and Big Data</li>
                                    <li>Dental Office Administration</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="sm-font">
                                    <li>Early Childhood Assistant</li>
                                    <li>Food Service Worker</li>
                                    <li>Home Support Worker</li>
                                    <li>Law Clerk</li>
                                    <li>Legal Office Administration</li>
                                    <li>Medical Office Administration</li>
                                    <li>Network Administration</li>
                                    <li>Paralegal</li>
                                    <li>Personal Support Worker</li>
                                    <li>...and many more!</li>
                                </ul>
                            </div>
                        </div>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">Application Process:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Confirm Eligibility:</strong> Laid off after 2004 and meet program requirements</li>
                                <li class="mb-15"><strong>Contact Service Canada or Employment Ontario:</strong> Start your application with them</li>
                                <li class="mb-15"><strong>Career Guidance at GoCollege:</strong> Call 437-422-8353 or email info@gocollege.ca</li>
                                <li class="mb-15"><strong>Choose Your Program:</strong> Work with our advisors to select the right training</li>
                                <li class="mb-15"><strong>Submit to MCU:</strong> Complete Better Jobs Ontario application through Service Canada</li>
                                <li><strong>Approval & Enrollment:</strong> Once approved, enroll and claim your FREE laptop</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-0"><strong><i class="fa-solid fa-clock mr-10"></i>Timeline:</strong> Apply as soon as possible after layoff. Processing can take 4-8 weeks. Start your program only after receiving approval.</p>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-30">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=400&h=500&fit=crop" alt="Training" class="radius12 w-100 mb-20 bor">

                        <div class="contact-sidebar mt-20">
                            <h5 class="mb-15">Get Started</h5>
                            <p class="mb-25">Schedule your FREE consultation to discuss bursary eligibility</p>
                            <a href="{{ route('scheduleCall') }}" class="btn-one w-100 text-center mb-15">Schedule A Call</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Career Tab -->
            <div class="tab-pane fade" id="second-career" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">Second Career Program (EI & WSIB)</h2>
                        <p>Financial assistance for laid-off workers to retrain for in-demand occupations. Funded through Employment Insurance (EI) and Workplace Safety and Insurance Board (WSIB).</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-money-bill-wave mr-10"></i> Funding Details</h5>
                            <ul class="mb-0 pl-20">
                                <li>Covers training costs up to a maximum set by the program</li>
                                <li>May include tuition, books, transportation</li>
                                <li>This is typically a <strong>grant</strong> - no repayment required</li>
                                <li>Must be for training up to 2 years</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Eligibility Requirements:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Currently receiving EI benefits OR recently laid off</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> On WSIB benefits and unable to return to previous occupation</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Unemployed or facing job loss</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Requires skills training to find employment</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Must be legally entitled to work in Canada</li>
                        </ul>

                        <h4 class="mb-15 mt-30">Eligible Programs:</h4>
                        <p>Training that leads to employment in an in-demand occupation. Contact us to confirm your program qualifies.</p>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How to Apply:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Contact Service Canada or WSIB:</strong> Discuss your eligibility for Second Career funding</li>
                                <li class="mb-15"><strong>Career Assessment:</strong> Work with Employment Ontario to develop your plan</li>
                                <li class="mb-15"><strong>Contact GoCollege:</strong> Call 437-422-8353 for program information</li>
                                <li class="mb-15"><strong>Program Selection:</strong> Choose a training program that matches your career goals</li>
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
            <div class="tab-pane fade" id="osap" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <h2 class="mb-20">OSAP - Ontario Student Assistance Program</h2>
                        <p>Provincial and federal financial assistance combining grants (you keep) and loans (you repay) based on your financial need.</p>
                        
                        <div class="info-box">
                            <h5 class="mb-10"><i class="fa-solid fa-exclamation-triangle mr-10"></i> OSAP Includes Loans</h5>
                            <ul class="mb-0 pl-20">
                                <li><strong>Grants:</strong> Money you DON'T repay</li>
                                <li><strong>Loans:</strong> Money you MUST repay with interest after graduation</li>
                                <li>Provincial loans: Interest charges apply immediately</li>
                                <li>Federal loans: No interest as of April 1, 2023</li>
                                <li>Repayment starts 6 months after leaving school</li>
                            </ul>
                        </div>

                        <h4 class="mb-20 mt-30">Eligibility Requirements:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Canadian citizen, permanent resident, or protected person</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Ontario resident for at least 12 consecutive months</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Enrolled in an approved program at an eligible institution</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Demonstrate financial need</li>
                            <li class="mb-10"><i class="fa-solid fa-check primary-color mr-10"></i> Maintain satisfactory academic progress</li>
                        </ul>

                        <h4 class="mb-15 mt-30">What OSAP Covers:</h4>
                        <ul>
                            <li>Tuition and fees</li>
                            <li>Books and supplies</li>
                            <li>Living expenses (accommodation, food)</li>
                            <li>Transportation</li>
                            <li>Childcare (if applicable)</li>
                        </ul>

                        <div class="steps-box mt-30">
                            <h4 class="mb-20">How to Apply for OSAP:</h4>
                            <ol class="pl-20">
                                <li class="mb-15"><strong>Create OSAP Account:</strong> Visit <a href="https://www.ontario.ca/osap" target="_blank" class="primary-hover">ontario.ca/osap</a></li>
                                <li class="mb-15"><strong>Complete Information Module:</strong> First-time applicants must complete (approx. 15 minutes)</li>
                                <li class="mb-15"><strong>Gather Documents:</strong>
                                    <ul class="mt-10">
                                        <li>Social Insurance Number (SIN)</li>
                                        <li>Ontario Education Number (OEN) - if applicable</li>
                                        <li>Income information (yours and/or parents/spouse)</li>
                                        <li>Banking information</li>
                                    </ul>
                                </li>
                                <li class="mb-15"><strong>Apply Early:</strong> Applications open 60 days before your study period</li>
                                <li class="mb-15"><strong>Submit Application:</strong> Complete and submit online</li>
                                <li class="mb-15"><strong>Upload Documents:</strong> Provide any requested supporting documents</li>
                                <li class="mb-15"><strong>School Confirmation:</strong> We'll confirm your enrollment automatically</li>
                                <li><strong>Receive Funding:</strong> Funds typically arrive shortly after term starts</li>
                            </ol>
                        </div>

                        <div class="deadline-box">
                            <p class="mb-10"><strong><i class="fa-solid fa-clock mr-10"></i>Application Deadlines:</strong></p>
                            <ul class="mb-0 pl-40">
                                <li>Apply 60 days before your study period begins</li>
                                <li>Submit documents within 40 days of study period end</li>
                                <li>Late applications accepted but funding may be reduced</li>
                                <li>Reapply each academic year - funding is not automatic</li>
                            </ul>
                        </div>

                        <div class="info-box mt-20">
                            <h5 class="mb-10">Important Notes</h5>
                            <ul class="mb-0 pl-20">
                                <li>Use OSAP's Aid Estimator to see how much you might receive</li>
                                <li>You can decline the loan portion and keep only grants</li>
                                <li>Contact GoCollege financial aid office if you need help: 437-422-8353</li>
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
                            <p class="sm-font mb-10">Contact our Financial Aid Office</p>
                            <p class="sm-font mb-0"><i class="fa-solid fa-phone mr-10"></i> 437-422-8353</p>
                            <p class="sm-font mb-0"><i class="fa-solid fa-envelope mr-10"></i> info@gocollege.ca</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Options Tab -->
            <div class="tab-pane fade" id="other" role="tabpanel">
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
                            <h4 class="text-center mb-15">Monthly Payment Plans</h4>
                            <p class="text-center sm-font"><strong>Interest-free</strong> plans with no credit check. Payments throughout your program.</p>
                            <p class="text-center sm-font"><strong>Extended plans</strong> available with credit check.</p>
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
                            <h4 class="text-center mb-15">Lifelong Learning Plan (LLP)</h4>
                            <p class="text-center sm-font">Withdraw from your RRSP for education.</p>
                            <p class="text-center sm-font"><strong>Up to $10,000/year</strong><br>Maximum $20,000 total</p>
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
                            <p class="text-center sm-font">Check if your employer or union offers tuition reimbursement or education assistance.</p>
                            <p class="text-center sm-font">Some programs cover 50-100% of tuition.</p>
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
                            <h4 class="text-center mb-15">Tax Receipts (T2202A)</h4>
                            <p class="text-center sm-font">Official tax receipts issued at year-end for tuition tax credits.</p>
                            <p class="text-center sm-font"><strong>Request:</strong> Contact admin office</p>
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

<!-- Financial Aid Office Info -->
<section class="pt-60 pb-60 sub-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
                <h2 class="mb-20">Need Help? Visit Our Financial Aid Office</h2>
                <p>Our Education Counselors and Financial Aid team are here to help you navigate your funding options and complete applications.</p>
                
                <h5 class="mt-30 mb-15">Services We Provide:</h5>
                <ul>
                    <li class="mb-10">FREE Career guidance and program selection</li>
                    <li class="mb-10">Bursary and scholarship assessment</li>
                    <li class="mb-10">Application assistance for all funding programs</li>
                    <li class="mb-10">Document review and submission support</li>
                    <li class="mb-10">Financial planning and budget counseling</li>
                    <li class="mb-10">Appeals and special circumstances review</li>
                </ul>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="bg-white p-4 radius12 bor shadow">
                    <h4 class="mb-30">Contact Information</h4>
                    
                    <div class="mb-25">
                        <h6 class="mb-10">Phone (General Inquiries):</h6>
                        <p class="mb-0 fs-18"><a href="tel:437-422-8353" class="primary-hover fw-600">437-422-8353</a></p>
                    </div>

                    <div class="mb-25">
                        <h6 class="mb-10">Phone (Financial Aid Office):</h6>
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
                <p class="text-white mb-30">Don't let finances hold you back. We'll help you find the right funding solution.</p>
                <a href="{{ route('scheduleCall') }}" class="btn-one-light mb-10">Schedule A Call</a>
            </div>
        </div>
    </div>
</section>

@endsection