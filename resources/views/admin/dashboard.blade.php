<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">Home → Admin Panel</p>
            <h2 class="font-bold text-lg text-slate-800">Admin Dashboard</h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-5xl mx-auto">

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 text-center">
                <p class="text-xs text-slate-400 mb-1">Students</p>
                <p class="text-2xl font-bold text-slate-800">{{ $stats['students'] }}</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 text-center">
                <p class="text-xs text-slate-400 mb-1">Sessions Completed</p>
                <p class="text-2xl font-bold text-teal-600">{{ $stats['sessions'] }}</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 text-center">
                <p class="text-xs text-slate-400 mb-1">Questions</p>
                <p class="text-2xl font-bold text-sky-600">{{ $stats['questions'] }}</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 text-center">
                <p class="text-xs text-slate-400 mb-1">Average Score</p>
                <p class="text-2xl font-bold text-amber-600">{{ $stats['average'] }}%</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-6">
            <h4 class="text-sm font-bold text-slate-700 mb-4">📚 Question Bank</h4>
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead>
                        <tr class="text-left text-slate-400 border-b border-slate-100">
                            <th class="py-2 pr-3">Topic</th>
                            <th class="py-2 pr-3 text-center">Easy</th>
                            <th class="py-2 pr-3 text-center">Medium</th>
                            <th class="py-2 pr-3 text-center">Hard</th>
                            <th class="py-2 text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($topics as $t)
                        <tr class="border-b border-slate-50">
                            <td class="py-2 pr-3 text-slate-700 font-semibold">{{ $t->name }}</td>
                            <td class="py-2 pr-3 text-center text-teal-600">{{ $bank[$t->id]['easy'] }}</td>
                            <td class="py-2 pr-3 text-center text-amber-600">{{ $bank[$t->id]['medium'] }}</td>
                            <td class="py-2 pr-3 text-center text-rose-600">{{ $bank[$t->id]['hard'] }}</td>
                            <td class="py-2 text-center font-bold text-slate-800">{{ array_sum($bank[$t->id]) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <h4 class="text-sm font-bold text-slate-700 mb-1">⚠️ Most Missed Questions</h4>
                <p class="text-xs text-slate-400 mb-4">Lowest correct rate, with at least 3 attempts. Review these for unclear wording or wrong answers.</p>
                @forelse($hard as $h)
                    @php $q = $hardQuestions[$h->question_id] ?? null; @endphp
                    @if($q)
                    <div class="p-3 bg-slate-50 rounded-xl mb-2">
                        <p class="text-xs text-slate-700 mb-1">{{ \Illuminate\Support\Str::limit($q->question_text, 90) }}</p>
                        <p class="text-xs text-rose-600 font-semibold">
                            {{ round(($h->correct / $h->attempts) * 100) }}% correct
                            <span class="text-slate-400 font-normal">· {{ $h->attempts }} attempts · {{ ucfirst($q->difficulty) }}</span>
                        </p>
                    </div>
                    @endif
                @empty
                    <p class="text-sm text-slate-400">Not enough answers yet.</p>
                @endforelse
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <h4 class="text-sm font-bold text-slate-700 mb-4">👤 Newest Students</h4>
                @forelse($recentStudents as $u)
                <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl mb-2">
                    <div class="w-8 h-8 rounded-full bg-teal-500 text-white flex items-center justify-center text-xs font-bold">
                        {{ strtoupper(mb_substr($u->name, 0, 1)) }}
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-slate-700">{{ $u->name }}</p>
                        <p class="text-xs text-slate-400">{{ $u->email }} · {{ $u->created_at->format('d M Y') }}</p>
                    </div>
                </div>
                @empty
                    <p class="text-sm text-slate-400">No students yet.</p>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>