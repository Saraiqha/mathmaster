{{-- ═══════════════════════════════════════════════
     TOPIC 1: QUADRATIC FUNCTIONS AND EQUATIONS
     Aligned to KSSM Form 4 KPM Textbook Chapter 1
     ═══════════════════════════════════════════════ --}}

{{-- 1. Learning Objectives --}}
<div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">
        <span class="lang-en">🎯 Learning Objectives</span>
        <span class="lang-bm hidden">🎯 Objektif Pembelajaran</span>
    </h4>

    <ul class="space-y-2 lang-en">
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Identify quadratic expressions and state their characteristics</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Recognise and sketch graphs of quadratic functions for a &gt; 0 and a &lt; 0</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Determine the axis of symmetry, vertex, and y-intercept of a quadratic function</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Solve quadratic equations using factorisation method</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Determine roots of a quadratic equation from its graph</li>
    </ul>

    <ul class="space-y-2 lang-bm hidden">
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Kenal pasti ungkapan kuadratik dan nyatakan ciri-cirinya</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Kenal dan lakar graf fungsi kuadratik untuk a &gt; 0 dan a &lt; 0</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Tentukan paksi simetri, bucu dan pintasan-y bagi fungsi kuadratik</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Selesaikan persamaan kuadratik menggunakan kaedah pemfaktoran</li>
        <li class="flex items-start gap-2 text-sm text-gray-600"><span class="text-teal-500 mt-0.5">✓</span>Tentukan punca persamaan kuadratik daripada grafnya</li>
    </ul>
</div>

