@extends('layouts.app')

@push('meta-description')
<meta name="description" content="PTE Academic is a computer-based academic English language exam for non-native English speakers who choose to study in a foreign country. ITEC offers the best PTE course in Australia" />
@endpush

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/pte.mp4') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>PTE</h1>
                <br>
                <h1 class="heading-secondary">PTE Test preparation courses in Australia</h1>
                <br>
                <p>
                    PTE Exam is one of the widely taken English language tests across the globe. For countries like
                    Australia, the PTE test is also used for immigration. The test focuses on the day to day usage of the
                    english language to prepare and evaluate students to live and study in the English speaking countries.
                </p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="text-content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">Let PTE Academic<br>Prepare You<br>For Higher Studies</h3>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7" data-aos="fade-up">
                    <p class="text-justify">
                        In ITEC , Our PTE coaching courses are fully computerized. To simulate the real exam environment, we provide all students with desktop computers. With 40 hours of training time, including lectures, videos, and online practice, you will be completely prepared for all four parts of the PTE Academic exam – 
                        Speaking, Writing, Reading, and Listening – in our complete PTE training course (3 weeks).
                    </p>

                    <br>

                    <p class="text-justify">
                        Join this full section kit PTE classes if you want to increase your chances of passing the exam. You'll learn technical and successful tactics, get ample computer practice time, 
                        and learn some great practical tips to help your test go smoothly on the day.
                    </p>

                    <br>

                    <p class="text-justify">
                        ITEC Academy focuses on PTE preparation. We are able to provide excellent service and consistency. Since we have 1000+ students who have achieved their desired PTE ranking,
                        we are Australia's No. 1 PTE coaching center.
                    </p>
                </div>
                <!-- end col-12	 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->
    <section class="icon-content-block py-5">
        <div class="container mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">WE PROVIDE THE BEST PTE TRAINING</h3>
                </div>
                <div class="col-lg-3 col-md-4" data-aos="fade-up">
                    <div class="content-block">
                        <figure> <img src="{{ asset('assets/images/ielts/calendar.png') }}" alt="Image"> </figure>
                        <h6>DURATION</h6>
                        <ul>
                            <li>3 Months</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <!-- end col-12 -->
                <div class="col-lg-3 col-md-4" data-aos="fade-up">
                    <div class="content-block selected">
                        <figure> <img src="{{ asset('assets/images/ielts/money.png') }}" alt="Image"> </figure>
                        <h6>FEES</h6>
                        <ul>
                            <li>AUD $399.00</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-4" data-aos="fade-up">
                    <div class="content-block">
                        <figure> <img src="{{ asset('assets/images/ielts/location.png') }}" alt="Image"> </figure>
                        <h6>LOCATION</h6>
                        <ul>
                            <li>Australia Office</li>
                        </ul>
                    </div>
                    <!-- end content-block -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end team -->
    <section class="clients bg-gray">
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col-lg-5">
                    <h3 class="section-title text-left wow" data-splitting>
                        PTE Advance Course No.1 PTE coaching classes in Sydney
                    </h3>
                </div>
                <div class="col-lg-7" data-aos="fade-up">
                    <div class="p-2 text-justify">
                        <p><strong>Target PTE Score:</strong> 65+, 79+</p>
                    </div>
                    <div class="p-2 text-justify">
                        <p><strong>Next Intake: </strong>PTE Weekend Course on every Saturday;</p>
                    </div>
                    <div class="p-2 text-justify">
                        <p><strong>PTE Weekdays Course: </strong>Every Monday ;</p>
                        <p>
                            All persons, other than Australian citizens require a visa or authority to enter Australia. All Indian citizens require an Australia visa.
                        </p>
                    </div>
                    <div class="p-2 text-justify">
                        <p>Course <strong>Fee 50% Off</strong> Call us Now!</p>
                    </div>
                    <div class="p-2 text-justify">
                        <p><strong>Classes Options: </strong>Morning ; Evening | Create your own flexible timetable</p>
                    </div>
                    <div class="p-2 text-justify">
                        <p>Course <strong>Fee 50% Off</strong> Call us Now!</p>
                    </div>
                    <div class="p-2 text-justify">
                        <p><strong>PTE Preparation</strong></p>
                        <p>
                            This course is designed for students who have never taken the PTE exam or for students who have taken the PTE exam but need to improve their performance. Our experts have had great success in assisting students in achieving their target grades, 
                            which have ranged from 65 to as high as 79 and 90 in a limited period of time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
