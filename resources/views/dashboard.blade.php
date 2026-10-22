<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-lg text-slate-800">
            <span class="lang-en">Dashboard</span>
            <span class="lang-bm hidden">Papan Pemuka</span>
        </h2>
    </x-slot>

    <div class="p-6 max-w-7xl mx-auto">

        {{-- Welcome Banner --}}
        <div class="bg-gradient-to-r from-teal-500 to-teal-600 rounded-2xl p-6 mb-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-teal-100 text-sm font-medium mb-1">
                        <span class="lang-en">Good day! 👋</span>
                        <span class="lang-bm hidden">Selamat datang! 👋</span>
                    </p>
                    <h3 class="text-2xl font-bold text-white">{{ Auth::user()->name }}</h3>
                    <p class="text-teal-100 text-sm mt-1">
                        <span class="lang-en">Keep going! You're doing great in your Form 4 Mathematics journey.</span>
                        <span class="lang-bm hidden">Teruskan! Anda melakukan dengan baik dalam perjalanan Matematik Tingkatan 4 anda.</span>
                    </p>
                </div>
                <div class="hidden md:block text-5xl">🎯</div>
            </div>
        </div>

        {{-- Stat Cards --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center text-xl">📊</div>
                    <p class="text-xs text-slate-400 font-medium">
                        <span class="lang-en">Overall Score</span>
                        <span class="lang-bm hidden">Skor Keseluruhan</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-slate-800">{{ $overallScore }}%</p>
                <p class="text-xs text-slate-400 mt-1">
                    <span class="lang-en">{{ $totalSessions > 0 ? 'Based on '.$totalSessions.' sessions' : 'No attempts yet' }}</span>
                    <span class="lang-bm hidden">{{ $totalSessions > 0 ? 'Berdasarkan '.$totalSessions.' sesi' : 'Belum ada percubaan' }}</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-sky-50 rounded-xl flex items-center justify-center text-xl">📝</div>
                    <p class="text-xs text-slate-400 font-medium">
                        <span class="lang-en">Questions Attempted</span>
                        <span class="lang-bm hidden">Soalan Dijawab</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-slate-800">{{ $totalQuestions }}</p>
                <p class="text-xs text-slate-400 mt-1">
                    <span class="lang-en">Total</span>
                    <span class="lang-bm hidden">Jumlah</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-violet-50 rounded-xl flex items-center justify-center text-xl">📈</div>
                    <p class="text-xs text-slate-400 font-medium">
                        <span class="lang-en">Average This Week</span>
                        <span class="lang-bm hidden">Purata Minggu Ini</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-slate-800">{{ $weeklyAvg }}%</p>
                <p class="text-xs text-slate-400 mt-1">
                    <span class="lang-en">{{ $weeklyAvg > 0 ? 'Last 7 days' : 'No data yet' }}</span>
                    <span class="lang-bm hidden">{{ $weeklyAvg > 0 ? '7 hari lepas' : 'Tiada data lagi' }}</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-orange-50 rounded-xl flex items-center justify-center text-xl">⭐</div>
                    <p class="text-xs text-slate-400 font-medium">
                        <span class="lang-en">Total Points</span>
                        <span class="lang-bm hidden">Jumlah Mata</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-slate-800">{{ $totalPoints }}</p>
                <p class="text-xs text-slate-400 mt-1">
                    <span class="lang-en">Points earned</span>
                    <span class="lang-bm hidden">Mata diperoleh</span>
                </p>
            </div>

        </div>

        {{-- Middle Row: Chart + Recommendation --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            {{-- Topic Performance --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                <div class="flex items-center justify-between mb-5">
                    <h4 class="text-sm font-bold text-slate-700">
                        <span class="lang-en">📚 Topic Performance</span>
                        <span class="lang-bm hidden">📚 Prestasi Topik</span>
                    </h4>
                    <a href="{{ route('topics.index') }}" class="text-xs text-teal-600 font-semibold hover:underline">
                        <span class="lang-en">View All →</span>
                        <span class="lang-bm hidden">Lihat Semua →</span>
                    </a>
                </div>
                @if($totalSessions > 0)
                <canvas id="topicChart" height="200"></canvas>
                @else
                @foreach($topicPerformance as $tp)
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-xs text-slate-500 w-32 truncate lang-en">{{ $tp['topic']->name }}</span>
                    <span class="text-xs text-slate-500 w-32 truncate lang-bm hidden">{{ $tp['topic']->name_bm }}</span>
                    <div class="flex-1 bg-slate-100 rounded-full h-2">
                        <div class="bg-teal-400 h-2 rounded-full" style="width: {{ $tp['avg_score'] }}%"></div>
                    </div>
                    <span class="text-xs text-slate-400 w-8 text-right">{{ $tp['avg_score'] }}%</span>
                </div>
                @endforeach
                <p class="text-xs text-slate-400 text-center mt-4">
                    <span class="lang-en">Complete a practice session to see your chart.</span>
                    <span class="lang-bm hidden">Lengkapkan sesi latihan untuk melihat carta anda.</span>
                </p>
                @endif
            </div>

            {{-- Recommendation --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                <h4 class="text-sm font-bold text-slate-700 mb-5">
                    <span class="lang-en">🎯 Recommended for You</span>
                    <span class="lang-bm hidden">🎯 Disyorkan untuk Anda</span>
                </h4>
                @if($weakTopic)
                <div class="bg-rose-50 border border-rose-100 rounded-xl p-4 mb-4">
                    <p class="text-xs font-semibold text-rose-600 mb-1">
                        <span class="lang-en">Needs Improvement</span>
                        <span class="lang-bm hidden">Perlu Peningkatan</span>
                    </p>
                    <p class="text-sm font-bold text-slate-800 lang-en">{{ $weakTopic->name }}</p>
                    <p class="text-sm font-bold text-slate-800 lang-bm hidden">{{ $weakTopic->name_bm }}</p>
                    <p class="text-xs text-slate-500 mt-1">
                        <span class="lang-en">Average score:</span>
                        <span class="lang-bm hidden">Skor purata:</span>
                        <span class="font-bold text-rose-600">
                            {{ collect($topicPerformance)->firstWhere('topic.id', $weakTopic->id)['avg_score'] ?? 0 }}%
                        </span>
                    </p>
                </div>
                <p class="text-xs text-slate-500 mb-4">
                    <span class="lang-en">Your score is below 60%. More practice will help you improve!</span>
                    <span class="lang-bm hidden">Skor anda di bawah 60%. Lebih banyak latihan akan membantu anda meningkat!</span>
                </p>
                <a href="{{ route('practice.difficulty', $weakTopic->id) }}"
                    class="inline-block bg-teal-500 text-white text-xs font-semibold px-5 py-2.5 rounded-xl hover:bg-teal-600 transition shadow-sm">
                    <span class="lang-en">Start Practice →</span>
                    <span class="lang-bm hidden">Mula Latihan →</span>
                </a>
                @else
                <div class="flex flex-col items-center justify-center py-6 text-center">
                    <div class="text-4xl mb-3">🚀</div>
                    <p class="text-sm font-bold text-slate-700 mb-1">
                        <span class="lang-en">Start your first practice session!</span>
                        <span class="lang-bm hidden">Mulakan sesi latihan pertama anda!</span>
                    </p>
                    <p class="text-xs text-slate-400 mb-4">
                        <span class="lang-en">Complete a topic to see your personalised recommendation here.</span>
                        <span class="lang-bm hidden">Lengkapkan satu topik untuk melihat cadangan peribadi anda di sini.</span>
                    </p>
                    <a href="{{ route('topics.index') }}"
                        class="inline-block bg-teal-500 text-white text-xs font-semibold px-5 py-2.5 rounded-xl hover:bg-teal-600 transition shadow-sm">
                        <span class="lang-en">Go to Topics →</span>
                        <span class="lang-bm hidden">Pergi ke Topik →</span>
                    </a>
                </div>
                @endif
            </div>

        </div>

        {{-- Topic Progress Cards --}}
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 mb-6">
            <div class="flex items-center justify-between mb-5">
                <h4 class="text-sm font-bold text-slate-700">
                    <span class="lang-en">🗂️ Topic Mastery Overview</span>
                    <span class="lang-bm hidden">🗂️ Gambaran Penguasaan Topik</span>
                </h4>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                @foreach($topicPerformance as $index => $tp)
                <div class="p-4 rounded-2xl border
                    @if($tp['avg_score'] >= 80) border-teal-100 bg-teal-50
                    @elseif($tp['avg_score'] >= 60) border-amber-100 bg-amber-50
                    @elseif($tp['avg_score'] > 0) border-rose-100 bg-rose-50
                    @else border-slate-100 bg-slate-50
                    @endif">
                    <div class="text-2xl mb-2 text-center">
                        @if($index === 0) 📐
                        @elseif($index === 1) 🔢
                        @elseif($index === 2) 🧠
                        @elseif($index === 3) 🔵
                        @else 🕸️
                        @endif
                    </div>
                    <p class="text-xs font-semibold text-slate-700 mb-2 text-center leading-tight lang-en">{{ $tp['topic']->name }}</p>
                    <p class="text-xs font-semibold text-slate-700 mb-2 text-center leading-tight lang-bm hidden">{{ $tp['topic']->name_bm }}</p>

                    {{-- Progress Bar --}}
                    <div class="w-full bg-white rounded-full h-1.5 mb-2">
                        <div class="h-1.5 rounded-full
                            @if($tp['avg_score'] >= 80) bg-teal-500
                            @elseif($tp['avg_score'] >= 60) bg-amber-500
                            @elseif($tp['avg_score'] > 0) bg-rose-500
                            @else bg-slate-300
                            @endif"
                            style="width: {{ $tp['avg_score'] }}%">
                        </div>
                    </div>

                    <p class="text-center text-xs font-bold
                        @if($tp['avg_score'] >= 80) text-teal-600
                        @elseif($tp['avg_score'] >= 60) text-amber-600
                        @elseif($tp['avg_score'] > 0) text-rose-600
                        @else text-slate-400
                        @endif">
                        {{ $tp['avg_score'] > 0 ? $tp['avg_score'].'%' : '-' }}
                    </p>

                    {{-- Level dots --}}
                    <div class="flex justify-center gap-1 mt-2">
                        @foreach(['easy', 'medium', 'hard'] as $level)
                        <span class="w-2 h-2 rounded-full
                            @if($level === 'easy') bg-teal-400
                            @elseif(in_array($level, $tp['unlocked_levels'])) bg-amber-400
                            @else bg-slate-200
                            @endif">
                        </span>
                        @endforeach
                    </div>
                    <p class="text-xs text-slate-400 mt-1 text-center">
                        <span class="lang-en">{{ $tp['sessions_count'] }} sessions</span>
                        <span class="lang-bm hidden">{{ $tp['sessions_count'] }} sesi</span>
                    </p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Recent Activity --}}
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
            <h4 class="text-sm font-bold text-slate-700 mb-4">
                <span class="lang-en">🕐 Recent Activity</span>
                <span class="lang-bm hidden">🕐 Aktiviti Terkini</span>
            </h4>
            @if($recentSessions->count() > 0)
            <div class="space-y-2">
                @foreach($recentSessions as $session)
                <div class="flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl flex items-center justify-center text-sm
                            @if($session->score >= 80) bg-teal-50
                            @elseif($session->score >= 60) bg-amber-50
                            @else bg-rose-50
                            @endif">
                            @if($session->score >= 80) ✅
                            @elseif($session->score >= 60) 👍
                            @else 💪
                            @endif
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-slate-700 lang-en">{{ $session->topic->name }}</p>
                            <p class="text-xs font-semibold text-slate-700 lang-bm hidden">{{ $session->topic->name_bm }}</p>
                            <p class="text-xs text-slate-400">
                                <span class="lang-en">{{ ucfirst($session->difficulty) }}</span>
                                <span class="lang-bm hidden">
                                    @if($session->difficulty === 'easy') Mudah
                                    @elseif($session->difficulty === 'medium') Sederhana
                                    @else Sukar
                                    @endif
                                </span>
                                · {{ $session->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold
                            @if($session->score >= 80) text-teal-600
                            @elseif($session->score >= 60) text-amber-600
                            @else text-rose-600
                            @endif">
                            {{ $session->score }}%
                        </p>
                        <p class="text-xs text-slate-400">{{ $session->correct_answers }}/{{ $session->total_questions }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-8">
                <div class="text-3xl mb-2">📝</div>
                <p class="text-xs text-slate-400">
                    <span class="lang-en">No activity yet. Start practising to see your history here.</span>
                    <span class="lang-bm hidden">Tiada aktiviti lagi. Mula berlatih untuk melihat sejarah anda di sini.</span>
                </p>
            </div>
            @endif
        </div>

    </div>

    @if($totalSessions > 0)
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        const ctx = document.getElementById('topicChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($chartLabels),
                datasets: [{
                    label: 'Average Score (%)',
                    data: @json($chartData),
                    backgroundColor: @json($chartData).map(v =>
                        v >= 80 ? 'rgba(20,184,166,0.8)' :
                        v >= 60 ? 'rgba(245,158,11,0.8)' :
                        v > 0   ? 'rgba(244,63,94,0.8)' :
                                  'rgba(203,213,225,0.8)'
                    ),
                    borderRadius: 8,
                    borderSkipped: false,
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: {
                        beginAtZero: true, max: 100,
                        ticks: { callback: v => v + '%', font: { size: 11 } },
                        grid: { color: 'rgba(0,0,0,0.04)' }
                    },
                    x: {
                        ticks: { font: { size: 10 } },
                        grid: { display: false }
                    }
                }
            }
        });
    </script>
    @endif

</x-app-layout>