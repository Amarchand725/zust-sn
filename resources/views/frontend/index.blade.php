@extends('frontend.layouts.app')

@section('content')
    <!-- Start Content Page Box Area -->
    <div class="content-page-box-area">
        <div class="row">
            <!-- Left widget-area -->
            @include('frontend.layouts.left-widget.left-widget-area')
            <!-- Left widget-area -->

            <!-- Post Area -->
            @include('frontend.layouts.posts-area.post-area')
            <!-- Post Area -->

            <!-- Right widget-area -->
            @include('frontend.layouts.right-widget.right-widget-area')
            <!-- Right widget-area -->
        </div>
    </div>
    <!-- End Content Page Box Area -->
@endsection
