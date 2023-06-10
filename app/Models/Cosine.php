<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cosine extends Model
{
    protected $table = 'cosine';

    protected $fillable = ['value', 'result'];
}
