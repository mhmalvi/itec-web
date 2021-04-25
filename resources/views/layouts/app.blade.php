<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#75dab4" />

    @stack('seo')

    <title>ITECounsel</title>

    @include('layouts.styles')
</head>

<body id="body" data-audio="">
    <div class="preloader">
        <div class="layer"></div>
        <!-- end layer -->
        <div class="inner">
            <figure>
                <img src="{{ asset('assets/images/logow.png') }}" alt="Image">
            </figure>
            <span>Loading</span>
        </div>
        <!-- end inner -->
    </div>
    <!-- end preloader -->
    <div class="page-transition">
        <div class="layer"></div>
        <!-- end layer -->
    </div>
    <!-- end page-transition -->
    @include('layouts.navigation')
    <!-- end site-navigation -->
    <div class="social-media">
        <div class="layer"></div>
        <!-- end layer -->
        <div class="inner">
            <h5>Social Share </h5>
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end social-media -->
    <div class="all-cases">
        <div class="layer"></div>
        <!-- end layer -->
        <div class="inner">
            @include('components.rplForm')
        </div>
        <!-- end inner -->
    </div>
    <!-- end all-cases -->
    <main>
        @include('layouts.sidebar')

        <!-- end left-side -->
        <div class="all-cases-link">
            <span>CHECK YOUR RPL ELIGIBILITY</span>
            <b><i class="fas fa-tasks"></i></b>
        </div>
        <!-- end all-cases-link -->

        @yield('content')
    </main>
    <!-- end main -->


    @include('layouts.footer')
    <!-- end footer -->

    @include('layouts.scripts')
</body>

</html>
