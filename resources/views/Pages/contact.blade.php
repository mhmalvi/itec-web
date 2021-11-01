@extends('layouts.app')
@section('title', 'Contact Us')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.min.css') }}">
@endpush

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg img-bg img-bg-8"></div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>CONTACT</h1>
                <p>ITEC can help you to get your experience recognised!</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">SAY HELLO <br>TO REACH US</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <h6>HEAD OFFICE</h6>
                    <address>
                        Level 1, 7 Greenfield Pde Bankstown,<br>NSW 2200, Sydney, Australia
                    </address>
                    <address>
                        <p>1300 535 922</p>
                        <a href="javascript:void(0)">info@itecounsel.com</a>
                    </address>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <h6>OFFSHORE BRANCH</h6>
                    <address>
                        Level -7, 8/C, F.R Tower, PanthaPath,<br>Dhaka - 1207, Bangladesh
                    </address>

                    <address>
                        <p>+88 01309 001 813</p>
                        <a href="javascript:void(0)">info@itecounsel.com</a>
                    </address>
                </div>
                <!-- end col-3 -->
            </div>
            <div class="card shadow p-0 mb-5 bg-white rounded border-0">
                <div class="card-body p-0">
                    <div class="row">
                        <!-- end col-5 -->
                        <div class="col-lg-6 pr-5 contact-card-inner" data-aos="fade-up">
                            <form id="contactForm">
                                <ul id="errors"></ul>
                                <div class="form-group">
                                    <input id="name" class="form-control" type="text" name="name"
                                        placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input id="email" class="form-control" type="email" name="email"
                                        placeholder="Enter Your Email Address">
                                </div>
                                <div class="form-group">
                                    <input id="phone" class="form-control" type="text" name="contact"
                                        placeholder="Enter Your Cantact Number">
                                </div>
                                <div class="form-group">
                                    <input id="date" class="form-control" type="text" name="date"
                                        placeholder="Choose Appointment Date">
                                </div>
                                <div class="form-group">
                                    <textarea id="msg" class="form-control" name="msg" rows="8"
                                        placeholder="Your Message (255 character max)"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary" id="form-submit">Send</button>
                            </form>
                            <!-- end form -->
                        </div>
                        <div class="col-lg-6 pl-5 contact-card-inner contact-card-right">
                            <h3 class="section-title wow" data-splitting>
                                NEED <br>CONSULTANCY?
                            </h3>
                            <p class="text-justify pr-3">
                                We know you have a lot of questions in your minds right now. Do not hesitate to ask us
                                anything you want to know. We got all the answers for you! Feel free to contact us at any
                                time.
                            </p>
                        </div>
                        <!-- col-7 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
    <section class="contact py-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.8570010205053!2d151.03202011550917!3d-33.91907978064232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bc1b224cf2c5%3A0x11c945bdf4b2d7bf!2sLEVEL%201%2F7%20Greenfield%20Parade%2C%20Bankstown%20NSW%202200%2C%20Australia!5e0!3m2!1sen!2sbd!4v1618304659561!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- end map -->
                </div>
                <div class="col-lg-6 p-0">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.24124030753345!2d90.38007109664254!3d23.75237686112746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9fe484befeb%3A0xf868db2756385e6e!2sITEC%20BD%20Office!5e0!3m2!1sen!2sbd!4v1618301934233!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- end map -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script>
        $('#date').datetimepicker({
            step: 30,
            allowTimes: [
                '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00',
                '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30',
                '16:00', '16:30', '17:00', '17:30', '18:00', '18:30'
            ],

        });

        $("#contactForm").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "api/book-appointment",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $("#form-submit").text('Please Wait...').fadeIn("slow");
                    $("#form-submit").prop('disabled', true);
                },
                success: function(data) {
                    $("#contactForm").trigger('reset');
                    toastr.success("Your response is recorded!", "success");
                    $("#form-submit").text('Send');
                    $("#form-submit").prop('disabled', false);
                },
                error: function(err){
                    let errors = err.responseJSON.errors;
                    var errorList = "";
                    for (const error in errors) {
                        errors[error].map(res => {
                            errorList += `<li class="text-danger">${res}</li>`;
                        });
                    }
                    setTimeout(function() {
                        $("#errors").html(errorList);
                        $("#form-submit").text('Send');
                        $("#form-submit").prop('disabled', false);
                    }, 3000);
                }
            });
        })

    </script>
@endpush
