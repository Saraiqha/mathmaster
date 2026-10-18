<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            Quick Revision — {{ $topic->name }}
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-4xl mx-auto">

        {{-- Topic Header --}}
        <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 mb-6 shadow-sm">
            <h3 class="text-xl font-bold text-teal-800">{{ $topic->name }}</h3>
            <p class="text-sm text-teal-500 mt-1">{{ $topic->name_bm }}</p>
            <p class="text-sm text-gray-500 mt-2">{{ $topic->description }}</p>
        </div>

        {{-- Bilingual Toggle --}}
        <div class="flex gap-2 mb-6">
            <button onclick="switchLang('en')" id="btn-en"
                class="px-4 py-2 text-xs font-semibold rounded-lg bg-teal-600 text-white transition">
                English
            </button>
            <button onclick="switchLang('bm')" id="btn-bm"
                class="px-4 py-2 text-xs font-semibold rounded-lg bg-gray-100 text-gray-500 transition">
                Bahasa Malaysia
            </button>
        </div>

        {{-- Objectives --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
            <h4 class="text-sm font-bold text-teal-700 mb-3">🎯 Learning Objectives</h4>
            <p class="text-sm text-gray-600 leading-relaxed lang-en">{{ $revision->objectives }}</p>
            <p class="text-sm text-gray-600 leading-relaxed lang-bm hidden">{{ $revision->objectives_bm }}</p>
        </div>

        {{-- Key Formulas --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
            <h4 class="text-sm font-bold text-teal-700 mb-3">📐 Key Formulas</h4>
            <p class="text-sm text-gray-600 leading-relaxed lang-en">{{ $revision->key_formulas }}</p>
            <p class="text-sm text-gray-600 leading-relaxed lang-bm hidden">{{ $revision->key_formulas_bm }}</p>
        </div>

        {{-- Solving Tips --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
            <h4 class="text-sm font-bold text-teal-700 mb-3">💡 Solving Tips</h4>
            <p class="text-sm text-gray-600 leading-relaxed lang-en">{{ $revision->solving_tips }}</p>
            <p class="text-sm text-gray-600 leading-relaxed lang-bm hidden">{{ $revision->solving_tips_bm }}</p>
        </div>

        {{-- Worked Example --}}
        <div class="bg-amber-50 border border-amber-100 rounded-2xl p-6 mb-6 shadow-sm">
            <h4 class="text-sm font-bold text-amber-700 mb-3">✏️ Worked Example</h4>
            <p class="text-sm text-gray-700 leading-relaxed lang-en">{{ $revision->worked_example }}</p>
            <p class="text-sm text-gray-700 leading-relaxed lang-bm hidden">{{ $revision->worked_example_bm }}</p>
        </div>

        {{-- Action Buttons --}}
        <div class="flex gap-3">
            <a href="{{ route('topics.index') }}"
                class="px-5 py-2.5 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                ← Back to Topics
            </a>
            <a href="{{ route('practice.difficulty', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-teal-600 text-white rounded-xl hover:bg-teal-700 transition">
                Start Practice →
            </a>
        </div>

    </div>

    {{-- Language Toggle Script --}}
    <script>
        function switchLang(lang) {
            document.querySelectorAll('.lang-en').forEach(el => {
                el.classList.toggle('hidden', lang !== 'en');
            });
            document.querySelectorAll('.lang-bm').forEach(el => {
                el.classList.toggle('hidden', lang !== 'bm');
            });
            document.getElementById('btn-en').className = lang === 'en'
                ? 'px-4 py-2 text-xs font-semibold rounded-lg bg-teal-600 text-white transition'
                : 'px-4 py-2 text-xs font-semibold rounded-lg bg-gray-100 text-gray-500 transition';
            document.getElementById('btn-bm').className = lang === 'bm'
                ? 'px-4 py-2 text-xs font-semibold rounded-lg bg-teal-600 text-white transition'
                : 'px-4 py-2 text-xs font-semibold rounded-lg bg-gray-100 text-gray-500 transition';
        }
    </script>

</x-app-layout>