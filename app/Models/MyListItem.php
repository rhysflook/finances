<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyListItem extends Model
{
    protected $fillable = ['my_list_id', 'item_name', 'item_description'];

    public function myList()
    {
        return $this->belongsTo(MyList::class, 'my_list_id');
    }
}
