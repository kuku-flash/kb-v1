<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'ad_type',
        'year_of_build',
        'is_carhire',
        'condition',
        'mileage',
        'transmission',
        'fuel_type',
        'exchange',
        'price',
        'description',
        'body_type',
        'duty_type',
        'interior_type',
        'engine_size',
        'address',
    ];

    public function listing(){
        return $this->belongsTo(Listing::class, 'listing_id');
    }

    use HasFactory;
}
