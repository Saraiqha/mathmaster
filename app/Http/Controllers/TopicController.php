<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::where('is_active', true)
                       ->orderBy('order')
                       ->with('difficultyLevels')
                       ->get();

        return view('topics.index', compact('topics'));
    }

    public function revision(Topic $topic)
    {
        $revision = $topic->quickRevision;
        return view('topics.revision', compact('topic', 'revision'));
    }   
}