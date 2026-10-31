<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics → {{ $session->topic->name }} → Practice</span>
                <span class="lang-bm hidden">Utama → Topik → {{ $session->topic->name_bm }} → Latihan</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Practice Session</span>
                <span class="lang-bm hidden">Sesi Latihan</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto">

        {{-- Progress Bar --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 mb-5">
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center gap-2">
                    <span class="text-xs font-semibold text-slate-500">
                        <span class="lang-en">Question {{ $current + 1 }} of {{ $total }}</span>
                        <span class="lang-bm hidden">Soalan {{ $current + 1 }} daripada {{ $total }}</span>
                    </span>
                    <span class="text-xs px-2 py-0.5 rounded-full font-semibold
                        @if($session->difficulty === 'easy') bg-teal-50 text-teal-600
                        @elseif($session->difficulty === 'medium') bg-amber-50 text-amber-600
                        @else bg-rose-50 text-rose-600
                        @endif">
                        <span class="lang-en">{{ ucfirst($session->difficulty) }}</span>
                        <span class="lang-bm hidden">
                            @if($session->difficulty === 'easy') Mudah
                            @elseif($session->difficulty === 'medium') Sederhana
                            @else Sukar
                            @endif
                        </span>
                    </span>
                    <span class="text-xs px-2 py-0.5 rounded-full bg-sky-50 text-sky-600 font-semibold">
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
                <div class="flex items-center gap-3 text-xs text-slate-500">
                    <span>🔥 <strong>{{ $streak }}</strong></span>
                    <span>⭐ <strong>{{ $points }}</strong></span>
                </div>
            </div>
            <div class="w-full bg-slate-100 rounded-full h-2">
                <div class="bg-teal-500 h-2 rounded-full transition-all"
                    style="width: {{ $total > 0 ? ($current / $total) * 100 : 0 }}%"></div>
            </div>
        </div>

        {{-- Question Card --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-5">

            <p class="text-sm font-semibold text-slate-800 mb-6 lang-en leading-relaxed">{{ $question->question_text }}</p>
            <p class="text-sm font-semibold text-slate-800 mb-6 lang-bm hidden leading-relaxed">{{ $question->question_text_bm }}</p>

            <form method="POST" action="{{ route('practice.answer', $session->id) }}">
                @csrf

                <input type="hidden" name="question_id" value="{{ $question->id }}">

                @error('answer')
                <div class="mb-4 p-3 bg-rose-50 border border-rose-200 rounded-xl text-xs text-rose-600 font-semibold">
                    ⚠️ {{ $message }}
                </div>
                @enderror

                {{-- MCQ --}}
                @if($question->type === 'mcq')
                <div class="space-y-3">
                    @foreach(['A' => [$question->option_a, $question->option_a_bm],
                              'B' => [$question->option_b, $question->option_b_bm],
                              'C' => [$question->option_c, $question->option_c_bm],
                              'D' => [$question->option_d, $question->option_d_bm]] as $key => $opts)
                    <label class="flex items-center gap-3 p-3.5 border border-slate-200 rounded-xl cursor-pointer hover:bg-teal-50 hover:border-teal-300 transition">
                        <div class="w-7 h-7 rounded-lg bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600 flex-shrink-0">{{ $key }}</div>
                        <input type="radio" name="answer" value="{{ $key }}" class="hidden" required>
                        <span class="text-sm text-slate-700 lang-en">{{ $opts[0] }}</span>
                        <span class="text-sm text-slate-700 lang-bm hidden">{{ $opts[1] }}</span>
                    </label>
                    @endforeach
                </div>

                {{-- True or False --}}
                @elseif($question->type === 'true_false')
                <div class="grid grid-cols-2 gap-4">
                    <label class="flex items-center justify-center gap-2 p-5 border-2 border-slate-200 rounded-xl cursor-pointer hover:border-teal-400 hover:bg-teal-50 transition">
                        <input type="radio" name="answer" value="True" class="accent-teal-600" required>
                        <span class="text-sm font-semibold text-slate-700">
                            <span class="lang-en">✅ True</span>
                            <span class="lang-bm hidden">✅ Benar</span>
                        </span>
                    </label>
                    <label class="flex items-center justify-center gap-2 p-5 border-2 border-slate-200 rounded-xl cursor-pointer hover:border-rose-400 hover:bg-rose-50 transition">
                        <input type="radio" name="answer" value="False" class="accent-rose-600" required>
                        <span class="text-sm font-semibold text-slate-700">
                            <span class="lang-en">❌ False</span>
                            <span class="lang-bm hidden">❌ Palsu</span>
                        </span>
                    </label>
                </div>

                {{-- Numerical --}}
                @elseif($question->type === 'numerical')
                <div>
                    <input type="text" name="answer" required
                        placeholder="Type your answer here..."
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition bg-slate-50">
                    <p class="text-xs text-slate-400 mt-2">
                        <span class="lang-en">Enter a number as your answer.</span>
                        <span class="lang-bm hidden">Masukkan nombor sebagai jawapan anda.</span>
                    </p>
                </div>

                {{-- Multiple Response --}}
                @elseif($question->type === 'multiple_response')
                <div class="space-y-3">
                    <p class="text-xs text-teal-600 font-semibold mb-3 bg-teal-50 px-3 py-2 rounded-lg">
                        <span class="lang-en">💡 Select all correct answers:</span>
                        <span class="lang-bm hidden">💡 Pilih semua jawapan yang betul:</span>
                    </p>
                    @foreach(['A' => [$question->option_a, $question->option_a_bm],
                              'B' => [$question->option_b, $question->option_b_bm],
                              'C' => [$question->option_c, $question->option_c_bm],
                              'D' => [$question->option_d, $question->option_d_bm]] as $key => $opts)
                    <label class="flex items-center gap-3 p-3.5 border border-slate-200 rounded-xl cursor-pointer hover:bg-teal-50 hover:border-teal-300 transition">
                        <div class="w-7 h-7 rounded-lg bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600 flex-shrink-0">{{ $key }}</div>
                        <input type="checkbox" name="answer[]" value="{{ $key }}" class="accent-teal-600">
                        <span class="text-sm text-slate-700 lang-en">{{ $opts[0] }}</span>
                        <span class="text-sm text-slate-700 lang-bm hidden">{{ $opts[1] }}</span>
                    </label>
                    @endforeach
                </div>
                @endif

                <button type="submit"
                    class="mt-6 w-full bg-teal-500 text-white text-sm font-semibold py-3 rounded-xl hover:bg-teal-600 transition shadow-sm">
                    <span class="lang-en">Submit Answer →</span>
                    <span class="lang-bm hidden">Hantar Jawapan →</span>
                </button>

            </form>
        </div>

        {{-- Streak Milestone Messages --}}
        @if($streak === 5)
        <div class="bg-teal-50 border border-teal-100 rounded-2xl p-4 text-center shadow-sm">
            <p class="text-sm font-bold text-teal-700">
                <span class="lang-en">🔥 5 in a row! Great momentum, keep going!</span>
                <span class="lang-bm hidden">🔥 5 berturut-turut! Momentum bagus, teruskan!</span>
            </p>
        </div>
        @elseif($streak === 10)
        <div class="bg-amber-50 border border-amber-100 rounded-2xl p-4 text-center shadow-sm">
            <p class="text-sm font-bold text-amber-700">
                <span class="lang-en">⚡ 10 in a row! You are on fire!</span>
                <span class="lang-bm hidden">⚡ 10 berturut-turut! Anda sangat hebat!</span>
            </p>
        </div>
        @elseif($streak === 15)
        <div class="bg-violet-50 border border-violet-100 rounded-2xl p-4 text-center shadow-sm">
            <p class="text-sm font-bold text-violet-700">
                <span class="lang-en">🏆 15 in a row! Outstanding performance!</span>
                <span class="lang-bm hidden">🏆 15 berturut-turut! Prestasi luar biasa!</span>
            </p>
        </div>
        @endif

    </div>

    <script>
        // Highlight selected MCQ option
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('input[type="radio"]').forEach(r => {
                    r.closest('label').classList.remove('border-teal-400', 'bg-teal-50');
                    r.closest('label').classList.add('border-slate-200');
                });
                this.closest('label').classList.add('border-teal-400', 'bg-teal-50');
                this.closest('label').classList.remove('border-slate-200');
            });
        });
    </script>

</x-app-layout>