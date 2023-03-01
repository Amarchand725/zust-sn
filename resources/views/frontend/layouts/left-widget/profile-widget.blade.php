<div class="widget widget-view-profile">
    <div class="profile-box d-flex justify-content-between align-items-center">
        <a href="{{ route('my-profile') }}">
            @if(!empty(Auth::user()->hasAvatar))
                <img src="{{ asset('public/frontend') }}/avatar/{{ Auth::user()->hasAvatar->avatar }}" alt="image">
            @else 
                <img src="{{ asset('public/frontend') }}/assets/images/user/user-1.jpg" alt="image">
            @endif
        </a>
        <div class="text ms-2">
            <h3><a href="{{ route('my-profile') }}">{{ Auth::user()->name }}</a></h3>
            <span>
                @if(!empty(Auth::user()->hasProfile))
                    {{ Auth::user()->hasProfile->address }}
                @else 
                    N/A
                @endif
            </span>
        </div>
    </div>
    <ul class="profile-statistics">
        <li>
            <a href="#">
                <span class="item-number">
                    @if(isset(Auth::user()->hasUser->hasPosts) && isset(Auth::user()->hasUser->hasPosts->hasLikes))
                        {{ count(Auth::user()->hasUser->hasPosts->hasLikes) }}
                    @else
                        0
                    @endif
                </span>
                <span class="item-text">Likes</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user-profile', Auth::user()->slug) }}">
                <span class="item-number">{{ count(Auth::user()->hasFollowing) }}</span>
                <span class="item-text">Following</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user-profile', Auth::user()->slug) }}">
                <span class="item-number">{{ count(Auth::user()->hasFollowers) }}</span>
                <span class="item-text">Followers</span>
            </a>
        </li>
    </ul>
    <div class="profile-likes">
        <span><i class="flaticon-heart-shape-outline"></i> New Likes This Week</span>

        <ul>
            @php $counter = 1; @endphp
            @if(isset(Auth::user()->hasUser->hasPosts->hasLikes) && !empty(Auth::user()->hasUser->hasPosts->hasLikes))
                @foreach (Auth::user()->hasUser->hasPosts->hasLikes as $like)
                    @php ++$counter @endphp 
                    @if($counter <= 6)
                        <li>
                            <a href="{{ route('my-profile', $like->hasUser->slug) }}">
                                @if(!empty($like->hasUser) && isset($like->hasUser->avatar))
                                    <img src="{{ asset('public/frontend') }}/avatar/{{ $like->hasUser->avatar }}" alt="image">
                                @else
                                    <img src="{{ asset('public/frontend') }}/assets/images/user/user-22.jpg" alt="image">
                                @endif
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        </ul>
    </div>
    <div class="profile-btn">
        <a href="{{ route('my-profile') }}" class="default-btn">View Profile</a>
    </div>
</div>
