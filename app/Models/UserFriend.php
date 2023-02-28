<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFriend extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hasFriend()
    {
        return $this->hasOne(User::class, 'slug', 'friend_slug');
    }

    public function hasUser()
    {
        return $this->hasOne(User::class, 'slug', 'user_slug');
    }
}
