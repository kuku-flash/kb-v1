<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_no',
        'bill_to',
        'generate_date',
        'due_date',
        'subtotal',
        'tax',
        'total',
        'paid',
        'status',
        'user_id',
        'package_id',
        'listing_id',

    ];

    public function package () {
        return $this->belongsTo(Package::class, 'package_id');
    }
    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function listing () {
        return $this->belongsTo(Listing::class, 'listing_id');
    }
}
