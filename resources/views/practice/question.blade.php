<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Practice — {{ $session->topic->name }}
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Progress Bar --}}
        <div class="mb-6">
            <div class="flex justify-between text-xs text-gray-400 mb-2">
                <span>Question {{ $current + 1 }} of {{ $total }}</span>
                <span>🔥 Streak: {{ $streak }} &nbsp;|&nbsp; ⭐ Points: {{ $points }}</span>
            </div>
            <div class="w-full bg-gray-100 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full transition-all"
                    style="width: {{ (($current) / $total) * 100 }}%"></div>
            </div>
        </div>

        {{-- Difficulty Badge --}}
        <div class="mb-4">
            <span class="text-xs font-medium px-3 py-1 rounded-full
                @if($session->difficulty === 'easy') bg-green-100 text-green-700
                @elseif($session->difficulty === 'medium') bg-yellow-100 text-yellow-700
                @else bg-red-100 text-red-700
                @endif">
                {{ ucfirst($session->difficulty) }}
            </span>
            <span class="text-xs font-medium px-3 py-1 rounded-full bg-gray-100 text-gray-600 ml-2">
                {{ ucfirst(str_replace('_', ' ', $question->type)) }}
            </span>
        </div>

        {{-- Question Card --}}
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-6">

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

            <p class="text-sm font-medium text-gray-800 mb-6 lang-en">{{ $question->question_text }}</p>
            <p class="text-sm font-medium text-gray-800 mb-6 lang-bm hidden">{{ $question->question_text_bm }}</p>

            <form method="POST" action="{{ route('practice.answer', $session->id) }}">
                @csrf

                {{-- MCQ --}}
                @if($question->type === 'mcq')
                <div class="space-y-3">
                    @foreach(['A' => [$question->option_a, $question->option_a_bm],
                              'B' => [$question->option_b, $question->option_b_bm],
                              'C' => [$question->option_c, $question->option_c_bm],
                              'D' => [$question->option_d, $question->option_d_bm]] as $key => $opts)
                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-blue-500">
                        <input type="radio" name="answer" value="{{ $key }}" class="accent-blue-600" required>
                        <span class="text-sm text-gray-700 lang-en">{{ $key }}. {{ $opts[0] }}</span>
                        <span class="text-sm text-gray-700 lang-bm hidden">{{ $key }}. {{ $opts[1] }}</span>
                    </label>
                    @endforeach
                </div>

                {{-- True or False --}}
                @elseif($question->type === 'true_false')
                <div class="grid grid-cols-2 gap-4">
                    <label class="flex items-center justify-center gap-2 p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-green-400 hover:bg-green-50 transition">
                        <input type="radio" name="answer" value="True" class="accent-green-600" required>
                        <span class="text-sm font-medium text-gray-700">✅ True</span>
                    </label>
                    <label class="flex items-center justify-center gap-2 p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-red-400 hover:bg-red-50 transition">
                        <input type="radio" name="answer" value="False" class="accent-red-600" required>
                        <span class="text-sm font-medium text-gray-700">❌ False</span>
                    </label>
                </div>

                {{-- Numerical --}}
                @elseif($question->type === 'numerical')
                <div>
                    <input type="text" name="answer" required
                        placeholder="Type your answer here..."
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-blue-400">
                    <p class="text-xs text-gray-400 mt-2">Enter a number as your answer.</p>
                </div>

                {{-- Multiple Response --}}
                @elseif($question->type === 'multiple_response')
                <div class="space-y-3">
                    <p class="text-xs text-blue-600 font-medium mb-2">Select all correct answers:</p>
                    @foreach(['A' => [$question->option_a, $question->option_a_bm],
                              'B' => [$question->option_b, $question->option_b_bm],
                              'C' => [$question->option_c, $question->option_c_bm],
                              'D' => [$question->option_d, $question->option_d_bm]] as $key => $opts)
                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="checkbox" name="answer[]" value="{{ $key }}" class="accent-blue-600">
                        <span class="text-sm text-gray-700 lang-en">{{ $key }}. {{ $opts[0] }}</span>
                        <span class="text-sm text-gray-700 lang-bm hidden">{{ $key }}. {{ $opts[1] }}</span>
                    </label>
                    @endforeach
                </div>
                @endif

                <button type="submit"
                    class="mt-6 w-full bg-blue-600 text-white text-sm font-medium py-3 rounded-lg hover:bg-blue-700 transition">
                    Submit Answer →
                </button>

            </form>
        </div>

        {{-- Streak Milestone Messages --}}
        @if($streak === 5)
        <div class="bg-green-50 border border-green-200 rounded-xl p-4 text-center">
            <p class="text-sm font-semibold text-green-700">🔥 5 in a row! Great momentum, keep going!</p>
        </div>
        @elseif($streak === 10)
        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 text-center">
            <p class="text-sm font-semibold text-yellow-700">⚡ 10 in a row! You are on fire!</p>
        </div>
        @elseif($streak === 15)
        <div class="bg-purple-50 border border-purple-200 rounded-xl p-4 text-center">
            <p class="text-sm font-semibold text-purple-700">🏆 15 in a row! Outstanding performance!</p>
        </div>
        @endif

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