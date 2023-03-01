<div class="sidemenu-area">
    <div class="responsive-burger-menu d-lg-none d-block">
        <span class="top-bar"></span>
        <span class="middle-bar"></span>
        <span class="bottom-bar"></span>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-newspaper"></i></span>
                    <span class="menu-title">News Feed</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('notifications') ? 'active' : '' }}">
                <a href="{{ route('notifications') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-bell"></i></span>
                    <span class="menu-title">Notifications</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('chat') ? 'active' : '' }}">
                <a href="{{ route('chat') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-comment-1"></i></span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('friends') ? 'active' : '' }}">
                <a href="{{ route('friends') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-friends"></i></span>
                    <span class="menu-title">Friends</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('groups') ? 'active' : '' }}">
                <a href="{{ route('groups') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-team"></i></span>
                    <span class="menu-title">Groups</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('pages') ? 'active' : '' }}">
                <a href="{{ route('pages') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-team"></i></span>
                    <span class="menu-title">Pages</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('favorite') ? 'active' : '' }}">
                <a href="{{ route('favorite') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-star"></i></span>
                    <span class="menu-title">Favorite</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('events') ? 'active' : '' }}">
                <a href="{{ route('events') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-calendar"></i></span>
                    <span class="menu-title">Events</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('live-chat') ? 'active' : '' }}">
                <a href="{{ route('live-chat') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-live-chat"></i></span>
                    <span class="menu-title">Live Chat</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('birthday') ? 'active' : '' }}">
                <a href="{{ route('birthday') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-cake"></i></span>
                    <span class="menu-title">Birthday</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('videos') ? 'active' : '' }}">
                <a href="{{ route('videos') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-video"></i></span>
                    <span class="menu-title">Video</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('weather') ? 'active' : '' }}">
                <a href="{{ route('weather') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-cloudy"></i></span>
                    <span class="menu-title">Weather</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('marketplace') ? 'active' : '' }}">
                <a href="{{ route('marketplace') }}" class="nav-link">
                    <span class="icon"><i class="flaticon-online-shopping"></i></span>
                    <span class="menu-title">Marketplace</span>
                </a>
            </li>
        </ul>
    </div>
</div>
