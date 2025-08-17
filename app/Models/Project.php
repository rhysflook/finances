<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description'];

    public function inItems()
    {
        return $this->hasMany(InItem::class);
    }

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    public function incubationItems()
    {
        return $this->hasMany(IncubationItem::class);
    }

    public function scheduledItems()
    {
        return $this->hasMany(ScheduledItem::class);
    }

    public function referenceItems()
    {
        return $this->hasMany(ReferenceItem::class);
    }

    public function lists()
    {
        return $this->hasMany(MyList::class);
    }
}
