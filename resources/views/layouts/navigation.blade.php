<nav class="site-navigation">
    <div class="layer"></div>
    <!-- end layer -->
    <div class="inner">
        <ul data-splitting>
            <li><a href="{{ route('index') }}">HOME</a></li>
            <li><a href="{{ route('page', 'about-itec') }}">ITEC</a> <small>All About Us</small> </li>
            <li><a href="{{ route('page', 'rpl') }}">RPL</a><small>Recognitions of Preior Learning</small></li>
            <li><a href="#">ADMISSION</a><i class="fas fa-caret-down"></i><small>Study Abroad</small>
                <ul>
                    <li><a href="{{ route('admission', 'australia') }}">STUDY IN AUSTRALIA</a></li>
                    <li><a href="{{ route('admission', 'canada') }}">STUDY IN CANADA</a></li>
                    <li><a href="{{ route('admission', 'europe') }}">STUDY IN EUROPE</a></li>
                    <li><a href="{{ route('admission', 'malaysia') }}">STUDY IN MALAYSIA</a></li>
                </ul>
            </li>
            <li><a href="#">OTHER SERVICES</a><i class="fas fa-caret-down"></i><small>Our
                    Services</small>
                <ul>
                    <li><a href="{{ route('page', 'pte') }}">PTE</a></li>
                    <li><a href="{{ route('page', 'ielts') }}">IELTS</a></li>
                    <li><a href="{{ route('page', 'tourist-visa') }}">TOURIST VISA</a></li>
                </ul>
            </li>
            <li><a href="{{ route('page', 'migration') }}">MIGRATIONS</a> <small>Migration Information</small> </li>
            <li><a href="{{ route('page', 'blogs') }}">BLOG</a> <small>Recent posts</small> </li>
            <li><a href="{{ route('page', 'contact') }}">CONTACT</a> <small>Say hello</small> </li>
        </ul>
    </div>
    <!-- end inner -->
</nav>
