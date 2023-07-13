<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
        'vehicle_type',
        'front_img',
        'back_img',
        'right_img',
        'left_img',
        'interiorf_img',
        'interiorb_img',
        'engine_img',
        'opt_img1',
        'opt_img2',
        'opt_img3',
        'instagram_link',
        'facebook_link',
        'youtube_link',
        'color',
        'views',
        

        
    ];

    public function listing(){
        return $this->hasMany(Listing::class, 'listing_id');
    }
    public function vehiclephotos(){
        return $this->hasMany(Vehicle_photo::class, 'vehicle_id');
    }
    public function carmodel(){
        return $this->belongsTo(Carmodel::class, 'model_id');
    }

    public function scopeFilterByRequest($query, Request $request)
    {
        if ($request->input('model_id')) {
            $query->where('model_id', '=', $request->input('model_id'));
        }

       

        return $query;
    }
 



    use HasFactory;
}
