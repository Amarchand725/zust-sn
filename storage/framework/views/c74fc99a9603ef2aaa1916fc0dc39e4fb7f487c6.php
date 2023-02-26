<div class="others-options d-flex align-items-center">
    <div class="option-item">
        <a href="<?php echo e(route('home')); ?>" class="home-btn"><i class="flaticon-home"></i></a>
    </div>
    <!-- Menu Option Friend Request Items -->
    <?php echo $__env->make('frontend.layouts.top-nav.menu-option.friend-request-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Menu Option Friend Request Items -->


    <!-- Menu Option Messages -->
    <?php echo $__env->make('frontend.layouts.top-nav.menu-option.message-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Menu Option Messages -->

    <!-- Menu Option Notifications -->
    <?php echo $__env->make('frontend.layouts.top-nav.menu-option.notification-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Menu Option Notifications -->

    <!-- Menu Option Languages -->
    <?php echo $__env->make('frontend.layouts.top-nav.menu-option.language-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Menu Option Languages -->

    <!-- Menu Option Profile -->
    <?php echo $__env->make('frontend.layouts.top-nav.menu-option.profile-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Menu Option Profile -->
</div>
<?php /**PATH C:\wamp64\www\zust-sn\resources\views/frontend/layouts/top-nav/menu-option/menu-option.blade.php ENDPATH**/ ?>