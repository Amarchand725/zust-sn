<div class="col-lg-3 col-md-12">
    <aside class="widget-area">
        <div class="widget widget-weather">
            <div class="weather-image">
                <a href="#"><img src="{{ asset('public/frontend') }}/assets/images/weather/weather.jpg" alt="image"></a>
            </div>
        </div>

        <!-- Birthday widget -->
        @include('frontend.layouts.right-widget.birthday-widget')
        <!-- Birthday widget -->

        <!-- Event widget -->
        @include('frontend.layouts.right-widget.event-widget')
        <!-- Event widget -->

        <!-- Following widget -->
        @include('frontend.layouts.right-widget.following-widget')
        <!-- Following widget -->
    </aside>
</div>
