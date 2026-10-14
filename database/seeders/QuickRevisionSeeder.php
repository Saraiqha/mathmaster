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
        'objectives' => 'Understand quadratic functions, sketch graphs and solve quadratic equations.',
        'objectives_bm' => 'Memahami fungsi kuadratik, melukis graf dan menyelesaikan persamaan kuadratik.',
        'key_formulas' => 'General form: f(x) = ax² + bx + c | Vertex form: f(x) = a(x-h)² + k | Quadratic formula: x = (-b ± √(b²-4ac)) / 2a',
        'key_formulas_bm' => 'Bentuk am: f(x) = ax² + bx + c | Bentuk bucu: f(x) = a(x-h)² + k | Rumus kuadratik: x = (-b ± √(b²-4ac)) / 2a',
        'solving_tips' => 'Always check the value of a first. If a > 0 the parabola opens upward, if a < 0 it opens downward. The axis of symmetry is x = -b/2a.',
        'solving_tips_bm' => 'Sentiasa semak nilai a dahulu. Jika a > 0 parabola membuka ke atas, jika a < 0 membuka ke bawah. Paksi simetri ialah x = -b/2a.',
        'worked_example' => 'Find the vertex of f(x) = 2x² - 8x + 6. Step 1: h = -(-8)/2(2) = 2. Step 2: k = 2(2)² - 8(2) + 6 = -2. Vertex = (2, -2).',
        'worked_example_bm' => 'Cari bucu bagi f(x) = 2x² - 8x + 6. Langkah 1: h = -(-8)/2(2) = 2. Langkah 2: k = 2(2)² - 8(2) + 6 = -2. Bucu = (2, -2).',
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