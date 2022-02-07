@extends('layouts.app')

@push('css')
    <style>
        .card{
            background-color: #f6f6f6 !important;
        }

        .eligibility-form-wrapper{
            font-size: 14px; !important;
        }

        .eligibility-form-wrapper label{
            font-weight: 600 !important; 
        }

        .eligibility-form-wrapper .exp-lbl{
            font-weight: 400 !important;
        }
    </style>
@endpush

@section('title', 'Check your eligibility for rpl')
@section('content')
    <div class="container py-5">
        <h2 class="text-center text-white">Check your eligibility for <br> Recognitions of Prior Learning (RPL)</h2>
        <div class="py-5" id="rpl">
            <div class="row eligibility-form-wrapper">
                <div class="col-md-8">
                    <form-component></form-component>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" id="info">
                        <div class="card-body">
                            <h5>Type of Referees</h5>

                            <div class="py-2 text-justify">
                                <p>
                                    For the RPL process an applicant must provide at least three
                                    referee details. Out of the three: one of your referee must be a
                                    Supervisor at work, who is referred to as ‘Testimonial Referee’
                                    and the other two must be ‘Nominated Referees’, whom your
                                    Assessor will contact for reference check. One of your Nominated
                                    Referee should be able to provide you with ‘Third Party Report'.
                                    The detail explanation of the type of referees are given below:
                                </p>
                                <p>
                                    <strong>Testimonial Referee:</strong> 'Testimonial Referees' are
                                    mostly your Employer, Supervisor, Managers who can provide you
                                    with a testimonial letter declaring that they know you for more
                                    than 1 year and who can declare that you have sufficient job
                                    experience to meet the qualification requirements.
                                </p>
                                <p>
                                    <strong>Nominated Referee:</strong> You should have two
                                    Nominated referee who could either be your colleague,
                                    supervisor, manager and other relevant person, who has worked
                                    with you and can assess your skill and knowledge in relevance to
                                    each unit of competency.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" id="info">
                        <div class="card-body">
                            <h5>HEAD OFFICE</h5>
                            <address>
                                Level 1, 7 Greenfield Parade Bankstown, NSW 2200, Sydney, Australia
                            </address>
                            <address>
                                <p>1300 535 922</p>
                                <a href="javascript:void(0)">info@itecounsel.com</a>
                            </address>
                        </div>
                    </div>
                    <div class="card mb-3" id="info">
                        <div class="card-body">
                            <h5>BANGLADESH BRANCH</h5>
                            <address>
                                Level -7, 8/C, F.R Tower, PanthaPath,<br>Dhaka - 1207, Bangladesh
                            </address>

                            <address>
                                <p>+88 01309 001 813</p>
                                <a href="javascript:void(0)">info@itecounsel.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="text-content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow" data-splitting>
                    <h3 class="section-title">What is Recognition of Prior Learning?</h3>
                </div>

                <div class="col-lg-8">
                    <p class="text-justify py-2 px-0">
                        RPL (Recognition of Prior Learning) is a method that recognizes the skills and
                        abilities you've developed through prior training, which involves both formal and non-formal
                        learning, as well as work experience and volunteer work. You will get your certification without
                        having to repeat the same learnings you've already done thanks to RPL on individual units.
                    </p>
                    <p class="text-justify py-2 px-0">
                        All students have the right to have their previous expertise, experience, and
                        training recognized under the Australian Qualification Framework (AQF), which governs education
                        in Australia. This allows them to advance more quickly through and through qualifications.
                    </p>
                    <p class="text-justify py-2 px-0">
                        Each Registered Training Organization has its own policies and procedures for
                        determining the RPL eligibility, but the basic principles remain the same. Your job or school
                        experience and qualifications will help you complete a certification faster and reduce the time
                        commitment of taking a course to get closer to your dream career.
                    </p>
                </div>
            </div>

            <br>

            <div class="row mt-5 pt-5">
                <div class="col-12 wow" data-splitting>
                    <h3 class="section-title text-center">FOUR EASY STEPS TO GET QUALIFIED</h3>
                </div>
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>01</small>
                    <h6> FREE SKILLS ASSESSMENT</h6>
                    <p class="text-left">
                        A free, no obligation, RPL skills check provided by an experienced ITEC representative
                    </p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>02</small>
                    <h6>EVIDENCE PORTFOLIO</h6>
                    <p class="text-left">Compiling and submitting your 'Experience Portfolio' to provide relevant
                        documentation such as photos
                        and videos of you on the job, references, previous qualifications, current resume etc.</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>03</small>
                    <h6>SKILLS CHECK</h6>
                    <p class="text-left">A qualified assessor, from one of our partnering RTOs, will review the evidence
                        and determine if you
                        are competent in the units for that qualification via an RPL assessment</p>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow" data-splitting> <small>04</small>
                    <h6>QUALIFIED!</h6>
                    <p class="text-left">If the RTO assesses you as competent in all required units of competency, then a
                        qualification will
                        be awarded by the registered training organisation</p>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection

@push('vue')
    <script src="{{asset('js/rpl.js')}}" defer></script>
@endpush
