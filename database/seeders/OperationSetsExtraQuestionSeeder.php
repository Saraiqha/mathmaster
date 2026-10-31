<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Topic;

class OperationSetsExtraQuestionSeeder extends Seeder
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
        $this->topicId = Topic::where('name', 'Operation on Sets')->first()->id;

        // ───────────── EASY (5) ─────────────
        $this->add('easy', 'mcq',
            'Given P = {1, 3, 5, 7} and Q = {3, 5, 9}. Find P ∩ Q.',
            'Diberi P = {1, 3, 5, 7} dan Q = {3, 5, 9}. Cari P ∩ Q.',
            ['{3, 5}', '{1, 3, 5, 7, 9}', '{1, 7, 9}', '{3, 5, 9}'], null,
            'A', null,
            'Step 1: P ∩ Q contains elements found in both P and Q. Step 2: 3 and 5 appear in both sets. Step 3: P ∩ Q = {3, 5}. Answer: A.',
            'Langkah 1: P ∩ Q mengandungi elemen yang ada dalam P dan Q. Langkah 2: 3 dan 5 terdapat dalam kedua-dua set. Langkah 3: P ∩ Q = {3, 5}. Jawapan: A.');

        $this->add('easy', 'mcq',
            'Which symbol represents the union of two sets?',
            'Simbol manakah mewakili kesatuan dua set?',
            ['∩', '∪', '⊂', "'"], null,
            'B', null,
            'Step 1: ∩ is intersection. Step 2: ∪ is union. Step 3: ⊂ means subset and the prime symbol means complement. Answer: B.',
            'Langkah 1: ∩ ialah persilangan. Langkah 2: ∪ ialah kesatuan. Langkah 3: ⊂ bermaksud subset dan simbol perdana bermaksud pelengkap. Jawapan: B.');

        $this->add('easy', 'true_false',
            'The set P ∩ Q contains only the elements that belong to both P and Q.',
            'Set P ∩ Q mengandungi hanya elemen yang tergolong dalam kedua-dua P dan Q.',
            null, null, 'True', null,
            'Step 1: The intersection of two sets is the set of common elements. Step 2: So the statement is True.',
            'Langkah 1: Persilangan dua set ialah set elemen sepunya. Langkah 2: Maka pernyataan ini Benar.');

        $this->add('easy', 'numerical',
            'n(ξ) = 20 and n(A) = 7. Find n(A\').',
            'n(ξ) = 20 dan n(A) = 7. Cari n(A\').',
            null, null, '13', null,
            'Step 1: n(A\') = n(ξ) − n(A). Step 2: n(A\') = 20 − 7 = 13. Answer: 13.',
            'Langkah 1: n(A\') = n(ξ) − n(A). Langkah 2: n(A\') = 20 − 7 = 13. Jawapan: 13.');

        $this->add('easy', 'multiple_response',
            'Given A = {2, 4, 6} and B = {4, 6, 8}. Which statements are true? Select all that apply.',
            'Diberi A = {2, 4, 6} dan B = {4, 6, 8}. Pernyataan manakah yang benar? Pilih semua yang berkenaan.',
            ['4 is in A ∩ B', '8 is in A ∪ B', '2 is in A ∩ B', '8 is in A'],
            ['4 ada dalam A ∩ B', '8 ada dalam A ∪ B', '2 ada dalam A ∩ B', '8 ada dalam A'],
            'A', 'A,B',
            'Step 1: A ∩ B = {4, 6} and A ∪ B = {2, 4, 6, 8}. Step 2: A: 4 is in {4, 6}. Correct. Step 3: B: 8 is in {2, 4, 6, 8}. Correct. Step 4: C: 2 is not in {4, 6}. Wrong. Step 5: D: 8 is not in A. Wrong. Answer: A and B.',
            'Langkah 1: A ∩ B = {4, 6} dan A ∪ B = {2, 4, 6, 8}. Langkah 2: A: 4 ada dalam {4, 6}. Betul. Langkah 3: B: 8 ada dalam {2, 4, 6, 8}. Betul. Langkah 4: C: 2 tiada dalam {4, 6}. Salah. Langkah 5: D: 8 tiada dalam A. Salah. Jawapan: A dan B.');

        // ───────────── MEDIUM (10) — Apply ─────────────
        $this->add('medium', 'mcq',
            'ξ = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10}, A = {2, 4, 6, 8, 10} and B = {3, 6, 9}. Find (A ∪ B)\'.',
            'ξ = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10}, A = {2, 4, 6, 8, 10} dan B = {3, 6, 9}. Cari (A ∪ B)\'.',
            ['{1, 5, 7}', '{1, 3, 5, 7, 9}', '{2, 4, 8, 10}', '{6}'], null,
            'A', null,
            'Step 1: A ∪ B = {2, 3, 4, 6, 8, 9, 10}. Step 2: (A ∪ B)\' = elements in ξ that are not in A ∪ B. Step 3: (A ∪ B)\' = {1, 5, 7}. Answer: A.',
            'Langkah 1: A ∪ B = {2, 3, 4, 6, 8, 9, 10}. Langkah 2: (A ∪ B)\' = elemen dalam ξ yang tiada dalam A ∪ B. Langkah 3: (A ∪ B)\' = {1, 5, 7}. Jawapan: A.');

        $this->add('medium', 'mcq',
            'In a class of 40 students, 22 join the Robotics Club, 18 join the Chess Club and 7 join both clubs. How many students join at least one club?',
            'Dalam sebuah kelas yang mempunyai 40 orang murid, 22 orang menyertai Kelab Robotik, 18 orang menyertai Kelab Catur dan 7 orang menyertai kedua-dua kelab. Berapakah bilangan murid yang menyertai sekurang-kurangnya satu kelab?',
            ['33', '40', '47', '29'], null,
            'A', null,
            'Step 1: At least one club means n(R ∪ C). Step 2: n(R ∪ C) = n(R) + n(C) − n(R ∩ C). Step 3: n(R ∪ C) = 22 + 18 − 7 = 33. Answer: A.',
            'Langkah 1: Sekurang-kurangnya satu kelab bermaksud n(R ∪ C). Langkah 2: n(R ∪ C) = n(R) + n(C) − n(R ∩ C). Langkah 3: n(R ∪ C) = 22 + 18 − 7 = 33. Jawapan: A.');

        $this->add('medium', 'numerical',
            'In a class of 40 students, 22 join the Robotics Club, 18 join the Chess Club and 7 join both clubs. How many students join neither club?',
            'Dalam sebuah kelas yang mempunyai 40 orang murid, 22 orang menyertai Kelab Robotik, 18 orang menyertai Kelab Catur dan 7 orang menyertai kedua-dua kelab. Berapakah bilangan murid yang tidak menyertai mana-mana kelab?',
            null, null, '7', null,
            'Step 1: At least one club = 22 + 18 − 7 = 33. Step 2: Neither club = total − at least one club. Step 3: 40 − 33 = 7. Answer: 7.',
            'Langkah 1: Sekurang-kurangnya satu kelab = 22 + 18 − 7 = 33. Langkah 2: Tiada kelab = jumlah − sekurang-kurangnya satu kelab. Langkah 3: 40 − 33 = 7. Jawapan: 7.');

        $this->add('medium', 'mcq',
            'n(A) = 14, n(B) = 9 and n(A ∪ B) = 19. Find n(A ∩ B).',
            'n(A) = 14, n(B) = 9 dan n(A ∪ B) = 19. Cari n(A ∩ B).',
            ['4', '5', '23', '10'], null,
            'A', null,
            'Step 1: n(A ∪ B) = n(A) + n(B) − n(A ∩ B). Step 2: 19 = 14 + 9 − n(A ∩ B). Step 3: n(A ∩ B) = 23 − 19 = 4. Answer: A.',
            'Langkah 1: n(A ∪ B) = n(A) + n(B) − n(A ∩ B). Langkah 2: 19 = 14 + 9 − n(A ∩ B). Langkah 3: n(A ∩ B) = 23 − 19 = 4. Jawapan: A.');

        $this->add('medium', 'mcq',
            'ξ = {a, b, c, d, e, f}, P = {a, b, c} and Q = {c, d}. Find P\' ∩ Q.',
            'ξ = {a, b, c, d, e, f}, P = {a, b, c} dan Q = {c, d}. Cari P\' ∩ Q.',
            ['{d}', '{c}', '{d, e, f}', '{c, d}'], null,
            'A', null,
            'Step 1: P\' = elements in ξ not in P = {d, e, f}. Step 2: P\' ∩ Q = elements in both {d, e, f} and {c, d}. Step 3: P\' ∩ Q = {d}. Answer: A.',
            'Langkah 1: P\' = elemen dalam ξ yang tiada dalam P = {d, e, f}. Langkah 2: P\' ∩ Q = elemen dalam kedua-dua {d, e, f} dan {c, d}. Langkah 3: P\' ∩ Q = {d}. Jawapan: A.');

        $this->add('medium', 'true_false',
            'If A is a subset of B, then A ∩ B = A.',
            'Jika A ialah subset bagi B, maka A ∩ B = A.',
            null, null, 'True', null,
            'Step 1: If every element of A is also in B, the common elements are exactly the elements of A. Step 2: So A ∩ B = A. True.',
            'Langkah 1: Jika setiap elemen A juga ada dalam B, elemen sepunya ialah tepat elemen A. Langkah 2: Maka A ∩ B = A. Benar.');

        $this->add('medium', 'numerical',
            'In a survey of 50 people, 30 like tea, 25 like coffee and 10 like neither. How many people like both tea and coffee?',
            'Dalam satu tinjauan terhadap 50 orang, 30 orang suka teh, 25 orang suka kopi dan 10 orang tidak suka kedua-duanya. Berapa orang yang suka kedua-dua teh dan kopi?',
            null, null, '15', null,
            'Step 1: People who like at least one drink = 50 − 10 = 40. Step 2: n(T ∪ C) = n(T) + n(C) − n(T ∩ C), so 40 = 30 + 25 − n(T ∩ C). Step 3: n(T ∩ C) = 55 − 40 = 15. Answer: 15.',
            'Langkah 1: Orang yang suka sekurang-kurangnya satu minuman = 50 − 10 = 40. Langkah 2: n(T ∪ C) = n(T) + n(C) − n(T ∩ C), maka 40 = 30 + 25 − n(T ∩ C). Langkah 3: n(T ∩ C) = 55 − 40 = 15. Jawapan: 15.');

        $this->add('medium', 'mcq',
            'ξ = {1, 2, ..., 12}, A = {x : x is a multiple of 3} and B = {x : x is an even number}. Find A ∩ B.',
            'ξ = {1, 2, ..., 12}, A = {x : x ialah gandaan 3} dan B = {x : x ialah nombor genap}. Cari A ∩ B.',
            ['{6, 12}', '{3, 6, 9, 12}', '{2, 4, 6, 8, 10, 12}', '{6}'], null,
            'A', null,
            'Step 1: A = {3, 6, 9, 12}. Step 2: B = {2, 4, 6, 8, 10, 12}. Step 3: Common elements are 6 and 12. A ∩ B = {6, 12}. Answer: A.',
            'Langkah 1: A = {3, 6, 9, 12}. Langkah 2: B = {2, 4, 6, 8, 10, 12}. Langkah 3: Elemen sepunya ialah 6 dan 12. A ∩ B = {6, 12}. Jawapan: A.');

        $this->add('medium', 'multiple_response',
            'ξ = {1, 2, 3, 4, 5, 6, 7, 8}, A = {1, 2, 3, 4} and B = {3, 4, 5, 6}. Which statements are correct? Select all that apply.',
            'ξ = {1, 2, 3, 4, 5, 6, 7, 8}, A = {1, 2, 3, 4} dan B = {3, 4, 5, 6}. Pernyataan manakah yang betul? Pilih semua yang berkenaan.',
            ['A ∩ B = {3, 4}', 'A ∪ B = {1, 2, 3, 4, 5, 6}', '(A ∪ B)\' = {7, 8}', 'A\' = {1, 2, 7, 8}'], null,
            'A', 'A,B,C',
            'Step 1: A: Common elements are 3 and 4. Correct. Step 2: B: All elements of A or B give {1, 2, 3, 4, 5, 6}. Correct. Step 3: C: Elements of ξ not in A ∪ B are 7 and 8. Correct. Step 4: D: A\' = {5, 6, 7, 8}, not {1, 2, 7, 8}. Wrong. Answer: A, B and C.',
            'Langkah 1: A: Elemen sepunya ialah 3 dan 4. Betul. Langkah 2: B: Semua elemen A atau B memberi {1, 2, 3, 4, 5, 6}. Betul. Langkah 3: C: Elemen ξ yang tiada dalam A ∪ B ialah 7 dan 8. Betul. Langkah 4: D: A\' = {5, 6, 7, 8}, bukan {1, 2, 7, 8}. Salah. Jawapan: A, B dan C.');

        $this->add('medium', 'mcq',
            'In a group of 30 pupils, 20 play football, 12 play badminton and 5 play both sports. How many pupils play football only?',
            'Dalam satu kumpulan 30 orang murid, 20 orang bermain bola sepak, 12 orang bermain badminton dan 5 orang bermain kedua-dua sukan. Berapa orang murid yang bermain bola sepak sahaja?',
            ['15', '7', '12', '17'], null,
            'A', null,
            'Step 1: Football only = n(F) − n(F ∩ B). Step 2: Football only = 20 − 5 = 15. Answer: A.',
            'Langkah 1: Bola sepak sahaja = n(F) − n(F ∩ B). Langkah 2: Bola sepak sahaja = 20 − 5 = 15. Jawapan: A.');

        // ───────────── HARD (10) — Analyse / Evaluate ─────────────
        $this->add('hard', 'mcq',
            'ξ = {1, 2, 3, 4, 5, 6, 7, 8}, A = {1, 2, 3} and B = {3, 4, 5}. A student finds (A ∪ B)\'. Step 1: A ∪ B = {3}. Step 2: (A ∪ B)\' = {1, 2, 4, 5, 6, 7, 8}. Which step contains the error?',
            'ξ = {1, 2, 3, 4, 5, 6, 7, 8}, A = {1, 2, 3} dan B = {3, 4, 5}. Seorang pelajar mencari (A ∪ B)\'. Langkah 1: A ∪ B = {3}. Langkah 2: (A ∪ B)\' = {1, 2, 4, 5, 6, 7, 8}. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Both steps', 'There is no error'],
            ['Langkah 1', 'Langkah 2', 'Kedua-dua langkah', 'Tiada kesilapan'],
            'A', null,
            'Step 1: {3} is A ∩ B, not A ∪ B. The union is {1, 2, 3, 4, 5}. Step 2: The complement of {3} is correct, but it was found from the wrong set. Step 3: The correct answer is (A ∪ B)\' = {6, 7, 8}. Answer: A.',
            'Langkah 1: {3} ialah A ∩ B, bukan A ∪ B. Kesatuan ialah {1, 2, 3, 4, 5}. Langkah 2: Pelengkap {3} adalah betul, tetapi dicari daripada set yang salah. Langkah 3: Jawapan yang betul ialah (A ∪ B)\' = {6, 7, 8}. Jawapan: A.');

        $this->add('hard', 'mcq',
            'n(A) = 10, n(B) = 8 and n(A ∩ B) = 3. A student finds n(A ∪ B). Step 1: n(A ∪ B) = n(A) + n(B) + n(A ∩ B). Step 2: n(A ∪ B) = 10 + 8 + 3. Step 3: n(A ∪ B) = 21. Which step contains the error?',
            'n(A) = 10, n(B) = 8 dan n(A ∩ B) = 3. Seorang pelajar mencari n(A ∪ B). Langkah 1: n(A ∪ B) = n(A) + n(B) + n(A ∩ B). Langkah 2: n(A ∪ B) = 10 + 8 + 3. Langkah 3: n(A ∪ B) = 21. Langkah manakah mengandungi kesilapan?',
            ['Step 1', 'Step 2', 'Step 3', 'There is no error'],
            ['Langkah 1', 'Langkah 2', 'Langkah 3', 'Tiada kesilapan'],
            'A', null,
            'Step 1: The formula should subtract n(A ∩ B), not add it, because common elements are counted twice. Step 2: The correct working is 10 + 8 − 3 = 15. Step 3: So n(A ∪ B) = 15, not 21. Answer: A.',
            'Langkah 1: Rumus sepatutnya menolak n(A ∩ B), bukan menambah, kerana elemen sepunya dikira dua kali. Langkah 2: Pengiraan yang betul ialah 10 + 8 − 3 = 15. Langkah 3: Maka n(A ∪ B) = 15, bukan 21. Jawapan: A.');

        $this->add('hard', 'mcq',
            'A student claims that (A ∩ B)\' = A\' ∩ B\'. Let ξ = {1, 2, 3, 4}, A = {1, 2} and B = {2, 3}. Which statement is correct?',
            'Seorang pelajar mendakwa bahawa (A ∩ B)\' = A\' ∩ B\'. Biar ξ = {1, 2, 3, 4}, A = {1, 2} dan B = {2, 3}. Pernyataan manakah yang betul?',
            ['The student is correct', 'The student is wrong. The correct rule is (A ∩ B)\' = A\' ∪ B\'', 'The student is wrong. The correct rule is (A ∩ B)\' = A ∪ B', 'The student is wrong. The correct rule is (A ∩ B)\' = A\' ∩ B'],
            ['Pelajar itu betul', 'Pelajar itu salah. Peraturan yang betul ialah (A ∩ B)\' = A\' ∪ B\'', 'Pelajar itu salah. Peraturan yang betul ialah (A ∩ B)\' = A ∪ B', 'Pelajar itu salah. Peraturan yang betul ialah (A ∩ B)\' = A\' ∩ B'],
            'B', null,
            'Step 1: A ∩ B = {2}, so (A ∩ B)\' = {1, 3, 4}. Step 2: A\' = {3, 4} and B\' = {1, 4}. Step 3: A\' ∩ B\' = {4}, which is not {1, 3, 4}. So the claim is wrong. Step 4: A\' ∪ B\' = {1, 3, 4}, which matches. Answer: B.',
            'Langkah 1: A ∩ B = {2}, maka (A ∩ B)\' = {1, 3, 4}. Langkah 2: A\' = {3, 4} dan B\' = {1, 4}. Langkah 3: A\' ∩ B\' = {4}, yang bukan {1, 3, 4}. Maka dakwaan itu salah. Langkah 4: A\' ∪ B\' = {1, 3, 4}, yang sepadan. Jawapan: B.');

        $this->add('hard', 'mcq',
            'In a group of 30 people, 18 like A and 15 like B and 8 like both. A student says: "30 − (18 + 15) = −3, so the data must be wrong." What is the student\'s mistake?',
            'Dalam satu kumpulan 30 orang, 18 orang suka A dan 15 orang suka B dan 8 orang suka kedua-duanya. Seorang pelajar berkata: "30 − (18 + 15) = −3, jadi data ini mesti salah." Apakah kesilapan pelajar itu?',
            ['The student forgot that people who like both were counted twice', 'The data really is wrong', 'The student should have added 8 to 30', 'There is no mistake'],
            ['Pelajar terlupa bahawa orang yang suka kedua-duanya dikira dua kali', 'Data itu memang salah', 'Pelajar sepatutnya menambah 8 kepada 30', 'Tiada kesilapan'],
            'A', null,
            'Step 1: Adding 18 and 15 counts the 8 people who like both twice. Step 2: People who like at least one = 18 + 15 − 8 = 25. Step 3: Neither = 30 − 25 = 5. The data is fine. Answer: A.',
            'Langkah 1: Menambah 18 dan 15 mengira 8 orang yang suka kedua-duanya dua kali. Langkah 2: Orang yang suka sekurang-kurangnya satu = 18 + 15 − 8 = 25. Langkah 3: Tiada satu pun = 30 − 25 = 5. Data itu tidak salah. Jawapan: A.');

        $this->add('hard', 'numerical',
            'In a class of 45 students, 28 take Art, 22 take Music and 8 take neither subject. How many students take Art only?',
            'Dalam sebuah kelas 45 orang murid, 28 orang mengambil Seni, 22 orang mengambil Muzik dan 8 orang tidak mengambil kedua-dua subjek. Berapa orang murid yang mengambil Seni sahaja?',
            null, null, '15', null,
            'Step 1: At least one subject = 45 − 8 = 37. Step 2: Both = 28 + 22 − 37 = 13. Step 3: Art only = 28 − 13 = 15. Answer: 15.',
            'Langkah 1: Sekurang-kurangnya satu subjek = 45 − 8 = 37. Langkah 2: Kedua-duanya = 28 + 22 − 37 = 13. Langkah 3: Seni sahaja = 28 − 13 = 15. Jawapan: 15.');

        $this->add('hard', 'numerical',
            'n(ξ) = 40, n(A) = 18, n(B) = 15 and n(A ∩ B) = 6. Find n(A\' ∩ B\').',
            'n(ξ) = 40, n(A) = 18, n(B) = 15 dan n(A ∩ B) = 6. Cari n(A\' ∩ B\').',
            null, null, '13', null,
            'Step 1: n(A ∪ B) = 18 + 15 − 6 = 27. Step 2: A\' ∩ B\' = (A ∪ B)\', the elements outside both sets. Step 3: n(A\' ∩ B\') = 40 − 27 = 13. Answer: 13.',
            'Langkah 1: n(A ∪ B) = 18 + 15 − 6 = 27. Langkah 2: A\' ∩ B\' = (A ∪ B)\', elemen di luar kedua-dua set. Langkah 3: n(A\' ∩ B\') = 40 − 27 = 13. Jawapan: 13.');

        $this->add('hard', 'true_false',
            'For any two sets A and B, n(A ∪ B) is always greater than or equal to n(A).',
            'Bagi mana-mana dua set A dan B, n(A ∪ B) sentiasa lebih besar daripada atau sama dengan n(A).',
            null, null, 'True', null,
            'Step 1: A ∪ B contains every element of A, and possibly more. Step 2: So it can never have fewer elements than A. True.',
            'Langkah 1: A ∪ B mengandungi setiap elemen A, dan mungkin lebih. Langkah 2: Maka ia tidak pernah mempunyai elemen lebih sedikit daripada A. Benar.');

        $this->add('hard', 'true_false',
            'For any sets A and B, (A ∪ B)\' = A\' ∪ B\'.',
            'Bagi mana-mana set A dan B, (A ∪ B)\' = A\' ∪ B\'.',
            null, null, 'False', null,
            'Step 1: Take ξ = {1, 2, 3, 4}, A = {1, 2} and B = {2, 3}. Step 2: (A ∪ B)\' = {1, 2, 3}\' = {4}. Step 3: A\' ∪ B\' = {3, 4} ∪ {1, 4} = {1, 3, 4}. Step 4: They are not equal, so the rule is False. The correct rule is (A ∪ B)\' = A\' ∩ B\'.',
            'Langkah 1: Ambil ξ = {1, 2, 3, 4}, A = {1, 2} dan B = {2, 3}. Langkah 2: (A ∪ B)\' = {1, 2, 3}\' = {4}. Langkah 3: A\' ∪ B\' = {3, 4} ∪ {1, 4} = {1, 3, 4}. Langkah 4: Kedua-duanya tidak sama, maka peraturan itu Palsu. Peraturan yang betul ialah (A ∪ B)\' = A\' ∩ B\'.');

        $this->add('hard', 'multiple_response',
            'ξ = {1, 2, ..., 10}, A = {1, 2, 3, 4, 5}, B = {4, 5, 6, 7} and C = {5, 7, 9}. Which statements are true? Select all that apply.',
            'ξ = {1, 2, ..., 10}, A = {1, 2, 3, 4, 5}, B = {4, 5, 6, 7} dan C = {5, 7, 9}. Pernyataan manakah yang benar? Pilih semua yang berkenaan.',
            ['A ∩ B ∩ C = {5}', '(A ∩ B) ∪ C = {4, 5, 7, 9}', 'A\' ∩ B = {6, 7}', '(B ∪ C)\' = {1, 2, 3, 8}'], null,
            'A', 'A,B,C',
            'Step 1: A: A ∩ B = {4, 5}, then ∩ C = {5}. Correct. Step 2: B: {4, 5} ∪ {5, 7, 9} = {4, 5, 7, 9}. Correct. Step 3: C: A\' = {6, 7, 8, 9, 10}, and ∩ B = {6, 7}. Correct. Step 4: D: B ∪ C = {4, 5, 6, 7, 9}, so (B ∪ C)\' = {1, 2, 3, 8, 10}. The element 10 is missing, so wrong. Answer: A, B and C.',
            'Langkah 1: A: A ∩ B = {4, 5}, kemudian ∩ C = {5}. Betul. Langkah 2: B: {4, 5} ∪ {5, 7, 9} = {4, 5, 7, 9}. Betul. Langkah 3: C: A\' = {6, 7, 8, 9, 10}, dan ∩ B = {6, 7}. Betul. Langkah 4: D: B ∪ C = {4, 5, 6, 7, 9}, maka (B ∪ C)\' = {1, 2, 3, 8, 10}. Elemen 10 tertinggal, maka salah. Jawapan: A, B dan C.');

        $this->add('hard', 'multiple_response',
            'A student claims that A ∩ B = A ∪ B. In which situations is this claim true? Select all that apply.',
            'Seorang pelajar mendakwa bahawa A ∩ B = A ∪ B. Dalam situasi manakah dakwaan ini benar? Pilih semua yang berkenaan.',
            ['A and B contain exactly the same elements', 'A is a proper subset of B', 'A = {1, 2} and B = {2, 3}', 'A = {4, 5} and B = {4, 5}'],
            ['A dan B mengandungi elemen yang tepat sama', 'A ialah subset wajar bagi B', 'A = {1, 2} dan B = {2, 3}', 'A = {4, 5} dan B = {4, 5}'],
            'A', 'A,D',
            'Step 1: A: If A = B, then A ∩ B = A ∪ B = A. Correct. Step 2: B: If A is a proper subset, A ∩ B = A but A ∪ B = B, which are different. Wrong. Step 3: C: A ∩ B = {2} but A ∪ B = {1, 2, 3}. Wrong. Step 4: D: Both give {4, 5}. Correct. Answer: A and D.',
            'Langkah 1: A: Jika A = B, maka A ∩ B = A ∪ B = A. Betul. Langkah 2: B: Jika A subset wajar, A ∩ B = A tetapi A ∪ B = B, yang berbeza. Salah. Langkah 3: C: A ∩ B = {2} tetapi A ∪ B = {1, 2, 3}. Salah. Langkah 4: D: Kedua-duanya memberi {4, 5}. Betul. Jawapan: A dan D.');
    }
}