<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuickRevision;
use App\Models\Topic;

class QuickRevisionSeeder extends Seeder
{
    public function run(): void
    {
        $revisions = [
    [
        'topic' => 'Quadratic Functions and Equations',
        'objectives' => 'Identify quadratic expressions (highest power 2, one variable). Recognise and sketch graphs of f(x) = ax² + bx + c for a > 0 and a < 0. Determine axis of symmetry, vertex and y-intercept. Solve quadratic equations using factorisation and graphical method.',
        'objectives_bm' => 'Kenal pasti ungkapan kuadratik (kuasa tertinggi 2, satu pemboleh ubah). Kenal dan lakar graf f(x) = ax² + bx + c untuk a > 0 dan a < 0. Tentukan paksi simetri, bucu dan pintasan-y. Selesaikan persamaan kuadratik menggunakan kaedah pemfaktoran dan kaedah grafik.',
        'key_formulas' => 'Quadratic Expression: ax² + bx + c (a ≠ 0) | Quadratic Function: f(x) = ax² + bx + c | Shape: a > 0 opens upward ∪ (minimum), a < 0 opens downward ∩ (maximum) | Axis of symmetry: x = -b/2a | b < 0: axis right of y-axis | b > 0: axis left of y-axis | b = 0: axis is y-axis | y-intercept: f(0) = c | Quadratic Equation: ax² + bx + c = 0 | Roots found by: (a) factorisation (b) graphical method',
        'key_formulas_bm' => 'Ungkapan Kuadratik: ax² + bx + c (a ≠ 0) | Fungsi Kuadratik: f(x) = ax² + bx + c | Bentuk: a > 0 membuka ke atas ∪ (minimum), a < 0 membuka ke bawah ∩ (maksimum) | Paksi simetri: x = -b/2a | b < 0: paksi di kanan paksi-y | b > 0: paksi di kiri paksi-y | b = 0: paksi ialah paksi-y | Pintasan-y: f(0) = c | Persamaan Kuadratik: ax² + bx + c = 0 | Punca dicari dengan: (a) pemfaktoran (b) kaedah grafik',
        'solving_tips' => 'Step 1: Identify a, b, c from f(x) = ax² + bx + c. Step 2: Check sign of a — positive means ∪ shape (minimum), negative means ∩ shape (maximum). Step 3: Find axis of symmetry using x = -b/2a. Step 4: Find vertex by substituting axis value into f(x). Step 5: Find y-intercept by substituting x = 0 (answer is always c). Step 6: For roots, set f(x) = 0 and factorise.',
        'solving_tips_bm' => 'Langkah 1: Kenal pasti a, b, c daripada f(x) = ax² + bx + c. Langkah 2: Semak tanda a — positif bermakna bentuk ∪ (minimum), negatif bermakna bentuk ∩ (maksimum). Langkah 3: Cari paksi simetri menggunakan x = -b/2a. Langkah 4: Cari bucu dengan menggantikan nilai paksi ke dalam f(x). Langkah 5: Cari pintasan-y dengan menggantikan x = 0 (jawapan sentiasa c). Langkah 6: Untuk punca, tetapkan f(x) = 0 dan faktorkan.',
        'worked_example' => 'Given f(x) = 2x² - 8x + 6. Find axis of symmetry, vertex, y-intercept and roots. Step 1: a = 2 > 0, so parabola opens upward (∪), has minimum point. Step 2: Axis of symmetry: x = -(-8)/2(2) = 8/4 = 2. Step 3: Vertex (minimum): f(2) = 2(4) - 8(2) + 6 = 8 - 16 + 6 = -2. Vertex = (2, -2). Step 4: y-intercept: f(0) = c = 6. Step 5: Roots: 2x² - 8x + 6 = 0 → x² - 4x + 3 = 0 → (x-1)(x-3) = 0 → x = 1 or x = 3.',
        'worked_example_bm' => 'Diberi f(x) = 2x² - 8x + 6. Cari paksi simetri, bucu, pintasan-y dan punca. Langkah 1: a = 2 > 0, maka parabola membuka ke atas (∪), mempunyai titik minimum. Langkah 2: Paksi simetri: x = -(-8)/2(2) = 8/4 = 2. Langkah 3: Bucu (minimum): f(2) = 2(4) - 8(2) + 6 = 8 - 16 + 6 = -2. Bucu = (2, -2). Langkah 4: Pintasan-y: f(0) = c = 6. Langkah 5: Punca: 2x² - 8x + 6 = 0 → x² - 4x + 3 = 0 → (x-1)(x-3) = 0 → x = 1 atau x = 3.',
    ],
    [
        'topic' => 'Number Bases',
        'objectives' => 'Convert numbers between base 2, base 8 and base 10 and perform basic operations.',
        'objectives_bm' => 'Tukar nombor antara asas 2, asas 8 dan asas 10 serta melakukan operasi asas.',
        'key_formulas' => 'To convert base 10 to base 2: divide repeatedly by 2 and read remainders upward. To convert base 2 to base 10: multiply each digit by its place value (powers of 2). | Place values (base 2): 1, 2, 4, 8, 16, 32 from right to left. | Place values (base 8): 1, 8, 64, 512 from right to left.',
        'key_formulas_bm' => 'Tukar asas 10 ke asas 2: bahagi berulang kali dengan 2 dan baca baki ke atas. Tukar asas 2 ke asas 10: darab setiap digit dengan nilai tempat (kuasa 2). | Nilai tempat (asas 2): 1, 2, 4, 8, 16, 32 dari kanan ke kiri. | Nilai tempat (asas 8): 1, 8, 64, 512 dari kanan ke kiri.',
        'solving_tips' => 'Step 1: Identify the source base and target base. Step 2: If converting to base 10, multiply each digit by its place value and add. Step 3: If converting from base 10, divide repeatedly by the target base. Step 4: Write down each remainder. Step 5: Read remainders from bottom to top for the answer.',
        'solving_tips_bm' => 'Langkah 1: Kenal pasti asas sumber dan asas sasaran. Langkah 2: Jika menukar ke asas 10, darab setiap digit dengan nilai tempatnya dan tambah. Langkah 3: Jika menukar dari asas 10, bahagi berulang kali dengan asas sasaran. Langkah 4: Tuliskan setiap baki. Langkah 5: Baca baki dari bawah ke atas untuk jawapan.',
        'worked_example' => 'Convert 25 (base 10) to base 2. Step 1: Divide 25 by 2: quotient = 12, remainder = 1. Step 2: Divide 12 by 2: quotient = 6, remainder = 0. Step 3: Divide 6 by 2: quotient = 3, remainder = 0. Step 4: Divide 3 by 2: quotient = 1, remainder = 1. Step 5: Divide 1 by 2: quotient = 0, remainder = 1. Step 6: Read remainders from bottom to top: 11001. Answer: 25 in base 10 = 11001 in base 2.',
        'worked_example_bm' => 'Tukar 25 (asas 10) kepada asas 2. Langkah 1: Bahagi 25 dengan 2: hasil bahagi = 12, baki = 1. Langkah 2: Bahagi 12 dengan 2: hasil bahagi = 6, baki = 0. Langkah 3: Bahagi 6 dengan 2: hasil bahagi = 3, baki = 0. Langkah 4: Bahagi 3 dengan 2: hasil bahagi = 1, baki = 1. Langkah 5: Bahagi 1 dengan 2: hasil bahagi = 0, baki = 1. Langkah 6: Baca baki dari bawah ke atas: 11001. Jawapan: 25 dalam asas 10 = 11001 dalam asas 2.',
    ],
    [
        'topic' => 'Logical Reasoning',
        'objectives' => 'Identify statements, determine truth values and construct logical arguments.',
        'objectives_bm' => 'Kenal pasti pernyataan, tentukan nilai kebenaran dan bina hujah logik.',
        'key_formulas' => 'Negation: ~p (opposite truth value) | Conjunction: p AND q (both must be true) | Disjunction: p OR q (at least one true) | Implication: if p then q (false only when p true and q false) | Contrapositive: ~q → ~p (equivalent to p → q)',
        'key_formulas_bm' => 'Negasi: ~p (nilai kebenaran bertentangan) | Konjungsi: p DAN q (kedua-dua mesti benar) | Disjungsi: p ATAU q (sekurang-kurangnya satu benar) | Implikasi: jika p maka q (palsu hanya apabila p benar dan q palsu) | Kontrapositif: ~q → ~p (setara dengan p → q)',
        'solving_tips' => 'Step 1: Check if the sentence is a statement (must be true or false). Step 2: Identify the type — negation, conjunction, disjunction or implication. Step 3: Assign truth values to each simple statement. Step 4: Apply the logical operation. Step 5: For implication p→q, remember it is only false when p is true and q is false.',
        'solving_tips_bm' => 'Langkah 1: Semak sama ada ayat itu pernyataan (mesti benar atau palsu). Langkah 2: Kenal pasti jenis — negasi, konjungsi, disjungsi atau implikasi. Langkah 3: Tetapkan nilai kebenaran kepada setiap pernyataan ringkas. Langkah 4: Gunakan operasi logik. Langkah 5: Untuk implikasi p→q, ingat ia hanya palsu apabila p benar dan q palsu.',
        'worked_example' => 'Given p: 5 > 3 and q: 6 is odd. Find p AND q, p OR q and ~p. Step 1: Determine truth values — p: 5 > 3 is True. q: 6 is odd is False. Step 2: p AND q = True AND False = False (both must be true). Step 3: p OR q = True OR False = True (at least one is true). Step 4: ~p = ~True = False (negation reverses truth value).',
        'worked_example_bm' => 'Diberi p: 5 > 3 dan q: 6 ialah ganjil. Cari p DAN q, p ATAU q dan ~p. Langkah 1: Tentukan nilai kebenaran — p: 5 > 3 adalah Benar. q: 6 ialah ganjil adalah Palsu. Langkah 2: p DAN q = Benar DAN Palsu = Palsu (kedua-dua mesti benar). Langkah 3: p ATAU q = Benar ATAU Palsu = Benar (sekurang-kurangnya satu benar). Langkah 4: ~p = ~Benar = Palsu (negasi membalikkan nilai kebenaran).',
    ],
    [
        'topic' => 'Operation on Sets',
        'objectives' => 'Understand sets, perform union, intersection and complement operations and represent them using Venn diagrams.',
        'objectives_bm' => 'Memahami set, melakukan operasi kesatuan, persilangan dan pelengkap serta mewakilinya menggunakan gambar rajah Venn.',
        'key_formulas' => 'Union: A ∪ B (all elements in A or B) | Intersection: A ∩ B (elements in both A and B) | Complement: A\' (elements in ξ not in A) | n(A ∪ B) = n(A) + n(B) - n(A ∩ B) | n(A\') = n(ξ) - n(A)',
        'key_formulas_bm' => 'Kesatuan: A ∪ B (semua elemen dalam A atau B) | Persilangan: A ∩ B (elemen dalam A dan B) | Pelengkap: A\' (elemen dalam ξ bukan dalam A) | n(A ∪ B) = n(A) + n(B) - n(A ∩ B) | n(A\') = n(ξ) - n(A)',
        'solving_tips' => 'Step 1: List all elements of each set clearly. Step 2: For union A ∪ B, combine all elements without repetition. Step 3: For intersection A ∩ B, find only elements that appear in both sets. Step 4: For complement A\', find elements in ξ that are not in A. Step 5: Use the formula n(A ∪ B) = n(A) + n(B) - n(A ∩ B) for counting problems.',
        'solving_tips_bm' => 'Langkah 1: Senaraikan semua elemen setiap set dengan jelas. Langkah 2: Untuk kesatuan A ∪ B, gabungkan semua elemen tanpa ulangan. Langkah 3: Untuk persilangan A ∩ B, cari hanya elemen yang muncul dalam kedua-dua set. Langkah 4: Untuk pelengkap A\', cari elemen dalam ξ yang bukan dalam A. Langkah 5: Guna rumus n(A ∪ B) = n(A) + n(B) - n(A ∩ B) untuk masalah pengiraan.',
        'worked_example' => 'Given ξ = {1,2,3,4,5,6}, A = {1,2,3,4} and B = {3,4,5,6}. Find A ∪ B, A ∩ B and A\'. Step 1: List elements — A = {1,2,3,4}, B = {3,4,5,6}. Step 2: A ∪ B = all elements in A or B = {1,2,3,4,5,6}. Step 3: A ∩ B = elements in both A and B = {3,4}. Step 4: A\' = elements in ξ not in A = {5,6}. Step 5: Verify: n(A ∪ B) = n(A) + n(B) - n(A ∩ B) = 4 + 4 - 2 = 6. Correct.',
        'worked_example_bm' => 'Diberi ξ = {1,2,3,4,5,6}, A = {1,2,3,4} dan B = {3,4,5,6}. Cari A ∪ B, A ∩ B dan A\'. Langkah 1: Senarai elemen — A = {1,2,3,4}, B = {3,4,5,6}. Langkah 2: A ∪ B = semua elemen dalam A atau B = {1,2,3,4,5,6}. Langkah 3: A ∩ B = elemen dalam kedua-dua A dan B = {3,4}. Langkah 4: A\' = elemen dalam ξ bukan dalam A = {5,6}. Langkah 5: Sahkan: n(A ∪ B) = n(A) + n(B) - n(A ∩ B) = 4 + 4 - 2 = 6. Betul.',
    ],
    [
        'topic' => 'Network in Graph Theory',
        'objectives' => 'Understand graphs, identify vertices and edges, calculate vertex degrees and determine Eulerian paths.',
        'objectives_bm' => 'Memahami graf, kenal pasti bucu dan tepi, kira darjah bucu dan tentukan laluan Euler.',
        'key_formulas' => 'Degree of vertex = number of edges connected to it | Sum of all degrees = 2 × number of edges | Eulerian path: exists if exactly 0 or 2 vertices have odd degree | Eulerian circuit: exists if all vertices have even degree | Spanning tree edges = n - 1 (where n = number of vertices)',
        'key_formulas_bm' => 'Darjah bucu = bilangan tepi yang disambungkan kepadanya | Jumlah semua darjah = 2 × bilangan tepi | Laluan Euler: wujud jika tepat 0 atau 2 bucu mempunyai darjah ganjil | Litar Euler: wujud jika semua bucu mempunyai darjah genap | Tepi pokok regang = n - 1 (di mana n = bilangan bucu)',
        'solving_tips' => 'Step 1: Draw the graph and label all vertices and edges clearly. Step 2: Count the degree of each vertex by counting edges connected to it. Step 3: Sum all degrees and verify it equals 2 × number of edges. Step 4: Count vertices with odd degree. Step 5: If 0 odd-degree vertices, Eulerian circuit exists. If 2 odd-degree vertices, Eulerian path exists. If more than 2, neither exists.',
        'solving_tips_bm' => 'Langkah 1: Lukis graf dan label semua bucu dan tepi dengan jelas. Langkah 2: Kira darjah setiap bucu dengan mengira tepi yang disambungkan kepadanya. Langkah 3: Jumlahkan semua darjah dan sahkan ia sama dengan 2 × bilangan tepi. Langkah 4: Kira bucu dengan darjah ganjil. Langkah 5: Jika 0 bucu darjah ganjil, litar Euler wujud. Jika 2 bucu darjah ganjil, laluan Euler wujud. Jika lebih daripada 2, tiada satu pun wujud.',
        'worked_example' => 'A graph has vertices A, B, C, D with edges AB, BC, CD, DA, AC. Find the degree of each vertex and determine if an Eulerian path exists. Step 1: List edges connected to each vertex. Step 2: Degree of A = edges AB, DA, AC = 3. Step 3: Degree of B = edges AB, BC = 2. Step 4: Degree of C = edges BC, CD, AC = 3. Step 5: Degree of D = edges CD, DA = 2. Step 6: Vertices with odd degree: A(3) and C(3) — exactly 2. Step 7: Since exactly 2 vertices have odd degree, an Eulerian path exists.',
        'worked_example_bm' => 'Sebuah graf mempunyai bucu A, B, C, D dengan tepi AB, BC, CD, DA, AC. Cari darjah setiap bucu dan tentukan sama ada laluan Euler wujud. Langkah 1: Senaraikan tepi yang disambungkan kepada setiap bucu. Langkah 2: Darjah A = tepi AB, DA, AC = 3. Langkah 3: Darjah B = tepi AB, BC = 2. Langkah 4: Darjah C = tepi BC, CD, AC = 3. Langkah 5: Darjah D = tepi CD, DA = 2. Langkah 6: Bucu dengan darjah ganjil: A(3) dan C(3) — tepat 2. Langkah 7: Kerana tepat 2 bucu mempunyai darjah ganjil, laluan Euler wujud.',
    ],
];

        foreach ($revisions as $data) {
    $topic = Topic::where('name', $data['topic'])->first();
    if ($topic) {
        QuickRevision::create([
            'topic_id' => $topic->id,
            'objectives' => $data['objectives'],
            'objectives_bm' => $data['objectives_bm'],
            'key_formulas' => $data['key_formulas'],
            'key_formulas_bm' => $data['key_formulas_bm'],
            'solving_tips' => $data['solving_tips'],
            'solving_tips_bm' => $data['solving_tips_bm'],
            'worked_example' => $data['worked_example'],
            'worked_example_bm' => $data['worked_example_bm'],
        ]);
    }
}
    }
}