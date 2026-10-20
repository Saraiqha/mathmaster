{{-- ═══════════════════════════════════════════════
     TOPIC 1: QUADRATIC FUNCTIONS AND EQUATIONS
     Aligned to KSSM Form 4 KPM Textbook Chapter 1
     ═══════════════════════════════════════════════ --}}

{{-- 1. Learning Objectives --}}
<div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">🎯 Learning Objectives</h4>
    <ul class="space-y-2">
        <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-teal-500 mt-0.5">✓</span>
            Identify quadratic expressions and state their characteristics
        </li>
        <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-teal-500 mt-0.5">✓</span>
            Recognise and sketch graphs of quadratic functions for a &gt; 0 and a &lt; 0
        </li>
        <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-teal-500 mt-0.5">✓</span>
            Determine the axis of symmetry, vertex, and y-intercept of a quadratic function
        </li>
        <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-teal-500 mt-0.5">✓</span>
            Solve quadratic equations using factorisation method
        </li>
        <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-teal-500 mt-0.5">✓</span>
            Determine roots of a quadratic equation from its graph
        </li>
    </ul>
</div>

{{-- 2. Key Concepts --}}
<div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">📐 Key Concepts and Formulas</h4>

    {{-- Part A: Quadratic Expression --}}
    <div class="mb-5">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
            <p class="text-sm font-bold text-gray-700">A. Quadratic Expression</p>
        </div>
        <div class="p-4 bg-teal-50 rounded-xl border border-teal-100 mb-3">
            <p class="text-sm font-mono font-semibold text-teal-800">ax² + bx + c</p>
            <p class="text-xs text-gray-500 mt-1">where a, b and c are constants, <strong>a ≠ 0</strong></p>
        </div>
        <div class="grid grid-cols-2 gap-3">
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                <p class="text-xs font-semibold text-gray-600 mb-1">(a) Highest power is 2</p>
                <p class="text-xs text-gray-500">The variable x appears with a maximum power of 2</p>
            </div>
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                <p class="text-xs font-semibold text-gray-600 mb-1">(b) Involves one variable</p>
                <p class="text-xs text-gray-500">Only one unknown variable (x) is present</p>
            </div>
        </div>
    </div>

    {{-- Part B: Quadratic Function --}}
    <div class="mb-5">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-sky-500 rounded-full"></div>
            <p class="text-sm font-bold text-gray-700">B. Quadratic Function</p>
        </div>
        <div class="p-4 bg-sky-50 rounded-xl border border-sky-100 mb-4">
            <p class="text-xs font-bold text-sky-700 mb-1">General Form</p>
            <p class="text-sm font-mono font-semibold text-gray-800">f(x) = ax² + bx + c &nbsp; (a ≠ 0)</p>
        </div>

        {{-- Shape of graph --}}
        <p class="text-xs font-bold text-gray-600 mb-3">Shape of Graph:</p>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="p-4 bg-teal-50 rounded-xl border border-teal-100 text-center">
                <p class="text-2xl mb-2">∪</p>
                <p class="text-xs font-bold text-teal-700">a &gt; 0</p>
                <p class="text-xs text-gray-500 mt-1">Parabola opens <strong>upward</strong></p>
                <p class="text-xs text-gray-400 mt-1">Has a <strong>minimum</strong> point</p>
            </div>
            <div class="p-4 bg-rose-50 rounded-xl border border-rose-100 text-center">
                <p class="text-2xl mb-2">∩</p>
                <p class="text-xs font-bold text-rose-700">a &lt; 0</p>
                <p class="text-xs text-gray-500 mt-1">Parabola opens <strong>downward</strong></p>
                <p class="text-xs text-gray-400 mt-1">Has a <strong>maximum</strong> point</p>
            </div>
        </div>

        {{-- Axis of symmetry cases --}}
        <p class="text-xs font-bold text-gray-600 mb-3">Axis of Symmetry:</p>
        <div class="p-4 bg-violet-50 rounded-xl border border-violet-100 mb-3">
            <p class="text-sm font-mono font-semibold text-violet-800">x = −b / 2a</p>
        </div>
        <div class="grid grid-cols-3 gap-3 mb-4">
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 text-center">
                <p class="text-xs font-bold text-gray-600">b &lt; 0</p>
                <p class="text-xs text-gray-500 mt-1">Axis is on the <strong>right</strong> of y-axis (x &gt; 0)</p>
            </div>
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 text-center">
                <p class="text-xs font-bold text-gray-600">b &gt; 0</p>
                <p class="text-xs text-gray-500 mt-1">Axis is on the <strong>left</strong> of y-axis (x &lt; 0)</p>
            </div>
            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 text-center">
                <p class="text-xs font-bold text-gray-600">b = 0</p>
                <p class="text-xs text-gray-500 mt-1">Axis is the <strong>y-axis</strong> (x = 0)</p>
            </div>
        </div>

        {{-- y-intercept --}}
        <p class="text-xs font-bold text-gray-600 mb-3">y-intercept:</p>
        <div class="p-4 bg-amber-50 rounded-xl border border-amber-100">
            <p class="text-sm text-gray-700">Substitute <strong>x = 0</strong> into f(x):</p>
            <p class="text-sm font-mono font-semibold text-amber-800 mt-1">f(0) = c</p>
            <p class="text-xs text-gray-500 mt-1">The y-intercept is always the constant c</p>
        </div>
    </div>

    {{-- Part C: Quadratic Equation --}}
    <div>
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-2 bg-amber-500 rounded-full"></div>
            <p class="text-sm font-bold text-gray-700">C. Quadratic Equation</p>
        </div>
        <div class="p-4 bg-amber-50 rounded-xl border border-amber-100 mb-3">
            <p class="text-xs font-bold text-amber-700 mb-1">General Form</p>
            <p class="text-sm font-mono font-semibold text-gray-800">ax² + bx + c = 0 &nbsp; (a ≠ 0)</p>
        </div>
        <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 mb-3">
            <p class="text-xs font-semibold text-gray-600 mb-1">What are roots?</p>
            <p class="text-xs text-gray-500">The roots of a quadratic equation are the <strong>values of the variable that satisfy the equation</strong> — i.e. the x-intercepts of the graph.</p>
        </div>
        <p class="text-xs font-bold text-gray-600 mb-3">Methods to find roots:</p>
        <div class="grid grid-cols-2 gap-3">
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100">
                <p class="text-xs font-bold text-teal-700 mb-1">(a) Factorisation</p>
                <p class="text-xs text-gray-500">Express as (x − p)(x − q) = 0, then x = p or x = q</p>
            </div>
            <div class="p-3 bg-sky-50 rounded-xl border border-sky-100">
                <p class="text-xs font-bold text-sky-700 mb-1">(b) Graphical Method</p>
                <p class="text-xs text-gray-500">Roots are the x-coordinates where the graph crosses the x-axis</p>
            </div>
        </div>

        {{-- Graph and roots --}}
        <div class="grid grid-cols-2 gap-3 mt-3">
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100 text-center">
                <p class="text-xs font-bold text-teal-700 mb-1">a &gt; 0</p>
                <p class="text-2xl">∪</p>
                <p class="text-xs text-gray-500 mt-1">Roots at x-intercepts below x-axis</p>
            </div>
            <div class="p-3 bg-rose-50 rounded-xl border border-rose-100 text-center">
                <p class="text-xs font-bold text-rose-700 mb-1">a &lt; 0</p>
                <p class="text-2xl">∩</p>
                <p class="text-xs text-gray-500 mt-1">Roots at x-intercepts above x-axis</p>
            </div>
        </div>
    </div>

