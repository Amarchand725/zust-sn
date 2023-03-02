<div class="widget widget-view-profile">
    <div class="profile-box d-flex justify-content-between align-items-center">
        <a href="<?php echo e(route('my-profile')); ?>">
            <?php if(!empty(Auth::user()->hasAvatar)): ?>
                <img src="<?php echo e(asset('public/frontend')); ?>/avatar/<?php echo e(Auth::user()->hasAvatar->avatar); ?>" alt="image">
            <?php else: ?> 
                <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/user/user-1.jpg" alt="image">
            <?php endif; ?>
        </a>
        <div class="text ms-2">
            <h3><a href="<?php echo e(route('my-profile')); ?>"><?php echo e(Auth::user()->name); ?></a></h3>
            <span>
                <?php if(!empty(Auth::user()->hasProfile)): ?>
                    <?php echo e(Auth::user()->hasProfile->address); ?>

                <?php else: ?> 
                    N/A
                <?php endif; ?>
            </span>
        </div>
    </div>
    <ul class="profile-statistics">
        <li>
            <a href="#">
                <span class="item-number">
                    <?php if(isset(Auth::user()->hasUser->hasPosts) && isset(Auth::user()->hasUser->hasPosts->hasLikes)): ?>
                        <?php echo e(count(Auth::user()->hasUser->hasPosts->hasLikes)); ?>

                    <?php else: ?>
                        0
                    <?php endif; ?>
                </span>
                <span class="item-text">Likes</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('user-profile', Auth::user()->slug)); ?>">
                <span class="item-number"><?php echo e(count(Auth::user()->hasFollowing)); ?></span>
                <span class="item-text">Following</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('user-profile', Auth::user()->slug)); ?>">
                <span class="item-number"><?php echo e(count(Auth::user()->hasFollowers)); ?></span>
                <span class="item-text">Followers</span>
            </a>
        </li>
    </ul>
    <div class="profile-likes">
        <span><i class="flaticon-heart-shape-outline"></i> New Likes This Week</span>

        <ul>
            <?php $counter = 1; ?>
            <?php if(isset(Auth::user()->hasUser->hasPosts->hasLikes) && !empty(Auth::user()->hasUser->hasPosts->hasLikes)): ?>
                <?php $__currentLoopData = Auth::user()->hasUser->hasPosts->hasLikes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ++$counter ?> 
                    <?php if($counter <= 6): ?>
                        <li>
                            <a href="<?php echo e(route('my-profile', $like->hasUser->slug)); ?>">
                                <?php if(!empty($like->hasUser) && isset($like->hasUser->avatar)): ?>
                                    <img src="<?php echo e(asset('public/frontend')); ?>/avatar/<?php echo e($like->hasUser->avatar); ?>" alt="image">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('public/frontend')); ?>/assets/images/user/user-22.jpg" alt="image">
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="profile-btn">
        <a href="<?php echo e(route('my-profile')); ?>" class="default-btn">View Profile</a>
    </div>
</div>
<?php /**PATH C:\wamp\www\zust-sn\resources\views/frontend/layouts/left-widget/profile-widget.blade.php ENDPATH**/ ?>