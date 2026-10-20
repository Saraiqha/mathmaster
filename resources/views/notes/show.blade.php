<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            Learning Notes — {{ $topic->name }}
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
                    <h3 class="text-lg font-bold text-teal-800">{{ $topic->name }}</h3>
                    <p class="text-sm text-teal-500">{{ $topic->name_bm }}</p>
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
                ← Back to Topics
            </a>
            <a href="{{ route('topics.revision', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-teal-600 text-white rounded-xl hover:bg-teal-700 transition">
                Quick Revision →
            </a>
            <a href="{{ route('practice.difficulty', $topic->id) }}"
                class="px-5 py-2.5 text-sm font-semibold bg-sky-600 text-white rounded-xl hover:bg-sky-700 transition">
                Start Practice →
            </a>
        </div>

    </div>

    <script>
        function toggleSolution(id) {
            const el = document.getElementById(id);
            const btn = document.getElementById('btn-' + id);
            if (el.classList.contains('hidden')) {
                el.classList.remove('hidden');
                btn.textContent = 'Hide Solution ▲';
            } else {
                el.classList.add('hidden');
                btn.textContent = 'Show Solution ▼';
            }
        }

        function checkAnswer(qId, correct) {
            const selected = document.querySelector(`input[name="${qId}"]:checked`);
            const feedback = document.getElementById('feedback-' + qId);
            const hint = document.getElementById('hint-' + qId);

            if (!selected) {
                feedback.textContent = 'Please select an answer first.';
                feedback.className = 'text-xs text-gray-400 mt-2';
                feedback.classList.remove('hidden');
                return;
            }

            if (selected.value === correct) {
                feedback.textContent = '✅ Correct! Well done.';
                feedback.className = 'text-xs text-teal-600 font-semibold mt-2';
            } else {
                feedback.textContent = '❌ Not quite. Try again or check the hint.';
                feedback.className = 'text-xs text-rose-500 font-semibold mt-2';
                if (hint) hint.classList.remove('hidden');
            }
            feedback.classList.remove('hidden');
        }
    </script>

</x-app-layout>