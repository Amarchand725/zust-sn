<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'name',
        'email',
        'password',
        'is_email_verified',
        'last_seen',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasProfile()
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'id');
    }

    public function hasAvatar()
    {
        return $this->hasOne(Avatar::class,'user_slug')->where('status', 1)->orderby('id', 'desc');
    }

    public function hasFriends(){
        return $this->belongsTo(UserFriend::class);
    }

    public function hasFollowers()
    {
        return $this->hasMany(Followers::class, 'user_slug', 'slug');
    }

    public function hasFollowing()
    {
        return $this->hasMany(Followers::class, 'follower_slug', 'slug');
    }

    public function hasPosts()
    {
        return $this->hasMany(Post::class, 'user_slug', 'slug');
    }

    public function hasSentFriendRequest()
    {
        return $this->hasOne(UserFriend::class, 'friend_slug', 'slug')->where('accept_reject', 0);
    }
}
