
<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div id="kt_app_content" class="app-content" style="margin-top:5px">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container ">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0"><?php echo e($page_title); ?></h3>
                </div>
                <div class="content-header-right mt-3">
                    <a href="<?php echo e(route('user.index')); ?>" title="All Roles" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="<?php echo e(route('user.store')); ?>" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>

                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Role</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="roles[]" class="selectpicker" multiple data-live-search="true">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <br />
                                <span style="color: red"><?php echo e($errors->first('roles')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>

                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <?php
                                    $avatar = asset('public/avatar/default.png');
                                ?>
                                <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url(<?php echo e($avatar); ?>)">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="avatar_remove"/>
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->

                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">First Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter first_name"/>
                                <span style="color: red"><?php echo e($errors->first('first_name')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Last Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="last_name" value="<?php echo e(old('last_name')); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter last_name"/>
                                <span style="color: red"><?php echo e($errors->first('last_name')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Phone</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="tel" name="phone" value="<?php echo e(old('phone')); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter phone"/>
                                <span style="color: red"><?php echo e($errors->first('phone')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Address</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="address" value="<?php echo e(old('address')); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter address"/>
                                <span style="color: red"><?php echo e($errors->first('address')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Email</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter email"/>
                                <span style="color: red"><?php echo e($errors->first('email')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Password</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter password"/>
                                <span style="color: red"><?php echo e($errors->first('password')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Confirm Password</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter password_confirmation"/>
                                <span style="color: red"><?php echo e($errors->first('password_confirmation')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>

                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                            <!--begin::Indicator-->
                            <span class="indicator-label">
                                Save Changes
                            </span>
                            <span class="indicator-progress">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $('select').selectpicker();
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/admin/user/create.blade.php ENDPATH**/ ?>