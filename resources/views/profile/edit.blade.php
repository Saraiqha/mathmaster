<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs text-slate-400 mb-0.5">
                <span class="lang-en">Home → Profile</span>
                <span class="lang-bm hidden">Utama → Profil</span>
            </p>
            <h2 class="font-bold text-lg text-slate-800">
                <span class="lang-en">My Profile</span>
                <span class="lang-bm hidden">Profil Saya</span>
            </h2>
        </div>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto space-y-5">

        {{-- Header card --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <div class="flex items-center gap-4 mb-5">
                <div class="w-16 h-16 rounded-full bg-teal-500 text-white flex items-center justify-center text-2xl font-bold flex-shrink-0">
                    {{ strtoupper(mb_substr($user->name, 0, 1)) }}
                </div>
                <div>
                    <p class="text-lg font-bold text-slate-800">{{ $user->name }}</p>
                    <p class="text-sm text-slate-400">{{ $user->email }}</p>
                    <p class="text-xs text-slate-400 mt-0.5">
                        <span class="lang-en">Member since {{ $user->created_at->format('d M Y') }}</span>
                        <span class="lang-bm hidden">Ahli sejak {{ $user->created_at->format('d M Y') }}</span>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-3">
                <div class="bg-slate-50 rounded-xl p-3 text-center">
                    <p class="text-xl font-bold text-slate-800">{{ $stats['sessions'] }}</p>
                    <p class="text-xs text-slate-400">
                        <span class="lang-en">Sessions</span>
                        <span class="lang-bm hidden">Sesi</span>
                    </p>
                </div>
                <div class="bg-slate-50 rounded-xl p-3 text-center">
                    <p class="text-xl font-bold text-teal-600">{{ $stats['average'] }}%</p>
                    <p class="text-xs text-slate-400">
                        <span class="lang-en">Average</span>
                        <span class="lang-bm hidden">Purata</span>
                    </p>
                </div>
                <div class="bg-slate-50 rounded-xl p-3 text-center">
                    <p class="text-xl font-bold text-amber-600">{{ $stats['badges'] }}</p>
                    <p class="text-xs text-slate-400">
                        <span class="lang-en">Badges</span>
                        <span class="lang-bm hidden">Lencana</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- Latest badges --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <div class="flex items-center justify-between mb-3">
                <h4 class="text-sm font-bold text-slate-700">
                    <span class="lang-en">🏅 Latest Badges</span>
                    <span class="lang-bm hidden">🏅 Lencana Terkini</span>
                </h4>
                <a href="{{ route('achievements.index') }}" class="text-xs font-semibold text-teal-600 hover:underline">
                    <span class="lang-en">View all →</span>
                    <span class="lang-bm hidden">Lihat semua →</span>
                </a>
            </div>
            @if($recentBadges->count())
            <div class="flex flex-wrap gap-3">
                @foreach($recentBadges as $key)
                <div class="flex items-center gap-2 bg-amber-50 border border-amber-100 rounded-xl px-3 py-2">
                    <span class="text-2xl">{{ $badgeList[$key][0] }}</span>
                    <span class="text-xs font-semibold text-slate-700">
                        <span class="lang-en">{{ $badgeList[$key][1] }}</span>
                        <span class="lang-bm hidden">{{ $badgeList[$key][2] }}</span>
                    </span>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-sm text-slate-400">
                <span class="lang-en">No badges yet. Finish a practice session to earn your first one!</span>
                <span class="lang-bm hidden">Belum ada lencana. Selesaikan satu sesi latihan untuk dapatkan yang pertama!</span>
            </p>
            @endif
        </div>

        {{-- Existing forms --}}
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>

    </div>
</x-app-layout>