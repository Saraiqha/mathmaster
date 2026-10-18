<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            Practice Summary
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Score Card --}}
        <div class="bg-white border border-gray-100 rounded-2xl p-8 mb-6 text-center shadow-sm">
            <div class="text-6xl font-bold mb-2
                @if($score >= 80) text-teal-600
                @elseif($score >= 60) text-amber-600
                @else text-rose-600
                @endif">
                {{ $score }}%
            </div>
            <p class="text-sm text-gray-400 mt-1">
                {{ $session->correct_answers }} correct out of {{ $session->total_questions }} questions
            </p>

            {{-- Performance Message --}}
            <div class="mt-4 text-sm font-semibold
                @if($score >= 80) text-teal-600
                @elseif($score >= 60) text-amber-600
                @else text-rose-600
                @endif">
                @if($score >= 80)
                    🏆 Excellent work! You have mastered this level.
                @elseif($score >= 60)
                    👍 Good job! Keep practising to improve further.
                @else
                    💪 Keep going! Review the Quick Revision and try again.
                @endif
            </div>
        </div>

        {{-- Level Unlock Notification --}}
        @if(isset($unlocked) && $unlocked)
        <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5 mb-6 text-center shadow-sm">
            <div class="text-3xl mb-2">🎉</div>
            <p class="text-sm font-bold text-amber-700">
                You unlocked <span class="capitalize">{{ $unlocked }}</span> level for {{ $session->topic->name }}!
            </p>
            <p class="text-xs text-amber-600 mt-1">Keep practising to unlock the next level.</p>
        </div>
        @endif

        {{-- Stats Row --}}
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="bg-white border border-gray-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-gray-400 mb-1">Topic</p>
                <p class="text-xs font-bold text-gray-700">{{ $session->topic->name }}</p>
            </div>
            <div class="bg-white border border-gray-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-gray-400 mb-1">Difficulty</p>
                <p class="text-xs font-bold
                    @if($session->difficulty === 'easy') text-teal-600
                    @elseif($session->difficulty === 'medium') text-amber-600
                    @else text-rose-600
                    @endif">
                    {{ ucfirst($session->difficulty) }}
                </p>
            </div>
            <div class="bg-white border border-gray-100 rounded-2xl p-4 text-center shadow-sm">
                <p class="text-xs text-gray-400 mb-1">Points Earned</p>
                <p class="text-xs font-bold text-teal-600">⭐ {{ $points }}</p>
            </div>
        </div>

        {{-- Recommendation --}}
        @if($score < 60)
        <div class="bg-teal-50 border border-teal-100 rounded-2xl p-5 mb-6 shadow-sm">
            <p class="text-sm font-bold text-teal-800 mb-1">📖 Recommendation</p>
            <p class="text-sm text-teal-600 leading-relaxed">
                Your score is below 60%. We recommend reviewing the Quick Revision
                for <strong>{{ $session->topic->name }}</strong> before trying again.
            </p>
            <a href="{{ route('topics.revision', $session->topic->id) }}"
                class="inline-block mt-3 text-xs font-semibold text-teal-600 underline">
                Go to Quick Revision →
            </a>
        </div>
        @endif

        {{-- Action Buttons --}}
        <div class="flex gap-3">
            <a href="{{ route('practice.difficulty', $session->topic->id) }}"
                class="flex-1 text-center py-3 text-sm font-semibold bg-teal-600 text-white rounded-xl hover:bg-teal-700 transition">
                Practice Again
            </a>
            <a href="{{ route('topics.index') }}"
                class="flex-1 text-center py-3 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                Back to Topics
            </a>
            <a href="{{ route('dashboard') }}"
                class="flex-1 text-center py-3 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                Dashboard
            </a>
        </div>

    </div>
</x-app-layout>