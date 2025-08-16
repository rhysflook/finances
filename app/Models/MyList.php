<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    protected $table = 'my_lists';

    protected $fillable = [
        'name',
        'description',
    ];

    public function items()
    {
        return $this->hasMany(MyListItem::class, 'my_list_id');
    }
}
