<?php

namespace Database\Factories;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionsFactory extends Factory
{
    protected $model = Questions::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'question_type_id' => $this->faker->numberBetween(1, 3),
            'duration_id' => $this->faker->numberBetween(1, 4),
            'answer_explanation' => $this->faker->realText,
        ];
    }
}
