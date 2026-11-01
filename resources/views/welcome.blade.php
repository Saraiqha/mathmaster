<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MathMaster — Form 4 Mathematics</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-100 text-slate-800">

    {{-- Top bar --}}
    <header class="bg-white border-b border-slate-100">
        <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 bg-teal-500 rounded-xl flex items-center justify-center text-white font-bold">M</div>
                <span class="font-bold text-slate-800">MathMaster</span>
            </div>
            <div class="flex items-center gap-3">
                <button type="button" onclick="toggleLang()"
                    class="bg-white border border-slate-200 rounded-full px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50 transition">
                    🌐 <span id="langLabel">EN</span>
                </button>
                @auth
                    <a href="{{ route('dashboard') }}" class="px-4 py-2 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition">
                        <span class="lang-en">Dashboard</span>
                        <span class="lang-bm hidden">Papan Pemuka</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 transition">
                        <span class="lang-en">Log In</span>
                        <span class="lang-bm hidden">Log Masuk</span>
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition">
                        <span class="lang-en">Register</span>
                        <span class="lang-bm hidden">Daftar</span>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <main class="max-w-5xl mx-auto px-6">

        {{-- Hero --}}
        <section class="text-center py-16">
            <p class="inline-block text-xs font-semibold text-teal-700 bg-teal-50 border border-teal-100 rounded-full px-3 py-1 mb-5">
                <span class="lang-en">KSSM Form 4 Mathematics</span>
                <span class="lang-bm hidden">Matematik KSSM Tingkatan 4</span>
            </p>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 leading-tight mb-4">
                <span class="lang-en">Learn. Practise. Improve.</span>
                <span class="lang-bm hidden">Belajar. Berlatih. Tambah Baik.</span>
            </h1>
            <p class="text-slate-500 max-w-xl mx-auto mb-8">
                <span class="lang-en">Revise notes, practise questions in English or Bahasa Melayu, and track your progress topic by topic.</span>
                <span class="lang-bm hidden">Ulang kaji nota, berlatih soalan dalam Bahasa Inggeris atau Bahasa Melayu, dan jejak kemajuan anda topik demi topik.</span>
            </p>
            <div class="flex justify-center gap-3">
                @auth
                    <a href="{{ route('topics.index') }}" class="px-6 py-3 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">
                        <span class="lang-en">Go to Topics →</span>
                        <span class="lang-bm hidden">Pergi ke Topik →</span>
                    </a>
                @else
                    <a href="{{ route('register') }}" class="px-6 py-3 text-sm font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition shadow-sm">
                        <span class="lang-en">Get Started →</span>
                        <span class="lang-bm hidden">Mula Sekarang →</span>
                    </a>
                    <a href="{{ route('login') }}" class="px-6 py-3 text-sm font-medium bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                        <span class="lang-en">I have an account</span>
                        <span class="lang-bm hidden">Saya sudah ada akaun</span>
                    </a>
                @endauth
            </div>
        </section>

        {{-- Features --}}
        <section class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center text-xl mb-3">📖</div>
                <h3 class="text-sm font-bold text-slate-800 mb-1">
                    <span class="lang-en">Learning Notes and Quick Revision</span>
                    <span class="lang-bm hidden">Nota Pembelajaran dan Ulang Kaji Pantas</span>
                </h3>
                <p class="text-sm text-slate-500">
                    <span class="lang-en">Clear notes with worked examples that follow the KSSM textbook, so you can understand without searching elsewhere.</span>
                    <span class="lang-bm hidden">Nota yang jelas dengan contoh penyelesaian mengikut buku teks KSSM, supaya anda faham tanpa perlu mencari di tempat lain.</span>
                </p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <div class="w-10 h-10 bg-sky-50 rounded-xl flex items-center justify-center text-xl mb-3">✏️</div>
                <h3 class="text-sm font-bold text-slate-800 mb-1">
                    <span class="lang-en">Practice with 3 Levels</span>
                    <span class="lang-bm hidden">Latihan dengan 3 Tahap</span>
                </h3>
                <p class="text-sm text-slate-500">
                    <span class="lang-en">Over 100 questions per topic across Easy, Medium and Hard, with step-by-step solutions after every answer.</span>
                    <span class="lang-bm hidden">Lebih 100 soalan bagi setiap topik merentasi tahap Mudah, Sederhana dan Sukar, dengan penyelesaian langkah demi langkah selepas setiap jawapan.</span>
                </p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <div class="w-10 h-10 bg-amber-50 rounded-xl flex items-center justify-center text-xl mb-3">🏅</div>
                <h3 class="text-sm font-bold text-slate-800 mb-1">
                    <span class="lang-en">Points, Levels and Badges</span>
                    <span class="lang-bm hidden">Mata, Tahap dan Lencana</span>
                </h3>
                <p class="text-sm text-slate-500">
                    <span class="lang-en">Earn points, unlock harder levels and collect badges as you improve.</span>
                    <span class="lang-bm hidden">Kumpul mata, buka kunci tahap yang lebih sukar dan dapatkan lencana apabila anda bertambah baik.</span>
                </p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <div class="w-10 h-10 bg-violet-50 rounded-xl flex items-center justify-center text-xl mb-3">📈</div>
                <h3 class="text-sm font-bold text-slate-800 mb-1">
                    <span class="lang-en">Track Your Progress</span>
                    <span class="lang-bm hidden">Jejak Kemajuan Anda</span>
                </h3>
                <p class="text-sm text-slate-500">
                    <span class="lang-en">See your scores over time and find your weak topics so you know what to revise next.</span>
                    <span class="lang-bm hidden">Lihat skor anda dari semasa ke semasa dan kenal pasti topik lemah supaya anda tahu apa yang perlu diulang kaji.</span>
                </p>
            </div>
        </section>

        {{-- Topics --}}
        <section class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-12">
            <h2 class="text-sm font-bold text-slate-700 mb-4">
                <span class="lang-en">5 Topics Covered</span>
                <span class="lang-bm hidden">5 Topik Dilitupi</span>
            </h2>
            <div class="flex flex-wrap gap-2">
                <span class="text-xs font-semibold bg-teal-50 text-teal-700 border border-teal-100 rounded-full px-3 py-1.5">
                    📐 <span class="lang-en">Quadratic Functions and Equations</span><span class="lang-bm hidden">Fungsi dan Persamaan Kuadratik</span>
                </span>
                <span class="text-xs font-semibold bg-sky-50 text-sky-700 border border-sky-100 rounded-full px-3 py-1.5">
                    🔢 <span class="lang-en">Number Bases</span><span class="lang-bm hidden">Asas Nombor</span>
                </span>
                <span class="text-xs font-semibold bg-violet-50 text-violet-700 border border-violet-100 rounded-full px-3 py-1.5">
                    🧠 <span class="lang-en">Logical Reasoning</span><span class="lang-bm hidden">Penaakulan Logik</span>
                </span>
                <span class="text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-100 rounded-full px-3 py-1.5">
                    🔵 <span class="lang-en">Operations on Sets</span><span class="lang-bm hidden">Operasi pada Set</span>
                </span>
                <span class="text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-100 rounded-full px-3 py-1.5">
                    🕸️ <span class="lang-en">Network in Graph Theory</span><span class="lang-bm hidden">Rangkaian dalam Teori Graf</span>
                </span>
            </div>
        </section>
    </main>

    <footer class="text-center text-xs text-slate-400 pb-10">
        <span class="lang-en">MathMaster · Final Year Project · Sultan Idris Education University</span>
        <span class="lang-bm hidden">MathMaster · Projek Tahun Akhir · Universiti Pendidikan Sultan Idris</span>
    </footer>

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