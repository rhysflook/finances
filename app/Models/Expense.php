<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'category',
        'subcategory',
        'vendor',
        'description',
        'currency_id',
        'date',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
