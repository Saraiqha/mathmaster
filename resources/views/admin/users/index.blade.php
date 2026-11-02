<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">Home → Admin Panel → Students</p>
            <h2 class="font-bold text-lg text-slate-800">Student Management</h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-5xl mx-auto">

        @if(session('success'))
            <div class="mb-4 p-3 bg-teal-50 border border-teal-100 rounded-xl text-sm text-teal-700">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="mb-4 p-3 bg-rose-50 border border-rose-100 rounded-xl text-sm text-rose-700">{{ session('error') }}</div>
        @endif

        <form method="GET" class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 mb-5 flex gap-3">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or email..."
                class="flex-1 border border-slate-200 rounded-xl px-3 py-2 text-sm text-slate-700 bg-slate-50">
            <button type="submit" class="px-5 bg-teal-500 text-white text-sm font-semibold rounded-xl hover:bg-teal-600 transition">Search</button>
            <a href="{{ route('admin.users.index') }}" class="px-4 py-2 text-sm text-slate-500 border border-slate-200 rounded-xl hover:bg-slate-50 transition">Reset</a>
        </form>

        <p class="text-xs text-slate-400 mb-3">{{ $users->total() }} students</p>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4">
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead>
                        <tr class="text-left text-slate-400 border-b border-slate-100">
                            <th class="py-2 pr-3">Name</th>
                            <th class="py-2 pr-3">Email</th>
                            <th class="py-2 pr-3 text-center">Sessions</th>
                            <th class="py-2 pr-3 text-center">Average</th>
                            <th class="py-2 pr-3">Joined</th>
                            <th class="py-2 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $u)
                        @php $st = $stats[$u->id] ?? null; @endphp
                        <tr class="border-b border-slate-50">
                            <td class="py-2 pr-3 text-slate-700 font-semibold">{{ $u->name }}</td>
                            <td class="py-2 pr-3 text-slate-500">{{ $u->email }}</td>
                            <td class="py-2 pr-3 text-center">{{ $st->sessions ?? 0 }}</td>
                            <td class="py-2 pr-3 text-center font-semibold text-teal-600">{{ $st ? round($st->average) . '%' : '-' }}</td>
                            <td class="py-2 pr-3 text-slate-400">{{ $u->created_at->format('d M Y') }}</td>
                            <td class="py-2 text-right whitespace-nowrap">
                                <a href="{{ route('admin.users.show', $u) }}" class="text-teal-600 font-semibold hover:underline mr-3">View</a>
                                <form method="POST" action="{{ route('admin.users.destroy', $u) }}" class="inline"
                                    onsubmit="return confirm('Delete {{ $u->name }} ({{ $u->email }})? All their progress, answers and badges will be deleted too. This cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-600 font-semibold hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6" class="py-6 text-center text-slate-400">No students found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $users->links() }}</div>
        </div>
    </div>
</x-app-layout>