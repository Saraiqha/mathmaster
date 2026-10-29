{{-- ═══════════════════════════════════════════════
     TOPIC 4: OPERATIONS ON SETS
     Aligned to KSSM Form 4 KPM Textbook Chapter 4
     Self-contained — student does not need textbook
     ═══════════════════════════════════════════════ --}}

{{-- 1. Learning Objectives --}}
<div class="bg-white rounded-2xl border border-slate-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">
        <span class="lang-en">🎯 Learning Objectives</span>
        <span class="lang-bm hidden">🎯 Objektif Pembelajaran</span>
    </h4>
    <ul class="space-y-2 lang-en">
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Perform intersection of sets P ∩ Q and represent on Venn diagram</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Perform union of sets P ∪ Q and represent on Venn diagram</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Perform combined operations on sets involving both ∩ and ∪</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Find complements (P ∩ Q)\', (P ∪ Q)\' and (A ∪ B)\' ∩ C</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Use the formula n(P ∪ Q) = n(P) + n(Q) − n(P ∩ Q)</li>
    </ul>
    <ul class="space-y-2 lang-bm hidden">
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Lakukan persilangan set P ∩ Q dan wakilkan pada gambar rajah Venn</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Lakukan kesatuan set P ∪ Q dan wakilkan pada gambar rajah Venn</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Lakukan operasi gabungan pada set melibatkan kedua-dua ∩ dan ∪</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Cari pelengkap (P ∩ Q)\', (P ∪ Q)\' dan (A ∪ B)\' ∩ C</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Guna rumus n(P ∪ Q) = n(P) + n(Q) − n(P ∩ Q)</li>
    </ul>
</div>

