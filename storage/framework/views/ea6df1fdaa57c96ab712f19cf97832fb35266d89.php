<?php $__env->startSection('content'); ?>
     <!-- Start Content Page Box Area -->
     <div class="content-page-box-area">
        <div class="page-banner-box bg-11">
            <h3>Weather</h3>
        </div>

        <div class="weather-body">
            <div class="weather-image-wrap">
                <a href="#"><img src="<?php echo e(asset('public/frontend')); ?>/assets/images/weather/weather-2.png" alt="`image"></a>
            </div>

            <form class="weather-form">
                <div class="title">
                    <h3>Search Location</h3>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Country and Timezone</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Forecast Days</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Temperature Unit</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Check Weather</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Content Page Box Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\zust-sn\resources\views/frontend/home/weather.blade.php ENDPATH**/ ?>