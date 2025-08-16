<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['item', 'is_complete', 'description'];

    public function todoSteps()
    {
        return $this->hasMany(TodoStep::class);
    }
}
