{{-- ═══════════════════════════════════════════════
     TOPIC 5: NETWORK IN GRAPH THEORY
     Aligned to KSSM Form 4 KPM Textbook Chapter 5
     Self-contained — student does not need textbook
     ═══════════════════════════════════════════════ --}}

{{-- 1. Learning Objectives --}}
<div class="bg-white rounded-2xl border border-slate-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">
        <span class="lang-en">🎯 Learning Objectives</span>
        <span class="lang-bm hidden">🎯 Objektif Pembelajaran</span>
    </h4>
    <ul class="space-y-2 lang-en">
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Identify types of graphs: simple graph, graph with loops and multiple edges</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Calculate the degree of each vertex and verify using sum formula</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Distinguish between undirected, directed, weighted and unweighted graphs</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Identify and draw subgraphs of a given graph</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Identify trees as simple connected graphs with no cycles</li>
    </ul>
    <ul class="space-y-2 lang-bm hidden">
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Kenal pasti jenis-jenis graf: graf ringkas, graf dengan gelung dan tepi berganda</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Kira darjah setiap bucu dan sahkan menggunakan rumus jumlah</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Bezakan antara graf tak terarah, terarah, berwajaran dan tak berwajaran</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Kenal pasti dan lukis subgraf bagi graf yang diberi</li>
        <li class="flex items-start gap-2 text-sm text-slate-600"><span class="text-teal-500 mt-0.5">✓</span>Kenal pasti pokok sebagai graf ringkas bersambung tanpa kitar</li>
    </ul>
</div>

