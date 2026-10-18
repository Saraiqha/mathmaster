<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            Topics
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-6xl mx-auto">

        <div class="mb-7">
            <h3 class="text-2xl font-bold text-gray-800">Select a Topic</h3>
            <p class="text-gray-400 text-sm mt-1">Choose a topic to start practising. Complete Easy before unlocking Medium and Hard.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($topics as $topic)
            <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition">

                {{-- Topic Icon + Name --}}
                <div class="flex items-start gap-3 mb-4">
                    <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
                        @if($loop->index === 0) 📐
                        @elseif($loop->index === 1) 🔢
                        @elseif($loop->index === 2) 🧠
                        @elseif($loop->index === 3) 🔵
                        @else 🕸️
                        @endif
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-gray-800 leading-snug">{{ $topic->name }}</h4>
                        <p class="text-xs text-gray-400 mt-0.5">{{ $topic->name_bm }}</p>
                    </div>
                </div>

                <p class="text-xs text-gray-500 mb-5 leading-relaxed">{{ $topic->description }}</p>

                {{-- Difficulty Levels --}}
                <div class="flex gap-2 mb-5">
                    @foreach($topic->difficultyLevels as $level)
                    @php
                        $topicUnlocked = $unlockedLevels->get($topic->id, []);
                        $isUnlocked = $level->level === 'easy' || in_array($level->level, $topicUnlocked);

                        if (!$isUnlocked) {
                            $bgClass = 'bg-gray-50 text-gray-300 border border-gray-200';
                            $icon = '🔒';
                        } elseif ($level->level === 'easy') {
                            $bgClass = 'bg-teal-50 text-teal-600 border border-teal-200';
                            $icon = '🟢';
                        } elseif ($level->level === 'medium') {
                            $bgClass = 'bg-amber-50 text-amber-600 border border-amber-200';
                            $icon = '🟡';
                        } else {
                            $bgClass = 'bg-rose-50 text-rose-600 border border-rose-200';
                            $icon = '🔴';
                        }
                    @endphp
                    <div class="flex-1 text-center py-2 rounded-lg text-xs font-medium {{ $bgClass }}">
                        {{ $icon }} {{ ucfirst($level->level) }}
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('topics.revision', $topic->id) }}"
                    class="block text-center bg-teal-600 text-white text-xs font-semibold px-4 py-2.5 rounded-xl hover:bg-teal-700 transition">
                    Start Practice →
                </a>

            </div>
            @endforeach
        </div>

    </div>
</x-app-layout>