{{-- 2. Key Concepts --}}
<div class="bg-white rounded-2xl border border-slate-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">
        <span class="lang-en">📐 Key Concepts and Formulas</span>
        <span class="lang-bm hidden">📐 Konsep Utama dan Rumus</span>
    </h4>

    {{-- Part A: Intersection --}}
    <div class="mb-6">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">A. Intersection of Sets — P ∩ Q</span>
                <span class="lang-bm hidden">A. Persilangan Set — P ∩ Q</span>
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div class="p-4 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-700 mb-2 lang-en">Definition</p>
                <p class="text-xs font-bold text-teal-700 mb-2 lang-bm hidden">Takrif</p>
                <p class="text-sm text-slate-700 lang-en">P ∩ Q refers to all elements that are <strong>common to both</strong> set P and set Q.</p>
                <p class="text-sm text-slate-700 lang-bm hidden">P ∩ Q merujuk kepada semua elemen yang <strong>sepunya</strong> set P dan set Q.</p>
                <div class="mt-3 p-2 bg-white rounded-lg border border-teal-100">
                    <p class="text-xs font-bold text-slate-600 mb-1 lang-en">Example:</p>
                    <p class="text-xs font-bold text-slate-600 mb-1 lang-bm hidden">Contoh:</p>
                    <p class="text-xs font-mono text-slate-700">P = {1, 2, 3, 4, 5}</p>
                    <p class="text-xs font-mono text-slate-700">Q = {4, 5, 6, 7}</p>
                    <p class="text-xs font-mono font-bold text-teal-700">P ∩ Q = {4, 5}</p>
                </div>
            </div>
            <div class="p-4 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-700 mb-2 lang-en">Venn Diagram — shaded region is P ∩ Q</p>
                <p class="text-xs font-bold text-teal-700 mb-2 lang-bm hidden">Gambar Rajah Venn — kawasan berlorek ialah P ∩ Q</p>
                <div class="flex justify-center py-2">
                    <svg viewBox="0 0 200 120" class="w-48 h-28">
                        <rect width="200" height="120" fill="#f0fdfa" rx="8"/>
                        <text x="5" y="12" font-size="10" fill="#0f766e" font-weight="bold">ξ</text>
                        <circle cx="75" cy="60" r="45" fill="none" stroke="#0d9488" stroke-width="2"/>
                        <circle cx="125" cy="60" r="45" fill="none" stroke="#0d9488" stroke-width="2"/>
                        <path d="M100,18 A45,45 0 0,1 100,102 A45,45 0 0,1 100,18" fill="#0d9488" opacity="0.3"/>
                        <text x="50" y="60" font-size="11" fill="#0f766e" font-weight="bold" text-anchor="middle">P</text>
                        <text x="150" y="60" font-size="11" fill="#0f766e" font-weight="bold" text-anchor="middle">Q</text>
                        <text x="100" y="64" font-size="9" fill="#0f766e" font-weight="bold" text-anchor="middle">P∩Q</text>
                    </svg>
                </div>
                <p class="text-xs text-slate-500 text-center lang-en">Only the overlapping part is shaded</p>
                <p class="text-xs text-slate-500 text-center lang-bm hidden">Hanya bahagian bertindih yang berlorek</p>
            </div>
        </div>

        {{-- Complement of intersection --}}
        <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
            <p class="text-xs font-bold text-slate-700 mb-2 lang-en">Complement (P ∩ Q)' — everything OUTSIDE the intersection</p>
            <p class="text-xs font-bold text-slate-700 mb-2 lang-bm hidden">Pelengkap (P ∩ Q)' — semua yang berada DI LUAR persilangan</p>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <p class="text-xs text-slate-600 lang-en">(P ∩ Q)' = ξ − (P ∩ Q)</p>
                    <p class="text-xs text-slate-600 lang-bm hidden">(P ∩ Q)' = ξ − (P ∩ Q)</p>
                    <p class="text-xs text-slate-500 mt-1 lang-en">All elements in ξ that are NOT in P ∩ Q</p>
                    <p class="text-xs text-slate-500 mt-1 lang-bm hidden">Semua elemen dalam ξ yang TIDAK dalam P ∩ Q</p>
                </div>
                <div class="flex justify-center">
                    <svg viewBox="0 0 160 100" class="w-36 h-24">
                        <rect width="160" height="100" fill="#0d9488" opacity="0.2" rx="6"/>
                        <circle cx="60" cy="50" r="35" fill="#f0fdfa"/>
                        <circle cx="100" cy="50" r="35" fill="#f0fdfa"/>
                        <path d="M80,18 A35,35 0 0,1 80,82 A35,35 0 0,1 80,18" fill="white"/>
                        <text x="5" y="10" font-size="8" fill="#0f766e" font-weight="bold">ξ</text>
                        <text x="40" y="52" font-size="9" fill="#0f766e" text-anchor="middle">P</text>
                        <text x="120" y="52" font-size="9" fill="#0f766e" text-anchor="middle">Q</text>
                        <text x="80" y="52" font-size="7" fill="#374151" text-anchor="middle">P∩Q</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Part B: Union --}}
    <div class="mb-6">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-sky-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">B. Union of Sets — P ∪ Q</span>
                <span class="lang-bm hidden">B. Kesatuan Set — P ∪ Q</span>
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div class="p-4 bg-sky-50 rounded-xl border border-sky-100">
                <p class="text-xs font-bold text-sky-700 mb-2 lang-en">Definition</p>
                <p class="text-xs font-bold text-sky-700 mb-2 lang-bm hidden">Takrif</p>
                <p class="text-sm text-slate-700 lang-en">P ∪ Q represents <strong>all elements</strong> in set P, set Q or both sets P and Q.</p>
                <p class="text-sm text-slate-700 lang-bm hidden">P ∪ Q mewakili <strong>semua elemen</strong> dalam set P, set Q atau kedua-dua set P dan Q.</p>
                <div class="mt-3 p-2 bg-white rounded-lg border border-sky-100">
                    <p class="text-xs font-bold text-slate-600 mb-1 lang-en">Example:</p>
                    <p class="text-xs font-bold text-slate-600 mb-1 lang-bm hidden">Contoh:</p>
                    <p class="text-xs font-mono text-slate-700">P = {1, 2, 3, 4, 5}</p>
                    <p class="text-xs font-mono text-slate-700">Q = {4, 5, 6, 7}</p>
                    <p class="text-xs font-mono font-bold text-sky-700">P ∪ Q = {1, 2, 3, 4, 5, 6, 7}</p>
                    <p class="text-xs text-slate-400 lang-en">(4 and 5 written once only)</p>
                    <p class="text-xs text-slate-400 lang-bm hidden">(4 dan 5 ditulis sekali sahaja)</p>
                </div>
            </div>
            <div class="p-4 bg-sky-50 rounded-xl border border-sky-100">
                <p class="text-xs font-bold text-sky-700 mb-2 lang-en">Venn Diagram — both circles shaded</p>
                <p class="text-xs font-bold text-sky-700 mb-2 lang-bm hidden">Gambar Rajah Venn — kedua-dua bulatan berlorek</p>
                <div class="flex justify-center py-2">
                    <svg viewBox="0 0 200 120" class="w-48 h-28">
                        <rect width="200" height="120" fill="#f0f9ff" rx="8"/>
                        <text x="5" y="12" font-size="10" fill="#0369a1" font-weight="bold">ξ</text>
                        <circle cx="75" cy="60" r="45" fill="#0ea5e9" opacity="0.3"/>
                        <circle cx="125" cy="60" r="45" fill="#0ea5e9" opacity="0.3"/>
                        <circle cx="75" cy="60" r="45" fill="none" stroke="#0369a1" stroke-width="2"/>
                        <circle cx="125" cy="60" r="45" fill="none" stroke="#0369a1" stroke-width="2"/>
                        <text x="50" y="60" font-size="11" fill="#0369a1" font-weight="bold" text-anchor="middle">P</text>
                        <text x="150" y="60" font-size="11" fill="#0369a1" font-weight="bold" text-anchor="middle">Q</text>
                        <text x="100" y="64" font-size="8" fill="#0369a1" text-anchor="middle">P∪Q</text>
                    </svg>
                </div>
                <p class="text-xs text-slate-500 text-center lang-en">Both circles entirely shaded</p>
                <p class="text-xs text-slate-500 text-center lang-bm hidden">Kedua-dua bulatan berlorek sepenuhnya</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="p-3 bg-sky-50 rounded-xl border border-sky-100">
                <p class="text-xs font-bold text-sky-700 mb-1 lang-en">Important Formula</p>
                <p class="text-xs font-bold text-sky-700 mb-1 lang-bm hidden">Rumus Penting</p>
                <p class="text-sm font-mono font-bold text-slate-800">n(P ∪ Q) = n(P) + n(Q) − n(P ∩ Q)</p>
                <p class="text-xs text-slate-500 mt-1 lang-en">Subtract intersection to avoid counting twice</p>
                <p class="text-xs text-slate-500 mt-1 lang-bm hidden">Tolak persilangan untuk elak mengira dua kali</p>
            </div>
            <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                <p class="text-xs font-bold text-slate-700 mb-2 lang-en">Complement (P ∪ Q)' — elements OUTSIDE both circles</p>
                <p class="text-xs font-bold text-slate-700 mb-2 lang-bm hidden">Pelengkap (P ∪ Q)' — elemen DI LUAR kedua-dua bulatan</p>
                <p class="text-xs text-slate-600 lang-en">(P ∪ Q)' = all elements in ξ NOT in P or Q</p>
                <p class="text-xs text-slate-600 lang-bm hidden">(P ∪ Q)' = semua elemen dalam ξ yang TIDAK dalam P atau Q</p>
            </div>
        </div>
    </div>

    {{-- Part C: Combined Operations --}}
    <div>
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-violet-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">C. Combined Operations on Sets</span>
                <span class="lang-bm hidden">C. Operasi Gabungan pada Set</span>
            </p>
        </div>
        <div class="p-4 bg-violet-50 rounded-xl border border-violet-100 mb-3">
            <p class="text-xs font-bold text-violet-700 mb-2 lang-en">📌 Rule: Always work inside brackets FIRST</p>
            <p class="text-xs font-bold text-violet-700 mb-2 lang-bm hidden">📌 Peraturan: Sentiasa kerjakan dalam kurungan DAHULU</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="p-3 bg-white rounded-lg border border-violet-100">
                    <p class="text-xs font-bold text-violet-600 mb-2 lang-en">Example 1: (P ∪ Q) ∩ R</p>
                    <p class="text-xs font-bold text-violet-600 mb-2 lang-bm hidden">Contoh 1: (P ∪ Q) ∩ R</p>
                    <p class="text-xs text-slate-600 lang-en">Step 1: Find P ∪ Q (union of P and Q)</p>
                    <p class="text-xs text-slate-600 lang-bm hidden">Langkah 1: Cari P ∪ Q (kesatuan P dan Q)</p>
                    <p class="text-xs text-slate-600 lang-en">Step 2: Find (P ∪ Q) ∩ R (intersection of result with R)</p>
                    <p class="text-xs text-slate-600 lang-bm hidden">Langkah 2: Cari (P ∪ Q) ∩ R (persilangan keputusan dengan R)</p>
                    <div class="mt-2 p-2 bg-violet-50 rounded text-xs font-mono">
                        <p>P={1,2,3,4,5}, Q={4,5,6,7}, R={5,6,7,8}</p>
                        <p>P∪Q = {1,2,3,4,5,6,7}</p>
                        <p class="font-bold text-violet-700">(P∪Q)∩R = {5,6,7}</p>
                    </div>
                </div>
                <div class="p-3 bg-white rounded-lg border border-violet-100">
                    <p class="text-xs font-bold text-violet-600 mb-2 lang-en">Example 2: (A ∪ B)' ∩ C</p>
                    <p class="text-xs font-bold text-violet-600 mb-2 lang-bm hidden">Contoh 2: (A ∪ B)' ∩ C</p>
                    <p class="text-xs text-slate-600 lang-en">Step 1: Find A ∪ B</p>
                    <p class="text-xs text-slate-600 lang-bm hidden">Langkah 1: Cari A ∪ B</p>
                    <p class="text-xs text-slate-600 lang-en">Step 2: Find (A ∪ B)' — complement within ξ</p>
                    <p class="text-xs text-slate-600 lang-bm hidden">Langkah 2: Cari (A ∪ B)' — pelengkap dalam ξ</p>
                    <p class="text-xs text-slate-600 lang-en">Step 3: Find (A ∪ B)' ∩ C</p>
                    <p class="text-xs text-slate-600 lang-bm hidden">Langkah 3: Cari (A ∪ B)' ∩ C</p>
                    <div class="mt-2 p-2 bg-violet-50 rounded text-xs font-mono">
                        <p>ξ={1..10}, A={1,2,3}, B={3,4,5}, C={5,6,7,8}</p>
                        <p>A∪B = {1,2,3,4,5}</p>
                        <p>(A∪B)' = {6,7,8,9,10}</p>
                        <p class="font-bold text-violet-700">(A∪B)'∩C = {6,7,8}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 3. Worked Examples --}}
