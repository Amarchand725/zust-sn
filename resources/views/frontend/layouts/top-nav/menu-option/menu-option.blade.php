<div class="others-options d-flex align-items-center">
    <div class="option-item">
        <a href="{{ route('home') }}" class="home-btn"><i class="flaticon-home"></i></a>
    </div>
    <!-- Menu Option Friend Request Items -->
    @include('frontend.layouts.top-nav.menu-option.friend-request-items')
    <!-- Menu Option Friend Request Items -->


    <!-- Menu Option Messages -->
    @include('frontend.layouts.top-nav.menu-option.message-items')
    <!-- Menu Option Messages -->

    <!-- Menu Option Notifications -->
    @include('frontend.layouts.top-nav.menu-option.notification-items')
    <!-- Menu Option Notifications -->

    <!-- Menu Option Languages -->
    @include('frontend.layouts.top-nav.menu-option.language-items')
    <!-- Menu Option Languages -->

    <!-- Menu Option Profile -->
    @include('frontend.layouts.top-nav.menu-option.profile-items')
    <!-- Menu Option Profile -->
</div>