</div>

{{-- 3. Worked Examples --}}
<div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-4">✏️ Step-by-Step Worked Examples</h4>

    {{-- Example 1 --}}
    <div class="mb-5 p-4 border border-gray-100 rounded-xl">
        <p class="text-xs font-bold text-gray-400 mb-1 uppercase tracking-wide">Example 1 — Quadratic Function</p>
        <p class="text-sm font-semibold text-gray-800 mb-3">
            Given f(x) = 2x² − 8x + 6, find the axis of symmetry, vertex and y-intercept.
        </p>
        <button id="btn-sol1" onclick="toggleSolution('sol1')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            Show Solution ▼
        </button>
        <div id="sol1" class="hidden mt-4 space-y-2">
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 1:</span>
                <span>Identify: a = 2, b = −8, c = 6. Since a &gt; 0, parabola opens upward (∪ shape)</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 2:</span>
                <span>Axis of symmetry: x = −b/2a = −(−8)/2(2) = 8/4 = <strong>2</strong></span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 3:</span>
                <span>Vertex (minimum point): f(2) = 2(4) − 8(2) + 6 = 8 − 16 + 6 = <strong>−2</strong> → Vertex = (2, −2)</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 4:</span>
                <span>y-intercept: f(0) = c = <strong>6</strong></span>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100 mt-2">
                <p class="text-xs font-semibold text-teal-700">Answer: Axis x = 2, Minimum point (2, −2), y-intercept = 6</p>
            </div>
        </div>
    </div>

    {{-- Example 2 --}}
    <div class="mb-5 p-4 border border-gray-100 rounded-xl">
        <p class="text-xs font-bold text-gray-400 mb-1 uppercase tracking-wide">Example 2 — Factorisation</p>
        <p class="text-sm font-semibold text-gray-800 mb-3">
            Solve x² − 5x + 6 = 0 by factorisation.
        </p>
        <button id="btn-sol2" onclick="toggleSolution('sol2')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            Show Solution ▼
        </button>
        <div id="sol2" class="hidden mt-4 space-y-2">
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 1:</span>
                <span>Find two numbers: product = 6, sum = −5 → (−2) and (−3)</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 2:</span>
                <span>Factorise: (x − 2)(x − 3) = 0</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 3:</span>
                <span>x − 2 = 0 → x = 2, or x − 3 = 0 → x = 3</span>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100 mt-2">
                <p class="text-xs font-semibold text-teal-700">Answer: x = 2 or x = 3 (these are the roots)</p>
            </div>
        </div>
    </div>

    {{-- Example 3 --}}
    <div class="p-4 border border-gray-100 rounded-xl">
        <p class="text-xs font-bold text-gray-400 mb-1 uppercase tracking-wide">Example 3 — Graphical Method</p>
        <p class="text-sm font-semibold text-gray-800 mb-3">
            The graph of f(x) = x² − 4 crosses the x-axis. Find the roots.
        </p>
        <button id="btn-sol3" onclick="toggleSolution('sol3')"
            class="text-xs font-semibold text-teal-600 border border-teal-200 px-3 py-1.5 rounded-lg hover:bg-teal-50 transition">
            Show Solution ▼
        </button>
        <div id="sol3" class="hidden mt-4 space-y-2">
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 1:</span>
                <span>Set f(x) = 0: x² − 4 = 0</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 2:</span>
                <span>x² = 4</span>
            </div>
            <div class="flex gap-2 text-sm text-gray-700">
                <span class="text-teal-500 font-bold w-20 flex-shrink-0">Step 3:</span>
                <span>x = ±2 → the graph crosses at (−2, 0) and (2, 0)</span>
            </div>
            <div class="p-3 bg-teal-50 rounded-xl border border-teal-100 mt-2">
                <p class="text-xs font-semibold text-teal-700">Answer: Roots are x = −2 and x = 2</p>
            </div>
        </div>
    </div>

