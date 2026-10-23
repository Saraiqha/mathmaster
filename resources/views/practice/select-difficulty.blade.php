<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics → {{ $topic->name }} → Select Difficulty</span>
                <span class="lang-bm hidden">Utama → Topik → {{ $topic->name_bm }} → Pilih Kesukaran</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Select Difficulty</span>
                <span class="lang-bm hidden">Pilih Tahap Kesukaran</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto">

        {{-- Topic Info --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-teal-50 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0">
                    @if($topic->order === 1) 📐
                    @elseif($topic->order === 2) 🔢
                    @elseif($topic->order === 3) 🧠
                    @elseif($topic->order === 4) 🔵
                    @else 🕸️
                    @endif
                </div>
                <div>
                    <h3 class="text-base font-bold text-slate-800 lang-en">{{ $topic->name }}</h3>
                    <h3 class="text-base font-bold text-slate-800 lang-bm hidden">{{ $topic->name_bm }}</h3>
                    <p class="text-xs text-slate-400 mt-0.5 lang-en">{{ $topic->name_bm }}</p>
                    <p class="text-xs text-slate-400 mt-0.5 lang-bm hidden">{{ $topic->name }}</p>
                </div>
            </div>
        </div>

        <h4 class="text-sm font-semibold text-slate-600 mb-4">
            <span class="lang-en">Choose a difficulty level to practise:</span>
            <span class="lang-bm hidden">Pilih tahap kesukaran untuk berlatih:</span>
        </h4>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

            {{-- Easy --}}
            <a href="{{ route('practice.count', [$topic->id, 'easy']) }}"
                class="bg-white border border-slate-100 rounded-2xl p-6 text-center hover:shadow-md hover:border-teal-200 transition shadow-sm">
                <div class="w-14 h-14 bg-teal-50 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-3">🟢</div>
                <div class="text-base font-bold text-slate-700 mb-1">
                    <span class="lang-en">Easy</span>
                    <span class="lang-bm hidden">Mudah</span>
                </div>
                <div class="text-xs text-slate-400 mb-3">
                    <span class="lang-en">Recall and recognition</span>
                    <span class="lang-bm hidden">Ingatan dan pengenalan</span>
                </div>
                <span class="text-xs bg-teal-50 text-teal-600 font-semibold px-3 py-1 rounded-full">
                    <span class="lang-en">✅ Unlocked</span>
                    <span class="lang-bm hidden">✅ Dibuka</span>
                </span>
            </a>

            {{-- Medium --}}
            @if(in_array('medium', $unlockedLevels))
            <a href="{{ route('practice.count', [$topic->id, 'medium']) }}"
                class="bg-white border border-slate-100 rounded-2xl p-6 text-center hover:shadow-md hover:border-amber-200 transition shadow-sm">
                <div class="w-14 h-14 bg-amber-50 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-3">🟡</div>
                <div class="text-base font-bold text-slate-700 mb-1">
                    <span class="lang-en">Medium</span>
                    <span class="lang-bm hidden">Sederhana</span>
                </div>
                <div class="text-xs text-slate-400 mb-3">
                    <span class="lang-en">Application and analysis</span>
                    <span class="lang-bm hidden">Aplikasi dan analisis</span>
                </div>
                <span class="text-xs bg-teal-50 text-teal-600 font-semibold px-3 py-1 rounded-full">
                    <span class="lang-en">✅ Unlocked</span>
                    <span class="lang-bm hidden">✅ Dibuka</span>
                </span>
            </a>
            @else
            <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center opacity-60 cursor-not-allowed shadow-sm">
                <div class="w-14 h-14 bg-slate-100 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-3">🔒</div>
                <div class="text-base font-bold text-slate-400 mb-1">
                    <span class="lang-en">Medium</span>
                    <span class="lang-bm hidden">Sederhana</span>
                </div>
                <div class="text-xs text-slate-400 mb-3">
                    <span class="lang-en">Application and analysis</span>
                    <span class="lang-bm hidden">Aplikasi dan analisis</span>
                </div>
                <span class="text-xs bg-slate-100 text-slate-400 font-semibold px-3 py-1 rounded-full">
                    <span class="lang-en">Earn 50 pts in Easy</span>
                    <span class="lang-bm hidden">Kumpul 50 mata dalam Mudah</span>
                </span>
            </div>
            @endif

            {{-- Hard --}}
            @if(in_array('hard', $unlockedLevels))
            <a href="{{ route('practice.count', [$topic->id, 'hard']) }}"
                class="bg-white border border-slate-100 rounded-2xl p-6 text-center hover:shadow-md hover:border-rose-200 transition shadow-sm">
                <div class="w-14 h-14 bg-rose-50 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-3">🔴</div>
                <div class="text-base font-bold text-slate-700 mb-1">
                    <span class="lang-en">Hard</span>
                    <span class="lang-bm hidden">Sukar</span>
                </div>
                <div class="text-xs text-slate-400 mb-3">
                    <span class="lang-en">Evaluation and creation</span>
                    <span class="lang-bm hidden">Penilaian dan penciptaan</span>
                </div>
                <span class="text-xs bg-teal-50 text-teal-600 font-semibold px-3 py-1 rounded-full">
                    <span class="lang-en">✅ Unlocked</span>
                    <span class="lang-bm hidden">✅ Dibuka</span>
                </span>
            </a>
            @else
            <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center opacity-60 cursor-not-allowed shadow-sm">
                <div class="w-14 h-14 bg-slate-100 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-3">🔒</div>
                <div class="text-base font-bold text-slate-400 mb-1">
                    <span class="lang-en">Hard</span>
                    <span class="lang-bm hidden">Sukar</span>
                </div>
                <div class="text-xs text-slate-400 mb-3">
                    <span class="lang-en">Evaluation and creation</span>
                    <span class="lang-bm hidden">Penilaian dan penciptaan</span>
                </div>
                <span class="text-xs bg-slate-100 text-slate-400 font-semibold px-3 py-1 rounded-full">
                    <span class="lang-en">Earn 50 pts in Medium</span>
                    <span class="lang-bm hidden">Kumpul 50 mata dalam Sederhana</span>
                </span>
            </div>
            @endif

        </div>

        <a href="{{ route('topics.revision', $topic->id) }}"
            class="text-sm text-slate-500 hover:text-teal-600 transition">
            <span class="lang-en">← Back to Quick Revision</span>
            <span class="lang-bm hidden">← Kembali ke Ulang Kaji Pantas</span>
        </a>

    </div>
</x-app-layout>