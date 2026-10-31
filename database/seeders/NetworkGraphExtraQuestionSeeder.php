<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Topic;

class NetworkGraphExtraQuestionSeeder extends Seeder
{
    private $topicId;

    private function add($diff, $type, $en, $bm, $opts, $optsBm, $ans, $multi, $sol, $solBm)
    {
        $o = $opts ?? [null, null, null, null];
        $ob = $optsBm ?? $o;

        $q = Question::firstOrCreate(
            ['topic_id' => $this->topicId, 'difficulty' => $diff, 'question_text' => $en],
            [
                'type' => $type,
                'question_text_bm' => $bm,
                'option_a' => $o[0], 'option_b' => $o[1], 'option_c' => $o[2], 'option_d' => $o[3],
                'option_a_bm' => $ob[0], 'option_b_bm' => $ob[1], 'option_c_bm' => $ob[2], 'option_d_bm' => $ob[3],
                'correct_answer' => $ans,
                'correct_answers' => $multi,
                'solution_steps' => $sol,
                'solution_steps_bm' => $solBm,
            ]
        );

        if (!$q->wasRecentlyCreated) {
            $this->command->warn('Skipped (already exists): ' . $en);
        }
    }

    public function run(): void
    {
        $this->topicId = Topic::where('name', 'Network in Graph Theory')->first()->id;

        // ───────────── EASY (5) ─────────────
        $this->add('easy', 'mcq',
            'In graph theory, what are the points (dots) of a graph called?',
            'Dalam teori graf, apakah nama titik-titik pada sebuah graf?',
            ['Edges', 'Vertices', 'Loops', 'Weights'],
            ['Tepi', 'Bucu', 'Gelung', 'Wajaran'],
            'B', null,
            'Step 1: The points of a graph are called vertices. Step 2: The lines joining them are called edges. Answer: B.',
            'Langkah 1: Titik-titik pada graf dipanggil bucu. Langkah 2: Garis yang menyambungkannya dipanggil tepi. Jawapan: B.');

        $this->add('easy', 'mcq',
            'What does the degree of a vertex mean?',
            'Apakah maksud darjah bagi sebuah bucu?',
            ['The number of vertices in the graph', 'The number of edges connected to the vertex', 'The length of the longest edge', 'The number of loops in the graph'],
            ['Bilangan bucu dalam graf', 'Bilangan tepi yang disambungkan kepada bucu itu', 'Panjang tepi yang paling panjang', 'Bilangan gelung dalam graf'],
            'B', null,
            'Step 1: The degree of a vertex counts the edges that meet at that vertex. Answer: B.',
            'Langkah 1: Darjah bucu mengira tepi yang bertemu pada bucu itu. Jawapan: B.');

        $this->add('easy', 'true_false',
            'A loop is an edge that joins a vertex to itself.',
            'Gelung ialah tepi yang menyambungkan sebuah bucu kepada dirinya sendiri.',
            null, null, 'True', null,
            'Step 1: A loop starts and ends at the same vertex. Step 2: So the statement is True.',
            'Langkah 1: Gelung bermula dan berakhir pada bucu yang sama. Langkah 2: Maka pernyataan ini Benar.');

        $this->add('easy', 'numerical',
            'A graph has 6 edges. What is the sum of the degrees of all its vertices?',
            'Sebuah graf mempunyai 6 tepi. Berapakah hasil tambah darjah semua bucunya?',
            null, null, '12', null,
            'Step 1: The sum of all degrees = 2 × number of edges. Step 2: 2 × 6 = 12. Answer: 12.',
            'Langkah 1: Hasil tambah semua darjah = 2 × bilangan tepi. Langkah 2: 2 × 6 = 12. Jawapan: 12.');

        $this->add('easy', 'multiple_response',
            'Which of the following are features of a simple graph? Select all that apply.',
            'Yang manakah antara berikut ialah ciri bagi graf ringkas? Pilih semua yang berkenaan.',
            ['It has no loops', 'It has no multiple edges', 'It has at least one loop', 'It has two edges joining the same pair of vertices'],
            ['Ia tiada gelung', 'Ia tiada tepi berganda', 'Ia mempunyai sekurang-kurangnya satu gelung', 'Ia mempunyai dua tepi yang menyambungkan pasangan bucu yang sama'],
            'A', 'A,B',
            'Step 1: A simple graph has no loops. A is correct. Step 2: It has no multiple edges. B is correct. Step 3: C and D describe loops and multiple edges, so they are wrong. Answer: A and B.',
            'Langkah 1: Graf ringkas tiada gelung. A betul. Langkah 2: Ia tiada tepi berganda. B betul. Langkah 3: C dan D menerangkan gelung dan tepi berganda, maka salah. Jawapan: A dan B.');

        // ───────────── MEDIUM (10) — Apply ─────────────
        $this->add('medium', 'mcq',
            'A graph has vertices P, Q, R and S with edges PQ, PR, PS and QR. What is the degree of vertex P?',
            'Sebuah graf mempunyai bucu P, Q, R dan S dengan tepi PQ, PR, PS dan QR. Berapakah darjah bucu P?',
            ['2', '3', '4', '1'], null,
            'B', null,
            'Step 1: Edges connected to P are PQ, PR and PS. Step 2: That is 3 edges. Degree of P = 3. Answer: B.',
            'Langkah 1: Tepi yang disambungkan kepada P ialah PQ, PR dan PS. Langkah 2: Itu 3 tepi. Darjah P = 3. Jawapan: B.');

        $this->add('medium', 'numerical',
            'A graph has vertices P, Q, R and S with edges PQ, PR, PS and QR. What is the sum of the degrees of all the vertices?',
            'Sebuah graf mempunyai bucu P, Q, R dan S dengan tepi PQ, PR, PS dan QR. Berapakah hasil tambah darjah semua bucu?',
            null, null, '8', null,
            'Step 1: Degrees: P = 3, Q = 2, R = 2, S = 1. Step 2: Sum = 3 + 2 + 2 + 1 = 8. Step 3: Check: 2 × 4 edges = 8. Answer: 8.',
            'Langkah 1: Darjah: P = 3, Q = 2, R = 2, S = 1. Langkah 2: Hasil tambah = 3 + 2 + 2 + 1 = 8. Langkah 3: Semak: 2 × 4 tepi = 8. Jawapan: 8.');

        $this->add('medium', 'mcq',
            'A graph has vertices A, B and C with edges AB, AB, BC and a loop at C. What is the degree of vertex C?',
            'Sebuah graf mempunyai bucu A, B dan C dengan tepi AB, AB, BC dan satu gelung pada C. Berapakah darjah bucu C?',
            ['2', '3', '4', '1'], null,
            'B', null,
            'Step 1: Edge BC adds 1 to the degree of C. Step 2: The loop at C adds 2. Step 3: Degree of C = 1 + 2 = 3. Answer: B.',
            'Langkah 1: Tepi BC menambah 1 kepada darjah C. Langkah 2: Gelung pada C menambah 2. Langkah 3: Darjah C = 1 + 2 = 3. Jawapan: B.');

        $this->add('medium', 'mcq',
            'Which of the following graphs is NOT a simple graph?',
            'Graf manakah antara berikut BUKAN graf ringkas?',
            ['A triangle with three vertices and three edges', 'A path of four vertices in a line', 'Two vertices joined by two edges', 'A star with one centre vertex and three outer vertices'],
            ['Segi tiga dengan tiga bucu dan tiga tepi', 'Laluan empat bucu dalam satu garisan', 'Dua bucu yang disambungkan oleh dua tepi', 'Bintang dengan satu bucu pusat dan tiga bucu luar'],
            'C', null,
            'Step 1: A simple graph has no loops and no multiple edges. Step 2: A, B and D have only single edges between vertices. Step 3: C has two edges between the same pair of vertices, which are multiple edges. Answer: C.',
            'Langkah 1: Graf ringkas tiada gelung dan tiada tepi berganda. Langkah 2: A, B dan D hanya mempunyai satu tepi antara bucu. Langkah 3: C mempunyai dua tepi antara pasangan bucu yang sama, iaitu tepi berganda. Jawapan: C.');

        $this->add('medium', 'true_false',
            'In an undirected graph, an edge between P and Q can be travelled from P to Q and also from Q to P.',
            'Dalam graf tak terarah, tepi antara P dan Q boleh dilalui dari P ke Q dan juga dari Q ke P.',
            null, null, 'True', null,
            'Step 1: Edges in an undirected graph have no direction. Step 2: So travel in both ways is allowed. True.',
            'Langkah 1: Tepi dalam graf tak terarah tiada arah. Langkah 2: Maka perjalanan dalam kedua-dua arah dibenarkan. Benar.');

        $this->add('medium', 'mcq',
            'A road map is drawn as a graph. Towns are vertices and each edge shows the distance in kilometres between two towns. What type of graph is this?',
            'Peta jalan dilukis sebagai graf. Bandar ialah bucu dan setiap tepi menunjukkan jarak dalam kilometer antara dua bandar. Apakah jenis graf ini?',
            ['An unweighted graph', 'A weighted graph', 'A tree only', 'A graph with loops only'],
            ['Graf tak berwajaran', 'Graf berwajaran', 'Pokok sahaja', 'Graf dengan gelung sahaja'],
            'B', null,
            'Step 1: Each edge carries a value, the distance. Step 2: A graph whose edges have values is a weighted graph. Answer: B.',
            'Langkah 1: Setiap tepi membawa satu nilai, iaitu jarak. Langkah 2: Graf yang tepinya mempunyai nilai ialah graf berwajaran. Jawapan: B.');

        $this->add('medium', 'numerical',
            'A weighted graph shows the distances: P to Q is 5 km, Q to R is 8 km and R to S is 6 km. What is the total distance travelling from P to S along the route P, Q, R, S?',
            'Graf berwajaran menunjukkan jarak: P ke Q ialah 5 km, Q ke R ialah 8 km dan R ke S ialah 6 km. Berapakah jumlah jarak bagi perjalanan dari P ke S melalui laluan P, Q, R, S?',
            null, null, '19', null,
            'Step 1: Add the weights along the route. Step 2: 5 + 8 + 6 = 19. Answer: 19 km.',
            'Langkah 1: Tambah wajaran sepanjang laluan. Langkah 2: 5 + 8 + 6 = 19. Jawapan: 19 km.');

        $this->add('medium', 'mcq',
            'A tree has 9 vertices. How many edges does it have?',
            'Sebuah pokok mempunyai 9 bucu. Berapakah bilangan tepinya?',
            ['7', '8', '9', '10'], null,
            'B', null,
            'Step 1: A tree with n vertices has n − 1 edges. Step 2: 9 − 1 = 8. Answer: B.',
            'Langkah 1: Pokok dengan n bucu mempunyai n − 1 tepi. Langkah 2: 9 − 1 = 8. Jawapan: B.');

        $this->add('medium', 'multiple_response',
            'A graph has vertices V, W, X and Y with edges VW, WX, XY and VY. Which statements are true? Select all that apply.',
            'Sebuah graf mempunyai bucu V, W, X dan Y dengan tepi VW, WX, XY dan VY. Pernyataan manakah yang benar? Pilih semua yang berkenaan.',
            ['Every vertex has degree 2', 'The sum of the degrees is 8', 'The graph is a tree', 'The graph is a simple graph'],
            ['Setiap bucu mempunyai darjah 2', 'Hasil tambah darjah ialah 8', 'Graf ini ialah pokok', 'Graf ini ialah graf ringkas'],
            'A', 'A,B,D',
            'Step 1: A: V, W, X and Y each have 2 edges. Correct. Step 2: B: 4 × 2 = 8, which equals 2 × 4 edges. Correct. Step 3: C: A tree with 4 vertices has 3 edges, but this graph has 4 edges and a cycle. Wrong. Step 4: D: There are no loops or multiple edges. Correct. Answer: A, B and D.',
            'Langkah 1: A: V, W, X dan Y masing-masing mempunyai 2 tepi. Betul. Langkah 2: B: 4 × 2 = 8, sama dengan 2 × 4 tepi. Betul. Langkah 3: C: Pokok dengan 4 bucu mempunyai 3 tepi, tetapi graf ini mempunyai 4 tepi dan satu kitar. Salah. Langkah 4: D: Tiada gelung atau tepi berganda. Betul. Jawapan: A, B dan D.');

        $this->add('medium', 'mcq',
            'Which of the following can NOT be a subgraph of the triangle with vertices P, Q, R and edges PQ, QR, PR?',
            'Yang manakah antara berikut TIDAK boleh menjadi subgraf bagi segi tiga dengan bucu P, Q, R dan tepi PQ, QR, PR?',
            ['Only the vertex P', 'Vertices P and Q with the edge PQ', 'Vertices P, Q and R with edges PQ and QR', 'Vertices P, Q and S with the edge PS'],
            ['Hanya bucu P', 'Bucu P dan Q dengan tepi PQ', 'Bucu P, Q dan R dengan tepi PQ dan QR', 'Bucu P, Q dan S dengan tepi PS'],
            'D', null,
            'Step 1: A subgraph uses only vertices and edges from the original graph. Step 2: A, B and C use only P, Q, R and the edges PQ, QR. Step 3: D uses vertex S and edge PS, which are not in the original. Answer: D.',
            'Langkah 1: Subgraf hanya menggunakan bucu dan tepi daripada graf asal. Langkah 2: A, B dan C hanya menggunakan P, Q, R dan tepi PQ, QR. Langkah 3: D menggunakan bucu S dan tepi PS, yang tiada dalam graf asal. Jawapan: D.');

        // ───────────── HARD (10) — Analyse / Evaluate ─────────────
        $this->add('hard', 'mcq',
            'A student finds the degree of Q in a graph with edges PQ, QR and a loop at Q. Step 1: PQ adds 1. Step 2: QR adds 1. Step 3: The loop adds 1. Step 4: Degree of Q = 3. Which step contains the error?',
            'Seorang pelajar mencari darjah Q dalam graf dengan tepi PQ, QR dan satu gelung pada Q. Langkah 1: PQ menambah 1. Langkah 2: QR menambah 1. Langkah 3: Gelung menambah 1. Langkah 4: Darjah Q = 3. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Step 3', 'Step 4'],
            ['Langkah 1', 'Langkah 2', 'Langkah 3', 'Langkah 4'],
            'C', null,
            'Step 1: Steps 1 and 2 are correct. Step 2: A loop touches the vertex twice, so it adds 2, not 1. Step 3: The correct degree is 1 + 1 + 2 = 4. Answer: C.',
            'Langkah 1: Langkah 1 dan 2 betul. Langkah 2: Gelung menyentuh bucu dua kali, maka ia menambah 2, bukan 1. Langkah 3: Darjah yang betul ialah 1 + 1 + 2 = 4. Jawapan: C.');

