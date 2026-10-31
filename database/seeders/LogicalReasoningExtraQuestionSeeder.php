<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Topic;

class LogicalReasoningExtraQuestionSeeder extends Seeder
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
        $this->topicId = Topic::where('name', 'Logical Reasoning')->first()->id;

        // ───────────── EASY (5) ─────────────
        $this->add('easy', 'mcq',
            'Which of the following is a statement?',
            'Yang manakah antara berikut ialah pernyataan?',
            ['Close the door.', 'Is 7 a prime number?', '9 is an odd number.', 'What a nice day!'],
            ['Tutup pintu itu.', 'Adakah 7 nombor perdana?', '9 ialah nombor ganjil.', 'Alangkah indahnya hari ini!'],
            'C', null,
            'Step 1: A statement must be clearly true or false. Step 2: A is a command, B is a question and D is an exclamation. Step 3: C can be decided as true. Answer: C.',
            'Langkah 1: Pernyataan mestilah jelas benar atau palsu. Langkah 2: A ialah arahan, B ialah soalan dan D ialah seruan. Langkah 3: C boleh ditentukan sebagai benar. Jawapan: C.');

        $this->add('easy', 'mcq',
            'What is the negation of "12 is a multiple of 5"?',
            'Apakah negasi bagi "12 ialah gandaan 5"?',
            ['12 is a multiple of 5', '12 is not a multiple of 5', '5 is a multiple of 12', '12 is a multiple of 6'],
            ['12 ialah gandaan 5', '12 bukan gandaan 5', '5 ialah gandaan 12', '12 ialah gandaan 6'],
            'B', null,
            'Step 1: Negation reverses the statement by adding "not". Step 2: The negation is "12 is not a multiple of 5". Answer: B.',
            'Langkah 1: Negasi membalikkan pernyataan dengan menambah "bukan". Langkah 2: Negasinya ialah "12 bukan gandaan 5". Jawapan: B.');

        $this->add('easy', 'true_false',
            '"Is 3 + 4 = 8?" is a statement.',
            '"Adakah 3 + 4 = 8?" ialah satu pernyataan.',
            null, null, 'False', null,
            'Step 1: A statement must be either true or false. Step 2: This sentence is a question, so it cannot be true or false. False.',
            'Langkah 1: Pernyataan mestilah sama ada benar atau palsu. Langkah 2: Ayat ini ialah soalan, maka ia tidak boleh benar atau palsu. Palsu.');

        $this->add('easy', 'numerical',
            'How many truth values can a statement have?',
            'Berapakah bilangan nilai kebenaran yang boleh ada pada sesuatu pernyataan?',
            null, null, '2', null,
            'Step 1: A statement is either true or false. Step 2: That gives 2 truth values. Answer: 2.',
            'Langkah 1: Pernyataan sama ada benar atau palsu. Langkah 2: Itu memberi 2 nilai kebenaran. Jawapan: 2.');

        $this->add('easy', 'multiple_response',
            'Which of the following are statements? Select all that apply.',
            'Yang manakah antara berikut ialah pernyataan? Pilih semua yang berkenaan.',
            ['2 + 5 = 7', 'Open the window.', '10 is less than 4', 'Is it raining?'],
            ['2 + 5 = 7', 'Buka tingkap itu.', '10 kurang daripada 4', 'Adakah hujan turun?'],
            'A', 'A,C',
            'Step 1: A is true, so it is a statement. Step 2: B is a command. Not a statement. Step 3: C is false, so it is a statement. Step 4: D is a question. Not a statement. Answer: A and C.',
            'Langkah 1: A benar, maka ia pernyataan. Langkah 2: B ialah arahan. Bukan pernyataan. Langkah 3: C palsu, maka ia pernyataan. Langkah 4: D ialah soalan. Bukan pernyataan. Jawapan: A dan C.');

        // ───────────── MEDIUM (10) — Apply ─────────────
        $this->add('medium', 'mcq',
            'p: 15 is a multiple of 5 (True). q: 15 is an even number (False). What is the truth value of "p and q"?',
            'p: 15 ialah gandaan 5 (Benar). q: 15 ialah nombor genap (Palsu). Apakah nilai kebenaran bagi "p dan q"?',
            ['True', 'False', 'Cannot be determined', 'Both true and false'],
            ['Benar', 'Palsu', 'Tidak dapat ditentukan', 'Benar dan palsu'],
            'B', null,
            'Step 1: p is True and q is False. Step 2: "p and q" is true only when both are true. Step 3: Here q is false, so "p and q" is False. Answer: B.',
            'Langkah 1: p Benar dan q Palsu. Langkah 2: "p dan q" benar hanya apabila kedua-duanya benar. Langkah 3: Di sini q palsu, maka "p dan q" Palsu. Jawapan: B.');

        $this->add('medium', 'mcq',
            'p: 9 is a prime number (False). q: 9 is a square number (True). What is the truth value of "p or q"?',
            'p: 9 ialah nombor perdana (Palsu). q: 9 ialah nombor kuasa dua sempurna (Benar). Apakah nilai kebenaran bagi "p atau q"?',
            ['True, because q is true', 'False, because p is false', 'True, because both are true', 'False, because both are false'],
            ['Benar, kerana q benar', 'Palsu, kerana p palsu', 'Benar, kerana kedua-duanya benar', 'Palsu, kerana kedua-duanya palsu'],
            'A', null,
            'Step 1: "p or q" is true when at least one of them is true. Step 2: q is True. Step 3: So "p or q" is True because q is true. Answer: A.',
            'Langkah 1: "p atau q" benar apabila sekurang-kurangnya satu daripadanya benar. Langkah 2: q Benar. Langkah 3: Maka "p atau q" Benar kerana q benar. Jawapan: A.');

        $this->add('medium', 'mcq',
            'What is the converse of "If a number is divisible by 10, then it is divisible by 5"?',
            'Apakah songsangan terbalik (konvers) bagi "Jika suatu nombor boleh dibahagi dengan 10, maka ia boleh dibahagi dengan 5"?',
            ['If a number is divisible by 5, then it is divisible by 10', 'If a number is not divisible by 10, then it is not divisible by 5', 'If a number is not divisible by 5, then it is not divisible by 10', 'If a number is divisible by 10, then it is not divisible by 5'],
            ['Jika suatu nombor boleh dibahagi dengan 5, maka ia boleh dibahagi dengan 10', 'Jika suatu nombor tidak boleh dibahagi dengan 10, maka ia tidak boleh dibahagi dengan 5', 'Jika suatu nombor tidak boleh dibahagi dengan 5, maka ia tidak boleh dibahagi dengan 10', 'Jika suatu nombor boleh dibahagi dengan 10, maka ia tidak boleh dibahagi dengan 5'],
            'A', null,
            'Step 1: The converse swaps p and q. Step 2: p: divisible by 10, q: divisible by 5. Step 3: The converse is "If divisible by 5, then divisible by 10". Answer: A.',
            'Langkah 1: Konvers menukar p dan q. Langkah 2: p: boleh dibahagi dengan 10, q: boleh dibahagi dengan 5. Langkah 3: Konvers ialah "Jika boleh dibahagi dengan 5, maka boleh dibahagi dengan 10". Jawapan: A.');

        $this->add('medium', 'mcq',
            'What is the inverse of "If a shape is a square, then it has four sides"?',
            'Apakah songsangan (inverse) bagi "Jika suatu bentuk ialah segi empat sama, maka ia mempunyai empat sisi"?',
            ['If a shape has four sides, then it is a square', 'If a shape is not a square, then it does not have four sides', 'If a shape does not have four sides, then it is not a square', 'If a shape is a square, then it does not have four sides'],
            ['Jika suatu bentuk mempunyai empat sisi, maka ia ialah segi empat sama', 'Jika suatu bentuk bukan segi empat sama, maka ia tidak mempunyai empat sisi', 'Jika suatu bentuk tidak mempunyai empat sisi, maka ia bukan segi empat sama', 'Jika suatu bentuk ialah segi empat sama, maka ia tidak mempunyai empat sisi'],
            'B', null,
            'Step 1: The inverse negates both p and q. Step 2: ~p: not a square. ~q: does not have four sides. Step 3: The inverse is "If not a square, then not four sides". Answer: B.',
            'Langkah 1: Inverse menafikan kedua-dua p dan q. Langkah 2: ~p: bukan segi empat sama. ~q: tidak mempunyai empat sisi. Langkah 3: Inverse ialah "Jika bukan segi empat sama, maka tidak mempunyai empat sisi". Jawapan: B.');

        $this->add('medium', 'mcq',
            'What is the contrapositive of "If it is Monday, then the shop is open"?',
            'Apakah kontrapositif bagi "Jika hari ini hari Isnin, maka kedai dibuka"?',
            ['If the shop is open, then it is Monday', 'If it is not Monday, then the shop is not open', 'If the shop is not open, then it is not Monday', 'If it is Monday, then the shop is not open'],
            ['Jika kedai dibuka, maka hari ini hari Isnin', 'Jika hari ini bukan hari Isnin, maka kedai tidak dibuka', 'Jika kedai tidak dibuka, maka hari ini bukan hari Isnin', 'Jika hari ini hari Isnin, maka kedai tidak dibuka'],
            'C', null,
            'Step 1: The contrapositive swaps p and q, then negates both. Step 2: ~q: the shop is not open. ~p: it is not Monday. Step 3: The contrapositive is "If the shop is not open, then it is not Monday". Answer: C.',
            'Langkah 1: Kontrapositif menukar p dan q, kemudian menafikan kedua-duanya. Langkah 2: ~q: kedai tidak dibuka. ~p: bukan hari Isnin. Langkah 3: Kontrapositif ialah "Jika kedai tidak dibuka, maka hari ini bukan hari Isnin". Jawapan: C.');

        $this->add('medium', 'true_false',
            'The implication "If 4 is odd, then 4 is a prime number" is true.',
            'Implikasi "Jika 4 ialah nombor ganjil, maka 4 ialah nombor perdana" adalah benar.',
            null, null, 'True', null,
            'Step 1: p: 4 is odd, which is False. Step 2: An implication is false only when p is true and q is false. Step 3: Since p is false, the implication is True.',
            'Langkah 1: p: 4 ialah ganjil, iaitu Palsu. Langkah 2: Implikasi palsu hanya apabila p benar dan q palsu. Langkah 3: Oleh kerana p palsu, implikasi itu Benar.');

        $this->add('medium', 'numerical',
            'Look at the pattern: 2(1) + 1 = 3, 2(2) + 1 = 5, 2(3) + 1 = 7, 2(4) + 1 = 9. Using the general rule 2n + 1, find the value when n = 10.',
            'Lihat corak: 2(1) + 1 = 3, 2(2) + 1 = 5, 2(3) + 1 = 7, 2(4) + 1 = 9. Menggunakan peraturan umum 2n + 1, cari nilai apabila n = 10.',
            null, null, '21', null,
            'Step 1: The general conclusion from the pattern is 2n + 1. Step 2: Substitute n = 10. Step 3: 2(10) + 1 = 21. Answer: 21.',
            'Langkah 1: Kesimpulan umum daripada corak ialah 2n + 1. Langkah 2: Gantikan n = 10. Langkah 3: 2(10) + 1 = 21. Jawapan: 21.');

        $this->add('medium', 'multiple_response',
            'p: 6 is even (True). q: 6 is a multiple of 4 (False). Which of the following are true? Select all that apply.',
            'p: 6 ialah genap (Benar). q: 6 ialah gandaan 4 (Palsu). Yang manakah antara berikut benar? Pilih semua yang berkenaan.',
            ['p or q', 'p and q', 'not q', 'If p then q'],
            ['p atau q', 'p dan q', 'bukan q', 'Jika p maka q'],
            'A', 'A,C',
            'Step 1: A: True or False = True. Correct. Step 2: B: True and False = False. Wrong. Step 3: C: not False = True. Correct. Step 4: D: True then False = False. Wrong. Answer: A and C.',
            'Langkah 1: A: Benar atau Palsu = Benar. Betul. Langkah 2: B: Benar dan Palsu = Palsu. Salah. Langkah 3: C: bukan Palsu = Benar. Betul. Langkah 4: D: Benar maka Palsu = Palsu. Salah. Jawapan: A dan C.');

        $this->add('medium', 'mcq',
            'Premise 1: All Form 4 students take Mathematics. Premise 2: Amir is a Form 4 student. What is the conclusion?',
            'Premis 1: Semua pelajar Tingkatan 4 mengambil Matematik. Premis 2: Amir ialah pelajar Tingkatan 4. Apakah kesimpulannya?',
            ['Amir does not take Mathematics', 'Amir takes Mathematics', 'All students are Amir', 'Some Form 4 students do not take Mathematics'],
            ['Amir tidak mengambil Matematik', 'Amir mengambil Matematik', 'Semua pelajar ialah Amir', 'Sesetengah pelajar Tingkatan 4 tidak mengambil Matematik'],
            'B', null,
            'Step 1: This is Form 1: All A is B, C is A, so C is B. Step 2: A: Form 4 students. B: take Mathematics. C: Amir. Step 3: Amir takes Mathematics. Answer: B.',
            'Langkah 1: Ini Bentuk 1: Semua A ialah B, C ialah A, maka C ialah B. Langkah 2: A: pelajar Tingkatan 4. B: mengambil Matematik. C: Amir. Langkah 3: Amir mengambil Matematik. Jawapan: B.');

        $this->add('medium', 'mcq',
            'Premise 1: If the battery is charged, then the phone turns on. Premise 2: The phone does not turn on. What is the conclusion?',
            'Premis 1: Jika bateri dicas, maka telefon dihidupkan. Premis 2: Telefon tidak dapat dihidupkan. Apakah kesimpulannya?',
            ['The battery is charged', 'The battery is not charged', 'The phone is broken', 'The phone turns on later'],
            ['Bateri dicas', 'Bateri tidak dicas', 'Telefon rosak', 'Telefon dihidupkan kemudian'],
            'B', null,
            'Step 1: This is Form 3 (Modus Tollens): If p then q, not q, so not p. Step 2: p: battery charged. q: phone turns on. Step 3: Not q is true, so not p: the battery is not charged. Answer: B.',
            'Langkah 1: Ini Bentuk 3 (Modus Tolens): Jika p maka q, bukan q, maka bukan p. Langkah 2: p: bateri dicas. q: telefon dihidupkan. Langkah 3: Bukan q benar, maka bukan p: bateri tidak dicas. Jawapan: B.');

        // ───────────── HARD (10) — Analyse / Evaluate ─────────────
        $this->add('hard', 'mcq',
            'A student writes the converse of "If x is a multiple of 6, then x is a multiple of 3" as "If x is not a multiple of 6, then x is not a multiple of 3". What is the mistake?',
            'Seorang pelajar menulis konvers bagi "Jika x ialah gandaan 6, maka x ialah gandaan 3" sebagai "Jika x bukan gandaan 6, maka x bukan gandaan 3". Apakah kesilapannya?',
            ['The student wrote the inverse, not the converse', 'The student wrote the contrapositive, not the converse', 'There is no mistake', 'The student should not use the word "not"'],
            ['Pelajar menulis inverse, bukan konvers', 'Pelajar menulis kontrapositif, bukan konvers', 'Tiada kesilapan', 'Pelajar tidak sepatutnya menggunakan perkataan "bukan"'],
            'A', null,
            'Step 1: The converse only swaps p and q: "If x is a multiple of 3, then x is a multiple of 6". Step 2: The student negated both p and q without swapping. Step 3: That is the inverse. Answer: A.',
            'Langkah 1: Konvers hanya menukar p dan q: "Jika x ialah gandaan 3, maka x ialah gandaan 6". Langkah 2: Pelajar menafikan kedua-dua p dan q tanpa menukar. Langkah 3: Itu ialah inverse. Jawapan: A.');

        $this->add('hard', 'mcq',
            'A student claims: "If p → q is true, then q → p must also be true." Here p: x is a multiple of 6 and q: x is a multiple of 3. Which value of x is a counterexample to the claim?',
            'Seorang pelajar mendakwa: "Jika p → q benar, maka q → p mesti juga benar." Di sini p: x ialah gandaan 6 dan q: x ialah gandaan 3. Nilai x manakah ialah contoh penyangkal kepada dakwaan itu?',
            ['x = 6', 'x = 9', 'x = 12', 'x = 18'], null,
            'B', null,
            'Step 1: A counterexample makes q → p false, so q is true and p is false. Step 2: x = 9 is a multiple of 3 (q true) but not a multiple of 6 (p false). Step 3: The others are multiples of both 6 and 3. Answer: B.',
            'Langkah 1: Contoh penyangkal menjadikan q → p palsu, maka q benar dan p palsu. Langkah 2: x = 9 ialah gandaan 3 (q benar) tetapi bukan gandaan 6 (p palsu). Langkah 3: Yang lain ialah gandaan 6 dan 3. Jawapan: B.');

        $this->add('hard', 'mcq',
            'Premise 1: If it rains, then the road is wet. Premise 2: The road is wet. Conclusion: It rains. Which statement about this argument is correct?',
            'Premis 1: Jika hujan, maka jalan basah. Premis 2: Jalan basah. Kesimpulan: Hujan turun. Pernyataan manakah tentang hujah ini yang betul?',
            ['Valid, because it uses Modus Ponens', 'Valid, because it uses Modus Tollens', 'Not valid, because the road may be wet for other reasons', 'Not valid, because Premise 1 is false'],
            ['Sah, kerana menggunakan Modus Ponen', 'Sah, kerana menggunakan Modus Tolens', 'Tidak sah, kerana jalan mungkin basah atas sebab lain', 'Tidak sah, kerana Premis 1 palsu'],
            'C', null,
            'Step 1: Premise 2 confirms q (the road is wet), not p. Step 2: Modus Ponens needs p to be true, and Modus Tollens needs not q. Step 3: Here neither form is used. The road could be wet from a water pipe, so the conclusion does not follow. Answer: C.',
            'Langkah 1: Premis 2 mengesahkan q (jalan basah), bukan p. Langkah 2: Modus Ponen memerlukan p benar dan Modus Tolens memerlukan bukan q. Langkah 3: Di sini tiada bentuk yang digunakan. Jalan mungkin basah akibat paip air, maka kesimpulan tidak mengikut. Jawapan: C.');

        $this->add('hard', 'mcq',
            'Which argument is valid but NOT sound?',
            'Hujah manakah sah tetapi TIDAK kukuh (tepat)?',
            ['All birds can fly. A penguin is a bird. So a penguin can fly.', 'All cats are animals. Tom is a cat. So Tom is an animal.', 'All fish live in water. A shark is a fish. So a shark lives in water.', 'If x is even, then x is divisible by 2. 8 is even. So 8 is divisible by 2.'],
            ['Semua burung boleh terbang. Penguin ialah burung. Jadi penguin boleh terbang.', 'Semua kucing ialah haiwan. Tom ialah kucing. Jadi Tom ialah haiwan.', 'Semua ikan hidup di dalam air. Jerung ialah ikan. Jadi jerung hidup di dalam air.', 'Jika x genap, maka x boleh dibahagi dengan 2. 8 ialah genap. Jadi 8 boleh dibahagi dengan 2.'],
            'A', null,
            'Step 1: A valid argument has a correct form. A sound argument is valid and also has true premises. Step 2: A has a correct form (All A is B), so it is valid. Step 3: But Premise 1 is false because not all birds can fly. So A is valid but not sound. Step 4: B, C and D are valid with true premises. Answer: A.',
            'Langkah 1: Hujah sah mempunyai bentuk yang betul. Hujah kukuh ialah sah dan juga mempunyai premis yang benar. Langkah 2: A mempunyai bentuk yang betul (Semua A ialah B), maka ia sah. Langkah 3: Tetapi Premis 1 palsu kerana bukan semua burung boleh terbang. Maka A sah tetapi tidak kukuh. Langkah 4: B, C dan D sah dengan premis yang benar. Jawapan: A.');

        $this->add('hard', 'mcq',
            'Premise 1: 2 is even. Premise 2: 4 is even. Premise 3: 6 is even. Premise 4: 8 is even. Conclusion: All numbers are even. Which statement is correct?',
            'Premis 1: 2 ialah genap. Premis 2: 4 ialah genap. Premis 3: 6 ialah genap. Premis 4: 8 ialah genap. Kesimpulan: Semua nombor ialah genap. Pernyataan manakah yang betul?',
            ['The argument is strong because there are four examples', 'The argument is weak because 3 is a counterexample', 'The argument is valid and sound', 'The argument is deductive'],
            ['Hujah ini kuat kerana terdapat empat contoh', 'Hujah ini lemah kerana 3 ialah contoh penyangkal', 'Hujah ini sah dan kukuh', 'Hujah ini deduktif'],
            'B', null,
            'Step 1: This is an inductive argument: a general conclusion from specific premises. Step 2: All the examples are even numbers only, so the sample is too narrow. Step 3: 3 is a number that is not even, which breaks the conclusion. So the argument is weak. Answer: B.',
            'Langkah 1: Ini hujah induktif: kesimpulan umum daripada premis khusus. Langkah 2: Semua contoh hanyalah nombor genap, maka sampel terlalu sempit. Langkah 3: 3 ialah nombor yang bukan genap, yang membatalkan kesimpulan. Maka hujah ini lemah. Jawapan: B.');

        $this->add('hard', 'numerical',
            'Look at the pattern: 1 + 3 = 4, 1 + 3 + 5 = 9, 1 + 3 + 5 + 7 = 16. Use the pattern to find the sum of the first 12 odd numbers.',
            'Lihat corak: 1 + 3 = 4, 1 + 3 + 5 = 9, 1 + 3 + 5 + 7 = 16. Gunakan corak itu untuk mencari hasil tambah 12 nombor ganjil yang pertama.',
            null, null, '144', null,
            'Step 1: 4 = 2², 9 = 3², 16 = 4². Step 2: The sum of the first n odd numbers is n². Step 3: For n = 12, the sum is 12² = 144. Answer: 144.',
            'Langkah 1: 4 = 2², 9 = 3², 16 = 4². Langkah 2: Hasil tambah n nombor ganjil yang pertama ialah n². Langkah 3: Untuk n = 12, hasil tambahnya ialah 12² = 144. Jawapan: 144.');

        $this->add('hard', 'true_false',
            'The contrapositive of an implication always has the same truth value as the original implication.',
            'Kontrapositif bagi suatu implikasi sentiasa mempunyai nilai kebenaran yang sama dengan implikasi asal.',
            null, null, 'True', null,
            'Step 1: The contrapositive of p → q is ~q → ~p. Step 2: They are logically equivalent, so they are both true or both false. True.',
            'Langkah 1: Kontrapositif bagi p → q ialah ~q → ~p. Langkah 2: Kedua-duanya setara secara logik, maka kedua-duanya benar atau kedua-duanya palsu. Benar.');

        $this->add('hard', 'true_false',
            'The converse of an implication always has the same truth value as the original implication.',
            'Konvers bagi suatu implikasi sentiasa mempunyai nilai kebenaran yang sama dengan implikasi asal.',
            null, null, 'False', null,
            'Step 1: Take "If x is a multiple of 6, then x is a multiple of 3", which is true. Step 2: Its converse "If x is a multiple of 3, then x is a multiple of 6" is false for x = 9. Step 3: So they do not always match. False.',
            'Langkah 1: Ambil "Jika x ialah gandaan 6, maka x ialah gandaan 3", yang benar. Langkah 2: Konversnya "Jika x ialah gandaan 3, maka x ialah gandaan 6" adalah palsu bagi x = 9. Langkah 3: Maka kedua-duanya tidak selalu sama. Palsu.');

        $this->add('hard', 'multiple_response',
            'p: 8 is a multiple of 4 (True). q: 8 is a multiple of 3 (False). Which of the following are true? Select all that apply.',
            'p: 8 ialah gandaan 4 (Benar). q: 8 ialah gandaan 3 (Palsu). Yang manakah antara berikut benar? Pilih semua yang berkenaan.',
            ['p → q', 'q → p', '~q → ~p', '~p → ~q'], null,
            'B', 'B,D',
            'Step 1: A: p → q = True → False = False. Wrong. Step 2: B: q → p = False → True = True. Correct. Step 3: C: ~q → ~p = True → False = False. Wrong. Step 4: D: ~p → ~q = False → True = True. Correct. Answer: B and D.',
            'Langkah 1: A: p → q = Benar → Palsu = Palsu. Salah. Langkah 2: B: q → p = Palsu → Benar = Benar. Betul. Langkah 3: C: ~q → ~p = Benar → Palsu = Palsu. Salah. Langkah 4: D: ~p → ~q = Palsu → Benar = Benar. Betul. Jawapan: B dan D.');

        $this->add('hard', 'multiple_response',
            'Which of the following claims about the implication "If p then q" are correct? Select all that apply.',
            'Dakwaan manakah tentang implikasi "Jika p maka q" yang betul? Pilih semua yang berkenaan.',
            ['The contrapositive is equivalent to the original', 'The converse is equivalent to the original', 'The converse and the inverse are equivalent to each other', 'The inverse is equivalent to the original'],
            ['Kontrapositif setara dengan asal', 'Konvers setara dengan asal', 'Konvers dan inverse setara antara satu sama lain', 'Inverse setara dengan asal'],
            'A', 'A,C',
            'Step 1: A: ~q → ~p always matches p → q. Correct. Step 2: B: The converse can differ from the original. Wrong. Step 3: C: The converse q → p and inverse ~p → ~q are contrapositives of each other, so they match. Correct. Step 4: D: The inverse matches the converse, not the original. Wrong. Answer: A and C.',
            'Langkah 1: A: ~q → ~p sentiasa sama dengan p → q. Betul. Langkah 2: B: Konvers boleh berbeza daripada asal. Salah. Langkah 3: C: Konvers q → p dan inverse ~p → ~q ialah kontrapositif antara satu sama lain, maka kedua-duanya sama. Betul. Langkah 4: D: Inverse sama dengan konvers, bukan dengan asal. Salah. Jawapan: A dan C.');
    }
}