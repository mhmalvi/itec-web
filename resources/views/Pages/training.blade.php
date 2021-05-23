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
                        <h1 class="heading-secondary">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h1>
                        <br>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor, sem id faucibus bibendum, risus orci vestibulum leo, vulputate consequat leo ipsum nec turpis.
                            Suspendisse sem sem, vehicula ut diam sed, pharetra condimentum arcu. Morbi ultricies ullamcorper orci et consectetur.
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
                <div class="col-lg-4 wow" data-splitting>
                    <h3 class="section-title">Neque porro quisquam</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-8" data-aos="fade-up">
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor, sem id faucibus bibendum, 
                        risus orci vestibulum leo, vulputate consequat leo ipsum nec turpis.
                    </p>
                    <br>
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor, sem id faucibus bibendum, 
                        risus orci vestibulum leo, vulputate consequat leo ipsum nec turpis.
                    </p>
                    <br>
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor, sem id faucibus bibendum, 
                        risus orci vestibulum leo, vulputate consequat leo ipsum nec turpis.
                    </p>
                    <br>
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor, sem id faucibus bibendum, 
                        risus orci vestibulum leo, vulputate consequat leo ipsum nec turpis.
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
                <button type="button" id="load">Load More</button>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
@endsection
