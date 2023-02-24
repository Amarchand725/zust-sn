
<?php $__env->startSection('title', $page_title); ?>
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
                    <a href="<?php echo e(route('role.index')); ?>" title="All Roles" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="<?php echo e(route('permission.update', $permission->id)); ?>" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PATCH')); ?>


                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" value="<?php echo e($permission->name); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter permission group name e.g User"/>
                                <span style="color: red"><?php echo e($errors->first('name')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->

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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/admin/permission/edit.blade.php ENDPATH**/ ?>