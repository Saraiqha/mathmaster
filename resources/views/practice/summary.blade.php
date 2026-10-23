<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics → {{ $session->topic->name }} → Practice → Summary</span>
                <span class="lang-bm hidden">Utama → Topik → {{ $session->topic->name_bm }} → Latihan → Ringkasan</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Practice Summary</span>
                <span class="lang-bm hidden">Ringkasan Latihan</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto">

        {{-- Score Card --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8 mb-5 text-center">

            {{-- Score Circle --}}
            <div class="w-28 h-28 rounded-full mx-auto mb-4 flex items-center justify-center border-4
                @if($score >= 80) border-teal-400 bg-teal-50
                @elseif($score >= 60) border-amber-400 bg-amber-50
                @else border-rose-400 bg-rose-50
                @endif">
                <div>
                    <p class="text-3xl font-bold
                        @if($score >= 80) text-teal-600
                        @elseif($score >= 60) text-amber-600
                        @else text-rose-600
                        @endif">{{ $score }}%</p>
                </div>
            </div>

            <p class="text-sm text-slate-400 mb-3">
                <span class="lang-en">{{ $session->correct_answers }} correct out of {{ $session->total_questions }} questions</span>
                <span class="lang-bm hidden">{{ $session->correct_answers }} betul daripada {{ $session->total_questions }} soalan</span>
            </p>

            <p class="text-base font-bold
                @if($score >= 80) text-teal-600
                @elseif($score >= 60) text-amber-600
                @else text-rose-600
                @endif">
                @if($score >= 80)
                    <span class="lang-en">🏆 Excellent work! You have mastered this level.</span>
                    <span class="lang-bm hidden">🏆 Kerja yang cemerlang! Anda telah menguasai tahap ini.</span>
                @elseif($score >= 60)
                    <span class="lang-en">👍 Good job! Keep practising to improve further.</span>
                    <span class="lang-bm hidden">👍 Bagus! Teruskan berlatih untuk meningkatkan lagi.</span>
                @else
                    <span class="lang-en">💪 Keep going! Review the Quick Revision and try again.</span>
                    <span class="lang-bm hidden">💪 Teruskan! Semak Ulang Kaji Pantas dan cuba lagi.</span>
                @endif
            </p>
        </div>

        {{-- Level Unlock Notification --}}
        @if(isset($unlocked) && $unlocked)
        <div class="bg-amber-50 border border-amber-100 rounded-2xl p-5 mb-5 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-amber-100 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0">🎉</div>
                <div>
                    <p class="text-sm font-bold text-amber-700">
                        <span class="lang-en">You unlocked <span class="capitalize">{{ $unlocked }}</span> level for {{ $session->topic->name }}!</span>
                        <span class="lang-bm hidden">Anda membuka kunci tahap
                            @if($unlocked === 'medium') Sederhana
                            @else Sukar
                            @endif
                            untuk {{ $session->topic->name_bm }}!
                        </span>
                    </p>
                    <p class="text-xs text-amber-500 mt-0.5">
                        <span class="lang-en">Keep practising to unlock the next level.</span>
                        <span class="lang-bm hidden">Teruskan berlatih untuk membuka kunci tahap seterusnya.</span>
                    </p>
                </div>
            </div>
        </div>
        @endif

        {{-- Stats Row --}}
        <div class="grid grid-cols-3 gap-4 mb-5">
            <div class="bg-white border border-slate-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-slate-400 mb-1">
                    <span class="lang-en">Topic</span>
                    <span class="lang-bm hidden">Topik</span>
                </p>
                <p class="text-xs font-bold text-slate-700 lang-en leading-tight">{{ $session->topic->name }}</p>
                <p class="text-xs font-bold text-slate-700 lang-bm hidden leading-tight">{{ $session->topic->name_bm }}</p>
            </div>
            <div class="bg-white border border-slate-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-slate-400 mb-1">
                    <span class="lang-en">Difficulty</span>
                    <span class="lang-bm hidden">Kesukaran</span>
                </p>
                <p class="text-xs font-bold
                    @if($session->difficulty === 'easy') text-teal-600
                    @elseif($session->difficulty === 'medium') text-amber-600
                    @else text-rose-600
                    @endif">
                    <span class="lang-en">{{ ucfirst($session->difficulty) }}</span>
                    <span class="lang-bm hidden">
                        @if($session->difficulty === 'easy') Mudah
                        @elseif($session->difficulty === 'medium') Sederhana
                        @else Sukar
                        @endif
                    </span>
                </p>
            </div>
            <div class="bg-white border border-slate-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-slate-400 mb-1">
                    <span class="lang-en">Points Earned</span>
                    <span class="lang-bm hidden">Mata Diperoleh</span>
                </p>
                <p class="text-sm font-bold text-teal-600">⭐ {{ $points }}</p>
            </div>
        </div>

        {{-- Recommendation --}}
        @if($score < 60)
        <div class="bg-white border border-slate-100 rounded-2xl p-5 mb-5 shadow-sm">
            <div class="flex items-start gap-3">
                <div class="w-10 h-10 bg-sky-50 rounded-xl flex items-center justify-center text-lg flex-shrink-0">📖</div>
                <div>
                    <p class="text-sm font-bold text-slate-700 mb-1">
                        <span class="lang-en">Recommendation</span>
                        <span class="lang-bm hidden">Cadangan</span>
                    </p>
                    <p class="text-xs text-slate-500 leading-relaxed mb-2">
                        <span class="lang-en">Your score is below 60%. We recommend reviewing the Quick Revision for <strong>{{ $session->topic->name }}</strong> before trying again.</span>
                        <span class="lang-bm hidden">Skor anda di bawah 60%. Kami mengesyorkan anda menyemak Ulang Kaji Pantas untuk <strong>{{ $session->topic->name_bm }}</strong> sebelum cuba lagi.</span>
                    </p>
                    <a href="{{ route('topics.revision', $session->topic->id) }}"
                        class="text-xs font-semibold text-teal-600 hover:underline">
                        <span class="lang-en">Go to Quick Revision →</span>
                        <span class="lang-bm hidden">Pergi ke Ulang Kaji Pantas →</span>
                    </a>
                </div>
            </div>
        </div>
        @endif

        {{-- Action Buttons --}}
        <div class="grid grid-cols-3 gap-3">
            <a href="{{ route('practice.difficulty', $session->topic->id) }}"
                class="text-center py-3 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">
                <span class="lang-en">Practice Again</span>
                <span class="lang-bm hidden">Latihan Semula</span>
            </a>
            <a href="{{ route('topics.index') }}"
                class="text-center py-3 text-sm font-medium bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                <span class="lang-en">Back to Topics</span>
                <span class="lang-bm hidden">Kembali ke Topik</span>
            </a>
            <a href="{{ route('dashboard') }}"
                class="text-center py-3 text-sm font-medium bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                <span class="lang-en">Dashboard</span>
                <span class="lang-bm hidden">Papan Pemuka</span>
            </a>
        </div>

    </div>
</x-app-layout>