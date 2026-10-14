<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\DifficultyLevel;

class TopicSeeder extends Seeder
{
    public function run(): void
    {
        $topics = [
            [
                'name' => 'Quadratic Functions',
                'name_bm' => 'Fungsi Kuadratik',
                'description' => 'Study of quadratic expressions, equations and graphs.',
                'description_bm' => 'Kajian ungkapan kuadratik, persamaan dan graf.',
                'order' => 1,
            ],
            [
                'name' => 'Number Bases',
                'name_bm' => 'Asas Nombor',
                'description' => 'Understanding number systems in different bases.',
                'description_bm' => 'Memahami sistem nombor dalam pelbagai asas.',
                'order' => 2,
            ],
            [
                'name' => 'Logical Reasoning',
                'name_bm' => 'Penaakulan Logik',
                'description' => 'Study of statements, arguments and logical deduction.',
                'description_bm' => 'Kajian pernyataan, hujah dan deduksi logik.',
                'order' => 3,
            ],
            [
                'name' => 'Straight Lines',
                'name_bm' => 'Garis Lurus',
                'description' => 'Understanding gradients, equations and graphs of straight lines.',
                'description_bm' => 'Memahami kecerunan, persamaan dan graf garis lurus.',
                'order' => 4,
            ],
            [
                'name' => 'Statistics',
                'name_bm' => 'Statistik',
                'description' => 'Collection, organisation and interpretation of data.',
                'description_bm' => 'Pengumpulan, penyusunan dan pentafsiran data.',
                'order' => 5,
            ],
        ];

        foreach ($topics as $topicData) {
            $topic = Topic::create($topicData);

            foreach (['easy', 'medium', 'hard'] as $level) {
                DifficultyLevel::create([
                    'topic_id' => $topic->id,
                    'level' => $level,
                    'is_active' => true,
                ]);
            }
        }
    }
}