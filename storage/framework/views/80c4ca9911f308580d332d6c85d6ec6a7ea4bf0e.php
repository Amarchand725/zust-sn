<?php $__env->startSection('content'); ?>
    <!-- Start Preloader Area -->
    <div class="profile-authentication-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="profile-authentication-image">
                        <div class="d-table">
                            <div class="d-table-cell">
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
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="register-form">
                        <h2>Register</h2>

                        <form action="<?php echo e(route('register')); ?>" method="post">
                            <?php echo csrf_field(); ?>

                            <input type="hidden" name="roles[]" value="">
                            <input type="hidden" name="from" value="user-register">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="Enter name" class="form-control">
                                <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter email" class="form-control">
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confrime password">
                            </div>

                            <div class="remember-me-wrap">
                                <p>
                                    <input type="checkbox" id="test1" value="1" name="accept_privacy">
                                    <label for="test1">I Accept The <a href="privacy.html">Privacy</a></label>
                                </p>
                                <span class="text-danger"><?php echo e($errors->first('accept_privacy')); ?></span>
                            </div>
                            <button type="submit" class="default-btn">Register</button>
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

<?php echo $__env->make('frontend.auth.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/auth/register.blade.php ENDPATH**/ ?>