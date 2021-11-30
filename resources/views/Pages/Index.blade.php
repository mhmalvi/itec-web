@extends('layouts.app')

@section('title', 'International Training and Education Counsel')

@push('seo')
    <meta name="description" content="ITEC is the best education consultant & migration agency in Australia. Those who want to study, work or travel to Australia will get the best consultancy from our expert." />
@endpush

@section('content')
    <div id="subs"></div>
    <header class="slider">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="{{ asset('images/slider4.webp') }}"></div>
                <div class="swiper-slide" data-background="{{ asset('images/slider3.webp') }}"></div>
                <div class="swiper-slide" data-background="{{ asset('images/slider2.webp') }}"></div>
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
                <div class="swiper-slide"><span>START</span> <a href="#">YOUR HIGHER EDUCATION JOURNEY</a> </div>
                <div class="swiper-slide"><span>CONSULT</span> <a href="#">FOR MIGRATION AND CITIZENSHIP</a></div>
                <div class="swiper-slide"><span>CERTIFY</span> <a href="#">YOUR SKILLS</a></div>
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
                    <h1 class="section-title">ITEC Education Consultant and Student Agency</h1>

                    <div class="exp">
                        <h6>Team ITEC</h6>
                        <b>10</b>
                        <h4>
                            YEARS OF<br>STUDENT<br>COUNSELINIG<br>EXPERIENCE
                        </h4>
                        <a href="javascript:void(0)">info@itecounsel.com</a>
                    </div>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7" data-aos="fade-up">
                    <p class="text-justify">
                        Choosing to study abroad is a life-changing choice, and gaining an Australian qualification,
                        studying English, or earning a diploma or university degree would provide you with excellent work
                        opportunities and prospects. The team at the International Education Agency – Australia has
                        extensive experience putting international students in Australian schools, colleges, and
                        universities.
                    </p>
                    <p class="text-justify">
                        ITEC is a professional student recruitment and training company providing students and parents with
                        current information about studies offered globally. ITEC Services offer information about the
                        selected destination, the universities, programs, admissions, accommodations, and Student Visas.
                        ITEC was established in 2019 with a longstanding reputation as one of Australia's leading education
                        agencies.
                    </p>
                    <p class="text-justify">
                        In Australia, New Zealand, the United States, the United Kingdom, Canada, Malaysia, Europe, Asia,
                        and South America, ITEC serves over 500 universities as well as a host of leading English language
                        centers, technical colleges, and schools.
                    </p>
                    <p class="text-justify">
                        ITEC is a trusted organization due to its knowledge and support for students from diverse cultural
                        backgrounds, offering a full-service experience built over years of experience working on behalf of
                        the highest-level clients. It is an award-winning agency for its service excellence.
                    </p>
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
                                        class="lazyload" data-src="{{ asset('images/home/1.webp') }}" alt="Image">
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('images/home/2.webp') }}" alt="Image">
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
            <div class="row justify-content-center itec-services">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">THE THINGS<br>
                        WE ARE ABLE TO DO</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-3 col-md-3" data-aos="fade-up">
                    <a href="{{ route('page', 'ielts') }}">
                        <div class="content-block">
                            <figure> <img class="lazyload" data-src="{{ asset('images/icon01.webp') }}" alt="Image"> </figure>
                            <h6>IELTS | PTE</h6>
                            <ul>
                                <li>Expected Result</li>
                                <li>Experienced Mentors</li>
                                <li>Flexible Batch Times</li>
                            </ul>
                        </div>
                        <!-- end content-block -->
                    </a>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-3" data-aos="fade-up">
                    <a href="{{ route('rpl') }}">
                        <div class="content-block">
                            <figure> <img class="lazyload" data-src="{{ asset('images/icon02.webp') }}" alt="Image"> </figure>
                            <h6>RPL</h6>
                            <ul>
                                <li>Get Certified</li>
                                <li>Boost Your Career</li>
                                <li>Get Your Dream Job</li>
                            </ul>
                        </div>
                        <!-- end content-block -->
                    </a>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-3" data-aos="fade-up">
                    <a href="{{ route('admission', 'australia') }}">
                        <div class="content-block">
                            <figure> <img class="lazyload" data-src="{{ asset('images/icon03.webp') }}" alt="Image"> </figure>
                            <h6>ADMISSION</h6>
                            <ul>
                                <li>University Admission</li>
                                <li>Migration</li>
                                <li>Travel Visa</li>
                            </ul>
                        </div>
                        <!-- end content-block -->
                    </a>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-3" data-aos="fade-up">
                    <a href="">
                        <div class="content-block">
                            <figure> <img class="lazyload" data-src="{{ asset('images/icon04.webp') }}" alt="Image"> </figure>
                            <h6>TRAINING</h6>
                            <ul>
                                <li>Short Courses</li>
                                <li>Long Qualifications</li>
                            </ul>
                        </div>
                        <!-- end content-block -->
                    </a>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->

            <div class="section-new">
                <div class="row py-5">
                    <div class="col-lg-5" data-aos="fade-up">
                        <h2>Study, Travel, Work and Immigrate in Australia </h2>
                        <br>
                        <p>
                            ITEC is designed to give consultancy to students, and who travel to Australia from all over the
                            world.
                            You will get reliable information about the fantastic opportunities to study, work or travel in
                            Australia.
                        </p>

                    </div>
                    <!-- end col-5 -->
                    <div class="col-lg-7" data-aos="fade-up">

                        <img class="lazyload" data-src="{{ asset('images/122.webp') }}" alt="Image">

                    </div>
                    <!-- end col-7 -->
                </div>
                <!-- end row -->

                <div class="py-5"></div>

                <div class="row py-5">
                    <div class="col-lg-5" data-aos="fade-up">
                        <img class="lazyload" data-src="{{ asset('images/123.webp') }}" alt="Image">
                    </div>
                    <!-- end col-5 -->
                    <div class="col-lg-7" data-aos="fade-up">
                        <h2>We help international students to: </h2>
                        <br>
                        <ul>
                            <li>Find courses</li>
                            <li>Get accepted into colleges, universities</li>
                            <li>Apply for a students or travel visa</li>
                            <li>Fina a student job while studying in Australia</li>
                            <li>Apply for our work experience program</li>
                            <li>Get in contact with immigration agents to apply for your PR visa</li>
                        </ul>


                    </div>
                    <!-- end col-7 -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end icon-content-block -->

    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow" data-splitting>
                    <h2 class="section-title text-left">Free Study in Australia Service</h2>
                    <video src="{{ asset('assets/videos/contact2.mp4') }}" muted loop autoplay width="300" height="300"></video>
                </div>
                <div class="col-lg-7 offset-lg-1" data-aos="fade-up">
                    <div class="p-2 text-justify">
                        <p><strong>Free Study in Australia</strong></p>
                        <p>
                            In ITEC we provide Free Study in Australia Service by our experience of
                            our registered education experts. We help thousands of students to help immigrate and study in
                            Australia. Registered education and immigration consultants provide free education services for
                            international students and education providers.
                        </p>
                    </div>
                    <div class="p-2 text-justify">
                        <p><strong>Free Counseling</strong></p>
                        <p>
                            We are a consulting firm that has been offering high-quality services to
                            people who want to research, work, or travel in Australia for many years. We provide free
                            counseling and guidance to applicants from all over the world.
                        </p>
                    </div>
                    <div class="p-2 text-justify">
                        <p><strong>PTE Academic</strong></p>
                        <p>
                            PTE Academic is a computer-based academic English language exam for
                            non-native English speakers who choose to study in a foreign country. ITEC offers the best PTE
                            course in Australia
                        </p>
                    </div>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end intro -->

    <section class="testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-12 wow" data-splitting>
                    <h3 class="section-title">LISTEN FROM<br>
                        OUR<br>
                        STUDENTS</h3>
                    <a href="#"></a>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-7 order-lg-1" data-aos="fade-up">
                    <div class="testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <blockquote>
                                        Great course and comes with great value! I strongly recommend it for anyone who wants to take higer study!
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/a1.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>ALAMIN SHUVO</h6>
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
                                    <blockquote>
                                        Thank you ITEC for helping me. Your Pconsultency was excellent. Best instructor ever! I recommend this interested in higher study!
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/a4.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>PIYASH KHAN</h6>
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
                                    <blockquote>
                                        That was a wonderful and fruitful class, I learned and mastered how to take preparation for IELTS exam.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/a6.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>DEW ANTHONY GOMES</h6>
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
                                    <blockquote>
                                        That was a wonderful and fruitful class, I learned and mastered how to take preparation for IELTS exam.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/a6.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>DEW ANTHONY GOMES</h6>
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
                                    <blockquote>
                                        Consulting with ITEC was pure pleasure! They were friendly and concerned. I was so glad I chose them to help me with my higher study.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/a6.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Anthony Jhon</h6>
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
                                    <blockquote>
                                        Very knowledgeable and helpful company when it comes to higher study and IELTS preparation
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/a6.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>RIAZ HOSSAIN</h6>
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
                    </div>
                    <!-- end testimonials-slider -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->

    <section class="clients shadow-0 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">OUR RTO PARTNERS</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-12" data-aos="fade-up">
                    <div class="rto-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('images/rto/UCT.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/rto/BRIGHT.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/rto/NTA.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/rto/ATR.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/rto/alpha.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                    </div>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


    <section class="rpl pt-0 shadow-0 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">OUR RTO PARTNERS OFFERS</h3>
                </div>
                @forelse ($industries as $item)
                    <div class="col-lg-4 col-md-4 my-2 industry-card" data-aos="fade-up">
                        <div class="rpl-card reveal-effect masker wow">
                            <img src="{{ !is_null($item->thumbnail) ? asset('storage/industry/' . $item->thumbnail) : asset('images/course/course.jpg') }}"
                                alt="">
                            <div class="rpl-des">
                                <h3>{{ $item->title }}</h3>
                                <ul class="text-left">
                                    @foreach ($item->courses->take(5) as $course)
                                        <li>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                            <a
                                                href="{{ route('course.single', $course->course_code) }}">{{ $course->course_code }}-{{ $course->course_name }}</a>
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
@endsection
@push('js')
    <script>
        $(document).ready(function(){
            setTimeout(() => {
                $("#exampleModalCenter").modal('show');
            }, 2800);
        })
    </script>
@endpush
