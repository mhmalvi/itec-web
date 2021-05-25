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
                <p>International Training & Education Counsel</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">ITEC Builds Connections, Understanding, and Trust Between People Through
                        education and learning.</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-12" data-aos="fade-up">
                    <h5>We help people to gain the skills, confidence, and connections they are looking for to realize
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

    <section class="icon-content-block pt-250">
        <div class="container">
            <div class="row justify-content-center itec-services">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">THE THINGS<br>
                        WE ARE ABLE TO DO</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-3 col-md-3 mt-5" data-aos="fade-up">
                    <a href="{{ route('page', 'ielts') }}">
                        <div class="content-block">
                            <figure> <img src="{{ asset('assets/images/icon01.png') }}" alt="Image"> </figure>
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
                <div class="col-lg-3 col-md-3 mt-5" data-aos="fade-up">
                    <a href="{{ route('rpl') }}">
                        <div class="content-block">
                            <figure> <img src="{{ asset('assets/images/icon02.png') }}" alt="Image"> </figure>
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
                <div class="col-lg-3 col-md-3 mt-5" data-aos="fade-up">
                    <a href="{{ route('admission', 'australia') }}">
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
                    </a>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-3 mt-5" data-aos="fade-up">
                    <a href="">
                        <div class="content-block">
                            <figure> <img src="{{ asset('assets/images/icon04.png') }}" alt="Image"> </figure>
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
        </div>
        <!-- end container -->
    </section>
    <!-- end icon-content-block -->

        <section class="testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-12 wow" data-splitting>
                    <h3 class="section-title">MEET OUR<br>TALENTED TEAM</h3>
                    <a href="#"></a>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-7 order-lg-1" data-aos="fade-up">
                    <img src="{{asset('assets/images/team.jpeg')}}" alt="">
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->

    <section class="clients bg-gray">
        <div class="container">
            <div class="row py-5 px-3" data-aos="fade-up">
                <div class="col-lg-4 offset-lg-1 order-lg-12">
                    <img src="{{ asset('assets/images/122.jpg') }}" alt="Image">
                </div>
                <!-- end col-7 -->
                <div class="col-lg-7 order-lg-1 py-3" data-aos="fade-up">
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
                <div class="col-lg-4" data-aos="fade-up">
                    <img src="{{ asset('assets/images/123.jpg') }}" alt="Image">
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7 offset-lg-1 py-3" data-aos="fade-up">
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
