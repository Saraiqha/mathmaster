<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        TopicSeeder::class,
        QuickRevisionSeeder::class,
        QuadraticQuestionSeeder::class,
        NumberBasesQuestionSeeder::class,
        LogicalReasoningQuestionSeeder::class,
        OperationSetsQuestionSeeder::class,
        NetworkGraphQuestionSeeder::class,
    ]);
}
}
