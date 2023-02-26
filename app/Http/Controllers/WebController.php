<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function notification()
    {
        return view('frontend.home.notification');
    }
    public function chat()
    {
        return view('frontend.home.chat');
    }
    public function friends()
    {
        return view('frontend.home.friends');
    }
    public function groups()
    {
        return view('frontend.home.groups');
    }
    public function favorite()
    {
        return view('frontend.home.favorite');
    }
    public function events()
    {
        return view('frontend.home.events');
    }
    public function liveChat()
    {
        return view('frontend.home.live-chat');
    }
    public function birthday()
    {
        return view('frontend.home.birthday');
    }
    public function videos()
    {
        return view('frontend.home.videos');
    }
    public function weather()
    {
        return view('frontend.home.weather');
    }
    public function marketplace()
    {
        return view('frontend.home.marketplace');
    }
    public function myProfile()
    {
        return view('frontend.home.my-profile');
    }
    public function accountSetting()
    {
        return view('frontend.home.account-setting');
    }
    public function privacy()
    {
        return view('frontend.home.privacy');
    }
    public function helpAndSupport()
    {
        return view('frontend.home.help-and-support');
    }
}
