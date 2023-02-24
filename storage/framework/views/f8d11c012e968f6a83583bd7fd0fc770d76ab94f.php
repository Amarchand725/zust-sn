<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" id="page_url" value="<?php echo e(route('category.index')); ?>">
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar mt-5 py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?php echo e($page_title); ?></h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Dashboards</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <!--begin::Primary button-->
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                                <a href="<?php echo e(route('user.index')); ?>" title="All Users" class="btn btn-sm fw-bold btn-primary">View All</a>
                            <?php endif; ?>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content" >
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container ">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body pt-6">
                                <!--begin::Table-->
                                <table  class="table align-middle table-row-dashed fs-6 gy-5" id="audit-log-table">
                                    <tbody id="body">
                                        <tr>
                                            <th width="250px">Avatar</th>
                                            <td>
                                                <?php if(!empty($model->hasProfile) && $model->hasProfile->avatar): ?>
                                                    <img src="<?php echo e(asset('public/avatar')); ?>/<?php echo e($model->hasProfile->avatar); ?>" class="rounded" width="50px" alt="">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('public/avatar/default.png')); ?>" width="50px" alt="">
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Member From </th>
                                            <td><?php echo date('d, M Y h:i A', strtotime($model->created_at)); ?></td>
                                        </tr>
                                        <tr>
                                            <th>First Name</th>
                                            <td><?php echo isset($model->hasProfile)?$model->hasProfile->first_name:''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td><?php echo isset($model->hasProfile)?$model->hasProfile->last_name:''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td><?php echo isset($model->hasProfile)?$model->hasProfile->phone:''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo isset($model->email)?$model->email:''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><?php echo isset($model->hasProfile)?$model->hasProfile->address:''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <?php if($model->status): ?>
                                                    <span class="badge badge-success">Active</span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger">In-Active</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/admin/user/show.blade.php ENDPATH**/ ?>