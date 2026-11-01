<x-guest-layout>
    <h2 class="text-lg font-bold text-slate-800 mb-1">
        <span class="lang-en">Welcome back 👋</span>
        <span class="lang-bm hidden">Selamat kembali 👋</span>
    </h2>
    <p class="text-sm text-slate-400 mb-6">
        <span class="lang-en">Log in to continue learning.</span>
        <span class="lang-bm hidden">Log masuk untuk terus belajar.</span>
    </p>

    @if (session('status'))
        <div class="mb-4 p-3 bg-teal-50 border border-teal-100 rounded-xl text-xs text-teal-700">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Email</span>
                <span class="lang-bm hidden">E-mel</span>
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
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
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('password')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="remember" class="rounded border-slate-300 text-teal-600 focus:ring-teal-300">
                <span class="text-xs text-slate-500">
                    <span class="lang-en">Remember me</span>
                    <span class="lang-bm hidden">Ingat saya</span>
                </span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-xs font-semibold text-teal-600 hover:underline">
                    <span class="lang-en">Forgot password?</span>
                    <span class="lang-bm hidden">Lupa kata laluan?</span>
                </a>
            @endif
        </div>

        <button type="submit"
            class="w-full bg-teal-500 text-white text-sm font-semibold py-3 rounded-xl hover:bg-teal-600 transition shadow-sm">
            <span class="lang-en">Log In</span>
            <span class="lang-bm hidden">Log Masuk</span>
        </button>
    </form>

    <p class="text-center text-xs text-slate-500 mt-6">
        <span class="lang-en">New to MathMaster?</span>
        <span class="lang-bm hidden">Baru di MathMaster?</span>
        <a href="{{ route('register') }}" class="font-semibold text-teal-600 hover:underline">
            <span class="lang-en">Create an account</span>
            <span class="lang-bm hidden">Daftar akaun</span>
        </a>
    </p>
</x-guest-layout>