{{-- 2. Key Concepts and Formulas --}}
<div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">
        <span class="lang-en">📐 Key Concepts and Formulas</span>
        <span class="lang-bm hidden">📐 Konsep Utama dan Rumus</span>
    </h4>

    {{-- Part A --}}
    <div class="mb-5">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
            <p class="text-sm font-bold text-gray-700">
                <span class="lang-en">A. Quadratic Expression</span>
                <span class="lang-bm hidden">A. Ungkapan Kuadratik</span>
            </p>
        </div>
        <div class="p-4 bg-teal-50 rounded-xl border border-teal-100 mb-3">
            <p class="text-sm font-mono font-semibold text-teal-800">ax² + bx + c</p>
            <p class="text-xs text-gray-500 mt-1">
                <span class="lang-en">where a, b and c are constants, <strong>a ≠ 0</strong></span>
                <span class="lang-bm hidden">di mana a, b dan c adalah pemalar, <strong>a ≠ 0</strong></span>
            </p>
        </div>
        <div class="grid grid-cols-2 gap-3">
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                <p class="text-xs font-semibold text-gray-600 mb-1">
                    <span class="lang-en">(a) Highest power is 2</span>
                    <span class="lang-bm hidden">(a) Kuasa tertinggi ialah 2</span>
                </p>
                <p class="text-xs text-gray-500">
                    <span class="lang-en">The variable x appears with a maximum power of 2</span>
                    <span class="lang-bm hidden">Pemboleh ubah x muncul dengan kuasa maksimum 2</span>
                </p>
            </div>
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                <p class="text-xs font-semibold text-gray-600 mb-1">
                    <span class="lang-en">(b) Involves one variable</span>
                    <span class="lang-bm hidden">(b) Melibatkan satu pemboleh ubah</span>
                </p>
                <p class="text-xs text-gray-500">
                    <span class="lang-en">Only one unknown variable (x) is present</span>
                    <span class="lang-bm hidden">Hanya satu pemboleh ubah tidak diketahui (x) hadir</span>
                </p>
            </div>
        </div>
    </div>

    {{-- Part B --}}
    <div class="mb-5">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-sky-500 rounded-full"></div>
            <p class="text-sm font-bold text-gray-700">
                <span class="lang-en">B. Quadratic Function</span>
                <span class="lang-bm hidden">B. Fungsi Kuadratik</span>
            </p>
        </div>
        <div class="p-4 bg-sky-50 rounded-xl border border-sky-100 mb-4">
            <p class="text-xs font-bold text-sky-700 mb-1">
                <span class="lang-en">General Form</span>
                <span class="lang-bm hidden">Bentuk Am</span>
            </p>
            <p class="text-sm font-mono font-semibold text-gray-800">f(x) = ax² + bx + c &nbsp; (a ≠ 0)</p>
        </div>

        <p class="text-xs font-bold text-gray-600 mb-3">
            <span class="lang-en">Shape of Graph:</span>
            <span class="lang-bm hidden">Bentuk Graf:</span>
        </p>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="p-4 bg-teal-50 rounded-xl border border-teal-100 text-center">
                <p class="text-2xl mb-2">∪</p>
                <p class="text-xs font-bold text-teal-700">a &gt; 0</p>
                <p class="text-xs text-gray-500 mt-1">
                    <span class="lang-en">Parabola opens <strong>upward</strong></span>
                    <span class="lang-bm hidden">Parabola membuka <strong>ke atas</strong></span>
                </p>
                <p class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Has a <strong>minimum</strong> point</span>
                    <span class="lang-bm hidden">Mempunyai titik <strong>minimum</strong></span>
                </p>
            </div>
            <div class="p-4 bg-rose-50 rounded-xl border border-rose-100 text-center">
                <p class="text-2xl mb-2">∩</p>
                <p class="text-xs font-bold text-rose-700">a &lt; 0</p>
                <p class="text-xs text-gray-500 mt-1">
                    <span class="lang-en">Parabola opens <strong>downward</strong></span>
                    <span class="lang-bm hidden">Parabola membuka <strong>ke bawah</strong></span>
                </p>
                <p class="text-xs text-gray-400 mt-1">
                    <span class="lang-en">Has a <strong>maximum</strong> point</span>
                    <span class="lang-bm hidden">Mempunyai titik <strong>maksimum</strong></span>
                </p>
            </div>
        </div>

        <p class="text-xs font-bold text-gray-600 mb-3">
            <span class="lang-en">Axis of Symmetry:</span>
            <span class="lang-bm hidden">Paksi Simetri:</span>
        </p>
        <div class="p-4 bg-violet-50 rounded-xl border border-violet-100 mb-3">
            <p class="text-sm font-mono font-semibold text-violet-800">x = −b / 2a</p>
        </div>
        <div class="grid grid-cols-3 gap-3 mb-4">
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 text-center">
                <p class="text-xs font-bold text-gray-600">b &lt; 0</p>
                <p class="text-xs text-gray-500 mt-1">
                    <span class="lang-en">Axis is on the <strong>right</strong> of y-axis</span>
                    <span class="lang-bm hidden">Paksi di <strong>kanan</strong> paksi-y</span>
                </p>
            </div>
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 text-center">
                <p class="text-xs font-bold text-gray-600">b &gt; 0</p>
                <p class="text-xs text-gray-500 mt-1">
                    <span class="lang-en">Axis is on the <strong>left</strong> of y-axis</span>
                    <span class="lang-bm hidden">Paksi di <strong>kiri</strong> paksi-y</span>
                </p>
            </div>
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 text-center">
                <p class="text-xs font-bold text-gray-600">b = 0</p>
                <p class="text-xs text-gray-500 mt-1">
                    <span class="lang-en">Axis is the <strong>y-axis</strong></span>
                    <span class="lang-bm hidden">Paksi ialah <strong>paksi-y</strong></span>
                </p>
            </div>
        </div>

        <p class="text-xs font-bold text-gray-600 mb-3">
            <span class="lang-en">y-intercept:</span>
            <span class="lang-bm hidden">Pintasan-y:</span>
        </p>
        <div class="p-4 bg-amber-50 rounded-xl border border-amber-100">
            <p class="text-sm text-gray-700">
                <span class="lang-en">Substitute <strong>x = 0</strong> into f(x):</span>
                <span class="lang-bm hidden">Gantikan <strong>x = 0</strong> ke dalam f(x):</span>
            </p>
            <p class="text-sm font-mono font-semibold text-amber-800 mt-1">f(0) = c</p>
            <p class="text-xs text-gray-500 mt-1">
                <span class="lang-en">The y-intercept is always the constant c</span>
                <span class="lang-bm hidden">Pintasan-y sentiasa pemalar c</span>
            </p>
        </div>
    </div>

    {{-- Part C --}}
    <div>
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-amber-500 rounded-full"></div>
            <p class="text-sm font-bold text-gray-700">
                <span class="lang-en">C. Quadratic Equation</span>
                <span class="lang-bm hidden">C. Persamaan Kuadratik</span>
            </p>
        </div>
        <div class="p-4 bg-amber-50 rounded-xl border border-amber-100 mb-3">
            <p class="text-xs font-bold text-amber-700 mb-1">
                <span class="lang-en">General Form</span>
                <span class="lang-bm hidden">Bentuk Am</span>
            </p>
            <p class="text-sm font-mono font-semibold text-gray-800">ax² + bx + c = 0 &nbsp; (a ≠ 0)</p>
        </div>
        <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 mb-3">
            <p class="text-xs font-semibold text-gray-600 mb-1">
                <span class="lang-en">What are roots?</span>
                <span class="lang-bm hidden">Apakah punca?</span>
            </p>
            <p class="text-xs text-gray-500">
                <span class="lang-en">The roots are the <strong>values of x that satisfy the equation</strong> — i.e. the x-intercepts of the graph.</span>
                <span class="lang-bm hidden">Punca adalah <strong>nilai x yang memenuhi persamaan</strong> — iaitu pintasan-x graf.</span>
            </p>
        </div>
        <p class="text-xs font-bold text-gray-600 mb-3">
            <span class="lang-en">Methods to find roots:</span>
            <span class="lang-bm hidden">Kaedah mencari punca:</span>
        </p>
        <div class="grid grid-cols-2 gap-3">
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-700 mb-1">
                    <span class="lang-en">(a) Factorisation</span>
                    <span class="lang-bm hidden">(a) Pemfaktoran</span>
                </p>
                <p class="text-xs text-gray-500">
                    <span class="lang-en">Express as (x − p)(x − q) = 0, then x = p or x = q</span>
                    <span class="lang-bm hidden">Ungkapkan sebagai (x − p)(x − q) = 0, maka x = p atau x = q</span>
                </p>
            </div>
            <div class="p-3 bg-sky-50 rounded-xl border border-sky-100">
                <p class="text-xs font-bold text-sky-700 mb-1">
                    <span class="lang-en">(b) Graphical Method</span>
                    <span class="lang-bm hidden">(b) Kaedah Grafik</span>
                </p>
                <p class="text-xs text-gray-500">
                    <span class="lang-en">Roots are the x-coordinates where the graph crosses the x-axis</span>
                    <span class="lang-bm hidden">Punca ialah koordinat-x di mana graf menyilang paksi-x</span>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- 3. Worked Examples --}}