        $this->add('hard', 'mcq',
            'A student draws a graph with 5 vertices whose degrees are 3, 3, 2, 2 and 1, and says it has 5 edges. What is wrong?',
            'Seorang pelajar melukis graf dengan 5 bucu yang darjahnya 3, 3, 2, 2 dan 1, dan berkata ia mempunyai 5 tepi. Apakah yang salah?',
            ['The degrees add up to 11, which is odd, so no such graph exists', 'The graph needs 6 edges', 'A vertex cannot have degree 1', 'There is no mistake'],
            ['Darjah berjumlah 11, iaitu ganjil, maka graf sebegitu tidak wujud', 'Graf itu memerlukan 6 tepi', 'Bucu tidak boleh mempunyai darjah 1', 'Tiada kesilapan'],
            'A', null,
            'Step 1: Sum of degrees = 3 + 3 + 2 + 2 + 1 = 11. Step 2: The sum of degrees must be 2 × edges, so it must be even. Step 3: 11 is odd, so no graph can have these degrees. Answer: A.',
            'Langkah 1: Hasil tambah darjah = 3 + 3 + 2 + 2 + 1 = 11. Langkah 2: Hasil tambah darjah mesti 2 × tepi, maka ia mesti genap. Langkah 3: 11 ialah ganjil, maka tiada graf yang boleh mempunyai darjah ini. Jawapan: A.');

