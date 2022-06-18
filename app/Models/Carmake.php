<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmake extends Model
{
    use HasFactory;
    protected $fillable = [
        'make',
        ];
        public function carmodel () {
            return $this->hasMany( 'App\Models\Carmodel');
        }
}
