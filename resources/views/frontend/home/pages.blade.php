@extends('frontend.layouts.app')

@section('content')
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
                    @foreach ($data['pages'] as $page)
                        @if(checkGroupMember($page->slug, Auth::user()->slug))
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-groups-card">
                                    <div class="groups-image">
                                        <a href="#">
                                            <img src="{{ asset('public/frontend') }}/assets/images/groups/groups-bg-1.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="groups-content">
                                        <div class="groups-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="{{ asset('public/frontend') }}/assets/images/groups/groups-1.jpg" alt="image">
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
                        @endif
                    @endforeach
                </div>

                @if(count($data['pages']))
                    <div class="load-more-posts-btn">
                        <a href="#"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                @endif
            </div>

            <div class="tab-pane fade" id="your-pages" role="tabpanel">
                <div class="row">
                    @foreach ($data['your_pages'] as $page)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-image">
                                    <a href="#">
                                        <img src="{{ asset('public/frontend') }}/assets/images/groups/groups-bg-1.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <a href="#">
                                            @if(isset($page->hasGroupProfilePhoto))
                                                <img src="{{ asset('public/frontend') }}/frontend/images/group_profiles/{{ $page->hasGroupProfilePhoto->photo }}" alt="image">
                                            @else 
                                                <img src="{{ asset('public/frontend') }}/assets/images/groups/groups-1.jpg" alt="image">
                                            @endif
                                        </a>
                                        <div class="text ms-3">
                                            <h3><a href="#">{{ $page->name }}</a></h3>
                                            <span>
                                                @if($page->privacy==1)
                                                    Public
                                                @else 
                                                    Private
                                                @endif
                                                Groups 
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="statistics">
                                        <li>
                                            <a href="#">
                                                <span class="item-number">{{ isset($page->hasPosts)? count($page->hasPosts):0 }}</span>
                                                <span class="item-text">Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="item-number">{{ isset($page->hasMembers)?count($page->hasMembers):0 }}</span>
                                                <span class="item-text">Members</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="item-number">{{ date('Y', strtotime($page->created_at)) }}</span>
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
                    @endforeach
                </div>

                <div class="load-more-posts-btn">
                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
            </div>

            <div class="tab-pane fade" id="you-may-know-pages" role="tabpanel">
                <div class="row">
                    @foreach ($data['pages'] as $page)
                        @if(!checkGroupMember($page->slug, Auth::user()->slug))
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-groups-card">
                                    <div class="groups-image">
                                        <a href="#">
                                            <img src="{{ asset('public/frontend') }}/assets/images/groups/groups-bg-1.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="groups-content">
                                        <div class="groups-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="{{ asset('public/frontend') }}/assets/images/groups/groups-1.jpg" alt="image">
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
                        @endif
                    @endforeach
                </div>

                @if(count($data['pages']))
                    <div class="load-more-posts-btn">
                        <a href="#"><i class="flaticon-loading"></i> Load More</a>
                    </div>
                @endif
            </div>

            <div class="tab-pane fade" id="create-new-page" role="tabpanel">
                <form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">Page Info</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="name">Name</div>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Ener page name.">
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
                                        <textarea name="bio" id="bio" class="form-control" placeholder="Enter bio"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">Contact Info</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="website">Website</div>
                                        <input type="text" name="website" id="website" class="form-control" placeholder="Ener website.">
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="email">Email</div>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Ener email.">
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="phone">Phone</div>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Ener phone.">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">Location Info</a></h3>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="address">Address</div>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Ener address.">
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="city">City/Town</div>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Ener city.">
                                    </div>
                                    <div class="mt-3">
                                        <div class="label" for="zipcode">Zipcode</div>
                                        <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Ener zipcode.">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-groups-card">
                                <div class="groups-content">
                                    <div class="groups-info d-flex justify-content-between align-items-center">
                                        <div class="text">
                                            <h3><a href="#">Logo & Cover Image</a></h3>
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
                                    <div class="mt-3">
                                        <div class="label" for="hours">Hours</div>
                                        <select name="hours" id="hours" class="form-control">
                                            <option value="not-available">Not Available</option>
                                            <option value="always-available">Always Available</option>
                                            <option value="standard-hours">Standard Hours</option>
                                        </select>
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
@endsection
