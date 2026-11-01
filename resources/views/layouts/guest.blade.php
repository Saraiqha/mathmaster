<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'MathMaster') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-100">
    <div class="min-h-screen flex flex-col items-center justify-center p-4 relative">

        {{-- Language toggle --}}
        <button type="button" onclick="toggleLang()"
            class="absolute top-4 right-4 bg-white border border-slate-200 rounded-full px-3 py-1.5 text-xs font-semibold text-slate-600 shadow-sm hover:bg-slate-50 transition">
            🌐 <span id="langLabel">EN</span>
        </button>

        {{-- Logo --}}
        <div class="text-center mb-6">
            <div class="w-14 h-14 bg-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-sm">
                <span class="text-white text-2xl font-bold">M</span>
            </div>
            <h1 class="text-2xl font-bold text-slate-800">MathMaster</h1>
            <p class="text-sm text-slate-400 mt-1">Learn. Practise. Improve.</p>
        </div>

        {{-- Card --}}
        <div class="w-full max-w-md bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
            {{ $slot }}
        </div>

        <p class="text-xs text-slate-400 mt-6">
            <span class="lang-en">Form 4 Mathematics Learning System</span>
            <span class="lang-bm hidden">Sistem Pembelajaran Matematik Tingkatan 4</span>
        </p>
    </div>

    <script>
        function setLang(l) {
            localStorage.setItem('mm_lang', l);
            document.querySelectorAll('.lang-en').forEach(e => e.classList.toggle('hidden', l !== 'en'));
            document.querySelectorAll('.lang-bm').forEach(e => e.classList.toggle('hidden', l !== 'bm'));
            const label = document.getElementById('langLabel');
            if (label) label.textContent = l.toUpperCase();
        }
        function toggleLang() {
            setLang((localStorage.getItem('mm_lang') || 'en') === 'en' ? 'bm' : 'en');
        }
        document.addEventListener('DOMContentLoaded', () => setLang(localStorage.getItem('mm_lang') || 'en'));
    </script>
</body>
</html>