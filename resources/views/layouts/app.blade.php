<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'MathMaster') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            #sidebar {
                width: 240px;
                min-height: 100vh;
                background: #ffffff;
                border-right: 1px solid #e2e8f0;
                position: fixed;
                left: 0;
                top: 0;
                bottom: 0;
                z-index: 50;
                display: flex;
                flex-direction: column;
                transition: transform 0.3s ease;
            }
            #sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0,0,0,0.3);
                z-index: 40;
            }
            #main-content {
                margin-left: 240px;
                min-height: 100vh;
                background: #f1f5f9;
                transition: margin-left 0.3s ease;
            }
            .sidebar-link {
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 10px 14px;
                border-radius: 10px;
                color: #64748b;
                font-size: 0.875rem;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.2s;
                margin: 2px 0;
            }
            .sidebar-link:hover {
                background: #f0fdfa;
                color: #0d9488;
            }
            .sidebar-link.active {
                background: #0d9488;
                color: #ffffff;
            }
            .sidebar-link.active .icon {
                filter: brightness(10);
            }
            .sidebar-link .icon {
                width: 20px;
                text-align: center;
                font-size: 1rem;
                flex-shrink: 0;
            }
            .sidebar-section-label {
                font-size: 0.65rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                color: #94a3b8;
                padding: 0 14px;
                margin: 12px 0 4px;
            }
            @media (max-width: 768px) {
                #sidebar {
                    transform: translateX(-100%);
                    box-shadow: 4px 0 20px rgba(0,0,0,0.1);
                }
                #sidebar.open {
                    transform: translateX(0);
                }
                #sidebar-overlay.open {
                    display: block;
                }
                #main-content {
                    margin-left: 0;
                }
            }
        </style>
    </head>
    <body class="font-sans antialiased" id="mm-body">

        {{-- Sidebar Overlay (mobile) --}}
        <div id="sidebar-overlay" onclick="closeSidebar()"></div>

        {{-- Sidebar --}}
        <div id="sidebar">

            {{-- Logo --}}
            <div class="px-5 py-5 border-b border-slate-100">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5">
                    <div class="w-9 h-9 bg-teal-500 rounded-xl flex items-center justify-center text-white font-bold text-base shadow-sm">M</div>
                    <div>
                        <p class="text-slate-800 font-bold text-sm leading-tight">MathMaster</p>
                        <p class="text-slate-400 text-xs">Learn. Practise. Improve.</p>
                    </div>
                </a>
            </div>

            {{-- Navigation --}}
            <div class="flex-1 px-3 py-4 overflow-y-auto">

                <p class="sidebar-section-label">
                    <span class="lang-en">Main Menu</span>
                    <span class="lang-bm hidden">Menu Utama</span>
                </p>

                <a href="{{ route('dashboard') }}"
                    class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="icon">📊</span>
                    <span class="lang-en">Dashboard</span>
                    <span class="lang-bm hidden">Papan Pemuka</span>
                </a>

                <a href="{{ route('topics.index') }}"
                    class="sidebar-link {{ request()->routeIs('topics.*') || request()->routeIs('practice.*') || request()->routeIs('notes.*') ? 'active' : '' }}">
                    <span class="icon">📚</span>
                    <span class="lang-en">Topics</span>
                    <span class="lang-bm hidden">Topik</span>
                </a>

                <a href="{{ route('profile.edit') }}"
                    class="sidebar-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                    <span class="icon">👤</span>
                    <span class="lang-en">Profile</span>
                    <span class="lang-bm hidden">Profil</span>
                </a>

                <p class="sidebar-section-label mt-4">
                    <span class="lang-en">Settings</span>
                    <span class="lang-bm hidden">Tetapan</span>
                </p>

                {{-- Language Toggle --}}
                <button onclick="toggleLang()" class="sidebar-link w-full text-left">
                    <span class="icon">🌐</span>
                    <span class="lang-en">Switch to BM</span>
                    <span class="lang-bm hidden">Tukar ke EN</span>
                </button>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="sidebar-link w-full text-left text-rose-500 hover:bg-rose-50 hover:text-rose-600">
                        <span class="icon">🚪</span>
                        <span class="lang-en">Log Out</span>
                        <span class="lang-bm hidden">Log Keluar</span>
                    </button>
                </form>

            </div>

            {{-- User at Bottom --}}
            <div class="px-4 py-4 border-t border-slate-100">
                <div class="flex items-center gap-3 p-2 rounded-xl hover:bg-slate-50 transition">
                    <div class="w-9 h-9 bg-teal-500 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-slate-700 text-xs font-semibold truncate">{{ Auth::user()->name }}</p>
                        <p class="text-slate-400 text-xs truncate">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Main Content --}}
        <div id="main-content">

            {{-- Top Bar --}}
            <div class="bg-white border-b border-slate-100 px-6 py-3.5 flex items-center justify-between sticky top-0 z-30 shadow-sm">

                {{-- Mobile hamburger --}}
                <button onclick="toggleSidebar()" class="md:hidden text-slate-500 hover:text-slate-700 mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                {{-- Page Title --}}
                <div class="flex-1">
                    @if (isset($header))
                        {{ $header }}
                    @endif
                </div>

                {{-- Right side --}}
                <div class="flex items-center gap-3">
                    <button onclick="toggleLang()" id="lang-toggle"
                        class="flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold rounded-lg border border-teal-200 text-teal-700 bg-teal-50 hover:bg-teal-100 transition">
                        🌐 <span id="lang-label">EN</span>
                    </button>
                    <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center text-white text-xs font-bold shadow-sm">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                </div>

            </div>

            {{-- Page Content --}}
            <main>
                {{ $slot }}
            </main>

        </div>

        {{-- Scripts --}}
        <script>
            function toggleSidebar() {
                document.getElementById('sidebar').classList.toggle('open');
                document.getElementById('sidebar-overlay').classList.toggle('open');
            }

            function closeSidebar() {
                document.getElementById('sidebar').classList.remove('open');
                document.getElementById('sidebar-overlay').classList.remove('open');
            }

            function toggleLang() {
                const current = localStorage.getItem('mm_lang') || 'en';
                setLang(current === 'en' ? 'bm' : 'en');
            }

            function setLang(lang) {
                localStorage.setItem('mm_lang', lang);
                document.documentElement.setAttribute('data-lang', lang);
                const label = document.getElementById('lang-label');
                if (label) label.textContent = lang === 'en' ? 'EN' : 'BM';
                document.querySelectorAll('.lang-en').forEach(el => el.classList.toggle('hidden', lang !== 'en'));
                document.querySelectorAll('.lang-bm').forEach(el => el.classList.toggle('hidden', lang !== 'bm'));
            }

            document.addEventListener('DOMContentLoaded', function () {
                setLang(localStorage.getItem('mm_lang') || 'en');
            });
        </script>

    </body>
</html>