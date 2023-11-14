<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'ads_status', 
        'ads_featured', 
        'ads_duration', 
        'category_id',
        'city_id',
        'package_id',
        'user_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function city () {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function package () {
        return $this->belongsTo(Package::class);
    }
    public function sparePart () {
        return $this->belongsTo(SparePart::class);
    }
    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function invoice (){
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
    
       public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
    


    
    
  
}
