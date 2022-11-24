<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <!--begin:Menu item-->
            <div  class="menu-item" >
                <!--begin:Menu link-->
                <a class="menu-link"  href="<?php echo e(route('admin.dashboard')); ?>" >
                    <span  class="menu-icon" >
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art002.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor"/>
                                <path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor"/>
                            </svg>
                        </span>
                    <!--end::Svg Icon-->
                    </span>
                    <span  class="menu-title" >Dashboard</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div  class="menu-item" >
                <!--begin:Menu content-->
                <div  class="menu-content pt-8 pb-2" >
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Modules</span>
                </div>
                <!--end:Menu content-->
            </div>

            <!--begin:Menu item-->
            <div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" >
                <!--begin:Menu link-->
                <span class="menu-link" >
                    <span  class="menu-icon" >
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span  class="menu-title" >System</span>
                    <span  class="menu-arrow" ></span>
                </span>
                <!--end:Menu link--><!--begin:Menu sub-->
                <div  class="menu-sub menu-sub-accordion menu-active-bg <?php echo e(request()->is('admin/user') ||
                                        request()->is('admin/user/*') ||
                                        request()->is('admin/menu') ||
                                        request()->is('admin/menu/*') ||
                                        request()->is('admin/role') ||
                                        request()->is('admin/role/*') ||
                                        request()->is('admin/permission') ||
                                        request()->is('admin/permission/*') ||
                                        request()->is('admin/system/company/profile') ||
                                        request()->is('admin/system/setting') ||
                                        request()->is('admin/logActivity') ||
                                        request()->is('admin/logActivity/*') ||
                                        request()->is('admin/system/email-config')
                                        ? 'show' : ''); ?>" >
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/menu') || request()->is('admin/menu/*') ? 'active' : ''); ?>" href="<?php echo e(route('menu.index')); ?>" title="All Menus" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                <span  class="menu-bullet" >
                                    <span class="fa fa-bars"></span>
                                </span>
                                <span class="menu-title" > Menus</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/user') || request()->is('admin/user/*') ? 'active' : ''); ?>" href="<?php echo e(route('user.index')); ?>" title="All Users" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                <span  class="menu-bullet" >
                                    <span class="fa fa-user"></span>
                                </span>
                                <span class="menu-title" > Users</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/role') || request()->is('admin/role/*') ? 'active' : ''); ?>" href="<?php echo e(route('role.index')); ?>" title="All Roles" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                <span  class="menu-bullet" >
                                    <span class="fa fa-briefcase"></span>
                                </span>
                                <span class="menu-title" >Roles</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/permission') || request()->is('admin/permission/*') ? 'active' : ''); ?>" href="<?php echo e(route('permission.index')); ?>" title="Permissions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                <span  class="menu-bullet" >
                                    <span class="fa fa-lock"></span>
                                </span>
                                <span class="menu-title" >Permissions</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('companyprofile-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/system/company/profile') || request()->is('admin/system/company/profile/*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.system.company.profile')); ?>" title="Company Profile" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                <span  class="menu-bullet" >
                                    <span class="fa fa-building"></span>
                                </span>
                                <span class="menu-title" >Company Profile</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('setting-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/system/setting') || request()->is('admin/system/setting/*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.system.setting')); ?>" title="Setting" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                <span  class="menu-bullet" >
                                    <span class="fa fa-cog"></span>
                                </span>
                                <span class="menu-title" >Settings</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('emailconfig-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/system/email-config') || request()->is('admin/system/email-config/*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.email-config')); ?>" title="Email Configuration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-bullet" >
                                    <span class="fa fa-connectdevelop"></span>
                                </span>
                                <span class="menu-title">Email Configuration</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div  class="menu-item" >
                        <!--begin:Menu link-->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('logactivity-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/logActivity') ? 'active' : ''); ?>" href="<?php echo e(route('admin.logActivity')); ?>" title="System Log" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span  class="menu-bullet" >
                                    <span class="fa fa-tasks"></span>
                                </span>
                                <span  class="menu-title" >System Log</span>
                            </a>
                        <?php endif; ?>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <?php $__currentLoopData = menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(Auth::user()->hasRole('admin') || $menu->menu_of=='general'): ?>
                            <!--begin:Menu link-->
                            <?php $_menu = $menu->menu ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($_menu.'-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/logActivity') ? 'active' : ''); ?>" href="<?php echo e(route('admin.logActivity')); ?>" title="System Log" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span  class="menu-bullet" >
                                    <span class="fa fa-tasks"></span>
                                </span>
                                <span  class="menu-title" >All <?php echo e(Str::plural($menu->menu)); ?></span>
                            </a>
                            <?php endif; ?>
                            <!--end:Menu link-->
                        <?php elseif(Auth::user()->hasRole($menu->menu_of) || $menu->menu_of=='general'): ?>
                            <!--begin:Menu link-->
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($_menu.'-list')): ?>
                            <a class="menu-link <?php echo e(request()->is('admin/logActivity') ? 'active' : ''); ?>" href="<?php echo e(route('admin.logActivity')); ?>" title="System Log" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span  class="menu-bullet" >
                                    <span class="fa fa-tasks"></span>
                                </span>
                                <span  class="menu-title" >System Log</span>
                            </a>
                            <?php endif; ?>
                            <!--end:Menu link-->
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->

            <!--begin:Menu item-->
            <?php $__currentLoopData = menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(Auth::user()->hasRole('Admin') || $menu->menu_of=='general'): ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($menu->menu.'-list')): ?>
                        <div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" >
                            <!--begin:Menu link-->
                            <span class="menu-link" >
                                <span  class="menu-icon" >
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span  class="menu-title" ><?php echo e(Str::ucfirst($menu->menu)); ?></span>
                                <span  class="menu-arrow" ></span>
                            </span>
                            <!--end:Menu link--><!--begin:Menu sub-->
                            <div  class="menu-sub menu-sub-accordion menu-active-bg <?php echo e(request()->is('admin/'.$menu->menu) ||
                                                    request()->is('admin/'.$menu->menu.'/*')
                                                    ? 'show' : ''); ?>" >
                                <!--begin:Menu item-->
                                <div  class="menu-item" >
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php echo e(request()->is('admin/'.$menu->menu) ? 'active' : ''); ?>" href="<?php echo e(route($menu->menu.'.index')); ?>" title="<?php echo e($menu->lablel); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                        <span  class="menu-bullet" ><?php echo $menu->icon; ?></span>
                                        <span class="menu-title" > <?php echo e($menu->label); ?></span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div  class="menu-item" >
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php echo e(request()->is('admin/'.$menu->menu.'/create') ? 'active' : ''); ?>" href="<?php echo e(route($menu->menu.'.create')); ?>" title="<?php echo e($menu->lablel); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                        <span  class="menu-bullet" ><?php echo $menu->icon; ?></span>
                                        <span class="menu-title" > Add New <?php echo e(Str::ucfirst($menu->menu)); ?></span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                    <?php endif; ?>
                <?php elseif(Auth::user()->hasRole($menu->menu_of) || $menu->menu_of=='general'): ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($menu->menu.'-list')): ?>
                        <div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" >
                            <!--begin:Menu link-->
                            <span class="menu-link" >
                                <span  class="menu-icon" >
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span  class="menu-title" ><?php echo e(Str::ucfirst($menu->menu)); ?></span>
                                <span  class="menu-arrow" ></span>
                            </span>
                            <!--end:Menu link--><!--begin:Menu sub-->
                            <div  class="menu-sub menu-sub-accordion menu-active-bg <?php echo e(request()->is($menu->url) ||
                                                    request()->is($menu->url.'/*')
                                                    ? 'show' : ''); ?>" >
                                <!--begin:Menu item-->
                                <div  class="menu-item" >
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php echo e(request()->is($menu->url) ? 'active' : ''); ?>" href="<?php echo e(route($menu->menu_of.'.'.$menu->menu.'.index')); ?>" title="<?php echo e($menu->lablel); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                        <span  class="menu-bullet" ><?php echo $menu->icon; ?></span>
                                        <span class="menu-title" > <?php echo e($menu->label); ?></span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div  class="menu-item" >
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php echo e(request()->is($menu->url.'/create') ? 'active' : ''); ?>" href="<?php echo e(route($menu->menu_of.'.'.$menu->menu.'.create')); ?>" title="<?php echo e($menu->lablel); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" >
                                        <span  class="menu-bullet" ><?php echo $menu->icon; ?></span>
                                        <span class="menu-title" > Add New <?php echo e(Str::ucfirst($menu->menu)); ?></span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--end:Menu item--><!--begin:Menu item-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<?php /**PATH C:\wamp\www\admin-default\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>