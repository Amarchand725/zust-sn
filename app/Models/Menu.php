<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function hasParent()
    {
        return $this->hasOne(Menu::class, 'id', 'parent_id');
    }
}
