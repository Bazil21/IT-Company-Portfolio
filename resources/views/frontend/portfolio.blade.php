@include('frontend.layouts.main-content')

@section('main-container')
    <!-- Page Title Area -->
    <div class="relative z-1 text-center pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
        <div class="container">
            <h1 class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8">Our
                <span class="text-primary-color">Portfolio</span></h1>
            <p
                class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis ac. Id massa scelerisque
                venenatis, massa gravida donec orci.</p>
        </div>
        <div class="left-0 top-25 absolute -z-1 hidden xl:inline"><img src="assets/img/shape/shape34.png"
                class="animate-custom-movebounce w-[100px]" alt="shape"></div>
        <div class="right-0 bottom-20 absolute -z-1 hidden xl:inline"><img src="assets/img/shape/shape35.png"
                class="animate-custom-movebounce" alt="shape"></div>
    </div>
    <!-- End Page Title Area -->

    <!-- Portfolio Area -->
    <div class="pb-60 md:pb-80 lg:pb-100">
        <div class="container">
            <div class="customer-service-tabs style-two">
                <ul class="tabs text-center mb-25 md:mb-35 lg:mb-30 xl:mb-50">
                    <li class="tab-link current mb-12 last:mb-0 lg:mb-0 ml-5 mr-5 inline-block" data-tab="tab-1">
                        <span
                            class="text-black-color text-15px lg:text-16px rounded-sm font-semibold bg-[#F5F0E8] relative pl-20 md:pl-25 pr-20 md:pr-25 pt-12 pb-12 hover:text-white cursor-pointer block z-1 ease-in duration-300 before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0 before:opacity-0 before:invisible before:ease-in before:duration-300 before:-z-1 before:rounded-sm before:bg-secondary-gradient-color hover:before:opacity-100 hover:before:visible">
                            All
                        </span>
                    </li>
                    <li class="tab-link mb-12 last:mb-0 lg:mb-0 inline-block ml-5 mr-5" data-tab="tab-2">
                        <span
                            class="text-black-color text-15px lg:text-16px rounded-sm font-semibold bg-[#F5F0E8] relative pl-20 md:pl-25 pr-20 md:pr-25 pt-12 pb-12 hover:text-white cursor-pointer block z-1 ease-in duration-300 before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0 before:opacity-0 before:invisible before:ease-in before:duration-300 before:-z-1 before:rounded-sm before:bg-secondary-gradient-color hover:before:opacity-100 hover:before:visible">
                            Design
                        </span>
                    </li>
                    <li class="tab-link mb-12 last:mb-0 lg:mb-0 inline-block ml-5 mr-5" data-tab="tab-3">
                        <span
                            class="text-black-color text-15px lg:text-16px rounded-sm font-semibold bg-[#F5F0E8] relative pl-20 md:pl-25 pr-20 md:pr-25 pt-12 pb-12 hover:text-white cursor-pointer block z-1 ease-in duration-300 before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0 before:opacity-0 before:invisible before:ease-in before:duration-300 before:-z-1 before:rounded-sm before:bg-secondary-gradient-color hover:before:opacity-100 hover:before:visible">
                            Development
                        </span>
                    </li>
                    <li class="tab-link mb-12 last:mb-0 lg:mb-0 inline-block ml-5 mr-5" data-tab="tab-4">
                        <span
                            class="text-black-color text-15px lg:text-16px rounded-sm font-semibold bg-[#F5F0E8] relative pl-20 md:pl-25 pr-20 md:pr-25 pt-12 pb-12 hover:text-white cursor-pointer block z-1 ease-in duration-300 before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0 before:opacity-0 before:invisible before:ease-in before:duration-300 before:-z-1 before:rounded-sm before:bg-secondary-gradient-color hover:before:opacity-100 hover:before:visible">
                            Mobile App
                        </span>
                    </li>
                    <li class="tab-link mb-12 last:mb-0 lg:mb-0 inline-block ml-5 mr-5" data-tab="tab-5">
                        <span
                            class="text-black-color text-15px lg:text-16px rounded-sm font-semibold bg-[#F5F0E8] relative pl-20 md:pl-25 pr-20 md:pr-25 pt-12 pb-12 hover:text-white cursor-pointer block z-1 ease-in duration-300 before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0 before:opacity-0 before:invisible before:ease-in before:duration-300 before:-z-1 before:rounded-sm before:bg-secondary-gradient-color hover:before:opacity-100 hover:before:visible">
                            Wordpress Theme
                        </span>
                    </li>
                    <li class="tab-link mb-12 last:mb-0 lg:mb-0 inline-block ml-5 mr-5" data-tab="tab-6">
                        <span
                            class="text-black-color text-15px lg:text-16px rounded-sm font-semibold bg-[#F5F0E8] relative pl-20 md:pl-25 pr-20 md:pr-25 pt-12 pb-12 hover:text-white cursor-pointer block z-1 ease-in duration-300 before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0 before:opacity-0 before:invisible before:ease-in before:duration-300 before:-z-1 before:rounded-sm before:bg-secondary-gradient-color hover:before:opacity-100 hover:before:visible">
                            Plugin
                        </span>
                    </li>
                </ul>
                <div id="tab-1" class="tab-content current">
                    <div class="grid gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio1.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Task Management Software
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio2.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Dashboard Software Landing
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">App, Development</p>
                        </div>
                    </div>
                    <div class="grid mt-30 gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio3.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Dashboard Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio4.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Project Management Software
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio5.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Mobile App Development
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio6.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Task Management App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio7.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Product Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio8.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Work Flow App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-content">
                    <div class="grid mt-30 gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio3.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Dashboard Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio4.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Project Management Software
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio5.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Mobile App Development
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio6.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Task Management App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio7.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Product Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio8.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Work Flow App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-content">
                    <div class="grid mt-30 gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio4.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Project Management Software
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio5.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Mobile App Development
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio6.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Task Management App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio7.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Product Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio8.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Work Flow App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-content">
                    <div class="grid mt-30 gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio5.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Mobile App Development
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio6.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Task Management App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio7.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Product Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-content">
                    <div class="grid gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio2.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Dashboard Software Landing
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">App, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio1.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Task Management Software
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                    </div>
                    <div class="grid mt-30 gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio3.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Dashboard Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio4.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Project Management Software
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio5.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Mobile App Development
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                    </div>
                </div>
                <div id="tab-6" class="tab-content">
                    <div class="grid mt-30 gap-30 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio6.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Task Management App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio7.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Product Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio8.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Work Flow App
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio3.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Dashboard Design
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Development</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio4.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Project Management Software
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, Software</p>
                        </div>
                        <div class="relative">
                            <a href="portfolio-details.html" class="block">
                                <img src="assets/img/portfolio/portfolio5.jpg"
                                    class="mb-25 rounded-sm md:rounded-md lg:rounded-lg" alt="portfolio-image">
                            </a>
                            <h3 class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12">
                                <a href="portfolio-details.html"
                                    class="inline-block text-black-color hover:text-primary-color ease-in duration-300">
                                    Mobile App Development
                                </a>
                            </h3>
                            <p class="text-13px md:text-15px lg:text-16px text-optional-color">Design, App</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Area -->

    <!-- Support Area -->
    <div class="support-area relative bg-secondary-gradient-color z-2 pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
        <div class="container">
            <div class="grid gap-18 md:gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                <div class="support-content xl:col-span-2">
                    <h2 class="font-black text-22px md:text-30px lg:text-34px xl:text-40px mb-12 text-white">24/7 Customer
                        Support</h2>
                    <p class="text-13px md:text-15px lg:text-16px md:max-w-[700px] leading-7 md:leading-8 text-white">Our
                        team is here to provide you with personalized and outstanding service. We also offer a range of
                        self-learning tools in our support center:</p>
                </div>
                <div class="support-btn self-center lg:text-right">
                    <a href="contact.html"
                        class="inline-block font-semibold text-13px md:text-15px rounded-sm text-white pt-17 pb-13 pl-25 md:pl-35 pr-25 md:pr-35 bg-gradient-color hover:bg-white hover:bg-none hover:text-black-color ease-in duration-300">Contact
                        Us Now</a>
                </div>
            </div>
        </div>
        <div class="top-[-35%] left-[2%] 2xl:top-[-12%] absolute -z-1 hidden xl:inline"><img
                src="assets/img/shape/shape12.png" class="animate-custom-movebounce" alt="shape"></div>
        <div class="right-[10%] bottom-[-30.4%] absolute -z-1 hidden xl:inline"><img src="assets/img/shape/shape13.png"
                class="animate-custom-moveleftbounce" alt="shape"></div>
        <div class="top-[20%] left-[52%] absolute -z-1 hidden lg:inline"><img src="assets/img/shape/shape14.png"
                class="animate-custom-rotateme" alt="shape"></div>
    </div>
    <!-- End Support Area -->
@endsection
