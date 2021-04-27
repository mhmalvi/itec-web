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
                    <h6>Team ITECounsel</h6>
                    <b>10</b>
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
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img src="{{ asset('assets/images/office02.jpg') }}" alt="Image">
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
                        <h6>IELTS | PTE</h6>
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
                        <h6>RPL</h6>
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
                @forelse ($industries as $item)
                    <div class="col-lg-4 col-md-4 my-2 industry-card">
                        <div class="rpl-card reveal-effect masker wow">
                            <img src="{{ !is_null($item->thumbnail) ? asset('storage/industry/' . $item->thumbnail) : asset('assets/images/course/course.jpg') }}"
                                alt="">
                            <div class="rpl-des">
                                <h3>{{ $item->title }}</h3>
                                <ul class="text-left">
                                    @foreach ($item->courses->take(5) as $course)
                                        <li>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                            <a href="">{{ $course->course_code }}-{{ $course->course_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="{{ route('industry', $item->slug) }}" class="find">Find More</a>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" id="load">Load More</button>
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
