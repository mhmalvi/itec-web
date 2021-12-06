<div class="side-nav-inner">
    <ul class="side-nav-menu scrollable">
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}">
                <span class="icon-holder">
                    <i class="anticon anticon-dashboard"></i>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.blog.create')}}">
                <span class="icon-holder">
                    <i class="anticon anticon-form"></i>
                </span>
                <span class="title">Add New Post</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="anticon anticon-team"></i>
                </span>
                <span class="title">Users</span>
                <span class="arrow">
                    <i class="arrow-icon"></i>
                </span>
            </a>
            <ul class="dropdown-menu" style="display: none;">
                <li>
                    <a href="">All Users</a>
                </li>
                <li>
                    <a href="">New User</a>
                </li>
                <li>
                    <a href="{{route('admin.profile')}}">Change Profile</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                <span class="icon-holder">
                    <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                </span>
                <span class="title">Logout</span>
            </a>
        </li>
        <form action="{{route('logout')}}" method="post" hidden id="logoutForm">
        @csrf
        </form>
    </ul>
</div>