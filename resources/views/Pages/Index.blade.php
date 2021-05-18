@extends('layouts.app')

@push('meta-description')
<meta name="description" content="ITEC is the best education consultant & migration agency in Australia. Those who want to study, work or travel to Australia will get the best consultancy from our expert." />
@endpush

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
                <h1 class="section-title">ITEC Education Consultant and Student Agency</h1>
                <h6>Team ITECounsel</h6>
                <b>10</b>
                <h4>
                    YEARS OF<br>STUDENT<br>COUNSELINIG<br>EXPERIENCE
                </h4>
                <br>
                <br>

                <a href="javascript:void(0)">hello@itecounsel.com</a>
            </div>
            <!-- end col-5 -->
            <div class="col-lg-7 wow">
                <p class="text-justify">
                    Choosing to study abroad is a life-changing choice, and gaining an Australian qualification,
                    studying English, or earning a diploma or university degree would provide you with excellent work
                    opportunities and prospects. The team at the International Education Agency – Australia has
                    extensive experience putting international students in Australian schools, colleges, and
                    universities.
                    ITEC is a professional student recruitment and training company providing students and parents with
                    current information about studies offered globally. ITEC Services offer information about the
                    selected destination, the universities, programs, admissions, accommodations, and Student Visas.
                    ITEC was established in 2019 with a longstanding reputation as one of Australia's leading education
                    agencies.
                    In Australia, New Zealand, the United States, the United Kingdom, Canada, Malaysia, Europe, Asia,
                    and South America, ITEC serves over 500 universities as well as a host of leading English language
                    centers, technical colleges, and schools.
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
                            <figure class="reveal-effect masker wow"> <img src="{{ asset('assets/images/home/1.jpg') }}" alt="Image">
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

<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow align-self-center" data-splitting>
                <h2>//Study, Travel, Work and Immigrate in Australia </h2>
                <br>
                <p>
                    ITEC is designed to give consultancy to students, and who travel to Australia from all over the
                    world.
                    You will get reliable information about the fantastic opportunities to study, work or travel in
                    Australia.
                </p>

            </div>
            <!-- end col-5 -->
            <div class="col-lg-7 wow">

                <img src="{{ asset('assets/images/122.jpg') }}" alt="Image">

            </div>
            <!-- end col-7 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow" data-splitting>
                <img src="{{ asset('assets/images/123.jpg') }}" alt="Image">
            </div>
            <!-- end col-5 -->
            <div class="col-lg-7 wow align-self-center">
                <h6>We help international students to : </h6>

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
    <!-- end container -->
</section>

<section class="rpl">
    <div class="container">
        <div class="row">
            <div class="col-12 wow" data-splitting>
                <h3 class="section-title text-center">OUR RTO PARTNERS OFFERS</h3>
            </div>
            @forelse ($industries as $item)
            <div class="col-lg-4 col-md-4 my-2 industry-card">
                <div class="rpl-card reveal-effect masker wow">
                    <img src="{{ !is_null($item->thumbnail) ? asset('storage/industry/' . $item->thumbnail) : asset('assets/images/course/course.jpg') }}" alt="">
                    <div class="rpl-des">
                        <h3>{{ $item->title }}</h3>
                        <ul class="text-left">
                            @foreach ($item->courses->take(5) as $course)
                            <li>
                                <i class="fas fa-long-arrow-alt-right"></i>
                                <a href="{{ route('course.single', $course->course_code) }}">{{ $course->course_code }}-{{ $course->course_name }}</a>
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
                                <blockquote> //ITEC is the best way towards your IELTS career. They provide the best lectures on cracking IELTS easily. A good Library is what a student needs and they have a well-maintained library. I suggest this academy & visa consultancy for your better future.</blockquote>
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
                                <blockquote> //I have been pursuing my IELTS course from ITEC. This is the best preparing classes I have ever found. One of the best IELTS coaching in Sydney, Australia. Personalize attention, small group size. </blockquote>
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
                                <blockquote>//The university I apply for had all the language requirements, so I took IELTS. Considering the fact that I started for it with ITEC. With a very basic level of writing, I eventually passed the test with my expected result.</blockquote>
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
                <h3 class="section-title">LISTEN FROM<br>
                    OUR<br>
                    STUDENTS</h3>
                <a href="#"></a>
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end testimonials -->


<!-- section by riaz -->
<section class="icon-content-block">
    <div class="container">
        <div class="col-lg-12 wow" data-splitting>
            <h2 class="section-title">//Free Study in Australia Service</h2>
        </div>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/images/placeholder.svg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-secondary">Free Study in Australia</h5>
                    <p class="text-secondary">In ITEC we provide Free Study in Australia Service by our experience of our registered education experts. We help thousands of students to help immigrate and study in Australia. Registered education and immigration consultants provide free education services for international students and education providers.</p>
                    <!-- <p class="text-secondary"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/images/placeholder.svg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-secondary">Free counseling</h5>
                    <p class="text-secondary">We are a consulting firm that has been offering high-quality services to people who want to research, work, or travel in Australia for many years. We provide free counseling and guidance to applicants from all over the world.</p>
                    <!-- <p class="text-secondary"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/images/placeholder.svg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-secondary">PTE Academic</h5>
                    <p class="text-secondary">PTE Academic is a computer-based academic English language exam for non-native English speakers who choose to study in a foreign country. ITEC offers the best PTE course in Australia</p>
                    <!-- <p class="text-secondary"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- section by riaz -->





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
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/australia/logo1.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/australia/logo2.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/australia/logo3.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/canada/logo4.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/canada/logo5.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/canada/logo6.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo1.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo2.png') }}" alt="Image"> </li>
                    <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo3.png') }}" alt="Image"> </li>
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
