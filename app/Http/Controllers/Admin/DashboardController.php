<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PracticeAnswer;
use App\Models\PracticeSession;
use App\Models\Question;
use App\Models\Topic;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $students = User::where('is_admin', false);

        $stats = [
            'students'  => (clone $students)->count(),
            'sessions'  => PracticeSession::where('is_completed', 1)->count(),
            'questions' => Question::count(),
            'average'   => round(PracticeSession::where('is_completed', 1)->avg('score') ?? 0),
        ];

        $topics = Topic::orderBy('order')->get();
        $counts = Question::selectRaw('topic_id, difficulty, count(*) as n')
            ->groupBy('topic_id', 'difficulty')
            ->get()
            ->groupBy('topic_id');

        $bank = [];
        foreach ($topics as $t) {
            $row = $counts->get($t->id) ?? collect();
            $bank[$t->id] = [
                'easy'   => $row->firstWhere('difficulty', 'easy')->n ?? 0,
                'medium' => $row->firstWhere('difficulty', 'medium')->n ?? 0,
                'hard'   => $row->firstWhere('difficulty', 'hard')->n ?? 0,
            ];
        }

        $hard = PracticeAnswer::selectRaw('question_id, count(*) as attempts, sum(is_correct) as correct')
            ->groupBy('question_id')
            ->havingRaw('count(*) >= 3')
            ->orderByRaw('sum(is_correct) / count(*) asc')
            ->limit(5)
            ->get();

        $hardQuestions = Question::whereIn('id', $hard->pluck('question_id'))->get()->keyBy('id');

        $recentStudents = (clone $students)->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'topics', 'bank', 'hard', 'hardQuestions', 'recentStudents'));
    }
}