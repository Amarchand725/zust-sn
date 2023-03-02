<?php $__env->startSection('content'); ?>
    <!-- Start Content Page Box Area -->
    <div class="content-page-box-area">
        <div class="page-banner-box bg-5">
            <h3>Groups</h3>
        </div>

        <div class="groups-inner-box-style d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="all-groups-tab" data-bs-toggle="tab" href="#all-groups" role="tab" aria-controls="all-groups">All Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="most-members-tab" data-bs-toggle="tab" href="#your-groups" role="tab" aria-controls="your-groups">Your Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="most-members-tab" data-bs-toggle="tab" href="#suggest-groups" role="tab" aria-controls="suggest-groups">Suggest Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="most-members-tab" data-bs-toggle="tab" href="#create-new-group" role="tab" aria-controls="create-new-group">Create New Group</a>
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
            <div class="tab-pane fade show active" id="all-groups" role="tabpanel">
                <div class="row">
                    <?php $__currentLoopData = $data['groups']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(checkGroupMember($group->slug, Auth::user()->slug)): ?>
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
                                                <h3><a href="#">Graphic Design</a></h3>
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

                <?php if(count($data['groups'])): ?>
                    <div class="load-more-posts-btn">
                        <a href="#"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="tab-pane fade" id="your-groups" role="tabpanel">
                <div class="row">
                    <?php $__currentLoopData = $data['your_groups']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                            <?php if(isset($group->hasGroupProfilePhoto)): ?>
                                                <img src="<?php echo e(asset('public/frontend')); ?>/frontend/images/group_profiles/<?php echo e($group->hasGroupProfilePhoto->photo); ?>" alt="image">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/groups/groups-1.jpg" alt="image">
                                            <?php endif; ?>
                                        </a>
                                        <div class="text ms-3">
                                            <h3><a href="#"><?php echo e($group->name); ?></a></h3>
                                            <span>
                                                <?php if($group->privacy==1): ?>
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
                                                <span class="item-number"><?php echo e(count($group->hasPosts)); ?></span>
                                                <span class="item-text">Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="item-number"><?php echo e(count($group->hasMembers)); ?></span>
                                                <span class="item-text">Members</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="item-number"><?php echo e(date('Y', strtotime($group->created_at))); ?></span>
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

            <div class="tab-pane fade" id="suggest-groups" role="tabpanel">
                <div class="row">
                    <?php $__currentLoopData = $data['groups']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!checkGroupMember($group->slug, Auth::user()->slug)): ?>
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
                                                <h3><a href="#">Graphic Design</a></h3>
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

                <?php if(count($data['groups'])): ?>
                    <div class="load-more-posts-btn">
                        <a href="#"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="tab-pane fade" id="create-new-group" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-sm-6">
                        <div class="single-groups-card">
                            <div class="groups-content">
                                <div class="groups-info d-flex justify-content-between align-items-center">
                                    <div class="text ms-3">
                                        <h3><a href="#">Create New Group</a></h3>
                                    </div>
                                </div>

                                <div class="text ms-3 mt-3">
                                    <form action="<?php echo e(route('group.store')); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label for="privacy">Group Privacy</label>
                                                <select name="privacy" id="privacy" class="form-control">
                                                    <option value="1" selected>Public</option>
                                                    <option value="2">Private</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-8 mt-2">
                                                <label for="group_name">Group Name</label>
                                                <input type="text" name="group_name" id="group_name" class="form-control" placeholder="Enter group name">
                                            </div>
                                            <div class="col-sm-8 mt-2">
                                                <label for="profile_image">Profile Image</label>
                                                <input type="file" accept="image/*" name="profile_image" id="profile_image" class="form-control" placeholder="Enter group name">
                                            </div>
                                            <div class="col-sm-8 mt-2">
                                                <label for="cover_image">Cover Image</label>
                                                <input type="file" accept="image/*" name="cover_image" id="cover_image" class="form-control" placeholder="Enter group name">
                                            </div>
                                            <div class="col-sm-8 mt-2">
                                                <label for="friends">Add Friends</label>
                                                <select name="friends[]" multiple id="friends" class="form-control select2">
                                                    <option value="" selected>Add Friends</option>
                                                    <?php $__currentLoopData = $data['friends']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($friend->user_slug==Auth::user()->slug): ?>
                                                            <option value="<?php echo e($friend->friend_slug); ?>"><?php echo e($friend->hasFriend->name); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($friend->user_slug); ?>"><?php echo e($friend->hasUser->name); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-8 mt-4">
                                                <div class="send-message-btn">
                                                    <button type="submit" class="btn btn-primary">Create Group</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Page Box Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/home/groups.blade.php ENDPATH**/ ?>