        $this->add('hard', 'mcq',
            'A student says: "A graph with 7 vertices and 7 edges can be a tree." What is wrong with this claim?',
            'Seorang pelajar berkata: "Graf dengan 7 bucu dan 7 tepi boleh menjadi pokok." Apakah yang salah dengan dakwaan ini?',
            ['A tree with 7 vertices has exactly 6 edges, so 7 edges means there is a cycle', 'A tree must have loops', 'A tree needs more edges than vertices', 'There is nothing wrong'],
            ['Pokok dengan 7 bucu mempunyai tepat 6 tepi, maka 7 tepi bermaksud ada kitar', 'Pokok mesti mempunyai gelung', 'Pokok memerlukan lebih banyak tepi daripada bucu', 'Tiada yang salah'],
            'A', null,
            'Step 1: A tree with n vertices has n − 1 edges. Step 2: For 7 vertices, a tree has 6 edges. Step 3: A connected graph with 7 edges has an extra edge that forms a cycle, so it is not a tree. Answer: A.',
            'Langkah 1: Pokok dengan n bucu mempunyai n − 1 tepi. Langkah 2: Bagi 7 bucu, pokok mempunyai 6 tepi. Langkah 3: Graf bersambung dengan 7 tepi mempunyai satu tepi tambahan yang membentuk kitar, maka ia bukan pokok. Jawapan: A.');

