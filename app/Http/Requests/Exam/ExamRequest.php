<?php

namespace App\Http\Requests\Exam;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'is_total_duration' => 'required|boolean',
            'duration_id' => 'sometimes|numeric',
        ];
    }
}
