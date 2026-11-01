<x-guest-layout>
    <h2 class="text-lg font-bold text-slate-800 mb-1">
        <span class="lang-en">Create your account</span>
        <span class="lang-bm hidden">Cipta akaun anda</span>
    </h2>
    <p class="text-sm text-slate-400 mb-6">
        <span class="lang-en">Start practising Form 4 Mathematics today.</span>
        <span class="lang-bm hidden">Mula berlatih Matematik Tingkatan 4 hari ini.</span>
    </p>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Full name</span>
                <span class="lang-bm hidden">Nama penuh</span>
            </label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('name')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Email</span>
                <span class="lang-bm hidden">E-mel</span>
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('email')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Password</span>
                <span class="lang-bm hidden">Kata laluan</span>
            </label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('password')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Confirm password</span>
                <span class="lang-bm hidden">Sahkan kata laluan</span>
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('password_confirmation')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-teal-500 text-white text-sm font-semibold py-3 rounded-xl hover:bg-teal-600 transition shadow-sm">
            <span class="lang-en">Register</span>
            <span class="lang-bm hidden">Daftar</span>
        </button>
    </form>

    <p class="text-center text-xs text-slate-500 mt-6">
        <span class="lang-en">Already have an account?</span>
        <span class="lang-bm hidden">Sudah ada akaun?</span>
        <a href="{{ route('login') }}" class="font-semibold text-teal-600 hover:underline">
            <span class="lang-en">Log in</span>
            <span class="lang-bm hidden">Log masuk</span>
        </a>
    </p>
</x-guest-layout>