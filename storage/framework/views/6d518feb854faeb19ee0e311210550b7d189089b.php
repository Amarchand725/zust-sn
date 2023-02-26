<div class="sidemenu-area">
    <div class="responsive-burger-menu d-lg-none d-block">
        <span class="top-bar"></span>
        <span class="middle-bar"></span>
        <span class="bottom-bar"></span>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('home')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-newspaper"></i></span>
                    <span class="menu-title">News Feed</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('notifications') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('notifications')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-bell"></i></span>
                    <span class="menu-title">Notifications</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('chat') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('chat')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-comment-1"></i></span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('friends') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('friends')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-friends"></i></span>
                    <span class="menu-title">Friends</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('groups') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('groups')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-team"></i></span>
                    <span class="menu-title">Groups</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('favorite') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('favorite')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-star"></i></span>
                    <span class="menu-title">Favorite</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('events') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('events')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-calendar"></i></span>
                    <span class="menu-title">Events</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('live-chat') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('live-chat')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-live-chat"></i></span>
                    <span class="menu-title">Live Chat</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('birthday') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('birthday')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-cake"></i></span>
                    <span class="menu-title">Birthday</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('videos') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('videos')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-video"></i></span>
                    <span class="menu-title">Video</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('weather') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('weather')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-cloudy"></i></span>
                    <span class="menu-title">Weather</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(request()->is('marketplace') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('marketplace')); ?>" class="nav-link">
                    <span class="icon"><i class="flaticon-online-shopping"></i></span>
                    <span class="menu-title">Marketplace</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH C:\wamp64\www\zust-sn\resources\views/frontend/layouts/left-sidebar.blade.php ENDPATH**/ ?>