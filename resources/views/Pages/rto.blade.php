@extends('layouts.app')

@section('title', 'RTO Partner')

@push('seo')
    <meta name="description" content="" />
@endpush

@section('content')
    <header class="page-header">
        <div class="video-bg img-bg img-bg-1"></div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>Partner with us</h1>
                <p>RTO partnering. Enhance your RTO.</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">Are you an RTO looking to save time and resources from conducting RPL assessments?</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-12" data-aos="fade-up">
                    <h5>
                        If so, then let accredify do the hard work. We market RPL Australia wide, compile evidence portfolios on your behalf and
                        help you to increase your revenues while reducing the administrative burden that RPL usually requires.
                    </h5>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->

    <section class="icon-content-block pt-250">
        <div class="container">
            <div class="row justify-content-center itec-services">
                <div class="col-md-6 wow" data-splitting>
                    <h3 class="section-title">Partner With Us</h3>
                    <div class="mt-2" id="app">
                        <rto-form-component />
                    </div>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end icon-content-block -->

@endsection
