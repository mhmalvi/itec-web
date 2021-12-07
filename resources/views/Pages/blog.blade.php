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
    <meta property="og:image" content="{{ $blog->image }}" />
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
                        <figure class="post-image">
                            <img class="lazyload" data-src="{{ $blog->image }}"
                                alt="{{$blog->image_alt}}">
                        </figure>
                        <div class="post-content">
                            <small class="post-date">
                                {{ $blog->created_at }}
                            </small>
                            <h1 class="post-title">{{ $blog->blog_title }}</h1>
                            <div class="post-author">
                                    @if (is_null($blog->user))
                                        <img class="lazyload" data-src="{{ asset('avatar.png') }}" alt="Image">
                                    @else
                                        <img class="lazyload" data-src="{{ asset($blog->user->photo ? 'storage/users/' . $blog->user->photo : 'admin/images/profile.png') }}" alt="Image">
                                    @endif

                                <span>by: 
                                    @if (is_null($blog->user))
                                        Admin
                                    @else
                                        {{ $blog->user->name }}
                                    @endif
                                </span>
                            </div>
                            <!-- end post-author -->
                            {{-- <ul class="post-categories">
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">ECOMMERCE</a></li>
                                <li><a href="#">DIGITAL</a></li>
                            </ul> --}}
                            {{-- <ul class="social-share">
                                <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul> --}}

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
