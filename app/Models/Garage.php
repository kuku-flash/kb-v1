<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;
    protected $fillable = [
        'garage_title',
        'garage_location',
        'garage_description',
        'front_img',
        'back_img',
        'right_img',
        'left_img',
        'interiorf_img',
        'interiorb_img',
        'opt_img1',
        'opt_img2',
        'opt_img3',
        'user_id',
    ];

    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }


}
