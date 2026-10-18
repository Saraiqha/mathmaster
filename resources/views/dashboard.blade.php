<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-6xl mx-auto">

        {{-- Welcome Message --}}
        <div class="mb-7">
            <h3 class="text-2xl font-bold text-gray-800">Welcome back, {{ Auth::user()->name }} 👋</h3>
            <p class="text-gray-400 text-sm mt-1">Here's your learning summary for today.</p>
        </div>

        {{-- Stat Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">

            <div class="bg-white rounded-2xl border border-teal-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-teal-50 rounded-lg flex items-center justify-center text-base">📊</div>
                    <p class="text-xs text-gray-400 font-medium">Overall Score</p>
                </div>
                <p class="text-3xl font-bold text-teal-700">0%</p>
                <p class="text-xs text-gray-400 mt-1">No attempts yet</p>
            </div>

            <div class="bg-white rounded-2xl border border-sky-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-sky-50 rounded-lg flex items-center justify-center text-base">📝</div>
                    <p class="text-xs text-gray-400 font-medium">Questions Attempted</p>
                </div>
                <p class="text-3xl font-bold text-sky-700">0</p>
                <p class="text-xs text-gray-400 mt-1">Total</p>
            </div>

            <div class="bg-white rounded-2xl border border-violet-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center text-base">📈</div>
                    <p class="text-xs text-gray-400 font-medium">Average This Week</p>
                </div>
                <p class="text-3xl font-bold text-violet-700">0%</p>
                <p class="text-xs text-gray-400 mt-1">No data yet</p>
            </div>

            <div class="bg-white rounded-2xl border border-orange-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-orange-50 rounded-lg flex items-center justify-center text-base">🔥</div>
                    <p class="text-xs text-gray-400 font-medium">Practice Streak</p>
                </div>
                <p class="text-3xl font-bold text-orange-600">0</p>
                <p class="text-xs text-gray-400 mt-1">Days in a row</p>
            </div>

        </div>

        {{-- Topic Performance + Recommendation --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm">
                <h4 class="text-sm font-semibold text-gray-700 mb-5">📚 Topic Performance</h4>
                @foreach(['Quadratic Functions', 'Number Bases', 'Logical Reasoning', 'Operation on Sets', 'Network in Graph Theory'] as $topic)
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-xs text-gray-500 w-36 truncate">{{ $topic }}</span>
                    <div class="flex-1 bg-gray-100 rounded-full h-2">
                        <div class="bg-teal-400 h-2 rounded-full" style="width: 0%"></div>
                    </div>
                    <span class="text-xs text-gray-400 w-8 text-right">0%</span>
                </div>
                @endforeach
            </div>

            {{-- Recommendation Card --}}
            <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-teal-600 text-sm font-semibold">🎯 Recommended for You</span>
                </div>
                <p class="text-sm font-bold text-teal-800 mb-2">Start your first practice session!</p>
                <p class="text-xs text-teal-600 leading-relaxed">Complete a topic to see your personalised recommendation here.</p>
                <a href="{{ route('topics.index') }}"
                    class="inline-block mt-5 bg-teal-600 text-white text-xs font-semibold px-5 py-2 rounded-lg hover:bg-teal-700 transition">
                    Go to Topics →
                </a>
            </div>

        </div>

        {{-- Recent Activity --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm">
            <h4 class="text-sm font-semibold text-gray-700 mb-4">🕐 Recent Activity</h4>
            <p class="text-xs text-gray-400">No activity yet. Start practising to see your history here.</p>
        </div>

    </div>
</x-app-layout>