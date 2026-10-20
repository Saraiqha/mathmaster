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
        'key_formulas' => 'To convert base 10 to base 2: divide repeatedly by 2 and read remainders upward. To convert base 2 to base 10: multiply each digit by its place value (powers of 2).',
        'key_formulas_bm' => 'Tukar asas 10 ke asas 2: bahagi berulang kali dengan 2 dan baca baki ke atas. Tukar asas 2 ke asas 10: darab setiap digit dengan nilai tempat (kuasa 2).',
        'solving_tips' => 'Write out the place values first before converting. For base 2 place values are 1, 2, 4, 8, 16, 32 from right to left.',
        'solving_tips_bm' => 'Tulis nilai tempat dahulu sebelum menukar. Untuk asas 2 nilai tempat ialah 1, 2, 4, 8, 16, 32 dari kanan ke kiri.',
        'worked_example' => 'Convert 25 (base 10) to base 2. 25÷2=12 R1, 12÷2=6 R0, 6÷2=3 R0, 3÷2=1 R1, 1÷2=0 R1. Read remainders upward: 11001. Answer: 11001₂',
        'worked_example_bm' => 'Tukar 25 (asas 10) kepada asas 2. 25÷2=12 B1, 12÷2=6 B0, 6÷2=3 B0, 3÷2=1 B1, 1÷2=0 B1. Baca baki ke atas: 11001. Jawapan: 11001₂',
    ],
    [
        'topic' => 'Logical Reasoning',
        'objectives' => 'Identify statements, determine truth values and construct logical arguments.',
        'objectives_bm' => 'Kenal pasti pernyataan, tentukan nilai kebenaran dan bina hujah logik.',
        'key_formulas' => 'Negation: ~p (opposite truth value) | Conjunction: p AND q (both must be true) | Disjunction: p OR q (at least one true) | Implication: if p then q',
        'key_formulas_bm' => 'Negasi: ~p (nilai kebenaran bertentangan) | Konjungsi: p DAN q (kedua-dua mesti benar) | Disjungsi: p ATAU q (sekurang-kurangnya satu benar) | Implikasi: jika p maka q',
        'solving_tips' => 'A statement must be either true or false, never both. Questions and commands are not statements. For implication p→q, it is only false when p is true and q is false.',
        'solving_tips_bm' => 'Pernyataan mestilah benar atau palsu, tidak boleh kedua-duanya. Soalan dan arahan bukan pernyataan. Untuk implikasi p→q, ia hanya palsu apabila p benar dan q palsu.',
        'worked_example' => 'Given p: 5 > 3 (True) and q: 6 is odd (False). Find p AND q. Since q is false, p AND q = False.',
        'worked_example_bm' => 'Diberi p: 5 > 3 (Benar) dan q: 6 ialah nombor ganjil (Palsu). Cari p DAN q. Kerana q palsu, p DAN q = Palsu.',
    ],
    [
        'topic' => 'Operation on Sets',
        'objectives' => 'Understand sets, perform union, intersection and complement operations and represent them using Venn diagrams.',
        'objectives_bm' => 'Memahami set, melakukan operasi kesatuan, persilangan dan pelengkap serta mewakilinya menggunakan gambar rajah Venn.',
        'key_formulas' => 'Union: A ∪ B (all elements in A or B) | Intersection: A ∩ B (elements in both A and B) | Complement: A\' (elements not in A) | n(A ∪ B) = n(A) + n(B) - n(A ∩ B)',
        'key_formulas_bm' => 'Kesatuan: A ∪ B (semua elemen dalam A atau B) | Persilangan: A ∩ B (elemen dalam A dan B) | Pelengkap: A\' (elemen bukan dalam A) | n(A ∪ B) = n(A) + n(B) - n(A ∩ B)',
        'solving_tips' => 'Always list the elements of each set clearly before performing operations. Draw a Venn diagram to help visualise the relationships between sets.',
        'solving_tips_bm' => 'Sentiasa senaraikan elemen setiap set dengan jelas sebelum melakukan operasi. Lukis gambar rajah Venn untuk membantu menggambarkan hubungan antara set.',
        'worked_example' => 'Given A = {1,2,3,4} and B = {3,4,5,6}. Find A ∪ B and A ∩ B. A ∪ B = {1,2,3,4,5,6}. A ∩ B = {3,4}.',
        'worked_example_bm' => 'Diberi A = {1,2,3,4} dan B = {3,4,5,6}. Cari A ∪ B dan A ∩ B. A ∪ B = {1,2,3,4,5,6}. A ∩ B = {3,4}.',
    ],
    [
        'topic' => 'Network in Graph Theory',
        'objectives' => 'Understand graphs, identify vertices and edges, and solve network problems.',
        'objectives_bm' => 'Memahami graf, kenal pasti bucu dan tepi, dan menyelesaikan masalah rangkaian.',
        'key_formulas' => 'Degree of vertex = number of edges connected to it | Sum of all degrees = 2 × number of edges | Eulerian path exists if exactly 0 or 2 vertices have odd degree.',
        'key_formulas_bm' => 'Darjah bucu = bilangan tepi yang disambungkan kepadanya | Jumlah semua darjah = 2 × bilangan tepi | Laluan Euler wujud jika tepat 0 atau 2 bucu mempunyai darjah ganjil.',
        'solving_tips' => 'Always count the degree of each vertex carefully. A graph has an Eulerian circuit if all vertices have even degree. Label each vertex clearly when drawing graphs.',
        'solving_tips_bm' => 'Sentiasa kira darjah setiap bucu dengan teliti. Graf mempunyai litar Euler jika semua bucu mempunyai darjah genap. Label setiap bucu dengan jelas semasa melukis graf.',
        'worked_example' => 'A graph has vertices A, B, C, D with edges AB, BC, CD, DA, AC. Degree of A = 3, B = 2, C = 3, D = 2. Since 2 vertices have odd degree, an Eulerian path exists.',
        'worked_example_bm' => 'Sebuah graf mempunyai bucu A, B, C, D dengan tepi AB, BC, CD, DA, AC. Darjah A = 3, B = 2, C = 3, D = 2. Kerana 2 bucu mempunyai darjah ganjil, laluan Euler wujud.',
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