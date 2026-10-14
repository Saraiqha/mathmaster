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
        'name' => 'Quadratic Functions and Equations',
        'name_bm' => 'Fungsi dan Persamaan Kuadratik',
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
        'name' => 'Operation on Sets',
        'name_bm' => 'Operasi pada Set',
        'description' => 'Understanding union, intersection and complement of sets.',
        'description_bm' => 'Memahami kesatuan, persilangan dan pelengkap set.',
        'order' => 4,
    ],
    [
        'name' => 'Network in Graph Theory',
        'name_bm' => 'Rangkaian dalam Teori Graf',
        'description' => 'Study of networks, vertices, edges and graph traversal.',
        'description_bm' => 'Kajian rangkaian, bucu, tepi dan penelusuran graf.',
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