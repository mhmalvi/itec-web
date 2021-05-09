@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="video-bg">
            <video src="videos/video02.mp4" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-9">
                        <h2 class="section-title text-light">{{ $course->course_code }}</h2>
                        <h2 class="section-title text-light">{{ $course->course_name }}</h2>
                    </div>
                    <div class="col-xs-12 col-lg-3 d-none d-lg-block d-xl-block">
                        <div class="border">
                            <div class="p-3">
                                <h3 class="text-center text-light">GET IN TOUCH</h3>
                                <p class="text-center">
                                    <small>for a free skill test</small>
                                </p>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" name="name" id="" class="form-control my-3" placeholder="Your Name"/>
                                        <input type="email" name="email" id="" class="form-control my-3" placeholder="Your Email Address"/>
                                        <input type="text" name="phone" id="" class="form-control my-3" placeholder="You Phone Number"/>
                                        <textarea name="message" id="" rows="3" class="form-control my-3" placeholder="Message"></textarea>
                                    </div>
        
                                    <button type="submit" class="touch-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="text-content-block">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">IT IS ALL <br>
                        COMPLETED IN 4 STEPS</h3>
                </div>
                <!-- end col-12	 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>01</small>
                    <h6>Free Skills Assessment</h6>
                    <p>
                        Speak to Skills Certified Australia about your goals, and allow us to guide you towards the
                        qualification that will help you reach them.
                    </p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>02</small>
                    <h6>Portfolio of Experience</h6>
                    <p>
                        Your dedicated consultant will guide you through the process of putting together a portfolio of
                        evidence. This can contain overseas qualifications, transcripts, certificates, photos and videos,
                        samples or work examples, letters of reference, your current resume, etc.
                    </p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>03</small>
                    <h6>Evidence Review</h6>
                    <p>Once one of our partner registered training organisations (RTOs) has assessed your portfolio, the
                        assessor assigned to your case may be in touch if any additional evidence is required. If you have
                        any weak areas, the RTO may assign a trainer to upskill you at no cost to you.</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>04</small>
                    <h6>You’re qualified!</h6>
                    <p>Skills Certified Australia is partnered with Registered Training Organisations whose qualifications
                        are nationally recognised in Australia, and are the same as the qualification you would receive from
                        full time study. Qualifications can also be useful for licensing or immigration purposes</p>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->
    <section class="intro-image light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <figure class="post-image text-center">
                        <img src="{{ !is_null($course->thumbnail) ? asset('storage/courses/' . $course->thumbnail) : asset('assets/images/1.jpg') }}"
                            alt="Image">
                    </figure>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            <div class="row justify-content-center my-4 text-light">
                <div class="col-md-10">
                    <div id="accordion" class="w-100 pt-5 accordion">
                        <div class="card rounded-0">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4>Qualification Overview:</h4>
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <h5>Qualification Name:</h5>
                                <p>
                                    {{$course->course_name}}
                                </p>
            
                                <h5>Qualification Code and Units of Competency:</h5>
                                <p>
                                    {{ $course->course_code }}
                                </p>
            
                                <h5>Duration:</h5>
                                <p>
                                    Within four weeks of receiving sufficient and complying evidence of competency in all applied for units of competency.
                                </p>
                            </div>
                          </div>
                        </div>
                        <div class="card rounded-0">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    <h4>Let us certify your skills:</h4>
                                </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">

                            </div>
                          </div>
                        </div>
                        <div class="card rounded-0">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                    <h4>Evidence of learning:</h4>
                                </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    You will need to provide a range of evidence to assist your assessor to make a decision about your competence. 
                                    The types of evidence you may be asked to provide can include:
                                </p>
                                <ul>
                                    <li>ID</li>
                                    <li>Resume</li>
                                    <li>Payslips/work contract/ABN if self-employed</li>
                                    <li>Letter of Employment</li>
                                    <li>Current employment contracts</li>
                                    <li>Letters of reference from licensed tradesmen you have worked with.</li>
                                    <li>Videos or photos of your work.</li>
                                    <li>Evidence of overseas qualifications.</li>
                                    <li>Transcripts or assessments frome related previous qualifications.</li>
                                    <li>Apprenticeship papers.</li>
                                    <li>Safe Work Method Statements&nbsp;</li>
                                    <li>Job Safety Analysis'</li>
                                    <li>Quotes/Invoice and stock orders</li>
                                    <li>Job Cards</li>
                                    <li>Maintenance Reports/Service sheets&nbsp;</li>
                                    <li>Testing and diagnostic sheets</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card rounded-0">
                          <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h4>Ease of getting qualified:</h4>
                              </button>
                            </h5>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>You can be certified anywhere in Australia with a nationally recognised qualification</li>
                                    <li>Have your certification within four weeks of evidence being received</li>
                                    <li>Gain accreditation from a reputable Registered Training Organisation</li>
                                    <li>Customer Satisfaction Guarantee</li>
                                    <li>Get your FREE RPL Quote today!</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card rounded-0">
                          <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h4>This qualification will be offered by one of the following RTOs:</h4>
                              </button>
                            </h5>
                          </div>
                          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">

                            </div>
                          </div>
                        </div>
                    </div>

                    <p class="pt-5">View Other Qualifications in 
                        <a href="{{ route('industry', $course->courseIndustry->slug) }}" class="text-danger">
                            {{$course->courseIndustry->title}}
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 d-block d-sm-none mx-auto">
                    <div class="border">
                        <div class="p-3">
                            <h3 class="text-center text-light">GET IN TOUCH</h3>
                            <p class="text-center text-light">
                                <small>for a free skill test</small>
                            </p>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control my-3" placeholder="Your Name"/>
                                    <input type="email" name="email" id="" class="form-control my-3" placeholder="Your Email Address"/>
                                    <input type="text" name="phone" id="" class="form-control my-3" placeholder="You Phone Number"/>
                                    <textarea name="message" id="" rows="3" class="form-control my-3" placeholder="Message"></textarea>
                                </div>

                                <button type="submit" class="touch-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end intro-image -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title">
                        <a href="{{ route('file.download', $course->checklist) }}">CLICK HERE</a> TO DOWNLOAD THE CHECK
                        LIST
                    </h3>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end clients -->
@endsection
