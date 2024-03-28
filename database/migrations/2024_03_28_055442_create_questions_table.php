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
            $table->string('title');
            $table->foreignId('question_type_id');
            $table->foreignId('duration_id');
            $table->text('answer_explanation')->nullable();
            $table->timestamps();

            $table->foreign('question_type_id')
                ->references('id')
                ->on('question_types')
                ->onDelete('no action');

            $table->foreign('duration_id')
                ->references('id')
                ->on('durations')
                ->onDelete('no action');
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
