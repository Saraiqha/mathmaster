<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeAnswer extends Model
{
    protected $fillable = [
        'practice_session_id',
        'question_id',
        'student_answer',
        'is_correct'
    ];

    public function practiceSession()
    {
        return $this->belongsTo(PracticeSession::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}