<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoStep extends Model
{
    protected $fillable = ['todo_id', 'step', 'description', 'sort_order','is_complete'];

    public function todo()
    {
        return $this->belongsTo(Todo::class);
    }
}
