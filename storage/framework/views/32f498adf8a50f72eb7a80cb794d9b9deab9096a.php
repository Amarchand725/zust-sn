
<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" id="page_url" value="<?php echo e(route('role.index')); ?>">
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
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                                <a href="<?php echo e(route('role.create')); ?>" class="btn btn-sm fw-bold btn-primary">Add New Role</a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('admin.role.trash.records')); ?>" title="Role All Trash Records" class="btn btn-sm fw-bold btn-primary">Restore</a>
                            <span id="trash-record-count"><?php echo e(count($onlySoftDeleted)); ?></span> Records Deleted
                            <!--end::Primary button-->
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
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted" style=" width: 100%; ">
                                            <input type="text" id="search" class="form-control" placeholder="Search...">
                                            <select name="status" id="status" class="form-control" style="margin-left: 5px">
                                                <option value="All" selected>Search by status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--begin::Table-->
                                <table  class="table align-middle table-row-dashed fs-6 gy-5" id="audit-log-table">
                                    <thead>
                                        <tr>
                                            <th  title="Log ID">SNo#</th>
                                            <th  title="Location">Role</th>
                                            <th  title="Description">Guard Name</th>
                                            <th  title="Description">Status</th>
                                            <th  title="Created At">Created At</th>
                                            <th  title="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr id="id-<?php echo e($model->id); ?>">
                                                <td><?php echo e($models->firstItem()+$key); ?>.</td>
                                                <td><?php echo e($model->name); ?></td>
                                                <td><?php echo e($model->guard_name); ?></td>
                                                <td>
                                                    <?php if($model->status): ?>
                                                        <span class="badge badge-success">Active</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger">In-Active</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e(date('d, M-Y', strtotime($model->created_at))); ?></td>
                                                <td>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                                                        <a href="<?php echo e(route('role.edit', $model->id)); ?>" data-toggle="tooltip" data-placement="top" title="Edit role" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                    <?php endif; ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                                                        <button class="btn btn-danger btn-sm delete" data-slug="<?php echo e($model->id); ?>" data-del-url="<?php echo e(route('role.destroy', $model->id)); ?>"><i class="fa fa-trash"></i> Delete</button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td colspan="6">
                                                Displying <?php echo e($models->firstItem()); ?> to <?php echo e($models->lastItem()); ?> of <?php echo e($models->total()); ?> records
                                                <div class="d-flex justify-content-center">
                                                    <?php echo $models->links('pagination::bootstrap-4'); ?>

                                                </div>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/admin/role/index.blade.php ENDPATH**/ ?>