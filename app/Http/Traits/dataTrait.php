<?php

namespace App\Http\Traits;

trait DataTrait{

    public function graveData($model)
    {
        return $model::all();
    }
}