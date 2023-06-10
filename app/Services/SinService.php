<?php

namespace App\Services;

use App\Models\Sine;

class SinService
{
    public function calculate($value)
    {
        $sine = Sine::where('value', $value)->first();

        return $sine ? $sine->result : null;
    }
}
