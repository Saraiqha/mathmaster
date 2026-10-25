{{-- ═══════════════════════════════════════════════
     TOPIC 2: NUMBER BASES
     Aligned to KSSM Form 4 KPM Textbook Chapter 2
     Self-contained — student does not need textbook
     ═══════════════════════════════════════════════ --}}

{{-- 1. Learning Objectives --}}
<div class="bg-white rounded-2xl border border-slate-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">
        <span class="lang-en">🎯 Learning Objectives</span>
        <span class="lang-bm hidden">🎯 Objektif Pembelajaran</span>
    </h4>
    <ul class="space-y-2 lang-en">
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Convert numbers from base 10 to another base and vice versa</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Convert numbers between base 2 and base 8 directly</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Perform addition of numbers in base 2 using vertical form</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Perform subtraction of numbers in base 7 using vertical form</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Solve problems involving conversion of base during computation</li>
    </ul>
    <ul class="space-y-2 lang-bm hidden">
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Menukar nombor dari asas 10 ke asas lain dan sebaliknya</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Menukar nombor antara asas 2 dan asas 8 secara terus</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Melakukan penambahan nombor dalam asas 2 menggunakan bentuk menegak</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Melakukan penolakan nombor dalam asas 7 menggunakan bentuk menegak</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Menyelesaikan masalah melibatkan penukaran asas semasa pengiraan</li>
    </ul>
</div>

