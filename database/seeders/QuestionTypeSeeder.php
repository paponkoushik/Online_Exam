<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Seeder;

class QuestionTypeSeeder extends Seeder
{
    public function run()
    {
        QuestionType::query()->insert([
            ['title' => 'Multiple Choice', 'type' => 'multiple_choice', 'created_at' => now()],
            ['title' => 'True or False', 'type' => 'radio', 'created_at' => now()],
            ['title' => 'Fill In The Blanks', 'type' => 'gap_fill', 'created_at' => now()],
        ]);
    }
}
