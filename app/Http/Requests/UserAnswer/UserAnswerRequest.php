<?php

namespace App\Http\Requests\UserAnswer;

use Illuminate\Foundation\Http\FormRequest;

class UserAnswerRequest extends FormRequest
{
    public function rule(): array
    {
        return [
            'answer' => 'sometimes|string',
            'question_id' => 'required|numerous',
            'exam_id' => 'required|numerous',
        ];
    }
}
