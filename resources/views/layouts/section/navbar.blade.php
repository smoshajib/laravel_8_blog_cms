<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">

                        <img alt="image" class="rounded-circle" src="{{asset('backend/img/profile_small.jpg')}}"/>


                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{ Auth::guard('admin')->user()->name }}</span>
                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{ route('logout') }}" id="logout-form" method="post">@csrf</form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li>
                <a href="{{ route('home') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Home</span></a>
            </li>
            <li>
                <a href="{{ route('categories.index') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Categories</span></a>
            </li>
            <li>
                <a href="{{ route('posts.index') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Posts</span></a>
            </li>
            <li>
                <a href="{{ route('pages.index') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Pages</span></a>
            </li>
            <li>
                <a href="{{ route('galleries.index') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Galleries</span></a>
            </li>

        </ul>

    </div>
</nav>
