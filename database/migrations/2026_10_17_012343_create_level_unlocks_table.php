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
    Schema::create('level_unlocks', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('topic_id')->constrained()->onDelete('cascade');
        $table->enum('difficulty', ['easy', 'medium', 'hard']);
        $table->timestamps();

        $table->unique(['user_id', 'topic_id', 'difficulty']);
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_unlocks');
    }
};
