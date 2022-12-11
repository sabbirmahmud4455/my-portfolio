@extends('frontend.layouts.master')

@section('body_content')


    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="#home">
                        <img src="{{ asset('frontend/assets/images/logo/Sabbir-mahmhud_white.png') }}" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills onepagenav">
                    <li class="nav-item current"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#experience">EXPERIENCE</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#Dev-Stack">Dev-Stack</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/icon/icons8-facebook-48.png') }}" alt="">
                            </a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->

    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content justify-content-center">
                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
                                    <h1 class="title">Hi, I’m <span>Sabbir Mahmud</span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a full-stack web developer.</span>
                                        <!-- ROTATING TEXT -->

                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">I'm a full-stack web developer based in Dhaka, Bangladesh specializing in building (and occasionally designing) exceptional, high-quality websites and applications.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find with me</span>
                                            <ul class="social-share d-flex liststyle">
                                                <li class="">
                                                    <a href="https://github.com/sabbirmahmud4455" target="_blank">
                                                        <img src="{{ asset('frontend/assets/icon/icons8-github-36.png') }}" alt="">
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://www.linkedin.com/in/sabbir-mahmud/" target="_blank">
                                                        <img src="{{ asset('frontend/assets/icon/icons8-linkedin-36.png') }}" alt="">
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://www.facebook.com/sabbir.hossien.7" target="_blank">
                                                        <img src="{{ asset('frontend/assets/icon/icons8-facebook-36.png') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
                                                <li class="">
                                                    <a href="https://laravel.com" target="_blank">
                                                        <img src="{{ asset('frontend/assets/icon/icons8-laravel-36.png') }}" alt="">
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://www.php.net" target="_blank">
                                                        <img src="{{ asset('frontend/assets/icon/icons8-php-logo-36.png') }}" alt="">
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://www.javascript.com" target="_blank">
                                                        <img src="{{ asset('frontend/assets/icon/icons8-javascript-36.png') }}" alt="">
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://www.mysql.com" target="_blank">
                                                        <img src="{{ asset('frontend/assets/icon/icons8-my-sql-36.png') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="{{ asset('frontend/assets/images/slider/banner-01.png') }}" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt_md--10 mt_sm--10">

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><span>Requirements Analysis</span></h4>
                                    <p class="description">To develope correct on right ways analysis system requirements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><span>Software Development</span></h4>
                                    <p class="description">Write clean code for clean software and must be reusable and scalable</p>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><span>Web App Development</span></h4>
                                    <p class="description">Solving thousand of peaple problem with smooth service</p>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><span>Database Design</span></h4>
                                    <p class="description">Build and Design RDMS Database Mostly used SQL</p>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><span>System Design</span></h4>
                                    <p class="description"> Design system such a way that integrates new features easily.</p>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->


                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">

                    <!-- Start Single Portfolio -->
                    <div  class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" >
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="https://hrm.sabbirmahmud.net/" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/portfolio/hr-payroll.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="https://hrm.sabbirmahmud.net/" target="_blank">Software</a>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="https://hrm.sabbirmahmud.net/" target="_blank">HR Management System <i
                                        class="feather-arrow-up-right"></i></a>
                                    </h4>
                                    <hr class=" m-0">
                                    <div class="asdf">
                                        <p style="font-size: 16px; margin:3px;">Demo credential</p>
                                        <p style="font-size: 16px; margin:3px;">Email : system.admin@mailinator.com</p>
                                        <p style="font-size: 16px; margin:3px;">Password : 12345678</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div  class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" >
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="https://inventory.sabbirmahmud.net/" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/portfolio/inventory.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="https://inventory.sabbirmahmud.net/" target="_blank">Software</a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="https://inventory.sabbirmahmud.net/" target="_blank">
                                            Inventory Managment System <i class="feather-arrow-up-right"></i>
                                        </a>
                                    </h4>
                                    <hr class=" m-0">
                                    <div class="asdf">
                                        <p style="font-size: 16px; margin:3px;">Demo credential</p>
                                        <p style="font-size: 16px; margin:3px;">Email : system.admin@mailinator.com</p>
                                        <p style="font-size: 16px; margin:3px;">Password : 12345678</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div  class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" >
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="https://tf.sabbirmahmud.net/" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/portfolio/buying_house.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="https://tf.sabbirmahmud.net/" target="_blank">Software</a>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="https://tf.sabbirmahmud.net/" target="_blank">Textile & Fashion Management System <i
                                        class="feather-arrow-up-right"></i></a>
                                    </h4>
                                    <hr class=" m-0">
                                    <div class="asdf">
                                        <p style="font-size: 16px; margin:3px;">Demo credential</p>
                                        <p style="font-size: 16px; margin:3px;">Email : system.admin@mailinator.com</p>
                                        <p style="font-size: 16px; margin:3px;">Password : 12345678</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div  class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" >
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="https://pms.sabbirmahmud.net/" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/portfolio/pms.png') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="https://pms.sabbirmahmud.net/" target="_blank">Software</a>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="https://pms.sabbirmahmud.net/" target="_blank">Project Management System <i
                                        class="feather-arrow-up-right"></i></a>
                                    </h4>
                                    <hr class=" m-0">
                                    <div class="asdf">
                                        <p style="font-size: 16px; margin:3px;">Demo credential</p>
                                        <p style="font-size: 16px; margin:3px;">Email : system.admin@mailinator.com</p>
                                        <p style="font-size: 16px; margin:3px;">Password : 12345678</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div  class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" >
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="https://tms.sabbirmahmud.net/" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/portfolio/tms.png') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="https://tms.sabbirmahmud.net/" target="_blank">Software</a>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="https://tms.sabbirmahmud.net/" target="_blank">Tailors Management System
                                        System <i
                                        class="feather-arrow-up-right"></i></a>
                                    </h4>
                                    <hr class=" m-0">
                                    <div class="asdf">
                                        <p style="font-size: 16px; margin:3px;">Demo credential</p>
                                        <p style="font-size: 16px; margin:3px;">Email : system.admin@mailinator.com</p>
                                        <p style="font-size: 16px; margin:3px;">Password : 12345678</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div  class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" >
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="https://instantsalaries.com/" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/portfolio/instant.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="https://instantsalaries.com/" target="_blank">Software</a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="https://instantsalaries.com/" target="_blank">Instant Salaries <i class="feather-arrow-up-right"></i> </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                </div>
            </div>
        </div>
        <!-- End portfolio Area -->
        <!-- Start experience Area -->
        <div class="rn-experience-area rn-section-gap section-separator" id="experience">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Around 3 Years of Experience</span>
                            <h2 class="title">Where I've Worked</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="personal-experience-inner mt--40">
                        <div class="row">

                            <!-- Start Skill List Area 2nd  -->
                            <div class=" col-md-6 col-12 mt_md--60 mt_sm--60">
                                <div class="content">
                                    <div class="experience-list">
                                        <!-- Start Single List  -->
                                        <div class="experience-single-list pb-0">
                                            <div class="inner">
                                                <div class="heading border-0">
                                                    <div class="title">
                                                        <h4>RP AI Solutions</h4>
                                                        <p class=" text-danger my-1">Software Developer</p>
                                                        <span>November,2021 - Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single List  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Skill List Area  -->

                            <!-- Start Skill List Area 2nd  -->
                            <div class=" col-md-6 col-12 mt_md--60 mt_sm--60">
                                <div class="content">
                                    <div class="experience-list">
                                        <!-- Start Single List  -->
                                        <div class="experience-single-list pb-0">
                                            <div class="inner">
                                                <div class="heading border-0">
                                                    <div class="title">
                                                        <h4>Alesha Solutions Ltd</h4>
                                                        <p class=" text-danger my-1">Junior Software Developer</p>
                                                        <span>April,2021 - October,2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single List  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Skill List Area  -->

                            <!-- Start Skill List Area 2nd  -->
                            <div class=" col-md-6 col-12 mt_md--60 mt_sm--60">
                                <div class="content">
                                    <div class="experience-list">
                                        <!-- Start Single List  -->
                                        <div class="experience-single-list pb-0">
                                            <div class="inner">
                                                <div class="heading border-0">
                                                    <div class="title">
                                                        <h4>BD Zone</h4>
                                                        <p class=" text-danger my-1">Junior Developer</p>
                                                        <span>August,2020 - March,2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single List  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Skill List Area  -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End experience Area -->

        <!-- Start Client Area -->
        <div class="rn-client-area rn-section-gap section-separator" id="Dev-Stack">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">LOOK AT MY</span>
                            <h2 class="title">Dev Stack</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky Dev-Stack-wrapper sticky-top rbt-sticky-top-adjust">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="tab" href="#v-pills-framework-libaries" role="tab" aria-selected="true">Framework & Libaries</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="tab" href="#v-pills-programming" role="tab" aria-selected="true">Programming</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-databases-tab" data-bs-toggle="tab" href="#v-pills-databases" role="tab" aria-selected="true">Database</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-technologies-tools-tabs" data-bs-toggle="tab" href="#v-pills-technologies-tools" role="tab" aria-selected="true">Technologies & Tools</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade" id="v-pills-programming" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-javascript-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">javascript</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-php-logo-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">PHP</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="v-pills-framework-libaries" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/laravel_logo.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Laravel</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-react-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">React</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/expressjs-logo.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Express JS</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/logo-socket.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Socket.IO</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/react-native.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">React Native</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="https://lumen.laravel.com/">
                                                            <img src="{{ asset('frontend/assets/icon/lumen.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Lumen</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="https://lumen.laravel.com/">
                                                            <img src="{{ asset('frontend/assets/icon/jQuery.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">jQuery</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="https://lumen.laravel.com/">
                                                            <img src="{{ asset('frontend/assets/icon/bootstrap.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Bootstrap</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="https://lumen.laravel.com/">
                                                            <img src="{{ asset('frontend/assets/icon/TailwindCSS.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Tailwind CSS</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->


                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-databases" role="tabpanel" aria-labelledby="v-pills-databases-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/my_sql.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">MySQL</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/mongodb.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Mongo DB</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/PostgreSQL.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Postgre SQL</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-technologies-tools" role="tabpanel" aria-labelledby="v-pills-technologies-tools-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-html-5-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">HTML</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-css3-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">CSS</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/JSON-API.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">JSON</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-git-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Git</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-github-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Github</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/assets/icon/icons8-gitlab-180.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Gitlab</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->



                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End client section -->

        {{-- <!-- Start Testimonia Area  -->
        <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left">
                            <span class="subtitle">What Dev-Stack Say</span>
                            <h2 class="title">Testimonial</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-activation testimonial-pb mb--30">
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="{{ asset('frontend/assets/images/testimonial/final-home--1st.png') }}" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Rainbow-Themes</span>
                                            <h3 class="title">Nevine Acotanza</h3>
                                            <span class="designation">Chief Operating Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Android App Development</h3>
                                                <span class="date">via Upwork - Mar 4, 2015 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="{{ asset('frontend/assets/images/testimonial/final-home--2nd.png') }}" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Bound - Trolola</span>
                                            <h3 class="title">Jone Duone Joe</h3>
                                            <span class="designation">Operating Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Web App Development</h3>
                                                <span class="date">Upwork - Mar 4, 2016 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Important fact to nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="{{ asset('frontend/assets/images/testimonial/final-home--3rd.png') }}" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Glassfisom</span>
                                            <h3 class="title">Nevine Dhawan</h3>
                                            <span class="designation">CEO Of Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Android App Design</h3>
                                                <span class="date">Fiver - Mar 4, 2015 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            No more question for design. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->

                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="{{ asset('frontend/assets/images/testimonial/final-home--4th.png') }}" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">NCD - Design</span>
                                            <h3 class="title">Mevine Thoda</h3>
                                            <span class="designation">Marketing Officer</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">CEO - Marketing</h3>
                                                <span class="date">Thoda Department - Mar 4, 2018 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Marcent Of Vanice and treatment. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->

                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="{{ asset('frontend/assets/images/testimonial/final-home--5th.png') }}" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Default name</span>
                                            <h3 class="title">Davei Luace</h3>
                                            <span class="designation">Chief Operating Manager</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Android App Development</h3>
                                                <span class="date">via Upwork - Mar 4, 2015 - Aug 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                                <img src="{{ asset('frontend/assets/images/icons/rating.png') }}" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            When managment is so important. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonia Area  --> --}}

        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/images/contact/contact1.png') }}" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Sabbir Mahmud</h4>
                                <span>Software Developer</span>
                            </div>
                            <div class="description">

                                <span class="phone">Phone: <a href="tel:01941043264">+8801643534455</a></span>
                                <span class="mail">Email: <a href="mailto:admin@example.com">sabbirmahmud4455@gmail.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    <a href="https://github.com/sabbirmahmud4455" target="_blank">
                                        <img src="{{ asset('frontend/assets/icon/icons8-github-36.png') }}" alt="">
                                    </a>
                                    <a href="https://www.linkedin.com/in/sabbir-mahmud/" target="_blank">
                                        <img src="{{ asset('frontend/assets/icon/icons8-linkedin-36.png') }}" alt="">
                                    </a>
                                    <a href="https://www.facebook.com/sabbir.hossien.7" target="_blank">
                                        <img src="{{ asset('frontend/assets/icon/icons8-facebook-36.png') }}" alt="">
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form id="message_form" class=" rnt-contact-form row" id="contact-form" method="POST" action="{{ route('sent_message') }}">

                                    @csrf

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact" id="contact-phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>

                                        </button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->
        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="{{ asset('frontend/assets/images/portfolio/portfolio-04.jpg') }}" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> App Design Development.
                                    </h3>
                                    <p class="mb--30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio assumenda explicabo veniam temporibus eligendi.</p>
                                    <p>Consectetur adipisicing elit. Cupiditate distinctio assumenda. dolorum alias suscipit rerum maiores aliquam earum odit, nihil culpa quas iusto hic minus!</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <a href="#" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->

        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->


    </main>


