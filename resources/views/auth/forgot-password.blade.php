<x-guest-layout>
    <h2 class="text-lg font-bold text-slate-800 mb-1">
        <span class="lang-en">Forgot your password?</span>
        <span class="lang-bm hidden">Lupa kata laluan?</span>
    </h2>
    <p class="text-sm text-slate-400 mb-6">
        <span class="lang-en">Enter your email and we will send you a link to choose a new password.</span>
        <span class="lang-bm hidden">Masukkan e-mel anda dan kami akan menghantar pautan untuk memilih kata laluan baharu.</span>
    </p>

    @if (session('status'))
        <div class="mb-4 p-3 bg-teal-50 border border-teal-100 rounded-xl text-xs text-teal-700">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-xs font-semibold text-slate-600 mb-1.5">
                <span class="lang-en">Email</span>
                <span class="lang-bm hidden">E-mel</span>
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-700 bg-slate-50 focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-200 transition">
            @error('email')
                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-teal-500 text-white text-sm font-semibold py-3 rounded-xl hover:bg-teal-600 transition shadow-sm">
            <span class="lang-en">Email Reset Link</span>
            <span class="lang-bm hidden">Hantar Pautan Set Semula</span>
        </button>
    </form>

    <p class="text-center text-xs text-slate-500 mt-6">
        <a href="{{ route('login') }}" class="font-semibold text-teal-600 hover:underline">
            <span class="lang-en">← Back to log in</span>
            <span class="lang-bm hidden">← Kembali ke log masuk</span>
        </a>
    </p>
</x-guest-layout>