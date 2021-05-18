@extends('layouts.app')

@push('meta-description')
<meta name="description" content="Take the IELTS exam to prove that you have the required English language skills to study in Australia. IELTS ratings are accepted as evidence of English language proficiency by higher education institutions./>
@endpush

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/Ielts.m4v') }}"muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>IELTS</h1>
                <br>
                <h1 class="heading-secondary">A Guide to IELTS in Australia</h1>
                <br>
                <p>
                    You want to go to Australia to study? Then you'll have to take an English Language Examination.
                    The IELTS test is Australia's most common language proficiency test!The IELTS (International English Language Testing System) preparation course is designed for those who wish to obtain an internationally recognised certificate.
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
                    <p class="text-justify py-2">
                        ITEC Academy is specialized in IELTS coaching. By working exclusively with the IELTS exam, we are able to deliver great service and quality.  We are the NO.1 IELTS coaching centre in Australia, since we have 1000+ students who have achieved their desired IELTS score.
                    </p>
                    <p class="text-justify py-2">
                       The IELTS (International English Language Testing System) is the world's most widely used English language exam for higher education. So, if you're considering studying in Australia, you've probably heard of it. To get your visa accepted, you must obtain the appropriate IELTS ratings.
                    </p>
                    <p class="text-justify py-2">
                        Exams may seem intimidating at times, but there are many ways to improve your English skills and ace the test! We'll walk you through the exam's setup, how to register and pay for the IELTS Australia fee, and how to interpret your IELTS results. We've even thrown in a few pointers along the way, so here's your handy guide to the IELTS for Australia.
                    </p>
                    <p class="text-justify py-2">
                        First and foremost, let's go through which exam you'll need to take. The IELTS Academic and IELTS General Training exams are the two variations of the test. If you're applying for undergraduate or postgraduate studies in Australia, you'll need to take the IELTS Academic examination.
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

            <div class="row mt-5 pt-5">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">IELTS PREPARATION COURSES</h3>
                </div>
                <div class="col-12">
                    <div class="p-2 text-justify">
                        <p>
                            - IELTS prep courses are scheduled for 10 – 12 weeks modules but can be tailored depending on requirements and needs.
                        </p>
                    </div>
                    <div class="p-2 text-justify">
                        <p>
                            - IELTS prep courses have a weekly intake every Monday and are scheduled to be either day or evening classes.
                        </p>
                    </div>
                    <div class="p-2 text-justify">
                        <p>
                            - The IELTS exam can be taken at anytime, not necessarily at the end of the course. Exams are held all over the world on scheduled dates – anyone can sit the IELTS exam at these scheduled times.
                        </p>
                    </div>
                    <div class="p-2 text-justify">
                        <p>
                            - The IELTS certificate is equivalent to TOEFL (more common in North America).
                        </p>
                    </div>
                    <div class="p-2 text-justify">
                        <p>
                            - Both certificates are valid for two years (for migration purposes, IELTS – General is valid for three years).
                        </p>
                    </div>
                </div>
            </div>
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
