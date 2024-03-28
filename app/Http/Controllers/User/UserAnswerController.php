<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAnswer\UserAnswerRequest;
use App\Services\User\UserAnswerService;
use Illuminate\Http\JsonResponse;

class UserAnswerController extends Controller
{
    protected $service;

    public function __construct(UserAnswerService $userService)
    {
        $this->service = $userService;
    }


    public function store(UserAnswerRequest $request): JsonResponse
    {
        return $this->service->storeAnswer($request->only('answer', 'question_id', 'exam_id'));
    }
}
