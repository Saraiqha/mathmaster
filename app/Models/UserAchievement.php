<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAchievement extends Model
{
    protected $fillable = ['user_id', 'badge_key', 'earned_at'];

    protected $casts = ['earned_at' => 'datetime'];
}