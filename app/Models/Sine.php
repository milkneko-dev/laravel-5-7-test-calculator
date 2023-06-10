<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sine extends Model
{
    protected $table = 'sine';

    protected $fillable = ['value', 'result'];
}
