<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoStep extends Model
{
    protected $fillable = ['todo_id', 'step', 'description', 'is_complete'];
}
