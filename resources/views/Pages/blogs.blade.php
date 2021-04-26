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
                    <div class="row">
                        @forelse ($blogs as $item)
                            <div class="col-lg-6">
                                <div class="card blog-card">
                                    <a href="">
                                        <img src="{{ asset('storage/blogs/' . $item->thumbnail) }}" class="card-img-top"
                                            alt="..." />
                                    </a>
                                    <div class="card-body">
                                        <h4>
                                            <a href="{{ route('blog.detail', $item->blog_slug) }}">
                                                <strong>{{ $item->blog_title }}</strong>
                                            </a>
                                        </h4>
                                        <p class="card-text">
                                            <small class="text-muted"><b>By:&nbsp;</b>{{ $item->user->name }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse
                        <!-- end post -->
                    </div>
                    {{-- <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">PREV</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">NEXT</a>
                        </li>
                    </ul> --}}

                    {{ $blogs->links() }}
                </div>
                <!-- end col-8 -->
                <div class="col-lg-3">
                    {{-- <aside class="sidebar">
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
                    <!-- end sidebar --> --}}
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
@endsection
