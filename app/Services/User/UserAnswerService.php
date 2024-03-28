<?php

namespace App\Services\User;

use App\Models\UserAnswer;
use App\Services\SetModelTrait;
use Illuminate\Http\JsonResponse;

class UserAnswerService
{
    use SetModelTrait;

    protected $model;

    public function __construct(UserAnswer $model)
    {
        $this->model = $model;
    }

    public function storeAnswer(array $request): JsonResponse
    {
        $request['user_id'] = auth()->user()->id;
        $this->model->query()->create($request);
        return response()->json(['message' => 'Answer Stored']);
    }
}
