<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hasLikes()
    {
        return $this->hasMany(PostLike::class, 'post_slug', 'slug');
    }
}
