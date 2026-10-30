<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Achievements</span>
                <span class="lang-bm hidden">Utama → Pencapaian</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">Achievements</span>
                <span class="lang-bm hidden">Pencapaian</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-5xl mx-auto">

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-6">
            <div class="flex items-center justify-between mb-3">
                <p class="text-sm font-bold text-slate-700">
                    <span class="lang-en">Badges earned</span>
                    <span class="lang-bm hidden">Lencana diperoleh</span>
                </p>
                <p class="text-sm font-bold text-teal-600">{{ $earned->count() }} / {{ count($badges) }}</p>
            </div>
            <div class="w-full bg-slate-100 rounded-full h-2">
                <div class="bg-teal-500 h-2 rounded-full" style="width: {{ count($badges) ? ($earned->count() / count($badges)) * 100 : 0 }}%"></div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($badges as $key => $b)
            @php $got = $earned->has($key); @endphp
            <div class="rounded-2xl border p-5 text-center shadow-sm
                {{ $got ? 'bg-white border-amber-100' : 'bg-slate-50 border-slate-100' }}">
                <div class="text-4xl mb-2 {{ $got ? '' : 'grayscale opacity-40' }}">{{ $b[0] }}</div>
                <p class="text-sm font-bold {{ $got ? 'text-slate-800' : 'text-slate-400' }}">
                    <span class="lang-en">{{ $b[1] }}</span>
                    <span class="lang-bm hidden">{{ $b[2] }}</span>
                </p>
                <p class="text-xs mt-1 {{ $got ? 'text-slate-500' : 'text-slate-400' }}">
                    <span class="lang-en">{{ $b[3] }}</span>
                    <span class="lang-bm hidden">{{ $b[4] }}</span>
                </p>
                @if($got)
                    <p class="text-xs text-amber-600 font-semibold mt-2">
                        <span class="lang-en">Earned {{ $earned[$key]->earned_at->format('d M Y') }}</span>
                        <span class="lang-bm hidden">Diperoleh {{ $earned[$key]->earned_at->format('d M Y') }}</span>
                    </p>
                @else
                    <p class="text-xs text-slate-400 mt-2">🔒</p>
                @endif
            </div>
            @endforeach
        </div>

    </div>
</x-app-layout>