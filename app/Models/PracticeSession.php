<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeSession extends Model
{
    protected $fillable = [
        'user_id',
        'topic_id',
        'difficulty',
        'total_questions',
        'correct_answers',
        'score',
        'is_completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function answers()
    {
        return $this->hasMany(PracticeAnswer::class);
    }
}