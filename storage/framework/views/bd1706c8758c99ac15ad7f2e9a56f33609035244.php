<div class="option-item">
    <div class="dropdown profile-nav-item">
        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="menu-profile">
                <?php if(Auth::check() && isset(Auth::user()->hasAvatar()->avatar)): ?>
                    <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/user/<?php echo e(Auth::user()->hasAvatar()->avatar); ?>" class="rounded-circle" alt="image">
                <?php else: ?>
                    <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/user/user-1.jpg" class="rounded-circle" alt="image">
                <?php endif; ?>
                <span class="name">
                    <?php if(Auth::check()): ?>
                        <?php echo e(Auth::user()->name); ?>

                    <?php endif; ?>
                </span>
                <span class="status-online"></span>
            </div>
        </a>

        <div class="dropdown-menu">
            <div class="profile-header">
                <h3>Matthew Turner</h3>
                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#55383421213d3022606562153238343c397b363a38"><span class="__cf_email__" data-cfemail="82efe3f6f6eae7f5b7b2b5c2e5efe3ebeeace1edef">[email&#160;protected]</span></a>
            </div>
            <ul class="profile-body">
                <li><i class="flaticon-user"></i> <a href="<?php echo e(route('my-profile')); ?>">My Profile</a></li>
                <li><i class="flaticon-settings"></i> <a href="<?php echo e(route('account-setting')); ?>">Setting</a></li>
                <li><i class="flaticon-privacy"></i> <a href="<?php echo e(route('privacy')); ?>">Privacy</a></li>
                <li><i class="flaticon-information"></i> <a href="<?php echo e(route('help-and-support')); ?>">Help & Support</a></li>
                <li><i class="flaticon-logout"></i>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/layouts/top-nav/menu-option/profile-items.blade.php ENDPATH**/ ?>