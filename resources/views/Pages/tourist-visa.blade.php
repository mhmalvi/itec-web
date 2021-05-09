@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/tourist-visa.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>TOURIST VISA</h1>
                <p>
                    Here at ITEC, we are further involved with visa processing for tourists planning to spend their vacation
                    in a remote island or right at the heart of a happening city in entirely foreign regions. We have
                    exclusive offers for tourists who want to get away from the hustle and bustle of daily hectic lives and
                    enjoy a quality time.
                </p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="text-content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">A Certified Visa Processing Agency In Bangladesh</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7 wow" data-splitting>
                    <p class="text-justify">
                        We are offering a wide variation of packages at affordable prices so that you get to spend another
                        exciting vacation with your family, friends or loved ones that you have always desired.
                    </p>
                    <br>
                    <p class="text-justify">
                        Being a certified agency for visa processing, it is our responsibility to take charge of your whole
                        visa processing system that leads to greater efficiency while saving more time for you.
                    </p>
                    <br>
                    <p class="text-justify">
                        In return, we will charge you added fees for recovering the expenses we would incur during the
                        process, only after visa approval.
                    </p>
                    <br>
                    <p class="text-justify">
                        A reputed International student counseling and international RPL training agency working with a
                        number of reputed Institutes in Australia, we only refer students to Registered Training
                        Organization in Australia and do not provide any certification.
                    </p>
                    <br>
                    <p>
                        ITEC refers students to Educube who helps students to enroll them and help them with visa.
                    </p>
                </div>
                <!-- end col-12	 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->
    <section class="icon-content-block">
        <div class="container mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">WE PROVIDE THE BEST IELTS TRAINING</h3>
                </div>
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <div class="content-block">
                        <figure> <img src="{{ asset('assets/images/ielts/calendar.png') }}" alt="Image"> </figure>
                        <h6>DURATION</h6>
                        <ul>
                            <li>3 Months</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <!-- end col-12 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <div class="content-block selected">
                        <figure> <img src="{{ asset('assets/images/ielts/money.png') }}" alt="Image"> </figure>
                        <h6>FEES</h6>
                        <ul>
                            <li>AUD $399.00</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-4 wow" data-splitting>
                    <div class="content-block">
                        <figure> <img src="{{ asset('assets/images/ielts/location.png') }}" alt="Image"> </figure>
                        <h6>LOCATION</h6>
                        <ul>
                            <li>Australia Office</li>
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
    <!-- end team -->
    <section class="works gallary">
        <div class="wow py-3" data-splitting>
            <h3 class="section-title text-center">
                Lorem ipsum <br> dolor sit amet
            </h3>
        </div>
        <ul>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/1.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/2.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/3.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/4.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/5.JPG') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/6.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/7.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/tourist/8.jpg') }}" alt="Image">
                </figure>
            </li>
        </ul>
    </section>
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
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/australia/logo1.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/australia/logo2.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/australia/logo3.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/canada/logo4.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/canada/logo5.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/canada/logo6.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo1.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo2.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo3.png') }}"
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
