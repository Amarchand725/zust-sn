<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid mt-5">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content " >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container ">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 20-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('<?php echo e(asset('public/admin')); ?>/media/patterns/vector-1.png')">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?php echo e(count($users)); ?></span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total Users</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Progress-->
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                            <span>43 Pending</span>
                                            <span>72%</span>
                                        </div>
                                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 20-->

                            <!--begin::Card widget 7-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-column justify-content-end pe-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                                    <!--end::Title-->
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover flex-nowrap">
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                            <img alt="Pic" src=<?php echo e(asset('public/admin')); ?>/media/avatars/300-11.jpg />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                            <img alt="Pic" src=<?php echo e(asset('public/admin')); ?>/media/avatars/300-2.jpg />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                            <img alt="Pic" src=<?php echo e(asset('public/admin')); ?>/media/avatars/300-12.jpg />
                                        </div>
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                        </a>
                                    </div>
                                    <!--end::Users group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 7-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1"><?php echo e(date('Y')); ?>&copy;</span>
                    <a href="" target="_blank" class="text-gray-800 text-hover-primary"><?php if(companyProfile()): ?> <?php echo e(companyProfile()->company); ?> <?php else: ?> Admin Default <?php endif; ?></a>
                </div>
                <!--end::Copyright-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\admin-default\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>