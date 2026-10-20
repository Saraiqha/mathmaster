<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Quick Revision — {{ $topic->name }}</span>
            <span class="lang-bm hidden">Ulang Kaji Pantas — {{ $topic->name_bm }}</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-4xl mx-auto">

        {{-- Topic Header --}}
        <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 mb-6 shadow-sm">
            <h3 class="text-xl font-bold text-teal-800 lang-en">{{ $topic->name }}</h3>
            <h3 class="text-xl font-bold text-teal-800 lang-bm hidden">{{ $topic->name_bm }}</h3>
            <p class="text-sm text-teal-500 mt-1 lang-en">{{ $topic->name_bm }}</p>
            <p class="text-sm text-teal-500 mt-1 lang-bm hidden">{{ $topic->name }}</p>
            <p class="text-sm text-gray-500 mt-2 lang-en">{{ $topic->description }}</p>
            <p class="text-sm text-gray-500 mt-2 lang-bm hidden">{{ $topic->description_bm }}</p>
        </div>

        {{-- Objectives --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
            <h4 class="text-sm font-bold text-teal-700 mb-4">
                <span class="lang-en">🎯 Learning Objectives</span>
                <span class="lang-bm hidden">🎯 Objektif Pembelajaran</span>
            </h4>
            <p class="text-sm text-gray-600 leading-relaxed lang-en">{{ $revision->objectives }}</p>
            <p class="text-sm text-gray-600 leading-relaxed lang-bm hidden">{{ $revision->objectives_bm }}</p>
        </div>

        {{-- Key Formulas --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
            <h4 class="text-sm font-bold text-teal-700 mb-4">
                <span class="lang-en">📐 Key Formulas</span>
                <span class="lang-bm hidden">📐 Rumus Utama</span>
            </h4>
            <div class="space-y-2 lang-en">
                @foreach(explode('|', $revision->key_formulas) as $formula)
                <div class="flex gap-2 items-start p-2 bg-teal-50 rounded-lg border border-teal-100">
                    <span class="text-teal-500 flex-shrink-0 mt-0.5">▸</span>
                    <p class="text-sm text-gray-700">{{ trim($formula) }}</p>
                </div>
                @endforeach
            </div>
            <div class="space-y-2 lang-bm hidden">
                @foreach(explode('|', $revision->key_formulas_bm) as $formula)
                <div class="flex gap-2 items-start p-2 bg-teal-50 rounded-lg border border-teal-100">
                    <span class="text-teal-500 flex-shrink-0 mt-0.5">▸</span>
                    <p class="text-sm text-gray-700">{{ trim($formula) }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Solving Tips --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
            <h4 class="text-sm font-bold text-teal-700 mb-4">
                <span class="lang-en">💡 Solving Tips</span>
                <span class="lang-bm hidden">💡 Tips Penyelesaian</span>
            </h4>
            <div class="space-y-2 lang-en">
                @foreach(preg_split('/(?=Step \d+:)/', $revision->solving_tips, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-2 text-sm text-gray-700 p-2 bg-sky-50 rounded-lg border border-sky-100">
                    @if(preg_match('/^(Step \d+:)(.*)/', trim($step), $m))
                        <span class="text-sky-600 font-semibold flex-shrink-0 w-16">{{ trim($m[1]) }}</span>
                        <span>{{ trim($m[2]) }}</span>
                    @else
                        <span class="text-sky-500 flex-shrink-0">▸</span>
                        <span>{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
            <div class="space-y-2 lang-bm hidden">
                @foreach(preg_split('/(?=Langkah \d+:)/', $revision->solving_tips_bm, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-2 text-sm text-gray-700 p-2 bg-sky-50 rounded-lg border border-sky-100">
                    @if(preg_match('/^(Langkah \d+:)(.*)/', trim($step), $m))
                        <span class="text-sky-600 font-semibold flex-shrink-0 w-20">{{ trim($m[1]) }}</span>
                        <span>{{ trim($m[2]) }}</span>
                    @else
                        <span class="text-sky-500 flex-shrink-0">▸</span>
                        <span>{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- Worked Example --}}
        <div class="bg-amber-50 border border-amber-100 rounded-2xl p-6 mb-6 shadow-sm">
            <h4 class="text-sm font-bold text-amber-700 mb-4">
                <span class="lang-en">✏️ Worked Example</span>
                <span class="lang-bm hidden">✏️ Contoh Penyelesaian</span>
            </h4>
            <div class="space-y-2 lang-en">
                @foreach(preg_split('/(?=Step \d+:)/', $revision->worked_example, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-2 text-sm text-gray-700">
                    @if(preg_match('/^(Step \d+:)(.*)/', trim($step), $m))
                        <span class="text-amber-600 font-semibold flex-shrink-0 w-16">{{ trim($m[1]) }}</span>
                        <span>{{ trim($m[2]) }}</span>
                    @else
                        <span>{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
            <div class="space-y-2 lang-bm hidden">
                @foreach(preg_split('/(?=Langkah \d+:)/', $revision->worked_example_bm, -1, PREG_SPLIT_NO_EMPTY) as $step)
                <div class="flex gap-2 text-sm text-gray-700">
                    @if(preg_match('/^(Langkah \d+:)(.*)/', trim($step), $m))
                        <span class="text-amber-600 font-semibold flex-shrink-0 w-20">{{ trim($m[1]) }}</span>
                        <span>{{ trim($m[2]) }}</span>
                    @else
                        <span>{{ trim($step) }}</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="flex gap-3">
            <a href="{{ route('topics.index') }}"
                class="px-5 py-2.5 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <span class="lang-en">← Back to Topics</span>
                <span class="lang-bm hidden">← Kembali ke Topik</span>
            </a>
            <a href="{{ route('practice.difficulty', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-teal-600 text-white rounded-xl hover:bg-teal-700 transition">
                <span class="lang-en">Start Practice →</span>
                <span class="lang-bm hidden">Mula Latihan →</span>
            </a>
        </div>

    </div>
</x-app-layout>