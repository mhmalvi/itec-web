@extends('layouts.app')

@section('content')
    <header class="slider">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="{{ asset('assets/images/slider4.jpg') }}"></div>
                <div class="swiper-slide" data-background="{{ asset('assets/images/slider3.jpg') }}"></div>
                <div class="swiper-slide" data-background="{{ asset('assets/images/slider2.jpg') }}"></div>
            </div>
            <!-- end swiper-wrapper -->
            <div class="slide-progress"> <span>01</span>
                <div class="swiper-pagination"></div>
                <span>03</span>
            </div>
            <!-- end slide-progress -->
            <div class="swiper-button-prev">PREV</div>
            <!-- end button-prev -->
            <div class="swiper-button-next">NEXT</div>
            <!-- end buttin-next -->
        </div>
        <!-- end gallery-top -->
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><span>EXPAND</span> <a href="#">YOUR HORIZON</a> </div>
                <div class="swiper-slide"><span>CROSS</span> <a href="#">THE OCEAN</a></div>
                <div class="swiper-slide"><span>CHECK</span> <a href="#">YOUR ELIGIBILITY</a></div>
            </div>
            <!-- end swiper-wrapper -->
        </div>
        <!-- end gallery-thumbs -->
    </header>
    <!-- end slider -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">Why Choose ITEC <br> To <br> Study Abroad</h3>
                    <a href="javascript:void(0)">hello@itecounsel.com</a>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7 wow" data-splitting>
                    <p class="text-justify">
                        ITEC – International Training & Education Counsel is your most trusted education agent who is here
                        to help you getting your
                        higher education dream come true by applying to the most highly ranked universities across the world
                        even with a scholarship!
                        Also get yourself sorted with your university change, TR and PR application, visa extension, NAATI,
                        PTE coaching through us in
                        our head office at Australia!
                    </p>
                    <h6>Salvador Dali</h6>
                    <small>Digital Artisit</small> <b>10</b>
                    <h4>
                        YEARS OF<br>STUDENT<br>COUNSELINIG<br>EXPERIENCE
                    </h4>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end intro -->
    <section class="intro-image">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="office-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure class="reveal-effect masker wow"> <img
                                        src="{{ asset('assets/images/office01.jpg') }}" alt="Image">
                                    <figcaption>
                                        <h6>HEAD OFFICE</h6>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure> <img src="{{ asset('assets/img/office02.jpg') }}" alt="Image">
                                    <figcaption>
                                        <h6>BANGLADESH OFFICE</h6>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                        <div class="swiper-pagination"></div>
                        <!-- end swiper-pagination -->
                    </div>
                    <!-- end office-slider -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end intro-image -->
    <section class="icon-content-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">
                        THE SERVICES<br>
                        WE ARE PROVIDING</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <a class="service-link" href="">
                        <div class="content-block">
                            <figure>
                                <img src="{{ asset('assets/images/icon01.png') }}" alt="Image">
                            </figure>
                            <h6>IELTS</h6>
                            <ul>
                                <li>Qualified Instructor</li>
                                <li>Digitalized Classroom</li>
                                <li>24/7 Study Support</li>
                                <li>Mock Tests</li>
                            </ul>
                        </div>
                    </a>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <a class="service-link" href="">
                        <div class="content-block selected">
                            <figure> <img src="{{ asset('assets/images/icon03.png') }}" alt="Image"> </figure>
                            <h6>ADMISSION</h6>
                            <ul>
                                <li>Study in Australia</li>
                                <li>Study in Canada</li>
                                <li>Study in Europe</li>
                                <li>Study in Malaysia</li>
                            </ul>
                        </div>
                    </a>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <a class="service-link" href="">
                        <div class="content-block">
                            <figure> <img src="{{ asset('assets/images/icon02.png') }}" alt="Image"> </figure>
                            <h6>RPL</h6>
                            <ul>
                                <li>Recognitions of Prior Learning</li>
                                <li>Career planning</li>
                                <li>Preparing for an interview</li>
                                <li>Gain credits in academic</li>
                            </ul>
                        </div>
                    </a>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end icon-content-block -->
    <section class="works">
        <ul>
            <li>
                <figure class="reveal-effect masker wow"> <a href="{{ asset('assets/images/works01.jpg') }}"
                        data-fancybox><img src="{{ asset('assets/images/works01.jpg') }}" alt="Image"></a> </figure>
                <div class="caption wow" data-splitting>
                    <h3>Darkness Vehicle</h3>
                    <small>DIGITAL, PRINT, DEVELOPMENT</small>
                </div>
                <!-- end caption -->
            </li>
            <li>
                <figure class="reveal-effect masker wow"> <a href="{{ asset('assets/images/works02.jpg') }}"
                        data-fancybox><img src="{{ asset('assets/images/works02.jpg') }}" alt="Image"></a> </figure>
                <div class="caption wow" data-splitting>
                    <h3>Goddes Cover Art</h3>
                    <small>PRINT, DIGITAL, DEVELOPMENT</small>
                </div>
                <!-- end caption -->
            </li>
            <li>
                <figure class="reveal-effect masker wow"> <a href="{{ asset('assets/images/works03.jpg') }}"
                        data-fancybox><img src="{{ asset('assets/images/works03.jpg') }}" alt="Image"></a> </figure>
                <div class="caption wow" data-splitting>
                    <h3>Hard Employee</h3>
                    <small>WEB, DIGITAL, DEVELOPMENT</small>
                </div>
                <!-- end caption -->
            </li>
            <li>
                <figure class="reveal-effect masker wow"> <a href="{{ asset('assets/images/works04.jpg') }}"
                        data-fancybox><img src="{{ asset('assets/images/works04.jpg') }}" alt="Image"></a> </figure>
                <div class="caption wow" data-splitting>
                    <h3>Sweet Berry Pie</h3>
                    <small>DIGITAL, PRINT, DEVELOPMENT</small>
                </div>
                <!-- end caption -->
            </li>
            <li>
                <figure class="reveal-effect masker wow"> <a href="{{ asset('assets/images/works05.jpg') }}"
                        data-fancybox><img src="{{ asset('assets/images/works05.jpg') }}" alt="Image"></a> </figure>
                <div class="caption wow" data-splitting>
                    <h3>King of Roosters</h3>
                    <small>PRINT, DIGITAL, DEVELOPMENT</small>
                </div>
                <!-- end caption -->
            </li>
            <li>
                <figure class="reveal-effect masker wow"> <a href="{{ asset('assets/images/works06.jpg') }}"
                        data-fancybox><img src="{{ asset('assets/images/works06.jpg') }}" alt="Image"> </a></figure>
                <div class="caption wow" data-splitting>
                    <h3>Primero Car</h3>
                    <small>WEB, DIGITAL, DEVELOPMENT</small>
                </div>
                <!-- end caption -->
            </li>
        </ul>
    </section>
    <!-- end works -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">AGENSY PROUD<br>
                        IS QUALITY OF<br>
                        PARTNERS</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <ul>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo01.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo02.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo03.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo04.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo05.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo06.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo07.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo08.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/logo09.png') }}"
                                alt="Image"> </li>
                    </ul>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
