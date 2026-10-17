<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Answer Feedback
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Result Banner --}}
        @if($isCorrect)
        <div class="bg-green-50 border border-green-200 rounded-xl p-5 mb-6 text-center">
            <div class="text-3xl mb-2">✅</div>
            <p class="text-base font-bold text-green-700">Correct! Well done!</p>
            <p class="text-xs text-green-500 mt-1">🔥 Streak: {{ $streak }} &nbsp;|&nbsp; ⭐ +10 points</p>
        </div>
        @else
        <div class="bg-red-50 border border-red-200 rounded-xl p-5 mb-6 text-center">
            <div class="text-3xl mb-2">❌</div>
            <p class="text-base font-bold text-red-700">Not quite — let's learn from this.</p>
            <p class="text-xs text-red-400 mt-1">Streak reset. Keep going!</p>
        </div>
        @endif

        {{-- Question Recap --}}
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">

            {{-- Bilingual Toggle --}}
            <div class="flex gap-2 mb-4">
                <button onclick="switchLang('en')" id="btn-en"
                    class="px-3 py-1 text-xs font-medium rounded-lg bg-blue-600 text-white">
                    English
                </button>
                <button onclick="switchLang('bm')" id="btn-bm"
                    class="px-3 py-1 text-xs font-medium rounded-lg bg-gray-100 text-gray-600">
                    BM
                </button>
            </div>

            <p class="text-xs text-gray-400 mb-2 font-medium">Question:</p>
            <p class="text-sm text-gray-800 mb-4 lang-en">{{ $question->question_text }}</p>
            <p class="text-sm text-gray-800 mb-4 lang-bm hidden">{{ $question->question_text_bm }}</p>

            {{-- Your Answer --}}
            <div class="mb-3">
                <p class="text-xs text-gray-400 font-medium mb-1">Your answer:</p>
                <p class="text-sm font-medium {{ $isCorrect ? 'text-green-700' : 'text-red-600' }}">
                    {{ $studentAnswer ?: '(no answer)' }}
                </p>
            </div>

            {{-- Correct Answer --}}
            @if(!$isCorrect)
            <div class="mb-3">
                <p class="text-xs text-gray-400 font-medium mb-1">Correct answer:</p>
                <p class="text-sm font-medium text-green-700">
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
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 mb-6">
            <h4 class="text-sm font-semibold text-blue-800 mb-3">📖 Step-by-Step Solution</h4>
            <p class="text-sm text-gray-700 leading-relaxed lang-en">{{ $question->solution_steps }}</p>
            <p class="text-sm text-gray-700 leading-relaxed lang-bm hidden">{{ $question->solution_steps_bm }}</p>
        </div>

        {{-- Next Button --}}
        <div class="text-center">
        @if($isLastQuestion)
        <a href="{{ route('practice.summary', $session->id) }}"
        class="inline-block bg-green-600 text-white text-sm font-medium px-8 py-3 rounded-lg hover:bg-green-700 transition">
        View Summary →
        </a>
        @else
        <a   a href="{{ route('practice.question', $session->id) }}"
        class="inline-block bg-blue-600 text-white text-sm font-medium px-8 py-3 rounded-lg hover:bg-blue-700 transition">
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
                ? 'px-3 py-1 text-xs font-medium rounded-lg bg-blue-600 text-white'
                : 'px-3 py-1 text-xs font-medium rounded-lg bg-gray-100 text-gray-600';
            document.getElementById('btn-bm').className = lang === 'bm'
                ? 'px-3 py-1 text-xs font-medium rounded-lg bg-blue-600 text-white'
                : 'px-3 py-1 text-xs font-medium rounded-lg bg-gray-100 text-gray-600';
        }
    </script>

</x-app-layout>