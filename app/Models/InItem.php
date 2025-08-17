<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InItem extends Model
{
    protected $fillable = ['name', 'description', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
