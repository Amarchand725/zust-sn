<div class="others-option-for-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
            </div>
        </div>

        <div class="container">
            <div class="option-inner">
                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <a href="index.html" class="home-btn"><i class="flaticon-home"></i></a>
                    </div>

                    <!-- Friend Requests -->
                    <?php echo $__env->make('frontend.layouts.top-nav.res-menu-option.res-friend-request-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Friend Requests -->

                    <!-- Messages -->
                    <?php echo $__env->make('frontend.layouts.top-nav.res-menu-option.res-message-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Messages -->

                    <!-- Notifications -->
                    <?php echo $__env->make('frontend.layouts.top-nav.res-menu-option.res-notification-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Notifications -->

                    <!-- Languages -->
                    <?php echo $__env->make('frontend.layouts.top-nav.res-menu-option.res-language-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Languages -->

                    <!-- Profile -->
                    <?php echo $__env->make('frontend.layouts.top-nav.res-menu-option.res-profile-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Profile -->

                    <div class="option-item">
                        <div class="search-box">
                            <form>
                                <input type="text" class="input-search" placeholder="Search...">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/layouts/top-nav/res-menu-option/res-menu-option.blade.php ENDPATH**/ ?>