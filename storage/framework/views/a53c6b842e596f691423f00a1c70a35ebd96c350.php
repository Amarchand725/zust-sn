

<?php $__env->startSection('content'); ?>
    <!-- Start Preloader Area -->
    <div class="profile-authentication-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="profile-authentication-image">
                        <div class="content-image">
                            <div class="logo">
                                <a href="index.html"><img src="<?php echo e(asset('public/frontend')); ?>/assets/images/logo.png" alt="Zust"></a>
                            </div>
                            <div class="vector-image">
                                <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/vector.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="login-form">
                        <h2>Login</h2>

                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="remember-me-wrap d-flex justify-content-between align-items-center">
                                <p>
                                    <input type="checkbox" id="test1">
                                    <label for="test1">Remember me</label>
                                </p>

                                <div class="lost-your-password-wrap">
                                    <a href="forgot-password.html" class="lost-your-password">Forgot password ?</a>
                                </div>
                            </div>
                            <button type="submit" class="default-btn">Login</button>
                            <div class="or-text"><span>Or</span></div>
                            <button type="submit" class="google-btn">Log In with Google</button>
                            <div class="or-text"><span>Or</span></div>
                            <a href="<?php echo e(url('register')); ?>" class="default-btn" style="text-align: center">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-btn-icon">
            <a href="index.html"><i class="flaticon-home"></i></a>
        </div>
    </div>
    <!-- End Preloader Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.auth.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\zust-sn\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>