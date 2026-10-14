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
    Schema::create('quick_revisions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('topic_id')->constrained()->onDelete('cascade');
        $table->text('objectives');
        $table->text('objectives_bm');
        $table->text('key_formulas');
        $table->text('key_formulas_bm');
        $table->text('solving_tips');
        $table->text('solving_tips_bm');
        $table->text('worked_example');
        $table->text('worked_example_bm');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quick_revisions');
    }
};
