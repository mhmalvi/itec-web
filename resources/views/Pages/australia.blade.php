@extends('layouts.app')

@push('meta-description')
    <meta name="description"
        content="Find globally recognized study programs in Australia, a sunny higher education destination that meets European and Asian expectations." />
@endpush

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/the-city-of-perth-in-australia.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>STUDY IN <br> AUSTRALIA</h1>
                <br>
                <h1 class="heading-secondary">Want to study in Australia? Get consultancy from ITEC.</h1>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">ABOUT STUDY <br> IN AUSTRALIAN <br> UNIVERSITY</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7" data-aos="fade-up">
                    <p class="text-justify">
                        Universities with well-known organizations such as the G8, ATN, and IRU set the bar for excellence.
                        This can be a huge game-changer for you in the future if you're looking for jobs. Australia has
                        risen to prominence as a provider of high-quality higher education. Degrees and certificates from
                        Australian higher education institutions are regarded as of high standard around the world.
                    </p>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow" data-splitting>
                    <h3 class="section-title text-center">Academic Excellence</h3>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12" data-aos="fade-up">
                    <p class="text-center">
                        There are 37 government-funded universities in Australia, two private universities, and several
                        other specialist institutions that provide accredited higher education courses. The University of
                        Sydney is Australia's oldest university, having been founded in 1850, followed three years later by
                        the University of Melbourne.Other prominent universities include the University of Adelaide, the
                        Australian National University in Canberra, Monash University, and the University of New South
                        Wales,
                        all of which are part of the Group of Eight leading tertiary institutions.
                    </p>
                </div>
            </div>
            <div class="row align-items-center" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Quality and Standards</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        According to the 2019 global Quality-of-Life Index, all of Australia's major cities
                                        perform well in global comparative livability surveys, with Melbourne topping The
                                        Economist's 2019 World's Most Livable Cities list,
                                        followed by Sydney and Perth in seventh and ninth places, respectively.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Intakes</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        Universities deliver two primary intakes: June/July and January/February.
                                        In certain universities, admissions are held in March and November.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Employment</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        A full-time International student can work part-time as per the given guidelines.
                                        A full-time degree student can work up to 40 hours fortnightly during term-time and
                                        full-time during vacations.
                                        A full-time student can also work on a work placement as part of the course.
                                        A student can earn from $16 – $25 per hour i.e. $1,280 – $2,000 per month.
                                        After the successful completion of a Bachelors's or Masters a student can apply for
                                        a 2-year Post-Study Work Permit.
                                    </p>
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
    <!-- end works -->
    <section class="works gallary">
        <div class="container">
            <div class="wow py-3" data-splitting>
                <h3 class="section-title text-center">
                    Want to live, study & work in Australia ? <br /> Get free consultation from ITEC.
                </h3>
            </div>
            <ul>
                <li>
                    <figure data-aos="zoom-in">
                        <img src="{{ asset('assets/images/australia/1.jpg') }}" alt="Image">
                    </figure>
                </li>
                <li>
                    <figure data-aos="zoom-in">
                        <img src="{{ asset('assets/images/australia/2.jpg') }}" alt="Image">
                    </figure>
                </li>
                <li>
                    <figure data-aos="zoom-in">
                        <img src="{{ asset('assets/images/australia/3.jpg') }}" alt="Image">
                    </figure>
                </li>
                <li>
                    <figure data-aos="zoom-in">
                        <img src="{{ asset('assets/images/australia/4.jpg') }}" alt="Image">
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <section class="clients bg-gray">
        <div class="container">
            <div class="apply" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 px-0 d-none d-sm-block">
                        <div>
                            <img src="{{asset('assets/images/apply.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 apply-form">
                        <form id="migration-form" name="contact" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" autocomplete="off"
                                    placeholder="Enter Your Name" required />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email" autocomplete="off"
                                    placeholder="Your Email Address" required />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" id="contact"
                                    placeholder="Enter Your Contact Number" autocomplete="off" required />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="nationality" id="nationality"
                                    placeholder="Enter Your Nationality" autocomplete="off" required />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="nationality" id="nationality"
                                    placeholder="Enter Your Desired Qualification Name" autocomplete="off" required />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">Apply Now</button>
                            </div>
                            <!-- end form-group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
