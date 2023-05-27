<!doctype html>
<html>
    
<!-- Mirrored from templates.envytheme.com/togy/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 05:22:38 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- All CSS Links -->
        <link rel="stylesheet" href="{{ url('frontend/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ url('frontend/assets/dist/output.css')}}">

        <title>Togy - Tailwind Technology Startup Template</title>
        <link rel="icon" type="image/png" href="{{ url('frontend/assets/img/favicon.png')}}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    </head>
    <body>

        <!-- Preloader -->
        {{-- <div class="preloader-area text-center left-0 right-0 top-0 bottom-0 bg-white fixed z-9999">
            <div class="preloader absolute -mt-20 left-0 right-0 top-1/2 m-auto -translate-y-2/4">
                <div class="waviy font-bold text-50px">
                    <span class="text-black-color inline-block relative">T</span>
                    <span class="text-primary-color inline-block relative">O</span>
                    <span class="text-black-color inline-block relative">G</span>
                    <span class="text-secondary-color inline-block relative">Y</span>
                </div>
            </div>
        </div> --}}
        <!-- End Preloader -->

        <!-- Navbar Area -->
        <div class="navbar-area shadow-navbar relative z-2">
            <div class="togy-responsive-nav lg:hidden">
                <div class="container">
                    <div class="togy-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ url('frontend/assets/img/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="togy-nav hidden lg:block">
                <div class="container xl:max-w-full 3xl:max-w-[1700px]">
                    <nav class="navbar flex flex-wrap">
                        <a class="navbar-brand self-center" href="index.html">
                            <img src="{{ url('frontend/assets/img/logo.png')}}" alt="logo">
                        </a>
                        <div class="flex self-center grow basis-auto">
                            <ul class="self-center flex flex-row ml-auto mr-auto">
                                <li class="mr-12 xl:mr-15 relative group">
                                    <a href="#" class="block text-black-color active font-semibold text-16px ease-in duration-300 relative pr-15  pt-30 pb-30">Home</a>
                                </li>
                                
                                <li class="mr-12 xl:mr-15 relative group">
                                    <a href="#" class="block text-black-color  font-semibold text-16px ease-in duration-300 relative pr-15  pt-30 pb-30">Feature</a>
                                </li>
                                <li class="mr-12 xl:mr-15 relative group">
                                    <a href="#" class="block text-black-color  font-semibold text-16px ease-in duration-300 relative pr-15  pt-30 pb-30">Services</a>
                                </li>
                                <li class="mr-12 xl:mr-15 relative group">
                                    <a href="#" class="block text-black-color  font-semibold text-16px ease-in duration-300 relative pr-15  pt-30 pb-30">Our Team</a>
                                </li>
                                <li class="mr-12 xl:mr-15 relative group">
                                    <a href="#" class="block text-black-color  font-semibold text-16px ease-in duration-300 relative pr-15  pt-30 pb-30">About us</a>
                                </li>
                                
                                <li class="mr-12 xl:mr-15 relative group">
                                    <a href="#" class="block text-black-color  font-semibold text-16px ease-in duration-300 relative pr-15  pt-30 pb-30">Contact us</a>
                                </li>
                                
                               
                            </ul>
                            <div class="self-center">
                                <a href="contact.html" class="inline-block font-semibold text-13px md:text-14px lg:text-15px rounded-sm text-white pt-17 pb-13 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Get Started</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Navbar for Responsive -->
        <div class="navbar-for-responsive hidden">
            <div class="mean-menu">
                <ul class="navbar-nav">
                    <li>
                        <a href="#" class="active">Home</a>
                        <ul>
                            <li>
                                <a href="index.html" class="active">Project Management</a>
                            </li>
                            <li>
                                <a href="index-2.html">Product Landing</a>
                            </li>
                            <li>
                                <a href="index-3.html">Customer Support</a>
                            </li>
                            <li>
                                <a href="index-4.html">Doc Landing</a>
                            </li>
                            <li>
                                <a href="index-5.html">Chatbot Landing</a>
                            </li>
                            <li>
                                <a href="index-6.html">App Landing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="team.html">Team</a>
                            </li>
                            <li class="relative">
                                <a href="features.html">Features</a>
                                <ul>
                                    <li>
                                        <a href="features.html">Features</a>
                                    </li>
                                    <li>
                                        <a href="products-features.html">Products Features</a>
                                    </li>
                                    <li>
                                        <a href="top-flexibility.html">Top Flexibility</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="profile-authentication.html">Login/Register</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="not-found.html">404 Error Page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Services</a>
                        <ul>
                            <li>
                                <a href="services.html">Services</a>
                            </li>
                            <li>
                                <a href="services-details.html">Services Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                        <ul>
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-details.html">Portfolio Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul>
                            <li>
                                <a href="blog-grid.html">Blog Grid</a>
                            </li>
                            <li>
                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
                <div class="absolute right-45 top-3 md:top-1 md:right-50">
                    <a href="contact.html" class="inline-block font-semibold text-11px md:text-14px lg:text-15px rounded-sm text-white pt-13 pb-10 pl-15 pr-15 md:pl-25 md:pr-25 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Get Started</a>
                </div>
            </div>
        </div>
        <!-- End Navbar for Responsive -->