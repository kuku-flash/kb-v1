<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;
    protected $fillable = ['county', 'country'];

    public function city() {
        return $this->hasMany('App\Models\City', 'county_id');
    }
}
