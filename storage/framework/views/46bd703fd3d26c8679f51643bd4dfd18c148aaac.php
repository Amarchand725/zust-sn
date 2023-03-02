<?php $__env->startSection('content'); ?>
    <!-- Start Content Page Box Area -->
    <div class="content-page-box-area">
        <div class="page-banner-box bg-5">
            <h3>Pages</h3>
        </div>

        <div class="groups-inner-box-style d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="all-groups-tab" data-bs-toggle="tab" href="#all-pages" role="tab" aria-controls="all-pages">All Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="most-members-tab" data-bs-toggle="tab" href="#your-pages" role="tab" aria-controls="your-pages">Your Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="most-members-tab" data-bs-toggle="tab" href="#you-may-know-pages" role="tab" aria-controls="you-may-know-pages">You may know pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="most-members-tab" data-bs-toggle="tab" href="#create-new-page" role="tab" aria-controls="create-new-page">Create New Page</a>
                </li>
            </ul>

            <div class="groups-search-box">
                <form>
                    <input type="text" class="input-search" placeholder="Search groups...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all-pages" role="tabpanel">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $data['pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(checkPageMember($page->slug, Auth::user()->slug)): ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-groups-card">
                                    <div class="groups-image">
                                        <a href="#">
                                            <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/groups/groups-bg-1.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="groups-content">
                                        <div class="groups-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/groups/groups-1.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#"><?php echo e($page->name); ?></a></h3>
                                                <span>Public Groups</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">62</span>
                                                    <span class="item-text">Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">6451</span>
                                                    <span class="item-text">Members</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">2016</span>
                                                    <span class="item-text">Since</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="join-groups-btn">
                                            <button type="submit">Join Group</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if(count($data['pages'])): ?>
                    <div class="load-more-posts-btn">
                        <a href="#"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="tab-pane fade" id="your-pages" role="tabpanel">
                <div class="row">
                    <?php $__currentLoopData = $data['your_pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-image">
                                    <a href="#">
                                        <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/groups/groups-bg-1.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <a href="#">
                                            <?php if(isset($page->hasGroupProfilePhoto)): ?>
                                                <img src="<?php echo e(asset('public/frontend')); ?>/frontend/images/group_profiles/<?php echo e($page->hasGroupProfilePhoto->photo); ?>" alt="image">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/groups/groups-1.jpg" alt="image">
                                            <?php endif; ?>
                                        </a>
                                        <div class="text ms-3">
                                            <h3><a href="#"><?php echo e($page->name); ?></a></h3>
                                            <span>
                                                <?php if($page->privacy==1): ?>
                                                    Public
                                                <?php else: ?>
                                                    Private
                                                <?php endif; ?>
                                                Groups
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="statistics">
                                        <li>
                                            <a href="#">
                                                <span class="item-number"><?php echo e(isset($page->hasPosts)? count($page->hasPosts):0); ?></span>
                                                <span class="item-text">Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="item-number"><?php echo e(isset($page->hasMembers)?count($page->hasMembers):0); ?></span>
                                                <span class="item-text">Members</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="item-number"><?php echo e(date('Y', strtotime($page->created_at))); ?></span>
                                                <span class="item-text">Since</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="join-groups-btn">
                                        <button type="submit">Join Group</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="load-more-posts-btn">
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="you-may-know-pages" role="tabpanel">
                <div class="row">
                    <?php $__currentLoopData = $data['pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!checkPageMember($page->slug, Auth::user()->slug)): ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-groups-card">
                                    <div class="groups-image">
                                        <a href="#">
                                            <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/groups/groups-bg-1.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="groups-content">
                                        <div class="groups-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <?php if(isset($page->hasLogoImage) && !empty($page->hasLogoImage->logo)): ?>
                                                    <img src="<?php echo e(asset('public/frontend')); ?>/images/<?php echo e($page->hasLogoImage->logo); ?>" alt="image">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/groups/groups-1.jpg" alt="image">
                                                <?php endif; ?>
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#"><?php echo e($page->name); ?></a></h3>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number"><?php echo e(count($page->hasPosts)); ?></span>
                                                    <span class="item-text">Post</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">6451</span>
                                                    <span class="item-text">Members</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">2016</span>
                                                    <span class="item-text">Since</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="join-groups-btn">
                                            <button type="submit">Join Group</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if(count($data['pages'])): ?>
                    <div class="load-more-posts-btn">
                        <a href="#"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="tab-pane fade" id="create-new-page" role="tabpanel">
                <form action="<?php echo e(route('page.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">1.Page Info</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="name">Name <span class="text-danger">*</span></div>
                                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="form-control" placeholder="Ener page name.">
                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="category">Category</div>
                                        <select name="category_slug" id="category" class="form-control">
                                            <option value="" selected>Select category</option>
                                            <option value="xydIli" selected>Business</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="bio">Bio</div>
                                        <textarea name="bio" id="bio" class="form-control" placeholder="Enter bio"><?php echo e(old('bio')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">1.Contact Info</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="email">Email <span class="text-danger">*</span></div>
                                        <input type="text" name="email" value="<?php echo e(old('email')); ?>" id="email" class="form-control" placeholder="Ener email.">
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="phone">Phone <span class="text-danger">*</span></div>
                                        <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" id="phone" class="form-control" placeholder="Ener phone.">
                                        <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="website">Website</div>
                                        <textarea name="website" id="website" class="form-control" placeholder="Enter website url"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">3.Location Info</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="address">Address</div>
                                        <input type="text" name="address" value="<?php echo e(old('address')); ?>" id="address" class="form-control" placeholder="Ener address.">
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="city">City/Town</div>
                                        <input type="text" name="city" value="<?php echo e(old('city')); ?>" id="city" class="form-control" placeholder="Ener city.">
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="zipcode">Zipcode</div>
                                        <input type="text" name="zipcode" value="<?php echo e(old('zipcode')); ?>" id="zipcode" class="form-control" placeholder="Ener zipcode.">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">4.Hours & Invite Friends</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="friends">Friends</div>
                                        <select name="friends[]" id="friends" multiple class="form-control">
                                            <option value="" selected>Select Friends</option>
                                            <?php $__currentLoopData = $data['friends']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($friend->friend_slug); ?>"><?php echo e($friend->hasUser->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="hours">Hours</div>
                                        <select name="hours" id="hours" class="form-control">
                                            <option value="not-available">Not Available</option>
                                            <option value="always-available">Always Available</option>
                                            <option value="standard-hours">Standard Hours</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">5.Logo & Cover Image</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="logo">Page Logo</div>
                                        <input type="file" accept="image/*" name="logo" id="logo" class="form-control" placeholder="Ener logo.">
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="cover_image">Cover Image</div>
                                        <input type="file" accept="image/*" name="cover_image" id="cover_image" class="form-control" placeholder="Ener cover_image.">
                                    </div>
                                    <div class="join-groups-btn">
                                        <button type="submit">Create Page</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Content Page Box Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/home/pages.blade.php ENDPATH**/ ?>