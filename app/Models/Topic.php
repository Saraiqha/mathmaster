<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name',
        'name_bm', 
        'description',
        'description_bm',
        'order',
        'is_active'
    ];

    public function difficultyLevels()
    {
        return $this->hasMany(DifficultyLevel::class);
    }

    public function quickRevision()
    {
        return $this->hasOne(QuickRevision::class);
    }

    public function questions()
    {
    return $this->hasMany(Question::class);
    }
}