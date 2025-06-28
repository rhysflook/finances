<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'reason',
        'amount',
        'category',
        'date',
        'currency_id',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
