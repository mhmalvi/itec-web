@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/pte-bg-video.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>PTE</h1>
                <p>
                    PTE Exam is one of the widely taken English language tests across the globe. For countries like
                    Australia, the PTE test is also used for immigration. The test focuses on the day to day usage of the
                    english language to prepare and evaluate students to live and study in the English speaking countries.
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
                    <h3 class="section-title">Let PTE Academic<br>Prepare You<br>For Higher Studies</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7 wow" data-splitting>
                    <p class="text-justify">
                        PTE (Pearson Test of English) is an English language proficiency test, which is used as an
                        eligibility criterion for admission process in universities all around the world. There are two
                        formats of the PTE: PTE Academic Test and PTE General Test.
                    </p>

                    <br>

                    <p class="text-justify">
                        Many applicants take PTE test for Australian Immigration process, too. What differs PTE from other
                        English language proficiency tests, is the scoring methods and the results. PTE declares the results
                        in much smaller time duration than its close competitors that are IELTS and TOEFL. As the scoring
                        done for the PTE tests are computerised, the results are much more accurate and quicker than other
                        tests.
                    </p>

                    <br>

                    <p class="text-justify">
                        This makes PTE test favorite among the students who are in a hurry. Another advantage of PTE is that
                        the computer-based examination focuses more on everyday English usage rather than high-level,
                        complex English. It has a multi-level grading system, which provides a more accurate assessment of
                        student’s proficiency in the English Language.
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
