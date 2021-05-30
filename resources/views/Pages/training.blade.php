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
                    <div class="col-xs-12">
                        <h1>TRAININGS</h1>
                        <br>
                        <h1 class="heading-secondary pr-4">Complete different training courses from our expert trainer</h1>
                        <br>
                        <p class="text-justify pr-4">
                            Make your previous job experience into a successful career in growing industries like; IT, Business, Beauty, Construction, or the Healthcare sector.
                        </p>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>

    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">Our professional trainer is ready to serve your demand</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-12" data-aos="fade-up">
                    <p class="text-justify">
                        Are you a job holder and just looking for a better job, but got rejected repeatedly for no certificate or soft skills? 
                        Then you already step into the right place to develop your working power and knowledge with our specialized training season.
                    </p>
                    <p class="text-justify">
                        We are here to achieve nationally recognized training through Recognition of Prior Learning (RPL) assessment. Get the training & get qualified for a decent and secure job.
                        Don't worry, ITEC Australia is now providing lots of different training courses within your limited budget.
                    </p>
                </div>
                <!-- end col-12	 -->
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- end text-content-block -->
    <section class="blog bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">FULL QUALIFICATION COURSES</h3>
                </div>
                @forelse ($full as $item)
                    <div class="col-lg-4 industry-card course-card" data-aos="fade-up">
                        <a href="{{ route('course.single', $item->course_code) }}">
                            <div class="card mb-3" style="height: 420px;">
                                <img src="{{ !is_null($item->thumbnail) ? asset('storage/courses/' . $item->thumbnail) : asset('assets/images/1.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->course_code }}-{{ $item->course_name }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                        <!-- end post -->
                    </div>
                @empty

                @endforelse
            </div>
            <!-- end row -->
            <div class="d-flex justify-content-center">
                <a href="{{route('trainings.full')}}" class="btn btn-outline-primary">View All</a>
            </div>
        </div>
        <!-- end container -->


        <div class="container pt-15">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">SHORT COURSES</h3>
                </div>
                @forelse ($short as $item)
                    <div class="col-lg-4 industry-card short-card" data-aos="fade-up">
                        <a href="{{ route('course.single', $item->course_code) }}">
                            <div class="card mb-3" style="height: 420px;">
                                <img src="{{ !is_null($item->thumbnail) ? asset('storage/courses/' . $item->thumbnail) : asset('assets/images/1.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->course_code }}-{{ $item->course_name }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                        <!-- end post -->
                    </div>
                @empty

                @endforelse
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{route('trainings.short')}}" class="btn btn-outline-primary">View All</a>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
@endsection
