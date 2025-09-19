

<!-- Header area start here -->
<header class="header-area">
    <div class="header__container">
        <div class="header__main">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo">
            </a>
            <div class="main-menu">
                <nav>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('courses') }}">Courses</a>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="d-flex align-items-center gap-4 gap-xl-5">
                <!-- <div class="menu-search">
                    <input type="text" placeholder="Search here..">
                    <button><i class="fa-regular fa-magnifying-glass"></i></button>
                </div> -->
                <div class="menu-btns d-none d-lg-flex">
                    <a class="active" href="#0">Get Started</a>
                    <!-- <a href="#0">Sign Up</a> -->
                </div>
            </div>
            <button class="menubars d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#menubar">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
<!-- Header area end here -->

<!-- Sidebar area start here -->
<div class="sidebar-area offcanvas offcanvas-end" id="menubar">
    <div class="offcanvas-header">
        <a href="index.html" class="logo">
            <img src="{{ asset('assets/images/logo/logo-light.svg') }}" alt="logo">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"><i
                class="fa-regular fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body sidebar__body">
        <div class="mobile-menu overflow-hidden"></div>
        <div class="d-none d-lg-block">
            <h5 class="text-white mb-20">About Us</h5>
            <p class="paragraph-light fs-16">
                Unleash the full potential of your website and elevate its online presence with our comprehensive
                online courses.
            </p>
        </div>
        <div class="sidebar__search d-block d-lg-none">
            <input type="text" placeholder="Search here..">
            <button><i class="fa-regular fa-magnifying-glass"></i></button>
        </div>
        <div class="sidebar__contact-info mt-30">
            <h5 class="text-white mb-20">Contact Info</h5>
            <ul>
                <li><i class="fa-solid fa-location-dot"></i> <a href="#0">example@example.com</a>
                </li>
                <li class="py-2"><i class="fa-solid fa-phone-volume"></i> <a href="tel:+912659302003">+91
                        2659
                        302 003</a>
                </li>
                <li><i class="fa-solid fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a>
                </li>
            </ul>
        </div>
        <div class="sidebar__btns my-4">
            <a href="sign-up.html">Sign Up</a>
            <a class="sign-in" href="sign-in.html">Sign In</a>
        </div>
        <div class="sidebar__socials">
            <ul>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidebar area end here -->