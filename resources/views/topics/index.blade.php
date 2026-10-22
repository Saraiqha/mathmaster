<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics</span>
                <span class="lang-bm hidden">Utama → Topik</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Topics</span>
                <span class="lang-bm hidden">Topik</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-7xl mx-auto">

        <div class="mb-6">
            <h3 class="text-xl font-bold text-slate-800">
                <span class="lang-en">Explore Topics</span>
                <span class="lang-bm hidden">Jelajahi Topik</span>
            </h3>
            <p class="text-slate-400 text-sm mt-1">
                <span class="lang-en">Choose a topic to start learning or practising. Complete Easy to unlock Medium and Hard.</span>
                <span class="lang-bm hidden">Pilih topik untuk mula belajar atau berlatih. Selesaikan Mudah untuk membuka kunci Sederhana dan Sukar.</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($topics as $topic)
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition overflow-hidden">

                {{-- Card Header --}}
                 <div class="px-5 pt-5 pb-4 flex items-start gap-3 border-b border-slate-50">
                    <div class="w-11 h-11 bg-teal-50 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                        @if($loop->index === 0) 📐
                        @elseif($loop->index === 1) 🔢
                        @elseif($loop->index === 2) 🧠
                        @elseif($loop->index === 3) 🔵
                        @else 🕸️
                        @endif
                    </div>
                    <div class="min-w-0">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug lang-en">{{ $topic->name }}</h4>
                        <h4 class="text-sm font-bold text-slate-800 leading-snug lang-bm hidden">{{ $topic->name_bm }}</h4>
                        <p class="text-xs text-slate-400 mt-0.5 lang-en">{{ $topic->name_bm }}</p>
                        <p class="text-xs text-slate-400 mt-0.5 lang-bm hidden">{{ $topic->name }}</p>
                    </div>
                </div>

                {{-- Card Body --}}
                <div class="p-5">

                    <p class="text-xs text-slate-500 mb-4 leading-relaxed lang-en">{{ $topic->description }}</p>
                    <p class="text-xs text-slate-500 mb-4 leading-relaxed lang-bm hidden">{{ $topic->description_bm }}</p>

                    {{-- Difficulty Levels --}}
                    <div class="flex gap-2 mb-4">
                        @foreach($topic->difficultyLevels as $level)
                        @php
                            $topicUnlocked = $unlockedLevels->get($topic->id, []);
                            $isUnlocked = $level->level === 'easy' || in_array($level->level, $topicUnlocked);
                            if (!$isUnlocked) {
                                $bgClass = 'bg-slate-50 text-slate-300 border border-slate-200';
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
                            $levelLabels = [
                                'easy'   => ['en' => 'Easy',   'bm' => 'Mudah'],
                                'medium' => ['en' => 'Medium', 'bm' => 'Sederhana'],
                                'hard'   => ['en' => 'Hard',   'bm' => 'Sukar'],
                            ];
                        @endphp
                        <div class="flex-1 text-center py-1.5 rounded-lg text-xs font-medium {{ $bgClass }}">
                            {{ $icon }}
                            <span class="lang-en">{{ $levelLabels[$level->level]['en'] }}</span>
                            <span class="lang-bm hidden">{{ $levelLabels[$level->level]['bm'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    {{-- Action Buttons --}}
                    <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route('topics.notes', $topic->id) }}"
                        class="text-center bg-slate-50 text-slate-600 border border-slate-200 text-xs font-semibold py-2.5 rounded-xl hover:bg-slate-100 transition">
                        📖<br>
                        <span class="lang-en">Learn</span>
                        <span class="lang-bm hidden">Belajar</span>
                    </a>
                    <a href="{{ route('topics.revision', $topic->id) }}"
                        class="text-center bg-teal-500 text-white text-xs font-semibold py-2.5 rounded-xl hover:bg-teal-600 transition shadow-sm">
                        ✏️<br>
                        <span class="lang-en">Practise</span>
                        <span class="lang-bm hidden">Latihan</span>
                    </a>
                </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</x-app-layout>