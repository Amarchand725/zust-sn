<?php
use App\Models\Menu;
use App\Models\SystemSetting;
use App\Models\CompanyProfile;
use App\Models\EmailConfig;
use App\Models\UserFriend;
use Illuminate\Support\Facades\Auth;

function menus(){
    return Menu::where('status', 1)->get();
}

function companyProfile()
{
    return CompanyProfile::first();
}

function emailConfig(){
    return EmailConfig::first();
}

function systemSetting(){
    return SystemSetting::first();
}

function sentFriendRequest($user_slug){
    return UserFriend::where('user_slug', $user_slug)->where('friend_slug', Auth::user()->slug)->first();
}

function confirmFriendRequest($friend_slug){
    return UserFriend::where('user_slug', Auth::user()->slug)->where('friend_slug', $friend_slug)->first();
}
