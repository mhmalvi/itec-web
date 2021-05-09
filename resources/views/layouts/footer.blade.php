<footer class="footer">
    <div class="container mt-5">
        <div class="row py-5">
            <div class="col-md-10 mx-auto">
                <div class="footer-industry">
                    <h5>Find Your Qualification</h5>
                    @php
                        $industries = \App\Models\CourseIndustry::all();
                    @endphp

                    <div class="row">
                        @foreach ($industries->chunk(5) as $industry)
                        <div class="col-xs-12 col-md-4">
                            <ul>
                                @forelse ($industry as $item)
                                    <li>
                                        <i class="fas fa-long-arrow-alt-right"></i>&nbsp;
                                        <a
                                            href="{{ route('industry', $item->slug) }}">{{ $item->title }}</a>
                                    </li>
                                @empty
                                    <li>
                                        <a href="#">No Links Found!</a>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-lg-3 col-md-3">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/logow.png') }}" alt="Image">
                </div>
            </div>
            <div class="col-xs-12 col-lg-4 col-md-4">
                <div class="footer-links">
                    <p>
                        <strong>Contact</strong>
                    </p>
                    <ul>
                        <li class="pb-2">
                            Level 1, 7 Greenfield Pde Bankstown, NSW 2200, Sydney, Australia 
                        </li>
                        <li class="py-2">
                            +1300 535 922
                        </li>
                        <li class="py-2">
                            info@itecounsel.com 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 col-md-3">
                <div class="footer-links">
                    <p>
                        <strong>Most Usefull Links</strong>
                    </p>
                    <ul>
                        <li>
                            <a href="{{ route('rpl') }}">More About RPL</a>
                        </li>
                        <li>
                            <a href="{{ route('blogs') }}">Our Blogs</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'migration') }}">Migration</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'tourist-visa') }}">Tourist Visa</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'contact') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-lg-2 col-md-2">
                <ul>
                    <li class="p-2"><a href="https://www.facebook.com/ITECOUNSEL.AUSTRALIA/"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="p-2"><a href="https://twitter.com/itecounsel"><i class="fab fa-twitter"></i></a></li>
                    <li class="p-2"><a
                            href="https://www.linkedin.com/company/itec-international-training-education-counsel/"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li class="p-2"><a href="https://www.instagram.com/itecounsel/"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end col-12 -->
            <div class="col-12">
                <div class="footer-bar"> <span class="copyright">© <span id="year"></span> ITECounsel | All Rights
                        Reserved</span> <span class="creation">Site created by <a href="https://quadque.tech">Quadque
                            Technologies
                            Ltd</a></span> </div>
                <!-- end footer-bar -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
