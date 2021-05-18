@extends('layouts.app')

@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/Europe-bg-video.m4v') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>STUDY IN EUROPE</h1>
                <p>
                    Want to live, study & work in Europe ? Get free consultation from ITEC.
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
                    <h3 class="section-title">About Universities in Europe</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7" data-aos="fade-down">
                    <p class="text-justify">
                        Perhaps the most critical aspect of your decision to visit Europe is learning more about yourself.
                        Once you know what you want to accomplish, you will find the best place in Europe to learn, live,
                        and develop.<br><br>
                        In Europe you will have diverse countries with plenty to see and do while you're there. Make
                        connections to see if you can find off-the-beaten-path destinations while learning more about the
                        city where you live. Simply get involved and help in every way you can. The freedom and excitement
                        that comes with attending university will rub off on you.<br><br>

                        You already have a well-known characteristic if you choose to live and learn in Europe: a sense of
                        adventure! As an international student, you will be exposed to a wide variety of fresh and exciting
                        experiences.

                    </p>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="testimonials mt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow" data-splitting>
                    <h3 class="section-title text-center">Why Study In Europe</h3>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12" data-aos="fade-down">
                    <p class="text-center">
                        International student requirements in Europe differ from country to country and can be influenced by
                        where you are from. We've put together a series of Education Guides for countries around Europe to
                        support students with their questions about education in Europe.
                    </p>
                    <h4 class="text-left">You can choose any of the following country to study:</h4><br>
                    {{-- new section by riaz --}}
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Austria</h5>
                                <p class="card-text">Austria has a long history of higher education and cutting-edge science that has earned it a global reputation. Furthermore, Austrians are very hospitable and have excellent social security and economic prosperity. </p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Belgium</h5>
                                <p class="card-text">Belgium has long been regarded as the heart of Western Europe, serving as the official headquarters of the European Union. This small country's history is rich in beauty and culture, manifesting itself in some of Europe's most elegant, fairy-tale settings.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Bulgaria</h5>
                                <p class="card-text">Bulgaria is a crossroads between East and West. It is the birthplace of the first written Slavic language, which is now spoken in Bulgaria, Ukraine, Macedonia, Serbia, Turkey, Greece, and Romania, among other places. Learn more about Bulgarian studies in the sections below.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Croatia</h5>
                                <p class="card-text">Croatia extends from the Alps' eastern edges in the north to the Pannonian lowlands and Danube's banks in the east. Come here to learn about and appreciate a rich historical and cultural heritage while also taking in the stunning scenery!</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Cyprus</h5>
                                <p class="card-text">Cyprus is a good place to study because it has over 300 days of sunshine per year and a summer that lasts from May to October. You can receive a high-quality international education at a low cost if you study in Cyprus. Do you want to study in Cyprus?</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Czech Republic</h5>
                                <p class="card-text">If you're aiming for a unique European study abroad journey, the Czech Republic is the place to go. Prague, Liberec, Brno, and Olomouc are all famous study abroad cities in the Czech Republic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Denmark</h5>
                                <p class="card-text">Denmark combines old-world Nordic elegance with an avowedly forward-thinking culture – the country consistently ranks among the world's most livable, safest, and happiest countries. Getting an education in Denmark puts you right in the middle of this created utopia.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Estonia</h5>
                                <p class="card-text">Few countries could match Estonia's technological advances as one of the first truly digitalized societies in the world. Estonian students are given a glimpse into the future when they begin their schooling.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Finland</h5>
                                <p class="card-text">Are you looking for a Nordic experience? Finland is home to some of Europe's best universities, and it was called the happiest country in the world again in 2019!</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">France</h5>
                                <p class="card-text">Education in France allows students to immerse themselves in the country's sophisticated culture, discover its vibrant towns, and travel through its beautiful countryside. Why not study in France and experience the sumptuous architecture, delectable cuisine, and world-class arts and culture scene for yourself?</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Germany</h5>
                                <p class="card-text">Germany is a highly developed nation with an outstanding standard of living and a social market economy. It is a global forerunner in manufacturing and technology. Germany is the ideal place to visit if you want to see a part of Europe that is both old and new.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Georgia</h5>
                                <p class="card-text">a small country rich in history and culture and home to Georgian, one of the world's most fascinating languages, is located in the Caucasus, where Europe meets the Middle East. While learning, explore Georgia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Greece</h5>
                                <p class="card-text">Spending time in Greece will allow you to not only see the beautiful Mediterranean islands, but also to walk through the ancient streets of Athens. You will encounter a very friendly community in which time and stress are not as important as they might be in your home country.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Hungary</h5>
                                <p class="card-text">Hungary is becoming a more popular study abroad destination, particularly for medical students. Hungary has a vibrant and friendly community, a fascinating past, and beautiful cities in addition to high-quality education. When learning, take advantage of Hungary!</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Iceland</h5>
                                <p class="card-text">The egalitarian nature of Icelandic education is well-known. Many seeking an education in Iceland will find that the whole system openly promotes equal opportunities for everyone, regardless of context.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Ireland</h5>
                                <p class="card-text">dubbed the Emerald Isle for its vibrant nightlife, is known for its history, culture, and vibrant nightlife, especially in Dublin and Cork. The rugged coastline, rolling hills and valleys, and low cost of living in Ireland make it a popular tourist and international student destination.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Italy</h5>
                                <p class="card-text">Italy is a diverse country in terms of its natural beauty, culture, and history. Italy's education system is highly regarded, with a wide variety of excellent academic institutions located across the country and welcoming foreign students. Immerse yourself in Italian culture while studying abroad!</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Latvia</h5>
                                <p class="card-text">Latvia shares borders with other Baltic countries such as Estonia and Lithuania, as well as Belarus, Russia, and Sweden. It has been influenced by the diverse cultures of its neighboring countries as a result of its unique location, providing students with a multi-cultural experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Lithuania</h5>
                                <p class="card-text">Lithuania (or Litvak) is one of the three Baltic States in Northern Europe. Lithuania has lower tuition rates and a lower cost of living than many other countries in the country, making it an ideal location for students looking to save money while studying abroad in Europe.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Luxembourg</h5>
                                <p class="card-text">Luxembourg has a population of over half a million people, and despite its small size, it is known as a European melting pot that will provide all students with an unforgettable learning experience. Learn more about Luxembourg in the sections below.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Scandinavia</h5>
                                <p class="card-text">Do you want to learn about Scandinavian culture, see beautiful scenery, and visit environmentally friendly cities with friendly people? Consider studying in Norway, one of the richest and, arguably, most beautiful countries in Scandinavia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Poland</h5>
                                <p class="card-text">Do you like diverse nature, cities steeped in history, and delicious comfort food after a long exam season? If you answered yes to these three questions, and are looking to study somewhere in Europe - there is a perfect solution for you: Study in Poland!</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Portugal</h5>
                                <p class="card-text">Portugal, a small Mediterranean country, is a diverse and exciting place to study abroad. There are over 125 private and public higher education institutions in Portugal. International students studying in Portugal should look forward to a once-in-a-lifetime experience!</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Romania</h5>
                                <p class="card-text">Romania is a diverse country with something for all, from stunning monasteries to scenic landscapes with beautiful mountains and medieval cities. Romania has some of the most affordable tuition and living costs in the EU, making it an affordable study abroad destination.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Russian</h5>
                                <p class="card-text">Russian culture today is a dynamic blend of tradition and creativity, thanks to its long and varied history. When foreign students think of Russia, they also think of the Red Square and St. Basil's Cathedral in Moscow, as well as the Winter Palace in St. Petersburg.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Slovakia</h5>
                                <p class="card-text">Natural landscapes, mountains, caves, medieval castles and cities, folk architecture, spas, and ski resorts can all be found in Slovakia, also known as the Slovak Republic. As a result, Slovakia is an excellent place to visit when studying.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Spain</h5>
                                <p class="card-text">Spain is a popular study abroad destination for students from all over the world because of its beautiful beaches, laid-back lifestyle, and delicious food. Spain came in first place in educations.com's Top 10 Study Abroad Countries in Europe ranking last year! Learn why 60,000 foreign students come to Spain each year to study!</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Sweden</h5>
                                <p class="card-text">Sweden's education system is no exception to the country's openness to the international community. In Sweden, international students from all over the world study in over 1,000 degree programs taught entirely in English.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Switzerland</h5>
                                <p class="card-text">Switzerland is a small nation with a long tradition of excellence in higher education dating back to 1460. With such a diverse range of higher education institutions, studying in Switzerland will allow you to explore and learn directly related to your interests.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">Netherland</h5>
                                <p class="card-text">The Netherlands is a country in Europe that borders Germany and France. The nation is renowned for its cutting-edge educational practices. The Netherlands has it all, whether you're looking for a bachelor's degree, a diploma program, a master's degree, or a PhD.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card bg-transparent">
                            <div class="card-body ">
                                <h5 class="card-title">Turkey</h5>
                                <p class="card-text">As an international student in Turkey, you will be able to combine modernity with tradition in one of the region's safest and most prosperous nations. You will be more than prepared for a future anywhere in the world thanks to the high standard of education you will get.</p>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h5 class="card-title">United Kingdom</h5>
                                <p class="card-text">The United Kingdom (UK) attracts a diverse number of foreign students from all over the world every semester, with over 150 higher education institutions, including some of the world's most prestigious and top-ranked universities. Learn more about the degrees available in the United Kingdom!</p>
                            </div>
                        </div>

                    </div>
                    {{-- new section by riaz --}}
                </div>
            </div>
            <div class="row align-items-center" data-aos="zoom-in">
                <div class="col-lg-12">
                    <div class="testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Careers</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        Want to get ahead in your career? Many employers worldwide actively seek or value an
                                        international study experience when recruiting. By studying here, you will gain the
                                        skills,
                                        knowledge and experience that employers value. With strong international business,
                                        creative and
                                        research sectors, Europe is a great place to build your career.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Languages</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        There are 24 official languages in the European Union, but did you know that most
                                        countries
                                        across Europe offer study programmes in English too? You’ll also find programmes
                                        taught in other
                                        leading global business languages such as Spanish, French, German, Italian,
                                        Portuguese, Arabic
                                        and more.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Cultural Experience</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        Studying in Europe is not just about lectures and libraries, it is also a
                                        once-in-a-lifetime chance to discover new countries and to discover yourself too!
                                        From the snowy north to the sun-soaked south, across Europe you will find
                                        breath-takingly beautiful landscapes, buzzing cities and vibrant cultures waiting
                                        for you.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Diversity</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        The beauty of Europe is that it offers so much choice. With world-class
                                        universities, higher
                                        education institutions and research institutes, offering 100,000s of Bachelor’s
                                        Degree, Master’s
                                        Degree and PhD/Doctoral programmes, plus short-term study opportunities, you can
                                        choose the
                                        experience that suits you.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>World-Class Education</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        World-leading universities, top facilities and inspirational teaching. in Europe,
                                        you’re at the centre of an international community with a passion for learning. What
                                        makes European universities so strong is the emphasis on creativity, innovation and
                                        support – helping you to reach your true potential.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Support And Friendship</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        Europe is a welcoming, friendly place for students from all around the world.
                                        Europe’s
                                        universities and colleges offer support and social activities to help you feel at
                                        home and
                                        happy.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Scholarships And Costs</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        European countries invest in their higher education systems to help make education
                                        affordable for
                                        students, whilst maintaining high quality standards. Across Europe, tuition fees and
                                        living
                                        costs compare very well to other study destinations. In fact, in some European
                                        countries, study
                                        programmes are free of charge! There are lots of scholarships and financial support
                                        options
                                        available too.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="reviewer">
                                        <div class="reviewer-infos">
                                            <h4>Pioneering Research</h4>
                                        </div>
                                        <!-- end reviewer-infos -->
                                    </div>
                                    <!-- end reviewers -->
                                    <p>
                                        Are you an ambitious researcher looking to boost your career? Europe offers you
                                        great
                                        opportunities. There were 1.58 million full time equivalent researchers in the EU-27
                                        in 2009.
                                        Over the next decade, the European Union is actively looking to attract an
                                        additional 1 million
                                        researchers! Find out more about research jobs, funding and opportunities in Europe.
                                    </p>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                        <div class="swiper-pagination"></div>
                        <!-- end swiper-pagination -->
                    </div>
                    <!-- end testimonials-slider -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end works -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow" data-splitting>
                    <h3 class="section-title">AFFILIATED<br>
                        UNIVERSITIES IN<br>
                        EUROPE</h3>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <ul>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo1.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo2.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo3.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo4.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo5.png') }}"
                                alt="Image"> </li>
                        <li class="reveal-effect masker wow"> <img src="{{ asset('assets/images/europe/logo6.png') }}"
                                alt="Image"> </li>
                    </ul>
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="works gallary">
        <div class="wow py-3" data-splitting>
            <h3 class="section-title text-center">
                Want to live, study & work in Europe ? <br /> Get free consultation from ITEC.
            </h3>
        </div>
        <ul>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/1.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/2.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/3.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/4.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/5.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/6.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/7.jpg') }}" alt="Image">
                </figure>
            </li>
            <li>
                <figure data-aos="zoom-in">
                    <img src="{{ asset('assets/images/europe/8.jpg') }}" alt="Image">
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
