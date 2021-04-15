<nav class="site-navigation">
    <div class="layer"></div>
    <!-- end layer -->
    <div class="inner">
        <ul data-splitting>
            <li><a href="{{ route('index') }}">HOME</a></li>
            <li><a href="">ITEC</a> <small>All About Us</small> </li>
            <li><a href="{{ route('page', 'RPL') }}">RPL</a><small>Recognitions of Preior Learning</small></li>
            <li><a href="">ADMISSION</a><i class="fas fa-caret-down"></i><small>Study Abroad</small>
                <ul>
                    <li><a href="">STUDY IN AUSTRALIA</a></li>
                    <li><a href="">STUDY IN EUROPE</a></li>
                    <li><a href="">STUDY IN MALAYSIA</a></li>
                </ul>
            </li>
            <li><a href="">OTHER SERVICES</a><i class="fas fa-caret-down"></i><small>Our Services</small>
                <ul>
                    <li><a href="">PTE</a></li>
                    <li><a href="">IELTS</a></li>
                    <li><a href="">TOURIST VISA</a></li>
                </ul>
            </li>
            <li><a href="{{ route('page', 'Migration') }}">MIGRATIONS</a> <small>Migration Information</small> </li>
            <li><a href="">BLOG</a> <small>Recent posts</small> </li>
            <li><a href="{{ route('page', 'Contact') }}">CONTACT</a> <small>Say hello</small> </li>
        </ul>
    </div>
    <!-- end inner -->
</nav>
