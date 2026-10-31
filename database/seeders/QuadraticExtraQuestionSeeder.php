<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Topic;

class QuadraticExtraQuestionSeeder extends Seeder
{
    private $topicId;

    private function add($diff, $type, $en, $bm, $opts, $optsBm, $ans, $multi, $sol, $solBm)
    {
        $o = $opts ?? [null, null, null, null];
        $ob = $optsBm ?? $o;

        Question::firstOrCreate(
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
    }

    public function run(): void
    {
        $this->topicId = Topic::where('name', 'Quadratic Functions and Equations')->first()->id;

        // ───────────── EASY (5) ─────────────
        $this->add('easy', 'mcq',
            'Which of the following is a quadratic expression?',
            'Yang manakah antara berikut ialah ungkapan kuadratik?',
            ['3x + 2', 'x² − 5x + 6', 'x³ + 1', '2/x'], null,
            'B', null,
            'Step 1: A quadratic expression has highest power 2 and one variable. Step 2: x² − 5x + 6 fits both conditions. Answer: B.',
            'Langkah 1: Ungkapan kuadratik mempunyai kuasa tertinggi 2 dan satu pemboleh ubah. Langkah 2: x² − 5x + 6 memenuhi kedua-dua syarat. Jawapan: B.');

        $this->add('easy', 'mcq',
            'The graph of f(x) = −3x² + 2 opens in which direction?',
            'Graf f(x) = −3x² + 2 membuka ke arah mana?',
            ['Upward', 'Downward', 'To the left', 'To the right'],
            ['Ke atas', 'Ke bawah', 'Ke kiri', 'Ke kanan'],
            'B', null,
            'Step 1: a = −3. Step 2: a < 0, so the graph opens downward. Answer: B.',
            'Langkah 1: a = −3. Langkah 2: a < 0, maka graf membuka ke bawah. Jawapan: B.');

        $this->add('easy', 'true_false',
            'In f(x) = ax² + bx + c, the value of a can be 0.',
            'Dalam f(x) = ax² + bx + c, nilai a boleh jadi 0.',
            null, null, 'False', null,
            'Step 1: If a = 0 the x² term disappears. Step 2: The function becomes linear, not quadratic. So a ≠ 0. False.',
            'Langkah 1: Jika a = 0 sebutan x² hilang. Langkah 2: Fungsi menjadi linear, bukan kuadratik. Maka a ≠ 0. Palsu.');

        $this->add('easy', 'numerical',
            'Find the y-intercept of f(x) = x² + 4x − 9.',
            'Cari pintasan-y bagi f(x) = x² + 4x − 9.',
            null, null, '-9', null,
            'Step 1: The y-intercept is f(0). Step 2: f(0) = 0 + 0 − 9 = −9. Answer: −9.',
            'Langkah 1: Pintasan-y ialah f(0). Langkah 2: f(0) = 0 + 0 − 9 = −9. Jawapan: −9.');

        $this->add('easy', 'multiple_response',
            'Which of the following are quadratic expressions? Select all that apply.',
            'Yang manakah antara berikut ialah ungkapan kuadratik? Pilih semua yang berkenaan.',
            ['x² + 1', '5x − 2', '2x² − x', 'x³ − x²'], null,
            'A', 'A,C',
            'Step 1: A: highest power 2. Correct. Step 2: B: highest power 1. Wrong. Step 3: C: highest power 2. Correct. Step 4: D: highest power 3. Wrong. Answer: A and C.',
            'Langkah 1: A: kuasa tertinggi 2. Betul. Langkah 2: B: kuasa tertinggi 1. Salah. Langkah 3: C: kuasa tertinggi 2. Betul. Langkah 4: D: kuasa tertinggi 3. Salah. Jawapan: A dan C.');

        // ───────────── MEDIUM (10) — Apply ─────────────
        $this->add('medium', 'mcq',
            'The height of a ball is h(t) = −t² + 6t metres after t seconds. At what time is the ball at its maximum height?',
            'Ketinggian sebiji bola ialah h(t) = −t² + 6t meter selepas t saat. Pada masa bilakah bola mencapai ketinggian maksimum?',
            ['2 seconds', '3 seconds', '4 seconds', '6 seconds'],
            ['2 saat', '3 saat', '4 saat', '6 saat'],
            'B', null,
            'Step 1: a = −1, b = 6. Step 2: Maximum is at the axis of symmetry t = −b/2a = −6/(−2) = 3. Answer: B.',
            'Langkah 1: a = −1, b = 6. Langkah 2: Maksimum berada pada paksi simetri t = −b/2a = −6/(−2) = 3. Jawapan: B.');

        $this->add('medium', 'mcq',
            'A rectangular garden has length (x + 3) m and width x m. Its area is 40 m². Which equation represents this situation?',
            'Sebuah taman segi empat tepat mempunyai panjang (x + 3) m dan lebar x m. Luasnya ialah 40 m². Persamaan manakah mewakili situasi ini?',
            ['x² + 3x − 40 = 0', 'x² − 3x − 40 = 0', 'x² + 3x + 40 = 0', '2x + 6 = 40'], null,
            'A', null,
            'Step 1: Area = length × width = (x + 3)(x). Step 2: x² + 3x = 40. Step 3: x² + 3x − 40 = 0. Answer: A.',
            'Langkah 1: Luas = panjang × lebar = (x + 3)(x). Langkah 2: x² + 3x = 40. Langkah 3: x² + 3x − 40 = 0. Jawapan: A.');

        $this->add('medium', 'numerical',
            'A rectangular garden has length (x + 3) m and width x m. Its area is 40 m². Find the width in metres.',
            'Sebuah taman segi empat tepat mempunyai panjang (x + 3) m dan lebar x m. Luasnya ialah 40 m². Cari lebar dalam meter.',
            null, null, '5', null,
            'Step 1: x² + 3x − 40 = 0. Step 2: Factorise: (x + 8)(x − 5) = 0. Step 3: x = −8 or x = 5. Step 4: Width cannot be negative, so x = 5. Answer: 5.',
            'Langkah 1: x² + 3x − 40 = 0. Langkah 2: Faktorkan: (x + 8)(x − 5) = 0. Langkah 3: x = −8 atau x = 5. Langkah 4: Lebar tidak boleh negatif, maka x = 5. Jawapan: 5.');

        $this->add('medium', 'mcq',
            'Find the vertex of the graph f(x) = x² − 6x + 5.',
            'Cari bucu bagi graf f(x) = x² − 6x + 5.',
            ['(3, −4)', '(−3, −4)', '(3, 4)', '(6, 5)'], null,
            'A', null,
            'Step 1: Axis of symmetry x = −(−6)/2(1) = 3. Step 2: f(3) = 9 − 18 + 5 = −4. Step 3: Vertex = (3, −4). Answer: A.',
            'Langkah 1: Paksi simetri x = −(−6)/2(1) = 3. Langkah 2: f(3) = 9 − 18 + 5 = −4. Langkah 3: Bucu = (3, −4). Jawapan: A.');

        $this->add('medium', 'mcq',
            'Solve x² + x − 12 = 0.',
            'Selesaikan x² + x − 12 = 0.',
            ['x = 4 and x = −3', 'x = −4 and x = 3', 'x = 4 and x = 3', 'x = −4 and x = −3'],
            ['x = 4 dan x = −3', 'x = −4 dan x = 3', 'x = 4 dan x = 3', 'x = −4 dan x = −3'],
            'B', null,
            'Step 1: Find two numbers that multiply to −12 and add to 1: 4 and −3. Step 2: (x + 4)(x − 3) = 0. Step 3: x = −4 or x = 3. Answer: B.',
            'Langkah 1: Cari dua nombor yang hasil darabnya −12 dan hasil tambahnya 1: 4 dan −3. Langkah 2: (x + 4)(x − 3) = 0. Langkah 3: x = −4 atau x = 3. Jawapan: B.');

        $this->add('medium', 'true_false',
            'The graph of f(x) = 2x² − 4x + 5 has axis of symmetry x = 1.',
            'Graf f(x) = 2x² − 4x + 5 mempunyai paksi simetri x = 1.',
            null, null, 'True', null,
            'Step 1: a = 2, b = −4. Step 2: x = −b/2a = 4/4 = 1. The statement is True.',
            'Langkah 1: a = 2, b = −4. Langkah 2: x = −b/2a = 4/4 = 1. Pernyataan ini Benar.');

        $this->add('medium', 'numerical',
            'The quadratic function f(x) = x² − 4x + k has a minimum value of −1. Find the value of k.',
            'Fungsi kuadratik f(x) = x² − 4x + k mempunyai nilai minimum −1. Cari nilai k.',
            null, null, '3', null,
            'Step 1: Axis of symmetry x = 4/2 = 2. Step 2: f(2) = 4 − 8 + k = k − 4. Step 3: k − 4 = −1, so k = 3. Answer: 3.',
            'Langkah 1: Paksi simetri x = 4/2 = 2. Langkah 2: f(2) = 4 − 8 + k = k − 4. Langkah 3: k − 4 = −1, maka k = 3. Jawapan: 3.');

        $this->add('medium', 'multiple_response',
            'For f(x) = x² − 2x − 3, which statements are correct? Select all that apply.',
            'Bagi f(x) = x² − 2x − 3, pernyataan manakah yang betul? Pilih semua yang berkenaan.',
            ['The y-intercept is −3', 'The axis of symmetry is x = 1', 'The roots are −1 and 3', 'The graph opens downward'],
            ['Pintasan-y ialah −3', 'Paksi simetri ialah x = 1', 'Puncanya ialah −1 dan 3', 'Graf membuka ke bawah'],
            'A', 'A,B,C',
            'Step 1: A: f(0) = −3. Correct. Step 2: B: x = 2/2 = 1. Correct. Step 3: C: (x − 3)(x + 1) = 0, roots 3 and −1. Correct. Step 4: D: a = 1 > 0, opens upward. Wrong. Answer: A, B and C.',
            'Langkah 1: A: f(0) = −3. Betul. Langkah 2: B: x = 2/2 = 1. Betul. Langkah 3: C: (x − 3)(x + 1) = 0, punca 3 dan −1. Betul. Langkah 4: D: a = 1 > 0, membuka ke atas. Salah. Jawapan: A, B dan C.');

        $this->add('medium', 'mcq',
            'A ball is thrown and its height is h(t) = −t² + 4t + 5 metres after t seconds. What is the height of the ball when it is thrown (t = 0)?',
            'Sebiji bola dibaling dan ketinggiannya ialah h(t) = −t² + 4t + 5 meter selepas t saat. Berapakah ketinggian bola semasa dibaling (t = 0)?',
            ['0 m', '4 m', '5 m', '9 m'], null,
            'C', null,
            'Step 1: Substitute t = 0. Step 2: h(0) = 0 + 0 + 5 = 5. Answer: C.',
            'Langkah 1: Gantikan t = 0. Langkah 2: h(0) = 0 + 0 + 5 = 5. Jawapan: C.');

        $this->add('medium', 'mcq',
            'The sum of a number n and its square is 12. Which equation represents this?',
            'Hasil tambah suatu nombor n dan kuasa duanya ialah 12. Persamaan manakah mewakili situasi ini?',
            ['n² + n − 12 = 0', 'n² − n − 12 = 0', 'n² + n + 12 = 0', 'n² + n = 0'], null,
            'A', null,
            'Step 1: The number is n and its square is n². Step 2: n + n² = 12. Step 3: n² + n − 12 = 0. Answer: A.',
            'Langkah 1: Nombor ialah n dan kuasa duanya ialah n². Langkah 2: n + n² = 12. Langkah 3: n² + n − 12 = 0. Jawapan: A.');

        // ───────────── HARD (10) — Analyse / Evaluate ─────────────
        $this->add('hard', 'mcq',
            'A student solved x² − 5x + 6 = 0. Step 1: (x − 2)(x − 3) = 0. Step 2: x = −2 or x = −3. Which step contains the error?',
            'Seorang pelajar menyelesaikan x² − 5x + 6 = 0. Langkah 1: (x − 2)(x − 3) = 0. Langkah 2: x = −2 atau x = −3. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Both steps', 'There is no error'],
            ['Langkah 1', 'Langkah 2', 'Kedua-dua langkah', 'Tiada kesilapan'],
            'B', null,
            'Step 1: Step 1 is correct: (−2)(−3) = 6 and −2 + (−3) = −5. Step 2: From x − 2 = 0, x = +2, not −2. Step 3: The correct roots are x = 2 or x = 3. Answer: B.',
            'Langkah 1: Langkah 1 betul: (−2)(−3) = 6 dan −2 + (−3) = −5. Langkah 2: Daripada x − 2 = 0, x = +2, bukan −2. Langkah 3: Punca yang betul ialah x = 2 atau x = 3. Jawapan: B.');

        $this->add('hard', 'mcq',
            'A student finds the axis of symmetry of f(x) = x² + 6x + 5. Step 1: a = 1, b = 6. Step 2: x = −b/2a = 6/2 = 3. Step 3: The axis is x = 3. Which step contains the error?',
            'Seorang pelajar mencari paksi simetri bagi f(x) = x² + 6x + 5. Langkah 1: a = 1, b = 6. Langkah 2: x = −b/2a = 6/2 = 3. Langkah 3: Paksinya ialah x = 3. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Step 3', 'There is no error'],
            ['Langkah 1', 'Langkah 2', 'Langkah 3', 'Tiada kesilapan'],
            'B', null,
            'Step 1: Step 1 is correct. Step 2: The formula is x = −b/2a = −6/2 = −3. The student forgot the negative sign. Step 3: The correct axis is x = −3, which is left of the y-axis since b > 0. Answer: B.',
            'Langkah 1: Langkah 1 betul. Langkah 2: Rumusnya ialah x = −b/2a = −6/2 = −3. Pelajar terlupa tanda negatif. Langkah 3: Paksi yang betul ialah x = −3, di kiri paksi-y kerana b > 0. Jawapan: B.');

