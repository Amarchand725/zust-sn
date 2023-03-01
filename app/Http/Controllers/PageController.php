<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserFriend;
use App\Models\Page;
use App\Models\PageContact;
use App\Models\PageLocation;
use App\Models\PageLogo;
use App\Models\PageCoverPhoto;
use Auth;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $data = [];
        $data['friends'] = UserFriend::orderby('id', 'desc')->where('user_slug', Auth::user()->slug)->orWhere('friend_slug', Auth::user()->slug)->where('un_friend', 0)->get();
        $data['your_pages'] = Page::orderby('id', 'desc')->where('user_slug', Auth::user()->slug)->get();
        $data['pages'] = Page::orderby('id', 'desc')->where('user_slug', '!=', Auth::user()->slug)->get();
        return view('frontend.home.pages', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'zipcode' => ['string', 'max:255'],
        ]);

        $model = Page::create([
            'user_slug' => Auth::user()->slug,
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'category_slug' => $request->category_slug,
            'bio' => $request->bio,
        ]);

        if($model){
            if (isset($request->logo)) {
                $mime_type = $request->logo->getMimeType();
                $logo = time().'.'.$request->logo->extension();
                $request->logo->move(public_path('frontend/images/page_logos-'), $logo);

                PageLogo::create([
                    'page_slug' => $model->slug,
                    'mime_type' => $mime_type,
                    'logo' => $logo,
                ]);
            }

            if (isset($request->page_cover)) {
                $mime_type = $request->page_cover->getMimeType();
                $page_cover = time().'.'.$request->page_cover->extension();
                $request->page_cover->move(public_path('frontend/images/page_covers'), $page_cover);

                PageCoverPhoto::create([
                    'group_slug' => $model->slug,
                    'mime_type' => $mime_type,
                    'photo' => $page_cover,
                ]);
            }

            PageContact::create([
                'page_slug' => $model->slug,
                'website' => $request->website,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);

            PageLocation::create([
                'page_slug' => $model->slug,
                'address' => $request->address,
                'city' => $request->city,
                'zipcode' => $request->zipcode,
                'hours' => $request->hours,
            ]);

            return redirect()->back()->with('message', 'You have created new page successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.!');
        }
    }
}
