<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Answer Feedback</span>
            <span class="lang-bm hidden">Maklum Balas Jawapan</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Result Banner --}}
        @if($isCorrect)
        <div class="bg-teal-50 border border-teal-200 rounded-2xl p-5 mb-6 text-center shadow-sm">
            <div class="text-4xl mb-2">✅</div>
            <p class="text-base font-bold text-teal-700">
                <span class="lang-en">Correct! Well done!</span>
                <span class="lang-bm hidden">Betul! Tahniah!</span>
            </p>
            <p class="text-xs text-teal-500 mt-1">
                🔥 <span class="lang-en">Streak:</span><span class="lang-bm hidden">Jujukan:</span>
                <strong>{{ $streak }}</strong> &nbsp;|&nbsp; ⭐ +10
                <span class="lang-en">points</span><span class="lang-bm hidden">mata</span>
            </p>
        </div>
        @else
        <div class="bg-rose-50 border border-rose-200 rounded-2xl p-5 mb-6 text-center shadow-sm">
            <div class="text-4xl mb-2">❌</div>
            <p class="text-base font-bold text-rose-700">
                <span class="lang-en">Not quite — let's learn from this.</span>
                <span class="lang-bm hidden">Tidak tepat — mari kita belajar daripada ini.</span>
            </p>
            <p class="text-xs text-rose-400 mt-1">
                <span class="lang-en">Streak reset. Keep going!</span>
                <span class="lang-bm hidden">Jujukan diset semula. Teruskan!</span>
            </p>
        </div>
        @endif

        {{-- Question Recap --}}
        <div class="bg-white border border-gray-100 rounded-2xl p-6 mb-4 shadow-sm">

            <p class="text-xs text-gray-400 mb-2 font-medium uppercase tracking-wide">
                <span class="lang-en">Question</span>
                <span class="lang-bm hidden">Soalan</span>
            </p>
            <p class="text-sm text-gray-800 mb-4 lang-en leading-relaxed">{{ $question->question_text }}</p>
            <p class="text-sm text-gray-800 mb-4 lang-bm hidden leading-relaxed">{{ $question->question_text_bm }}</p>

            {{-- Your Answer --}}
            <div class="mb-3 p-3 rounded-xl {{ $isCorrect ? 'bg-teal-50 border border-teal-100' : 'bg-rose-50 border border-rose-100' }}">
                <p class="text-xs font-medium mb-1 {{ $isCorrect ? 'text-teal-500' : 'text-rose-400' }}">
                    <span class="lang-en">Your answer:</span>
                    <span class="lang-bm hidden">Jawapan anda:</span>
                </p>
                <p class="text-sm font-semibold {{ $isCorrect ? 'text-teal-700' : 'text-rose-600' }}">
                    {{ $studentAnswer ?: '(no answer)' }}
                </p>
            </div>

            {{-- Correct Answer --}}
            @if(!$isCorrect)
            <div class="p-3 rounded-xl bg-teal-50 border border-teal-100">
                <p class="text-xs font-medium text-teal-500 mb-1">
                    <span class="lang-en">Correct answer:</span>
                    <span class="lang-bm hidden">Jawapan betul:</span>
                </p>
                <p class="text-sm font-semibold text-teal-700">
                    @if($question->type === 'multiple_response')
                        {{ $question->correct_answers }}
                    @else
                        {{ $question->correct_answer }}
                    @endif
                </p>
            </div>
            @endif

        </div>

        {{-- Step by Step Solution --}}
        <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 mb-6 shadow-sm">
            <h4 class="text-sm font-bold text-teal-800 mb-4">
                <span class="lang-en">📖 Step-by-Step Solution</span>
                <span class="lang-bm hidden">📖 Penyelesaian Langkah demi Langkah</span>
            </h4>

            {{-- English steps --}}
            <div class="space-y-2 lang-en">
                @foreach(preg_split('/(?=Step \d+:)/', $question->solution_steps, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-2 text-sm text-gray-700">
                    @if(preg_match('/^(Step \d+:)(.*)/', trim($step), $m))
                        <span class="text-teal-600 font-semibold flex-shrink-0 w-16">{{ trim($m[1]) }}</span>
                        <span>{{ trim($m[2]) }}</span>
                    @else
                        <span>{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>

            {{-- BM steps --}}
            <div class="space-y-2 lang-bm hidden">
                @foreach(preg_split('/(?=Langkah \d+:)/', $question->solution_steps_bm, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-2 text-sm text-gray-700">
                    @if(preg_match('/^(Langkah \d+:)(.*)/', trim($step), $m))
                        <span class="text-teal-600 font-semibold flex-shrink-0 w-20">{{ trim($m[1]) }}</span>
                        <span>{{ trim($m[2]) }}</span>
                    @else
                        <span>{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- Next Button --}}
        <div class="text-center">
            @if($isLastQuestion)
            <a href="{{ route('practice.summary', $session->id) }}"
                class="inline-block bg-teal-600 text-white text-sm font-semibold px-8 py-3 rounded-xl hover:bg-teal-700 transition">
                <span class="lang-en">View Summary →</span>
                <span class="lang-bm hidden">Lihat Ringkasan →</span>
            </a>
            @else
            <a href="{{ route('practice.question', $session->id) }}"
                class="inline-block bg-teal-600 text-white text-sm font-semibold px-8 py-3 rounded-xl hover:bg-teal-700 transition">
                <span class="lang-en">Next Question →</span>
                <span class="lang-bm hidden">Soalan Seterusnya →</span>
            </a>
            @endif
        </div>

    </div>

</x-app-layout>