</div>

{{-- 4. Common Mistakes --}}
<div class="bg-rose-50 border border-rose-100 rounded-2xl p-6 mb-4 shadow-sm">
    <h4 class="text-sm font-bold text-rose-700 mb-4">⚠️ Common Mistakes to Avoid</h4>
    <div class="space-y-3">
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-gray-700">Saying a = 0 is allowed</p>
                <p class="text-xs text-gray-500 mt-0.5">If a = 0, there is no x² term and it becomes a linear function, not quadratic.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-gray-700">Confusing the shape when a &lt; 0</p>
                <p class="text-xs text-gray-500 mt-0.5">When a &lt; 0 the parabola opens downward (∩), not upward. The vertex is a maximum, not minimum.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-gray-700">Wrong axis of symmetry direction for b values</p>
                <p class="text-xs text-gray-500 mt-0.5">When b &lt; 0, the axis x = −b/2a gives a positive x — the axis is to the RIGHT of the y-axis, not left.</p>
            </div>
        </div>
        <div class="flex gap-3">
            <span class="text-rose-400 flex-shrink-0 font-bold">✗</span>
            <div>
                <p class="text-sm font-semibold text-gray-700">Thinking roots are always real</p>
                <p class="text-xs text-gray-500 mt-0.5">A quadratic equation may have no real roots if the graph does not cross the x-axis (parabola entirely above or below).</p>
            </div>
        </div>
    </div>