<div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">
        <span class="lang-en">✏️ Step-by-Step Worked Examples</span>
        <span class="lang-bm hidden">✏️ Contoh Penyelesaian Langkah demi Langkah</span>
    </h4>

    {{-- Example 1 --}}
    <div class="mb-5 p-4 border border-gray-100 rounded-xl">
        <p class="text-xs font-bold text-gray-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 1 — Quadratic Function</span>
            <span class="lang-bm hidden">Contoh 1 — Fungsi Kuadratik</span>
        </p>
        <p class="text-sm font-semibold text-gray-800 mb-3">
            <span class="lang-en">Given f(x) = 2x² − 8x + 6, find the axis of symmetry, vertex and y-intercept.</span>
            <span class="lang-bm hidden">Diberi f(x) = 2x² − 8x + 6, cari paksi simetri, bucu dan pintasan-y.</span>
        </p>
        <button id="btn-sol1" onclick="toggleSolution('sol1')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol1" class="hidden mt-4 space-y-2">
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 1:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 1:</span>
                <span class="lang-en">Identify: a = 2, b = −8, c = 6. Since a &gt; 0, parabola opens upward (∪ shape)</span>
                <span class="lang-bm hidden">Kenal pasti: a = 2, b = −8, c = 6. Kerana a &gt; 0, parabola membuka ke atas (bentuk ∪)</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <span class="lang-en">Axis of symmetry: x = −b/2a = −(−8)/2(2) = 8/4 = <strong>2</strong></span>
                <span class="lang-bm hidden">Paksi simetri: x = −b/2a = −(−8)/2(2) = 8/4 = <strong>2</strong></span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 3:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 3:</span>
                <span class="lang-en">Vertex: f(2) = 2(4) − 8(2) + 6 = 8 − 16 + 6 = <strong>−2</strong> → Vertex = (2, −2)</span>
                <span class="lang-bm hidden">Bucu: f(2) = 2(4) − 8(2) + 6 = 8 − 16 + 6 = <strong>−2</strong> → Bucu = (2, −2)</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 4:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 4:</span>
                <span class="lang-en">y-intercept: f(0) = c = <strong>6</strong></span>
                <span class="lang-bm hidden">Pintasan-y: f(0) = c = <strong>6</strong></span>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100 mt-2">
                <p class="text-xs font-semibold text-teal-700 lang-en">Answer: Axis x = 2, Minimum point (2, −2), y-intercept = 6</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">Jawapan: Paksi x = 2, Titik minimum (2, −2), pintasan-y = 6</p>
            </div>
        </div>
    </div>

    {{-- Example 2 --}}
    <div class="mb-5 p-4 border border-gray-100 rounded-xl">
        <p class="text-xs font-bold text-gray-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 2 — Factorisation</span>
            <span class="lang-bm hidden">Contoh 2 — Pemfaktoran</span>
        </p>
        <p class="text-sm font-semibold text-gray-800 mb-3">
            <span class="lang-en">Solve x² − 5x + 6 = 0 by factorisation.</span>
            <span class="lang-bm hidden">Selesaikan x² − 5x + 6 = 0 dengan pemfaktoran.</span>
        </p>
        <button id="btn-sol2" onclick="toggleSolution('sol2')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol2" class="hidden mt-4 space-y-2">
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 1:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 1:</span>
                <span class="lang-en">Find two numbers: product = 6, sum = −5 → (−2) and (−3)</span>
                <span class="lang-bm hidden">Cari dua nombor: hasil darab = 6, hasil tambah = −5 → (−2) dan (−3)</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <span class="lang-en">Factorise: (x − 2)(x − 3) = 0</span>
                <span class="lang-bm hidden">Faktorkan: (x − 2)(x − 3) = 0</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 3:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 3:</span>
                <span class="lang-en">x − 2 = 0 → x = 2, or x − 3 = 0 → x = 3</span>
                <span class="lang-bm hidden">x − 2 = 0 → x = 2, atau x − 3 = 0 → x = 3</span>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100 mt-2">
                <p class="text-xs font-semibold text-teal-700 lang-en">Answer: x = 2 or x = 3</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">Jawapan: x = 2 atau x = 3</p>
            </div>
        </div>
    </div>

    {{-- Example 3 --}}
    <div class="p-4 border border-gray-100 rounded-xl">
        <p class="text-xs font-bold text-gray-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 3 — Graphical Method</span>
            <span class="lang-bm hidden">Contoh 3 — Kaedah Grafik</span>
        </p>
        <p class="text-sm font-semibold text-gray-800 mb-3">
            <span class="lang-en">The graph of f(x) = x² − 4 crosses the x-axis. Find the roots.</span>
            <span class="lang-bm hidden">Graf f(x) = x² − 4 menyilang paksi-x. Cari punca-puncanya.</span>
        </p>
        <button id="btn-sol3" onclick="toggleSolution('sol3')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            <span class="lang-en">Show Solution ▼</span>
            <span class="lang-bm hidden">Tunjukkan Penyelesaian ▼</span>
        </button>
        <div id="sol3" class="hidden mt-4 space-y-2">
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 1:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 1:</span>
                <span class="lang-en">Set f(x) = 0: x² − 4 = 0</span>
                <span class="lang-bm hidden">Tetapkan f(x) = 0: x² − 4 = 0</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <span class="lang-en">x² = 4</span>
                <span class="lang-bm hidden">x² = 4</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 3:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 3:</span>
                <span class="lang-en">x = ±2 → graph crosses at (−2, 0) and (2, 0)</span>
                <span class="lang-bm hidden">x = ±2 → graf menyilang pada (−2, 0) dan (2, 0)</span>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100 mt-2">
                <p class="text-xs font-semibold text-teal-700 lang-en">Answer: Roots are x = −2 and x = 2</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">Jawapan: Punca ialah x = −2 dan x = 2</p>
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
                <p class="text-sm font-semibold text-gray-700 lang-en">Saying a = 0 is allowed</p>
                <p class="text-sm font-semibold text-gray-700 lang-bm hidden">Mengatakan a = 0 dibenarkan</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-en">If a = 0, there is no x² term — it becomes linear, not quadratic.</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-bm hidden">Jika a = 0, tiada sebutan x² — ia menjadi linear, bukan kuadratik.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-gray-700 lang-en">Confusing the shape when a &lt; 0</p>
                <p class="text-sm font-semibold text-gray-700 lang-bm hidden">Keliru tentang bentuk apabila a &lt; 0</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-en">When a &lt; 0 the parabola opens downward (∩). The vertex is a maximum, not minimum.</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-bm hidden">Apabila a &lt; 0 parabola membuka ke bawah (∩). Bucunya adalah maksimum, bukan minimum.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-gray-700 lang-en">Wrong axis direction for b values</p>
                <p class="text-sm font-semibold text-gray-700 lang-bm hidden">Arah paksi salah untuk nilai b</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-en">When b &lt; 0, the axis x = −b/2a gives a positive x — axis is to the RIGHT of y-axis.</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-bm hidden">Apabila b &lt; 0, paksi x = −b/2a memberikan x positif — paksi di KANAN paksi-y.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-gray-700 lang-en">Thinking roots are always real</p>
                <p class="text-sm font-semibold text-gray-700 lang-bm hidden">Menganggap punca sentiasa nyata</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-en">A quadratic equation may have no real roots if the graph does not cross the x-axis.</p>
                <p class="text-xs text-gray-500 mt-0.5 lang-bm hidden">Persamaan kuadratik mungkin tiada punca nyata jika graf tidak menyilang paksi-x.</p>
            </div>
        </div>
    </div>
