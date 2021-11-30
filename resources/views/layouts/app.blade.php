<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="google-site-verification" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#75dab4" />
    <title>@yield('title') - ITEC</title>
    <link href="{{ asset('assets/favicon.png') }}" rel="shortcut icon">
    <link rel="canonical" href="{{ URL::current() }}" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta name="title" content="@yield('title') - ITEC" />
    @stack('seo')

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title') - ITEC">
    <meta property="og:site_name" content="International Training and Education Counsel - ITEC">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ URL::current() }}">
    @stack('og')
    {{-- Open Graph --}}

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary">
    @stack('tc')
    {{-- Twitter Card --}}

    <meta property="article:section" content="International Training and Education Counsel">
    <meta property="article:section" content="About Us">
    <meta property="article:section" content="Recognitions of prior learning">
    <meta property="article:section" content="IELTS">
    <meta property="article:section" content="Full Qualification Courses">
    <meta property="article:section" content="Short Courses">

    <meta name="ahrefs-site-verification" content="c6df018699d9864e4f9c1521bf9ee15e4f9385ca41191ae25fe13bc86a28c0ec">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3RZQYK1QW8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3RZQYK1QW8');
    </script>

    @include('layouts.styles')
</head>

<body id="body" data-audio="">
    <div class="preloader">
        <div class="layer"></div>
        <!-- end layer -->
        <div class="inner">
            <figure>
                <img src="{{ asset('images/logo.webp') }}" alt="Image">
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
        <div class="layer" id="socialLayer"></div>
        <!-- end layer -->
        <div class="inner" id="socialInner">
            <h5>Social Share</h5>
            <ul>
                <li>
                    <a href="https://www.facebook.com/ITECOUNSEL.AUSTRALIA/" id="fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/itecounsel" id="tw">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCUKW0wimJCwb4NaItMiK8LA" id="yt">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/itecounsel/" id="inst">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end social-media -->
    <main>
        @if (Route::currentRouteName() != 'check-rpl-eligibility')
            @include('layouts.sidebar')

            <!-- end left-side -->
            <div class="all-cases-link" id="open-rpl-modal">
                <span>CHECK YOUR RPL ELIGIBILITY</span>
                <b><i class="fas fa-tasks"></i></b>
            </div>
            <!-- end all-cases-link -->
        @endif

        @yield('content')
    </main>
    <!-- end main -->

    @if (Route::currentRouteName() != 'check-rpl-eligibility')
        {{-- //RPL Modal --}}
        @include('layouts.rpl-modal')

        {{-- //popup add --}}
        @include('layouts.popup')

        @include('layouts.footer')
        <!-- end footer -->
    @endif

    @include('layouts.scripts')
</body>

</html>
