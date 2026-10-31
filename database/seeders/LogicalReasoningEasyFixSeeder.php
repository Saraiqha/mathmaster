<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Topic;

class LogicalReasoningEasyFixSeeder extends Seeder
{
    public function run(): void
    {
        $topicId = Topic::where('name', 'Logical Reasoning')->first()->id;

        $rows = [
            [
                'type' => 'mcq',
                'question_text' => 'Which sentence is NOT a statement?',
                'question_text_bm' => 'Ayat manakah BUKAN pernyataan?',
                'opts' => ['The sun rises in the east.', '5 is greater than 9.', 'Please sit down.', 'A triangle has three sides.'],
                'opts_bm' => ['Matahari terbit di timur.', '5 lebih besar daripada 9.', 'Sila duduk.', 'Segi tiga mempunyai tiga sisi.'],
                'correct_answer' => 'C',
                'correct_answers' => null,
                'solution_steps' => 'Step 1: A statement must be clearly true or false. Step 2: A, B and D can each be decided as true or false. Step 3: C is a request, so it cannot be true or false. Answer: C.',
                'solution_steps_bm' => 'Langkah 1: Pernyataan mestilah jelas benar atau palsu. Langkah 2: A, B dan D masing-masing boleh ditentukan benar atau palsu. Langkah 3: C ialah permintaan, maka ia tidak boleh benar atau palsu. Jawapan: C.',
            ],
            [
                'type' => 'true_false',
                'question_text' => 'The negation of a true statement is always a false statement.',
                'question_text_bm' => 'Negasi bagi pernyataan yang benar sentiasa merupakan pernyataan yang palsu.',
                'opts' => [null, null, null, null],
                'opts_bm' => [null, null, null, null],
                'correct_answer' => 'True',
                'correct_answers' => null,
                'solution_steps' => 'Step 1: Negation reverses the truth value. Step 2: If a statement is true, its negation is false. True.',
                'solution_steps_bm' => 'Langkah 1: Negasi membalikkan nilai kebenaran. Langkah 2: Jika pernyataan benar, negasinya palsu. Benar.',
            ],
            [
                'type' => 'mcq',
                'question_text' => 'The statement p is False. What is the truth value of ~p?',
                'question_text_bm' => 'Pernyataan p adalah Palsu. Apakah nilai kebenaran bagi ~p?',
                'opts' => ['True', 'False', 'Both true and false', 'It cannot be known'],
                'opts_bm' => ['Benar', 'Palsu', 'Benar dan palsu', 'Tidak dapat diketahui'],
                'correct_answer' => 'A',
                'correct_answers' => null,
                'solution_steps' => 'Step 1: ~p is the negation of p. Step 2: Negation reverses the truth value. Step 3: p is False, so ~p is True. Answer: A.',
                'solution_steps_bm' => 'Langkah 1: ~p ialah negasi bagi p. Langkah 2: Negasi membalikkan nilai kebenaran. Langkah 3: p Palsu, maka ~p Benar. Jawapan: A.',
            ],
        ];

        foreach ($rows as $r) {
            $q = Question::firstOrCreate(
                ['topic_id' => $topicId, 'difficulty' => 'easy', 'question_text' => $r['question_text']],
                [
                    'type' => $r['type'],
                    'question_text_bm' => $r['question_text_bm'],
                    'option_a' => $r['opts'][0], 'option_b' => $r['opts'][1], 'option_c' => $r['opts'][2], 'option_d' => $r['opts'][3],
                    'option_a_bm' => $r['opts_bm'][0], 'option_b_bm' => $r['opts_bm'][1], 'option_c_bm' => $r['opts_bm'][2], 'option_d_bm' => $r['opts_bm'][3],
                    'correct_answer' => $r['correct_answer'],
                    'correct_answers' => $r['correct_answers'],
                    'solution_steps' => $r['solution_steps'],
                    'solution_steps_bm' => $r['solution_steps_bm'],
                ]
            );
            $this->command->info(($q->wasRecentlyCreated ? 'Added: ' : 'Already existed: ') . $r['question_text']);
        }
    }
}