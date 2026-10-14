<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DifficultyLevel extends Model
{
    protected $fillable = [
        'topic_id',
        'level',
        'is_active'
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}