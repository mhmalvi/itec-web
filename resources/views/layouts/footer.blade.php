<footer class="footer">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xs-12 col-lg-3 col-md-3">
                <div class="footer-links">
                    <h5>Most Usefull Links</h5>
                    <ul>
                        <li>
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'contact') }}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('rpl') }}">RPL</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'migration') }}">Migration</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-lg-7 col-md-7">
                <div class="footer-industry">
                    <h5>Find Your Qualification</h5>
                    @php
                        $courses = \App\Models\Course::all()->random(8);
                    @endphp

                    <div class="row">
                        <div class="col-12">
                            <ul>
                                @forelse ($courses as $item)
                                    <li class="py-3">
                                        <i class="fas fa-long-arrow-alt-right"></i>&nbsp;
                                        <a
                                            href="{{ route('course.single', $item->course_code) }}">{{ $item->course_code }}-{{ $item->course_name }}</a>
                                    </li>
                                @empty
                                    <li>
                                        <a href="#">No Links Found!</a>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
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
