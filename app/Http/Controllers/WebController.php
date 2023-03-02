<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserFriend;
use App\Models\Group;
use App\Models\GroupMember;
use Auth;
use Illuminate\Support\Str;

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
        $data = [];
        $data['friend_requests'] = UserFriend::orderby('id','desc')->where('user_slug', Auth::user()->slug)->paginate(12);
        $friends = UserFriend::where('user_slug', Auth::user()->slug)->orwhere('friend_slug', Auth::user()->slug)->where('accept_reject', 1)->get(['friend_slug']);
        $data['suggest_friends'] = User::role('User')->orderby('id', 'desc')->where('slug', '!=', Auth::user()->slug)->whereNotIn('slug', $friends)->paginate(12);
        return view('frontend.home.friends', compact('data'));
    }

    public function AddNewFriend($slug)
    {
        $sent_request = UserFriend::create([
            'user_slug' => $slug,
            'friend_slug' => Auth::user()->slug,
        ]);

        if($sent_request){
            return redirect()->back()->with('message', 'You have friend request successfully!');
        }
    }

    public function unFriend($slug)
    {
        $accepted = UserFriend::where('user_slug', Auth::user()->slug)->where('friend_slug', $slug)
                    ->orWhere('user_slug', $slug)->where('friend_slug', Auth::user()->slug)
                    ->update([
                        'un_friend_by_slug' => Auth::user()->slug,
                        'un_friend' => 1,
                    ]);
        if($accepted){
            return redirect()->back()->with('message', 'You have blocked friend successfully!');
        }
    }

    public function confirmFriendRequest($slug)
    {
        $accepted = UserFriend::where('user_slug', Auth::user()->slug)->where('friend_slug', $slug)->update([
            'notify' => 1,
            'accept_reject' => 1,
        ]);

        if($accepted){
            return redirect()->back()->with('message', 'You have accepted friend request successfully!');
        }
    }

    public function userProfile($slug)
    {
        $data = [];
        $data['user'] = User::where('slug', $slug)->first();
        return view('frontend.home.my-profile', compact('data'));
    }

    public function groups()
    {
        $data = [];
        $data['friends'] = UserFriend::orderby('id', 'desc')->where('user_slug', Auth::user()->slug)->orWhere('friend_slug', Auth::user()->slug)->where('un_friend', 0)->get();
        $data['your_groups'] = Group::orderby('id', 'desc')->where('user_slug', Auth::user()->slug)->get();
        $data['groups'] = Group::orderby('id', 'desc')->where('user_slug', '!=', Auth::user()->slug)->get();

        return view('frontend.home.groups', compact('data'));
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
