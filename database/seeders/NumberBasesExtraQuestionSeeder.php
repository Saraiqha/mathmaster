<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Topic;

class NumberBasesExtraQuestionSeeder extends Seeder
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
        $this->topicId = Topic::where('name', 'Number Bases')->first()->id;

        // ───────────── EASY (5) ─────────────
        $this->add('easy', 'mcq',
            'Which digit can NOT be used in a base 5 number?',
            'Digit manakah yang TIDAK boleh digunakan dalam nombor asas 5?',
            ['0', '3', '4', '5'], null,
            'D', null,
            'Step 1: Base 5 uses digits 0, 1, 2, 3 and 4. Step 2: The digit 5 is not allowed. Answer: D.',
            'Langkah 1: Asas 5 menggunakan digit 0, 1, 2, 3 dan 4. Langkah 2: Digit 5 tidak dibenarkan. Jawapan: D.');

        $this->add('easy', 'mcq',
            'What is the place value of the leftmost digit in 1011₂?',
            'Apakah nilai tempat bagi digit paling kiri dalam 1011₂?',
            ['1', '2', '4', '8'], null,
            'D', null,
            'Step 1: Place values from the right are 1, 2, 4, 8. Step 2: The leftmost digit is in the fourth place, which is 2³ = 8. Answer: D.',
            'Langkah 1: Nilai tempat dari kanan ialah 1, 2, 4, 8. Langkah 2: Digit paling kiri berada di tempat keempat, iaitu 2³ = 8. Jawapan: D.');

        $this->add('easy', 'true_false',
            '111₂ = 7₁₀',
            '111₂ = 7₁₀',
            null, null, 'True', null,
            'Step 1: 1×1 + 1×2 + 1×4 = 1 + 2 + 4 = 7. True.',
            'Langkah 1: 1×1 + 1×2 + 1×4 = 1 + 2 + 4 = 7. Benar.');

        $this->add('easy', 'numerical',
            'Convert 1111₂ to base 10.',
            'Tukar 1111₂ kepada asas 10.',
            null, null, '15', null,
            'Step 1: 1×1 + 1×2 + 1×4 + 1×8 = 1 + 2 + 4 + 8 = 15. Answer: 15.',
            'Langkah 1: 1×1 + 1×2 + 1×4 + 1×8 = 1 + 2 + 4 + 8 = 15. Jawapan: 15.');

        $this->add('easy', 'multiple_response',
            'Which of the following are valid base 5 numbers? Select all that apply.',
            'Yang manakah antara berikut ialah nombor asas 5 yang sah? Pilih semua yang berkenaan.',
            ['1234', '1250', '4301', '3405'], null,
            'A', 'A,C',
            'Step 1: Base 5 only allows digits 0 to 4. Step 2: A: 1234. Valid. Step 3: B: 1250 has 5. Invalid. Step 4: C: 4301. Valid. Step 5: D: 3405 has 5. Invalid. Answer: A and C.',
            'Langkah 1: Asas 5 hanya membenarkan digit 0 hingga 4. Langkah 2: A: 1234. Sah. Langkah 3: B: 1250 ada 5. Tidak sah. Langkah 4: C: 4301. Sah. Langkah 5: D: 3405 ada 5. Tidak sah. Jawapan: A dan C.');

        // ───────────── MEDIUM (10) — Apply ─────────────
        $this->add('medium', 'mcq',
            'Convert 342₅ to base 10.',
            'Tukar 342₅ kepada asas 10.',
            ['87', '97', '107', '77'], null,
            'B', null,
            'Step 1: Place values of base 5 are 25, 5, 1. Step 2: (3×25) + (4×5) + (2×1) = 75 + 20 + 2 = 97. Answer: B.',
            'Langkah 1: Nilai tempat asas 5 ialah 25, 5, 1. Langkah 2: (3×25) + (4×5) + (2×1) = 75 + 20 + 2 = 97. Jawapan: B.');

        $this->add('medium', 'mcq',
            'Convert 100₁₀ to base 5.',
            'Tukar 100₁₀ kepada asas 5.',
            ['400₅', '310₅', '440₅', '202₅'], null,
            'A', null,
            'Step 1: 100 ÷ 5 = 20 remainder 0. Step 2: 20 ÷ 5 = 4 remainder 0. Step 3: 4 ÷ 5 = 0 remainder 4. Step 4: Read remainders upward: 400. Answer: A.',
            'Langkah 1: 100 ÷ 5 = 20 baki 0. Langkah 2: 20 ÷ 5 = 4 baki 0. Langkah 3: 4 ÷ 5 = 0 baki 4. Langkah 4: Baca baki ke atas: 400. Jawapan: A.');

        $this->add('medium', 'numerical',
            'A shop stores the code 11010 in binary. What is the code in base 10?',
            'Sebuah kedai menyimpan kod 11010 dalam perduaan. Apakah kod itu dalam asas 10?',
            null, null, '26', null,
            'Step 1: Place values from the right: 1, 2, 4, 8, 16. Step 2: (0×1) + (1×2) + (0×4) + (1×8) + (1×16) = 0 + 2 + 0 + 8 + 16 = 26. Answer: 26.',
            'Langkah 1: Nilai tempat dari kanan: 1, 2, 4, 8, 16. Langkah 2: (0×1) + (1×2) + (0×4) + (1×8) + (1×16) = 0 + 2 + 0 + 8 + 16 = 26. Jawapan: 26.');

        $this->add('medium', 'mcq',
            'Calculate 1101₂ + 111₂.',
            'Hitung 1101₂ + 111₂.',
            ['10100₂', '10010₂', '10110₂', '11000₂'], null,
            'A', null,
            'Step 1: 1101₂ = 13 and 111₂ = 7. Step 2: 13 + 7 = 20. Step 3: 20 = 16 + 4 = 10100₂. Answer: A.',
            'Langkah 1: 1101₂ = 13 dan 111₂ = 7. Langkah 2: 13 + 7 = 20. Langkah 3: 20 = 16 + 4 = 10100₂. Jawapan: A.');

        $this->add('medium', 'mcq',
            'Calculate 53₇ − 24₇.',
            'Hitung 53₇ − 24₇.',
            ['26₇', '36₇', '31₇', '16₇'], null,
            'A', null,
            'Step 1: Rightmost column: 3 − 4 cannot be done, borrow 1. 3 + 7 = 10, 10 − 4 = 6. Step 2: Next column: 5 − 1 (borrowed) − 2 = 2. Step 3: The answer is 26₇. Check: 53₇ = 38, 24₇ = 18, 38 − 18 = 20 = 26₇. Answer: A.',
            'Langkah 1: Lajur paling kanan: 3 − 4 tidak boleh, pinjam 1. 3 + 7 = 10, 10 − 4 = 6. Langkah 2: Lajur seterusnya: 5 − 1 (dipinjam) − 2 = 2. Langkah 3: Jawapannya ialah 26₇. Semak: 53₇ = 38, 24₇ = 18, 38 − 18 = 20 = 26₇. Jawapan: A.');

        $this->add('medium', 'true_false',
            '101101₂ = 55₈',
            '101101₂ = 55₈',
            null, null, 'True', null,
            'Step 1: Group in 3s from the right: 101 | 101. Step 2: 101₂ = 5 and 101₂ = 5. Step 3: So the answer is 55₈. True.',
            'Langkah 1: Kumpulkan dalam 3 dari kanan: 101 | 101. Langkah 2: 101₂ = 5 dan 101₂ = 5. Langkah 3: Jadi jawapannya ialah 55₈. Benar.');

        $this->add('medium', 'numerical',
            'Convert 25₈ to base 2.',
            'Tukar 25₈ kepada asas 2.',
            null, null, '10101', null,
            'Step 1: Convert each octal digit to 3 binary digits: 2 = 010 and 5 = 101. Step 2: Join them: 010101. Step 3: Remove the leading zero: 10101. Answer: 10101.',
            'Langkah 1: Tukar setiap digit oktal kepada 3 digit perduaan: 2 = 010 dan 5 = 101. Langkah 2: Cantumkan: 010101. Langkah 3: Buang sifar di hadapan: 10101. Jawapan: 10101.');

        $this->add('medium', 'multiple_response',
            'Which of the following are equal to 13₁₀? Select all that apply.',
            'Yang manakah antara berikut bersamaan dengan 13₁₀? Pilih semua yang berkenaan.',
            ['1101₂', '15₈', '23₅', '1011₂'], null,
            'A', 'A,B,C',
            'Step 1: A: 8 + 4 + 0 + 1 = 13. Correct. Step 2: B: 1×8 + 5 = 13. Correct. Step 3: C: 2×5 + 3 = 13. Correct. Step 4: D: 8 + 0 + 2 + 1 = 11. Wrong. Answer: A, B and C.',
            'Langkah 1: A: 8 + 4 + 0 + 1 = 13. Betul. Langkah 2: B: 1×8 + 5 = 13. Betul. Langkah 3: C: 2×5 + 3 = 13. Betul. Langkah 4: D: 8 + 0 + 2 + 1 = 11. Salah. Jawapan: A, B dan C.');

        $this->add('medium', 'mcq',
            'Which of the following has the greatest value?',
            'Yang manakah antara berikut mempunyai nilai paling besar?',
            ['1001₂', '21₅', '12₈', '13₆'], null,
            'B', null,
            'Step 1: A: 1001₂ = 8 + 1 = 9. Step 2: B: 21₅ = 2×5 + 1 = 11. Step 3: C: 12₈ = 1×8 + 2 = 10. Step 4: D: 13₆ = 1×6 + 3 = 9. Step 5: The greatest is 11, which is B. Answer: B.',
            'Langkah 1: A: 1001₂ = 8 + 1 = 9. Langkah 2: B: 21₅ = 2×5 + 1 = 11. Langkah 3: C: 12₈ = 1×8 + 2 = 10. Langkah 4: D: 13₆ = 1×6 + 3 = 9. Langkah 5: Yang paling besar ialah 11, iaitu B. Jawapan: B.');

        $this->add('medium', 'mcq',
            'If 24ₙ = 14₁₀, find the value of n.',
            'Jika 24ₙ = 14₁₀, cari nilai n.',
            ['4', '5', '6', '7'], null,
            'B', null,
            'Step 1: 24ₙ = 2n + 4. Step 2: 2n + 4 = 14, so 2n = 10 and n = 5. Step 3: Check: digit 4 is valid in base 5. Answer: B.',
            'Langkah 1: 24ₙ = 2n + 4. Langkah 2: 2n + 4 = 14, maka 2n = 10 dan n = 5. Langkah 3: Semak: digit 4 sah dalam asas 5. Jawapan: B.');

        // ───────────── HARD (10) — Analyse / Evaluate ─────────────
        $this->add('hard', 'mcq',
            'A student converts 13₁₀ to base 2. Step 1: 13 ÷ 2 = 6 remainder 1. Step 2: 6 ÷ 2 = 3 remainder 0. Step 3: 3 ÷ 2 = 1 remainder 1. Step 4: 1 ÷ 2 = 0 remainder 1. Step 5: Read the remainders from top to bottom: 1011₂. Which step contains the error?',
            'Seorang pelajar menukar 13₁₀ kepada asas 2. Langkah 1: 13 ÷ 2 = 6 baki 1. Langkah 2: 6 ÷ 2 = 3 baki 0. Langkah 3: 3 ÷ 2 = 1 baki 1. Langkah 4: 1 ÷ 2 = 0 baki 1. Langkah 5: Baca baki dari atas ke bawah: 1011₂. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Step 4', 'Step 5'],
            ['Langkah 1', 'Langkah 2', 'Langkah 4', 'Langkah 5'],
            'D', null,
            'Step 1: Steps 1 to 4 are all correct divisions. Step 2: Remainders must be read from bottom to top, not top to bottom. Step 3: Bottom to top gives 1101₂. Step 4: Check: 8 + 4 + 0 + 1 = 13. Answer: D.',
            'Langkah 1: Langkah 1 hingga 4 semuanya pembahagian yang betul. Langkah 2: Baki mesti dibaca dari bawah ke atas, bukan atas ke bawah. Langkah 3: Bawah ke atas memberi 1101₂. Langkah 4: Semak: 8 + 4 + 0 + 1 = 13. Jawapan: D.');

        $this->add('hard', 'mcq',
            'A student calculates 101₂ + 11₂. Step 1: Align the digits: 101 + 011. Step 2: Rightmost column: 1 + 1 = 2, write 2. Step 3: Middle column: 0 + 1 = 1. Step 4: Leftmost column: 1 + 0 = 1. Answer: 112₂. Which step contains the error?',
            'Seorang pelajar menghitung 101₂ + 11₂. Langkah 1: Jajarkan digit: 101 + 011. Langkah 2: Lajur paling kanan: 1 + 1 = 2, tulis 2. Langkah 3: Lajur tengah: 0 + 1 = 1. Langkah 4: Lajur paling kiri: 1 + 0 = 1. Jawapan: 112₂. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Step 3', 'Step 4'],
            ['Langkah 1', 'Langkah 2', 'Langkah 3', 'Langkah 4'],
            'B', null,
            'Step 1: The digit 2 does not exist in base 2. Step 2: 1 + 1 = 10 in binary, so write 0 and carry 1. Step 3: The correct answer is 1000₂. Step 4: Check: 5 + 3 = 8 = 1000₂. Answer: B.',
            'Langkah 1: Digit 2 tidak wujud dalam asas 2. Langkah 2: 1 + 1 = 10 dalam perduaan, jadi tulis 0 dan bawa 1. Langkah 3: Jawapan yang betul ialah 1000₂. Langkah 4: Semak: 5 + 3 = 8 = 1000₂. Jawapan: B.');

        $this->add('hard', 'mcq',
            'A student converts 10110₂ to base 8. Step 1: Group in 3s from the left: 101 | 10. Step 2: 101₂ = 5 and 10₂ = 2. Step 3: The answer is 52₈. Which step contains the error?',
            'Seorang pelajar menukar 10110₂ kepada asas 8. Langkah 1: Kumpulkan dalam 3 dari kiri: 101 | 10. Langkah 2: 101₂ = 5 dan 10₂ = 2. Langkah 3: Jawapannya ialah 52₈. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Step 3', 'There is no error'],
            ['Langkah 1', 'Langkah 2', 'Langkah 3', 'Tiada kesilapan'],
            'A', null,
            'Step 1: Groups of 3 must be made from the RIGHT, not the left. Step 2: 10110 becomes 10 | 110, so add a zero: 010 | 110. Step 3: 010₂ = 2 and 110₂ = 6, so the answer is 26₈. Step 4: Check: 10110₂ = 22 and 26₈ = 16 + 6 = 22. Answer: A.',
            'Langkah 1: Kumpulan 3 mesti dibuat dari KANAN, bukan kiri. Langkah 2: 10110 menjadi 10 | 110, jadi tambah sifar: 010 | 110. Langkah 3: 010₂ = 2 dan 110₂ = 6, maka jawapannya ialah 26₈. Langkah 4: Semak: 10110₂ = 22 dan 26₈ = 16 + 6 = 22. Jawapan: A.');

        $this->add('hard', 'mcq',
            'A student says: "Since 8 = 2³, each octal digit becomes 3 binary digits. So 6₈ = 110₂." Is the reasoning correct?',
            'Seorang pelajar berkata: "Oleh kerana 8 = 2³, setiap digit oktal menjadi 3 digit perduaan. Jadi 6₈ = 110₂." Adakah penaakulan ini betul?',
            ['Yes, the reasoning and the answer are correct', 'No, 6₈ should be 011₂', 'No, 6₈ should be 101₂', 'No, 6₈ is not a valid octal number'],
            ['Ya, penaakulan dan jawapan adalah betul', 'Tidak, 6₈ sepatutnya 011₂', 'Tidak, 6₈ sepatutnya 101₂', 'Tidak, 6₈ bukan nombor oktal yang sah'],
            'A', null,
            'Step 1: 8 = 2³, so one octal digit equals 3 binary digits. This is correct. Step 2: 6 = 4 + 2 + 0 = 110₂. Step 3: The reasoning and the answer are both correct. Answer: A.',
            'Langkah 1: 8 = 2³, jadi satu digit oktal sama dengan 3 digit perduaan. Ini betul. Langkah 2: 6 = 4 + 2 + 0 = 110₂. Langkah 3: Penaakulan dan jawapan kedua-duanya betul. Jawapan: A.');

        $this->add('hard', 'numerical',
            'Given that 123ₙ = 38₁₀, find the value of n.',
            'Diberi 123ₙ = 38₁₀, cari nilai n.',
            null, null, '5', null,
            'Step 1: 123ₙ = 1×n² + 2×n + 3 = n² + 2n + 3. Step 2: n² + 2n + 3 = 38, so n² + 2n − 35 = 0. Step 3: Factorise: (n + 7)(n − 5) = 0. Step 4: n = 5 because a base cannot be negative. Answer: 5.',
            'Langkah 1: 123ₙ = 1×n² + 2×n + 3 = n² + 2n + 3. Langkah 2: n² + 2n + 3 = 38, maka n² + 2n − 35 = 0. Langkah 3: Faktorkan: (n + 7)(n − 5) = 0. Langkah 4: n = 5 kerana asas tidak boleh negatif. Jawapan: 5.');

        $this->add('hard', 'numerical',
            'Calculate 1011₂ × 11₂. Give the answer in base 10.',
            'Hitung 1011₂ × 11₂. Berikan jawapan dalam asas 10.',
            null, null, '33', null,
            'Step 1: 1011₂ = 8 + 0 + 2 + 1 = 11. Step 2: 11₂ = 2 + 1 = 3. Step 3: 11 × 3 = 33. Answer: 33.',
            'Langkah 1: 1011₂ = 8 + 0 + 2 + 1 = 11. Langkah 2: 11₂ = 2 + 1 = 3. Langkah 3: 11 × 3 = 33. Jawapan: 33.');

        $this->add('hard', 'mcq',
            'Which of the following calculations is INCORRECT?',
            'Yang manakah antara pengiraan berikut TIDAK betul?',
            ['11₂ + 1₂ = 100₂', '77₈ + 1₈ = 100₈', '55₈ + 1₈ = 60₈', '1111₂ + 1₂ = 10000₂'], null,
            'C', null,
            'Step 1: A: 3 + 1 = 4 = 100₂. Correct. Step 2: B: 63 + 1 = 64 = 100₈. Correct. Step 3: C: 55₈ = 45, 45 + 1 = 46 = 56₈, not 60₈. Incorrect. Step 4: D: 15 + 1 = 16 = 10000₂. Correct. Answer: C.',
            'Langkah 1: A: 3 + 1 = 4 = 100₂. Betul. Langkah 2: B: 63 + 1 = 64 = 100₈. Betul. Langkah 3: C: 55₈ = 45, 45 + 1 = 46 = 56₈, bukan 60₈. Tidak betul. Langkah 4: D: 15 + 1 = 16 = 10000₂. Betul. Jawapan: C.');

        $this->add('hard', 'true_false',
            'The number 100₁₀ needs fewer digits in base 8 than in base 2.',
            'Nombor 100₁₀ memerlukan lebih sedikit digit dalam asas 8 berbanding asas 2.',
            null, null, 'True', null,
            'Step 1: 100₁₀ = 144₈, which has 3 digits. Step 2: 100₁₀ = 1100100₂, which has 7 digits. Step 3: 3 < 7. True.',
            'Langkah 1: 100₁₀ = 144₈, yang mempunyai 3 digit. Langkah 2: 100₁₀ = 1100100₂, yang mempunyai 7 digit. Langkah 3: 3 < 7. Benar.');

        $this->add('hard', 'multiple_response',
            'Which of the following are equal to 64₁₀? Select all that apply.',
            'Yang manakah antara berikut bersamaan dengan 64₁₀? Pilih semua yang berkenaan.',
            ['1000000₂', '100₈', '224₅', '77₈'], null,
            'A', 'A,B,C',
            'Step 1: A: 2⁶ = 64. Correct. Step 2: B: 1×64 = 64. Correct. Step 3: C: 2×25 + 2×5 + 4 = 50 + 10 + 4 = 64. Correct. Step 4: D: 7×8 + 7 = 63. Wrong. Answer: A, B and C.',
            'Langkah 1: A: 2⁶ = 64. Betul. Langkah 2: B: 1×64 = 64. Betul. Langkah 3: C: 2×25 + 2×5 + 4 = 50 + 10 + 4 = 64. Betul. Langkah 4: D: 7×8 + 7 = 63. Salah. Jawapan: A, B dan C.');

        $this->add('hard', 'multiple_response',
            'Which of the following claims are true? Select all that apply.',
            'Dakwaan manakah yang benar? Pilih semua yang berkenaan.',
            ['The digit 6 can be used in a base 6 number', '1 + 1 = 10 in base 2', 'A carry happens in base 8 when a column sum reaches 8', '14₅ is greater than 9₁₀'],
            ['Digit 6 boleh digunakan dalam nombor asas 6', '1 + 1 = 10 dalam asas 2', 'Bawa berlaku dalam asas 8 apabila hasil tambah lajur mencapai 8', '14₅ lebih besar daripada 9₁₀'],
            'B', 'B,C',
            'Step 1: A: Base 6 uses digits 0 to 5 only. Wrong. Step 2: B: 1 + 1 = 2, and 2 is written as 10 in base 2. Correct. Step 3: C: A carry happens when the sum reaches the base. Correct. Step 4: D: 14₅ = 5 + 4 = 9, which is equal to 9₁₀, not greater. Wrong. Answer: B and C.',
            'Langkah 1: A: Asas 6 hanya menggunakan digit 0 hingga 5. Salah. Langkah 2: B: 1 + 1 = 2, dan 2 ditulis sebagai 10 dalam asas 2. Betul. Langkah 3: C: Bawa berlaku apabila hasil tambah mencapai asas. Betul. Langkah 4: D: 14₅ = 5 + 4 = 9, yang sama dengan 9₁₀, bukan lebih besar. Salah. Jawapan: B dan C.');
    }
}