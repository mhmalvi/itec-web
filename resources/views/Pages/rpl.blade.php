@extends('layouts.app')

@push('meta-description')
    <meta name="description"
        content="Recognition of Prior Learning acknowledges skills gained through formal and informal learning as well as work experience. The method evaluates proof of your competency to see whether you meet the criteria." />
@endpush

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
                        <br>
                        <h1 class="heading-secondary">GET YOUR RECOGNITION OF PRIOR LEARNING CERTIFICATE</h1>
                        <br>
                        <p class="text-justify">
                            Sometimes experience is more valuable than a qualification. Thanks to Recognition of Prior
                            Learning, or RPL, you can now and the time it takes you to complete a course and get started
                            working on your career goals sooner by using your previous expertise, experience, and working
                            knowledge.
                        </p>
                    </div>

                    <div class="col-xs-12 col-lg-3 d-none d-lg-block d-xl-block">
                        <div class="border">
                            <div class="p-3">
                                <h3 class="text-center text-light">GET IN TOUCH</h3>
                                <p class="text-center">
                                    <small>for a free skill test</small>
                                </p>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" name="name" id="" class="form-control my-3"
                                            placeholder="Your Name" />
                                        <input type="email" name="email" id="" class="form-control my-3"
                                            placeholder="Your Email Address" />
                                        <input type="text" name="phone" id="" class="form-control my-3"
                                            placeholder="You Phone Number" />
                                        <textarea name="message" id="" rows="3" class="form-control my-3"
                                            placeholder="Message"></textarea>
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
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">What is Recognition of Prior Learning?</h3>
                </div>

                <div class="col-lg-7" data-aos="fade-up">
                    <p class="text-justify py-2">
                        RPL (Recognition of Prior Learning) is a method that recognizes the skills and
                        abilities you've developed through prior training, which involves both formal and non-formal
                        learning, as well as work experience and volunteer work. You will get your certification without
                        having to repeat the same learnings you've already done thanks to RPL on individual units.
                    </p>
                    <p class="text-justify py-2">
                        All students have the right to have their previous expertise, experience, and
                        training recognized under the Australian Qualification Framework (AQF), which governs education
                        in Australia. This allows them to advance more quickly through and through qualifications.
                    </p>
                    <p class="text-justify py-2">
                        Each Registered Training Organization has its own policies and procedures for
                        determining the RPL eligibility, but the basic principles remain the same. Your job or school
                        experience and qualifications will help you complete a certification faster and reduce the time
                        commitment of taking a course to get closer to your dream career.
                    </p>
                </div>
            </div>

            <br>

            <div class="row mt-5 pt-5">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">FOUR EASY STEPS TO GET QUALIFIED</h3>
                </div>
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>01</small>
                    <h6> FREE SKILLS ASSESSMENT</h6>
                    <p class="text-left">
                        A free, no obligation, RPL skills check provided by an experienced ITEC representative
                    </p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>02</small>
                    <h6>EVIDENCE PORTFOLIO</h6>
                    <p class="text-left">Compiling and submitting your 'Experience Portfolio' to provide relevant
                        documentation such as photos
                        and videos of you on the job, references, previous qualifications, current resume etc.</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>03</small>
                    <h6>SKILLS CHECK</h6>
                    <p class="text-left">A qualified assessor, from one of our partnering RTOs, will review the evidence
                        and determine if you
                        are competent in the units for that qualification via an RPL assessment</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>04</small>
                    <h6>QUALIFIED!</h6>
                    <p class="text-left">If the RTO assesses you as competent in all required units of competency, then a
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
                <div class="col-xs-12 d-block d-sm-none mx-auto">
                    <div class="border">
                        <div class="p-3">
                            <h3 class="text-center text-light">GET IN TOUCH</h3>
                            <p class="text-center text-light">
                                <small>for a free skill test</small>
                            </p>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control my-3"
                                        placeholder="Your Name" />
                                    <input type="email" name="email" id="" class="form-control my-3"
                                        placeholder="Your Email Address" />
                                    <input type="text" name="phone" id="" class="form-control my-3"
                                        placeholder="You Phone Number" />
                                    <textarea name="message" id="" rows="3" class="form-control my-3"
                                        placeholder="Message"></textarea>
                                </div>

                                <button type="submit" class="touch-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">The Recognition of Prior Learning Process</h3>
                </div>

                <p class="text-center py-5" data-aos="fade-up">
                    The process varies by provider, but all must adhere to the AQF's policy of providing
                    a
                    consistent and open process in which every student is properly considered. In most cases, a
                    self-assessment
                    in the form of a document will be required to be completed, which will include all applicable work
                    experience and qualifications already obtained. This is normally done online, along with the uploading
                    of
                    all other supporting documents. An assessor will look over all of this information and, if they believe
                    it
                    is appropriate evidence, an interview will be scheduled.
                    Prepare to clarify your previous jobs, the job you did, and the duties you had during the interview.
                    Make
                    sure it's important to the course you want to take and includes proof of your work achievements.
                </p>
            </div>

            <br>

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

            <br>

            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-text" data-aos="fade-up">
                        <h2 class="card-title pb-5">The Benefits of RPL</h2>
                        <p class="text-justify wow bounceInUp">There are many reasons to consider going through the process
                            and applying for Prior Learning Recognition. It may not only cut down on the amount of time you
                            spend studying a
                            course, but it can also help you qualify for courses for which you do not have the prerequisite
                            formal
                            qualifications.
                            The AQF has created a guide that Registered Training Organizations can follow when deciding the
                            amount of credit your RPL may have against a course if you've completed a structured course.
                            It's important to remember that the above is an AQF recommendation; however, credit is usually
                            agreed between the applicant and the organization. Certificates may be used to earn RPL, but the
                            sum
                            depends on the organization. All formal requirements must be applicable to the course in which
                            you
                            wish to enroll.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-text" data-aos="fade-up">
                        <h2 class="card-title pb-5">Who Can Apply for the RPL Process?</h2>
                        <p class="text-justify wow bounceInUp">Anyone who has previous knowledge, experience, or skills that
                            are relevant to
                            the
                            course of study that they want to complete can apply for this process regardless of whether your
                            training or experience was in Australia or abroad. To be successful, you need to be able to
                            provide
                            evidence of the skills and knowledge you have gained.
                        </p>
                    </div>
                </div>
            </div>
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
                <div class="col-12">
                    <div class="rto-slider" data-aos="fade-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/rto/UCT.png') }}" alt="Image">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/rto/BRIGHT.png') }}" alt="Image" style="max-width: 120px !important;">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/rto/NTA.png') }}" alt="Image" style="max-width: 300px !important;">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/rto/ATR.png') }}" alt="Image" style="max-width: 170px !important;">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/rto/alpha.png') }}" alt="Image" style="max-width: 170px !important;">
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
@endsection
