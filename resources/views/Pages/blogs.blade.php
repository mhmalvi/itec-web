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
                        <div class="post">
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
                                    <li><a href="#">{{ $item->category->title }}</a></li>
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
                            <h4 class="title">CATEGORIES</h4>
                            <ul class="categories">
                                <li><span>14</span><a href="#">Web Design</a></li>
                                <li><span>22</span><a href="#">Web Development</a></li>
                                <li><span>74</span><a href="#">e-Commerce</a></li>
                                <li><span>4</span><a href="#">Woo Commerce</a></li>
                                <li><span>64</span><a href="#">Wordpress</a></li>
                                <li><span>53</span><a href="#">App Development</a></li>
                                <li><span>14</span><a href="#">Print Design</a></li>
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
