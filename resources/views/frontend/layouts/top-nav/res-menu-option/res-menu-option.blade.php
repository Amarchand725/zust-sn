<div class="others-option-for-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
            </div>
        </div>

        <div class="container">
            <div class="option-inner">
                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <a href="index.html" class="home-btn"><i class="flaticon-home"></i></a>
                    </div>

                    <!-- Friend Requests -->
                    @include('frontend.layouts.top-nav.res-menu-option.res-friend-request-items')
                    <!-- Friend Requests -->

                    <!-- Messages -->
                    @include('frontend.layouts.top-nav.res-menu-option.res-message-items')
                    <!-- Messages -->

                    <!-- Notifications -->
                    @include('frontend.layouts.top-nav.res-menu-option.res-notification-items')
                    <!-- Notifications -->

                    <!-- Languages -->
                    @include('frontend.layouts.top-nav.res-menu-option.res-language-items')
                    <!-- Languages -->

                    <!-- Profile -->
                    @include('frontend.layouts.top-nav.res-menu-option.res-profile-items')
                    <!-- Profile -->

                    <div class="option-item">
                        <div class="search-box">
                            <form>
                                <input type="text" class="input-search" placeholder="Search...">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
