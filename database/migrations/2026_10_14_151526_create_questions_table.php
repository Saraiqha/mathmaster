<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('questions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('topic_id')->constrained()->onDelete('cascade');
        $table->enum('difficulty', ['easy', 'medium', 'hard']);
        $table->enum('type', ['mcq', 'multiple_response', 'numerical', 'true_false']);
        $table->text('question_text');
        $table->text('question_text_bm');
        $table->text('option_a')->nullable();
        $table->text('option_b')->nullable();
        $table->text('option_c')->nullable();
        $table->text('option_d')->nullable();
        $table->text('option_a_bm')->nullable();
        $table->text('option_b_bm')->nullable();
        $table->text('option_c_bm')->nullable();
        $table->text('option_d_bm')->nullable();
        $table->string('correct_answer');
        $table->text('solution_steps');
        $table->text('solution_steps_bm');
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
