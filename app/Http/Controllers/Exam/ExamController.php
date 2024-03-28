<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Http\Requests\Exam\ExamRequest;
use App\Models\Exam;
use App\Services\Exam\ExamService;
use Illuminate\Http\JsonResponse;

class ExamController extends Controller
{
    protected $service;

    public function __construct(ExamService $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        return $this->service
            ->getExamQuestions();
    }

    public function examQuestions($id): JsonResponse
    {
        return $this->service
            ->getExamQuestions($id);
    }

    public function store(ExamRequest $request): JsonResponse
    {
        return $this
            ->service
            ->store(
                $request->only('title', 'is_total_duration', 'duration')
            );
    }

    public function update(ExamRequest $request, Exam $exam): JsonResponse
    {
        return $this
            ->service
            ->setModel($exam)
            ->update(
                $request->only('title', 'is_total_duration', 'duration')
            );
    }

    public function destroy(Exam $exam): JsonResponse
    {
        $exam->delete();
        return response()->json(['message'=>'data has been deleted'], 201);
    }
}
