<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Topic;
use App\Models\PracticeSession;
use App\Models\LevelUnlock;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Get all topics
        $topics = Topic::where('is_active', true)->orderBy('order')->get();

        // Overall stats
        $totalSessions = PracticeSession::where('user_id', $userId)
            ->where('is_completed', true)->count();

        $totalQuestions = PracticeSession::where('user_id', $userId)
            ->where('is_completed', true)->sum('total_questions');

        $totalCorrect = PracticeSession::where('user_id', $userId)
            ->where('is_completed', true)->sum('correct_answers');

        $overallScore = $totalQuestions > 0
            ? round(($totalCorrect / $totalQuestions) * 100)
            : 0;

        $totalPoints = PracticeSession::where('user_id', $userId)
            ->where('is_completed', true)->sum('correct_answers') * 10;

        // Topic performance
        $topicPerformance = [];
        $weakTopic = null;
        $weakestScore = 101;

        foreach ($topics as $topic) {
            $sessions = PracticeSession::where('user_id', $userId)
                ->where('topic_id', $topic->id)
                ->where('is_completed', true)
                ->get();

            $avgScore = $sessions->count() > 0
                ? round($sessions->avg('score'))
                : 0;

            $unlockedLevels = LevelUnlock::where('user_id', $userId)
                ->where('topic_id', $topic->id)
                ->pluck('difficulty')
                ->toArray();

            $topicPerformance[] = [
                'topic' => $topic,
                'avg_score' => $avgScore,
                'sessions_count' => $sessions->count(),
                'unlocked_levels' => $unlockedLevels,
            ];

            // Detect weak topic (only topics attempted)
            if ($sessions->count() > 0 && $avgScore < 60 && $avgScore < $weakestScore) {
                $weakestScore = $avgScore;
                $weakTopic = $topic;
            }
        }

        // Recent activity
        $recentSessions = PracticeSession::where('user_id', $userId)
            ->where('is_completed', true)
            ->with('topic')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Weekly average
        $weeklyAvg = PracticeSession::where('user_id', $userId)
            ->where('is_completed', true)
            ->where('created_at', '>=', now()->subDays(7))
            ->avg('score');
        $weeklyAvg = $weeklyAvg ? round($weeklyAvg) : 0;

        // Chart data
        $chartLabels = $topics->pluck('name')->map(fn($n) => strlen($n) > 15 ? substr($n, 0, 15).'...' : $n)->toArray();
        $chartData = collect($topicPerformance)->pluck('avg_score')->toArray();

        return view('dashboard', compact(
            'topics',
            'totalSessions',
            'totalQuestions',
            'overallScore',
            'totalPoints',
            'topicPerformance',
            'weakTopic',
            'recentSessions',
            'weeklyAvg',
            'chartLabels',
            'chartData'
        ));
    }
}