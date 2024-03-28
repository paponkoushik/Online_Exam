<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    protected $model = Exam::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'is_total_duration' => $this->faker->boolean,
            'duration_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
