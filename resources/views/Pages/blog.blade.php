@extends('layouts.app')

@section('title', $blog->blog_title)

@push('seo')
    @if (!is_null($blog->meta_tags))
        <meta name="tags" content="{{ $blog->meta_tags }}">
    @endif
    @if (!is_null($blog->meta_keys))
        <meta name="keyword" content="{{ $blog->meta_keys }}">
    @endif
    @if (!is_null($blog->meta_des))
        <meta name="description" content="{{ $blog->meta_des }}">
    @endif
@endpush

@push('og')
    <meta property="og:title" content="{{ $blog->blog_title }}" />
    <meta property="og:image" content="{{ $blog->thumbnail }}" />
@endpush

@push('css')
    <style>
        .page-header .inner h3 {
        color: #fff;
        font-weight: 800;
        font-size: 10vw;
        letter-spacing: -1px;
    }
    </style>
@endpush

@section('content')
    <header class="page-header">
        <div class="video-bg img-bg img-bg-7"></div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h3>BLOG</h3>
                <p>We provide a free day to experience our benefits of digital world</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="post single">
                        <div class="row">
                            <div class="col-md-5">
                                <figure class="post-image">
                                    <img class="lazyload" data-src="{{ $blog->thumbnail }}" alt="{{$blog->thumbnail_alt}}">
                                </figure>
                            </div>
                            <div class="col-md-6 offset-md-1 d-flex align-items-center">
                                <div>
                                    <h1 class="post-title font-weight-bold">{{ $blog->blog_title }}</h1>
                                
                                    <small class="post-date">
                                        {{ $blog->created_at }}
                                    </small>
                                    
                                    <div class="post-author">
                                        <span>Author: 
                                            @if (is_null($blog->user))
                                                Admin
                                            @else
                                                {{ $blog->user->name }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-content px-0 text-justify">
                            {!! $blog->blog_des !!}
                        </div>
                        <!-- end post-content -->
                    </div>
                    <!-- end post -->
                </div>
                <!-- end col-9 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
@endsection