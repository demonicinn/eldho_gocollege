@extends('layouts.app')
@section('content')

<!-- Banner area start here -->
<section class="banner-inner-area sub-bg bg-image" data-background="assets/images/bg/banner-inner-bg.png">
    <div class="container">
        <div class="banner-inner__content">
            <h1>Get Program Info & Check Your Funding</h1>
            <p>Connect with colleges offering Accounting & Payroll programs and discover your financial aid options</p>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><i class="fa-regular fa-angle-right"></i></li>
                <li>Schedule A Call</li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner area end here -->


<!-- Contact Form Section -->
<section class="about-area about-inner-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Form Column -->
            <div class="col-12 col-lg-6 order-1 order-lg-1">
                <div class="contact__item bor radius12 p-3 p-md-5">
                    <div class="text-center mb-4 mb-md-5">
                        <h2 class="title-font fw-700 fs-3 fs-md-2">Get Started in 30 Seconds</h2>
                        <p class="mt-2 mt-md-3 text-font fs-6">We'll match you with colleges and funding options</p>
                    </div>

                    <form id="contactForm" action="{{ route('scheduleCall') }}" method="POST">
                        @csrf

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <!-- First Name -->
                        <div class="mb-3">
                            <input type="text" class="form-control p-3 bor radius8 text-font" placeholder="First Name *" name="first_name" value="{{ old('first_name') }}" required>
                            @error('first_name')<span>{{ $message }}</span>@enderror
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <input type="text" class="form-control p-3 bor radius8 text-font" placeholder="Last Name *" name="last_name" value="{{ old('last_name') }}" required>
                            @error('last_name')<span>{{ $message }}</span>@enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <input type="email" class="form-control p-3 bor radius8 text-font" placeholder="Email Address *" name="email" value="{{ old('email') }}" required>
                            @error('email')<span>{{ $message }}</span>@enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <input type="tel" class="form-control p-3 bor radius8 text-font" placeholder="Phone Number *" name="phone_number" value="{{ old('phone_number') }}" required>
                            @error('phone_number')<span>{{ $message }}</span>@enderror
                        </div>

                        <!-- Province -->
                        <div class="mb-3">
                            <select class="form-select p-3 bor radius8 text-font" name="province" required>
                                <option value="">Select Your Province *</option>
                                <option value="AB">Alberta</option>
                                <option value="BC">British Columbia</option>
                                <option value="MB">Manitoba</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NL">Newfoundland and Labrador</option>
                                <option value="NS">Nova Scotia</option>
                                <option value="ON">Ontario</option>
                                <option value="PE">Prince Edward Island</option>
                                <option value="QC">Quebec</option>
                                <option value="SK">Saskatchewan</option>
                                <option value="NT">Northwest Territories</option>
                                <option value="NU">Nunavut</option>
                                <option value="YT">Yukon</option>
                            </select>
                            @error('province')<span>{{ $message }}</span>@enderror
                        </div>

                        <!-- Contact Time -->
                        <div class="mb-4">
                            <label class="text-font fw-500 mb-3 d-block">Best Time to Contact You:</label>
                            <div class="row g-2">
                                <div class="col-6 col-sm-4">
                                    <input type="radio" class="btn-check" name="contact_time" id="morning" value="9am-11am">
                                    <label class="btn btn-outline-primary w-100 text-font fs-14 py-2" for="morning">9-11 AM</label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <input type="radio" class="btn-check" name="contact_time" id="midday" value="11am-1pm">
                                    <label class="btn btn-outline-primary w-100 text-font fs-14 py-2" for="midday">11 AM-1 PM</label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <input type="radio" class="btn-check" name="contact_time" id="afternoon" value="1pm-3pm">
                                    <label class="btn btn-outline-primary w-100 text-font fs-14 py-2" for="afternoon">1-3 PM</label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <input type="radio" class="btn-check" name="contact_time" id="late_afternoon" value="3pm-5pm">
                                    <label class="btn btn-outline-primary w-100 text-font fs-14 py-2" for="late_afternoon">3-5 PM</label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <input type="radio" class="btn-check" name="contact_time" id="evening" value="5pm-7pm">
                                    <label class="btn btn-outline-primary w-100 text-font fs-14 py-2" for="evening">5-7 PM</label>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <input type="radio" class="btn-check" name="contact_time" id="anytime" value="anytime">
                                    <label class="btn btn-outline-primary w-100 text-font fs-14 py-2" for="anytime">Anytime</label>
                                </div>

                                @error('contact_time')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <!-- Consent -->
                        <div class="mb-4">
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="radio" class="btn-check" name="consent" id="agree" value="agree" required>
                                    <label class="btn btn-outline-primary w-100 text-font fs-14" for="agree">I Agree</label>
                                </div>
                                <div class="col-6">
                                    <input type="radio" class="btn-check" name="consent" id="disagree" value="disagree">
                                    <label class="btn btn-outline-secondary w-100 text-font fs-14" for="disagree">I Disagree</label>
                                </div>
                                @error('consent')<span>{{ $message }}</span>@enderror
                            </div>
                            <p class="text-font fs-12 mt-2 mb-0">
                                By selecting "I Agree", I consent to be contacted by GoCollege.ca via phone, email, or text to discuss educational opportunities. I can opt out anytime. I also agree to the <a href="#" class="primary-color">Terms</a> and <a href="#" class="primary-color">Privacy Policy</a>.
                            </p>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mb-3">
                            <button type="submit" class="btn-one w-100 text-center">
                                Get Expert Guidance
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-3 mt-md-4">
                        <p class="text-font fs-12 mb-0">We'll contact you within 24 hours | 100% Free Service</p>
                    </div>
                </div>
            </div>

            <!-- Benefits Column -->
            <div class="col-12 col-lg-6 order-2 order-lg-2 mb-4 mb-lg-0">
                <div class="p-3 p-md-4">
                    <h3 class="title-font fw-700 mb-4 fs-4">What You'll Get:</h3>
                    
                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-university primary-color me-3 mt-1 fs-5"></i>
                        <div class="flex-grow-1">
                            <h5 class="title-font fw-500 mb-2 fs-6">College Options</h5>
                            <p class="text-font fs-6 mb-0">Get matched with accredited colleges offering this program</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-dollar-sign primary-color me-3 mt-1 fs-5"></i>
                        <div class="flex-grow-1">
                            <h5 class="title-font fw-500 mb-2 fs-6">Funding Info</h5>
                            <p class="text-font fs-6 mb-0">Learn about grants, loans, and scholarships you qualify for</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="fas fa-headset primary-color me-3 mt-1 fs-5"></i>
                        <div class="flex-grow-1">
                            <h5 class="title-font fw-500 mb-2 fs-6">Free Support</h5>
                            <p class="text-font fs-6 mb-0">Personal guidance through the entire application process</p>
                        </div>
                    </div>

                    <div class="mt-4 mt-md-5 p-4 sub-bg radius12">
                        <div class="text-center">
                            <h4 class="primary-color title-font fw-700 fs-3 mb-2">No Obligation</h4>
                            <p class="text-font fw-500 mb-0 fs-6">Consultation & Guidance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection