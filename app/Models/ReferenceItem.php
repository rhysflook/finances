<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceItem extends Model
{
    protected $fillable = ['name', 'description', 'url'];

    public function files()
    {
        return $this->hasMany(ReferenceItemFile::class, 'reference_item_id');
    }
}
