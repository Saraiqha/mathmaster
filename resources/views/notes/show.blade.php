<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics → {{ $topic->name }} → Learning Notes</span>
                <span class="lang-bm hidden">Utama → Topik → {{ $topic->name_bm }} → Nota Pembelajaran</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Learning Notes</span>
                <span class="lang-bm hidden">Nota Pembelajaran</span>
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
                class="px-5 py-2.5 text-sm font-medium bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                <span class="lang-en">← Back to Topics</span>
                <span class="lang-bm hidden">← Kembali ke Topik</span>
            </a>
            <a href="{{ route('topics.revision', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-sky-500 text-white rounded-xl hover:bg-sky-600 transition shadow-sm">
                <span class="lang-en">📋 Quick Revision</span>
                <span class="lang-bm hidden">📋 Ulang Kaji Pantas</span>
            </a>
            <a href="{{ route('practice.difficulty', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">
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
                feedback.className = 'text-xs text-slate-400 mt-2';
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