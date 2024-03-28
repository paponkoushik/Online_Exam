<?php

namespace App\Services\Exam;

use App\Models\Exam;
use App\Models\Questions;
use App\Services\SetModelTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;

class ExamService
{
    use SetModelTrait;

    protected $model;

    public function __construct(Exam $model)
    {
        $this->model = $model;
    }

    public function getExamQuestions($id = null): JsonResponse
    {
        $questions = Exam::query()
            ->with(['duration', 'questions', 'questions.type', 'questions.duration'])
            ->when($id, function (Builder $builder) use ($id) {
                $builder->where('id', '=', $id);
            })
            ->paginate(10);

        return response()->json(['data'=>$questions], 200);
    }

    public function store(array $request): JsonResponse
    {
        $this->model = $this->model->query()->create($request);

        return response()->json(['data' => $this->model, 'message' => 'New Exam Created'], 201);
    }

    public function update(array $request): JsonResponse
    {
        $this->model->fill($request)->update();

        return response()->json(['data' => $this->model, 'message' => 'Exam Updated Successfully'], 200);
    }

}
