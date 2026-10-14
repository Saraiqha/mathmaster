<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Topics
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-6xl mx-auto">

        <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800">Select a Topic</h3>
            <p class="text-gray-500 text-sm mt-1">Choose a topic to start practising. Complete Easy before unlocking Medium and Hard.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($topics as $topic)
            <div class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-md transition">
                
                <h4 class="text-base font-semibold text-gray-800 mb-1">{{ $topic->name }}</h4>
                <p class="text-xs text-gray-400 mb-4">{{ $topic->name_bm }}</p>
                <p class="text-xs text-gray-500 mb-5">{{ $topic->description }}</p>

                {{-- Difficulty Levels --}}
                <div class="flex gap-2">
                    @foreach($topic->difficultyLevels as $level)
                    <div class="flex-1 text-center py-2 rounded-lg text-xs font-medium
                        @if($level->level === 'easy') bg-green-50 text-green-600 border border-green-200
                        @elseif($level->level === 'medium') bg-yellow-50 text-yellow-600 border border-yellow-200
                        @else bg-red-50 text-red-600 border border-red-200
                        @endif">
                        @if($level->level === 'easy') 🟢
                        @elseif($level->level === 'medium') 🔒
                        @else 🔒
                        @endif
                        {{ ucfirst($level->level) }}
                    </div>
                    @endforeach
                </div>

                <a href="#" class="block mt-4 text-center bg-blue-600 text-white text-xs font-medium px-4 py-2 rounded-lg hover:bg-blue-700">
                    Start Practice →
                </a>

            </div>
            @endforeach
        </div>

    </div>
</x-app-layout>