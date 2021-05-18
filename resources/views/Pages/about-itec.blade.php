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
                    <h3 class="section-title">ITEC builds connections, understanding, and trust between people through
                        education and learning.</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-12 wow" data-splitting>
                    <h5>We help young people to gain the skills, confidence, and connections they are looking for to realize
                        their potential and to participate in strong and inclusive communities. We support them to learn
                        English, to get a high-quality education, and to gain internationally recognized qualifications. Our
                        work in arts and culture stimulates creative expression and exchange and nurtures creative
                        enterprise.</h5>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->

    <section class="icon-content-block pt-5">
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
                            <li>Expected Result</li>
                            <li>Experienced Mentors</li>
                            <li>Flexible Batch Times
                            </li>
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
                            <li>Get Certified</li>
                            <li>Boost Your Career</li>
                            <li>Get Your Dream Job</li>
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
                            <li>University Admission</li>
                            <li>Migration</li>
                            <li>Travel Visa</li>
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

    <section class="intro-image mt-5">
        <div class="container pt-5 mt-5">
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

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow" data-splitting>
                    <h3 class="section-title">ALL ABOUT<br>
                        THE OUR TEAM</h3>
                </div>
                <!-- end col-8 -->
                <div class="col-lg-6 wow" data-splitting>
                    <h5>We have been working in Australia since 2019. Every year we connect with thousands of students,
                        educators, policymakers, academics, partners, and civil society.</h5>
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

    {{-- new section by riaz --}}


    <section class="clients">
        <div class="container">
            <div class="row py-5 px-3">
                <div class="col-lg-4 offset-lg-1 order-lg-12">
                    <img src="{{ asset('assets/images/122.jpg') }}" alt="Image">
                </div>
                <!-- end col-7 -->
                <div class="col-lg-7 order-lg-1 py-3">
                    <h2 class="text-left">
                        We are committed to maintaining our leadership role in international education by
                        providing the best resources, information, facilities, and products for international students.
                    </h2>
                    <p class="text-justify">
                        In ITEC you'll find helpful advice pages for international students studying in the United States,
                        the United Kingdom, and Australia, as well as a dedicated study abroad hub for US students who want
                        to travel abroad. You'll also find details on international student loans, student health benefits,
                        international calling cards, scholarship tools, travel, and other helpful resources to aid students
                        in their preparation for their time abroad. Both of our publications and online tools are free to
                        download, and we intend to keep it that way.
                    </p>

                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->


            <div class="row py-5 mt-3 px-3">
                <div class="col-lg-4" data-splitting>
                    <img src="{{ asset('assets/images/123.jpg') }}" alt="Image">
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7 offset-lg-1 py-3">
                    <h2 class="text-left">
                        ITEC quickly gained a reputation for providing high-quality Australian immigration visa services
                    </h2>
                    <p class="text-justify">
                        We help individuals to work, study or immigrant to Australia. The combination enables us to provide
                        a comprehensive range of Australian immigration services. Over the years we have grown from one
                        office and two staff members to four offices and over 15 employees. We now process more than 1,000
                        applications every year for clients from around the world and in Australia.
                    </p>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


@endsection
