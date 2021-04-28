@extends('layouts.app')

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="videos/video02.mp4" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>{{ $industry->title }}</h1>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @forelse ($courses as $item)
                            <div class="col-lg-6" data-aos="zoom-in">
                                <a href="{{ route('course.single', $item->course_code) }}">
                                    <div class="card mb-3" style="height: 420px;">
                                        <img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="...">
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
                </div>
                <!-- end col-8 -->
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <div class="widget">
                            <h4 class="title">OTHER INDUSTRIES</h4>
                            <ul class="categories">
                                @forelse ($industries as $item)
                                    @if ($item->slug !== request()->segment(1))
                                        <li><span>{{ count($item->courses) }}</span>
                                            <a href="{{ route('industry', $item->slug) }}">{{ $item->title }}</a>
                                        </li>
                                    @endif
                                @empty

                                @endforelse
                            </ul>
                        </div>
                        <!-- end widget -->
                    </aside>
                    <!-- end sidebar -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
@endsection
