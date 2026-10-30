<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\PracticeSession;
use App\Models\LevelUnlock;

class ProgressController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $topics = Topic::orderBy('order')->get();

        $sessions = PracticeSession::where('user_id', $user->id)
            ->where('is_completed', 1)
            ->with('topic')
            ->orderBy('created_at')
            ->get();

        $unlocks = LevelUnlock::where('user_id', $user->id)->get()->groupBy('topic_id');

        // Topic x level table: unlocked?, attempts, best score
        $matrix = [];
        foreach ($topics as $t) {
            foreach (['easy', 'medium', 'hard'] as $level) {
                $levelSessions = $sessions->where('topic_id', $t->id)->where('difficulty', $level);
                $unlocked = $level === 'easy'
                    || ($unlocks->get($t->id) ?? collect())->contains('difficulty', $level);

                $matrix[$t->id][$level] = [
                    'unlocked' => $unlocked,
                    'attempts' => $levelSessions->count(),
                    'best'     => $levelSessions->count() ? round($levelSessions->max('score')) : null,
                ];
            }
        }

        // Chart: last 20 sessions
        $chartSessions = $sessions->slice(-20)->values();
        $chartLabels = $chartSessions->map(fn ($s) => $s->created_at->format('d M'))->all();
        $chartScores = $chartSessions->map(fn ($s) => round($s->score))->all();

        // Summary numbers
        $totalSessions = $sessions->count();
        $averageScore = $totalSessions ? round($sessions->avg('score')) : 0;
        $bestScore = $totalSessions ? round($sessions->max('score')) : 0;

        // History: newest first, latest 15
        $history = $sessions->sortByDesc('created_at')->take(15);

        return view('progress.index', compact(
            'topics', 'matrix', 'chartLabels', 'chartScores',
            'totalSessions', 'averageScore', 'bestScore', 'history'
        ));
    }
}