</div>

{{-- 5. Quick Check --}}
<div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">
        <span class="lang-en">⚡ Quick Check</span>
        <span class="lang-bm hidden">⚡ Semakan Pantas</span>
    </h4>
    <div class="space-y-6">

        {{-- Q1 --}}
        <div class="p-4 bg-gray-50 rounded-xl">
            <p class="text-sm font-semibold text-gray-800 mb-3">
                <span class="lang-en">1. For f(x) = 3x² − 6x + 2, what is the axis of symmetry?</span>
                <span class="lang-bm hidden">1. Bagi f(x) = 3x² − 6x + 2, apakah paksi simetrinya?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach(['A' => ['en' => 'x = 1', 'bm' => 'x = 1'],
                          'B' => ['en' => 'x = 2', 'bm' => 'x = 2'],
                          'C' => ['en' => 'x = −1', 'bm' => 'x = −1'],
                          'D' => ['en' => 'x = 3', 'bm' => 'x = 3']] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc1" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-gray-700">
                        {{ $key }}.
                        <span class="lang-en">{{ $opts['en'] }}</span>
                        <span class="lang-bm hidden">{{ $opts['bm'] }}</span>
                    </span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc1', 'A')"
                class="text-xs font-semibold bg-teal-600 text-white px-4 py-1.5 rounded-lg hover:bg-teal-700 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc1" class="hidden text-xs mt-2"></p>
            <div id="hint-qc1" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: Use x = −b/2a. Here a = 3 and b = −6.</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Guna x = −b/2a. Di sini a = 3 dan b = −6.</p>
            </div>
        </div>

        {{-- Q2 --}}
        <div class="p-4 bg-gray-50 rounded-xl">
            <p class="text-sm font-semibold text-gray-800 mb-3">
                <span class="lang-en">2. A quadratic function has a &lt; 0. Which statement is correct?</span>
                <span class="lang-bm hidden">2. Fungsi kuadratik mempunyai a &lt; 0. Pernyataan manakah yang betul?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => 'The parabola opens upward', 'bm' => 'Parabola membuka ke atas'],
                    'B' => ['en' => 'The parabola opens downward', 'bm' => 'Parabola membuka ke bawah'],
                    'C' => ['en' => 'The graph is a straight line', 'bm' => 'Graf adalah garis lurus'],
                    'D' => ['en' => 'The vertex is a minimum point', 'bm' => 'Bucu adalah titik minimum'],
                ] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc2" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-gray-700">
                        {{ $key }}.
                        <span class="lang-en">{{ $opts['en'] }}</span>
                        <span class="lang-bm hidden">{{ $opts['bm'] }}</span>
                    </span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc2', 'B')"
                class="text-xs font-semibold bg-teal-600 text-white px-4 py-1.5 rounded-lg hover:bg-teal-700 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc2" class="hidden text-xs mt-2"></p>
            <div id="hint-qc2" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: When a &lt; 0, the shape is ∩ (inverted U).</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Apabila a &lt; 0, bentuknya adalah ∩ (U terbalik).</p>
            </div>
        </div>

        {{-- Q3 --}}
        <div class="p-4 bg-gray-50 rounded-xl">
            <p class="text-sm font-semibold text-gray-800 mb-3">
                <span class="lang-en">3. The roots of x² − 7x + 12 = 0 are:</span>
                <span class="lang-bm hidden">3. Punca-punca bagi x² − 7x + 12 = 0 ialah:</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => 'x = 3 and x = 4', 'bm' => 'x = 3 dan x = 4'],
                    'B' => ['en' => 'x = −3 and x = −4', 'bm' => 'x = −3 dan x = −4'],
                    'C' => ['en' => 'x = 6 and x = 2', 'bm' => 'x = 6 dan x = 2'],
                    'D' => ['en' => 'x = 12 and x = 1', 'bm' => 'x = 12 dan x = 1'],
                ] as $key => $opts)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc3" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-gray-700">
                        {{ $key }}.
                        <span class="lang-en">{{ $opts['en'] }}</span>
                        <span class="lang-bm hidden">{{ $opts['bm'] }}</span>
                    </span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc3', 'A')"
                class="text-xs font-semibold bg-teal-600 text-white px-4 py-1.5 rounded-lg hover:bg-teal-700 transition">
                <span class="lang-en">Check Answer</span>
                <span class="lang-bm hidden">Semak Jawapan</span>
            </button>
            <p id="feedback-qc3" class="hidden text-xs mt-2"></p>
            <div id="hint-qc3" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700 lang-en">💡 Hint: Factorise x² − 7x + 12. Find two numbers that multiply to 12 and add to −7.</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Faktorkan x² − 7x + 12. Cari dua nombor yang darabnya 12 dan jumlahnya −7.</p>
            </div>
        </div>

    </div>
</div>