<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → My Progress</span>
                <span class="lang-bm hidden">Utama → Kemajuan Saya</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">My Progress</span>
                <span class="lang-bm hidden">Kemajuan Saya</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-5xl mx-auto">

        {{-- Summary --}}
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 text-center">
                <p class="text-xs text-slate-400 mb-1">
                    <span class="lang-en">Sessions Completed</span>
                    <span class="lang-bm hidden">Sesi Selesai</span>
                </p>
                <p class="text-2xl font-bold text-slate-800">{{ $totalSessions }}</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 text-center">
                <p class="text-xs text-slate-400 mb-1">
                    <span class="lang-en">Average Score</span>
                    <span class="lang-bm hidden">Skor Purata</span>
                </p>
                <p class="text-2xl font-bold text-teal-600">{{ $averageScore }}%</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 text-center">
                <p class="text-xs text-slate-400 mb-1">
                    <span class="lang-en">Best Score</span>
                    <span class="lang-bm hidden">Skor Terbaik</span>
                </p>
                <p class="text-2xl font-bold text-amber-600">{{ $bestScore }}%</p>
            </div>
        </div>

        {{-- Score chart --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-6">
            <h4 class="text-sm font-bold text-slate-700 mb-4">
                <span class="lang-en">📈 Score Over Time (last 20 sessions)</span>
                <span class="lang-bm hidden">📈 Skor Mengikut Masa (20 sesi terakhir)</span>
            </h4>
            @if(count($chartScores) > 0)
                <div style="height: 240px;">
                    <canvas id="scoreChart"></canvas>
                </div>
            @else
                <p class="text-sm text-slate-400 text-center py-8">
                    <span class="lang-en">Complete a practice session to see your chart.</span>
                    <span class="lang-bm hidden">Selesaikan satu sesi latihan untuk melihat carta anda.</span>
                </p>
            @endif
        </div>

        {{-- Topic x level --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-6">
            <h4 class="text-sm font-bold text-slate-700 mb-4">
                <span class="lang-en">🎯 Progress by Topic and Level</span>
                <span class="lang-bm hidden">🎯 Kemajuan Mengikut Topik dan Tahap</span>
            </h4>
            <div class="space-y-4">
                @foreach($topics as $topic)
                <div class="p-4 bg-slate-50 rounded-xl">
                    <p class="text-sm font-bold text-slate-800 mb-3">
                        <span class="lang-en">{{ $topic->name }}</span>
                        <span class="lang-bm hidden">{{ $topic->name_bm }}</span>
                    </p>
                    <div class="grid grid-cols-3 gap-3">
                        @foreach(['easy' => ['Easy', 'Mudah', 'teal'], 'medium' => ['Medium', 'Sederhana', 'amber'], 'hard' => ['Hard', 'Sukar', 'rose']] as $level => $info)
                        @php $cell = $matrix[$topic->id][$level]; @endphp
                        <div class="p-3 rounded-xl border text-center
                            {{ $cell['unlocked'] ? 'bg-white border-'.$info[2].'-100' : 'bg-slate-100 border-slate-200' }}">
                            <p class="text-xs font-bold {{ $cell['unlocked'] ? 'text-'.$info[2].'-600' : 'text-slate-400' }}">
                                <span class="lang-en">{{ $info[0] }}</span>
                                <span class="lang-bm hidden">{{ $info[1] }}</span>
                            </p>
                            @if(!$cell['unlocked'])
                                <p class="text-xs text-slate-400 mt-1">🔒</p>
                            @elseif($cell['attempts'] === 0)
                                <p class="text-xs text-slate-400 mt-1">
                                    <span class="lang-en">Not tried yet</span>
                                    <span class="lang-bm hidden">Belum dicuba</span>
                                </p>
                            @else
                                <p class="text-lg font-bold text-slate-800 mt-1">{{ $cell['best'] }}%</p>
                                <p class="text-xs text-slate-400">
                                    <span class="lang-en">best · {{ $cell['attempts'] }} tries</span>
                                    <span class="lang-bm hidden">terbaik · {{ $cell['attempts'] }} cubaan</span>
                                </p>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- History --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <h4 class="text-sm font-bold text-slate-700 mb-4">
                <span class="lang-en">🕘 Recent Sessions</span>
                <span class="lang-bm hidden">🕘 Sesi Terkini</span>
            </h4>
            @if($history->count())
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead>
                        <tr class="text-left text-slate-400 border-b border-slate-100">
                            <th class="py-2 pr-3"><span class="lang-en">Date</span><span class="lang-bm hidden">Tarikh</span></th>
                            <th class="py-2 pr-3"><span class="lang-en">Topic</span><span class="lang-bm hidden">Topik</span></th>
                            <th class="py-2 pr-3"><span class="lang-en">Level</span><span class="lang-bm hidden">Tahap</span></th>
                            <th class="py-2 pr-3"><span class="lang-en">Correct</span><span class="lang-bm hidden">Betul</span></th>
                            <th class="py-2"><span class="lang-en">Score</span><span class="lang-bm hidden">Skor</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($history as $s)
                        <tr class="border-b border-slate-50">
                            <td class="py-2 pr-3 text-slate-500">{{ $s->created_at->format('d M Y') }}</td>
                            <td class="py-2 pr-3 text-slate-700">
                                <span class="lang-en">{{ $s->topic->name }}</span>
                                <span class="lang-bm hidden">{{ $s->topic->name_bm }}</span>
                            </td>
                            <td class="py-2 pr-3 capitalize text-slate-600">{{ $s->difficulty }}</td>
                            <td class="py-2 pr-3 text-slate-600">{{ $s->correct_answers }}/{{ $s->total_questions }}</td>
                            <td class="py-2 font-bold {{ $s->score >= 80 ? 'text-teal-600' : ($s->score >= 60 ? 'text-amber-600' : 'text-rose-600') }}">
                                {{ round($s->score) }}%
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <p class="text-sm text-slate-400 text-center py-6">
                    <span class="lang-en">No completed sessions yet.</span>
                    <span class="lang-bm hidden">Belum ada sesi yang selesai.</span>
                </p>
            @endif
        </div>

    </div>

    @if(count($chartScores) > 0)
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script>
        new Chart(document.getElementById('scoreChart'), {
            type: 'line',
            data: {
                labels: @json($chartLabels),
                datasets: [{
                    data: @json($chartScores),
                    borderColor: '#0d9488',
                    backgroundColor: 'rgba(13,148,136,0.1)',
                    fill: true,
                    tension: 0.3,
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { y: { min: 0, max: 100, ticks: { callback: v => v + '%' } } }
            }
        });
    </script>
    @endif
</x-app-layout>