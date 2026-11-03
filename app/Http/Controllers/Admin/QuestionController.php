<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $topics = Topic::orderBy('order')->get();

        $query = Question::with('topic')
            ->orderBy('id');

        if ($request->filled('topic_id')) {
            $query->where('topic_id', $request->topic_id);
        }
        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->difficulty);
        }
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        if ($request->filled('search')) {
            $query->where('question_text', 'like', '%' . $request->search . '%');
        }

        $questions = $query->paginate(20)->withQueryString();

        return view('admin.questions.index', compact('questions', 'topics'));
    }

    public function create()
    {
        return view('admin.questions.form', [
            'question' => new Question(),
            'topics' => Topic::orderBy('order')->get(),
        ]);
    }

    public function store(Request $request)
    {
        Question::create($this->validated($request));

        return redirect()->route('admin.questions.index')->with('success', 'Question added.');
    }

    public function edit(Question $question)
    {
        return view('admin.questions.form', [
            'question' => $question,
            'topics' => Topic::orderBy('order')->get(),
        ]);
    }

    public function update(Request $request, Question $question)
    {
        $question->update($this->validated($request));

        return redirect()->route('admin.questions.index')->with('success', 'Question updated.');
    }

    public function destroy(Question $question)
    {
        try {
            $question->delete();
        } catch (QueryException $e) {
            return back()->with('error', 'This question already has student answers, so it cannot be deleted. Edit it instead.');
        }

        return redirect()->route('admin.questions.index')->with('success', 'Question deleted.');
    }

    private function validated(Request $request): array
    {
        $type = $request->input('type');

        $rules = [
            'topic_id' => 'required|exists:topics,id',
            'difficulty' => 'required|in:easy,medium,hard',
            'type' => 'required|in:mcq,true_false,numerical,multiple_response',
            'question_text' => 'required|string',
            'question_text_bm' => 'required|string',
            'solution_steps' => 'required|string',
            'solution_steps_bm' => 'required|string',
        ];

        if (in_array($type, ['mcq', 'multiple_response'])) {
            foreach (['a', 'b', 'c', 'd'] as $l) {
                $rules["option_$l"] = 'required|string';
                $rules["option_{$l}_bm"] = 'required|string';
            }
        }

        if ($type === 'mcq') {
            $rules['correct_answer'] = 'required|in:A,B,C,D';
        } elseif ($type === 'true_false') {
            $rules['correct_answer'] = 'required|in:True,False';
        } elseif ($type === 'numerical') {
            $rules['correct_answer'] = 'required|string|max:100';
        } elseif ($type === 'multiple_response') {
            $rules['correct_answers'] = 'required|array|min:1';
            $rules['correct_answers.*'] = 'in:A,B,C,D';
        }

        $data = $request->validate($rules);

        if ($type === 'multiple_response') {
            $picked = $data['correct_answers'];
            sort($picked);
            $data['correct_answers'] = implode(',', $picked);
            $data['correct_answer'] = $picked[0];
        } else {
            $data['correct_answers'] = null;
        }

        foreach (['a', 'b', 'c', 'd'] as $l) {
            $data["option_$l"] = $data["option_$l"] ?? null;
            $data["option_{$l}_bm"] = $data["option_{$l}_bm"] ?? null;
        }

        return $data;
    }
}