@extends('layouts.app')

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/video02.mp4') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>MIGRATION</h1>
                <p>
                    ITEC is affiliated with numerous attorneys currently practicing in states of Australia, Canada and
                    Europe ready to make the migrational arrangements for you abroad.
                </p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="works itec-bg-img migration">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">A Certified Migration Agency In Bangladesh</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <div class="inner-text" data-aos="zoom-out">
                        <p class="text-justify wow bounceInUp">
                            Having Our Own Headquarter Currently Operating Out Of Sydney, We Are Already A Certified
                            Migration
                            Agency In Bangladesh.
                            ITEC is affiliated with numerous attorneys currently practicing in states of Australia, Canada
                            and
                            Europe ready to make the migrational arrangements for you abroad.Beginning this year, we
                            extended
                            our operation beyond Europe and Canada.
                            The immigration attorneys currently practising in Canada as well as Europe are going to explain
                            everything about their immigration process and costs to you in person. As an internationally
                            recognized agency, we have always maintained complete transparency throughout our whole process.
                            So,
                            go ahead and take the eligibility test on our website by filling up the necessary details. Find
                            out
                            whether or not your skills can come to use in any of these foreign lands.
                        </p>
                    </div>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- end works -->
    <section class="works gallary">
        <div class="wow py-3" data-splitting>
            <h3 class="section-title text-center">
                Lorem ipsum <br> dolor sit amet
            </h3>
        </div>
        <ul>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/works08.jpg') }}" alt="Image">
                </figure>
            </li>
        </ul>
    </section>
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">Apply Now</h3>
                </div>
                <div class="col-lg-7">
                    <form id="migration-form" name="contact" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" autocomplete="off"
                                placeholder="Enter Your Name" required />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" autocomplete="off"
                                placeholder="Your Email Address" required />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" id="contact"
                                placeholder="Enter Your Contact Number" autocomplete="off" required />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="nationality" id="nationality"
                                placeholder="Enter Your Nationality" autocomplete="off" required />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <select name="qualification" id="qualification" class="form-control">
                                <option value selected disabled>Select Qualification You Looking For</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <button id="submit" type="submit" name="submit">Submit Now</button>
                        </div>
                        <!-- end form-group -->
                    </form>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
