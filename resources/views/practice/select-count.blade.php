<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-800 leading-tight">
            <span class="lang-en">Number of Questions — {{ $topic->name }}</span>
            <span class="lang-bm hidden">Bilangan Soalan — {{ $topic->name_bm }}</span>
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-2xl mx-auto">

        <div class="bg-white border border-teal-100 rounded-2xl p-6 mb-6 shadow-sm">
            <h3 class="text-base font-bold text-gray-800 mb-1 lang-en">{{ $topic->name }}</h3>
            <h3 class="text-base font-bold text-gray-800 mb-1 lang-bm hidden">{{ $topic->name_bm }}</h3>
            <p class="text-xs text-gray-400">
                <span class="lang-en">Difficulty:</span>
                <span class="lang-bm hidden">Tahap Kesukaran:</span>
                <span class="font-semibold
                    @if($difficulty === 'easy') text-teal-600
                    @elseif($difficulty === 'medium') text-amber-600
                    @else text-rose-600
                    @endif">
                    <span class="lang-en">{{ ucfirst($difficulty) }}</span>
                    <span class="lang-bm hidden">
                        @if($difficulty === 'easy') Mudah
                        @elseif($difficulty === 'medium') Sederhana
                        @else Sukar
                        @endif
                    </span>
                </span>
            </p>
        </div>

        <h4 class="text-sm font-semibold text-gray-600 mb-4">
            <span class="lang-en">How many questions do you want to practise?</span>
            <span class="lang-bm hidden">Berapa banyak soalan yang anda ingin latih?</span>
        </h4>

        <form method="POST" action="{{ route('practice.start', [$topic->id, $difficulty]) }}">
            @csrf

            <div class="grid grid-cols-3 gap-3 mb-6">
                @foreach([5, 10, 15] as $count)
                <label class="cursor-pointer">
                    <input type="radio" name="count" value="{{ $count }}" class="hidden peer"
                        {{ $count === 5 ? 'checked' : '' }}>
                    <div class="bg-white border-2 border-gray-200 rounded-2xl p-5 text-center
                        peer-checked:border-teal-500 peer-checked:bg-teal-50 transition shadow-sm">
                        <div class="text-2xl font-bold text-gray-800">{{ $count }}</div>
                        <div class="text-xs text-gray-400 mt-1">
                            <span class="lang-en">questions</span>
                            <span class="lang-bm hidden">soalan</span>
                        </div>
                    </div>
                </label>
                @endforeach
            </div>

            <div class="bg-teal-50 border border-teal-100 rounded-2xl p-4 mb-6">
                <p class="text-xs text-teal-700">
                    <span class="lang-en">💡 Questions are randomly selected from our bank with a balanced mix of MCQ, True/False, Numerical and Multiple Response types.</span>
                    <span class="lang-bm hidden">💡 Soalan dipilih secara rawak daripada bank soalan kami dengan gabungan seimbang jenis MCQ, Benar/Palsu, Berangka dan Jawapan Berbilang.</span>
                </p>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('practice.difficulty', $topic->id) }}"
                    class="px-5 py-2.5 text-sm font-medium bg-gray-100 text-gray-600 rounded-xl hover:bg-gray-200 transition">
                    <span class="lang-en">← Back</span>
                    <span class="lang-bm hidden">← Kembali</span>
                </a>
                <button type="submit"
                    class="px-6 py-2.5 text-sm font-semibold bg-teal-600 text-white rounded-xl hover:bg-teal-700 transition">
                    <span class="lang-en">Start Practice →</span>
                    <span class="lang-bm hidden">Mula Latihan →</span>
                </button>
            </div>

        </form>

    </div>
</x-app-layout>