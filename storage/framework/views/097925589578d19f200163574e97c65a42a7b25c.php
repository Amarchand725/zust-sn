<div class="col-lg-3 col-md-12">
    <aside class="widget-area">
        <div class="widget widget-weather">
            <div class="weather-image">
                <a href="#"><img src="<?php echo e(asset('public/frontend')); ?>/assets/images/weather/weather.jpg" alt="image"></a>
            </div>
        </div>

        <!-- Birthday widget -->
        <?php echo $__env->make('frontend.layouts.right-widget.birthday-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Birthday widget -->

        <!-- Event widget -->
        <?php echo $__env->make('frontend.layouts.right-widget.event-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Event widget -->

        <!-- Following widget -->
        <?php echo $__env->make('frontend.layouts.right-widget.following-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Following widget -->
    </aside>
</div>
<?php /**PATH C:\wamp64\www\zust-sn\resources\views/frontend/layouts/right-widget/right-widget-area.blade.php ENDPATH**/ ?>