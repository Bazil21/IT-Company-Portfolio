@extends('frontend.layouts.main-content')

@section('main-container')
    

        <!-- Page Title Area -->
        <div class="relative z-1 text-center pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
            <div class="container">
                <h1 class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8">The <span class="text-primary-color">Services</span> We Provide</h1>
                <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis ac. Id massa scelerisque venenatis, massa gravida donec orci.</p>
            </div>
            <div class="left-0 -bottom-90 absolute -z-1 hidden xl:inline"><img src="{{ url('frontend/assets/img/shape/shape34.png')}}" class="animate-custom-movebounce" alt="shape"></div>
            <div class="right-0 bottom-100 absolute -z-1 hidden xl:inline"><img src="{{ url('frontend/assets/img/shape/shape35.png')}}" class="animate-custom-movebounce" alt="shape"></div>
        </div>
        <!-- End Page Title Area -->

        <!-- Solutions Area -->
        <div class="pb-60 md:pb-80 lg:pb-100 relative z-1">
            <div class="container">
                <div class="grid gap-25 md:gap-30 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-white shadow-custom-box-shadow3 rounded-sm md:rounded-lg wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <img src="{{ url('frontend/assets/img/support.gif')}}" class="rounded-t-sm md:rounded-t-lg" alt="support">
                        <div class="p-20 md:p-25 xl:p-30">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">
                                <a href="services-details.html" class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Support
                                </a>
                            </h3>
                            <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis consectetur adipiscing elit.</p>
                            <a href="services-details.html" class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide">
                                Learn More <img src="{{ url('frontend/assets/img/icon/secondary-arrow-right.svg')}}" class="absolute right-0 top-1 md:top-3" alt="arrow-right">
                            </a>
                        </div>
                    </div>
                    <div class="bg-white shadow-custom-box-shadow3 rounded-sm md:rounded-lg wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <img src="{{ url('frontend/assets/img/engagement.gif')}}" class="rounded-t-sm md:rounded-t-lg" alt="engagement">
                        <div class="p-20 md:p-25 xl:p-30">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">
                                <a href="services-details.html" class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Engagement
                                </a>
                            </h3>
                            <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis consectetur adipiscing elit.</p>
                            <a href="services-details.html" class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide">
                                Learn More <img src="{{ url('frontend/assets/img/icon/secondary-arrow-right.svg')}}" class="absolute right-0 top-1 md:top-3" alt="arrow-right">
                            </a>
                        </div>
                    </div>
                    <div class="bg-white shadow-custom-box-shadow3 rounded-sm md:rounded-lg wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <img src="{{ url('frontend/assets/img/marketing.gif')}}" class="rounded-t-sm md:rounded-t-lg" alt="marketing">
                        <div class="p-20 md:p-25 xl:p-30">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">
                                <a href="services-details.html" class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Marketing
                                </a>
                            </h3>
                            <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis consectetur adipiscing elit.</p>
                            <a href="services-details.html" class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide">
                                Learn More <img src="{{ url('frontend/assets/img/icon/secondary-arrow-right.svg')}}" class="absolute right-0 top-1 md:top-3" alt="arrow-right">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-[29%] left-[5%] absolute -z-1 hidden lg:inline"><img src="{{ url('frontend/assets/img/shape/shape27.svg')}}" class="animate-custom-rotateme" alt="shape"></div>
            <div class="bottom-[22%] right-[4%] absolute -z-1 hidden lg:inline"><img src="{{ url('frontend/assets/img/shape/shape28.svg')}}" class="animate-custom-rotateme" alt="shape"></div>
        </div>
        <!-- End Solutions Area -->

        <!-- Features Area -->
        <div class="features-area pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100 bg-[#fbfbfb]">
            <div class="container">
                <div class="section-title mb-35 md:mb-40 lg:mb-50 text-center">
                    <h2 class="font-black text-22px md:text-30px lg:text-35px xl:text-40px mb-6 text-black-color">What We Do Specially</h2>
                    <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis ac. Id massa scelerisque venenatis, massa gravida donec orci.</p>
                </div>
                <div class="grid gap-25 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
                    <div class="single-features-box border p-[20px] sm:border-0 sm:p-0 text-center sm:text-left wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="icon w-60 h-60 md:w-75 md:h-75 lg:w-90 lg:h-90 rounded-full bg-secondary-gradient-color text-center relative mb-20 md:mb-25 ml-auto mr-auto sm:ml-0 sm:mr-0">
                            <img src="{{ url('frontend/assets/img/icon/shield-tick.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="shield-tick">
                        </div>
                        <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">
                            <a href="services-details.html" class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                Top Flexibility
                            </a>
                        </h3>
                        <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis.</p>
                        <a href="services-details.html" class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide">
                            Learn More <img src="{{ url('frontend/assets/img/icon/secondary-arrow-right.svg')}}" class="absolute right-0 top-1 md:top-3" alt="arrow-right">
                        </a>
                    </div>
                    <div class="single-features-box border p-[20px] sm:border-0 sm:p-0 text-center sm:text-left wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="icon w-60 h-60 md:w-75 md:h-75 lg:w-90 lg:h-90 rounded-full bg-primary-gradient-color text-center relative mb-20 md:mb-25 ml-auto mr-auto sm:ml-0 sm:mr-0">
                            <img src="{{ url('frontend/assets/img/icon/timer.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="timer">
                        </div>
                        <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">
                            <a href="services-details.html" class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                Time Saving
                            </a>
                        </h3>
                        <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis.</p>
                        <a href="services-details.html" class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide">
                            Learn More <img src="{{ url('frontend/assets/img/icon/secondary-arrow-right.svg')}}" class="absolute right-0 top-1 md:top-3" alt="arrow-right">
                        </a>
                    </div>
                    <div class="single-features-box border p-[20px] sm:border-0 sm:p-0 text-center sm:text-left wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <div class="icon w-60 h-60 md:w-75 md:h-75 lg:w-90 lg:h-90 rounded-full bg-green-gradient-color text-center relative mb-20 md:mb-25 ml-auto mr-auto sm:ml-0 sm:mr-0">
                            <img src="{{ url('frontend/assets/img/icon/like.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="like">
                        </div>
                        <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">
                            <a href="services-details.html" class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                Best Management
                            </a>
                        </h3>
                        <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis.</p>
                        <a href="services-details.html" class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide">
                            Learn More <img src="{{ url('frontend/assets/img/icon/secondary-arrow-right.svg')}}" class="absolute right-0 top-1 md:top-3" alt="arrow-right">
                        </a>
                    </div>
                    <div class="single-features-box border p-[20px] sm:border-0 sm:p-0 text-center sm:text-left wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                        <div class="icon w-60 h-60 md:w-75 md:h-75 lg:w-90 lg:h-90 rounded-full bg-yello-gradient-color text-center relative mb-20 md:mb-25 ml-auto mr-auto sm:ml-0 sm:mr-0">
                            <img src="{{ url('frontend/assets/img/icon/shapes.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="shapes">
                        </div>
                        <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">
                            <a href="services-details.html" class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                Collaborative
                            </a>
                        </h3>
                        <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis.</p>
                        <a href="services-details.html" class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide">
                            Learn More <img src="{{ url('frontend/assets/img/icon/secondary-arrow-right.svg')}}" class="absolute right-0 top-1 md:top-3" alt="arrow-right">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Area -->

        <!-- Customer Service Area -->
        <div class="customer-service-area pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100 relative z-1">
            <div class="container">
                <div class="section-title mb-35 md:mb-40 lg:mb-50 text-center">
                    <h2 class="font-black text-22px md:text-30px lg:text-35px xl:text-40px mb-6 text-black-color">Why You Need Customer Service?</h2>
                    <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis ac. Id massa scelerisque venenatis, massa gravida donec orci.</p>
                </div>
                <div class="customer-service-tabs rounded-sm md:rounded-lg p-20 sm:p-30 md:p-35 lg:p-30 xl:p-50 bg-yello-light-300">
                    <ul class="tabs gap-25 md:flex mb-25 md:mb-35 lg:mb-30 xl:mb-50">
                        <li class="tab-link current md:flex-1 mb-12 last:mb-0 md:mb-0" data-tab="tab-1">
                            <span class="block bg-white text-black-color font-semibold text-14px md:text-15px lg:text-16px xl:text-18px rounded-sm pt-17 pb-15 pl-20
                            pr-20 text-center relative before:bg-primary-gradient-color before:absolute before:left-0 before:w-0 before:bottom-0 before:h-3 before:rounded-sm hover:before:w-full before:ease-in before:duration-300 cursor-pointer">Flexible Customer Support</span>
                        </li>
                        <li class="tab-link md:flex-1 mb-12 last:mb-0 md:mb-0" data-tab="tab-2">
                            <span class="block bg-white text-black-color font-semibold text-14px md:text-15px lg:text-16px xl:text-18px rounded-sm pt-17 pb-15 pl-20
                            pr-20 text-center relative before:bg-primary-gradient-color before:absolute before:left-0 before:w-0 before:bottom-0 before:h-3 before:rounded-sm hover:before:w-full before:ease-in before:duration-300 cursor-pointer">Conduct Seamless Flow</span>
                        </li>
                        <li class="tab-link md:flex-1 mb-12 last:mb-0 md:mb-0" data-tab="tab-3">
                            <span class="block bg-white text-black-color font-semibold text-14px md:text-15px lg:text-16px xl:text-18px rounded-sm pt-17 pb-15 pl-20 pr-20 text-center relative before:bg-primary-gradient-color before:absolute before:left-0 before:w-0 before:bottom-0 before:h-3 before:rounded-sm hover:before:w-full before:ease-in before:duration-300 cursor-pointer">24/7 Product Delivery</span>
                        </li>
                    </ul>
                    <div id="tab-1" class="tab-content current xl:pl-30 xl:pr-30">
                        <div class="grid gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                            <div class="overview-image">
                                <img src="{{ url('frontend/assets/img/overview/overview-img1.gif')}}" class="rounded-md" alt="overview-image">
                            </div>
                            <div class="overview-content self-center xl:pl-70 lg:pl-15">
                                <h2 class="font-black text-22px md:text-28px lg:text-30px xl:text-35px mb-12 lg:mb-15 text-black-color">Manage Everything in One Workspace</h2>
                                <p class="text-13px md:text-15px lg:text-16px leading-7 md:leading-8 text-optional-color">Togy Planning, tracking and delivering your team’s best work has never been easier. We make it easiest for you through the Togy.</p>
                                <a href="services-details.html" class="inline-block font-semibold text-13px md:text-14px lg:text-15px mt-15 md:mt-20 rounded-sm text-white pt-17 pb-13 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-content xl:pl-30 xl:pr-30">
                        <div class="grid gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                            <div class="overview-image">
                                <img src="{{ url('frontend/assets/img/overview/overview-img4.jpg')}}" class="rounded-md" alt="overview-image">
                            </div>
                            <div class="overview-content self-center xl:pl-70 lg:pl-15">
                                <h2 class="font-black text-22px md:text-28px lg:text-30px xl:text-35px mb-12 lg:mb-15 text-black-color">Mobile Application Development</h2>
                                <p class="text-13px md:text-15px lg:text-16px leading-7 md:leading-8 text-optional-color">Togy Planning, tracking and delivering your team’s best work has never been easier. We make it easiest for you through the Togy.</p>
                                <a href="services-details.html" class="inline-block font-semibold text-13px md:text-14px lg:text-15px mt-15 md:mt-20 rounded-sm text-white pt-17 pb-13 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-content xl:pl-30 xl:pr-30">
                        <div class="grid gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                            <div class="overview-image">
                                <img src="{{ url('frontend/assets/img/overview/overview-img2.gif')}}" class="rounded-md" alt="overview-image">
                            </div>
                            <div class="overview-content self-center xl:pl-70 lg:pl-15">
                                <h2 class="font-black text-22px md:text-28px lg:text-30px xl:text-35px mb-12 lg:mb-15 text-black-color">Stay Organized And Connected</h2>
                                <p class="text-13px md:text-15px lg:text-16px leading-7 md:leading-8 text-optional-color">Togy Planning, tracking and delivering your team’s best work has never been easier. We make it easiest for you through the Togy.</p>
                                <a href="services-details.html" class="inline-block font-semibold text-13px md:text-14px lg:text-15px mt-15 md:mt-20 rounded-sm text-white pt-17 pb-13 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Customer Service Area -->

        <!-- Features Area -->
        <div class="relative z-1 pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100 bg-[#fcfcfc] bg-cover bg-no-repeat bg-center" style="background-image: url({{ url('frontend/assets/img/shape/bg6.jpg);">
            <div class="container">
                <div class="grid gap-25 xl:gap-35 grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                    <div class="content xl:pr-100 self-center">
                        <h2 class="font-black text-22px md:text-28px lg:text-35px xl:text-40px mb-12 text-black-color">Our Awesome Features To Serve You</h2>
                        <p class="text-13px md:text-15px lg:text-16px leading-7 md:leading-8 text-optional-color">Planning, tracking and delivering your team’s best work has never been easier. We make it easiest for you through the software.</p>
                        <ul class="mt-20 md:mt-25">
                            <li class="text-black-color mb-15 md:mb-20 last:mb-0">
                                <span class="relative text-13px md:text-15px lg:text-20px font-bold bg-white pt-20 pb-18 pl-50 md:pl-60 pr-20 block shadow-custom-box-shadow2 rounded-md">
                                    <img src="{{ url('frontend/assets/img/icon/instagram.svg')}}" class="absolute left-15 md:left-20 top-1/2 -translate-y-2/4 md:-mt-2" alt="instagram">
                                    Automate Instagram
                                </span>
                            </li>
                            <li class="text-black-color mb-15 md:mb-20 last:mb-0">
                                <span class="relative text-13px md:text-15px lg:text-20px font-bold bg-white pt-20 pb-18 pl-50 md:pl-60 pr-20 block shadow-custom-box-shadow2 rounded-md">
                                    <img src="{{ url('frontend/assets/img/icon/status-up.svg')}}" class="absolute left-15 md:left-20 top-1/2 -translate-y-2/4 md:-mt-2" alt="status-up">
                                    Drive Sale
                                </span>
                            </li>
                            <li class="text-black-color mb-15 md:mb-20 last:mb-0">
                                <span class="relative text-13px md:text-15px lg:text-20px font-bold bg-white pt-20 pb-18 pl-50 md:pl-60 pr-20 block shadow-custom-box-shadow2 rounded-md">
                                    <img src="{{ url('frontend/assets/img/icon/attach-square.svg')}}" class="absolute left-15 md:left-20 top-1/2 -translate-y-2/4 md:-mt-2" alt="attach-square">
                                    Get More Leads
                                </span>
                            </li>
                            <li class="text-black-color mb-15 md:mb-20 last:mb-0">
                                <span class="relative text-13px md:text-15px lg:text-20px font-bold bg-white pt-20 pb-18 pl-50 md:pl-60 pr-20 block shadow-custom-box-shadow2 rounded-md">
                                    <img src="{{ url('frontend/assets/img/icon/refresh.svg')}}" class="absolute left-15 md:left-20 top-1/2 -translate-y-2/4 md:-mt-2" alt="refresh">
                                    Engage Prospects
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="image relative self-center xl:-ml-65 md:pb-[150px] wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <img src="{{ url('frontend/assets/img/overview/overview-img5.gif')}}" class="rounded-md shadow-custom-box-shadow2" alt="about-image">
                        <img src="{{ url('frontend/assets/img/overview/overview-img6.png')}}" class="m-auto shadow-custom-box-shadow2 mt-25 md:mt-0 md:absolute right-0 bottom-0" alt="about-image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Area -->

        <!-- Integrate Apps Area -->
        <div class="integrate-apps-area pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
            <div class="container">
                <div class="grid gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                    <div class="integrate-apps-list lg:-mr-75 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <ul class="relative">
                            <li class="inline-block md:block w-[110px] h-[110px] bg-white top-1/2 border-2 border-transparent ease-in duration-300 hover:border-primary-color md:mt-[70px] md:-translate-y-2/4 relative md:absolute text-center shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/messenger.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="messenger">
                            </li>
                            <li class="inline-block md:block w-[110px] h-[110px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color relative md:absolute text-center md:top-[120px] lg:left-[10px] xl:left-[80px] md:left-[80px] shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/gitlab.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="gitlab">
                            </li>
                            <li class="inline-block md:block w-[120px] h-[120px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color md:top-1/2 md:left-[230px] lg:left-[170px] xl:left-[230px] md:mt-[15px] md:-translate-y-2/4 relative md:absolute text-center shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/instagram.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                            </li>
                            <li class="inline-block md:block w-[90px] h-[90px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color md:left-[290px] relative md:absolute md:right-0 md:bottom-[80px] text-center md:m-auto shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/twitter.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                            </li>
                            <li class="inline-block md:block w-[90px] h-[90px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color md:right-0 md:bottom-[225px] relative md:absolute text-center shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/slack.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="slack">
                            </li>
                            <li class="inline-block md:block w-[90px] h-[90px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color relative md:absolute md:right-[100px] md:top-[50px] text-center shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/pinterest.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="pinterest">
                            </li>
                            <li class="inline-block md:block w-[145px] h-[145px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color lg:-left-55 xl:left-0 md:left-0 md:right-0 md:top-0 md:m-auto relative text-center shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/dropbox.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="dropbox">
                            </li>
                            <li class="inline-block md:block w-[110px] h-[110px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color md:right-0 md:top-1/2 md:-translate-y-2/4 md:left-[260px] md:-mt-[35px] lg:-mt-[70px] xl:-mt-[35px] md:m-auto relative md:absolute text-center shadow-custom-box-shadow2 rounded-full">
                                <img src="{{ url('frontend/assets/img/integrate-apps/microsoft.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="microsoft">
                            </li>
                            <li class="inline-block md:block w-[155px] h-[155px] bg-white border-2 border-transparent ease-in duration-300 hover:border-primary-color relative md:left-[190px] text-center shadow-custom-box-shadow2 rounded-full md:mt-320">
                                <img src="{{ url('frontend/assets/img/integrate-apps/netflix.svg')}}" class="absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="netflix">
                            </li>
                        </ul>
                    </div>
                    <div class="integrate-apps-content self-center lg:pl-75 xl:pl-100 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h2 class="font-black text-22px md:text-30px lg:text-35px xl:text-40px mb-12 lg:mb-15 text-black-color">Integrate With Your Favorite Apps</h2>
                        <p class="text-13px md:text-15px lg:text-16px lg:max-w-[435px] leading-7 md:leading-8 text-optional-color">Togy Projects gives you the added advantage of several other Togy apps and third party apps through seamless integrations.</p>
                        <a href="pricing.html" class="inline-block font-semibold text-13px lg:text-15px mt-20 lg:mt-25 rounded-sm text-white pt-17 pb-15 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">More Integration</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Integrate Apps Area -->

        <!-- Free Trial Area -->
        <div class="free-trial-area bg-gray-50 pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100 relative z-1">
            <div class="container">
                <div class="free-trial-content text-center">
                    <h2 class="font-black text-22px md:text-30px lg:text-35px xl:text-40px mb-8 lg:max-w-[800px] lg:mx-auto text-black-color">See Everything The Team’s Working On In One Place</h2>
                    <p class="text-13px md:text-15px lg:text-16px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis ac. Id massa scelerisque venenatis, massa gravida donec orci.</p>
                    <form class="mt-20 md:mt-30 md:max-w-2xl mx-auto relative">
                        <input type="text" placeholder="Enter Your Email Address" class="input-newsletter text-center font-medium text-13px md:text-15px h-55 md:h-65 block w-full pl-15 md:pl-25 pr-15 md:pr-25 bg-white shadow-custom-box-shadow4 pt-3 rounded-sm outline-0 placeholder:text-[#9B9B9B] placeholder:transition placeholder:duration-300 placeholder:ease-in-out focus:placeholder:text-transparent">
                        <button type="submit" class="block w-full font-medium text-13px md:text-15px rounded-sm text-white h-50 md:h-60 pl-25 md:pl-35 pr-25 md:pr-35 leading-[53px] md:leading-63 bg-gradient-color mt-20 ">Start <span class="font-bold">15 Days</span> Free Trial</button>
                    </form>
                </div>
            </div>
            <div class="left-[4%] top-[30%] 2xl:left-[10%] absolute z-1 hidden xl:inline"><img src="{{ url('frontend/assets/img/shape/shape9.png" class="animate-custom-moveleftbounce" alt="shape"></div>
            <div class="right-[1%] top-[20%] 2xl:right-[10%] absolute -z-1 hidden xl:inline"><img src="{{ url('frontend/assets/img/shape/shape10.png" class="animate-custom-movebounce" alt="shape"></div>
        </div>
        <!-- End Free Trial Area -->

        <!-- Support Area -->
        <div class="support-area relative bg-secondary-gradient-color z-2 pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
            <div class="container">
                <div class="grid gap-18 md:gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                    <div class="support-content xl:col-span-2">
                        <h2 class="font-black text-22px md:text-30px lg:text-34px xl:text-40px mb-12 text-white">24/7 Customer Support</h2>
                        <p class="text-13px md:text-15px lg:text-16px md:max-w-[700px] leading-7 md:leading-8 text-white">Our team is here to provide you with personalized and outstanding service. We also offer a range of self-learning tools in our support center:</p>
                    </div>
                    <div class="support-btn self-center lg:text-right">
                        <a href="contact.html" class="inline-block font-semibold text-13px md:text-15px rounded-sm text-white pt-17 pb-13 pl-25 md:pl-35 pr-25 md:pr-35 bg-gradient-color hover:bg-white hover:bg-none hover:text-black-color ease-in duration-300">Contact Us Now</a>
                    </div>
                </div>
            </div>
            <div class="top-[-35%] left-[2%] 2xl:top-[-12%] absolute -z-1 hidden xl:inline"><img src="{{ url('frontend/assets/img/shape/shape12.png" class="animate-custom-movebounce" alt="shape"></div>
            <div class="right-[10%] bottom-[-30.4%] absolute -z-1 hidden xl:inline"><img src="{{ url('frontend/assets/img/shape/shape13.png" class="animate-custom-moveleftbounce" alt="shape"></div>
            <div class="top-[20%] left-[52%] absolute -z-1 hidden lg:inline"><img src="{{ url('frontend/assets/img/shape/shape14.png" class="animate-custom-rotateme" alt="shape"></div>
        </div>
        <!-- End Support Area -->
@endsection
       