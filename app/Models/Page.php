<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hasLogoImage()
    {
        return $this->hasOne(PageLogo::class, 'slug', 'page_slug')->orderby('id', 'desc')->where('status', 1);
    }

    public function hasPosts()
    {
        return $this->hasMany(Post::class, 'user_slug', 'slug');
    }

    public function hasMembers()
    {
        return $this->hasMany(PageMember::class, 'page_slug', 'slug');
    }
}
