<?php

namespace App\Services;

use App\Models\Cosine;

class CosineService
{
    public function calculate($value)
    {
        $cosine = Cosine::where('value', $value)->first();

        return $cosine ? $cosine->result : null;
    }
}
