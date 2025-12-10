<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $fillable = [
        'payment_id',
        'transaction_amount',
        'transaction_date',
        'transaction_type',
    ];


    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
