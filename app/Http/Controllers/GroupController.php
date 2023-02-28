<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function store(Request $request)
    {
        return $request;
        $model = Group::create([
            'group_type' => $request->group_type,
            'group_name' => $request->group_name,
        ]);



        // if (isset($request->profile_image)) {
        //     $profile_image = time().'.'.$request->profile_image->extension();
        //     $request->profile_image->move(public_path('frontend/images/group_profiles'), $profile_image);

        //     $model->profile_image = $profile_image;
        // }

        // if (isset($request->cover_image)) {
        //     $cover_image = time().'.'.$request->cover_image->extension();
        //     $request->cover_image->move(public_path('frontend/images/group_covers'), $cover_image);

        //     $model->cover_image = $cover_image;
        // }
    }
}
