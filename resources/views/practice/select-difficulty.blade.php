<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            Select Difficulty — {{ $topic->name }}
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 mb-8 shadow-sm">
            <h3 class="text-lg font-bold text-teal-800">{{ $topic->name }}</h3>
            <p class="text-sm text-teal-500 mt-1">{{ $topic->name_bm }}</p>
            <p class="text-sm text-gray-500 mt-2">{{ $topic->description }}</p>
        </div>

        <h4 class="text-sm font-semibold text-gray-600 mb-4">Choose a difficulty level to practise:</h4>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            {{-- Easy - always unlocked --}}
            <a href="{{ route('practice.count', [$topic->id, 'easy']) }}"
                class="bg-white border border-teal-200 rounded-2xl p-6 text-center hover:shadow-md transition hover:border-teal-400 shadow-sm">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🟢</div>
                <div class="text-base font-bold text-teal-700">Easy</div>
                <div class="text-xs text-gray-400 mt-1">Recall and recognition</div>
                <div class="text-xs text-teal-500 mt-3 font-medium">✅ Unlocked</div>
            </a>

            {{-- Medium --}}
            @if(in_array('medium', $unlockedLevels))
            <a href="{{ route('practice.count', [$topic->id, 'medium']) }}"
                class="bg-white border border-amber-200 rounded-2xl p-6 text-center hover:shadow-md transition hover:border-amber-400 shadow-sm">
                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🟡</div>
                <div class="text-base font-bold text-amber-700">Medium</div>
                <div class="text-xs text-gray-400 mt-1">Application and analysis</div>
                <div class="text-xs text-teal-500 mt-3 font-medium">✅ Unlocked</div>
            </a>
            @else
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center opacity-60 cursor-not-allowed shadow-sm">
                <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🔒</div>
                <div class="text-base font-bold text-gray-400">Medium</div>
                <div class="text-xs text-gray-400 mt-1">Application and analysis</div>
                <div class="text-xs text-gray-400 mt-3 font-medium">Earn 50 points in Easy</div>
            </div>
            @endif

            {{-- Hard --}}
            @if(in_array('hard', $unlockedLevels))
            <a href="{{ route('practice.count', [$topic->id, 'hard']) }}"
                class="bg-white border border-rose-200 rounded-2xl p-6 text-center hover:shadow-md transition hover:border-rose-400 shadow-sm">
                <div class="w-12 h-12 bg-rose-50 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🔴</div>
                <div class="text-base font-bold text-rose-700">Hard</div>
                <div class="text-xs text-gray-400 mt-1">Evaluation and creation</div>
                <div class="text-xs text-teal-500 mt-3 font-medium">✅ Unlocked</div>
            </a>
            @else
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center opacity-60 cursor-not-allowed shadow-sm">
                <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-2xl mx-auto mb-3">🔒</div>
                <div class="text-base font-bold text-gray-400">Hard</div>
                <div class="text-xs text-gray-400 mt-1">Evaluation and creation</div>
                <div class="text-xs text-gray-400 mt-3 font-medium">Earn 50 points in Medium</div>
            </div>
            @endif

        </div>

        <div class="mt-6">
            <a href="{{ route('topics.revision', $topic->id) }}"
                class="text-sm text-teal-600 hover:underline">← Back to Quick Revision</a>
        </div>

    </div>
</x-app-layout>