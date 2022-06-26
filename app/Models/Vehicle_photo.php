<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'photo_postion',
        'vehicle_id',
     
    ];
    use HasFactory;

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
}
