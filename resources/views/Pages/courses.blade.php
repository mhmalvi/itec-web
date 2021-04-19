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
                <h1>Building & Constructions</h1>
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
                    <div class="card mb-3" data-aos="zoom-in" data-aos-duration="1000">
                        <a href="" class="d-block ">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/1.jpg') }}" alt="Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end post -->
                    <div class="card mb-3" data-aos="zoom-in" data-aos-duration="1000">
                        <a href="" class="d-block ">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/1.jpg') }}" alt="Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end post -->
                    <div class="card mb-3" data-aos="zoom-in" data-aos-duration="1000">
                        <a href="" class="d-block ">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/1.jpg') }}" alt="Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end post -->
                </div>
                <!-- end col-8 -->
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <div class="widget">
                            <h4 class="title">CATEGORIES</h4>
                            <ul class="categories">
                                <li><span>10</span><a href="#">BUSINESS & FINANCE</a></li>
                                <li><span>22</span><a href="#">AUTOMOTIVE</a></li>
                                <li><span>74</span><a href="#">CIVIL CONSTRUCTION</a></li>
                                <li><span>4</span><a href="#">COMMUNITY SERVICES</a></li>
                                <li><span>53</span><a href="#">FITNESS & RECREATION</a></li>
                                <li><span>14</span><a href="#">HAIR & BEAUTY</a></li>
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