        $this->add('hard', 'mcq',
            'Which statement about trees is FALSE?',
            'Pernyataan manakah tentang pokok yang PALSU?',
            ['A tree is a connected graph', 'A tree has no cycles', 'A tree with n vertices has n edges', 'A tree is a simple graph'],
            ['Pokok ialah graf bersambung', 'Pokok tiada kitar', 'Pokok dengan n bucu mempunyai n tepi', 'Pokok ialah graf ringkas'],
            'C', null,
            'Step 1: A, B and D are true properties of a tree. Step 2: A tree with n vertices has n − 1 edges, not n. Step 3: So C is false. Answer: C.',
            'Langkah 1: A, B dan D ialah sifat pokok yang benar. Langkah 2: Pokok dengan n bucu mempunyai n − 1 tepi, bukan n. Langkah 3: Maka C palsu. Jawapan: C.');

        $this->add('hard', 'numerical',
            'A tree has 15 edges. How many vertices does it have?',
            'Sebuah pokok mempunyai 15 tepi. Berapakah bilangan bucunya?',
            null, null, '16', null,
            'Step 1: For a tree, edges = vertices − 1. Step 2: Vertices = edges + 1 = 15 + 1 = 16. Answer: 16.',
            'Langkah 1: Bagi pokok, tepi = bucu − 1. Langkah 2: Bucu = tepi + 1 = 15 + 1 = 16. Jawapan: 16.');

