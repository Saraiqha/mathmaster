<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Practice Summary
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto">

        {{-- Score Card --}}
        <div class="bg-white border border-gray-200 rounded-xl p-8 mb-6 text-center">
            <div class="text-5xl font-bold mb-2
                @if($score >= 80) text-green-600
                @elseif($score >= 60) text-yellow-600
                @else text-red-600
                @endif">
                {{ $score }}%
            </div>
            <p class="text-sm text-gray-500 mt-1">
                {{ $session->correct_answers }} correct out of {{ $session->total_questions }} questions
            </p>
        
        {{-- Level Unlock Notification --}}
        @if($unlocked)
        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-5 mb-6 text-center">
        <div class="text-3xl mb-2">🎉</div>
        <p class="text-sm font-bold text-yellow-700">
            You unlocked {{ ucfirst($unlocked) }} level for {{ $session->topic->name }}!
        </p>
        <p class="text-xs text-yellow-600 mt-1">Keep practising to unlock the next level.</p>
        </div>
        @endif

        {{-- Performance Message }}
        <div class="mt-4 text-sm font-medium
            @if($score >= 80) text-green-600
            @elseif($score >= 60) text-yellow-600
            @else text-red-600
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

        {{-- Stats Row --}}
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center">
                <p class="text-xs text-gray-400 mb-1">Topic</p>
                <p class="text-sm font-semibold text-gray-700">{{ $session->topic->name }}</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center">
                <p class="text-xs text-gray-400 mb-1">Difficulty</p>
                <p class="text-sm font-semibold
                    @if($session->difficulty === 'easy') text-green-600
                    @elseif($session->difficulty === 'medium') text-yellow-600
                    @else text-red-600
                    @endif">
                    {{ ucfirst($session->difficulty) }}
                </p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center">
                <p class="text-xs text-gray-400 mb-1">Points Earned</p>
                <p class="text-sm font-semibold text-blue-600">⭐ {{ $points }}</p>
            </div>
        </div>

        {{-- Recommendation --}}
        @if($score < 60)
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-5 mb-6">
            <p class="text-sm font-semibold text-blue-800 mb-1">📖 Recommendation</p>
            <p class="text-sm text-blue-600">
                Your score is below 60%. We recommend reviewing the Quick Revision
                for {{ $session->topic->name }} before trying again.
            </p>
            <a href="{{ route('topics.revision', $session->topic->id) }}"
                class="inline-block mt-3 text-xs font-medium text-blue-600 underline">
                Go to Quick Revision →
            </a>
        </div>
        @endif

        {{-- Action Buttons --}}
        <div class="flex gap-3">
            <a href="{{ route('practice.difficulty', $session->topic->id) }}"
                class="flex-1 text-center py-3 text-sm font-medium bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Practice Again
            </a>
            <a href="{{ route('topics.index') }}"
                class="flex-1 text-center py-3 text-sm font-medium bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200">
                Back to Topics
            </a>
            <a href="{{ route('dashboard') }}"
                class="flex-1 text-center py-3 text-sm font-medium bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200">
                Dashboard
            </a>
        </div>

    </div>
</x-app-layout>