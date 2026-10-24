<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics → Quick Revision</span>
                <span class="lang-bm hidden">Utama → Topik → Ulang Kaji Pantas</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Quick Revision</span>
                <span class="lang-bm hidden">Ulang Kaji Pantas</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-4xl mx-auto">

        {{-- Topic Header --}}
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
                    <h3 class="text-lg font-bold text-slate-800 lang-en">{{ $topic->name }}</h3>
                    <h3 class="text-lg font-bold text-slate-800 lang-bm hidden">{{ $topic->name_bm }}</h3>
                    <p class="text-sm text-slate-400 mt-0.5 lang-en">{{ $topic->name_bm }}</p>
                    <p class="text-sm text-slate-400 mt-0.5 lang-bm hidden">{{ $topic->name }}</p>
                </div>
            </div>
        </div>

        {{-- Objectives --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-4">
            <h4 class="text-sm font-bold text-teal-700 mb-4 flex items-center gap-2">
                <span class="w-6 h-6 bg-teal-50 rounded-lg flex items-center justify-center text-xs">🎯</span>
                <span class="lang-en">Learning Objectives</span>
                <span class="lang-bm hidden">Objektif Pembelajaran</span>
            </h4>
            <p class="text-sm text-slate-600 leading-relaxed lang-en">{{ $revision->objectives }}</p>
            <p class="text-sm text-slate-600 leading-relaxed lang-bm hidden">{{ $revision->objectives_bm }}</p>
        </div>

        {{-- Key Formulas --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-4">
            <h4 class="text-sm font-bold text-teal-700 mb-4 flex items-center gap-2">
                <span class="w-6 h-6 bg-teal-50 rounded-lg flex items-center justify-center text-xs">📐</span>
                <span class="lang-en">Key Formulas</span>
                <span class="lang-bm hidden">Rumus Utama</span>
            </h4>
            <div class="space-y-2 lang-en">
                @foreach(explode('|', $revision->key_formulas) as $formula)
                <div class="flex gap-2 items-start p-3 bg-teal-50 rounded-xl border border-teal-100">
                    <span class="text-teal-500 flex-shrink-0 mt-0.5 font-bold">▸</span>
                    <p class="text-sm text-slate-700">{{ trim($formula) }}</p>
                </div>
                @endforeach
            </div>
            <div class="space-y-2 lang-bm hidden">
                @foreach(explode('|', $revision->key_formulas_bm) as $formula)
                <div class="flex gap-2 items-start p-3 bg-teal-50 rounded-xl border border-teal-100">
                    <span class="text-teal-500 flex-shrink-0 mt-0.5 font-bold">▸</span>
                    <p class="text-sm text-slate-700">{{ trim($formula) }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Solving Tips --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-4">
            <h4 class="text-sm font-bold text-teal-700 mb-4 flex items-center gap-2">
                <span class="w-6 h-6 bg-teal-50 rounded-lg flex items-center justify-center text-xs">💡</span>
                <span class="lang-en">Solving Tips</span>
                <span class="lang-bm hidden">Tips Penyelesaian</span>
            </h4>
            <div class="space-y-2 lang-en">
                @foreach(preg_split('/(?=Step \d+:)/', $revision->solving_tips, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-3 p-3 bg-sky-50 rounded-xl border border-sky-100">
                    @if(preg_match('/^(Step \d+:)(.*)/', trim($step), $m))
                        <span class="text-sky-600 font-bold text-xs flex-shrink-0 w-16 pt-0.5">{{ trim($m[1]) }}</span>
                        <span class="text-sm text-slate-700">{{ trim($m[2]) }}</span>
                    @else
                        <span class="text-sky-500 flex-shrink-0">▸</span>
                        <span class="text-sm text-slate-700">{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
            <div class="space-y-2 lang-bm hidden">
                @foreach(preg_split('/(?=Langkah \d+:)/', $revision->solving_tips_bm, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-3 p-3 bg-sky-50 rounded-xl border border-sky-100">
                    @if(preg_match('/^(Langkah \d+:)(.*)/', trim($step), $m))
                        <span class="text-sky-600 font-bold text-xs flex-shrink-0 w-20 pt-0.5">{{ trim($m[1]) }}</span>
                        <span class="text-sm text-slate-700">{{ trim($m[2]) }}</span>
                    @else
                        <span class="text-sky-500 flex-shrink-0">▸</span>
                        <span class="text-sm text-slate-700">{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- Worked Example --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-6">
            <h4 class="text-sm font-bold text-amber-700 mb-4 flex items-center gap-2">
                <span class="w-6 h-6 bg-amber-50 rounded-lg flex items-center justify-center text-xs">✏️</span>
                <span class="lang-en">Worked Example</span>
                <span class="lang-bm hidden">Contoh Penyelesaian</span>
            </h4>
            <div class="bg-amber-50 rounded-xl border border-amber-100 p-5">
                <div class="space-y-3 lang-en">
                    @foreach(preg_split('/(?=Step \d+:)/i', $revision->worked_example, -1, PREG_SPLIT_NO_EMPTY) as $step)
                    @php preg_match('/^(Step \d+:)\s*(.*)/is', trim($step), $m); @endphp
                    @if(!empty($m))
                    <div class="pb-3 border-b border-amber-100 last:border-0 last:pb-0">
                        <span class="text-xs font-bold text-amber-600 mr-2">
                            {{ trim($m[1]) }}
                        </span>
                        <span class="text-sm text-slate-700">
                            {{ trim($m[2]) }}
                        </span>
                    </div>
                @else
                    <div class="pb-3 border-b border-amber-100 last:border-0 last:pb-0">
                        <span class="text-sm text-slate-700 font-medium">
                            {{ trim($step) }}
                        </span>
                    </div>
                @endif
                    @endforeach
                </div>
                <div class="space-y-3 lang-bm hidden">
                    @foreach(preg_split('/(?=Langkah \d+:)/i', $revision->worked_example_bm, -1, PREG_SPLIT_NO_EMPTY) as $step)
                    @php preg_match('/^(Langkah \d+:)\s*(.*)/is', trim($step), $m); @endphp
                    @if(!empty($m))
                    <div class="pb-3 border-b border-amber-100 last:border-0 last:pb-0">
                        <span class="text-xs font-bold text-amber-600 mr-2">
                            {{ trim($m[1]) }}
                        </span>
                        <span class="text-sm text-slate-700">
                            {{ trim($m[2]) }}
                        </span>
                    </div>
                @else
                    <div class="pb-3 border-b border-amber-100 last:border-0 last:pb-0">
                        <span class="text-sm text-slate-700 font-medium">
                            {{ trim($step) }}
                        </span>
                    </div>
                @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="flex gap-3">
            <a href="{{ route('topics.index') }}"
                class="px-5 py-2.5 text-sm font-medium bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                <span class="lang-en">← Back to Topics</span>
                <span class="lang-bm hidden">← Kembali ke Topik</span>
            </a>
            <a href="{{ route('topics.notes', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-sky-500 text-white rounded-xl hover:bg-sky-600 transition shadow-sm">
                <span class="lang-en">📖 Learning Notes</span>
                <span class="lang-bm hidden">📖 Nota Pembelajaran</span>
            </a>
            <a href="{{ route('practice.difficulty', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">
                <span class="lang-en">Start Practice →</span>
                <span class="lang-bm hidden">Mula Latihan →</span>
            </a>
        </div>

    </div>
</x-app-layout>