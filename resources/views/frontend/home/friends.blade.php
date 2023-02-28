@extends('frontend.layouts.app')

@section('content')
    <!-- Start Content Page Box Area -->
    <div class="content-page-box-area">
        <div class="page-banner-box bg-4">
            <h3>Friends</h3>
        </div>

        <div class="friends-inner-box-style d-flex justify-content-between align-items-center margin-top-25">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="friend-requests-tab" data-bs-toggle="tab" href="#friend-requests" role="tab" aria-controls="friend-requests">Friend Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="people-you-know-tab" data-bs-toggle="tab" href="#people-you-know" role="tab" aria-controls="people-you-know">People You Know</a>
                </li>
            </ul>

            <div class="friends-search-box">
                <form>
                    <input type="text" class="input-search" placeholder="Search friends...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="friend-requests" role="tabpanel">
                <div class="row ">
                    @foreach ($data['friend_requests'] as $friend_request)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-friends-card">
                                <div class="friends-image">
                                    <a href="{{ route('user-profile', $friend_request->friend_slug) }}">
                                        <img src="{{ asset('public/frontend') }}/assets/images/friends/friends-bg-1.jpg" alt="image">
                                    </a>
                                    <div class="icon">
                                        <a href="#"><i class="flaticon-user"></i></a>
                                    </div>
                                </div>
                                <div class="friends-content">
                                    <div class="friends-info d-flex justify-content-between align-items-center">
                                        <a href="{{ route('user-profile', $friend_request->friend_slug) }}">
                                            @if(isset($friend_request->hasUser->hasAvatar))
                                                <img src="{{ asset('public/frontend') }}/assets/images/user/{{ $friend_request->hasUser->hasAvatar->avatar }}" alt="image">
                                            @else
                                                <img src="{{ asset('public/frontend') }}/assets/images/user/user-10.jpg" alt="image">
                                            @endif
                                        </a>
                                        <div class="text ms-3">
                                            <h3><a href="{{ route('user-profile', $friend_request->friend_slug) }}">{{ $friend_request->hasUser->name }}</a></h3>
                                            <span>
                                                @if(isset($friend_request->hasUser->hasFriends))
                                                    {{ count($friend_request->hasUser->hasFriends) }}
                                                @else
                                                    0
                                                @endif

                                                Mutual Friends
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="statistics">
                                        <li>
                                            <a href="{{ route('user-profile', $friend_request->friend_slug) }}">
                                                <span class="item-number">
                                                    @if(isset($friend_request->hasUser->hasPost) && isset($friend_request->hasUser->hasPost->hasLikes))
                                                        {{ count($friend_request->hasUser->hasPost->hasLikes) }}
                                                    @else
                                                        0
                                                    @endif
                                                </span>
                                                <span class="item-text">Likes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user-profile', $friend_request->friend_slug) }}">
                                                <span class="item-number">{{ count($friend_request->hasUser->hasFollowing) }}</span>
                                                <span class="item-text">Following</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user-profile', $friend_request->friend_slug) }}">
                                                <span class="item-number">{{ count($friend_request->hasUser->hasFollowers) }}</span>
                                                <span class="item-text">Followers</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="button-group d-flex justify-content-between align-items-center">
                                        <div class="add-friend-btn">
                                            @if(confirmFriendRequest($friend_request->friend_slug))
                                                <a href="{{ route('un-friend', $friend_request->friend_slug) }}" class="add-friend-btn">Unfriend</a>
                                            @else
                                                <a href="{{ route('confirm-friend-request', $friend_request->friend_slug) }}" class="add-friend-btn">Confirm</a>
                                            @endif
                                        </div>
                                        <div class="send-message-btn">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($data['friend_requests']->nextPageUrl())
                    <div class="load-more-posts-btn">
                        <a href="{{ $data['friend_requests']->nextPageUrl() }}"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                @endif
            </div>

            <div class="tab-pane fade" id="people-you-know" role="tabpanel">
                <div class="row">
                    @foreach ($data['suggest_friends'] as $suggest_friend)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-friends-card">
                                <div class="friends-image">
                                    <a href="{{ route('user-profile', $suggest_friend->slug) }}">
                                        <img src="{{ asset('public/frontend') }}/assets/images/friends/friends-bg-1.jpg" alt="image">
                                    </a>
                                    <div class="icon">
                                        <a href="#"><i class="flaticon-user"></i></a>
                                    </div>
                                </div>
                                <div class="friends-content">
                                    <div class="friends-info d-flex justify-content-between align-items-center">
                                        <a href="{{ route('user-profile', $suggest_friend->slug) }}">
                                            @if(isset($suggest_friend->hasAvatar))
                                                <img src="{{ asset('public/frontend') }}/assets/images/user/{{ $suggest_friend->hasAvatar->avatar }}" alt="image">
                                            @else
                                                <img src="{{ asset('public/frontend') }}/assets/images/user/user-10.jpg" alt="image">
                                            @endif
                                        </a>
                                        <div class="text ms-3">
                                            <h3><a href="{{ route('user-profile', $suggest_friend->slug) }}">{{ $suggest_friend->name }}</a></h3>
                                            <span>
                                                @if(isset($suggest_friend->hasFriends))
                                                    {{ count($suggest_friend->hasFriends) }}
                                                @else
                                                    0
                                                @endif

                                                Mutual Friends
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="statistics">
                                        <li>
                                            <a href="{{ route('user-profile', $suggest_friend->slug) }}">
                                                <span class="item-number">
                                                    @if(isset($suggest_friend->hasPost) && isset($suggest_friend->hasPost->hasLikes))
                                                        {{ count($suggest_friend->hasPost->hasLikes) }}
                                                    @else
                                                        0
                                                    @endif
                                                </span>
                                                <span class="item-text">Likes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user-profile', $suggest_friend->slug) }}">
                                                <span class="item-number">{{ count($suggest_friend->hasFollowing) }}</span>
                                                <span class="item-text">Following</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user-profile', $suggest_friend->slug) }}">
                                                <span class="item-number">{{ count($suggest_friend->hasFollowers) }}</span>
                                                <span class="item-text">Followers</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="button-group d-flex justify-content-between align-items-center">
                                        <div class="add-friend-btn">
                                            @if(sentFriendRequest($suggest_friend->slug))
                                                <button type="submit">Sent Req..</button>
                                            @else
                                                <a href="{{ route('add-new-friend', $suggest_friend->slug) }}" class="add-friend-btn">Add Friend</a>
                                            @endif
                                        </div>
                                        <div class="send-message-btn">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($data['suggest_friends']->nextPageUrl())
                    <div class="load-more-posts-btn">
                        <a href="{{ $data['suggest_friends']->nextPageUrl() }}"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Content Page Box Area -->
@endsection
