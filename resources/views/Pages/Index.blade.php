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
                                <figure> <img src="{{ asset('assets/images/office02.jpg') }}" alt="Image">
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
                        <h6>IELTS</h6>
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
                        <h6>RPL | PTE</h6>
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
                        <h6>ADMISSION</h6>
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

    <section class="rpl">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">OUR RTO PARTNERS OFFERS</h3>
                </div>
                <div class="col-lg-4 col-md-4 my-2">
                    <div class="rpl-card reveal-effect masker wow">
                        <img src="{{ asset('assets/images/works01.jpg') }}" alt="">
                        <div class="rpl-des">
                            <h3>Certificate I</h3>
                            <ul>
                                <li>
                                    <a href="">CPC10111 Certificate I in Construction</a>
                                </li>
                            </ul>
                            <a href="" class="find">Find More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-2">
                    <div class="rpl-card reveal-effect masker wow">
                        <img src="{{ asset('assets/images/works01.jpg') }}" alt="">
                        <div class="rpl-des">
                            <h3>Certificate II</h3>
                            <ul>
                                <li>
                                    <a href="">CPP20617 Certificate II in Cleaning </a>
                                </li>
                            </ul>
                            <a href="" class="find">Find More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-2">
                    <div class="rpl-card reveal-effect masker wow">
                        <img src="{{ asset('assets/images/works01.jpg') }}" alt="">
                        <div class="rpl-des">
                            <h3>Certificate III</h3>
                            <ul>
                                <li>
                                    <a href="">SHB30416 Certificate III in Hairdressing</a>
                                </li>
                                <li>
                                    <a href="">BSB30115 Certificate III in Business</a>
                                </li>
                                <li>
                                    <a href="">AHC30916 Certificate III in Landscape Construction</a>
                                </li>
                                <li>
                                    <a href="">RII30815 Certificate III in Civil Construction Plant Operations</a>
                                </li>
                            </ul>
                            <a href="" class="find">Find More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-2">
                    <div class="rpl-card reveal-effect masker wow">
                        <img src="{{ asset('assets/images/works01.jpg') }}" alt="">
                        <div class="rpl-des">
                            <h3>Certificate IV</h3>
                            <ul>
                                <li>
                                    <a href="">SHB40115 Certificate IV in Beauty Therapy </a>
                                </li>
                                <li>
                                    <a href="">BSB40215 Certificate IV in Business</a>
                                </li>
                                <li>
                                    <a href="">BSB40515 Certificate IV in Business</a>
                                </li>
                                <li>
                                    <a href="">BSB41015 Certificate IV in Human Resources</a>
                                </li>
                            </ul>
                            <a href="" class="find">Find More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-2">
                    <div class="rpl-card reveal-effect masker wow">
                        <img src="{{ asset('assets/images/works01.jpg') }}" alt="">
                        <div class="rpl-des">
                            <h3>Diploma</h3>
                            <ul>
                                <li>
                                    <a href="">HLT52015 Diploma of Remedial Massage </a>
                                </li>
                                <li>
                                    <a href="">SHB50115 Diploma of Beauty Therapy</a>
                                </li>
                                <li>
                                    <a href="">BSB50215 Diploma of Business </a>
                                </li>
                                <li>
                                    <a href="">BSB50618 Diploma of Human Resources Management</a>
                                </li>
                            </ul>
                            <a href="" class="find">Find More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-2">
                    <div class="rpl-card reveal-effect masker wow">
                        <img src="{{ asset('assets/images/works01.jpg') }}" alt="">
                        <div class="rpl-des">
                            <h3>Advanced Diploma</h3>
                            <ul>
                                <li>
                                    <a href="">SIT60316 Advanced Diploma of Hospitality Management</a>
                                </li>
                                <li>
                                    <a href="">BSBHRM505 Manage remuneration and employee benefits </a>
                                </li>
                                <li>
                                    <a href="">HLTAID003 Provide first aid </a>
                                </li>
                                <li>
                                    <a href="">RIIGOV401E Apply, monitor and report on compliance systems</a>
                                </li>
                            </ul>
                            <a href="" class="find">Find More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
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
                                    <div class="reviewer"> <img src="images/team01.jpg" alt="Image">
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
                                    <div class="reviewer"> <img src="{{ asset('assets/images/team01.jpg') }}"
                                            alt="Image">
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
                                    <div class="reviewer"> <img src="{{ asset('assets/images/team01.jpg') }}"
                                            alt="Image">
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
                    <h3 class="section-title">STUDIO PROUD<br>
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
