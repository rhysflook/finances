<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceItemFile extends Model
{
    protected $fillable = ['reference_item_id', 'file_name', 'file_path'];

    public function referenceItem()
    {
        return $this->belongsTo(ReferenceItem::class, 'reference_item_id');
    }
}