@endsection

@section('frontend_script')
    {{-- <script src="{{ asset('backend/assets/js/ajax_form_submit.js') }}"></script> --}}



<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/js/custom-script.min.js') }}"></script>
<!--end::Custom Javascript-->

<!--DataTable-->
<script src="{{ asset('backend/assets/js/datatable/jquery.dataTables.min.js') }}"></script>
<!--DataTable-->

<!--start::ajax form submit-->
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
<script src="{{ asset('backend/assets/js/ajax_form_submit.js') }}"></script>
<!--end::ajax form submit-->

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="{{ asset('backend/js/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>

<script>

    $(document).on('submit','#message_form', function(e){
        e.preventDefault()

        let $this = $(this);
        let formData = new FormData(this);

        $this.find(".has-danger").removeClass('has-error');
        $this.find(".form-errors").remove();

        $.ajax({
            type: $this.attr('method'),
            url: $this.attr('action'),
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: function (response) {

                if (response.success) {
                    $("#message_form .rn-btn").css("color", "#198754");
                }

            },
            error: function (response) {

                let data = JSON.parse(response.responseText);
                $.each(data.errors, (key, value) => {
                    $("[name^=" + key + "]").parent().addClass('has-error')
                    $("[name^=" + key + "]").parent().append('<small class="text-danger form-errors">' + value[0] + '</small>');
                })
            }
        })
    })


</script>

@endsection
