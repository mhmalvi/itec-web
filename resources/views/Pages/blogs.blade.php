@extends('layouts.app')

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/blog.m4v') }}" muted loop autoplay></video>
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
            <div class="row">
                <div class="col-lg-9">
                    @forelse ($blogs as $item)
                        <div class="post" data-aos="fade-up">
                            <figure class="post-image">
                                <img src="{{ asset('storage/blogs/' . $item->thumbnailTwo) }}" alt="Image">
                            </figure>
                            <div class="post-content">
                                <small class="post-date">
                                    {{ $item->created_at }}
                                </small>
                                <h3 class="post-title">
                                    <a href="{{ route('blog.detail', $item->blog_slug) }}">
                                        {{ $item->blog_title }}
                                    </a>
                                </h3>
                                <div class="post-author">
                                    <span>by <a href="#">{{ $item->user->name }}</a></span>
                                </div>
                                <!-- end post-author -->
                                <ul class="post-categories">
                                    <li><a href="#">{{ $item->category->title }}</a>
                                    </li>
                                </ul>
                                <a href="{{ route('blog.detail', $item->blog_slug) }}" class="post-link">READ MORE</a>
                            </div>
                            <!-- end post-content -->
                        </div>
                    @empty

                    @endforelse
                    <!-- end post -->

                    {{ $blogs->links() }}
                </div>
                <!-- end col-8 -->
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <div class="widget">
                            <h4 class="title wow" data-splitting>INDUSTRIES</h4>
                            <ul class="categories">
                                @forelse ($industries as $item)
                                    <li data-aos="fade-up"><span>{{ count($item->courses) }}</span>
                                        <a href="{{ route('industry', $item->slug) }}">{{ $item->title }}</a>
                                    </li>
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
