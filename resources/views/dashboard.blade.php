<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-6xl mx-auto">

        {{-- Welcome Message --}}
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800">Welcome back, {{ Auth::user()->name }} 👋</h3>
            <p class="text-gray-500 text-sm mt-1">Here's your learning summary for today.</p>
        </div>

        {{-- Stat Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <p class="text-xs text-gray-400 mb-1">Overall Score</p>
                <p class="text-3xl font-bold text-gray-800">0%</p>
                <p class="text-xs text-gray-400 mt-1">No attempts yet</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <p class="text-xs text-gray-400 mb-1">Questions Attempted</p>
                <p class="text-3xl font-bold text-gray-800">0</p>
                <p class="text-xs text-gray-400 mt-1">Total</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <p class="text-xs text-gray-400 mb-1">Average This Week</p>
                <p class="text-3xl font-bold text-gray-800">0%</p>
                <p class="text-xs text-gray-400 mt-1">No data yet</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <p class="text-xs text-gray-400 mb-1">Practice Streak</p>
                <p class="text-3xl font-bold text-gray-800">0 🔥</p>
                <p class="text-xs text-gray-400 mt-1">Days in a row</p>
            </div>
        </div>

        {{-- Topic Performance --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-xl border border-gray-200 p-5">
                <h4 class="text-sm font-semibold text-gray-700 mb-4">Topic Performance</h4>
                @foreach(['Algebra', 'Geometry', 'Trigonometry', 'Functions', 'Statistics'] as $topic)
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-xs text-gray-500 w-24">{{ $topic }}</span>
                    <div class="flex-1 bg-gray-100 rounded-full h-2">
                        <div class="bg-blue-400 h-2 rounded-full" style="width: 0%"></div>
                    </div>
                    <span class="text-xs text-gray-400 w-8 text-right">0%</span>
                </div>
                @endforeach
            </div>

            {{-- Recommendation Card --}}
            <div class="bg-blue-50 border border-blue-100 rounded-xl p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-blue-500 text-sm font-medium">🎯 Recommended for You</span>
                </div>
                <p class="text-sm font-semibold text-blue-800 mb-1">Start your first practice session!</p>
                <p class="text-xs text-blue-500">Complete a topic to see your personalised recommendation here.</p>
                <a href="#" class="inline-block mt-4 bg-blue-600 text-white text-xs font-medium px-4 py-2 rounded-lg hover:bg-blue-700">
                    Go to Topics →
                </a>
            </div>
        </div>

        {{-- Recent Activity --}}
        <div class="bg-white rounded-xl border border-gray-200 p-5">
            <h4 class="text-sm font-semibold text-gray-700 mb-4">Recent Activity</h4>
            <p class="text-xs text-gray-400">No activity yet. Start practising to see your history here.</p>
        </div>

    </div>
</x-app-layout>