        $this->add('hard', 'numerical',
            'A graph has 5 vertices with degrees 4, 3, 3, 2 and 2. How many edges does the graph have?',
            'Sebuah graf mempunyai 5 bucu dengan darjah 4, 3, 3, 2 dan 2. Berapakah bilangan tepi graf itu?',
            null, null, '7', null,
            'Step 1: Sum of degrees = 4 + 3 + 3 + 2 + 2 = 14. Step 2: Edges = sum of degrees ÷ 2. Step 3: 14 ÷ 2 = 7. Answer: 7.',
            'Langkah 1: Hasil tambah darjah = 4 + 3 + 3 + 2 + 2 = 14. Langkah 2: Tepi = hasil tambah darjah ÷ 2. Langkah 3: 14 ÷ 2 = 7. Jawapan: 7.');

        $this->add('hard', 'mcq',
            'A graph has vertices A, B, C and D with edges AB, BC, CD, DA and AC. Removing which pair of edges does NOT leave a tree?',
            'Sebuah graf mempunyai bucu A, B, C dan D dengan tepi AB, BC, CD, DA dan AC. Membuang pasangan tepi manakah yang TIDAK meninggalkan pokok?',
            ['AC and DA', 'AB and BC', 'AB and DA', 'BC and CD'], null,
            'B', null,
            'Step 1: A tree on 4 vertices needs 3 edges that are connected with no cycle. Step 2: Removing AB and BC leaves CD, DA and AC, and vertex B is left alone, so the graph is not connected. Step 3: The other pairs leave a path or a star, which are trees. Answer: B.',
            'Langkah 1: Pokok pada 4 bucu memerlukan 3 tepi yang bersambung tanpa kitar. Langkah 2: Membuang AB dan BC meninggalkan CD, DA dan AC, dan bucu B tinggal bersendirian, maka graf tidak bersambung. Langkah 3: Pasangan lain meninggalkan laluan atau bintang, yang merupakan pokok. Jawapan: B.');