<div class="bg-white rounded-2xl border border-slate-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">
        <span class="lang-en">✏️ Step-by-Step Worked Examples</span>
        <span class="lang-bm hidden">✏️ Contoh Penyelesaian Langkah demi Langkah</span>
    </h4>

    {{-- Example 1 --}}
    <div class="mb-5 p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 1 — Basic Set Operations</span>
            <span class="lang-bm hidden">Contoh 1 — Operasi Set Asas</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Given ξ = {1,2,3,4,5,6,7,8,9,10}, P = {1,2,3,4,5}, Q = {4,5,6,7}. Find P ∩ Q, P ∪ Q, (P ∩ Q)' and (P ∪ Q)'.</span>
            <span class="lang-bm hidden">Diberi ξ = {1,2,3,4,5,6,7,8,9,10}, P = {1,2,3,4,5}, Q = {4,5,6,7}. Cari P ∩ Q, P ∪ Q, (P ∩ Q)' dan (P ∪ Q)'.</span>
        </p>
        <button id="btn-sol1" onclick="toggleSolution('sol1')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol1" class="hidden mt-4 space-y-3">
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 1:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 1:</span>
                <div>
                    <span class="lang-en"><strong>P ∩ Q</strong> — elements in BOTH P and Q:</span>
                    <span class="lang-bm hidden"><strong>P ∩ Q</strong> — elemen dalam KEDUA-DUA P dan Q:</span>
                    <p class="font-mono text-sm mt-1">P ∩ Q = {4, 5}</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <div>
                    <span class="lang-en"><strong>P ∪ Q</strong> — ALL elements in P or Q (no repetition):</span>
                    <span class="lang-bm hidden"><strong>P ∪ Q</strong> — SEMUA elemen dalam P atau Q (tanpa ulangan):</span>
                    <p class="font-mono text-sm mt-1">P ∪ Q = {1, 2, 3, 4, 5, 6, 7}</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 3:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 3:</span>
                <div>
                    <span class="lang-en"><strong>(P ∩ Q)'</strong> — elements in ξ NOT in {4,5}:</span>
                    <span class="lang-bm hidden"><strong>(P ∩ Q)'</strong> — elemen dalam ξ yang TIDAK dalam {4,5}:</span>
                    <p class="font-mono text-sm mt-1">(P ∩ Q)' = {1, 2, 3, 6, 7, 8, 9, 10}</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 4:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 4:</span>
                <div>
                    <span class="lang-en"><strong>(P ∪ Q)'</strong> — elements in ξ NOT in {1,2,3,4,5,6,7}:</span>
                    <span class="lang-bm hidden"><strong>(P ∪ Q)'</strong> — elemen dalam ξ yang TIDAK dalam {1,2,3,4,5,6,7}:</span>
                    <p class="font-mono text-sm mt-1">(P ∪ Q)' = {8, 9, 10}</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 5:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 5:</span>
                <div>
                    <span class="lang-en"><strong>Verify</strong> using formula:</span>
                    <span class="lang-bm hidden"><strong>Sahkan</strong> menggunakan rumus:</span>
                    <p class="font-mono text-sm mt-1">n(P ∪ Q) = n(P) + n(Q) − n(P ∩ Q)</p>
                    <p class="font-mono text-sm mt-1 pl-4">= 5 + 4 − 2 = <strong class="text-teal-600">7</strong> ✓</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Example 2 --}}
    <div class="mb-5 p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 2 — Combined Operations</span>
            <span class="lang-bm hidden">Contoh 2 — Operasi Gabungan</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Given ξ = {1..10}, P = {1,2,3,4,5}, Q = {4,5,6,7}, R = {5,6,7,8}. Find (P ∪ Q) ∩ R.</span>
            <span class="lang-bm hidden">Diberi ξ = {1..10}, P = {1,2,3,4,5}, Q = {4,5,6,7}, R = {5,6,7,8}. Cari (P ∪ Q) ∩ R.</span>
        </p>
        <button id="btn-sol2" onclick="toggleSolution('sol2')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol2" class="hidden mt-4 space-y-3">
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 1:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 1:</span>
                <div>
                    <span class="lang-en">Work inside brackets first — find <strong>P ∪ Q</strong>:</span>
                    <span class="lang-bm hidden">Kerjakan dalam kurungan dahulu — cari <strong>P ∪ Q</strong>:</span>
                    <p class="font-mono text-sm mt-1">P ∪ Q = {1, 2, 3, 4, 5, 6, 7}</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <div>
                    <span class="lang-en">Find <strong>(P ∪ Q) ∩ R</strong> — elements common to both {1,2,3,4,5,6,7} and {5,6,7,8}:</span>
                    <span class="lang-bm hidden">Cari <strong>(P ∪ Q) ∩ R</strong> — elemen sepunya antara {1,2,3,4,5,6,7} dan {5,6,7,8}:</span>
                    <p class="font-mono text-sm mt-1">(P ∪ Q) ∩ R = {5, 6, 7}</p>
                </div>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-semibold text-teal-700 lang-en">∴ (P ∪ Q) ∩ R = {5, 6, 7}</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">∴ (P ∪ Q) ∩ R = {5, 6, 7}</p>
            </div>
        </div>
    </div>

    {{-- Example 3 --}}
    <div class="p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 3 — Complement of Combined Operations</span>
            <span class="lang-bm hidden">Contoh 3 — Pelengkap Operasi Gabungan</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Given ξ = {1,2,3,4,5,6,7,8,9,10}, A = {1,2,3}, B = {3,4,5}, C = {5,6,7,8}. Find (A ∪ B)' ∩ C.</span>
            <span class="lang-bm hidden">Diberi ξ = {1,2,3,4,5,6,7,8,9,10}, A = {1,2,3}, B = {3,4,5}, C = {5,6,7,8}. Cari (A ∪ B)' ∩ C.</span>
        </p>
        <button id="btn-sol3" onclick="toggleSolution('sol3')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol3" class="hidden mt-4 space-y-3">
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 1:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 1:</span>
                <div>
                    <span class="lang-en">Work inside brackets — find <strong>A ∪ B</strong>:</span>
                    <span class="lang-bm hidden">Kerjakan dalam kurungan — cari <strong>A ∪ B</strong>:</span>
                    <p class="font-mono text-sm mt-1">A ∪ B = {1, 2, 3, 4, 5}</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <div>
                    <span class="lang-en">Find <strong>(A ∪ B)'</strong> — elements in ξ NOT in {1,2,3,4,5}:</span>
                    <span class="lang-bm hidden">Cari <strong>(A ∪ B)'</strong> — elemen dalam ξ yang TIDAK dalam {1,2,3,4,5}:</span>
                    <p class="font-mono text-sm mt-1">(A ∪ B)' = {6, 7, 8, 9, 10}</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 3:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 3:</span>
                <div>
                    <span class="lang-en">Find <strong>(A ∪ B)' ∩ C</strong> — elements common to {6,7,8,9,10} and {5,6,7,8}:</span>
                    <span class="lang-bm hidden">Cari <strong>(A ∪ B)' ∩ C</strong> — elemen sepunya antara {6,7,8,9,10} dan {5,6,7,8}:</span>
                    <p class="font-mono text-sm mt-1">(A ∪ B)' ∩ C = {6, 7, 8}</p>
                </div>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-semibold text-teal-700 lang-en">∴ (A ∪ B)' ∩ C = {6, 7, 8}</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">∴ (A ∪ B)' ∩ C = {6, 7, 8}</p>
            </div>
        </div>
    </div>
