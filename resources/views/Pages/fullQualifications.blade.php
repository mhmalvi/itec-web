@extends('layouts.app')

@section('title', 'Full Qualification Courses')

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/rpl-bg-video.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>Full <br> Qualifications</h1>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="row">
                        @forelse ($full as $item)
                            <div class="col-lg-6" data-aos="fade-up">
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
                        {{ $full->links() }}
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
@endsection
