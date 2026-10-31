<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class FixTrueFalseNumericalSeeder extends Seeder
{
    public function run(): void
    {
        $questions = Question::where('type', 'numerical')
            ->where('question_text', 'like', '%1 for True%')
            ->get();

        foreach ($questions as $q) {
            $isTrue = trim($q->correct_answer) === '1';

            $q->update([
                'type' => 'true_false',
                'question_text' => trim(preg_replace('/\s*Enter 1 for True and 0 for False\.?/u', '', $q->question_text)),
                'question_text_bm' => trim(preg_replace('/\s*Masukkan 1[^.]*\.?/u', '', $q->question_text_bm)),
                'correct_answer' => $isTrue ? 'True' : 'False',
                'solution_steps' => str_replace(['Answer: 1', 'Answer: 0'], ['Answer: True', 'Answer: False'], $q->solution_steps),
                'solution_steps_bm' => str_replace(['Jawapan: 1', 'Jawapan: 0'], ['Jawapan: Benar', 'Jawapan: Palsu'], $q->solution_steps_bm),
            ]);

            $this->command->info($q->id . ': ' . $q->question_text . ' => ' . $q->correct_answer);
        }

        $this->command->info('Converted ' . $questions->count() . ' questions.');
    }
}