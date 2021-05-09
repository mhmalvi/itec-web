@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/about.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>About us</h1>
                <p>Iternational Training & Educational Counsel</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="text-content-block">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-12 wow" data-splitting>
                    <h5>We work closely with your development team. markettting profissionals and stakeholder to design and
                        develop UX and UI that make your website. application or software a joy to use,</h5>
                </div>
                <!-- end col-12	 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>01</small>
                    <h6>PROTOTYPE</h6>
                    <p>The more you use, the more you have in your signifant mind</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>02</small>
                    <h6>SKETCHING</h6>
                    <p>The more you use, the more you have in your signifant mind</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>03</small>
                    <h6>WIREFRAME</h6>
                    <p>The more you use, the more you have in your signifant mind</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>04</small>
                    <h6>UI-UX DESIGN</h6>
                    <p>The more you use, the more you have in your signifant mind</p>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->
    <section class="intro-image">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="office-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure class="reveal-effect masker wow"> <img
                                        src="{{ asset('assets/images/home/1.jpg') }}" alt="Image">
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img src="{{ asset('assets/images/home/2.jpg') }}" alt="Image">
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
                    <h3 class="section-title">THE THINGS<br>
                        WE ARE ABLE TO DO</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <div class="content-block">
                        <figure> <img src="{{ asset('assets/images/icon01.png') }}" alt="Image"> </figure>
                        <h6>Lorem ipsum</h6>
                        <ul>
                            <li>Digital Branding</li>
                            <li>Web & Mobile Sites</li>
                            <li>User Interface Design</li>
                            <li>Responsive Techs</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <div class="content-block selected">
                        <figure> <img src="{{ asset('assets/images/icon02.png') }}" alt="Image"> </figure>
                        <h6>Lorem ipsum</h6>
                        <ul>
                            <li>Digital Strategy</li>
                            <li>User Experience Design</li>
                            <li>User Interface Design</li>
                            <li>Mobile Sites</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <div class="content-block">
                        <figure> <img src="{{ asset('assets/images/icon03.png') }}" alt="Image"> </figure>
                        <h6>Lorem ipsum</h6>
                        <ul>
                            <li>Custom Platform</li>
                            <li>Back-End Executions</li>
                            <li>Interface Apps</li>
                            <li>Mobile Systems</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end icon-content-block -->
    <section class="testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial wow" data-splitting>
                                    <blockquote> We work closely with your development team. markettting profissionals and
                                        stakeholder to design and develop UX and UI that make your website. application or
                                        software a joy to use </blockquote>
                                    <div class="reviewer"> <img src="{{ asset('assets/images/team01.jpg') }}" alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Marcus James</h6>
                                            <small>IBIS HOTEL MANAGER</small>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <blockquote> We work closely with your development team. markettting profissionals and
                                        stakeholder to design and develop UX and UI that make your website. application or
                                        software a joy to use </blockquote>
                                    <div class="reviewer"> <img src="{{ asset('assets/images/team01.jpg') }}" alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Marcus James</h6>
                                            <small>IBIS HOTEL MANAGER</small>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <blockquote> We work closely with your development team. markettting profissionals and
                                        stakeholder to design and develop UX and UI that make your website. application or
                                        software a joy to use </blockquote>
                                    <div class="reviewer"> <img src="{{ asset('assets/images/team01.jpg') }}" alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Marcus James</h6>
                                            <small>IBIS HOTEL MANAGER</small>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                        <div class="swiper-pagination"></div>
                        <!-- end swiper-pagination -->
                    </div>
                    <!-- end testimonials-slider -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6 wow" data-splitting>
                    <h3 class="section-title">LOREM IPSUM<br>
                        IS QUALITY OF<br>
                        PARTNERS</h3>
                    <a href="#"></a>
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow" data-splitting>
                    <h3 class="section-title">ALL ABOUT<br>
                        THE OUR TEAM</h3>
                </div>
                <!-- end col-8 -->
                <div class="col-lg-6 wow" data-splitting>
                    <h5>We work closely with your development team. markettting profissionals and stakeholder to design and
                        develop UX and UI that make your website. application or software a joy to use,</h5>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col">
                    <figure class="reveal-effect masker wow">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <img src="{{ asset('assets/images/team01.jpg') }}" alt="Image">
                        <figcaption class="wow" data-splitting>
                            <h6>Alexander O'neil</h6> <small>EXECUTIVE CHIEF</small>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col -->

                <div class="col">
                    <figure class="reveal-effect masker wow">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <img src="{{ asset('assets/images/team02.jpg') }}" alt="Image">
                        <figcaption class="wow" data-splitting>
                            <h6>Jessica Tanana</h6> <small>SENIOR ENGINEER</small>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col -->

                <div class="col">
                    <figure class="reveal-effect masker wow">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <img src="{{ asset('assets/images/team03.jpg') }}" alt="Image">
                        <figcaption class="wow" data-splitting>
                            <h6>Steven Mc'Laren</h6> <small>CREATIVE HEAD CHIEF</small>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col -->
                <div class="col">
                    <figure class="reveal-effect masker wow">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <img src="{{ asset('assets/images/team04.jpg') }}" alt="Image">
                        <figcaption class="wow" data-splitting>
                            <h6>Dasha Avdeieva</h6> <small>ACCOUNT MANAGER</small>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col -->
                <div class="col">
                    <figure class="reveal-effect masker wow">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <img src="{{ asset('assets/images/team05.jpg') }}" alt="Image">
                        <figcaption class="wow" data-splitting>
                            <h6>Dmitry Samohin</h6> <small>DIGITAL PRODUCER</small>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end team -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">LOREM IPSUM<br>
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
