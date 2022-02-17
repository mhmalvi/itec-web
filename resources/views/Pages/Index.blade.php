@extends('layouts.app')

@section('title', 'International Training and Education Counsel')

@push('seo')
    <meta name="description" content="ITEC is the best education consultant & migration agency in Australia. Those who want to study, work or travel to Australia will get the best consultancy from our expert." />
@endpush

@push('css')
    <style>
    .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 26px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        color: #fff;
        font-size: 5vw;
        font-weight: 900;
        font-family: 'Roboto', sans-serif;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
@endpush

@section('content')
    {{-- <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
    </div> --}}

    <header class="slider">
        <div class="swiper mySwiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="{{ asset('images/slider4.webp') }}">
                    ACHIEVE <br> PROFESSIONAL <br> QUALIFICATION
                </div>
                <div class="swiper-slide" data-background="{{ asset('images/slider3.webp') }}">
                    RPL FOR <br> SKILLED PEOPLE
                </div>
                <div class="swiper-slide" data-background="{{ asset('images/slider2.webp') }}">
                    CERTIFY <br> GOVERNMENT <br> AUTHORIZED
                </div>
            </div>
        </div>
    </header>

    <section class="icon-content-block py-5 mb-0">
        <div class="container">
            <div id="find_course">
                <find-course-component></find-course-component>
            </div>
        </div>
    </section>

    <!-- end slider -->

    <section class="intro pb-0 pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card rpl-step-item h-100">
                                <div class="card-body text-center">
                                    <h1 class="section-title card-title">
                                        <img src="{{ asset('rpl-steps/step-1.png') }}"
                                            class="rpl-step-image" alt="Step 1">
                                    </h1>
                                    <h4 class="section-title">FREE SKILLS ASSESSMENT</h4>
                                    <p>
                                        A free, no obligation, RPL skills check provided by an experienced ITEC representative
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card rpl-step-item h-100">
                                <div class="card-body text-center">
                                    <h1 class="section-title card-title">
                                        <img src="{{ asset('rpl-steps/step-2.png') }}"
                                            class="rpl-step-image" alt="Step 2">
                                    </h1>
                                    <h4 class="section-title">EVIDENCE PORTFOLIO</h4>
                                    <p>
                                        Compiling and submitting your 'Experience Portfolio' to provide relevant documentation such as photos and videos of you on the job, references, previous qualifications, current resume etc.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card rpl-step-item h-100">
                                <div class="card-body text-center">
                                    <h1 class="section-title card-title">
                                        <img src="{{ asset('rpl-steps/step-3.png') }}"
                                            class="rpl-step-image" alt="Step 3">
                                    </h1>
                                    <h4 class="section-title">SKILLS CHECK</h4>
                                    <p>
                                        A qualified assessor, from one of our partnering RTOs, will review the evidence and determine if you are competent in the units for that qualification via an RPL assessment.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card rpl-step-item h-100">
                                <div class="card-body text-center">
                                    <h1 class="section-title card-title">
                                        <img src="{{ asset('rpl-steps/step-4.png') }}"
                                            class="rpl-step-image" alt="Step 4">
                                    </h1>
                                    <h4 class="section-title">QUALIFIED!</h4>
                                    <p>
                                        If the RTO assesses you as competent in all required units of competency, then a qualification will be awarded by the registered training organisation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 py-3 d-flex justify-content-center">
                            <a href="{{ route('check-rpl-eligibility') }}" class="blue-btn">Check Your RPL Eligibility</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="icon-content-block py-0 mb-0">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 px-0">
                    <img src="{{ asset('images/rpl-details.webp') }}" alt="RPL Details">
                </div>

                <div class="col-md-6 d-flex align-items-center text-left">
                    <div class="row py-5">
                        <div class="col-12">
                            <p class="section-title section-title-sm">
                                Having your skills recognised through Recognition of Prior Learning (RPL) may have a wide range of benefits for your career and lifestyle.
                            </p>
                        </div>
                        <div class="col-12">
                            <p class="section-title section-title-sm">
                                An initial assessment could help you achieve a nationally recognised qualification through ITEC Australia and its partner RTOs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients shadow-0 py-0 bg-gray">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 py-5">
                    <h3 class="section-title">All qualifications are provided by our partner RTO’s</h3>

                    <a href="{{ route('trainings') }}" class="blue-btn">View Qualifications</a>
                </div>
                <div class="col-md-6 px-0">
                    <img src="{{ asset('blogImages/Steps to Get Qualified for Certification.jpg') }}" alt="RPL Details 2">
                </div>
            </div>
        </div>
    </section>

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
                                        class="lazyload" data-src="{{ asset('images/home/1.webp') }}" alt="Image" width="1310" height="478">
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('images/home/2.webp') }}" alt="Image" width="1310" height="478">
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                    </div>
                    <!-- end office-slider -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="testimonials mt-3">
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
                                        By RPL (Recognition of Prior Learning) process, ITEC helped me to understand my strengths, weaknesses and interests, and improved my confidence and motivation to learn.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/testimonials/1.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Zac Morice</h6>
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
                                        The RPL (Recognition of Prior Learning) process was very useful to maximize my potential and to aid development of my career.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/testimonials/2.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Kate Buxton</h6>
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
                                        The RPL (Recognition of Prior Learning) was the most powerful process for my career planning and ITEC really helped me through-out the process.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/testimonials/3.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Dominic Howie</h6>
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
                                        The experienced professional assessors from ITEC, with their professional judgments helped me for an effective RPL (Recognition of Prior Learning) process.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/testimonials/5.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Alyssa Sandes</h6>
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
                                        I have never thought I could get nationally recognized qualification by my experience. Thanks to ITEC and their RPL (Recognition of Prior Learning) process.
                                    </blockquote>
                                    <div class="reviewer"> <img class="lazyload" data-src="{{ asset('images/testimonials/4.webp') }}"
                                            alt="Image">
                                        <div class="reviewer-infos">
                                            <h6>Jessica Florina</h6>
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
                                <img class="lazyload" data-src="{{ asset('images/rto/uct.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/bright.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/nta.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/atr.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/aibt.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/lead.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/via.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/rockford.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <img class="lazyload" data-src="{{ asset('images/rto/tkl.webp') }}" alt="Image" width="150px" height="150px">
                            </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                    </div>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->

            <div class="d-flex justify-content-center">
                <a href="{{route('rto-partner')}}" class="blue-btn">Join as RTO Partner</a>
            </div>
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
                            <img class="lazyload" data-src="{{ !is_null($item->thumbnail) ? asset('storage/industry/' . $item->thumbnail) : asset('images/course/course.jpg') }}"
                                alt="" width="447" height="532">
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
    <script src="{{asset('js/subscriber.js')}}"></script>
    <script src="{{ asset('js/find_course.js') }}"></script>

    <script>
        $(document).ready(function(){
            setTimeout(() => {
                $("#exampleModalCenter").modal('show');
            }, 5000);
        })
    </script>
@endpush
