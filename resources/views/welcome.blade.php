@extends('layouts.app')

@section('content')
    <header class="slider">
        <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-background="{{asset('assets/images/slide01.jpg')}}"></div>
            <div class="swiper-slide">
                <video src="videos/video01.mp4" muted autoplay loop></video>
            </div>
            <div class="swiper-slide" data-background="{{asset('assets/images/slide02.jpg')}}"></div>
        </div>
        <!-- end swiper-wrapper -->
        <div class="slide-progress"> <span>01</span>
            <div class="swiper-pagination"></div>
            <span>03</span> </div>
        <!-- end slide-progress -->
        <div class="swiper-button-prev">PREV</div>
        <!-- end button-prev -->
        <div class="swiper-button-next">NEXT</div>
        <!-- end buttin-next --> 
        </div>
        <!-- end gallery-top -->
        <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><span>DISCOVER</span> <a href="#">DISCOVER CASE</a> </div>
            <div class="swiper-slide"><span>EXCLUSION</span> <a href="#">DISCOVER CASE</a></div>
            <div class="swiper-slide"><span>EDITIONAL</span> <a href="#">DISCOVER CASE</a></div>
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
            <h3 class="section-title">HOW WE MAKE <br>
                USER EXPERIENCES</h3>
            <a href="#">hello@tourog.com</a> </div>
            <!-- end col-5 -->
            <div class="col-lg-7 wow" data-splitting>
            <p>You can't use up creativity. The more you use, the 
                more you have in your signifant mind.</p>
            <h6>Salvador Dali</h6>
            <small>Digital Artisit</small> <b>25</b>
            <h4>YEARS OF<br>
                DIGITAL EXPERIENCE</h4>
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
                    <figure class="reveal-effect masker wow"> <img src="{{asset('assets/images/office01.jpg')}}" alt="Image">
                    <figcaption>
                        <h6> HEADQUARTOR OF TOUROG</h6>
                    </figcaption>
                    </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <figure> <img src="{{asset('assets/images/office02.jpg')}}" alt="Image">
                    <figcaption>
                        <h6> TORONTO OFFICE</h6>
                    </figcaption>
                    </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <figure> <img src="{{asset('assets/images/office03.jpg')}}" alt="Image">
                    <figcaption>
                        <h6> HEADQUARTOR OF TOUROG</h6>
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
            <h3 class="section-title">THE THINGS<br>
                WE ARE ABLE TO DO</h3>
            </div>
            <!-- end col-12 -->
            <div class="col-lg-3 col-md-4 wow" data-splitting>
            <div class="content-block">
                <figure> <img src="{{asset('assets/images/icon01.png')}}" alt="Image"> </figure>
                <h6>DIGITAL PRODUCTS</h6>
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
                <figure> <img src="{{asset('assets/images/icon02.png')}}" alt="Image"> </figure>
                <h6>UI-UX DESIGN</h6>
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
                <figure> <img src="{{asset('assets/images/icon03.png')}}" alt="Image"> </figure>
                <h6>WEB DEVELOPMENT</h6>
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
    <section class="works">
        <ul>
        <li>
            <figure class="reveal-effect masker wow"> <a href="{{asset('assets/images/works01.jpg')}}" data-fancybox><img src="{{asset('assets/images/works01.jpg')}}" alt="Image"></a> </figure>
            <div class="caption wow" data-splitting>
            <h3>Darkness Vehicle</h3>
            <small>DIGITAL, PRINT, DEVELOPMENT</small> </div>
            <!-- end caption --> 
        </li>
        <li>
            <figure class="reveal-effect masker wow"> <a href="{{asset('assets/images/works02.jpg')}}" data-fancybox><img src="{{asset('assets/images/works02.jpg')}}" alt="Image"></a> </figure>
            <div class="caption wow" data-splitting>
            <h3>Goddes Cover Art</h3>
            <small>PRINT, DIGITAL, DEVELOPMENT</small></div>
            <!-- end caption --> 
        </li>
        <li>
            <figure class="reveal-effect masker wow"> <a href="{{asset('assets/images/works03.jpg')}}" data-fancybox><img src="{{asset('assets/images/works03.jpg')}}" alt="Image"></a> </figure>
            <div class="caption wow" data-splitting>
            <h3>Hard Employee</h3>
            <small>WEB, DIGITAL, DEVELOPMENT</small> </div>
            <!-- end caption --> 
        </li>
        <li>
            <figure class="reveal-effect masker wow"> <a href="{{asset('assets/images/works04.jpg')}}" data-fancybox><img src="{{asset('assets/images/works04.jpg')}}" alt="Image"></a> </figure>
            <div class="caption wow" data-splitting>
            <h3>Sweet Berry Pie</h3>
            <small>DIGITAL, PRINT, DEVELOPMENT</small> </div>
            <!-- end caption --> 
        </li>
        <li>
            <figure class="reveal-effect masker wow"> <a href="{{asset('assets/images/works05.jpg')}}" data-fancybox><img src="{{asset('assets/images/works05.jpg')}}" alt="Image"></a> </figure>
            <div class="caption wow" data-splitting>
            <h3>King of Roosters</h3>
            <small>PRINT, DIGITAL, DEVELOPMENT</small> </div>
            <!-- end caption --> 
        </li>
        <li>
            <figure class="reveal-effect masker wow"> <a href="{{asset('assets/images/works06.jpg')}}" data-fancybox><img src="{{asset('assets/images/works06.jpg')}}" alt="Image"> </a></figure>
            <div class="caption wow" data-splitting>
            <h3>Primero  Car</h3>
            <small>WEB, DIGITAL, DEVELOPMENT</small> </div>
            <!-- end caption --> 
        </li>
        </ul>
    </section>
    <!-- end works -->
    <section class="clients">
        <div class="container">
        <div class="row"> <div class="col-lg-5 wow" data-splitting>
            <h3 class="section-title">AGENSY PROUD<br>
                IS QUALITY OF<br>
                PARTNERS</h3>
            </div>
            <!-- end col-5 -->
            <div class="col-lg-7">
            <ul>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo01.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo02.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo03.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo04.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo05.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo06.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo07.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo08.png')}}" alt="Image"> </li>
                <li class="reveal-effect masker wow"> <img src="{{asset('assets/images/logo09.png')}}" alt="Image"> </li>
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
