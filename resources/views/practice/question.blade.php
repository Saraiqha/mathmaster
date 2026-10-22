<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Practice — {{ $session->topic->name }}</span>
            <span class="lang-bm hidden">Latihan — {{ $session->topic->name_bm }}</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Progress Bar --}}
        <div class="mb-6">
            <div class="flex justify-between text-xs text-gray-400 mb-2">
                <span class="font-medium text-gray-500">
                    <span class="lang-en">Question {{ $current + 1 }} of {{ $total }}</span>
                    <span class="lang-bm hidden">Soalan {{ $current + 1 }} daripada {{ $total }}</span>
                </span>
                <span>
                    🔥 <span class="lang-en">Streak:</span><span class="lang-bm hidden">Jujukan:</span>
                    <strong>{{ $streak }}</strong> &nbsp;|&nbsp;
                    ⭐ <span class="lang-en">Points:</span><span class="lang-bm hidden">Mata:</span>
                    <strong>{{ $points }}</strong>
                </span>
            </div>
            <div class="w-full bg-gray-100 rounded-full h-2.5">
                <div class="bg-teal-500 h-2.5 rounded-full transition-all"
                    style="width: {{ $total > 0 ? ($current / $total) * 100 : 0 }}%"></div>
            </div>
        </div>

        {{-- Badges --}}
        <div class="flex gap-2 mb-4">
            <span class="text-xs font-semibold px-3 py-1 rounded-full
                @if($session->difficulty === 'easy') bg-teal-50 text-teal-700
                @elseif($session->difficulty === 'medium') bg-amber-50 text-amber-700
                @else bg-rose-50 text-rose-700
                @endif">
                <span class="lang-en">{{ ucfirst($session->difficulty) }}</span>
                <span class="lang-bm hidden">
                    @if($session->difficulty === 'easy') Mudah
                    @elseif($session->difficulty === 'medium') Sederhana
                    @else Sukar
                    @endif
                </span>
            </span>
            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-sky-50 text-sky-700">
                <span class="lang-en">{{ ucfirst(str_replace('_', ' ', $question->type)) }}</span>
                <span class="lang-bm hidden">
                    @if($question->type === 'mcq') Aneka Pilihan
                    @elseif($question->type === 'true_false') Benar / Palsu
                    @elseif($question->type === 'numerical') Berangka
                    @else Jawapan Berbilang
                    @endif
                </span>
            </span>
        </div>

        {{-- Question Card --}}
        <div class="bg-white border border-gray-100 rounded-2xl p-6 mb-6 shadow-sm">

            <p class="text-sm font-semibold text-gray-800 mb-6 lang-en leading-relaxed">{{ $question->question_text }}</p>
            <p class="text-sm font-semibold text-gray-800 mb-6 lang-bm hidden leading-relaxed">{{ $question->question_text_bm }}</p>

            <form method="POST" action="{{ route('practice.answer', $session->id) }}">
                @csrf

                {{-- MCQ --}}
                @if($question->type === 'mcq')
                <div class="space-y-3">
                    @foreach(['A' => [$question->option_a, $question->option_a_bm],
                              'B' => [$question->option_b, $question->option_b_bm],
                              'C' => [$question->option_c, $question->option_c_bm],
                              'D' => [$question->option_d, $question->option_d_bm]] as $key => $opts)
                    <label class="flex items-center gap-3 p-3.5 border border-gray-200 rounded-xl cursor-pointer hover:bg-teal-50 hover:border-teal-300 transition">
                        <input type="radio" name="answer" value="{{ $key }}" class="accent-teal-600" required>
                        <span class="text-sm text-gray-700 lang-en">{{ $key }}. {{ $opts[0] }}</span>
                        <span class="text-sm text-gray-700 lang-bm hidden">{{ $key }}. {{ $opts[1] }}</span>
                    </label>
                    @endforeach
                </div>

                {{-- True or False --}}
                @elseif($question->type === 'true_false')
                <div class="grid grid-cols-2 gap-4">
                    <label class="flex items-center justify-center gap-2 p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-teal-400 hover:bg-teal-50 transition">
                        <input type="radio" name="answer" value="True" class="accent-teal-600" required>
                        <span class="text-sm font-semibold text-gray-700">
                            <span class="lang-en">✅ True</span>
                            <span class="lang-bm hidden">✅ Benar</span>
                        </span>
                    </label>
                    <label class="flex items-center justify-center gap-2 p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-rose-400 hover:bg-rose-50 transition">
                        <input type="radio" name="answer" value="False" class="accent-rose-600" required>
                        <span class="text-sm font-semibold text-gray-700">
                            <span class="lang-en">❌ False</span>
                            <span class="lang-bm hidden">❌ Palsu</span>
                        </span>
                    </label>
                </div>

                {{-- Numerical --}}
                @elseif($question->type === 'numerical')
                <div>
                    <input type="text" name="answer" required
                        placeholder="{{ app()->getLocale() === 'ms' ? 'Taip jawapan anda di sini...' : 'Type your answer here...' }}"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
                    <p class="text-xs text-gray-400 mt-2">
                        <span class="lang-en">Enter a number as your answer.</span>
                        <span class="lang-bm hidden">Masukkan satu nombor sebagai jawapan anda.</span>
                    </p>
                </div>

                {{-- Multiple Response --}}
                @elseif($question->type === 'multiple_response')
                <div class="space-y-3">
                    <p class="text-xs text-teal-600 font-semibold mb-2">
                        <span class="lang-en">Select all correct answers:</span>
                        <span class="lang-bm hidden">Pilih semua jawapan yang betul:</span>
                    </p>
                    @foreach(['A' => [$question->option_a, $question->option_a_bm],
                              'B' => [$question->option_b, $question->option_b_bm],
                              'C' => [$question->option_c, $question->option_c_bm],
                              'D' => [$question->option_d, $question->option_d_bm]] as $key => $opts)
                    <label class="flex items-center gap-3 p-3.5 border border-gray-200 rounded-xl cursor-pointer hover:bg-teal-50 hover:border-teal-300 transition">
                        <input type="checkbox" name="answer[]" value="{{ $key }}" class="accent-teal-600">
                        <span class="text-sm text-gray-700 lang-en">{{ $key }}. {{ $opts[0] }}</span>
                        <span class="text-sm text-gray-700 lang-bm hidden">{{ $key }}. {{ $opts[1] }}</span>
                    </label>
                    @endforeach
                </div>
                @endif

                <button type="submit"
                    class="mt-6 w-full bg-teal-600 text-white text-sm font-semibold py-3 rounded-xl hover:bg-teal-700 transition">
                    <span class="lang-en">Submit Answer →</span>
                    <span class="lang-bm hidden">Hantar Jawapan →</span>
                </button>

            </form>
        </div>

        {{-- Streak Milestone Messages --}}
        @if($streak === 5)
        <div class="bg-teal-50 border border-teal-200 rounded-2xl p-4 text-center shadow-sm">
            <p class="text-sm font-bold text-teal-700">
                <span class="lang-en">🔥 5 in a row! Great momentum, keep going!</span>
                <span class="lang-bm hidden">🔥 5 berturut-turut! Momentum bagus, teruskan!</span>
            </p>
        </div>
        @elseif($streak === 10)
        <div class="bg-amber-50 border border-amber-200 rounded-2xl p-4 text-center shadow-sm">
            <p class="text-sm font-bold text-amber-700">
                <span class="lang-en">⚡ 10 in a row! You are on fire!</span>
                <span class="lang-bm hidden">⚡ 10 berturut-turut! Anda sangat hebat!</span>
            </p>
        </div>
        @elseif($streak === 15)
        <div class="bg-violet-50 border border-violet-200 rounded-2xl p-4 text-center shadow-sm">
            <p class="text-sm font-bold text-violet-700">
                <span class="lang-en">🏆 15 in a row! Outstanding performance!</span>
                <span class="lang-bm hidden">🏆 15 berturut-turut! Prestasi luar biasa!</span>
            </p>
        </div>
        @endif

    </div>
</x-app-layout>