        $this->add('hard', 'mcq',
            'A student solved 2x² − 8x + 6 = 0. Step 1: Divide by 2: x² − 4x + 3 = 0. Step 2: (x − 1)(x − 3) = 0. Step 3: x = 1 or x = 3. Which step contains the error?',
            'Seorang pelajar menyelesaikan 2x² − 8x + 6 = 0. Langkah 1: Bahagi dengan 2: x² − 4x + 3 = 0. Langkah 2: (x − 1)(x − 3) = 0. Langkah 3: x = 1 atau x = 3. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Step 3', 'There is no error'],
            ['Langkah 1', 'Langkah 2', 'Langkah 3', 'Tiada kesilapan'],
            'D', null,
            'Step 1: Dividing every term by 2 gives x² − 4x + 3 = 0. Correct. Step 2: (−1)(−3) = 3 and −1 + (−3) = −4. Correct. Step 3: x − 1 = 0 gives x = 1 and x − 3 = 0 gives x = 3. Correct. Answer: D, there is no error.',
            'Langkah 1: Membahagi setiap sebutan dengan 2 memberi x² − 4x + 3 = 0. Betul. Langkah 2: (−1)(−3) = 3 dan −1 + (−3) = −4. Betul. Langkah 3: x − 1 = 0 memberi x = 1 dan x − 3 = 0 memberi x = 3. Betul. Jawapan: D, tiada kesilapan.');

        $this->add('hard', 'mcq',
            'A student says: "For f(x) = −x² + 4x, a = −1 < 0, so the graph opens upward and has a minimum point." What is the mistake?',
            'Seorang pelajar berkata: "Bagi f(x) = −x² + 4x, a = −1 < 0, maka graf membuka ke atas dan mempunyai titik minimum." Apakah kesilapannya?',
            ['The value of a should be positive', 'When a < 0 the graph opens downward and has a maximum point', 'The axis of symmetry is wrong', 'There is no mistake'],
            ['Nilai a sepatutnya positif', 'Apabila a < 0 graf membuka ke bawah dan mempunyai titik maksimum', 'Paksi simetri salah', 'Tiada kesilapan'],
            'B', null,
            'Step 1: a = −1 is correctly identified as negative. Step 2: When a < 0 the graph opens downward (∩ shape). Step 3: A ∩ shape has a maximum point, not a minimum. Answer: B.',
            'Langkah 1: a = −1 dikenal pasti dengan betul sebagai negatif. Langkah 2: Apabila a < 0 graf membuka ke bawah (bentuk ∩). Langkah 3: Bentuk ∩ mempunyai titik maksimum, bukan minimum. Jawapan: B.');

        $this->add('hard', 'numerical',
            'Find the maximum value of f(x) = −x² + 6x − 5.',
            'Cari nilai maksimum bagi f(x) = −x² + 6x − 5.',
            null, null, '4', null,
            'Step 1: Axis of symmetry x = −6/(2 × −1) = 3. Step 2: f(3) = −9 + 18 − 5 = 4. Step 3: Since a < 0 this is the maximum value. Answer: 4.',
            'Langkah 1: Paksi simetri x = −6/(2 × −1) = 3. Langkah 2: f(3) = −9 + 18 − 5 = 4. Langkah 3: Oleh kerana a < 0 ini ialah nilai maksimum. Jawapan: 4.');

        $this->add('hard', 'numerical',
            'The roots of x² − 2x − 8 = 0 are p and q, where p > q. Find the value of p − q.',
            'Punca bagi x² − 2x − 8 = 0 ialah p dan q, dengan p > q. Cari nilai p − q.',
            null, null, '6', null,
            'Step 1: Factorise: (x − 4)(x + 2) = 0. Step 2: Roots are 4 and −2, so p = 4 and q = −2. Step 3: p − q = 4 − (−2) = 6. Answer: 6.',
            'Langkah 1: Faktorkan: (x − 4)(x + 2) = 0. Langkah 2: Punca ialah 4 dan −2, maka p = 4 dan q = −2. Langkah 3: p − q = 4 − (−2) = 6. Jawapan: 6.');

        $this->add('hard', 'mcq',
            'A ball is kicked and its height is h(t) = −5t² + 20t metres after t seconds. After how many seconds does the ball return to the ground?',
            'Sebiji bola ditendang dan ketinggiannya ialah h(t) = −5t² + 20t meter selepas t saat. Selepas berapa saat bola kembali ke tanah?',
            ['2 seconds', '4 seconds', '5 seconds', '20 seconds'],
            ['2 saat', '4 saat', '5 saat', '20 saat'],
            'B', null,
            'Step 1: The ball is on the ground when h = 0. Step 2: −5t² + 20t = 0, so −5t(t − 4) = 0. Step 3: t = 0 (the kick) or t = 4. Step 4: The ball returns to the ground at t = 4. Answer: B.',
            'Langkah 1: Bola berada di tanah apabila h = 0. Langkah 2: −5t² + 20t = 0, maka −5t(t − 4) = 0. Langkah 3: t = 0 (tendangan) atau t = 4. Langkah 4: Bola kembali ke tanah pada t = 4. Jawapan: B.');

        $this->add('hard', 'true_false',
            'The maximum height of the ball in h(t) = −5t² + 20t is 20 metres.',
            'Ketinggian maksimum bola dalam h(t) = −5t² + 20t ialah 20 meter.',
            null, null, 'True', null,
            'Step 1: Axis of symmetry t = −20/(2 × −5) = 2. Step 2: h(2) = −5(4) + 20(2) = −20 + 40 = 20. Step 3: The maximum height is 20 m. True.',
            'Langkah 1: Paksi simetri t = −20/(2 × −5) = 2. Langkah 2: h(2) = −5(4) + 20(2) = −20 + 40 = 20. Langkah 3: Ketinggian maksimum ialah 20 m. Benar.');

        $this->add('hard', 'multiple_response',
            'Which statements are true for f(x) = x² − 4x + 4? Select all that apply.',
            'Pernyataan manakah yang benar bagi f(x) = x² − 4x + 4? Pilih semua yang berkenaan.',
            ['The y-intercept is 4', 'The axis of symmetry is x = 2', 'The equation f(x) = 0 has two different roots', 'The vertex lies on the x-axis'],
            ['Pintasan-y ialah 4', 'Paksi simetri ialah x = 2', 'Persamaan f(x) = 0 mempunyai dua punca yang berbeza', 'Bucu berada pada paksi-x'],
            'A', 'A,B,D',
            'Step 1: A: f(0) = 4. Correct. Step 2: B: x = 4/2 = 2. Correct. Step 3: C: (x − 2)² = 0 gives one repeated root x = 2. Wrong. Step 4: D: f(2) = 0, so the vertex (2, 0) is on the x-axis. Correct. Answer: A, B and D.',
            'Langkah 1: A: f(0) = 4. Betul. Langkah 2: B: x = 4/2 = 2. Betul. Langkah 3: C: (x − 2)² = 0 memberi satu punca berulang x = 2. Salah. Langkah 4: D: f(2) = 0, maka bucu (2, 0) berada pada paksi-x. Betul. Jawapan: A, B dan D.');

        $this->add('hard', 'multiple_response',
            'A student claims that x² = 9 has only one solution, x = 3. Which statements correctly evaluate this claim? Select all that apply.',
            'Seorang pelajar mendakwa bahawa x² = 9 hanya mempunyai satu penyelesaian, x = 3. Pernyataan manakah menilai dakwaan ini dengan betul? Pilih semua yang berkenaan.',
            ['x = −3 also satisfies the equation', 'x = 3 and x = −3 are both roots', 'Only x = 3 is a root', 'x² − 9 = (x − 3)(x + 3), which gives two roots'],
            ['x = −3 juga memenuhi persamaan', 'x = 3 dan x = −3 kedua-duanya punca', 'Hanya x = 3 ialah punca', 'x² − 9 = (x − 3)(x + 3), yang memberi dua punca'],
            'A', 'A,B,D',
            'Step 1: A: (−3)² = 9, so −3 also works. Correct. Step 2: B: both 3 and −3 are roots. Correct. Step 3: C: This repeats the student mistake. Wrong. Step 4: D: x² − 9 = 0 factorises to (x − 3)(x + 3) = 0. Correct. Answer: A, B and D.',
            'Langkah 1: A: (−3)² = 9, maka −3 juga memenuhi. Betul. Langkah 2: B: 3 dan −3 kedua-duanya punca. Betul. Langkah 3: C: Ini mengulang kesilapan pelajar. Salah. Langkah 4: D: x² − 9 = 0 difaktorkan kepada (x − 3)(x + 3) = 0. Betul. Jawapan: A, B dan D.');
    }
}