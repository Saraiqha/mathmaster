<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    public function index()
    {
    $topics = Topic::where('is_active', true)
                   ->orderBy('order')
                   ->with('difficultyLevels')
                   ->get();

    $userId = Auth::id();

    // Get all unlocked levels for this user
    $unlockedLevels = \App\Models\LevelUnlock::where('user_id', $userId)
        ->get()
        ->groupBy('topic_id')
        ->map(fn($levels) => $levels->pluck('difficulty')->toArray());

    return view('topics.index', compact('topics', 'unlockedLevels'));
    }

    public function revision(Topic $topic)
    {
        $revision = $topic->quickRevision;
        return view('topics.revision', compact('topic', 'revision'));
    }   
}