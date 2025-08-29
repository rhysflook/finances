<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    protected $table = 'my_lists';

    protected $fillable = [
        'name',
        'description',
        'project_id'
    ];

    public function items()
    {
        return $this->hasMany(MyListItem::class, 'my_list_id');
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
