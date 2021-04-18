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
                <h1>STUDY IN EUROPE</h1>
                <p>
                    ITEC is affiliated with numerous colleges of Europe.
                </p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">Why Europe</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7" data-aos="fade-down">
                    <p class="text-justify">
                        The study curriculum followed by Europe is to induce creativity and sense of innovation among
                        students as well as guide them towards achieving their goals. Presently, we are in collaboration
                        with universities in Poland, Sweden, UK, Norway including Germany as well as France. Reserve your
                        spot today so we could determine your chances of admission to the right university.
                    </p>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->
    <section class="works itec-bg-img europe">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow" data-splitting>
                    <h3 class="section-title text-center">Why Study In Europe</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-down">
                    <p class="text-center">
                        Being able to study in any of the European countries is perhaps a dream come true for those who seek
                        for higher education abroad. Tuition fees along with living expenses are comparatively lesser than
                        other countries such as the USA.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Careers</h4>
                        <p>Want to get ahead in your career? Many employers worldwide actively seek or value an
                            international study experience when recruiting. By studying here, you will gain the skills,
                            knowledge and experience that employers value. With strong international business, creative and
                            research sectors, Europe is a great place to build your career.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Languages</h4>
                        <p>There are 24 official languages in the European Union, but did you know that most countries
                            across Europe offer study programmes in English too? You’ll also find programmes taught in other
                            leading global business languages such as Spanish, French, German, Italian, Portuguese, Arabic
                            and more.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Cultural Experience</h4>
                        <p>Studying in Europe is not just about lectures and libraries, it is also a once-in-a-lifetime
                            chance to discover new countries and to discover yourself too! From the snowy north to the
                            sun-soaked south, across Europe you will find breath-takingly beautiful landscapes, buzzing
                            cities and vibrant cultures waiting for you.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Diversity</h4>
                        <p>The beauty of Europe is that it offers so much choice. With world-class universities, higher
                            education institutions and research institutes, offering 100,000s of Bachelor’s Degree, Master’s
                            Degree and PhD/Doctoral programmes, plus short-term study opportunities, you can choose the
                            experience that suits you.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>World-Class Education</h4>
                        <p>World-leading universities, top facilities and inspirational teaching. in Europe, you’re at the
                            centre of an international community with a passion for learning. What makes European
                            universities so strong is the emphasis on creativity, innovation and support – helping you to
                            reach your true potential.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Support And Friendship</h4>
                        <p>Europe is a welcoming, friendly place for students from all around the world. Europe’s
                            universities and colleges offer support and social activities to help you feel at home and
                            happy.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Scholarships And Costs</h4>
                        <p>European countries invest in their higher education systems to help make education affordable for
                            students, whilst maintaining high quality standards. Across Europe, tuition fees and living
                            costs compare very well to other study destinations. In fact, in some European countries, study
                            programmes are free of charge! There are lots of scholarships and financial support options
                            available too.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Pioneering Research</h4>
                        <p>Are you an ambitious researcher looking to boost your career? Europe offers you great
                            opportunities. There were 1.58 million full time equivalent researchers in the EU-27 in 2009.
                            Over the next decade, the European Union is actively looking to attract an additional 1 million
                            researchers! Find out more about research jobs, funding and opportunities in Europe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end works -->
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
