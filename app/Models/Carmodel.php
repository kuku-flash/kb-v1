<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'model_year',
        'make_id',
        ];

    public function carmake () {
        return $this->belongsTo('App\Models\Carmake', 'make_id');
    }
  
}
