@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/rpl-bg-video.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <h1>RPL</h1>
                        <p class="text-justify">
                            Recognition of Prior Learning (RPL) is an assessment process used by RTOs to evaluate a person’s skills,
                            knowledge and experience gained through working and learning, in Australia or overseas, be it through
                            life experience, work or other activities such as volunteering. RTOs can also provide a credit against
                            units of competency, often shortening the time needed to undertake a qualification.
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-4 d-none d-lg-block d-xl-none">
                        <div class="border">
                            <div class="p-3">
                                <h3 class="text-center text-light">GET IN TOUCH</h3>
                                <p class="text-center">
                                    <small>for a free skill test</small>
                                </p>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" name="name" id="" class="form-control my-3" placeholder="Your Name"/>
                                        <input type="email" name="email" id="" class="form-control my-3" placeholder="Your Email Address"/>
                                        <input type="text" name="phone" id="" class="form-control my-3" placeholder="You Phone Number"/>
                                        <textarea name="message" id="" rows="3" class="form-control my-3" placeholder="Message"></textarea>
                                    </div>

                                    <button type="submit" class="touch-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <h3 class="section-title">FOUR EASY STEPS TO <br>GET QUALIFIED</h3>
                </div>
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>01</small>
                    <h6> FREE SKILLS ASSESSMENT</h6>
                    <p class="text-justify">
                        A free, no obligation, RPL skills check provided by an experienced ITEC representative
                    </p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>02</small>
                    <h6>EVIDENCE PORTFOLIO</h6>
                    <p class="text-justify">Compiling and submitting your 'Experience Portfolio' to provide relevant
                        documentation such as photos
                        and videos of you on the job, references, previous qualifications, current resume etc.</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>03</small>
                    <h6>SKILLS CHECK</h6>
                    <p class="text-justify">A qualified assessor, from one of our partnering RTOs, will review the evidence
                        and determine if you
                        are competent in the units for that qualification via an RPL assessment</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>04</small>
                    <h6>QUALIFIED!</h6>
                    <p class="text-justify">If the RTO assesses you as competent in all required units of competency, then a
                        qualification will
                        be awarded by the registered training organisation</p>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->
    <section class="testimonials">
        <div class="container justify-content-center">
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
                                            <a
                                                href="{{ route('course.single', $course->course_code) }}">{{ $course->course_code }}-{{ $course->course_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="{{ route('industry', $item->slug) }}" class="find qualifications">View Qualifications</a>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" id="load" class="load-rpl">Load More</button>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4 text-center" data-aos="fade-up">
                    <div class="service_box">
                        <div class="service_icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h3>Save Money​</h3>
                        <p>
                            Up to 75% cheaper than traditional study; Flexible, interest-free payment.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="service_box">
                        <div class="service_icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <h3>Save Time​</h3>
                        <p>
                            Unless gap training required.
                        </p>
                        <br>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="2500">
                    <div class="service_box">
                        <div class="service_icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3>Save Effort​</h3>
                        <p>Use your experience to improve your career prospects.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