</div>

{{-- 4. Common Mistakes --}}
<div class="bg-rose-50 border border-rose-100 rounded-2xl p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-rose-700 mb-4">
        <span class="lang-en">⚠️ Common Mistakes to Avoid</span>
        <span class="lang-bm hidden">⚠️ Kesilapan Lazim yang Perlu Dielakkan</span>
    </h4>
    <div class="space-y-3">
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Writing repeated elements in union</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Menulis elemen berulang dalam kesatuan</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">If 4 appears in both P and Q, write it ONCE only in P ∪ Q. Never write {1,2,3,4,4,5,6,7}.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Jika 4 muncul dalam kedua-dua P dan Q, tulis SEKALI sahaja dalam P ∪ Q. Jangan tulis {1,2,3,4,4,5,6,7}.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Confusing ∩ and ∪</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Keliru antara ∩ dan ∪</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">∩ (intersection) = only common elements. ∪ (union) = all elements. Memory tip: ∪ looks like a cup that holds EVERYTHING!</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">∩ (persilangan) = hanya elemen sepunya. ∪ (kesatuan) = semua elemen. Tips ingatan: ∪ kelihatan seperti cawan yang menampung SEMUA!</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Forgetting to work inside brackets first</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Terlupa kerjakan dalam kurungan dahulu</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">For (P ∪ Q) ∩ R, always find P ∪ Q FIRST, then intersect with R. Never do it in the wrong order.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Untuk (P ∪ Q) ∩ R, sentiasa cari P ∪ Q DAHULU, kemudian silangkan dengan R. Jangan lakukan dalam urutan yang salah.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Including elements outside ξ in complement</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Memasukkan elemen di luar ξ dalam pelengkap</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">Complement A' only contains elements from ξ. If ξ = {1..10} and A = {1,2,3}, then A' = {4,5,6,7,8,9,10} only — not any other numbers.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Pelengkap A' hanya mengandungi elemen dari ξ. Jika ξ = {1..10} dan A = {1,2,3}, maka A' = {4,5,6,7,8,9,10} sahaja — bukan nombor lain.</p>
            </div>
        </div>
    </div>
