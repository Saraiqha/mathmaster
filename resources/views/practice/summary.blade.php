<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Practice Summary</span>
            <span class="lang-bm hidden">Ringkasan Latihan</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Score Card --}}
        <div class="bg-white border border-gray-100 rounded-2xl p-8 mb-6 text-center shadow-sm">
            <div class="text-6xl font-bold mb-2
                @if($score >= 80) text-teal-600
                @elseif($score >= 60) text-amber-600
                @else text-rose-600
                @endif">
                {{ $score }}%
            </div>
            <p class="text-sm text-gray-400 mt-1">
                <span class="lang-en">{{ $session->correct_answers }} correct out of {{ $session->total_questions }} questions</span>
                <span class="lang-bm hidden">{{ $session->correct_answers }} betul daripada {{ $session->total_questions }} soalan</span>
            </p>

            <div class="mt-4 text-sm font-semibold
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
            </div>
        </div>

        {{-- Level Unlock Notification --}}
        @if(isset($unlocked) && $unlocked)
        <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5 mb-6 text-center shadow-sm">
            <div class="text-3xl mb-2">🎉</div>
            <p class="text-sm font-bold text-amber-700">
                <span class="lang-en">You unlocked <span class="capitalize">{{ $unlocked }}</span> level for {{ $session->topic->name }}!</span>
                <span class="lang-bm hidden">Anda membuka kunci tahap <span class="capitalize">
                    @if($unlocked === 'medium') Sederhana
                    @else Sukar
                    @endif
                </span> untuk {{ $session->topic->name_bm }}!</span>
            </p>
            <p class="text-xs text-amber-600 mt-1">
                <span class="lang-en">Keep practising to unlock the next level.</span>
                <span class="lang-bm hidden">Teruskan berlatih untuk membuka kunci tahap seterusnya.</span>
            </p>
        </div>
        @endif

        {{-- Stats Row --}}
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="bg-white border border-gray-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-gray-400 mb-1">
                    <span class="lang-en">Topic</span>
                    <span class="lang-bm hidden">Topik</span>
                </p>
                <p class="text-xs font-bold text-gray-700 lang-en">{{ $session->topic->name }}</p>
                <p class="text-xs font-bold text-gray-700 lang-bm hidden">{{ $session->topic->name_bm }}</p>
            </div>
            <div class="bg-white border border-gray-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-gray-400 mb-1">
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
            <div class="bg-white border border-gray-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-gray-400 mb-1">
                    <span class="lang-en">Points Earned</span>
                    <span class="lang-bm hidden">Mata Diperoleh</span>
                </p>
                <p class="text-xs font-bold text-teal-600">⭐ {{ $points }}</p>
            </div>
        </div>

        {{-- Recommendation --}}
        @if($score < 60)
        <div class="bg-teal-50 border border-teal-100 rounded-2xl p-5 mb-6 shadow-sm">
            <p class="text-sm font-bold text-teal-800 mb-1">
                <span class="lang-en">📖 Recommendation</span>
                <span class="lang-bm hidden">📖 Cadangan</span>
            </p>
            <p class="text-sm text-teal-600 leading-relaxed">
                <span class="lang-en">Your score is below 60%. We recommend reviewing the Quick Revision for <strong>{{ $session->topic->name }}</strong> before trying again.</span>
                <span class="lang-bm hidden">Skor anda di bawah 60%. Kami mengesyorkan anda menyemak Ulang Kaji Pantas untuk <strong>{{ $session->topic->name_bm }}</strong> sebelum cuba lagi.</span>
            </p>
            <a href="{{ route('topics.revision', $session->topic->id) }}"
                class="inline-block mt-3 text-xs font-semibold text-teal-600 underline">
                <span class="lang-en">Go to Quick Revision →</span>
                <span class="lang-bm hidden">Pergi ke Ulang Kaji Pantas →</span>
            </a>
        </div>
        @endif

        {{-- Action Buttons --}}
        <div class="flex gap-3">
            <a href="{{ route('practice.difficulty', $session->topic->id) }}"
                class="flex-1 text-center py-3 text-sm font-semibold bg-teal-600 text-white rounded-xl hover:bg-teal-700 transition">
                <span class="lang-en">Practice Again</span>
                <span class="lang-bm hidden">Latihan Semula</span>
            </a>
            <a href="{{ route('topics.index') }}"
                class="flex-1 text-center py-3 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <span class="lang-en">Back to Topics</span>
                <span class="lang-bm hidden">Kembali ke Topik</span>
            </a>
            <a href="{{ route('dashboard') }}"
                class="flex-1 text-center py-3 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <span class="lang-en">Dashboard</span>
                <span class="lang-bm hidden">Papan Pemuka</span>
            </a>
        </div>

    </div>
</x-app-layout>