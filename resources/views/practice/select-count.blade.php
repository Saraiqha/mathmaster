<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Topics → {{ $topic->name }} → Select Difficulty → Number of Questions</span>
                <span class="lang-bm hidden">Utama → Topik → {{ $topic->name_bm }} → Pilih Kesukaran → Bilangan Soalan</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Number of Questions</span>
                <span class="lang-bm hidden">Bilangan Soalan</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-2xl mx-auto">

        {{-- Topic Info --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-bold text-slate-800 lang-en">{{ $topic->name }}</h3>
                    <h3 class="text-sm font-bold text-slate-800 lang-bm hidden">{{ $topic->name_bm }}</h3>
                </div>
                <span class="text-xs font-semibold px-3 py-1.5 rounded-full
                    @if($difficulty === 'easy') bg-teal-50 text-teal-600
                    @elseif($difficulty === 'medium') bg-amber-50 text-amber-600
                    @else bg-rose-50 text-rose-600
                    @endif">
                    @if($difficulty === 'easy') 🟢
                    @elseif($difficulty === 'medium') 🟡
                    @else 🔴
                    @endif
                    <span class="lang-en">{{ ucfirst($difficulty) }}</span>
                    <span class="lang-bm hidden">
                        @if($difficulty === 'easy') Mudah
                        @elseif($difficulty === 'medium') Sederhana
                        @else Sukar
                        @endif
                    </span>
                </span>
            </div>
        </div>

        <h4 class="text-sm font-semibold text-slate-600 mb-4">
            <span class="lang-en">How many questions do you want to practise?</span>
            <span class="lang-bm hidden">Berapa banyak soalan yang anda ingin latih?</span>
        </h4>

        <form method="POST" action="{{ route('practice.start', [$topic->id, $difficulty]) }}">
            @csrf

            <div class="grid grid-cols-3 gap-4 mb-6">
                @foreach([5, 10, 15] as $count)
                <label class="cursor-pointer">
                    <input type="radio" name="count" value="{{ $count }}" class="hidden peer"
                        {{ $count === 5 ? 'checked' : '' }}>
                    <div class="bg-white border-2 border-slate-100 rounded-2xl p-6 text-center shadow-sm
                        peer-checked:border-teal-500 peer-checked:bg-teal-50 transition hover:border-teal-300">
                        <div class="text-3xl font-bold text-slate-800 mb-1">{{ $count }}</div>
                        <div class="text-xs text-slate-400">
                            <span class="lang-en">questions</span>
                            <span class="lang-bm hidden">soalan</span>
                        </div>
                    </div>
                </label>
                @endforeach
            </div>

            <div class="bg-sky-50 border border-sky-100 rounded-2xl p-4 mb-6">
                <p class="text-xs text-sky-700">
                    <span class="lang-en">💡 Questions are randomly selected with a balanced mix of MCQ, True/False, Numerical and Multiple Response types.</span>
                    <span class="lang-bm hidden">💡 Soalan dipilih secara rawak dengan gabungan seimbang jenis MCQ, Benar/Palsu, Berangka dan Jawapan Berbilang.</span>
                </p>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('practice.difficulty', $topic->id) }}"
                    class="px-5 py-2.5 text-sm font-medium bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                    <span class="lang-en">← Back</span>
                    <span class="lang-bm hidden">← Kembali</span>
                </a>
                <button type="submit"
                    class="px-8 py-2.5 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">
                    <span class="lang-en">Start Practice →</span>
                    <span class="lang-bm hidden">Mula Latihan →</span>
                </button>
            </div>

        </form>

    </div>
</x-app-layout>