</div>

{{-- 5. Quick Check --}}
<div class="bg-white border border-slate-100 rounded-2xl p-6 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">
        <span class="lang-en">⚡ Quick Check</span>
        <span class="lang-bm hidden">⚡ Semakan Pantas</span>
    </h4>
    <div class="space-y-6">

        {{-- Q1 --}}
        <div class="p-4 bg-slate-50 rounded-xl">
            <p class="text-sm font-semibold text-slate-800 mb-3">
                <span class="lang-en">1. P = {2,4,6,8} and Q = {4,6,9}. What is P ∩ Q?</span>
                <span class="lang-bm hidden">1. P = {2,4,6,8} dan Q = {4,6,9}. Apakah P ∩ Q?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => '{2,4,6,8,9}', 'bm' => '{2,4,6,8,9}'],
                    'B' => ['en' => '{4,6}', 'bm' => '{4,6}'],
                    'C' => ['en' => '{2,8,9}', 'bm' => '{2,8,9}'],
                    'D' => ['en' => '{}', 'bm' => '{}'],
                ] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc1" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-slate-700">{{ $key }}. <span class="lang-en">{{ $opts['en'] }}</span><span class="lang-bm hidden">{{ $opts['bm'] }}</span></span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc1', 'B')"
                class="text-xs font-semibold bg-teal-500 text-white px-4 py-1.5 rounded-lg hover:bg-teal-600 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc1" class="hidden text-xs mt-2"></p>
            <div id="hint-qc1" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: P ∩ Q = elements in BOTH sets. Which elements appear in both P and Q?</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: P ∩ Q = elemen dalam KEDUA-DUA set. Elemen mana yang muncul dalam kedua-dua P dan Q?</p>
            </div>
        </div>

        {{-- Q2 --}}
        <div class="p-4 bg-slate-50 rounded-xl">
            <p class="text-sm font-semibold text-slate-800 mb-3">
                <span class="lang-en">2. n(P) = 8, n(Q) = 6, n(P ∩ Q) = 3. What is n(P ∪ Q)?</span>
                <span class="lang-bm hidden">2. n(P) = 8, n(Q) = 6, n(P ∩ Q) = 3. Apakah n(P ∪ Q)?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => '17', 'bm' => '17'],
                    'B' => ['en' => '14', 'bm' => '14'],
                    'C' => ['en' => '11', 'bm' => '11'],
                    'D' => ['en' => '5', 'bm' => '5'],
                ] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc2" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-slate-700">{{ $key }}. <span class="lang-en">{{ $opts['en'] }}</span><span class="lang-bm hidden">{{ $opts['bm'] }}</span></span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc2', 'C')"
                class="text-xs font-semibold bg-teal-500 text-white px-4 py-1.5 rounded-lg hover:bg-teal-600 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc2" class="hidden text-xs mt-2"></p>
            <div id="hint-qc2" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: n(P ∪ Q) = n(P) + n(Q) − n(P ∩ Q) = 8 + 6 − 3 = ?</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: n(P ∪ Q) = n(P) + n(Q) − n(P ∩ Q) = 8 + 6 − 3 = ?</p>
            </div>
        </div>

        {{-- Q3 --}}
        <div class="p-4 bg-slate-50 rounded-xl">
            <p class="text-sm font-semibold text-slate-800 mb-3">
                <span class="lang-en">3. ξ = {1,2,3,4,5,6,7,8}, A = {1,2,3,4}, B = {3,4,5,6}. What is (A ∪ B)'?</span>
                <span class="lang-bm hidden">3. ξ = {1,2,3,4,5,6,7,8}, A = {1,2,3,4}, B = {3,4,5,6}. Apakah (A ∪ B)'?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => '{1,2,3,4,5,6}', 'bm' => '{1,2,3,4,5,6}'],
                    'B' => ['en' => '{3,4}', 'bm' => '{3,4}'],
                    'C' => ['en' => '{7,8}', 'bm' => '{7,8}'],
                    'D' => ['en' => '{1,2,5,6,7,8}', 'bm' => '{1,2,5,6,7,8}'],
                ] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc3" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-slate-700">{{ $key }}. <span class="lang-en">{{ $opts['en'] }}</span><span class="lang-bm hidden">{{ $opts['bm'] }}</span></span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc3', 'C')"
                class="text-xs font-semibold bg-teal-500 text-white px-4 py-1.5 rounded-lg hover:bg-teal-600 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc3" class="hidden text-xs mt-2"></p>
            <div id="hint-qc3" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: First find A ∪ B = {1,2,3,4,5,6}. Then (A ∪ B)' = elements in ξ NOT in {1,2,3,4,5,6}.</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Cari dahulu A ∪ B = {1,2,3,4,5,6}. Kemudian (A ∪ B)' = elemen dalam ξ yang TIDAK dalam {1,2,3,4,5,6}.</p>
            </div>
        </div>

    </div>
</div>