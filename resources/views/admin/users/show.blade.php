<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">Home → Admin Panel → Students → {{ $user->name }}</p>
            <h2 class="font-bold text-lg text-slate-800">Student Progress</h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-4xl mx-auto space-y-5">

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-teal-500 text-white flex items-center justify-center text-xl font-bold">
                {{ strtoupper(mb_substr($user->name, 0, 1)) }}
            </div>
            <div class="flex-1">
                <p class="text-base font-bold text-slate-800">{{ $user->name }}</p>
                <p class="text-sm text-slate-400">{{ $user->email }}</p>
                <p class="text-xs text-slate-400 mt-0.5">Joined {{ $user->created_at->format('d M Y') }}</p>
            </div>
            <a href="{{ route('admin.users.index') }}" class="px-4 py-2 text-sm text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition">← Back</a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 text-center">
                <p class="text-xs text-slate-400 mb-1">Sessions</p>
                <p class="text-xl font-bold text-slate-800">{{ $summary['sessions'] }}</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 text-center">
                <p class="text-xs text-slate-400 mb-1">Average</p>
                <p class="text-xl font-bold text-teal-600">{{ $summary['average'] }}%</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 text-center">
                <p class="text-xs text-slate-400 mb-1">Best Score</p>
                <p class="text-xl font-bold text-amber-600">{{ $summary['best'] }}%</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 text-center">
                <p class="text-xs text-slate-400 mb-1">Badges</p>
                <p class="text-xl font-bold text-violet-600">{{ $summary['badges'] }}</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <h4 class="text-sm font-bold text-slate-700 mb-4">Average by Topic</h4>
            @forelse($byTopic as $t)
            <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl mb-2">
                <p class="text-xs font-semibold text-slate-700">{{ $t['name'] }}</p>
                <p class="text-xs text-slate-500">{{ $t['sessions'] }} sessions ·
                    <span class="font-bold {{ $t['average'] >= 80 ? 'text-teal-600' : ($t['average'] >= 60 ? 'text-amber-600' : 'text-rose-600') }}">{{ $t['average'] }}%</span>
                </p>
            </div>
            @empty
            <p class="text-sm text-slate-400">No completed sessions yet.</p>
            @endforelse
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <h4 class="text-sm font-bold text-slate-700 mb-4">Recent Sessions</h4>
            @if($recent->count())
            <table class="w-full text-xs">
                <thead>
                    <tr class="text-left text-slate-400 border-b border-slate-100">
                        <th class="py-2 pr-3">Date</th>
                        <th class="py-2 pr-3">Topic</th>
                        <th class="py-2 pr-3">Level</th>
                        <th class="py-2 pr-3">Correct</th>
                        <th class="py-2">Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recent as $s)
                    <tr class="border-b border-slate-50">
                        <td class="py-2 pr-3 text-slate-500">{{ $s->created_at->format('d M Y') }}</td>
                        <td class="py-2 pr-3 text-slate-700">{{ $s->topic->name }}</td>
                        <td class="py-2 pr-3 capitalize text-slate-600">{{ $s->difficulty }}</td>
                        <td class="py-2 pr-3 text-slate-600">{{ $s->correct_answers }}/{{ $s->total_questions }}</td>
                        <td class="py-2 font-bold {{ $s->score >= 80 ? 'text-teal-600' : ($s->score >= 60 ? 'text-amber-600' : 'text-rose-600') }}">{{ round($s->score) }}%</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="text-sm text-slate-400">No completed sessions yet.</p>
            @endif
        </div>

        <div class="bg-rose-50 border border-rose-100 rounded-2xl p-6">
            <h4 class="text-sm font-bold text-rose-700 mb-1">Delete this account</h4>
            <p class="text-xs text-slate-500 mb-3">This permanently deletes the account, all practice sessions, answers and badges.</p>
            <form method="POST" action="{{ route('admin.users.destroy', $user) }}"
                onsubmit="return confirm('Delete {{ $user->name }}? This cannot be undone.');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-5 py-2 text-sm font-semibold bg-rose-500 text-white rounded-xl hover:bg-rose-600 transition">Delete Account</button>
            </form>
        </div>

    </div>
</x-app-layout>