<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics → {{ $session->topic->name }} → Practice → Feedback</span>
                <span class="lang-bm hidden">Utama → Topik → {{ $session->topic->name_bm }} → Latihan → Maklum Balas</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Answer Feedback</span>
                <span class="lang-bm hidden">Maklum Balas Jawapan</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto">

        {{-- Result Banner --}}
        @if($isCorrect)
        <div class="bg-teal-50 border border-teal-100 rounded-2xl p-5 mb-5 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-teal-100 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0">✅</div>
                <div>
                    <p class="text-base font-bold text-teal-700">
                        <span class="lang-en">Correct! Well done!</span>
                        <span class="lang-bm hidden">Betul! Tahniah!</span>
                    </p>
                    <p class="text-xs text-teal-500 mt-1">
                        🔥 <span class="lang-en">Streak:</span><span class="lang-bm hidden">Jujukan:</span>
                        <strong>{{ $streak }}</strong> &nbsp;|&nbsp;
                        ⭐ +10 <span class="lang-en">points</span><span class="lang-bm hidden">mata</span>
                    </p>
                </div>
            </div>
        </div>
        @else
        <div class="bg-rose-50 border border-rose-100 rounded-2xl p-5 mb-5 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-rose-100 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0">❌</div>
                <div>
                    <p class="text-base font-bold text-rose-700">
                        <span class="lang-en">Not quite — let's learn from this.</span>
                        <span class="lang-bm hidden">Tidak tepat — mari kita belajar daripada ini.</span>
                    </p>
                    <p class="text-xs text-rose-400 mt-1">
                        <span class="lang-en">Streak reset. Keep going!</span>
                        <span class="lang-bm hidden">Jujukan diset semula. Teruskan!</span>
                    </p>
                </div>
            </div>
        </div>
        @endif

        {{-- Question Recap --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-4">
            <p class="text-xs text-slate-400 mb-2 font-semibold uppercase tracking-wide">
                <span class="lang-en">Question</span>
                <span class="lang-bm hidden">Soalan</span>
            </p>
            <p class="text-sm text-slate-800 mb-4 lang-en leading-relaxed font-medium">{{ $question->question_text }}</p>
            <p class="text-sm text-slate-800 mb-4 lang-bm hidden leading-relaxed font-medium">{{ $question->question_text_bm }}</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                @php
    $optionMap = [
        'A' => [$question->option_a, $question->option_a_bm],
        'B' => [$question->option_b, $question->option_b_bm],
        'C' => [$question->option_c, $question->option_c_bm],
        'D' => [$question->option_d, $question->option_d_bm],
    ];

        // Build full answer text for MCQ and multiple response
        function getFullAnswer($answer, $optionMap, $lang = 'en') {
            if (empty($answer)) return null;
            $keys = explode(',', $answer);
            $parts = [];
            foreach ($keys as $key) {
                $key = trim($key);
                if (isset($optionMap[$key])) {
                    $text = $lang === 'bm' ? $optionMap[$key][1] : $optionMap[$key][0];
                    $parts[] = $key . '. ' . $text;
                } else {
                    $parts[] = $key;
                }
            }
            return implode(' | ', $parts);
        }
    @endphp

        {{-- Your Answer --}}
        <div class="p-3 rounded-xl {{ $isCorrect ? 'bg-teal-50 border border-teal-100' : 'bg-rose-50 border border-rose-100' }}">
            <p class="text-xs font-semibold mb-1 {{ $isCorrect ? 'text-teal-500' : 'text-rose-400' }}">
                <span class="lang-en">Your answer</span>
                <span class="lang-bm hidden">Jawapan anda</span>
            </p>
            @if($question->type === 'numerical' || $question->type === 'true_false')
                <p class="text-sm font-bold {{ $isCorrect ? 'text-teal-700' : 'text-rose-600' }}">
                    {{ ($studentAnswer !== '' && $studentAnswer !== null) ? $studentAnswer : '(no answer)' }}
                </p>
            @else
                <p class="text-sm font-bold {{ $isCorrect ? 'text-teal-700' : 'text-rose-600' }} lang-en">
                    {{ ($studentAnswer !== '' && $studentAnswer !== null) ? getFullAnswer($studentAnswer, $optionMap, 'en') : '(no answer)' }}
                </p>
                <p class="text-sm font-bold {{ $isCorrect ? 'text-teal-700' : 'text-rose-600' }} lang-bm hidden">
                    {{ ($studentAnswer !== '' && $studentAnswer !== null) ? getFullAnswer($studentAnswer, $optionMap, 'bm') : '(tiada jawapan)' }}
                </p>
            @endif
        </div>

        {{-- Correct Answer --}}
        @if(!$isCorrect)
        <div class="p-3 rounded-xl bg-teal-50 border border-teal-100">
            <p class="text-xs font-semibold text-teal-500 mb-1">
                <span class="lang-en">Correct answer</span>
                <span class="lang-bm hidden">Jawapan betul</span>
            </p>
            @if($question->type === 'numerical' || $question->type === 'true_false')
                <p class="text-sm font-bold text-teal-700">{{ ($question->correct_answer !== '' && $question->correct_answer !== null) ? $question->correct_answer : '(no correct answer)' }}</p>
            @else
                @php
                    $correctKey = $question->type === 'multiple_response' ? $question->correct_answers : $question->correct_answer;
                @endphp
                <p class="text-sm font-bold text-teal-700 lang-en">{{ ($correctKey !== '' && $correctKey !== null) ? getFullAnswer($correctKey, $optionMap, 'en') : '(no correct answer)' }}</p>
                <p class="text-sm font-bold text-teal-700 lang-bm hidden">{{ ($correctKey !== '' && $correctKey !== null) ? getFullAnswer($correctKey, $optionMap, 'bm') : '(tiada jawapan betul)' }}</p>
            @endif
        </div>
        @endif
            </div>
        </div>

        {{-- Step by Step Solution --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-5">
            <h4 class="text-sm font-bold text-slate-700 mb-4 flex items-center gap-2">
                <span class="w-6 h-6 bg-sky-50 rounded-lg flex items-center justify-center text-xs">📖</span>
                <span class="lang-en">Step-by-Step Solution</span>
                <span class="lang-bm hidden">Penyelesaian Langkah demi Langkah</span>
            </h4>

            {{-- English steps --}}
            <div class="space-y-3 lang-en">
                @foreach(preg_split('/(?=Step \d+:)/i', $question->solution_steps, -1, PREG_SPLIT_NO_EMPTY) as $step)
                @php
                    preg_match('/^(Step \d+:)\s*(.*)/is', trim($step), $m);
                    $stepLabel = !empty($m) ? trim($m[1]) : '';
                    $stepContent = !empty($m) ? trim($m[2]) : trim($step);
                    // Split content by '. ' to get individual lines of working
                    $lines = preg_split('/\.\s+(?=[A-Z0-9\(x\-])/', $stepContent);
                @endphp
                @if($stepLabel)
                <div class="flex gap-2 items-start">
                    <span class="text-teal-500 flex-shrink-0 mt-1">→</span>
                    <div class="flex-1">
                        <span class="text-xs font-bold text-teal-600 block mb-1">{{ $stepLabel }}</span>
                        @foreach($lines as $i => $line)
                        <p class="text-sm text-slate-700 {{ $i > 0 ? 'pl-4 mt-1' : '' }}">{{ trim($line) }}{{ $i < count($lines)-1 ? '' : '' }}</p>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="flex gap-2 items-start">
                    <span class="text-teal-500 flex-shrink-0 mt-1">→</span>
                    <span class="text-sm text-slate-700">{{ $stepContent }}</span>
                </div>
                @endif
                @endforeach
            </div>

            {{-- BM steps --}}
            <div class="space-y-3 lang-bm hidden">
                @foreach(preg_split('/(?=Langkah \d+:)/i', $question->solution_steps_bm, -1, PREG_SPLIT_NO_EMPTY) as $step)
                @php
                    preg_match('/^(Langkah \d+:)\s*(.*)/is', trim($step), $m);
                    $stepLabel = !empty($m) ? trim($m[1]) : '';
                    $stepContent = !empty($m) ? trim($m[2]) : trim($step);
                    $lines = preg_split('/\.\s+(?=[A-Z0-9\(x\-])/', $stepContent);
                @endphp
                @if($stepLabel)
                <div class="flex gap-2 items-start">
                    <span class="text-teal-500 flex-shrink-0 mt-1">→</span>
                    <div class="flex-1">
                        <span class="text-xs font-bold text-teal-600 block mb-1">{{ $stepLabel }}</span>
                        @foreach($lines as $i => $line)
                        <p class="text-sm text-slate-700 {{ $i > 0 ? 'pl-4 mt-1' : '' }}">{{ trim($line) }}</p>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="flex gap-2 items-start">
                    <span class="text-teal-500 flex-shrink-0 mt-1">→</span>
                    <span class="text-sm text-slate-700">{{ $stepContent }}</span>
                </div>
                @endif
                @endforeach
            </div>

            {{-- BM steps --}}
            <div class="space-y-2 lang-bm hidden">
                @foreach(preg_split('/(?=Langkah \d+:)/', $question->solution_steps_bm, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-3 p-3 bg-slate-50 rounded-xl">
                    @if(preg_match('/^(Langkah \d+:)(.*)/', trim($step), $m))
                        <span class="text-teal-600 font-bold text-xs flex-shrink-0 w-20 pt-0.5">{{ trim($m[1]) }}</span>
                        <span class="text-sm text-slate-700">{{ trim($m[2]) }}</span>
                    @else
                        <span class="text-sm text-slate-700">{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- Next Button --}}
        <div class="text-center">
            @if($isLastQuestion)
            <a href="{{ route('practice.summary', $session->id) }}"
                class="inline-block bg-teal-500 text-white text-sm font-semibold px-8 py-3 rounded-xl hover:bg-teal-600 transition shadow-sm">
                <span class="lang-en">View Summary →</span>
                <span class="lang-bm hidden">Lihat Ringkasan →</span>
            </a>
            @else
            <a href="{{ route('practice.question', $session->id) }}"
                class="inline-block bg-teal-500 text-white text-sm font-semibold px-8 py-3 rounded-xl hover:bg-teal-600 transition shadow-sm">
                <span class="lang-en">Next Question →</span>
                <span class="lang-bm hidden">Soalan Seterusnya →</span>
            </a>
            @endif
        </div>

    </div>
</x-app-layout>