{{-- 2. Key Concepts --}}
<div class="bg-white rounded-2xl border border-slate-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">
        <span class="lang-en">📐 Key Concepts and Formulas</span>
        <span class="lang-bm hidden">📐 Konsep Utama dan Rumus</span>
    </h4>

    {{-- Part A: What is a Graph --}}
    <div class="mb-6">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">A. What is a Graph?</span>
                <span class="lang-bm hidden">A. Apakah Graf?</span>
            </p>
        </div>
        <div class="p-4 bg-teal-50 rounded-xl border border-teal-100 mb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-xs font-bold text-teal-700 mb-2 lang-en">A graph consists of:</p>
                    <p class="text-xs font-bold text-teal-700 mb-2 lang-bm hidden">Sebuah graf terdiri daripada:</p>
                    <div class="space-y-2">
                        <div class="flex items-start gap-2">
                            <span class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center text-xs font-bold text-teal-700 flex-shrink-0">V</span>
                            <div>
                                <p class="text-xs font-bold text-slate-700 lang-en">Vertices (nodes/points)</p>
                                <p class="text-xs font-bold text-slate-700 lang-bm hidden">Bucu (nod/titik)</p>
                                <p class="text-xs text-slate-500 lang-en">The dots or points in the graph</p>
                                <p class="text-xs text-slate-500 lang-bm hidden">Titik-titik dalam graf</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center text-xs font-bold text-teal-700 flex-shrink-0">E</span>
                            <div>
                                <p class="text-xs font-bold text-slate-700 lang-en">Edges (lines/arcs)</p>
                                <p class="text-xs font-bold text-slate-700 lang-bm hidden">Tepi (garis/lengkok)</p>
                                <p class="text-xs text-slate-500 lang-en">The lines connecting vertices</p>
                                <p class="text-xs text-slate-500 lang-bm hidden">Garis yang menghubungkan bucu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <svg viewBox="0 0 150 100" class="w-36 h-24">
                        <circle cx="40" cy="30" r="6" fill="#0d9488"/>
                        <circle cx="110" cy="30" r="6" fill="#0d9488"/>
                        <circle cx="75" cy="80" r="6" fill="#0d9488"/>
                        <line x1="40" y1="30" x2="110" y2="30" stroke="#0d9488" stroke-width="2"/>
                        <line x1="40" y1="30" x2="75" y2="80" stroke="#0d9488" stroke-width="2"/>
                        <line x1="110" y1="30" x2="75" y2="80" stroke="#0d9488" stroke-width="2"/>
                        <text x="30" y="22" font-size="10" fill="#0f766e" font-weight="bold">P</text>
                        <text x="112" y="22" font-size="10" fill="#0f766e" font-weight="bold">Q</text>
                        <text x="70" y="98" font-size="10" fill="#0f766e" font-weight="bold">R</text>
                        <text x="65" y="22" font-size="8" fill="#374151">edge</text>
                        <text x="28" y="60" font-size="8" fill="#374151">edge</text>
                        <text x="97" y="60" font-size="8" fill="#374151">edge</text>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Degree --}}
        <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 mb-4">
            <p class="text-xs font-bold text-slate-700 mb-3 lang-en">📌 Degree of a Vertex</p>
            <p class="text-xs font-bold text-slate-700 mb-3 lang-bm hidden">📌 Darjah Sebuah Bucu</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div>
                    <p class="text-xs text-slate-600 mb-2 lang-en">The degree of a vertex = <strong>number of edges connected to it</strong>.</p>
                    <p class="text-xs text-slate-600 mb-2 lang-bm hidden">Darjah sebuah bucu = <strong>bilangan tepi yang disambungkan kepadanya</strong>.</p>
                    <div class="p-2 bg-rose-50 rounded-lg border border-rose-100">
                        <p class="text-xs font-bold text-rose-700 lang-en">⚠️ Special rule for loops:</p>
                        <p class="text-xs font-bold text-rose-700 lang-bm hidden">⚠️ Peraturan khas untuk gelung:</p>
                        <p class="text-xs text-slate-600 lang-en">A loop at vertex A counts as <strong>2</strong> to the degree of A (not 1).</p>
                        <p class="text-xs text-slate-600 lang-bm hidden">Gelung pada bucu A dikira sebagai <strong>2</strong> kepada darjah A (bukan 1).</p>
                    </div>
                </div>
                <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                    <p class="text-xs font-bold text-teal-700 mb-2 lang-en">Key formula:</p>
                    <p class="text-xs font-bold text-teal-700 mb-2 lang-bm hidden">Rumus utama:</p>
                    <p class="text-sm font-mono font-bold text-slate-800">Sum of degrees = 2 × edges</p>
                    <p class="text-xs text-slate-500 mt-1 lang-en">The sum of ALL vertex degrees is always EVEN and equals 2 × number of edges.</p>
                    <p class="text-xs text-slate-500 mt-1 lang-bm hidden">Jumlah SEMUA darjah bucu sentiasa GENAP dan bersamaan 2 × bilangan tepi.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Part B: Types of Graphs --}}
    <div class="mb-6">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-sky-500 rounded-full"></div>
            <p class="text-sm font-bold text-slate-700">
                <span class="lang-en">B. Types of Graphs</span>
                <span class="lang-bm hidden">B. Jenis-jenis Graf</span>
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">

            {{-- Simple graph --}}
            <div class="p-4 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-700 mb-2 lang-en">✅ Simple Graph</p>
                <p class="text-xs font-bold text-teal-700 mb-2 lang-bm hidden">✅ Graf Ringkas</p>
                <p class="text-xs text-slate-600 lang-en">• No loops (no edge from vertex to itself)</p>
                <p class="text-xs text-slate-600 lang-bm hidden">• Tiada gelung (tiada tepi dari bucu ke dirinya sendiri)</p>
                <p class="text-xs text-slate-600 lang-en">• No multiple edges (at most one edge between any pair of vertices)</p>
                <p class="text-xs text-slate-600 lang-bm hidden">• Tiada tepi berganda (paling banyak satu tepi antara mana-mana pasangan bucu)</p>
                <div class="flex justify-center mt-2">
                    <svg viewBox="0 0 120 80" class="w-28 h-20">
                        <circle cx="30" cy="20" r="5" fill="#0d9488"/>
                        <circle cx="90" cy="20" r="5" fill="#0d9488"/>
                        <circle cx="60" cy="65" r="5" fill="#0d9488"/>
                        <line x1="30" y1="20" x2="90" y2="20" stroke="#0d9488" stroke-width="1.5"/>
                        <line x1="30" y1="20" x2="60" y2="65" stroke="#0d9488" stroke-width="1.5"/>
                        <line x1="90" y1="20" x2="60" y2="65" stroke="#0d9488" stroke-width="1.5"/>
                        <text x="22" y="14" font-size="9" fill="#0f766e">P</text>
                        <text x="92" y="14" font-size="9" fill="#0f766e">Q</text>
                        <text x="56" y="78" font-size="9" fill="#0f766e">R</text>
                    </svg>
                </div>
            </div>

            {{-- Graph with loops --}}
            <div class="p-4 bg-rose-50 rounded-xl border border-rose-100">
                <p class="text-xs font-bold text-rose-700 mb-2 lang-en">❗ Graph with Loops and Multiple Edges</p>
                <p class="text-xs font-bold text-rose-700 mb-2 lang-bm hidden">❗ Graf dengan Gelung dan Tepi Berganda</p>
                <p class="text-xs text-slate-600 lang-en">• Loop: edge that connects a vertex to itself</p>
                <p class="text-xs text-slate-600 lang-bm hidden">• Gelung: tepi yang menghubungkan bucu dengan dirinya sendiri</p>
                <p class="text-xs text-slate-600 lang-en">• Multiple edges: more than one edge between same pair of vertices</p>
                <p class="text-xs text-slate-600 lang-bm hidden">• Tepi berganda: lebih daripada satu tepi antara pasangan bucu yang sama</p>
                <div class="flex justify-center mt-2">
                    <svg viewBox="0 0 120 80" class="w-28 h-20">
                        <circle cx="30" cy="40" r="5" fill="#e11d48"/>
                        <circle cx="90" cy="40" r="5" fill="#e11d48"/>
                        <line x1="30" y1="40" x2="90" y2="40" stroke="#e11d48" stroke-width="1.5"/>
                        <path d="M30,35 Q60,10 90,35" fill="none" stroke="#e11d48" stroke-width="1.5"/>
                        <ellipse cx="30" cy="25" rx="12" ry="10" fill="none" stroke="#e11d48" stroke-width="1.5"/>
                        <text x="22" y="58" font-size="9" fill="#e11d48">P</text>
                        <text x="92" y="58" font-size="9" fill="#e11d48">Q</text>
                        <text x="4" y="20" font-size="7" fill="#e11d48" class="lang-en">loop</text>
                        <text x="50" y="10" font-size="7" fill="#e11d48" class="lang-en">multiple</text>
                    </svg>
                </div>
            </div>

            {{-- Undirected vs Directed --}}
            <div class="p-4 bg-sky-50 rounded-xl border border-sky-100">
                <p class="text-xs font-bold text-sky-700 mb-2 lang-en">Undirected vs Directed Graph</p>
                <p class="text-xs font-bold text-sky-700 mb-2 lang-bm hidden">Graf Tak Terarah vs Graf Terarah</p>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-en">Undirected</p>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-bm hidden">Tak Terarah</p>
                        <p class="text-xs text-slate-500 lang-en">Edges have no direction — travel both ways</p>
                        <p class="text-xs text-slate-500 lang-bm hidden">Tepi tiada arah — boleh bergerak dua hala</p>
                        <div class="flex justify-center mt-1">
                            <svg viewBox="0 0 80 50" class="w-20 h-12">
                                <circle cx="20" cy="25" r="5" fill="#0369a1"/>
                                <circle cx="60" cy="25" r="5" fill="#0369a1"/>
                                <line x1="20" y1="25" x2="60" y2="25" stroke="#0369a1" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-en">Directed</p>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-bm hidden">Terarah</p>
                        <p class="text-xs text-slate-500 lang-en">Edges have arrows — one direction only</p>
                        <p class="text-xs text-slate-500 lang-bm hidden">Tepi mempunyai anak panah — satu arah sahaja</p>
                        <div class="flex justify-center mt-1">
                            <svg viewBox="0 0 80 50" class="w-20 h-12">
                                <circle cx="20" cy="25" r="5" fill="#0369a1"/>
                                <circle cx="60" cy="25" r="5" fill="#0369a1"/>
                                <line x1="20" y1="25" x2="52" y2="25" stroke="#0369a1" stroke-width="2"/>
                                <polygon points="55,25 48,21 48,29" fill="#0369a1"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Weighted vs Unweighted --}}
            <div class="p-4 bg-amber-50 rounded-xl border border-amber-100">
                <p class="text-xs font-bold text-amber-700 mb-2 lang-en">Weighted vs Unweighted Graph</p>
                <p class="text-xs font-bold text-amber-700 mb-2 lang-bm hidden">Graf Berwajaran vs Graf Tak Berwajaran</p>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-en">Weighted</p>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-bm hidden">Berwajaran</p>
                        <p class="text-xs text-slate-500 lang-en">Edges have values (distance, cost, time, name)</p>
                        <p class="text-xs text-slate-500 lang-bm hidden">Tepi mempunyai nilai (jarak, kos, masa, nama)</p>
                        <div class="flex justify-center mt-1">
                            <svg viewBox="0 0 80 50" class="w-20 h-12">
                                <circle cx="20" cy="25" r="5" fill="#d97706"/>
                                <circle cx="60" cy="25" r="5" fill="#d97706"/>
                                <line x1="20" y1="25" x2="60" y2="25" stroke="#d97706" stroke-width="2"/>
                                <text x="35" y="20" font-size="9" fill="#d97706" font-weight="bold">5km</text>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-en">Unweighted</p>
                        <p class="text-xs font-bold text-slate-600 mb-1 lang-bm hidden">Tak Berwajaran</p>
                        <p class="text-xs text-slate-500 lang-en">Edges have no values</p>
                        <p class="text-xs text-slate-500 lang-bm hidden">Tepi tiada nilai</p>
                        <div class="flex justify-center mt-1">
                            <svg viewBox="0 0 80 50" class="w-20 h-12">
                                <circle cx="20" cy="25" r="5" fill="#d97706"/>
                                <circle cx="60" cy="25" r="5" fill="#d97706"/>
                                <line x1="20" y1="25" x2="60" y2="25" stroke="#d97706" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Subgraph and Tree --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-violet-50 rounded-xl border border-violet-100">
                <p class="text-xs font-bold text-violet-700 mb-2 lang-en">📌 Subgraph</p>
                <p class="text-xs font-bold text-violet-700 mb-2 lang-bm hidden">📌 Subgraf</p>
                <p class="text-xs text-slate-600 lang-en">A subgraph is formed by selecting <strong>some (or all) vertices and edges</strong> from the original graph. Every vertex and edge in the subgraph must exist in the original graph.</p>
                <p class="text-xs text-slate-600 lang-bm hidden">Subgraf dibentuk dengan memilih <strong>sebahagian (atau semua) bucu dan tepi</strong> daripada graf asal. Setiap bucu dan tepi dalam subgraf mesti wujud dalam graf asal.</p>
                <div class="mt-2 p-2 bg-white rounded-lg border border-violet-100">
                    <p class="text-xs text-slate-500 lang-en">Original: P-Q-R triangle. Subgraphs can be: just P-Q edge, just P vertex, P-Q-R with only 2 edges, etc.</p>
                    <p class="text-xs text-slate-500 lang-bm hidden">Asal: segi tiga P-Q-R. Subgraf boleh: hanya tepi P-Q, hanya bucu P, P-Q-R dengan hanya 2 tepi, dsb.</p>
                </div>
            </div>
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                <p class="text-xs font-bold text-slate-700 mb-2 lang-en">📌 Tree (Simple Graph)</p>
                <p class="text-xs font-bold text-slate-700 mb-2 lang-bm hidden">📌 Pokok (Graf Ringkas)</p>
                <p class="text-xs text-slate-600 lang-en">A tree is a <strong>simple connected graph with no cycles</strong>.</p>
                <p class="text-xs text-slate-600 lang-bm hidden">Pokok ialah <strong>graf ringkas bersambung tanpa kitar</strong>.</p>
                <div class="mt-2 p-3 bg-teal-50 rounded-lg border border-teal-100">
                    <p class="text-xs font-bold text-teal-700 lang-en">Key property:</p>
                    <p class="text-xs font-bold text-teal-700 lang-bm hidden">Sifat utama:</p>
                    <p class="text-sm font-mono font-bold text-slate-800">Edges = Vertices − 1</p>
                    <p class="text-xs text-slate-500 mt-1 lang-en">A tree with n vertices always has exactly n−1 edges.</p>
                    <p class="text-xs text-slate-500 mt-1 lang-bm hidden">Pokok dengan n bucu sentiasa mempunyai tepat n−1 tepi.</p>
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
            <span class="lang-en">Example 1 — Calculating Vertex Degrees</span>
            <span class="lang-bm hidden">Contoh 1 — Mengira Darjah Bucu</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">A graph has vertices P, Q, R, S with edges PQ, PQ (multiple edge), PR, QR, RS, QQ (loop). Find degree of each vertex and verify.</span>
            <span class="lang-bm hidden">Sebuah graf mempunyai bucu P, Q, R, S dengan tepi PQ, PQ (tepi berganda), PR, QR, RS, QQ (gelung). Cari darjah setiap bucu dan sahkan.</span>
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
                    <span class="lang-en">List all edges: PQ, PQ, PR, QR, RS, QQ (loop)</span>
                    <span class="lang-bm hidden">Senaraikan semua tepi: PQ, PQ, PR, QR, RS, QQ (gelung)</span>
                    <p class="text-xs text-slate-500 mt-1 lang-en">Total edges = 6</p>
                    <p class="text-xs text-slate-500 mt-1 lang-bm hidden">Jumlah tepi = 6</p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <div>
                    <span class="lang-en">Count degree of each vertex:</span>
                    <span class="lang-bm hidden">Kira darjah setiap bucu:</span>
                    <div class="mt-2 overflow-x-auto">
                        <table class="text-xs border-collapse">
                            <tr class="bg-slate-100">
                                <td class="p-2 border border-slate-200 font-bold lang-en">Vertex</td>
                                <td class="p-2 border border-slate-200 font-bold lang-bm hidden">Bucu</td>
                                <td class="p-2 border border-slate-200 font-bold lang-en">Edges connected</td>
                                <td class="p-2 border border-slate-200 font-bold lang-bm hidden">Tepi disambungkan</td>
                                <td class="p-2 border border-slate-200 font-bold lang-en">Degree</td>
                                <td class="p-2 border border-slate-200 font-bold lang-bm hidden">Darjah</td>
                            </tr>
                            <tr>
                                <td class="p-2 border border-slate-200 font-bold text-center">P</td>
                                <td class="p-2 border border-slate-200 lang-en">PQ, PQ, PR</td>
                                <td class="p-2 border border-slate-200 lang-bm hidden">PQ, PQ, PR</td>
                                <td class="p-2 border border-slate-200 text-center font-bold text-teal-600">3</td>
                            </tr>
                            <tr class="bg-slate-50">
                                <td class="p-2 border border-slate-200 font-bold text-center">Q</td>
                                <td class="p-2 border border-slate-200 lang-en">PQ, PQ, QR, QQ(loop=2)</td>
                                <td class="p-2 border border-slate-200 lang-bm hidden">PQ, PQ, QR, QQ(gelung=2)</td>
                                <td class="p-2 border border-slate-200 text-center font-bold text-teal-600">6</td>
                            </tr>
                            <tr>
                                <td class="p-2 border border-slate-200 font-bold text-center">R</td>
                                <td class="p-2 border border-slate-200 lang-en">PR, QR, RS</td>
                                <td class="p-2 border border-slate-200 lang-bm hidden">PR, QR, RS</td>
                                <td class="p-2 border border-slate-200 text-center font-bold text-teal-600">3</td>
                            </tr>
                            <tr class="bg-slate-50">
                                <td class="p-2 border border-slate-200 font-bold text-center">S</td>
                                <td class="p-2 border border-slate-200 lang-en">RS</td>
                                <td class="p-2 border border-slate-200 lang-bm hidden">RS</td>
                                <td class="p-2 border border-slate-200 text-center font-bold text-teal-600">1</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 3:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 3:</span>
                <div>
                    <span class="lang-en">Verify: Sum of degrees = 3 + 6 + 3 + 1 = 12</span>
                    <span class="lang-bm hidden">Sahkan: Jumlah darjah = 3 + 6 + 3 + 1 = 12</span>
                    <p class="font-mono text-sm mt-1">2 × edges = 2 × 6 = <strong class="text-teal-600">12 ✓</strong></p>
                </div>
            </div>
            <div class="p-3 bg-rose-50 rounded-xl border border-rose-100">
                <p class="text-xs font-semibold text-rose-700 lang-en">This graph is NOT a simple graph — it has loops and multiple edges.</p>
                <p class="text-xs font-semibold text-rose-700 lang-bm hidden">Graf ini BUKAN graf ringkas — ia mempunyai gelung dan tepi berganda.</p>
            </div>
        </div>
    </div>

    {{-- Example 2 --}}
    <div class="mb-5 p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 2 — Identifying Subgraphs</span>
            <span class="lang-bm hidden">Contoh 2 — Mengenal pasti Subgraf</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">Given graph G with vertices {P, Q, R} and edges {PQ, QR, PR}. List possible subgraphs.</span>
            <span class="lang-bm hidden">Diberi graf G dengan bucu {P, Q, R} dan tepi {PQ, QR, PR}. Senaraikan subgraf yang mungkin.</span>
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
                <span class="lang-en">Single vertices: {P}, {Q}, {R} — each is a subgraph (no edges needed)</span>
                <span class="lang-bm hidden">Bucu tunggal: {P}, {Q}, {R} — setiap satu adalah subgraf (tiada tepi diperlukan)</span>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <span class="lang-en">Two vertices with edge: {P,Q} with PQ, {Q,R} with QR, {P,R} with PR</span>
                <span class="lang-bm hidden">Dua bucu dengan tepi: {P,Q} dengan PQ, {Q,R} dengan QR, {P,R} dengan PR</span>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 3:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 3:</span>
                <span class="lang-en">Three vertices with 2 edges: {P,Q,R} with {PQ,QR}, {P,Q,R} with {PQ,PR}, {P,Q,R} with {QR,PR}</span>
                <span class="lang-bm hidden">Tiga bucu dengan 2 tepi: {P,Q,R} dengan {PQ,QR}, {P,Q,R} dengan {PQ,PR}, {P,Q,R} dengan {QR,PR}</span>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 4:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 4:</span>
                <span class="lang-en">The original graph itself: {P,Q,R} with {PQ,QR,PR} — also a subgraph</span>
                <span class="lang-bm hidden">Graf asal itu sendiri: {P,Q,R} dengan {PQ,QR,PR} — juga subgraf</span>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-semibold text-teal-700 lang-en">Note: Three vertices with 2 edges and no cycle = a TREE (subgraph that is also a tree)!</p>
                <p class="text-xs font-semibold text-teal-700 lang-bm hidden">Nota: Tiga bucu dengan 2 tepi dan tiada kitar = POKOK (subgraf yang juga pokok)!</p>
            </div>
        </div>
    </div>

    {{-- Example 3 --}}
    <div class="p-4 border border-slate-100 rounded-xl">
        <p class="text-xs font-bold text-slate-400 mb-1 uppercase tracking-wide">
            <span class="lang-en">Example 3 — Identifying Trees</span>
            <span class="lang-bm hidden">Contoh 3 — Mengenal pasti Pokok</span>
        </p>
        <p class="text-sm font-semibold text-slate-800 mb-3">
            <span class="lang-en">A tree has 6 vertices. How many edges does it have? If another graph has 6 vertices and 6 edges, is it a tree?</span>
            <span class="lang-bm hidden">Sebuah pokok mempunyai 6 bucu. Berapa banyak tepi yang ada? Jika graf lain mempunyai 6 bucu dan 6 tepi, adakah ia pokok?</span>
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
                    <span class="lang-en">Use tree formula: Edges = Vertices − 1</span>
                    <span class="lang-bm hidden">Guna rumus pokok: Tepi = Bucu − 1</span>
                    <p class="font-mono text-sm mt-1">Edges = 6 − 1 = <strong class="text-teal-600">5 edges</strong></p>
                </div>
            </div>
            <div class="flex gap-2 text-sm text-slate-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-en">Step 2:</span>
                <span class="text-teal-500 font-bold w-20 flex-shrink-0 lang-bm hidden">Langkah 2:</span>
                <span class="lang-en">For the second graph — 6 vertices, 6 edges. A tree with 6 vertices needs only 5 edges. This graph has MORE edges than a tree, so it MUST have a cycle.</span>
                <span class="lang-bm hidden">Untuk graf kedua — 6 bucu, 6 tepi. Pokok dengan 6 bucu hanya memerlukan 5 tepi. Graf ini mempunyai LEBIH tepi daripada pokok, jadi ia MESTI mempunyai kitar.</span>
            </div>
            <div class="p-3 bg-rose-50 rounded-xl border border-rose-100">
                <p class="text-xs font-semibold text-rose-700 lang-en">∴ It is NOT a tree — it has a cycle. A tree MUST have exactly n−1 edges.</p>
                <p class="text-xs font-semibold text-rose-700 lang-bm hidden">∴ Ia BUKAN pokok — ia mempunyai kitar. Pokok MESTI mempunyai tepat n−1 tepi.</p>
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
                <p class="text-sm font-semibold text-slate-700 lang-en">Counting a loop as degree 1 instead of 2</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Mengira gelung sebagai darjah 1 bukan 2</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">A loop at vertex Q counts as 2 to Q's degree because it connects Q to Q — touching Q twice!</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Gelung pada bucu Q dikira 2 kepada darjah Q kerana ia menghubungkan Q ke Q — menyentuh Q dua kali!</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Confusing simple graph with other graph types</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Keliru antara graf ringkas dengan jenis graf lain</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">Simple graph = NO loops AND NO multiple edges. Even ONE loop makes it non-simple!</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Graf ringkas = TIADA gelung DAN TIADA tepi berganda. Walaupun SATU gelung menjadikannya tidak ringkas!</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Using edges from outside original graph in subgraph</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Menggunakan tepi dari luar graf asal dalam subgraf</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">A subgraph can ONLY use vertices and edges that exist in the original graph. You cannot add new edges.</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Subgraf hanya boleh menggunakan bucu dan tepi yang wujud dalam graf asal. Anda tidak boleh menambah tepi baru.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-slate-700 lang-en">Thinking any graph with n−1 edges is a tree</p>
                <p class="text-sm font-semibold text-slate-700 lang-bm hidden">Menganggap mana-mana graf dengan n−1 tepi adalah pokok</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-en">A tree needs n−1 edges AND must be connected AND must have no cycles. All three conditions must be met!</p>
                <p class="text-xs text-slate-500 mt-0.5 lang-bm hidden">Pokok memerlukan n−1 tepi DAN mesti bersambung DAN mesti tiada kitar. Ketiga-tiga syarat mesti dipenuhi!</p>
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
                <span class="lang-en">1. A graph has 5 edges. What is the sum of all vertex degrees?</span>
                <span class="lang-bm hidden">1. Sebuah graf mempunyai 5 tepi. Berapakah jumlah semua darjah bucu?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => '5', 'bm' => '5'],
                    'B' => ['en' => '8', 'bm' => '8'],
                    'C' => ['en' => '10', 'bm' => '10'],
                    'D' => ['en' => '12', 'bm' => '12'],
                ] as $key => $opts)
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
                <p class="text-xs text-amber-700 lang-en">💡 Hint: Sum of degrees = 2 × number of edges = 2 × 5 = ?</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Jumlah darjah = 2 × bilangan tepi = 2 × 5 = ?</p>
            </div>
        </div>

        {{-- Q2 --}}
        <div class="p-4 bg-slate-50 rounded-xl">
            <p class="text-sm font-semibold text-slate-800 mb-3">
                <span class="lang-en">2. Which of the following is a simple graph?</span>
                <span class="lang-bm hidden">2. Yang manakah antara berikut ialah graf ringkas?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => 'A graph with a loop at vertex A', 'bm' => 'Graf dengan gelung pada bucu A'],
                    'B' => ['en' => 'A graph with two edges between vertex P and Q', 'bm' => 'Graf dengan dua tepi antara bucu P dan Q'],
                    'C' => ['en' => 'A graph where every pair of vertices has exactly one edge', 'bm' => 'Graf di mana setiap pasangan bucu mempunyai tepat satu tepi'],
                    'D' => ['en' => 'A graph with a directed edge from A to B', 'bm' => 'Graf dengan tepi terarah dari A ke B'],
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
                <p class="text-xs text-amber-700 lang-en">💡 Hint: Simple graph = NO loops AND NO multiple edges. A directed graph can still be simple.</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Graf ringkas = TIADA gelung DAN TIADA tepi berganda. Graf terarah masih boleh ringkas.</p>
            </div>
        </div>

        {{-- Q3 --}}
        <div class="p-4 bg-slate-50 rounded-xl">
            <p class="text-sm font-semibold text-slate-800 mb-3">
                <span class="lang-en">3. A tree has 8 vertices. How many edges does it have?</span>
                <span class="lang-bm hidden">3. Sebuah pokok mempunyai 8 bucu. Berapa banyak tepi yang ada?</span>
            </p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => ['en' => '6', 'bm' => '6'],
                    'B' => ['en' => '7', 'bm' => '7'],
                    'C' => ['en' => '8', 'bm' => '8'],
                    'D' => ['en' => '9', 'bm' => '9'],
                ] as $key => $opts)
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
                <p class="text-xs text-amber-700 lang-en">💡 Hint: Tree formula: Edges = Vertices − 1 = 8 − 1 = ?</p>
                <p class="text-xs text-amber-700 lang-bm hidden">💡 Petunjuk: Rumus pokok: Tepi = Bucu − 1 = 8 − 1 = ?</p>
            </div>
        </div>

    </div>
</div>