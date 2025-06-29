<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'category_id',
        'sub_category_id',
        'vendor',
        'description',
        'currency_id',
        'date',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function subCategory()
    // {
    //     return $this->belongsTo(SubCategory::class);
    // }
}
