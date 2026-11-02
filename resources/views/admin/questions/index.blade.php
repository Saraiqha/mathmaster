<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">Home → Admin Panel → Questions</p>
            <h2 class="font-bold text-lg text-slate-800">Question Management</h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-6xl mx-auto">

        @if(session('success'))
            <div class="mb-4 p-3 bg-teal-50 border border-teal-100 rounded-xl text-sm text-teal-700">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="mb-4 p-3 bg-rose-50 border border-rose-100 rounded-xl text-sm text-rose-700">{{ session('error') }}</div>
        @endif

        <form method="GET" class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 mb-5">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                <select name="topic_id" class="border border-slate-200 rounded-xl px-3 py-2 text-sm text-slate-700 bg-slate-50">
                    <option value="">All topics</option>
                    @foreach($topics as $t)
                        <option value="{{ $t->id }}" @selected(request('topic_id') == $t->id)>{{ $t->name }}</option>
                    @endforeach
                </select>
                <select name="difficulty" class="border border-slate-200 rounded-xl px-3 py-2 text-sm text-slate-700 bg-slate-50">
                    <option value="">All levels</option>
                    @foreach(['easy' => 'Easy', 'medium' => 'Medium', 'hard' => 'Hard'] as $v => $l)
                        <option value="{{ $v }}" @selected(request('difficulty') == $v)>{{ $l }}</option>
                    @endforeach
                </select>
                <select name="type" class="border border-slate-200 rounded-xl px-3 py-2 text-sm text-slate-700 bg-slate-50">
                    <option value="">All types</option>
                    @foreach(['mcq' => 'MCQ', 'true_false' => 'True / False', 'numerical' => 'Numerical', 'multiple_response' => 'Multiple Response'] as $v => $l)
                        <option value="{{ $v }}" @selected(request('type') == $v)>{{ $l }}</option>
                    @endforeach
                </select>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search question text..."
                    class="border border-slate-200 rounded-xl px-3 py-2 text-sm text-slate-700 bg-slate-50 md:col-span-1">
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-teal-500 text-white text-sm font-semibold rounded-xl hover:bg-teal-600 transition">Filter</button>
                    <a href="{{ route('admin.questions.index') }}" class="px-3 py-2 text-sm text-slate-500 border border-slate-200 rounded-xl hover:bg-slate-50 transition">Reset</a>
                </div>
            </div>
        </form>

        <div class="flex items-center justify-between mb-3">
            <p class="text-xs text-slate-400">{{ $questions->total() }} questions found</p>
            <a href="{{ route('admin.questions.create') }}"
                class="px-4 py-2 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">+ Add Question</a>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4">
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead>
                        <tr class="text-left text-slate-400 border-b border-slate-100">
                            <th class="py-2 pr-3">ID</th>
                            <th class="py-2 pr-3">Topic</th>
                            <th class="py-2 pr-3">Level</th>
                            <th class="py-2 pr-3">Type</th>
                            <th class="py-2 pr-3">Question</th>
                            <th class="py-2 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($questions as $q)
                        <tr class="border-b border-slate-50 align-top">
                            <td class="py-2 pr-3 text-slate-400">{{ $q->id }}</td>
                            <td class="py-2 pr-3 text-slate-600">{{ \Illuminate\Support\Str::limit($q->topic->name, 22) }}</td>
                            <td class="py-2 pr-3">
                                <span class="px-2 py-0.5 rounded-full font-semibold
                                    {{ $q->difficulty === 'easy' ? 'bg-teal-50 text-teal-600' : ($q->difficulty === 'medium' ? 'bg-amber-50 text-amber-600' : 'bg-rose-50 text-rose-600') }}">
                                    {{ ucfirst($q->difficulty) }}
                                </span>
                            </td>
                            <td class="py-2 pr-3 text-slate-500">{{ str_replace('_', ' ', $q->type) }}</td>
                            <td class="py-2 pr-3 text-slate-700">{{ \Illuminate\Support\Str::limit($q->question_text, 90) }}</td>
                            <td class="py-2 text-right whitespace-nowrap">
                                <a href="{{ route('admin.questions.edit', $q) }}" class="text-teal-600 font-semibold hover:underline mr-3">Edit</a>
                                <form method="POST" action="{{ route('admin.questions.destroy', $q) }}" class="inline"
                                    onsubmit="return confirm('Delete this question? This cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-600 font-semibold hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6" class="py-6 text-center text-slate-400">No questions match these filters.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $questions->links() }}</div>
        </div>
    </div>
</x-app-layout>