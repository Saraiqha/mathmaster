<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Question;
use App\Models\PracticeSession;
use App\Models\PracticeAnswer;
use Illuminate\Support\Facades\Auth;
use App\Models\LevelUnlock;

class PracticeController extends Controller
{
    // Show difficulty selection page
    public function selectDifficulty(Topic $topic)
    {
    $userId = Auth::id();

    $unlockedLevels = ['easy']; // Easy is always unlocked

    if (LevelUnlock::where('user_id', $userId)->where('topic_id', $topic->id)->where('difficulty', 'medium')->exists()) {
        $unlockedLevels[] = 'medium';
    }

    if (LevelUnlock::where('user_id', $userId)->where('topic_id', $topic->id)->where('difficulty', 'hard')->exists()) {
        $unlockedLevels[] = 'hard';
    }

    return view('practice.select-difficulty', compact('topic', 'unlockedLevels'));
    }

    // Show question count selection
    public function selectCount(Topic $topic, $difficulty)
    {
        return view('practice.select-count', compact('topic', 'difficulty'));
    }

    // Start practice session
    public function start(Request $request, Topic $topic, $difficulty)
    {
        $count = max(5, (int) $request->input('count', 5));

        // Get balanced random questions
        $types = ['mcq', 'true_false', 'numerical', 'multiple_response'];
        $perType = (int) floor($count / 4);
        $remainder = $count % 4;

        $questions = collect();
        foreach ($types as $index => $type) {
            $limit = $perType + ($index < $remainder ? 1 : 0);
            $typeQuestions = Question::where('topic_id', $topic->id)
                ->where('difficulty', $difficulty)
                ->where('type', $type)
                ->where('is_active', true)
                ->inRandomOrder()
                ->limit($limit)
                ->get();
            $questions = $questions->merge($typeQuestions);
        }

        $questions = $questions->shuffle();

        // Create practice session
        $session = PracticeSession::create([
            'user_id' => Auth::id(),
            'topic_id' => $topic->id,
            'difficulty' => $difficulty,
            'total_questions' => $questions->count(),
            'correct_answers' => 0,
            'score' => 0,
            'is_completed' => false,
        ]);

        // Store question IDs in session
        session(['practice_questions' => $questions->pluck('id')->toArray()]);
        session(['practice_session_id' => $session->id]);
        session(['practice_current' => 0]);
        session(['practice_streak' => 0]);
        session(['practice_points' => 0]);

        return redirect()->route('practice.question', ['session' => $session->id]);
    }

    // Show current question
    public function question(PracticeSession $session)
{
    $questionIds = session('practice_questions', []);
    $current = session('practice_current', 0);

    if (empty($questionIds) || $current >= count($questionIds)) {
        return redirect()->route('practice.summary', $session->id);
    }

    $question = Question::find($questionIds[$current]);

    if (!$question) {
        return redirect()->route('practice.summary', $session->id);
    }

    $total = count($questionIds);
    $streak = session('practice_streak', 0);
    $points = session('practice_points', 0);

    return view('practice.question', compact(
        'session', 'question', 'current', 'total', 'streak', 'points'
    ));
}

