<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $fillable = [
        'name',
        'currency_id',
        'expiry_date',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}   
