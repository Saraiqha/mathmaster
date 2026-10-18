<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            Answer Feedback
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Result Banner --}}
        @if($isCorrect)
        <div class="bg-teal-50 border border-teal-200 rounded-2xl p-5 mb-6 text-center shadow-sm">
            <div class="text-4xl mb-2">✅</div>
            <p class="text-base font-bold text-teal-700">Correct! Well done!</p>
            <p class="text-xs text-teal-500 mt-1">🔥 Streak: <strong>{{ $streak }}</strong> &nbsp;|&nbsp; ⭐ +10 points</p>
        </div>
        @else
        <div class="bg-rose-50 border border-rose-200 rounded-2xl p-5 mb-6 text-center shadow-sm">
            <div class="text-4xl mb-2">❌</div>
            <p class="text-base font-bold text-rose-700">Not quite — let's learn from this.</p>
            <p class="text-xs text-rose-400 mt-1">Streak reset. Keep going!</p>
        </div>
        @endif

        {{-- Question Recap --}}
        <div class="bg-white border border-gray-100 rounded-2xl p-6 mb-4 shadow-sm">

            {{-- Bilingual Toggle --}}
            <div class="flex gap-2 mb-4">
                <button onclick="switchLang('en')" id="btn-en"
                    class="px-3 py-1 text-xs font-semibold rounded-lg bg-teal-600 text-white transition">
                    English
                </button>
                <button onclick="switchLang('bm')" id="btn-bm"
                    class="px-3 py-1 text-xs font-semibold rounded-lg bg-gray-100 text-gray-500 transition">
                    BM
                </button>
            </div>

            <p class="text-xs text-gray-400 mb-2 font-medium uppercase tracking-wide">Question</p>
            <p class="text-sm text-gray-800 mb-4 lang-en leading-relaxed">{{ $question->question_text }}</p>
            <p class="text-sm text-gray-800 mb-4 lang-bm hidden leading-relaxed">{{ $question->question_text_bm }}</p>

            {{-- Your Answer --}}
            <div class="mb-3 p-3 rounded-xl {{ $isCorrect ? 'bg-teal-50 border border-teal-100' : 'bg-rose-50 border border-rose-100' }}">
                <p class="text-xs font-medium mb-1 {{ $isCorrect ? 'text-teal-500' : 'text-rose-400' }}">Your answer:</p>
                <p class="text-sm font-semibold {{ $isCorrect ? 'text-teal-700' : 'text-rose-600' }}">
                    {{ $studentAnswer ?: '(no answer)' }}
                </p>
            </div>

            {{-- Correct Answer --}}
            @if(!$isCorrect)
            <div class="p-3 rounded-xl bg-teal-50 border border-teal-100">
                <p class="text-xs font-medium text-teal-500 mb-1">Correct answer:</p>
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
            <h4 class="text-sm font-bold text-teal-800 mb-3">📖 Step-by-Step Solution</h4>
            <p class="text-sm text-gray-700 leading-relaxed lang-en">{{ $question->solution_steps }}</p>
            <p class="text-sm text-gray-700 leading-relaxed lang-bm hidden">{{ $question->solution_steps_bm }}</p>
        </div>

        {{-- Next Button --}}
        <div class="text-center">
            @if($isLastQuestion)
            <a href="{{ route('practice.summary', $session->id) }}"
                class="inline-block bg-teal-600 text-white text-sm font-semibold px-8 py-3 rounded-xl hover:bg-teal-700 transition">
                View Summary →
            </a>
            @else
            <a href="{{ route('practice.question', $session->id) }}"
                class="inline-block bg-teal-600 text-white text-sm font-semibold px-8 py-3 rounded-xl hover:bg-teal-700 transition">
                Next Question →
            </a>
            @endif
        </div>

    </div>

    <script>
        function switchLang(lang) {
            document.querySelectorAll('.lang-en').forEach(el => el.classList.toggle('hidden', lang !== 'en'));
            document.querySelectorAll('.lang-bm').forEach(el => el.classList.toggle('hidden', lang !== 'bm'));
            document.getElementById('btn-en').className = lang === 'en'
                ? 'px-3 py-1 text-xs font-semibold rounded-lg bg-teal-600 text-white transition'
                : 'px-3 py-1 text-xs font-semibold rounded-lg bg-gray-100 text-gray-500 transition';
            document.getElementById('btn-bm').className = lang === 'bm'
                ? 'px-3 py-1 text-xs font-semibold rounded-lg bg-teal-600 text-white transition'
                : 'px-3 py-1 text-xs font-semibold rounded-lg bg-gray-100 text-gray-500 transition';
        }
    </script>

</x-app-layout>