<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="main-responsive-menu">
            <div class="responsive-burger-menu d-lg-none d-block">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('public/frontend') }}/assets/images/logo.png" alt="image">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-burger-menu m-auto">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>

                <div class="search-box m-auto">
                    <form>
                        <input type="text" class="input-search" placeholder="Search...">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                </div>

                <!-- Top Option Menu -->
                @include('frontend.layouts.top-nav.menu-option.menu-option')
                <!-- Top Option Menu -->
            </div>
        </nav>
    </div>

    <!-- Top Option Responsive Menu -->
    @include('frontend.layouts.top-nav.res-menu-option.res-menu-option')
    <!-- Top Option Responsive Menu -->
</div>
