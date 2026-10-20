<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Dashboard</span>
            <span class="lang-bm hidden">Papan Pemuka</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-6xl mx-auto">

        {{-- Welcome Message --}}
        <div class="mb-7">
            <h3 class="text-2xl font-bold text-gray-800">
                <span class="lang-en">Welcome back, {{ Auth::user()->name }} 👋</span>
                <span class="lang-bm hidden">Selamat kembali, {{ Auth::user()->name }} 👋</span>
            </h3>
            <p class="text-gray-400 text-sm mt-1">
                <span class="lang-en">Here's your learning summary for today.</span>
                <span class="lang-bm hidden">Berikut adalah ringkasan pembelajaran anda hari ini.</span>
            </p>
        </div>

        {{-- Stat Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">

            <div class="bg-white rounded-2xl border border-teal-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-teal-50 rounded-lg flex items-center justify-center text-base">📊</div>
                    <p class="text-xs text-gray-400 font-medium">
                        <span class="lang-en">Overall Score</span>
                        <span class="lang-bm hidden">Skor Keseluruhan</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-teal-700">{{ $overallScore }}%</p>
                <p class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">{{ $totalSessions > 0 ? 'Based on ' . $totalSessions . ' sessions' : 'No attempts yet' }}</span>
                    <span class="lang-bm hidden">{{ $totalSessions > 0 ? 'Berdasarkan ' . $totalSessions . ' sesi' : 'Belum ada percubaan' }}</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-sky-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-sky-50 rounded-lg flex items-center justify-center text-base">📝</div>
                    <p class="text-xs text-gray-400 font-medium">
                        <span class="lang-en">Questions Attempted</span>
                        <span class="lang-bm hidden">Soalan Dijawab</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-sky-700">{{ $totalQuestions }}</p>
                <p class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Total</span>
                    <span class="lang-bm hidden">Jumlah</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-violet-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center text-base">📈</div>
                    <p class="text-xs text-gray-400 font-medium">
                        <span class="lang-en">Average This Week</span>
                        <span class="lang-bm hidden">Purata Minggu Ini</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-violet-700">{{ $weeklyAvg }}%</p>
                <p class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">{{ $weeklyAvg > 0 ? 'Last 7 days' : 'No data yet' }}</span>
                    <span class="lang-bm hidden">{{ $weeklyAvg > 0 ? '7 hari lepas' : 'Tiada data lagi' }}</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-orange-100 p-5 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-orange-50 rounded-lg flex items-center justify-center text-base">⭐</div>
                    <p class="text-xs text-gray-400 font-medium">
                        <span class="lang-en">Total Points</span>
                        <span class="lang-bm hidden">Jumlah Mata</span>
                    </p>
                </div>
                <p class="text-3xl font-bold text-orange-600">{{ $totalPoints }}</p>
                <p class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Points earned</span>
                    <span class="lang-bm hidden">Mata diperoleh</span>
                </p>
            </div>

        </div>

        {{-- Topic Performance Chart + Recommendation --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm">
                <h4 class="text-sm font-bold text-gray-700 mb-5">
                    <span class="lang-en">📚 Topic Performance</span>
                    <span class="lang-bm hidden">📚 Prestasi Topik</span>
                </h4>
                @if($totalSessions > 0)
                <canvas id="topicChart" height="200"></canvas>
                @else
                @foreach($topicPerformance as $tp)
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-xs text-gray-500 w-36 truncate lang-en">{{ $tp['topic']->name }}</span>
                    <span class="text-xs text-gray-500 w-36 truncate lang-bm hidden">{{ $tp['topic']->name_bm }}</span>
                    <div class="flex-1 bg-gray-100 rounded-full h-2">
                        <div class="bg-teal-400 h-2 rounded-full" style="width: {{ $tp['avg_score'] }}%"></div>
                    </div>
                    <span class="text-xs text-gray-400 w-8 text-right">{{ $tp['avg_score'] }}%</span>
                </div>
                @endforeach
                @endif
            </div>

            {{-- Recommendation --}}
            <div class="bg-gradient-to-br from-teal-50 to-sky-50 border border-teal-100 rounded-2xl p-6 shadow-sm">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-teal-600 text-sm font-bold">
                        <span class="lang-en">🎯 Recommended for You</span>
                        <span class="lang-bm hidden">🎯 Disyorkan untuk Anda</span>
                    </span>
                </div>

                @if($weakTopic)
                <p class="text-sm font-bold text-teal-800 mb-2">
                    <span class="lang-en">Focus on {{ $weakTopic->name }}</span>
                    <span class="lang-bm hidden">Fokus pada {{ $weakTopic->name_bm }}</span>
                </p>
                <p class="text-xs text-teal-600 leading-relaxed mb-2">
                    <span class="lang-en">Your average score for this topic is below 60%. More practice will help you improve!</span>
                    <span class="lang-bm hidden">Skor purata anda untuk topik ini adalah di bawah 60%. Lebih banyak latihan akan membantu anda meningkat!</span>
                </p>
                <div class="bg-white rounded-xl p-3 mb-4 border border-teal-100">
                    <p class="text-xs text-gray-500">
                        <span class="lang-en">Current average:</span>
                        <span class="lang-bm hidden">Purata semasa:</span>
                        <span class="font-bold text-rose-600">
                            {{ collect($topicPerformance)->where('topic.id', $weakTopic->id)->first()['avg_score'] ?? 0 }}%
                        </span>
                    </p>
                </div>
                <a href="{{ route('practice.difficulty', $weakTopic->id) }}"
                    class="inline-block bg-teal-600 text-white text-xs font-semibold px-5 py-2 rounded-lg hover:bg-teal-700 transition">
                    <span class="lang-en">Start Practice →</span>
                    <span class="lang-bm hidden">Mula Latihan →</span>
                </a>
                @else
                <p class="text-sm font-bold text-teal-800 mb-2">
                    <span class="lang-en">Start your first practice session!</span>
                    <span class="lang-bm hidden">Mulakan sesi latihan pertama anda!</span>
                </p>
                <p class="text-xs text-teal-600 leading-relaxed">
                    <span class="lang-en">Complete a topic to see your personalised recommendation here.</span>
                    <span class="lang-bm hidden">Lengkapkan satu topik untuk melihat cadangan peribadi anda di sini.</span>
                </p>
                <a href="{{ route('topics.index') }}"
                    class="inline-block mt-5 bg-teal-600 text-white text-xs font-semibold px-5 py-2 rounded-lg hover:bg-teal-700 transition">
                    <span class="lang-en">Go to Topics →</span>
                    <span class="lang-bm hidden">Pergi ke Topik →</span>
                </a>
                @endif
            </div>

        </div>

        {{-- Topic Progress Cards --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm mb-6">
            <h4 class="text-sm font-bold text-gray-700 mb-5">
                <span class="lang-en">🗂️ Topic Progress</span>
                <span class="lang-bm hidden">🗂️ Kemajuan Topik</span>
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                @foreach($topicPerformance as $index => $tp)
                <div class="text-center p-4 rounded-xl border
                    @if($tp['avg_score'] >= 80) border-teal-100 bg-teal-50
                    @elseif($tp['avg_score'] >= 60) border-amber-100 bg-amber-50
                    @elseif($tp['avg_score'] > 0) border-rose-100 bg-rose-50
                    @else border-gray-100 bg-gray-50
                    @endif">
                    <div class="text-2xl mb-2">
                        @if($index === 0) 📐
                        @elseif($index === 1) 🔢
                        @elseif($index === 2) 🧠
                        @elseif($index === 3) 🔵
                        @else 🕸️
                        @endif
                    </div>
                    <p class="text-xs font-semibold text-gray-700 mb-1 leading-tight lang-en">{{ $tp['topic']->name }}</p>
                    <p class="text-xs font-semibold text-gray-700 mb-1 leading-tight lang-bm hidden">{{ $tp['topic']->name_bm }}</p>
                    <p class="text-lg font-bold
                        @if($tp['avg_score'] >= 80) text-teal-600
                        @elseif($tp['avg_score'] >= 60) text-amber-600
                        @elseif($tp['avg_score'] > 0) text-rose-600
                        @else text-gray-400
                        @endif">
                        {{ $tp['avg_score'] > 0 ? $tp['avg_score'].'%' : '-' }}
                    </p>
                    <div class="flex justify-center gap-1 mt-2">
                        @foreach(['easy', 'medium', 'hard'] as $level)
                        <span class="w-2 h-2 rounded-full
                            @if($level === 'easy') bg-teal-400
                            @elseif(in_array($level, $tp['unlocked_levels'])) bg-amber-400
                            @else bg-gray-200
                            @endif">
                        </span>
                        @endforeach
                    </div>
                    <p class="text-xs text-gray-400 mt-1">
                        <span class="lang-en">{{ $tp['sessions_count'] }} sessions</span>
                        <span class="lang-bm hidden">{{ $tp['sessions_count'] }} sesi</span>
                    </p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Recent Activity --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm">
            <h4 class="text-sm font-bold text-gray-700 mb-4">
                <span class="lang-en">🕐 Recent Activity</span>
                <span class="lang-bm hidden">🕐 Aktiviti Terkini</span>
            </h4>
            @if($recentSessions->count() > 0)
            <div class="space-y-3">
                @foreach($recentSessions as $session)
                <div class="flex items-center justify-between py-2 border-b border-gray-50 last:border-0">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center text-sm
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
                            <p class="text-xs font-semibold text-gray-700 lang-en">{{ $session->topic->name }}</p>
                            <p class="text-xs font-semibold text-gray-700 lang-bm hidden">{{ $session->topic->name_bm }}</p>
                            <p class="text-xs text-gray-400">
                                {{ ucfirst($session->difficulty) }} · {{ $session->created_at->diffForHumans() }}
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
                        <p class="text-xs text-gray-400">{{ $session->correct_answers }}/{{ $session->total_questions }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-xs text-gray-400">
                <span class="lang-en">No activity yet. Start practising to see your history here.</span>
                <span class="lang-bm hidden">Tiada aktiviti lagi. Mula berlatih untuk melihat sejarah anda di sini.</span>
            </p>
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
                        v >= 80 ? 'rgba(20,184,166,0.7)' :
                        v >= 60 ? 'rgba(245,158,11,0.7)' :
                        v > 0   ? 'rgba(244,63,94,0.7)' :
                                  'rgba(209,213,219,0.7)'
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
                        grid: { color: 'rgba(0,0,0,0.05)' }
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