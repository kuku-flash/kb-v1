<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_date',
        'payment_method',
        'transaction_id',
        'amount',
        'status',
        'invoice_id',
    ];

    public function invoice () {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
}
