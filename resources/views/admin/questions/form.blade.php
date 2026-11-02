@php
    $isEdit = $question->exists;
    $val = fn ($field) => old($field, $question->{$field});
    $type = $val('type') ?: 'mcq';
    $pickedMulti = old('correct_answers', $question->correct_answers ? explode(',', $question->correct_answers) : []);
    $input = 'w-full border border-slate-200 rounded-xl px-3 py-2 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400';
@endphp

<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">Home → Admin Panel → Questions → {{ $isEdit ? 'Edit' : 'Add' }}</p>
            <h2 class="font-bold text-lg text-slate-800">{{ $isEdit ? 'Edit Question #' . $question->id : 'Add Question' }}</h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto">

        @if($errors->any())
            <div class="mb-4 p-3 bg-rose-50 border border-rose-100 rounded-xl text-sm text-rose-700">
                Please fix the highlighted problems:
                <ul class="list-disc ml-5 mt-1 text-xs">
                    @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ $isEdit ? route('admin.questions.update', $question) : route('admin.questions.store') }}"
            class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 space-y-5">
            @csrf
            @if($isEdit) @method('PUT') @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Topic</label>
                    <select name="topic_id" class="{{ $input }}">
                        @foreach($topics as $t)
                            <option value="{{ $t->id }}" @selected($val('topic_id') == $t->id)>{{ $t->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Level</label>
                    <select name="difficulty" class="{{ $input }}">
                        @foreach(['easy' => 'Easy', 'medium' => 'Medium', 'hard' => 'Hard'] as $v => $l)
                            <option value="{{ $v }}" @selected($val('difficulty') == $v)>{{ $l }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Type</label>
                    <select name="type" id="type" onchange="syncType()" class="{{ $input }}">
                        @foreach(['mcq' => 'MCQ', 'true_false' => 'True / False', 'numerical' => 'Numerical', 'multiple_response' => 'Multiple Response'] as $v => $l)
                            <option value="{{ $v }}" @selected($type == $v)>{{ $l }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Question (English)</label>
                <textarea name="question_text" rows="3" class="{{ $input }}">{{ $val('question_text') }}</textarea>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Soalan (Bahasa Melayu)</label>
                <textarea name="question_text_bm" rows="3" class="{{ $input }}">{{ $val('question_text_bm') }}</textarea>
            </div>

            <div data-types="mcq multiple_response" class="space-y-3">
                <p class="text-xs font-semibold text-slate-600">Options</p>
                @foreach(['a' => 'A', 'b' => 'B', 'c' => 'C', 'd' => 'D'] as $l => $L)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <input type="text" name="option_{{ $l }}" value="{{ $val('option_' . $l) }}" placeholder="Option {{ $L }} (English)" class="{{ $input }}">
                    <input type="text" name="option_{{ $l }}_bm" value="{{ $val('option_' . $l . '_bm') }}" placeholder="Pilihan {{ $L }} (BM)" class="{{ $input }}">
                </div>
                @endforeach
            </div>

            <div data-types="mcq">
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Correct answer</label>
                <select name="correct_answer" class="{{ $input }}">
                    @foreach(['A', 'B', 'C', 'D'] as $L)
                        <option value="{{ $L }}" @selected($val('correct_answer') == $L)>{{ $L }}</option>
                    @endforeach
                </select>
            </div>

            <div data-types="true_false">
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Correct answer</label>
                <select name="correct_answer" class="{{ $input }}">
                    @foreach(['True', 'False'] as $L)
                        <option value="{{ $L }}" @selected($val('correct_answer') == $L)>{{ $L }}</option>
                    @endforeach
                </select>
            </div>

            <div data-types="numerical">
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Correct answer (a number, for example 15 or -9)</label>
                <input type="text" name="correct_answer" value="{{ $val('correct_answer') }}" class="{{ $input }}">
            </div>

            <div data-types="multiple_response">
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Correct answers (tick all that apply)</label>
                <div class="flex gap-5">
                    @foreach(['A', 'B', 'C', 'D'] as $L)
                    <label class="flex items-center gap-2 text-sm text-slate-700">
                        <input type="checkbox" name="correct_answers[]" value="{{ $L }}" class="accent-teal-600"
                            @checked(in_array($L, $pickedMulti))> {{ $L }}
                    </label>
                    @endforeach
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Solution steps (English). Write "Step 1: ... Step 2: ..."</label>
                <textarea name="solution_steps" rows="4" class="{{ $input }}">{{ $val('solution_steps') }}</textarea>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-1.5">Langkah penyelesaian (BM). Tulis "Langkah 1: ... Langkah 2: ..."</label>
                <textarea name="solution_steps_bm" rows="4" class="{{ $input }}">{{ $val('solution_steps_bm') }}</textarea>
            </div>

            <div class="flex gap-3 pt-2">
                <a href="{{ route('admin.questions.index') }}"
                    class="px-5 py-2.5 text-sm font-medium bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition">Cancel</a>
                <button type="submit"
                    class="px-6 py-2.5 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">
                    {{ $isEdit ? 'Save Changes' : 'Add Question' }}
                </button>
            </div>
        </form>
    </div>

    <script>
        function syncType() {
            const t = document.getElementById('type').value;
            document.querySelectorAll('[data-types]').forEach(block => {
                const show = block.dataset.types.split(' ').includes(t);
                block.classList.toggle('hidden', !show);
                block.querySelectorAll('input, select, textarea').forEach(el => el.disabled = !show);
            });
        }
        document.addEventListener('DOMContentLoaded', syncType);
    </script>
</x-app-layout>