<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCardPayment extends Model
{
    protected $fillable = [
        'credit_card_id',
        'amount',
        'payment_date',
        'name',
        'category_id',
        // 'sub_category_id',
        'vendor',
        'is_paid'
    ];

    public function creditCard()
    {
        return $this->belongsTo(CreditCard::class);
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
