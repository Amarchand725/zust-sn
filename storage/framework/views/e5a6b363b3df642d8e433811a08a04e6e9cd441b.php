<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="main-responsive-menu">
            <div class="responsive-burger-menu d-lg-none d-block">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand d-flex align-items-center">
                <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/logo.png" alt="image">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-burger-menu m-auto">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>

                <div class="search-box m-auto">
                    <form>
                        <input type="text" class="input-search" placeholder="Search...">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                </div>

                <!-- Top Option Menu -->
                <?php echo $__env->make('frontend.layouts.top-nav.menu-option.menu-option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Top Option Menu -->
            </div>
        </nav>
    </div>

    <!-- Top Option Responsive Menu -->
    <?php echo $__env->make('frontend.layouts.top-nav.res-menu-option.res-menu-option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Top Option Responsive Menu -->
</div>
<?php /**PATH C:\wamp64\www\zust-sn\resources\views/frontend/layouts/top-nav/top-navbar.blade.php ENDPATH**/ ?>