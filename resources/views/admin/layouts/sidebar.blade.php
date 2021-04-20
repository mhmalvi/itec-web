<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <div class="d-flex justify-content-center">
                        <img alt="image" class="rounded-circle"
                            src="{{ asset(Auth::user()->profile_photo_path ? 'public/storage/users/' . Auth::user()->profile_photo_path : 'admin/images/profile.png') }}"
                            style="max-width: 48px;" />
                    </div>
                </div>
                <div class="logo-element">
                    ITEC
                </div>
            </li>

            {{-- Navigations Starts --}}

            <li>
                <a href="{{ route('index') }}"><i class="fa fa-globe"></i> <span class="nav-label">Visit
                        Site</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-cubes"></i> <span class="nav-label">Attributes</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="">Categories</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Blogs</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="">Post New Blog</a></li>
                    <li><a href="">Manage Blogs</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-cogs"></i> <span class="nav-label">Settings</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="">Profile</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
