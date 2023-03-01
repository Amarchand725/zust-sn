<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupProfilePhoto;
use App\Models\GroupCoverPhoto;
use App\Models\GroupMember;
use Illuminate\Support\Str;
use Auth;

class GroupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'group_name' => ['required', 'string', 'max:255'],
        ]);

        $model = Group::create([
            'user_slug' => Auth::user()->slug,
            'slug' => Str::slug($request->group_name),
            'name' => $request->group_name,
            'privacy' => $request->privacy,
        ]);

        if($model){
            if (isset($request->profile_image)) {
                $mime_type = $request->profile_image->getMimeType();
                $profile_image = time().'.'.$request->profile_image->extension();
                $request->profile_image->move(public_path('frontend/images/group_profiles'), $profile_image);

                GroupProfilePhoto::create([
                    'group_slug' => $model->slug,
                    'mime_type' => $mime_type,
                    'photo' => $profile_image,
                ]);
            }

            if (isset($request->cover_image)) {
                $mime_type = $request->cover_image->getMimeType();
                $cover_image = time().'.'.$request->cover_image->extension();
                $request->cover_image->move(public_path('frontend/images/group_covers'), $cover_image);

                GroupCoverPhoto::create([
                    'group_slug' => $model->slug,
                    'mime_type' => $mime_type,
                    'photo' => $cover_image,
                ]);
            }

            if(isset($request->friends) && !empty($request->friends)){
                foreach($request->friends as $friend){
                    GroupMember::create([
                        'group_slug' => $model->slug,
                        'user_slug' => $friend,
                    ]);
                }
            }
    
            return redirect()->back()->with('message', 'You have created new group successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.!');
        } 
    }
}
