<?php

namespace App\Services;

use App\Models\LevelUnlock;
use App\Models\PracticeAnswer;
use App\Models\PracticeSession;
use App\Models\Topic;
use App\Models\UserAchievement;

class AchievementService
{
    public static function badges(): array
    {
        return [
            'first_session' => ['🚀', 'First Steps', 'Langkah Pertama', 'Complete your first practice session.', 'Selesaikan sesi latihan pertama anda.'],
            'perfect_score' => ['💯', 'Perfect Score', 'Skor Sempurna', 'Score 100% in a practice session.', 'Dapatkan 100% dalam satu sesi latihan.'],
            'high_scorer'   => ['🏆', 'High Scorer', 'Pencapai Tinggi', 'Score 80% or higher in a session.', 'Dapatkan 80% atau lebih dalam satu sesi.'],
            'streak_5'      => ['🔥', 'On a Roll', 'Berterusan', 'Answer 5 questions correctly in a row.', 'Jawab 5 soalan dengan betul berturut-turut.'],
            'streak_10'     => ['⚡', 'On Fire', 'Membara', 'Answer 10 questions correctly in a row.', 'Jawab 10 soalan dengan betul berturut-turut.'],
            'unlock_medium' => ['🔓', 'Level Up', 'Naik Tahap', 'Unlock a Medium level.', 'Buka kunci tahap Sederhana.'],
            'unlock_hard'   => ['🗝️', 'Challenger', 'Pencabar', 'Unlock a Hard level.', 'Buka kunci tahap Sukar.'],
            'all_topics'    => ['🌟', 'All-Rounder', 'Serba Boleh', 'Practise all 5 topics.', 'Berlatih dalam kesemua 5 topik.'],
            'questions_50'  => ['📝', 'Getting Started', 'Mula Mantap', 'Answer 50 questions.', 'Jawab 50 soalan.'],
            'questions_100' => ['🎓', 'Century', 'Seratus', 'Answer 100 questions.', 'Jawab 100 soalan.'],
        ];
    }

    /** Check all badges for a user, save new ones, return the keys newly earned. */
    public static function check($user): array
    {
        $already = UserAchievement::where('user_id', $user->id)->pluck('badge_key')->all();

        $sessions = PracticeSession::where('user_id', $user->id)->where('is_completed', 1)->get();
        $sessionIds = PracticeSession::where('user_id', $user->id)->pluck('id');
        $answers = PracticeAnswer::whereIn('practice_session_id', $sessionIds)->orderBy('id')->get();

        // Longest run of correct answers
        $best = 0;
        $run = 0;
        foreach ($answers as $a) {
            $run = $a->is_correct ? $run + 1 : 0;
            $best = max($best, $run);
        }

        $unlocks = LevelUnlock::where('user_id', $user->id)->pluck('difficulty');

        $earned = [
            'first_session' => $sessions->count() >= 1,
            'perfect_score' => $sessions->where('score', '>=', 100)->count() > 0,
            'high_scorer'   => $sessions->where('score', '>=', 80)->count() > 0,
            'streak_5'      => $best >= 5,
            'streak_10'     => $best >= 10,
            'unlock_medium' => $unlocks->contains('medium'),
            'unlock_hard'   => $unlocks->contains('hard'),
            'all_topics'    => $sessions->pluck('topic_id')->unique()->count() >= Topic::count(),
            'questions_50'  => $answers->count() >= 50,
            'questions_100' => $answers->count() >= 100,
        ];

        $new = [];
        foreach ($earned as $key => $ok) {
            if ($ok && !in_array($key, $already)) {
                UserAchievement::create([
                    'user_id' => $user->id,
                    'badge_key' => $key,
                    'earned_at' => now(),
                ]);
                $new[] = $key;
            }
        }

        return $new;
    }
}