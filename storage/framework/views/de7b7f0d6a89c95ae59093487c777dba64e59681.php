<?php $__env->startSection('content'); ?>
    <!-- Start Content Page Box Area -->
    <div class="content-page-box-area">
        <div class="row">
            <!-- Left widget-area -->
            <?php echo $__env->make('frontend.layouts.left-widget.left-widget-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Left widget-area -->

            <!-- Post Area -->
            <?php echo $__env->make('frontend.layouts.posts-area.post-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Post Area -->

            <!-- Right widget-area -->
            <?php echo $__env->make('frontend.layouts.right-widget.right-widget-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Right widget-area -->
        </div>
    </div>
    <!-- End Content Page Box Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/index.blade.php ENDPATH**/ ?>