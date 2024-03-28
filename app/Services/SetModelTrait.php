<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

trait SetModelTrait
{
    public function setModel(Model $model): static
    {
        $this->model = $model;

        return $this;
    }
}
