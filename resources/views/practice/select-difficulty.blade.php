<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Select Difficulty — {{ $topic->name }}
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 mb-8">
            <h3 class="text-lg font-bold text-blue-800">{{ $topic->name }}</h3>
            <p class="text-sm text-blue-500 mt-1">{{ $topic->name_bm }}</p>
            <p class="text-sm text-gray-600 mt-2">{{ $topic->description }}</p>
        </div>

        <h4 class="text-sm font-semibold text-gray-700 mb-4">Choose a difficulty level to practise:</h4>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        {{-- Easy - always unlocked --}}
        <a href="{{ route('practice.count', [$topic->id, 'easy']) }}"
            class="bg-white border border-green-200 rounded-xl p-6 text-center hover:shadow-md transition hover:border-green-400">
            <div class="text-3xl mb-3">🟢</div>
            <div class="text-base font-semibold text-green-700">Easy</div>
            <div class="text-xs text-gray-400 mt-1">Recall and recognition</div>
            <div class="text-xs text-green-500 mt-2 font-medium">✅ Unlocked</div>
        </a>

        {{-- Medium --}}
        @if(in_array('medium', $unlockedLevels))
        <a href="{{ route('practice.count', [$topic->id, 'medium']) }}"
            class="bg-white border border-yellow-200 rounded-xl p-6 text-center hover:shadow-md transition hover:border-yellow-400">
            <div class="text-3xl mb-3">🟡</div>
            <div class="text-base font-semibold text-yellow-700">Medium</div>
            <div class="text-xs text-gray-400 mt-1">Application and analysis</div>
            <div class="text-xs text-green-500 mt-2 font-medium">✅ Unlocked</div>
        </a>
        @else
            <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 text-center opacity-60 cursor-not-allowed">
            <div class="text-3xl mb-3">🔒</div>
            <div class="text-base font-semibold text-gray-400">Medium</div>
            <div class="text-xs text-gray-400 mt-1">Application and analysis</div>
            <div class="text-xs text-gray-400 mt-2 font-medium">Earn 50 points in Easy to unlock</div>
        </div>
        @endif

        {{-- Hard --}}
        @if(in_array('hard', $unlockedLevels))
        <a href="{{ route('practice.count', [$topic->id, 'hard']) }}"
            class="bg-white border border-red-200 rounded-xl p-6 text-center hover:shadow-md transition hover:border-red-400">
            <div class="text-3xl mb-3">🔴</div>
            <div class="text-base font-semibold text-red-700">Hard</div>
            <div class="text-xs text-gray-400 mt-1">Evaluation and creation</div>
            <div class="text-xs text-green-500 mt-2 font-medium">✅ Unlocked</div>
        </a>
        @else
            <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 text-center opacity-60 cursor-not-allowed">
            <div class="text-3xl mb-3">🔒</div>
            <div class="text-base font-semibold text-gray-400">Hard</div>
            <div class="text-xs text-gray-400 mt-1">Evaluation and creation</div>
            <div class="text-xs text-gray-400 mt-2 font-medium">Earn 50 points in Medium to unlock</div>
        </div>
        @endif

    </div>

        <div class="mt-6">
            <a href="{{ route('topics.revision', $topic->id) }}"
                class="text-sm text-blue-600 hover:underline">← Back to Quick Revision</a>
        </div>

    </div>
</x-app-layout>