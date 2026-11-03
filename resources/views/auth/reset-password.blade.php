<x-guest-layout>
    <h2 class="text-lg font-bold text-slate-800 mb-1">
        <span class="lang-en">Choose a new password</span>
        <span class="lang-bm hidden">Pilih kata laluan baharu</span>
    </h2>
    <p class="text-sm text-slate-400 mb-6">
        <span class="lang-en">Use a password you can remember, at least 8 characters.</span>
        <span class="lang-bm hidden">Gunakan kata laluan yang anda boleh ingat, sekurang-kurangnya 8 aksara.</span>
    </p>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <label for="email" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Email</span>
                <span class="lang-bm hidden">E-mel</span>
            </label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('email')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">New password</span>
                <span class="lang-bm hidden">Kata laluan baharu</span>
            </label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('password')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Confirm new password</span>
                <span class="lang-bm hidden">Sahkan kata laluan baharu</span>
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('password_confirmation')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-teal-500 text-white text-sm font-semibold py-3 rounded-xl hover:bg-teal-600 transition shadow-sm">
            <span class="lang-en">Reset Password</span>
            <span class="lang-bm hidden">Set Semula Kata Laluan</span>
        </button>
    </form>
</x-guest-layout>