{{-- 2. Key Concepts --}}
<div class="bg-white rounded-2xl border border-slate-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">
        <span class="lang-en">📐 Key Concepts and Formulas</span>
        <span class="lang-bm hidden">📐 Konsep Utama dan Rumus</span>
    </h4>

    {{-- Part A: Conversion of Base --}}
    <div class="mb-6">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">A. Conversion of Base — Base 10 to Another Base and Vice Versa</span>
                <span class="lang-bm hidden">A. Penukaran Asas — Asas 10 ke Asas Lain dan Sebaliknya</span>
            </p>
        </div>

        {{-- Place Value Table --}}
        <p class="text-xs font-bold text-slate-600 mb-2">
            <span class="lang-en">📌 Understanding Place Values</span>
            <span class="lang-bm hidden">📌 Memahami Nilai Tempat</span>
        </p>
        <div class="overflow-x-auto mb-4">
            <table class="w-full text-xs border-collapse">
                <thead>
                    <tr class="bg-teal-500 text-white">
                        <td class="p-2 font-bold border border-teal-400 lang-en">Base</td>
                        <td class="p-2 font-bold border border-teal-400 lang-bm hidden">Asas</td>
                        <td class="p-2 font-bold border border-teal-400 text-center" colspan="6">
                            <span class="lang-en">Place Values (right to left)</span>
                            <span class="lang-bm hidden">Nilai Tempat (kanan ke kiri)</span>
                        </td>
                        <td class="p-2 font-bold border border-teal-400 text-center">
                            <span class="lang-en">Digits allowed</span>
                            <span class="lang-bm hidden">Digit dibenarkan</span>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-teal-50">
                        <td class="p-2 font-bold text-teal-700 border border-teal-100">Base 2</td>
                        <td class="p-2 text-center border border-teal-100 font-mono">2⁵=32</td>
                        <td class="p-2 text-center border border-teal-100 font-mono">2⁴=16</td>
                        <td class="p-2 text-center border border-teal-100 font-mono">2³=8</td>
                        <td class="p-2 text-center border border-teal-100 font-mono">2²=4</td>
                        <td class="p-2 text-center border border-teal-100 font-mono">2¹=2</td>
                        <td class="p-2 text-center border border-teal-100 font-mono">2⁰=1</td>
                        <td class="p-2 text-center border border-teal-100 font-bold text-teal-600">0, 1</td>
                    </tr>
                    <tr class="bg-sky-50">
                        <td class="p-2 font-bold text-sky-700 border border-sky-100">Base 6</td>
                        <td class="p-2 text-center border border-sky-100 font-mono">6³=216</td>
                        <td class="p-2 text-center border border-sky-100 font-mono">-</td>
                        <td class="p-2 text-center border border-sky-100 font-mono">-</td>
                        <td class="p-2 text-center border border-sky-100 font-mono">6²=36</td>
                        <td class="p-2 text-center border border-sky-100 font-mono">6¹=6</td>
                        <td class="p-2 text-center border border-sky-100 font-mono">6⁰=1</td>
                        <td class="p-2 text-center border border-sky-100 font-bold text-sky-600">0–5</td>
                    </tr>
                    <tr class="bg-violet-50">
                        <td class="p-2 font-bold text-violet-700 border border-violet-100">Base 8</td>
                        <td class="p-2 text-center border border-violet-100 font-mono">8³=512</td>
                        <td class="p-2 text-center border border-violet-100 font-mono">-</td>
                        <td class="p-2 text-center border border-violet-100 font-mono">-</td>
                        <td class="p-2 text-center border border-violet-100 font-mono">8²=64</td>
                        <td class="p-2 text-center border border-violet-100 font-mono">8¹=8</td>
                        <td class="p-2 text-center border border-violet-100 font-mono">8⁰=1</td>
                        <td class="p-2 text-center border border-violet-100 font-bold text-violet-600">0–7</td>
                    </tr>
                    <tr class="bg-amber-50">
                        <td class="p-2 font-bold text-amber-700 border border-amber-100">Base 9</td>
                        <td class="p-2 text-center border border-amber-100 font-mono">9³=729</td>
                        <td class="p-2 text-center border border-amber-100 font-mono">-</td>
                        <td class="p-2 text-center border border-amber-100 font-mono">-</td>
                        <td class="p-2 text-center border border-amber-100 font-mono">9²=81</td>
                        <td class="p-2 text-center border border-amber-100 font-mono">9¹=9</td>
                        <td class="p-2 text-center border border-amber-100 font-mono">9⁰=1</td>
                        <td class="p-2 text-center border border-amber-100 font-bold text-amber-600">0–8</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Textbook example: 253₆ --}}
        <p class="text-xs font-bold text-slate-600 mb-2">
            <span class="lang-en">📌 Converting from another base to base 10 — multiply each digit by its place value</span>
            <span class="lang-bm hidden">📌 Menukar dari asas lain ke asas 10 — darab setiap digit dengan nilai tempatnya</span>
        </p>
        <div class="bg-teal-50 rounded-xl border border-teal-100 p-4 mb-4">
            <p class="text-xs font-bold text-teal-700 mb-2 lang-en">Example: Convert 253₆ to base 10</p>
            <p class="text-xs font-bold text-teal-700 mb-2 lang-bm hidden">Contoh: Tukar 253₆ kepada asas 10</p>
            <div class="overflow-x-auto">
                <table class="text-xs border-collapse w-full">
                    <tr class="bg-teal-100">
                        <td class="p-2 border border-teal-200 font-bold lang-en">Place value</td>
                        <td class="p-2 border border-teal-200 font-bold lang-bm hidden">Nilai tempat</td>
                        <td class="p-2 border border-teal-200 text-center font-mono">6²</td>
                        <td class="p-2 border border-teal-200 text-center font-mono">6¹</td>
                        <td class="p-2 border border-teal-200 text-center font-mono">6⁰</td>
                    </tr>
                    <tr>
                        <td class="p-2 border border-teal-200 font-bold lang-en">Number in base 6</td>
                        <td class="p-2 border border-teal-200 font-bold lang-bm hidden">Nombor dalam asas 6</td>
                        <td class="p-2 border border-teal-200 text-center font-mono font-bold">2</td>
                        <td class="p-2 border border-teal-200 text-center font-mono font-bold">5</td>
                        <td class="p-2 border border-teal-200 text-center font-mono font-bold">3</td>
                    </tr>
                    <tr class="bg-teal-50">
                        <td class="p-2 border border-teal-200 font-bold lang-en">Value in base 10</td>
                        <td class="p-2 border border-teal-200 font-bold lang-bm hidden">Nilai dalam asas 10</td>
                        <td class="p-2 border border-teal-200 text-center font-mono">2×36=72</td>
                        <td class="p-2 border border-teal-200 text-center font-mono">5×6=30</td>
                        <td class="p-2 border border-teal-200 text-center font-mono">3×1=3</td>
                    </tr>
                </table>
            </div>
            <p class="text-sm font-mono font-bold text-teal-800 mt-3">72 + 30 + 3 = <span class="text-teal-600">105₁₀</span></p>
        </div>

        {{-- Converting FROM base 10 --}}
        <p class="text-xs font-bold text-slate-600 mb-2">
            <span class="lang-en">📌 Converting from base 10 to another base — divide repeatedly, read remainders upward</span>
            <span class="lang-bm hidden">📌 Menukar dari asas 10 ke asas lain — bahagi berulang, baca baki ke atas</span>
        </p>
        <div class="bg-sky-50 rounded-xl border border-sky-100 p-4 mb-4">
            <p class="text-xs font-bold text-sky-700 mb-3 lang-en">Example: Convert 105₁₀ to base 9</p>
            <p class="text-xs font-bold text-sky-700 mb-3 lang-bm hidden">Contoh: Tukar 105₁₀ kepada asas 9</p>
            <div class="font-mono text-sm space-y-1 text-slate-700">
                <div class="flex items-center gap-2">
                    <span class="text-sky-600 font-bold w-4">9</span>
                    <span class="border-l-2 border-slate-400 pl-2">105</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sky-600 font-bold w-4">9</span>
                    <span class="border-l-2 border-slate-400 pl-2">11 <span class="text-rose-500 font-bold">— 6</span></span>
                    <span class="text-xs text-slate-400 lang-en">← remainder 6 (read last)</span>
                    <span class="text-xs text-slate-400 lang-bm hidden">← baki 6 (baca terakhir)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sky-600 font-bold w-4">9</span>
                    <span class="border-l-2 border-slate-400 pl-2">1 <span class="text-rose-500 font-bold">— 2</span></span>
                    <span class="text-xs text-slate-400 lang-en">← remainder 2</span>
                    <span class="text-xs text-slate-400 lang-bm hidden">← baki 2</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-4"></span>
                    <span class="border-l-2 border-slate-400 pl-2">0 <span class="text-rose-500 font-bold">— 1</span></span>
                    <span class="text-xs text-slate-400 lang-en">← remainder 1 (read first)</span>
                    <span class="text-xs text-slate-400 lang-bm hidden">← baki 1 (baca pertama)</span>
                </div>
            </div>
            <div class="mt-3 flex items-center gap-2">
                <span class="text-xs text-slate-500 lang-en">Read remainders upward ↑</span>
                <span class="text-xs text-slate-500 lang-bm hidden">Baca baki ke atas ↑</span>
                <span class="text-sm font-mono font-bold text-sky-700">= 126₉</span>
            </div>
            <div class="mt-2 p-2 bg-white rounded-lg">
                <p class="text-xs font-semibold text-teal-700">∴ 253₆ = 105₁₀ = 126₉</p>
            </div>
        </div>
    </div>

    {{-- Part B: Base 2 to Base 8 --}}
    <div class="mb-6">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-violet-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">B. Converting between Base 2 and Base 8</span>
                <span class="lang-bm hidden">B. Menukar antara Asas 2 dan Asas 8</span>
            </p>
        </div>

        <div class="bg-violet-50 rounded-xl border border-violet-100 p-4 mb-4">
            <p class="text-xs font-bold text-violet-700 mb-3 lang-en">📌 Key idea: Each group of 3 binary digits = 1 octal digit</p>
            <p class="text-xs font-bold text-violet-700 mb-3 lang-bm hidden">📌 Idea utama: Setiap kumpulan 3 digit binari = 1 digit oktal</p>
            <div class="overflow-x-auto">
                <table class="text-xs border-collapse w-full">
                    <thead>
                        <tr class="bg-violet-200">
                            <td class="p-2 border border-violet-200 font-bold text-center lang-en">Base 8 digit</td>
                            <td class="p-2 border border-violet-200 font-bold text-center lang-bm hidden">Digit asas 8</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">0</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">1</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">2</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">3</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">4</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">5</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">6</td>
                            <td class="p-2 border border-violet-200 font-bold text-center">7</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="p-2 border border-violet-100 font-bold text-center lang-en">3-digit binary</td>
                            <td class="p-2 border border-violet-100 font-bold text-center lang-bm hidden">Binari 3 digit</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">000</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">001</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">010</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">011</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">100</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">101</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">110</td>
                            <td class="p-2 border border-violet-100 text-center font-mono">111</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{-- Base 2 to Base 8 --}}
            <div class="p-4 bg-violet-50 rounded-xl border border-violet-100">
                <p class="text-xs font-bold text-violet-700 mb-3 lang-en">Base 2 → Base 8: Group digits in 3s from RIGHT</p>
                <p class="text-xs font-bold text-violet-700 mb-3 lang-bm hidden">Asas 2 → Asas 8: Kumpulkan digit dalam 3 dari KANAN</p>
                <div class="font-mono text-sm text-slate-700 space-y-1">
                    <p>110111₂</p>
                    <p class="text-violet-600">↓ <span class="lang-en">group in 3s</span><span class="lang-bm hidden">kumpul dalam 3</span></p>
                    <p><span class="bg-violet-100 px-1 rounded">110</span> | <span class="bg-violet-200 px-1 rounded">111</span></p>
                    <p class="text-violet-600">↓ <span class="lang-en">convert each group</span><span class="lang-bm hidden">tukar setiap kumpulan</span></p>
                    <p><span class="bg-violet-100 px-1 rounded">6</span> | <span class="bg-violet-200 px-1 rounded">7</span></p>
                    <p class="font-bold text-violet-700 mt-2">= 67₈</p>
                </div>
                <p class="text-xs text-slate-500 mt-2 lang-en">💡 If digits don't group evenly, add leading zeros to the left.</p>
                <p class="text-xs text-slate-500 mt-2 lang-bm hidden">💡 Jika digit tidak berkelompok sama rata, tambah sifar pendahuluan di sebelah kiri.</p>
            </div>

            {{-- Base 8 to Base 2 --}}
            <div class="p-4 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-700 mb-3 lang-en">Base 8 → Base 2: Convert each digit to 3-digit binary</p>
                <p class="text-xs font-bold text-teal-700 mb-3 lang-bm hidden">Asas 8 → Asas 2: Tukar setiap digit kepada binari 3 digit</p>
                <div class="font-mono text-sm text-slate-700 space-y-1">
                    <p>517₈</p>
                    <p class="text-teal-600">↓ <span class="lang-en">convert each digit</span><span class="lang-bm hidden">tukar setiap digit</span></p>
                    <p><span class="bg-teal-100 px-1 rounded">5→101</span> <span class="bg-teal-200 px-1 rounded">1→001</span> <span class="bg-teal-100 px-1 rounded">7→111</span></p>
                    <p class="text-teal-600">↓ <span class="lang-en">join together</span><span class="lang-bm hidden">cantumkan</span></p>
                    <p class="font-bold text-teal-700 mt-2">= 101001111₂</p>
                </div>
                <p class="text-xs text-slate-500 mt-2 lang-en">💡 Always use exactly 3 digits for each octal digit. 1 = 001, not just 1.</p>
                <p class="text-xs text-slate-500 mt-2 lang-bm hidden">💡 Sentiasa guna tepat 3 digit untuk setiap digit oktal. 1 = 001, bukan hanya 1.</p>
            </div>
        </div>
    </div>

    {{-- Part C: Addition and Subtraction --}}
    <div>
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-rose-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">C. Computation — Addition and Subtraction (Vertical Form)</span>
                <span class="lang-bm hidden">C. Pengiraan — Penambahan dan Penolakan (Bentuk Menegak)</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            {{-- Addition rules --}}
            <div class="p-4 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-700 mb-3 lang-en">Binary Addition Rules (Base 2)</p>
                <p class="text-xs font-bold text-teal-700 mb-3 lang-bm hidden">Peraturan Penambahan Binari (Asas 2)</p>
                <div class="space-y-1 font-mono text-sm">
                    <div class="flex items-center gap-3">
                        <span class="text-slate-700">0 + 0 = <strong>0</strong></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-slate-700">0 + 1 = <strong>1</strong></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-slate-700">1 + 0 = <strong>1</strong></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-slate-700">1 + 1 = <strong>10</strong></span>
                        <span class="text-xs text-teal-600 lang-en">(write 0, carry 1)</span>
                        <span class="text-xs text-teal-600 lang-bm hidden">(tulis 0, bawa 1)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-slate-700">1 + 1 + 1 = <strong>11</strong></span>
                        <span class="text-xs text-teal-600 lang-en">(write 1, carry 1)</span>
                        <span class="text-xs text-teal-600 lang-bm hidden">(tulis 1, bawa 1)</span>
                    </div>
                </div>
                <div class="mt-3 p-3 bg-white rounded-lg border border-teal-100">
                    <p class="text-xs font-bold text-slate-600 mb-2 lang-en">Example: 110₂ + 111₂</p>
                    <p class="text-xs font-bold text-slate-600 mb-2 lang-bm hidden">Contoh: 110₂ + 111₂</p>
                    <div class="font-mono text-sm text-slate-700">
                        <p class="text-xs text-rose-500 ml-4 lang-en">carry: 1 1</p>
                        <p class="text-xs text-rose-500 ml-4 lang-bm hidden">bawa: 1 1</p>
                        <p>&nbsp;&nbsp;1 1 0</p>
                        <p>+ 1 1 1</p>
                        <p class="border-t border-slate-300 mt-1 pt-1 font-bold text-teal-700">1 1 0 1</p>
                    </div>
                    <p class="text-xs text-teal-600 mt-2">110₂ + 111₂ = 1101₂</p>
                </div>
            </div>

            {{-- Subtraction rules --}}
            <div class="p-4 bg-rose-50 rounded-xl border border-rose-100">
                <p class="text-xs font-bold text-rose-700 mb-3 lang-en">Subtraction in Base 7 — Borrowing</p>
                <p class="text-xs font-bold text-rose-700 mb-3 lang-bm hidden">Penolakan dalam Asas 7 — Peminjaman</p>
                <p class="text-xs text-slate-600 mb-3 lang-en">When you cannot subtract, borrow from the next column. In base 7, borrowing adds <strong>7</strong> to current digit.</p>
                <p class="text-xs text-slate-600 mb-3 lang-bm hidden">Apabila anda tidak boleh menolak, pinjam dari lajur seterusnya. Dalam asas 7, peminjaman menambah <strong>7</strong> kepada digit semasa.</p>
                <div class="p-3 bg-white rounded-lg border border-rose-100">
                    <p class="text-xs font-bold text-slate-600 mb-2 lang-en">Example: 6241₇ - 613₇</p>
                    <p class="text-xs font-bold text-slate-600 mb-2 lang-bm hidden">Contoh: 6241₇ - 613₇</p>
                    <div class="font-mono text-sm text-slate-700">
                        <p class="text-xs text-rose-500 lang-en">borrow: &nbsp;5 7 3 7</p>
                        <p class="text-xs text-rose-500 lang-bm hidden">pinjam: 5 7 3 7</p>
                        <p>&nbsp;6 2 4 1</p>
                        <p>- &nbsp;6 1 3</p>
                        <p class="border-t border-slate-300 mt-1 pt-1 font-bold text-rose-700">5 3 2 5</p>
                    </div>
                    <p class="text-xs text-rose-600 mt-2">6241₇ - 613₇ = 5325₇</p>
                    <div class="mt-2 space-y-1 text-xs text-slate-500">
                        <p class="lang-en">• Col 1: 1-3 can't, borrow → 1+7=8, 8-3=<strong>5</strong></p>
                        <p class="lang-bm hidden">• Lajur 1: 1-3 tak boleh, pinjam → 1+7=8, 8-3=<strong>5</strong></p>
                        <p class="lang-en">• Col 2: 4-1(borrow)-1=<strong>2</strong></p>
                        <p class="lang-bm hidden">• Lajur 2: 4-1(pinjam)-1=<strong>2</strong></p>
                        <p class="lang-en">• Col 3: 2-6 can't, borrow → 2+7=9, 9-6=<strong>3</strong></p>
                        <p class="lang-bm hidden">• Lajur 3: 2-6 tak boleh, pinjam → 2+7=9, 9-6=<strong>3</strong></p>
                        <p class="lang-en">• Col 4: 6-1(borrow)=<strong>5</strong></p>
                        <p class="lang-bm hidden">• Lajur 4: 6-1(pinjam)=<strong>5</strong></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Conversion during computation --}}
        <div class="p-4 bg-amber-50 rounded-xl border border-amber-100">
            <p class="text-xs font-bold text-amber-700 mb-3 lang-en">📌 Conversion of Base during Computation</p>
            <p class="text-xs font-bold text-amber-700 mb-3 lang-bm hidden">📌 Penukaran Asas semasa Pengiraan</p>
            <p class="text-xs text-slate-600 mb-3 lang-en">Sometimes you add in one base, convert to another, then subtract. Follow the order of operations carefully.</p>
            <p class="text-xs text-slate-600 mb-3 lang-bm hidden">Kadangkala anda menambah dalam satu asas, tukar ke asas lain, kemudian tolak. Ikut urutan operasi dengan teliti.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="p-3 bg-white rounded-lg border border-amber-100">
                    <p class="text-xs font-bold text-amber-600 mb-2 lang-en">Step 1: Add in base 2</p>
                    <p class="text-xs font-bold text-amber-600 mb-2 lang-bm hidden">Langkah 1: Tambah dalam asas 2</p>
                    <p class="font-mono text-xs">110₂ + 111₂ = 1101₂</p>
                    <p class="text-xs text-slate-500 mt-1 lang-en">Convert to base 10: = 13₁₀</p>
                    <p class="text-xs text-slate-500 mt-1 lang-bm hidden">Tukar ke asas 10: = 13₁₀</p>
                </div>
                <div class="p-3 bg-white rounded-lg border border-amber-100">
                    <p class="text-xs font-bold text-amber-600 mb-2 lang-en">Step 2: Subtract in base 7</p>
                    <p class="text-xs font-bold text-amber-600 mb-2 lang-bm hidden">Langkah 2: Tolak dalam asas 7</p>
                    <p class="font-mono text-xs">6241₇ - 613₇ = 5325₇</p>
                    <p class="text-xs text-slate-500 mt-1 lang-en">Convert to base 10 to verify</p>
                    <p class="text-xs text-slate-500 mt-1 lang-bm hidden">Tukar ke asas 10 untuk sahkan</p>
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
            <span class="lang-en">Example 1 — Convert base 6 to base 10 then to base 9</span>
            <span class="lang-bm hidden">Contoh 1 — Tukar asas 6 ke asas 10 kemudian ke asas 9</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Convert 253₆ to base 9.</span>
            <span class="lang-bm hidden">Tukar 253₆ kepada asas 9.</span>
        </p>
        <button id="btn-sol1" onclick="toggleSolution('sol1')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol1" class="hidden mt-4 space-y-3">
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-600 mb-2 lang-en">Part 1: Convert 253₆ → Base 10</p>
                <p class="text-xs font-bold text-teal-600 mb-2 lang-bm hidden">Bahagian 1: Tukar 253₆ → Asas 10</p>
                <p class="text-sm font-mono text-slate-700">(2 × 6²) + (5 × 6¹) + (3 × 6⁰)</p>
                <p class="text-sm font-mono text-slate-700 pl-4">= (2 × 36) + (5 × 6) + (3 × 1)</p>
                <p class="text-sm font-mono text-slate-700 pl-4">= 72 + 30 + 3</p>
                <p class="text-sm font-mono font-bold text-teal-700 pl-4">= 105₁₀</p>
            </div>
            <div class="p-3 bg-sky-50 rounded-xl border border-sky-100">
                <p class="text-xs font-bold text-sky-600 mb-2 lang-en">Part 2: Convert 105₁₀ → Base 9 (divide repeatedly)</p>
                <p class="text-xs font-bold text-sky-600 mb-2 lang-bm hidden">Bahagian 2: Tukar 105₁₀ → Asas 9 (bahagi berulang)</p>
                <div class="font-mono text-sm text-slate-700 space-y-1">
                    <p>9 | 105</p>
                    <p>9 | 11 <span class="text-rose-500 font-bold">— R6</span></p>
                    <p>9 | &nbsp;1 <span class="text-rose-500 font-bold">— R2</span></p>
                    <p>&nbsp;&nbsp;&nbsp;0 <span class="text-rose-500 font-bold">— R1</span></p>
                </div>
                <p class="text-xs text-slate-500 mt-2 lang-en">Read remainders upward ↑: 1, 2, 6</p>
                <p class="text-xs text-slate-500 mt-2 lang-bm hidden">Baca baki ke atas ↑: 1, 2, 6</p>
                <p class="text-sm font-mono font-bold text-sky-700 mt-1">= 126₉</p>
            </div>
            <div class="p-3 bg-white rounded-xl border border-slate-200">
                <p class="text-xs font-semibold text-teal-700 lang-en">∴ 253₆ = 105₁₀ = 126₉</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">∴ 253₆ = 105₁₀ = 126₉</p>
            </div>
        </div>
    </div>

    {{-- Example 2 --}}
    <div class="mb-5 p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 2 — Convert base 2 to base 8 directly</span>
            <span class="lang-bm hidden">Contoh 2 — Tukar asas 2 ke asas 8 secara terus</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Convert 110111₂ to base 8.</span>
            <span class="lang-bm hidden">Tukar 110111₂ kepada asas 8.</span>
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
                <span class="lang-en">Group binary digits in 3s from RIGHT: <span class="font-mono bg-violet-100 px-1 rounded">110</span> | <span class="font-mono bg-violet-200 px-1 rounded">111</span></span>
                <span class="lang-bm hidden">Kumpulkan digit binari dalam 3 dari KANAN: <span class="font-mono bg-violet-100 px-1 rounded">110</span> | <span class="font-mono bg-violet-200 px-1 rounded">111</span></span>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <div>
                    <span class="lang-en">Convert each group to base 8:</span>
                    <span class="lang-bm hidden">Tukar setiap kumpulan ke asas 8:</span>
                    <p class="font-mono text-sm mt-1"><span class="bg-violet-100 px-1 rounded">110</span> = 4+2+0 = <strong>6</strong></p>
                    <p class="font-mono text-sm mt-1"><span class="bg-violet-200 px-1 rounded">111</span> = 4+2+1 = <strong>7</strong></p>
                </div>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-semibold text-teal-700 lang-en">∴ 110111₂ = 67₈</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">∴ 110111₂ = 67₈</p>
            </div>
        </div>
    </div>

    {{-- Example 3 --}}
    <div class="mb-5 p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 3 — Binary Addition (Vertical Form)</span>
            <span class="lang-bm hidden">Contoh 3 — Penambahan Binari (Bentuk Menegak)</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Calculate 110₂ + 111₂.</span>
            <span class="lang-bm hidden">Hitung 110₂ + 111₂.</span>
        </p>
        <button id="btn-sol3" onclick="toggleSolution('sol3')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol3" class="hidden mt-4 space-y-3">
            <div class="p-4 bg-slate-50 rounded-xl font-mono text-sm">
                <p class="text-xs text-rose-500 mb-1 lang-en">carry →&nbsp;&nbsp; 1 1</p>
                <p class="text-xs text-rose-500 mb-1 lang-bm hidden">bawa →&nbsp;&nbsp; 1 1</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;1 1 0</p>
                <p>+&nbsp;&nbsp; 1 1 1</p>
                <p class="border-t-2 border-slate-400 pt-1 font-bold text-teal-700">1 1 0 1</p>
            </div>
            <div class="space-y-2 text-xs text-slate-600">
                <p class="lang-en">• Rightmost: 0+1 = <strong>1</strong></p>
                <p class="lang-bm hidden">• Paling kanan: 0+1 = <strong>1</strong></p>
                <p class="lang-en">• Next: 1+1 = 10, write <strong>0</strong>, carry 1</p>
                <p class="lang-bm hidden">• Seterusnya: 1+1 = 10, tulis <strong>0</strong>, bawa 1</p>
                <p class="lang-en">• Next: 1+1+1(carry) = 11, write <strong>1</strong>, carry 1</p>
                <p class="lang-bm hidden">• Seterusnya: 1+1+1(bawa) = 11, tulis <strong>1</strong>, bawa 1</p>
                <p class="lang-en">• Leftmost: 0+0+1(carry) = <strong>1</strong></p>
                <p class="lang-bm hidden">• Paling kiri: 0+0+1(bawa) = <strong>1</strong></p>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-semibold text-teal-700">∴ 110₂ + 111₂ = 1101₂</p>
            </div>
        </div>
    </div>

    {{-- Example 4 --}}
    <div class="p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 4 — Subtraction in Base 7</span>
            <span class="lang-bm hidden">Contoh 4 — Penolakan dalam Asas 7</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Calculate 6241₇ − 613₇.</span>
            <span class="lang-bm hidden">Hitung 6241₇ − 613₇.</span>
        </p>
        <button id="btn-sol4" onclick="toggleSolution('sol4')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol4" class="hidden mt-4 space-y-3">
            <div class="p-4 bg-slate-50 rounded-xl font-mono text-sm">
                <p class="text-xs text-rose-500 mb-1 lang-en">borrow →&nbsp; 5 7 3 7</p>
                <p class="text-xs text-rose-500 mb-1 lang-bm hidden">pinjam → 5 7 3 7</p>
                <p>&nbsp;6 2 4 1</p>
                <p>-&nbsp;&nbsp; 6 1 3</p>
                <p class="border-t-2 border-slate-400 pt-1 font-bold text-rose-700">5 3 2 5</p>
            </div>
            <div class="space-y-2 text-xs text-slate-600">
                <p class="lang-en">• Col 1 (rightmost): 1−3 can't → borrow, 1+7=8, 8−3 = <strong>5</strong></p>
                <p class="lang-bm hidden">• Lajur 1 (paling kanan): 1−3 tak boleh → pinjam, 1+7=8, 8−3 = <strong>5</strong></p>
                <p class="lang-en">• Col 2: 4−1(borrow)−1 = <strong>2</strong></p>
                <p class="lang-bm hidden">• Lajur 2: 4−1(pinjam)−1 = <strong>2</strong></p>
                <p class="lang-en">• Col 3: 2−6 can't → borrow, 2+7=9, 9−6 = <strong>3</strong></p>
                <p class="lang-bm hidden">• Lajur 3: 2−6 tak boleh → pinjam, 2+7=9, 9−6 = <strong>3</strong></p>
                <p class="lang-en">• Col 4: 6−1(borrow) = <strong>5</strong></p>
                <p class="lang-bm hidden">• Lajur 4: 6−1(pinjam) = <strong>5</strong></p>
            </div>
            <div class="p-3 bg-rose-50 rounded-xl border border-rose-100">
                <p class="text-xs font-semibold text-rose-700">∴ 6241₇ − 613₇ = 5325₇</p>
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
                <p class="text-sm font-semibold text-slate-700 lang-en">Reading remainders from top to bottom</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Membaca baki dari atas ke bawah</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">Always read from BOTTOM to TOP ↑. The last remainder is the most significant digit.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Sentiasa baca dari BAWAH ke ATAS ↑. Baki terakhir adalah digit paling bererti.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Using invalid digits for a base</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Menggunakan digit tidak sah untuk sesebuah asas</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">Base 2: only 0,1 | Base 6: only 0-5 | Base 7: only 0-6 | Base 8: only 0-7. If you get digit ≥ base, something is wrong!</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Asas 2: hanya 0,1 | Asas 6: hanya 0-5 | Asas 7: hanya 0-6 | Asas 8: hanya 0-7. Jika anda mendapat digit ≥ asas, ada yang salah!</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Not using 3 digits when converting base 8 to base 2</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Tidak menggunakan 3 digit semasa menukar asas 8 ke asas 2</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">Each octal digit MUST become exactly 3 binary digits. 5 → 101, NOT just 101 without padding. 1 → 001, NOT just 1.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Setiap digit oktal MESTI menjadi tepat 3 digit binari. 5 → 101, BUKAN hanya 101 tanpa padding. 1 → 001, BUKAN hanya 1.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Borrowing wrong amount in subtraction</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Meminjam jumlah yang salah dalam penolakan</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">In base 7, borrowing adds 7 (not 10!) to current digit. In base 8, borrowing adds 8. Always add the BASE value when borrowing.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Dalam asas 7, peminjaman menambah 7 (bukan 10!) kepada digit semasa. Dalam asas 8, peminjaman menambah 8. Sentiasa tambah nilai ASAS semasa meminjam.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Forgetting to carry in binary addition</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Terlupa membawa dalam penambahan binari</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">1+1 = 10 (not 2) in binary. Write 0, carry 1. 1+1+1 = 11 (not 3) in binary. Write 1, carry 1.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">1+1 = 10 (bukan 2) dalam binari. Tulis 0, bawa 1. 1+1+1 = 11 (bukan 3) dalam binari. Tulis 1, bawa 1.</p>
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
                <span class="lang-en">1. Convert 253₆ to base 10.</span>
                <span class="lang-bm hidden">1. Tukar 253₆ kepada asas 10.</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach(['A' => ['en' => '95', 'bm' => '95'],
                          'B' => ['en' => '100', 'bm' => '100'],
                          'C' => ['en' => '105', 'bm' => '105'],
                          'D' => ['en' => '110', 'bm' => '110']] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc1" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-slate-700">{{ $key }}. <span class="lang-en">{{ $opts['en'] }}</span><span class="lang-bm hidden">{{ $opts['bm'] }}</span></span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc1', 'C')"
                class="text-xs font-semibold bg-teal-500 text-white px-4 py-1.5 rounded-lg hover:bg-teal-600 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc1" class="hidden text-xs mt-2"></p>
            <div id="hint-qc1" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: (2×6²) + (5×6¹) + (3×6⁰) = (2×36) + (5×6) + (3×1) = 72+30+3.</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: (2×6²) + (5×6¹) + (3×6⁰) = (2×36) + (5×6) + (3×1) = 72+30+3.</p>
            </div>
        </div>

        {{-- Q2 --}}
        <div class="p-4 bg-slate-50 rounded-xl">
            <p class="text-sm font-semibold text-slate-800 mb-3">
                <span class="lang-en">2. Convert 110111₂ directly to base 8.</span>
                <span class="lang-bm hidden">2. Tukar 110111₂ secara terus kepada asas 8.</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach(['A' => ['en' => '57₈', 'bm' => '57₈'],
                          'B' => ['en' => '67₈', 'bm' => '67₈'],
                          'C' => ['en' => '76₈', 'bm' => '76₈'],
                          'D' => ['en' => '75₈', 'bm' => '75₈']] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc2" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-slate-700">{{ $key }}. <span class="lang-en">{{ $opts['en'] }}</span><span class="lang-bm hidden">{{ $opts['bm'] }}</span></span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc2', 'B')"
                class="text-xs font-semibold bg-teal-500 text-white px-4 py-1.5 rounded-lg hover:bg-teal-600 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc2" class="hidden text-xs mt-2"></p>
            <div id="hint-qc2" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: Group in 3s from right: 110|111. 110=6, 111=7. So 67₈.</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Kumpulkan dalam 3 dari kanan: 110|111. 110=6, 111=7. Jadi 67₈.</p>
            </div>
        </div>

        {{-- Q3 --}}
        <div class="p-4 bg-slate-50 rounded-xl">
            <p class="text-sm font-semibold text-slate-800 mb-3">
                <span class="lang-en">3. What is 110₂ + 111₂?</span>
                <span class="lang-bm hidden">3. Apakah 110₂ + 111₂?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach(['A' => ['en' => '1100₂', 'bm' => '1100₂'],
                          'B' => ['en' => '1101₂', 'bm' => '1101₂'],
                          'C' => ['en' => '1110₂', 'bm' => '1110₂'],
                          'D' => ['en' => '1010₂', 'bm' => '1010₂']] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc3" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-slate-700">{{ $key }}. <span class="lang-en">{{ $opts['en'] }}</span><span class="lang-bm hidden">{{ $opts['bm'] }}</span></span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc3', 'B')"
                class="text-xs font-semibold bg-teal-500 text-white px-4 py-1.5 rounded-lg hover:bg-teal-600 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc3" class="hidden text-xs mt-2"></p>
            <div id="hint-qc3" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: 6+7=13 in decimal. 13 in binary = 1101₂.</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: 6+7=13 dalam perpuluhan. 13 dalam binari = 1101₂.</p>
            </div>
        </div>

    </div>
</div>