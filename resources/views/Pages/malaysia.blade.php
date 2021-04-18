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
                <h1>STUDY IN MALAYSIA</h1>
                <p>
                    ITEC is affiliated with numerous colleges of Malaysia.
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
                    <h3 class="section-title">Why Malaysia</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7" data-aos="fade-down">
                    <p class="text-justify">
                        Studying in Malaysia can be a feasible alternative to European, Canadian or Australian schools for
                        those with a limited budget, don’t worry as you will be joining with more than 40,000 students from
                        100 different countries. The courses are conducted in English entirely, which is one of the
                        underlying reasons behind such massive popularity among students seeking high and quality education.
                        At a significantly lower costs, students can attain same level of education quality offered by
                        universities across the world. We have known Malaysia like the back of our hands, so if you are
                        indeed willing to complete your higher education there, let us know and we would love to guide you
                    </p>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->
    <section class="works itec-bg-img malaysia">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow" data-splitting>
                    <h3 class="section-title text-center">Why Study In Malaysia</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-down">
                    <p class="text-center">
                        Malaysia has become a favourite destination for tertiary education with over 40,000 international
                        students from over 100 countries studying in Malaysia. Malaysia has become centre of academic and
                        higher education excellence due to the following reasons
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Quality Education Programs</h4>
                        <p>Want to get ahead in your career? Many employers worldwide actively seek or value an
                            international study experience when recruiting. By studying here, you will gain the skills,
                            knowledge and experience that employers value. With strong international business, creative and
                            research sectors, Europe is a great place to build your career.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Part-Time Work While Studying</h4>
                        <p>Malaysia’s law allows students to work 20 hours per week while studying. This gives chance to
                            students to earn extra pocket money to buy books and for other leisure activities.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Multicultural Studying Environment</h4>
                        <p>International students studying in Malaysia will get to experience of living in a plural and
                            multicultural society. The diverse ethnics of Malaysia will enrich students’ understanding of
                            different cultures, ethnic groups and traditions throughout the world. The three major races are
                            Malays, Chinese and Indians. Apart from mixing with Malaysian students, international students
                            are exposed to other students from different nationalities. They also get to experience the
                            different cuisines speciality by different races. If stay long, they may learn some cooking
                            skills to cook when they are back to their home country..</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Low Cost Of Living & Tuition Fees</h4>
                        <p>One of the main reason why study in Malaysia is that the tuition fees of high quality programmes
                            are very reasonable and highly affordable. The low cost of living is contributed mainly due to
                            the ringgit value is lower compared to other currency, thus results in enormous savings by the
                            students. A student can live comfortably for about RM 1,200 – 1,800 per month (USD 380 – USD 570
                            per month)</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Courses Are Conducted In English</h4>
                        <p>English is the primary medium of instruction for all courses and programs conducted at the
                            private higher educational institutions. For those whom are less proficient in English, there
                            are many schools and institutions offering basic English courses.</p>
                    </div>
                    <div class="content-box" data-aos="zoom-in-up">
                        <h4>Safe & Comfortable Place To Study</h4>
                        <p>Malaysia is geographically safe country free from natural disasters, with its modern
                            infrastructure and efficient transportation system, Malaysia makes a safe and comfortable place
                            to live and study. Your children can utilise their MM2H Visa without the need to apply for
                            specific student visa to study at any reputable international schools in Malaysia. However,
                            student visa is required only if they were to study at the university level.</p>
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
