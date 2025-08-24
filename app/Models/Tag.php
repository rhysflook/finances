<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name']; 

    public function inItems()
    {
        return $this->belongsToMany(InItem::class);
    }

    public function todos()
    {
        return $this->belongsToMany(Todo::class);
    }

    public function incubationItems()
    {
        return $this->belongsToMany(IncubationItem::class);
    }

    public function referenceItems()
    {
        return $this->belongsToMany(ReferenceItem::class);
    }

    public function myLists()
    {
        return $this->belongsToMany(MyList::class);
    }

    public function scheduledItems()
    {
        return $this->belongsToMany(ScheduledItem::class);
    }
}
