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
                <h1>CONTACT</h1>
                <p>ITECounsel can help you to get your experience recognised!</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3 class="section-title">SAY HELLO <br>TO REACH US</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-4 col-md-6">
                    <h6>HEAD OFFICE</h6>
                    <address>
                        Level 1, 7 Greenfield Pde Bankstown,<br>NSW 2200, Sydney, Australia
                    </address>
                    <address>
                        <p>+1300 535 922</p>
                        <a href="javascript:void(0)">info@itecounsel.com</a>
                    </address>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-3 col-md-6">
                    <h6>OFFSHORE BRANCH</h6>
                    <address>
                        Level -7, 8/C, F.R Tower, PanthaPath,<br>Dhaka - 1207, Bangladeshh
                    </address>

                    <address>
                        <p>+88 01309 001 813</p>
                        <a href="javascript:void(0)">info@itecounsel.com</a>
                    </address>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-4">
                    <h3>Australia</h3>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.8570010205053!2d151.03202011550917!3d-33.91907978064232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bc1b224cf2c5%3A0x11c945bdf4b2d7bf!2sLEVEL%201%2F7%20Greenfield%20Parade%2C%20Bankstown%20NSW%202200%2C%20Australia!5e0!3m2!1sen!2sbd!4v1618304659561!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- end map -->
                </div>
                <!-- end col-5 -->
                <div class="col-lg-4">
                    <div class="contact-form">
                        <form id="contact" name="contact" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="name" autocomplete="off" required>
                                <span>Your name</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="email" id="email" autocomplete="off" required>
                                <span>Your e-mail</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" autocomplete="off" required>
                                <span>Subject</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <textarea name="message" id="message" autocomplete="off" required></textarea>
                                <span>Your message</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">
                                    <strong>Submit Now<b></b> <i></i></strong>
                                </button>
                            </div>
                            <!-- end form-group -->
                        </form>
                        <!-- end form -->
                        <div class="form-group">
                            <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully!
                                We will be in touch as soon as we can. </div>
                            <!-- end success -->
                            <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing
                                and submitting the form again. </div>
                            <!-- end error -->
                        </div>
                        <!-- end form-group -->
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- col-7 -->
                <!-- end row -->
                <div class="col-lg-4">
                    <h3>Bangladesh</h3>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.24124030753345!2d90.38007109664254!3d23.75237686112746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9fe484befeb%3A0xf868db2756385e6e!2sITEC%20BD%20Office!5e0!3m2!1sen!2sbd!4v1618301934233!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- end map -->
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->

    <section>
    </section>
@endsection
