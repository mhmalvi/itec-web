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
                    <div class="post">
                        <figure class="post-image">
                            <img src="{{ asset('assets/images/works01.jpg') }}" alt="Image">
                        </figure>
                        <div class="post-content">
                            <small class="post-date">
                                01, September 2019
                            </small>
                            <h3 class="post-title"><a href="#">Legally recognized as the only person who is authorized</a>
                            </h3>
                            <div class="post-author">
                                <img src="{{ asset('assets/images/avatar01.jpg') }}" alt="Image">
                                <span>by <a href="#">Marcus Aurelio</a></span>
                            </div>
                            <!-- end post-author -->
                            <ul class="post-categories">
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">ECOMMERCE</a></li>
                                <li><a href="#">DIGITAL</a></li>
                            </ul>
                            <a href="" class="post-link">READ MORE</a>
                        </div>
                        <!-- end post-content -->
                    </div>
                    <!-- end post -->
                    <div class="post">
                        <figure class="post-image">
                            <img src="{{ asset('assets/images/works02.jpg') }}" alt="Image">
                        </figure>
                        <div class="post-content">
                            <small class="post-date">
                                01, September 2019
                            </small>
                            <h3 class="post-title"><a href="#">Business is the activity of making one's living</a></h3>
                            <div class="post-author">
                                <img src="{{ asset('assets/images/avatar01.jpg') }}" alt="Image">
                                <span>by <a href="#">Marcus Aurelio</a></span>
                            </div>
                            <!-- end post-author -->
                            <ul class="post-categories">
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">ECOMMERCE</a></li>
                                <li><a href="#">DIGITAL</a></li>
                            </ul>
                            <a href="" class="post-link">READ MORE</a>
                        </div>
                        <!-- end post-content -->
                    </div>
                    <!-- end post -->
                    <div class="post">
                        <figure class="post-image">
                            <img src="{{ asset('assets/images/works03.jpg') }}" alt="Image">
                        </figure>
                        <div class="post-content">
                            <small class="post-date">
                                01, September 2019
                            </small>
                            <h3 class="post-title"><a href="#">Making one's living or making money by producing</a></h3>
                            <div class="post-author">
                                <img src="{{ asset('assets/images/avatar01.jpg') }}" alt="Image">
                                <span>by <a href="#">Marcus Aurelio</a></span>
                            </div>
                            <!-- end post-author -->
                            <ul class="post-categories">
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">ECOMMERCE</a></li>
                                <li><a href="#">DIGITAL</a></li>
                            </ul>
                            <a href="" class="post-link">READ MORE</a>
                        </div>
                        <!-- end post-content -->
                    </div>
                    <!-- end post -->
                    <div class="post">
                        <figure class="post-image">
                            <img src="{{ asset('assets/images/works04.jpg') }}" alt="Image">
                        </figure>
                        <div class="post-content">
                            <small class="post-date">
                                01, September 2019
                            </small>
                            <h3 class="post-title"><a href="#">Simply put, it is "any activity or enterprise entered</a>
                            </h3>
                            <div class="post-author">
                                <img src="{{ asset('assets/images/avatar01.jpg') }}" alt="Image">
                                <span>by <a href="#">Marcus Aurelio</a></span>
                            </div>
                            <!-- end post-author -->
                            <ul class="post-categories">
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">ECOMMERCE</a></li>
                                <li><a href="#">DIGITAL</a></li>
                            </ul>
                            <a href="" class="post-link">READ MORE</a>
                        </div>
                        <!-- end post-content -->
                    </div>
                    <!-- end post -->
                    <div class="post">
                        <figure class="post-image">
                            <img src="{{ asset('assets/images/works05.jpg') }}" alt="Image">
                        </figure>
                        <div class="post-content">
                            <small class="post-date">
                                01, September 2019
                            </small>
                            <h3 class="post-title"><a href="#">But this article will not deal with that sense of the
                                    word</a></h3>
                            <div class="post-author">
                                <img src="{{ asset('assets/images/avatar01.jpg') }}" alt="Image">
                                <span>by <a href="#">Marcus Aurelio</a></span>
                            </div>
                            <!-- end post-author -->
                            <ul class="post-categories">
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">ECOMMERCE</a></li>
                                <li><a href="#">DIGITAL</a></li>
                            </ul>
                            <a href="" class="post-link">READ MORE</a>
                        </div>
                        <!-- end post-content -->
                    </div>
                    <!-- end post -->
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">PREV</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">NEXT</a>
                        </li>
                    </ul>
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
                        <div class="widget">
                            <h4 class="title">TOUROG</h4>
                            <p>Interactive digital experiences are continually becoming more <u>amazing</u> and more
                                <u>complex</u> to produce. Our team is specially designed to create successful digital
                                products.
                            </p>
                        </div>
                        <!-- end widget -->
                        <div class="widget">
                            <h4 class="title">SEARCH</h4>
                            <form>
                                <input type="text" placeholder="Search on blog">
                                <button type="submit">SEARCH</button>
                            </form>
                        </div>
                        <!-- end widget -->
                        <div class="widget">
                            <h4 class="title">TAGS</h4>
                            <ul class="tags">
                                <li><a href="#">Animation</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Apps for IOS</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Direction</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#">UI-UX Design</a></li>
                                <li><a href="#">Web Design</a></li>
                            </ul>
                        </div>
                        <!-- end widget -->
                        <div class="widget">
                            <h4 class="title">WORKS</h4>
                            <ul class="mini-works">
                                <li><a href="{{ asset('assets/images/works01.jpg') }}" data-fancybox><img
                                            src="{{ asset('assets/images/works01.jpg') }}" alt="Image"></a></li>
                                <li><a href="{{ asset('assets/images/works02.jpg') }}" data-fancybox><img
                                            src="{{ asset('assets/images/works02.jpg') }}" alt="Image"></a></li>
                                <li><a href="{{ asset('assets/images/works03.jpg') }}" data-fancybox><img
                                            src="{{ asset('assets/images/works03.jpg') }}" alt="Image"></a></li>
                                <li><a href="{{ asset('assets/images/works04.jpg') }}" data-fancybox><img
                                            src="{{ asset('assets/images/works04.jpg') }}" alt="Image"></a></li>
                                <li><a href="{{ asset('assets/images/works05.jpg') }}" data-fancybox><img
                                            src="{{ asset('assets/images/works05.jpg') }}" alt="Image"></a></li>
                                <li><a href="{{ asset('assets/images/works06.jpg') }}" data-fancybox><img
                                            src="{{ asset('assets/images/works06.jpg') }}" alt="Image"></a></li>
                            </ul>
                        </div>
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
