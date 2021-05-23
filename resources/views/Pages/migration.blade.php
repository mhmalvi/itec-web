@extends('layouts.app')

@push('meta-description')
<meta name="description" content="ITEC is a licensed visa and immigration specialist with years of experience assisting people with their migration to Australia. Make an appointment./>
@endpush

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/Migration.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>MIGRATION</h1>
                <br>
                <h1 class="heading-secondary">Professional Australian Migration Services</h1>
                <br>
                <p>
                    
                    ITEC is the most trusted Australian migration services provider in Sydney, and it will assist you by removing all of the hassle from the process and preparing visa applications on behalf of clients to ensure that you get your visa quickly and easily.
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
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">OUR MIGRATION PROCESS</h3>
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="inner-text" data-aos="zoom-out">
                        <p class="text-justify wow bounceInUp">
                            You can sign up for a contract with our licensed migration consultant after our initial consultation (online/email/face-to-face consultation) for Australian migration services. 
                            We'll take care of it for you and prepare your application accordingly. 
                            A full collection of application forms and checklists will be sent to you by our migration agent in Sydney.
                        </p>
                    </div>
                </div>   
                <div class="col-lg-4">
                    <div class="inner-text" data-aos="zoom-out">
                        <p class="text-justify wow bounceInUp">
                            As your case-processor, one dedicated member of staff will be assigned to you. 
                            Our team will continue to assist you at every phase of the process, including training, qualifications evaluation, and filing with the Department of Immigration and Border Protection.
                        </p>
                    </div>
                </div>   
                <div class="col-lg-4">
                    <div class="inner-text" data-aos="zoom-out">
                        <p class="text-justify wow bounceInUp">
                            We use sophisticated migration process, this system helps with collecting all necessary information, fill the necessary DIBP Forms and we also provide a safe and confidential portal. 
                            The portal system allows our clients to safely & securely attach their documents (ready for submission to Department of Immigration). 
                            The documents are encrypted and maintained in a secure environment.
                        </p>
                    </div>
                </div>   
            </div>
        </div>
    </section>
    <!-- end works -->
    <section class="intro gallary">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow" data-splitting>
                    <h3 class="section-title">
                        Immigration Services from <br/> Experienced Migration Agent 
                    </h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-8">
                    <div class="inner-text mt-0" data-aos="zoom-out">
                        <p class="text-justify wow bounceInUp">
                            We've been counselling students for educational Opportunity in Foreign countries.
                            <br/>
                            There are a number of reasons why you should hire a migration agent to assist you in the very complex process of securing an Australian visa. 
                            Below we list common top reasons why hiring a Migration Agent is the best thing you can do when migrating to Australia.
                        </p>
                        <ul class="itec-list">
                            <li>- Talk to one of our best consultants today</li>
                            <li>- Our experts are able to find new growth</li>
                            <li>- Find more information our website</li>
                        </ul>
                        <p class="text-justify wow bounceInUp">
                            If you want to migrate to Australia, there has never been a better option than ITEC. We help clients who wish to study, work or settle in Australia, 
                            have a dream of immigrating to Australia or seek Permanent Residency.
                        </p>
                    </div>
                </div>
                <!-- end col-7 -->
            </div>
    </section>
    <section class="clients bg-gray">
        <div class="container">
            <div class="apply">
                <div class="row">
                    <div class="col-lg-6 px-0 d-none d-sm-block">
                        <div>
                            <img src="{{asset('assets/images/apply.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 apply-form">
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
                                <input type="text" class="form-control" name="nationality" id="nationality"
                                    placeholder="Enter Your Desired Qualification Name" autocomplete="off" required />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">Apply Now</button>
                            </div>
                            <!-- end form-group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
