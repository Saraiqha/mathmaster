<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'topic_id',
        'difficulty',
        'type',
        'question_text',
        'question_text_bm',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'option_a_bm',
        'option_b_bm',
        'option_c_bm',
        'option_d_bm',
        'correct_answer',
        'solution_steps',
        'solution_steps_bm',
        'is_active'
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function practiceAnswers()
    {
        return $this->hasMany(PracticeAnswer::class);
    }
}