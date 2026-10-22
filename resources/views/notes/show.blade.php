<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Learning Notes — {{ $topic->name }}</span>
            <span class="lang-bm hidden">Nota Pembelajaran — {{ $topic->name_bm }}</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-4xl mx-auto">

        {{-- Topic Header --}}
        <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 mb-6 shadow-sm">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-2xl shadow-sm">
                    @if($topic->order === 1) 📐
                    @elseif($topic->order === 2) 🔢
                    @elseif($topic->order === 3) 🧠
                    @elseif($topic->order === 4) 🔵
                    @else 🕸️
                    @endif
                </div>
                <div>
                    <h3 class="text-lg font-bold text-teal-800 lang-en">{{ $topic->name }}</h3>
                    <h3 class="text-lg font-bold text-teal-800 lang-bm hidden">{{ $topic->name_bm }}</h3>
                    <p class="text-sm text-teal-500 lang-en">{{ $topic->description }}</p>
                    <p class="text-sm text-teal-500 lang-bm hidden">{{ $topic->description_bm }}</p>
                </div>
            </div>
        </div>

        {{-- Content based on topic --}}
        @if($topic->order === 1)
            @include('notes.topics.quadratic')
        @elseif($topic->order === 2)
            @include('notes.topics.number-bases')
        @elseif($topic->order === 3)
            @include('notes.topics.logical-reasoning')
        @elseif($topic->order === 4)
            @include('notes.topics.operation-sets')
        @else
            @include('notes.topics.network-graph')
        @endif

        {{-- Action Buttons --}}
        <div class="flex gap-3 mt-8">
            <a href="{{ route('topics.index') }}"
                class="px-5 py-2.5 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                <span class="lang-en">← Back to Topics</span>
                <span class="lang-bm hidden">← Kembali ke Topik</span>
            </a>
            <a href="{{ route('topics.revision', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-teal-600 text-white rounded-xl hover:bg-teal-700 transition">
                <span class="lang-en">Quick Revision →</span>
                <span class="lang-bm hidden">Ulang Kaji Pantas →</span>
            </a>
            <a href="{{ route('practice.difficulty', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-sky-600 text-white rounded-xl hover:bg-sky-700 transition">
                <span class="lang-en">Start Practice →</span>
                <span class="lang-bm hidden">Mula Latihan →</span>
            </a>
        </div>

    </div>

    <script>
        function toggleSolution(id) {
            const el = document.getElementById(id);
            const btn = document.getElementById('btn-' + id);
            const lang = localStorage.getItem('mm_lang') || 'en';
            if (el.classList.contains('hidden')) {
                el.classList.remove('hidden');
                btn.textContent = lang === 'bm' ? 'Sembunyikan Penyelesaian ▲' : 'Hide Solution ▲';
            } else {
                el.classList.add('hidden');
                btn.textContent = lang === 'bm' ? 'Tunjukkan Penyelesaian ▼' : 'Show Solution ▼';
            }
        }

        function checkAnswer(qId, correct) {
            const selected = document.querySelector(`input[name="${qId}"]:checked`);
            const feedback = document.getElementById('feedback-' + qId);
            const hint = document.getElementById('hint-' + qId);
            const lang = localStorage.getItem('mm_lang') || 'en';

            if (!selected) {
                feedback.textContent = lang === 'bm' ? 'Sila pilih jawapan dahulu.' : 'Please select an answer first.';
                feedback.className = 'text-xs text-gray-400 mt-2';
                feedback.classList.remove('hidden');
                return;
            }

            if (selected.value === correct) {
                feedback.textContent = lang === 'bm' ? '✅ Betul! Tahniah.' : '✅ Correct! Well done.';
                feedback.className = 'text-xs text-teal-600 font-semibold mt-2';
            } else {
                feedback.textContent = lang === 'bm' ? '❌ Tidak tepat. Cuba lagi atau semak petunjuk.' : '❌ Not quite. Try again or check the hint.';
                feedback.className = 'text-xs text-rose-500 font-semibold mt-2';
                if (hint) hint.classList.remove('hidden');
            }
            feedback.classList.remove('hidden');
        }
    </script>

</x-app-layout>