@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="videos/video02.mp4" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h2 class="section-title text-light">{{ $course->course_code }}</h2>
                <h2 class="section-title text-light">{{ $course->course_name }}</h2>
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
                    <h3 class="section-title">IT IS ALL <br>
                        COMPLETED IN 4 STEPS</h3>
                </div>
                <!-- end col-12	 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>01</small>
                    <h6>Free Skills Assessment</h6>
                    <p>
                        Speak to Skills Certified Australia about your goals, and allow us to guide you towards the
                        qualification that will help you reach them.
                    </p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>02</small>
                    <h6>Portfolio of Experience</h6>
                    <p>
                        Your dedicated consultant will guide you through the process of putting together a portfolio of
                        evidence. This can contain overseas qualifications, transcripts, certificates, photos and videos,
                        samples or work examples, letters of reference, your current resume, etc.
                    </p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>03</small>
                    <h6>Evidence Review</h6>
                    <p>Once one of our partner registered training organisations (RTOs) has assessed your portfolio, the
                        assessor assigned to your case may be in touch if any additional evidence is required. If you have
                        any weak areas, the RTO may assign a trainer to upskill you at no cost to you.</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>04</small>
                    <h6>You’re qualified!</h6>
                    <p>Skills Certified Australia is partnered with Registered Training Organisations whose qualifications
                        are nationally recognised in Australia, and are the same as the qualification you would receive from
                        full time study. Qualifications can also be useful for licensing or immigration purposes</p>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->
    <section class="intro-image light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <figure class="post-image text-center">
                        <img src="{{ !is_null($course->thumbnail) ? asset('storage/courses/' . $course->thumbnail) : asset('assets/images/1.jpg') }}"
                            alt="Image">
                    </figure>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            <div class="row justify-content-center my-4 text-light">
                <div class="col-md-10">
                    <h4>Qualification Overview:</h4>
                    <p>
                        {!! $course->course_desc !!}
                    </p>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end intro-image -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">
                        <a href="{{ route('file.download', $course->checklist) }}">CLICK HERE</a> TO DOWNLOAD THE CHECK
                        LIST
                    </h3>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