    // Submit answer
    public function answer(Request $request, PracticeSession $session)
    {
        $questionIds = session('practice_questions', []);
        $current = session('practice_current', 0);
        $question = Question::find($questionIds[$current]);

        $studentAnswer = $request->input('answer', '');
        $isCorrect = false;
        

        // Check answer based on type
        if ($question->type === 'multiple_response') {
            $selected = is_array($request->input('answer')) ? $request->input('answer') : [];
            sort($selected);
            $studentAnswer = implode(',', $selected);
            $correctAnswers = explode(',', $question->correct_answers);
            sort($correctAnswers);
            $isCorrect = $selected === $correctAnswers;
        } elseif ($question->type === 'numerical') {
            $isCorrect = trim(strtolower($studentAnswer)) === trim(strtolower($question->correct_answer));
        } elseif ($question->type === 'true_false') {
            $isCorrect = strtolower(trim($studentAnswer)) === strtolower(trim($question->correct_answer));
        } else {
            // MCQ
            $isCorrect = strtoupper(trim($studentAnswer)) === strtoupper(trim($question->correct_answer));
        }

        // Validate answer not empty
        if ($question->type === 'multiple_response') {
            $selected = is_array($request->input('answer')) ? $request->input('answer') : [];
            if (empty($selected)) {
                return back()->withErrors(['answer' => 'Please select at least one answer before submitting.']);
            }
        } elseif ($studentAnswer === '') {
            return back()->withErrors(['answer' => 'Please select an answer before submitting.']);
        }

        // Save answer
        PracticeAnswer::create([
            'practice_session_id' => $session->id,
            'question_id' => $question->id,
            'student_answer' => $studentAnswer,
            'is_correct' => $isCorrect,
        ]);

        // Update streak and points
        $streak = session('practice_streak', 0);
        $points = session('practice_points', 0);

        if ($isCorrect) {
            $streak++;
            $points += 10;
        } else {
            $streak = 0;
        }

        session(['practice_streak' => $streak]);
        session(['practice_points' => $points]);
        session(['practice_current' => $current + 1]);

        // Update session score
        $session->increment('correct_answers', $isCorrect ? 1 : 0);

        // Check if this was the last question
        $nextIndex = session('practice_current', 0);
        $totalQuestions = count(session('practice_questions', []));

        if ($nextIndex >= $totalQuestions) {
        return view('practice.feedback', [
        'session' => $session,
        'question' => $question,
        'studentAnswer' => $studentAnswer,
        'isCorrect' => $isCorrect,
        'streak' => $streak,
        'points' => $points,
        'isLastQuestion' => true,
    ]);
}

return view('practice.feedback', [
    'session' => $session,
    'question' => $question,
    'studentAnswer' => $studentAnswer,
    'isCorrect' => $isCorrect,
    'streak' => $streak,
    'points' => $points,
    'isLastQuestion' => false,
]);
    }

    // Show session summary
    public function summary(PracticeSession $session)
{
    $correctAnswers = PracticeAnswer::where('practice_session_id', $session->id)
        ->where('is_correct', true)
        ->count();

    $totalAnswers = PracticeAnswer::where('practice_session_id', $session->id)
        ->count();

    $score = $totalAnswers > 0
        ? round(($correctAnswers / $totalAnswers) * 100)
        : 0;

    $points = session('practice_points', $correctAnswers * 10);

    $session->update([
        'correct_answers' => $correctAnswers,
        'total_questions' => $totalAnswers,
        'score' => $score,
        'is_completed' => true,
    ]);

    // Check level unlock
    $unlocked = null;
    if ($points >= 50) {
        $nextLevel = null;
        if ($session->difficulty === 'easy') $nextLevel = 'medium';
        elseif ($session->difficulty === 'medium') $nextLevel = 'hard';

        if ($nextLevel) {
            $alreadyUnlocked = LevelUnlock::where('user_id', Auth::id())
                ->where('topic_id', $session->topic_id)
                ->where('difficulty', $nextLevel)
                ->exists();

            if (!$alreadyUnlocked) {
                LevelUnlock::create([
                    'user_id' => Auth::id(),
                    'topic_id' => $session->topic_id,
                    'difficulty' => $nextLevel,
                ]);
                $unlocked = $nextLevel;
            }
        }
    }

    // Clear session data
    session()->forget([
        'practice_questions',
        'practice_session_id',
        'practice_current',
        'practice_streak',
        'practice_points'
    ]);

    $newBadges = \App\Services\AchievementService::check(auth()->user());
    $badgeList = \App\Services\AchievementService::badges();

    return view('practice.summary', compact('session', 'score', 'points', 'unlocked', 'newBadges', 'badgeList'));
}
}