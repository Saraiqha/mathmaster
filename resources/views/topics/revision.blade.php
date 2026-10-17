<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Quick Revision — {{ $topic->name }}
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-4xl mx-auto">

        {{-- Topic Header --}}
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 mb-6">
            <h3 class="text-xl font-bold text-blue-800">{{ $topic->name }}</h3>
            <p class="text-sm text-blue-500 mt-1">{{ $topic->name_bm }}</p>
            <p class="text-sm text-gray-600 mt-2">{{ $topic->description }}</p>
        </div>

        {{-- Bilingual Toggle --}}
        <div class="flex gap-2 mb-6">
            <button onclick="switchLang('en')" id="btn-en"
                class="px-4 py-2 text-xs font-medium rounded-lg bg-blue-600 text-white">
                English
            </button>
            <button onclick="switchLang('bm')" id="btn-bm"
                class="px-4 py-2 text-xs font-medium rounded-lg bg-gray-100 text-gray-600">
                Bahasa Malaysia
            </button>
        </div>

        {{-- Objectives --}}
        <div class="bg-white rounded-xl border border-gray-200 p-6 mb-4">
            <h4 class="text-sm font-semibold text-gray-700 mb-3">🎯 Learning Objectives</h4>
            <p class="text-sm text-gray-600 lang-en">{{ $revision->objectives }}</p>
            <p class="text-sm text-gray-600 lang-bm hidden">{{ $revision->objectives_bm }}</p>
        </div>

        {{-- Key Formulas --}}
        <div class="bg-white rounded-xl border border-gray-200 p-6 mb-4">
            <h4 class="text-sm font-semibold text-gray-700 mb-3">📐 Key Formulas</h4>
            <p class="text-sm text-gray-600 lang-en">{{ $revision->key_formulas }}</p>
            <p class="text-sm text-gray-600 lang-bm hidden">{{ $revision->key_formulas_bm }}</p>
        </div>

        {{-- Solving Tips --}}
        <div class="bg-white rounded-xl border border-gray-200 p-6 mb-4">
            <h4 class="text-sm font-semibold text-gray-700 mb-3">💡 Solving Tips</h4>
            <p class="text-sm text-gray-600 lang-en">{{ $revision->solving_tips }}</p>
            <p class="text-sm text-gray-600 lang-bm hidden">{{ $revision->solving_tips_bm }}</p>
        </div>

        {{-- Worked Example --}}
        <div class="bg-yellow-50 border border-yellow-100 rounded-xl p-6 mb-6">
            <h4 class="text-sm font-semibold text-yellow-700 mb-3">✏️ Worked Example</h4>
            <p class="text-sm text-gray-700 lang-en">{{ $revision->worked_example }}</p>
            <p class="text-sm text-gray-700 lang-bm hidden">{{ $revision->worked_example_bm }}</p>
        </div>

        {{-- Action Buttons --}}
        <div class="flex gap-3">
            <a href="{{ route('topics.index') }}"
                class="px-5 py-2 text-sm font-medium bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200">
                ← Back to Topics
            </a>
            <a href="{{ route('practice.difficulty', $topic->id) }}"
                class="px-5 py-2 text-sm font-medium bg-blue-600 text-white rounded-lg hover:bg-blue-700">
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
                ? 'px-4 py-2 text-xs font-medium rounded-lg bg-blue-600 text-white'
                : 'px-4 py-2 text-xs font-medium rounded-lg bg-gray-100 text-gray-600';
            document.getElementById('btn-bm').className = lang === 'bm'
                ? 'px-4 py-2 text-xs font-medium rounded-lg bg-blue-600 text-white'
                : 'px-4 py-2 text-xs font-medium rounded-lg bg-gray-100 text-gray-600';
        }
    </script>

</x-app-layout>