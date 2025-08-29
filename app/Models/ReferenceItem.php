<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceItem extends Model
{
    protected $fillable = ['name', 'description', 'url', 'project_id'];

    public function files()
    {
        return $this->hasMany(ReferenceItemFile::class, 'reference_item_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
