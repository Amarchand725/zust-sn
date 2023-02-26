<div class="col-lg-6 col-md-12">
    <div class="news-feed-area">
        <!-- Create New Post Area -->
        <?php echo $__env->make('frontend.layouts.posts-area.create-new-post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Create New Post Area -->

        <!-- Stories -->
        <?php echo $__env->make('frontend.layouts.posts-area.stories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Stories -->

        <!-- Posts -->
        <?php echo $__env->make('frontend.layouts.posts-area.latest-posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Posts -->

        <div class="load-more-posts-btn">
            <a href="#"><i class="flaticon-loading"></i> Load More Posts</a>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\zust-sn\resources\views/frontend/layouts/posts-area/post-area.blade.php ENDPATH**/ ?>