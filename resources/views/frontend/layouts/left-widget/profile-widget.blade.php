<div class="widget widget-view-profile">
    <div class="profile-box d-flex justify-content-between align-items-center">
        <a href="my-profile.html"><img src="{{ asset('public/frontend') }}/assets/images/user/user-1.jpg" alt="image"></a>
        <div class="text ms-2">
            <h3><a href="my-profile.html">Matthew Turner</a></h3>
            <span>Washington</span>
        </div>
    </div>
    <ul class="profile-statistics">
        <li>
            <a href="#">
                <span class="item-number">59862</span>
                <span class="item-text">Likes</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="item-number">8591</span>
                <span class="item-text">Following</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="item-number">784514</span>
                <span class="item-text">Followers</span>
            </a>
        </li>
    </ul>
    <div class="profile-likes">
        <span><i class="flaticon-heart-shape-outline"></i> New Likes This Week</span>

        <ul>
            <li>
                <a href="#"><img src="{{ asset('public/frontend') }}/assets/images/user/user-22.jpg" alt="image"></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('public/frontend') }}/assets/images/user/user-23.jpg" alt="image"></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('public/frontend') }}/assets/images/user/user-24.jpg" alt="image"></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('public/frontend') }}/assets/images/user/user-25.jpg" alt="image"></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('public/frontend') }}/assets/images/user/user-26.jpg" alt="image"></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('public/frontend') }}/assets/images/user/user-27.jpg" alt="image"></a>
            </li>
        </ul>
    </div>
    <div class="profile-btn">
        <a href="{{ route('my-profile') }}" class="default-btn">View Profile</a>
    </div>
</div>
