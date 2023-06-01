@extends('frontend.layouts.main-content')

@section('main-container')

        <!-- Page Title Area -->
        <div class="relative z-1 text-center pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
            <div class="container">
                <h1 class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8">Team <span class="text-primary-color">Members</span></h1>
                <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet nulla duis ac. Id massa scelerisque venenatis, massa gravida donec orci.</p>
            </div>
            <div class="left-0 bottom-40 absolute -z-1 hidden xl:inline"><img src="assets/img/shape/shape34.png" class="animate-custom-movebounce" alt="shape"></div>
            <div class="right-0 -bottom-20 absolute -z-1 hidden xl:inline"><img src="assets/img/shape/shape35.png" class="animate-custom-movebounce" alt="shape"></div>
        </div>
        <!-- End Page Title Area -->

        <!-- Team Area -->
        <div class="pb-60 md:pb-80 lg:pb-100">
            <div class="container">
                <div class="grid gap-25 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team1.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-5 lg:mb-12">Adam Smith</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">CEO & Founder</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team2.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">Victor James</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">CTO</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team3.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">Bratly Wines</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">Web Designer</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team4.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">John Watson</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">Web Developer</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team5.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">Teddy Will</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">Marketing Coordinator</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team6.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">Guy Hawkins</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">Web Designer</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team7.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">Esther Howard</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">Web Developer</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team8.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">Jane Cooper</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">Support Expert</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-team-member rounded-md md:rounded-lg bg-white shadow-custom-box-shadow2">
                        <img src="assets/img/team/team9.jpg" class="rounded-tl-lg rounded-tr-lg md:rounded-tl-lg md:rounded-tr-lg" alt="team">
                        <div class="p-20 md:p-30 relative">
                            <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-10 lg:mb-12">Robert Fox</h3>
                            <span class="text-13px md:text-14px text-primary-color font-medium">Manager</span>
                            <div class="socials absolute right-20 md:right-30 top-1/2 -translate-y-2/4">
                                <div class="btn ease-in duration-300 w-40 md:w-50 h-40 md:h-50 bg-white shadow-custom-box-shadow3 text-center relative rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-22 w-22 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <ul class="absolute right-0 bottom-45 md:bottom-55 ease-in duration-300">
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#4267B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#1DA1F2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-[#2867B2] text-center hover:opacity-90">
                                            <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="inline-block mt-5 last:mt-0">
                                        <a href="#" target="_blank" class="block w-40 md:w-50 rounded-full transition relative h-40 md:h-50 bg-instagram-gradient-color text-center hover:opacity-90">
                                            <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Area -->

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
            <div class="top-[-35%] left-[2%] 2xl:top-[-12%] absolute -z-1 hidden xl:inline"><img src="assets/img/shape/shape12.png" class="animate-custom-movebounce" alt="shape"></div>
            <div class="right-[10%] bottom-[-30.4%] absolute -z-1 hidden xl:inline"><img src="assets/img/shape/shape13.png" class="animate-custom-moveleftbounce" alt="shape"></div>
            <div class="top-[20%] left-[52%] absolute -z-1 hidden lg:inline"><img src="assets/img/shape/shape14.png" class="animate-custom-rotateme" alt="shape"></div>
        </div>
        <!-- End Support Area -->
@endsection
       