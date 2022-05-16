<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'ad_status', 
        'ad_featured', 
        'ad_duration', 
        'category_id',
        'city_id',
        'package_id',
        'user_id'
    ];

    public function category () {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function city () {
        return $this->belongsTo('App\Models\City', 'city_id');
    }
    public function package () {
        return $this->belongsTo('App\Models\Package', 'package_id');
    }
    public function user () {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function listing () {
        return $this->hasMany(Vehicle::class);
    }
  
}
