<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Select Difficulty — {{ $topic->name }}</span>
            <span class="lang-bm hidden">Pilih Tahap Kesukaran — {{ $topic->name_bm }}</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 mb-8 shadow-sm">
            <h3 class="text-lg font-bold text-teal-800 lang-en">{{ $topic->name }}</h3>
            <h3 class="text-lg font-bold text-teal-800 lang-bm hidden">{{ $topic->name_bm }}</h3>
            <p class="text-sm text-teal-500 mt-1 lang-en">{{ $topic->name_bm }}</p>
            <p class="text-sm text-teal-500 mt-1 lang-bm hidden">{{ $topic->name }}</p>
            <p class="text-sm text-gray-500 mt-2 lang-en">{{ $topic->description }}</p>
            <p class="text-sm text-gray-500 mt-2 lang-bm hidden">{{ $topic->description_bm }}</p>
        </div>

        <h4 class="text-sm font-semibold text-gray-600 mb-4">
            <span class="lang-en">Choose a difficulty level to practise:</span>
            <span class="lang-bm hidden">Pilih tahap kesukaran untuk berlatih:</span>
        </h4>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <a href="{{ route('practice.count', [$topic->id, 'easy']) }}"
                class="bg-white border border-teal-200 rounded-2xl p-6 text-center hover:shadow-md transition hover:border-teal-400 shadow-sm">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🟢</div>
                <div class="text-base font-bold text-teal-700">
                    <span class="lang-en">Easy</span>
                    <span class="lang-bm hidden">Mudah</span>
                </div>
                <div class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Recall and recognition</span>
                    <span class="lang-bm hidden">Ingatan dan pengenalan</span>
                </div>
                <div class="text-xs text-teal-500 mt-3 font-medium">
                    <span class="lang-en">✅ Unlocked</span>
                    <span class="lang-bm hidden">✅ Dibuka</span>
                </div>
            </a>

            @if(in_array('medium', $unlockedLevels))
            <a href="{{ route('practice.count', [$topic->id, 'medium']) }}"
                class="bg-white border border-amber-200 rounded-2xl p-6 text-center hover:shadow-md transition hover:border-amber-400 shadow-sm">
                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🟡</div>
                <div class="text-base font-bold text-amber-700">
                    <span class="lang-en">Medium</span>
                    <span class="lang-bm hidden">Sederhana</span>
                </div>
                <div class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Application and analysis</span>
                    <span class="lang-bm hidden">Aplikasi dan analisis</span>
                </div>
                <div class="text-xs text-teal-500 mt-3 font-medium">
                    <span class="lang-en">✅ Unlocked</span>
                    <span class="lang-bm hidden">✅ Dibuka</span>
                </div>
            </a>
            @else
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center opacity-60 cursor-not-allowed shadow-sm">
                <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🔒</div>
                <div class="text-base font-bold text-gray-400">
                    <span class="lang-en">Medium</span>
                    <span class="lang-bm hidden">Sederhana</span>
                </div>
                <div class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Application and analysis</span>
                    <span class="lang-bm hidden">Aplikasi dan analisis</span>
                </div>
                <div class="text-xs text-gray-400 mt-3 font-medium">
                    <span class="lang-en">Earn 50 points in Easy</span>
                    <span class="lang-bm hidden">Kumpul 50 mata dalam Mudah</span>
                </div>
            </div>
            @endif

            @if(in_array('hard', $unlockedLevels))
            <a href="{{ route('practice.count', [$topic->id, 'hard']) }}"
                class="bg-white border border-rose-200 rounded-2xl p-6 text-center hover:shadow-md transition hover:border-rose-400 shadow-sm">
                <div class="w-12 h-12 bg-rose-50 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🔴</div>
                <div class="text-base font-bold text-rose-700">
                    <span class="lang-en">Hard</span>
                    <span class="lang-bm hidden">Sukar</span>
                </div>
                <div class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Evaluation and creation</span>
                    <span class="lang-bm hidden">Penilaian dan penciptaan</span>
                </div>
                <div class="text-xs text-teal-500 mt-3 font-medium">
                    <span class="lang-en">✅ Unlocked</span>
                    <span class="lang-bm hidden">✅ Dibuka</span>
                </div>
            </a>
            @else
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center opacity-60 cursor-not-allowed shadow-sm">
                <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🔒</div>
                <div class="text-base font-bold text-gray-400">
                    <span class="lang-en">Hard</span>
                    <span class="lang-bm hidden">Sukar</span>
                </div>
                <div class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Evaluation and creation</span>
                    <span class="lang-bm hidden">Penilaian dan penciptaan</span>
                </div>
                <div class="text-xs text-gray-400 mt-3 font-medium">
                    <span class="lang-en">Earn 50 points in Medium</span>
                    <span class="lang-bm hidden">Kumpul 50 mata dalam Sederhana</span>
                </div>
            </div>
            @endif

        </div>

        <div class="mt-6">
            <a href="{{ route('topics.revision', $topic->id) }}"
                class="text-sm text-teal-600 hover:underline">
                <span class="lang-en">← Back to Quick Revision</span>
                <span class="lang-bm hidden">← Kembali ke Ulang Kaji Pantas</span>
            </a>
        </div>

    </div>
</x-app-layout>