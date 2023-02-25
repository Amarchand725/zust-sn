<div class="col-lg-6 col-md-12">
    <div class="news-feed-area">
        <!-- Create New Post Area -->
        @include('frontend.layouts.posts-area.create-new-post')
        <!-- Create New Post Area -->

        <!-- Stories -->
        @include('frontend.layouts.posts-area.stories')
        <!-- Stories -->

        <!-- Posts -->
        @include('frontend.layouts.posts-area.latest-posts')
        <!-- Posts -->

        <div class="load-more-posts-btn">
            <a href="#"><i class="flaticon-loading"></i> Load More Posts</a>
        </div>
    </div>
</div>
