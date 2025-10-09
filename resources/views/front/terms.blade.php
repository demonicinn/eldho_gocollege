@extends('layouts.app')
@section('content')

<!-- Banner Inner Area -->
<section class="banner-inner-area sub-bg bg-image pt-120 pb-120">
    <div class="container">
        <div class="banner-inner__content text-center">
            <h1 class="mb-20">Terms of Service</h1>
            <p class="fs-18">Service Limitations and Disclaimers</p>
        </div>
    </div>
</section>

<!-- Terms Content Area -->
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Introduction -->
                <div class="mb-60">
                    <p class="fs-18">Welcome to GoCollege.ca. By using our services, you acknowledge and agree to the following terms and conditions. Please read carefully to understand our role, limitations, and your responsibilities.</p>
                </div>

                <!-- Nature of Service -->
                <div class="mb-50">
                    <h3 class="primary-color mb-30">1. Nature of Service</h3>
                    <p class="mb-20">GoCollege.ca operates as a <strong>referral and advisory service</strong> connecting students with accredited career colleges in Ontario. Our services include:</p>
                    <ul class="ps-4 mb-20">
                        <li class="mb-15"><i class="fa-solid fa-check-circle primary-color me-2"></i>Connecting students with accredited career colleges across Ontario</li>
                        <li class="mb-15"><i class="fa-solid fa-check-circle primary-color me-2"></i>Providing guidance on identifying government grants and loans (OSAP, NSLSC, etc.)</li>
                        <li class="mb-15"><i class="fa-solid fa-check-circle primary-color me-2"></i>Offering free consultation and application support</li>
                        <li class="mb-15"><i class="fa-solid fa-check-circle primary-color me-2"></i>Assisting with documentation and deadline management</li>
                    </ul>
                    <div class="p-4 sub-bg radius8 bor-left">
                        <p class="mb-0"><strong>Important:</strong> We do NOT make admission decisions, guarantee acceptance into any program, or have any authority over college or government funding decisions.</p>
                    </div>
                </div>

                <!-- No Decision-Making Authority -->
                <div class="mb-50">
                    <h3 class="primary-color mb-30">2. No Decision-Making Authority</h3>
                    <p class="mb-20">GoCollege.ca acts solely as an intermediary and advisory service. We explicitly acknowledge that:</p>
                    <ul class="ps-4 mb-20">
                        <li class="mb-15"><i class="fa-solid fa-times-circle secondary-color me-2"></i><strong>Final admission decisions</strong> rest entirely with the career colleges and educational institutions</li>
                        <li class="mb-15"><i class="fa-solid fa-times-circle secondary-color me-2"></i><strong>Funding approval decisions</strong> are made exclusively by government agencies (OSAP, NSLSC, and other funding bodies)</li>
                        <li class="mb-15"><i class="fa-solid fa-times-circle secondary-color me-2"></i><strong>We have no control or influence</strong> over admission outcomes or funding decisions</li>
                        <li class="mb-15"><i class="fa-solid fa-times-circle secondary-color me-2"></i><strong>We cannot override, appeal, or modify</strong> decisions made by colleges or funding agencies</li>
                    </ul>
                    <p>Each institution maintains its own admission criteria, and each government agency has specific eligibility requirements that are beyond our control.</p>
                </div>

                <!-- Referral Fee Disclosure -->
                <div class="mb-50">
                    <h3 class="primary-color mb-30">3. Referral Fee Disclosure</h3>
                    <p class="mb-20">In the interest of full transparency, we disclose the following:</p>
                    <div class="row g-4 mb-20">
                        <div class="col-md-6">
                            <div class="p-4 h-100 shadow radius8 bg-white">
                                <h5 class="mb-15"><i class="fa-solid fa-handshake primary-color me-2"></i>Referral Bonuses</h5>
                                <p class="mb-0">We receive referral bonuses from partner career colleges when students successfully enroll through our service.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 h-100 shadow radius8 bg-white">
                                <h5 class="mb-15"><i class="fa-solid fa-gift primary-color me-2"></i>Free to Students</h5>
                                <p class="mb-0">This referral fee is paid by the college, NOT by the student. Our services remain completely FREE to students.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 sub-bg radius8 bor-left">
                        <p class="mb-0"><strong>Commitment to Integrity:</strong> This referral relationship does not affect the quality, impartiality, or honesty of our guidance. We are committed to matching students with programs that best fit their educational and career goals.</p>
                    </div>
                </div>

                <!-- Scope of Assistance -->
                <div class="mb-50">
                    <h3 class="primary-color mb-30">4. Scope of Assistance</h3>
                    <p class="mb-20">Our assistance to students includes:</p>
                    
                    <h5 class="mb-15 mt-30">What We DO:</h5>
                    <ul class="ps-4 mb-30">
                        <li class="mb-15"><i class="fa-solid fa-check primary-color me-2"></i>Identify eligible programs based on student interests and qualifications</li>
                        <li class="mb-15"><i class="fa-solid fa-check primary-color me-2"></i>Provide information about available government funding options (OSAP, grants, loans)</li>
                        <li class="mb-15"><i class="fa-solid fa-check primary-color me-2"></i>Guide students through application preparation and documentation requirements</li>
                        <li class="mb-15"><i class="fa-solid fa-check primary-color me-2"></i>Explain admission requirements, deadlines, and program details</li>
                        <li class="mb-15"><i class="fa-solid fa-check primary-color me-2"></i>Connect students directly with college admissions offices</li>
                        <li class="mb-15"><i class="fa-solid fa-check primary-color me-2"></i>Provide ongoing support and answer questions throughout the process</li>
                    </ul>

                    <h5 class="mb-15">What We DO NOT Do:</h5>
                    <ul class="ps-4">
                        <li class="mb-15"><i class="fa-solid fa-times secondary-color me-2"></i>Fill out applications on behalf of students</li>
                        <li class="mb-15"><i class="fa-solid fa-times secondary-color me-2"></i>Make admission decisions or influence college choices</li>
                        <li class="mb-15"><i class="fa-solid fa-times secondary-color me-2"></i>Guarantee funding approval or loan amounts</li>
                        <li class="mb-15"><i class="fa-solid fa-times secondary-color me-2"></i>Provide legal, immigration, or financial advisory services</li>
                        <li class="mb-15"><i class="fa-solid fa-times secondary-color me-2"></i>Act as official representatives of any college or government agency</li>
                    </ul>
                </div>

                <!-- No Guarantees -->
                <div class="mb-50">
                    <h3 class="primary-color mb-30">5. No Guarantees</h3>
                    <div class="p-4 shadow radius8 bg-white mb-20">
                        <h5 class="mb-20"><i class="fa-solid fa-exclamation-triangle secondary-color me-2"></i>Important Disclaimer</h5>
                        <p class="mb-0">GoCollege.ca provides guidance and support services but cannot and does not guarantee any specific outcomes. Specifically:</p>
                    </div>
                    <ul class="ps-4 mb-20">
                        <li class="mb-15">We cannot guarantee admission to any program or educational institution</li>
                        <li class="mb-15">We cannot guarantee approval of any government funding, grants, or loans</li>
                        <li class="mb-15">We cannot guarantee specific funding amounts or loan terms</li>
                        <li class="mb-15">Program availability, course content, and admission requirements may change without notice</li>
                        <li class="mb-15">Funding eligibility is determined solely by government criteria and regulations</li>
                        <li class="mb-15">College policies, tuition fees, and program offerings are subject to change</li>
                    </ul>
                    <p><strong>Each student's outcome depends on:</strong> their individual qualifications, academic history, financial situation, program requirements, and decisions made by colleges and funding agencies.</p>
                </div>

                <!-- Student Responsibility -->
                <div class="mb-50">
                    <h3 class="primary-color mb-30">6. Student Responsibility</h3>
                    <p class="mb-20">Students using our services agree to the following responsibilities:</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-4 h-100 sub-bg radius8">
                                <h5 class="mb-15"><i class="fa-solid fa-file-lines primary-color me-2"></i>Accurate Information</h5>
                                <p class="mb-0">Provide complete, accurate, and truthful information in all applications and communications.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 h-100 sub-bg radius8">
                                <h5 class="mb-15"><i class="fa-solid fa-clock primary-color me-2"></i>Meeting Deadlines</h5>
                                <p class="mb-0">Ensure all applications, documents, and requirements are submitted by specified deadlines.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 h-100 sub-bg radius8">
                                <h5 class="mb-15"><i class="fa-solid fa-check-double primary-color me-2"></i>Compliance</h5>
                                <p class="mb-0">Comply with all requirements set by colleges, funding agencies, and government bodies.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 h-100 sub-bg radius8">
                                <h5 class="mb-15"><i class="fa-solid fa-user-check primary-color me-2"></i>Final Decision</h5>
                                <p class="mb-0">Make informed, independent decisions about which programs to apply to and accept.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 mt-30 shadow radius8 bg-white">
                        <p class="mb-0"><strong>Note:</strong> While we provide guidance and support, students retain full responsibility for reviewing all program details, understanding financial obligations, and making enrollment decisions.</p>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="mb-50">
                    <h3 class="primary-color mb-30">7. Questions or Concerns</h3>
                    <p class="mb-20">If you have any questions about these terms or our services, please contact us:</p>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="p-4 text-center h-100 shadow radius8 bg-white">
                                <i class="fa-solid fa-phone fs-2 primary-color mb-15"></i>
                                <p class="mb-0 fw-semibold">Phone</p>
                                <a href="tel:437-422-8353" class="primary-color text-decoration-none">437-422-8353</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4 text-center h-100 shadow radius8 bg-white">
                                <i class="fa-solid fa-envelope fs-2 primary-color mb-15"></i>
                                <p class="mb-0 fw-semibold">Email</p>
                                <a href="mailto:info@gocollege.ca" class="primary-color text-decoration-none">info@gocollege.ca</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4 text-center h-100 shadow radius8 bg-white">
                                <i class="fa-solid fa-location-dot fs-2 primary-color mb-15"></i>
                                <p class="mb-0 fw-semibold">Address</p>
                                <p class="mb-0">6 Urbane Blvd, Kitchener<br>Ontario N2E0J4</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Last Updated -->
                <div class="text-center pt-40 bor-top">
                    <p class="text-muted"><em>Last Updated: January 2025</em></p>
                    <p class="mb-0">By using GoCollege.ca services, you acknowledge that you have read, understood, and agreed to these terms.</p>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection