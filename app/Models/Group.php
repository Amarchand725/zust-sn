<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hasMembers()
    {
        return $this->hasMany(GroupMember::class, 'slug', 'group_slug')->where('accept_leave', 1);
    }
    public function hasPosts()
    {
        return $this->hasMany(Post::class, 'user_slug', 'slug');
    }
}
