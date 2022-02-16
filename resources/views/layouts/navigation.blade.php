<nav class="site-navigation">
    <div class="layer"></div>
    <!-- end layer -->
    <div class="inner">
        <ul data-splitting>
            <li class="mb-2"><a href="{{ route('index') }}">HOME</a></li>
            <li><a href="{{ route('page', 'about-itec') }}">ITEC</a> <small>All About Us</small> </li>
            <li><a href="{{ route('rpl') }}">RPL</a><small>Recognitions of Prior Learning</small></li>
            <li>
                <div class="nav-tree">
                    <a href="#">ADMISSION</a><i class="fas fa-caret-down"></i><small>Study Abroad</small>
                </div>
                <ul class="mb-4">
                    <li><a href="{{ route('admission', 'australia') }}">STUDY IN AUSTRALIA</a></li>
                    <li><a href="{{ route('admission', 'canada') }}">STUDY IN CANADA</a></li>
                    <li><a href="{{ route('admission', 'europe') }}">STUDY IN EUROPE</a></li>
                    <li><a href="{{ route('admission', 'malaysia') }}">STUDY IN MALAYSIA</a></li>
                </ul>
            </li>
            <li><a href="{{ route('trainings') }}">TRAINING</a><small>Learn about trainigs</small></li>
            <li><a href="{{ route('faqs') }}">FAQ's</a> <small>Frequently Asked Questions</small> </li>
            <li><a href="{{ route('blogs') }}">BLOG</a> <small>Recent posts</small> </li>
            <li><a href="{{ route('page', 'contact') }}">CONTACT</a> <small>Say hello</small> </li>
        </ul>
    </div>
    <!-- end inner -->
</nav>
