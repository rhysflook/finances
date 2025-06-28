<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillPayment extends Model
{
    protected $fillable = [
        'bill_id',
        'amount',
        'date',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
