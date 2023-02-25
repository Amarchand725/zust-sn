<div class="col-lg-3 col-md-12">
    <aside class="widget-area">
        <!-- Current User Profile -->
        <?php echo $__env->make('frontend.layouts.left-widget.profile-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Current User Profile -->

        <!-- Pages You Liked -->
        <?php echo $__env->make('frontend.layouts.left-widget.page-liked-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Pages You Liked -->

        <!-- Watch Videos -->
        <?php echo $__env->make('frontend.layouts.left-widget.watch-video-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Watch Videos -->

        <!-- Advertisement -->
        <?php echo $__env->make('frontend.layouts.left-widget.advertise-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Advertisement -->

        <!-- Suggest Groups -->
        <?php echo $__env->make('frontend.layouts.left-widget.suggest-groups-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Suggest Groups -->
    </aside>
</div>
<?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/layouts/left-widget/left-widget-area.blade.php ENDPATH**/ ?>