</div>

{{-- 5. Quick Check --}}
<div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
    <h4 class="text-sm font-bold text-teal-700 mb-5">⚡ Quick Check</h4>
    <div class="space-y-6">

        {{-- Q1 --}}
        <div class="p-4 bg-gray-50 rounded-xl">
            <p class="text-sm font-semibold text-gray-800 mb-3">1. For f(x) = 3x² − 6x + 2, what is the axis of symmetry?</p>
            <div class="space-y-2 mb-3">
                @foreach(['A' => 'x = 1', 'B' => 'x = 2', 'C' => 'x = −1', 'D' => 'x = 3'] as $key => $opt)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc1" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-gray-700">{{ $key }}. {{ $opt }}</span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc1', 'A')"
                class="text-xs font-semibold bg-teal-600 text-white px-4 py-1.5 rounded-lg hover:bg-teal-700 transition">
                Check Answer
            </button>
            <p id="feedback-qc1" class="hidden text-xs mt-2"></p>
            <div id="hint-qc1" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700">💡 Hint: Use x = −b/2a. Here a = 3 and b = −6.</p>
            </div>
        </div>

        {{-- Q2 --}}
        <div class="p-4 bg-gray-50 rounded-xl">
            <p class="text-sm font-semibold text-gray-800 mb-3">2. A quadratic function has a &lt; 0. Which statement is correct?</p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => 'The parabola opens upward',
                    'B' => 'The parabola opens downward',
                    'C' => 'The graph is a straight line',
                    'D' => 'The vertex is a minimum point'
                ] as $key => $opt)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc2" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-gray-700">{{ $key }}. {{ $opt }}</span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc2', 'B')"
                class="text-xs font-semibold bg-teal-600 text-white px-4 py-1.5 rounded-lg hover:bg-teal-700 transition">
                Check Answer
            </button>
            <p id="feedback-qc2" class="hidden text-xs mt-2"></p>
            <div id="hint-qc2" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700">💡 Hint: When a &lt; 0, the shape is ∩ (inverted U).</p>
            </div>
        </div>

        {{-- Q3 --}}
        <div class="p-4 bg-gray-50 rounded-xl">
            <p class="text-sm font-semibold text-gray-800 mb-3">3. The roots of x² − 7x + 12 = 0 are:</p>
            <div class="space-y-2 mb-3">
                @foreach([
                    'A' => 'x = 3 and x = 4',
                    'B' => 'x = −3 and x = −4',
                    'C' => 'x = 6 and x = 2',
                    'D' => 'x = 12 and x = 1'
                ] as $key => $opt)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="qc3" value="{{ $key }}" class="accent-teal-600">
                    <span class="text-sm text-gray-700">{{ $key }}. {{ $opt }}</span>
                </label>
                @endforeach
            </div>
            <button onclick="checkAnswer('qc3', 'A')"
                class="text-xs font-semibold bg-teal-600 text-white px-4 py-1.5 rounded-lg hover:bg-teal-700 transition">
                Check Answer
            </button>
            <p id="feedback-qc3" class="hidden text-xs mt-2"></p>
            <div id="hint-qc3" class="hidden mt-2 p-2 bg-amber-50 border border-amber-100 rounded-lg">
                <p class="text-xs text-amber-700">💡 Hint: Factorise x² − 7x + 12. Find two numbers that multiply to 12 and add to −7.</p>
            </div>
        </div>

    </div>
</div>