        $this->add('hard', 'true_false',
            'A graph that has a loop can never be a tree.',
            'Graf yang mempunyai gelung tidak pernah boleh menjadi pokok.',
            null, null, 'True', null,
            'Step 1: A loop forms a cycle, and a tree has no cycles. Step 2: A tree is also a simple graph, which has no loops. So the statement is True.',
            'Langkah 1: Gelung membentuk kitar, dan pokok tiada kitar. Langkah 2: Pokok juga ialah graf ringkas, yang tiada gelung. Maka pernyataan ini Benar.');

        $this->add('hard', 'multiple_response',
            'P, Q and R are vertices of the triangle with edges PQ, QR and PR. Which of the following are subgraphs of this triangle? Select all that apply.',
            'P, Q dan R ialah bucu bagi segi tiga dengan tepi PQ, QR dan PR. Yang manakah antara berikut ialah subgraf bagi segi tiga ini? Pilih semua yang berkenaan.',
            ['Vertices P and Q with the edge PQ', 'Vertices P, Q and R with edges PQ and QR', 'Only the vertex R with no edges', 'Vertices P, Q and S with the edge PS'],
            ['Bucu P dan Q dengan tepi PQ', 'Bucu P, Q dan R dengan tepi PQ dan QR', 'Hanya bucu R tanpa tepi', 'Bucu P, Q dan S dengan tepi PS'],
            'A', 'A,B,C',
            'Step 1: A subgraph takes some vertices and edges from the original. Step 2: A: P, Q and PQ are in the original. Correct. Step 3: B: P, Q, R, PQ and QR are in the original. Correct. Step 4: C: R is in the original and a vertex alone is allowed. Correct. Step 5: D: S and PS are not in the original. Wrong. Answer: A, B and C.',
            'Langkah 1: Subgraf mengambil sebahagian bucu dan tepi daripada graf asal. Langkah 2: A: P, Q dan PQ ada dalam graf asal. Betul. Langkah 3: B: P, Q, R, PQ dan QR ada dalam graf asal. Betul. Langkah 4: C: R ada dalam graf asal dan satu bucu sahaja dibenarkan. Betul. Langkah 5: D: S dan PS tiada dalam graf asal. Salah. Jawapan: A, B dan C.');

        $this->add('hard', 'multiple_response',
            'A graph has 4 vertices and every pair of vertices is joined by exactly one edge. Which statements are true? Select all that apply.',
            'Sebuah graf mempunyai 4 bucu dan setiap pasangan bucu disambungkan oleh tepat satu tepi. Pernyataan manakah yang benar? Pilih semua yang berkenaan.',
            ['The graph has 6 edges', 'Every vertex has degree 3', 'The graph is a tree', 'The sum of the degrees is 12'],
            ['Graf ini mempunyai 6 tepi', 'Setiap bucu mempunyai darjah 3', 'Graf ini ialah pokok', 'Hasil tambah darjah ialah 12'],
            'A', 'A,B,D',
            'Step 1: With 4 vertices there are 6 pairs, so 6 edges. A is correct. Step 2: Each vertex is joined to the other 3, so its degree is 3. B is correct. Step 3: C: A tree with 4 vertices has only 3 edges, and this graph has cycles. Wrong. Step 4: D: 4 × 3 = 12, which equals 2 × 6. Correct. Answer: A, B and D.',
            'Langkah 1: Dengan 4 bucu terdapat 6 pasangan, maka 6 tepi. A betul. Langkah 2: Setiap bucu disambungkan kepada 3 bucu lain, maka darjahnya 3. B betul. Langkah 3: C: Pokok dengan 4 bucu hanya mempunyai 3 tepi, dan graf ini mempunyai kitar. Salah. Langkah 4: D: 4 × 3 = 12, sama dengan 2 × 6. Betul. Jawapan: A, B dan D.');
    }
}