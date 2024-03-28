<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DurationSeeder::class);
        $this->call(QuestionTypeSeeder::class);
        $this->call(ExamSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}
