@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="videos/video02.mp4" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>IELTS</h1>
                <p>
                    An English language ability exam, which evaluates a candidate’s ability to converse in the English
                    language across all four essential modules: speaking, writing, reading, and listening.
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
                    <h3 class="section-title">Let IELTS Take<br>You To The<br>Another Lavel!</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7 wow" data-splitting>
                    <p class="text-justify">
                        Numerous students who have prepared for or appeared for the TOEFL are surprised when they confront
                        difficulties understanding accents and expressions used by British speakers in the IELTS. This is
                        why a thorough IELTS Exam preparation, via self-study or a language school that covers the IELTS
                        course, is required to succeed in the IELTS test.

                        Test-takers must know beforehand, which module is required for their purposes, as the scores are not
                        interchangeable. Each test has a duration of two hours and forty-five minutes. Test-takers are
                        required to pay IELTS fees for administration of the exam.

                        Broadly speaking, IELTS is taken by individuals who wish to study, live, or work in a country where
                        English is the primary language of communication. In particular, the test is taken by three
                        fundamental classifications of individuals
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
                            <li>Regular Course - 3 Months</li>
                            <li>Crash Course - 1 Month</li>
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
                            <li>Regular Course <strong>BDT 16,000</strong></li>
                            <li>Crash Course <strong>BDT 13,000</strong></li>
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
                            <li>
                                Level-7, 8/C, F.R Tower, PanthaPath<br>
                                Dhaka-1207, Bangladesh
                            </li>
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
