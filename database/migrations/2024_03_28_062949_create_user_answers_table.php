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
        Schema::create('user_answers', function (Blueprint $table) {
            $table->id();
            $table->string('answer')->nullable();
            $table->foreignId('question_id');
            $table->foreignId('exam_id');
            $table->foreignId('user_id');
            $table->timestamps();

            $table->foreign('question_id')
                ->references('id')
                ->on('questions');

            $table->foreign('exam_id')
                ->references('id')
                ->on('exams');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_answers');
    }
};
