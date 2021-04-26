@extends('layouts.app')

@push('seo')
    @each('components.meta_tags', $metaTags, 'metaTag', 'components.meta_empty')
    @each('components.meta_keys', $metaKeys, 'metaKey', 'components.meta_empty')
    @if (!is_null($blog->meta_des))
        <meta name="description" content="{{ $blog->meta_des }}">
    @endif
@endpush

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="videos/video02.mp4" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>BLOG</h1>
                <p>We provide a free day to experience our benefits of digital world</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="post single">
                        <figure class="post-image">
                            <img src="{{ asset('storage/blogs/' . $blog->thumbnailOne) }}" alt="Image">
                        </figure>
                        <div class="post-content">
                            <small class="post-date">
                                {{ $blog->created_at }}
                            </small>
                            <h3 class="post-title">{{ $blog->blog_title }}</h3>
                            <div class="post-author">
                                <img src="{{ asset($blog->user->photo ? 'storage/users/' . $blog->user->photo : 'admin/images/profile.png') }}"
                                    alt="Image">
                                <span>by: {{ $blog->user->name }}</span>
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
